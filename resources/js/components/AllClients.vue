<template>
    <div>

        <download-csv
                class   = "btn btn-default"
                :data   = "allClients"
                name    = "filename.csv">

            Download CSV

        </download-csv>
        <h3 class="text-center">All Clients</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Nationality</th>
                <th>Date Of Birth</th>
                <th>Education Background</th>
                <th>Mode of Contact</th>
                <!--                <th>Created At</th>-->
                <!--                <th>Updated At</th>-->
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="client in clients.data" :key="client.id">
                <td>{{ client.id }}</td>
                <td>{{ client.name }}</td>
                <td>{{ client.gender }}</td>
                <td>{{ client.phone }}</td>
                <td>{{ client.email }}</td>
                <td>{{ client.address }}</td>
                <td>{{ client.nationality }}</td>
                <td>{{ client.dob }}</td>
                <td>{{ client.education_background }}</td>
                <td>{{ client.mode_of_contact }}</td>
                <!--                <td>{{ client.created_at }}</td>-->
                <!--                <td>{{ client.updated_at }}</td>-->
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: client.id }}" class="btn btn-primary">
                            <i class="fa fa-trash">Edit</i>
                        </router-link>
                        <button class="btn btn-danger" @click="deletePost(client.id)">Delete</button>
                    </div>
                </td>
            </tr>
            <pagination align="center" :data="clients" @pagination-change-page="getResults"></pagination>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                clients: {
                    type:Object,
                    default:null
                },

                allClients: null,

            }
        },

        mounted()
        {
            this.getResults();
        },
        created() {

            this.axios
                .get("http://task.test/api/export")
                .then(res => {
                    this.allClients = res.data;
                })
        },

        methods: {
            async getResults(page=1) {
                await this.axios.get(`http://task.test/api/clients?page=${page}`).then(({data})=>{
                    this.clients = data
                }).catch(({ response })=>{
                    console.error(response)
                })
            },
            deletePost(id) {
                this.axios
                    .delete(`http://task.test/api/client/delete/${id}`)
                    .then(response => {
                        let i = this.clients.map(item => item.id).indexOf(id);
                        this.clients.splice(i, 1)
                    });
            },

        }

    }
</script>