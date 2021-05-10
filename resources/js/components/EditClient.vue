<template>
    <div>
        <h3 class="text-center">Edit Client</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateClient">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="client.name">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="form-select" aria-label="Gender"  v-model="client.gender">
                            <option selected>Select Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" v-model="client.phone">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" v-model="client.email">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" v-model="client.address">
                    </div>
                    <div class="form-group">
                        <label>nationality</label>
                        <input type="text" class="form-control" v-model="client.nationality">
                    </div>
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control" v-model="client.dob">
                    </div>
                    <div class="form-group">
                        <label>Education Background</label>
                        <input type="text" class="form-control" v-model="client.education_background">
                    </div>
                    <div class="form-group">
                        <label>Mode of Contact</label>
                        <input type="radio" id="email" v-model="client.mode_of_contact" value="email">
                        <label for="email">Email</label><br>
                        <input type="radio" id="phone" v-model="client.mode_of_contact" value="phone">
                        <label for="phone">Phone</label><br>
                        <input type="radio" id="none" v-model="client.mode_of_contact" value="none">
                        <label for="none">None</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Post</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                client: {}
            }
        },
        created() {
            this.axios
                .get(`http://task.test/api/client/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.client = response.data;
                });
        },
        methods: {
            updateClient() {
                this.axios
                    .post(`http://task.test/api/client/update/${this.$route.params.id}`, this.client)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>