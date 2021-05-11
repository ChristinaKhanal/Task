<template>
    <div class="col-md-12">
        <h3 class="text-center">Add Client</h3>
        <p v-if="errors.length">
            <b>Please correct the following error(s):</b>
        <ul>
            <li v-for="error in errors">{{ error }}</li>
        </ul>
        </p>

        <form @submit.prevent="addClient" novalidate="true">
            <div class="form-group">
                <label>Name</label>
                <input type="text" id="name" class="form-control" name="name" v-model="client.name">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select class="form-select" id="gender" aria-label="Gender" name="gender" v-model="client.gender">
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
                <input type="text" class="form-control" v-model="client.email">
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
            <button type="submit" class="btn btn-primary">Add Client</button>
        </form>
    </div>
</template>

<script>
    export default {

        data() {
            return {

                errors: [],
                client: {
                    name: '',
                    gender: '',
                    phone: '',
                    email: '',
                    address: '',
                    nationality: '',
                    dob: '',
                    education_background: '',
                    mode_of_contact: '',
                },

            }
        },
        methods: {
            addClient() {
                if(this.checkForm()) {
                    this.axios
                        .post('http://task.test/api/client/create', this.client)
                        .then(response => (
                            this.$router.push({name: 'home'})
                        ))
                        .catch(error => console.log(error));
                }
            },

            checkForm: function (e) {

                this.errors = [];

                if (!this.client.name) {
                    this.errors.push('Name is required');
                }

                if (!this.client.gender) {
                    this.errors.push("Gender is Required");
                }
                if (!this.client.email) {
                    this.errors.push("Email is Required");
                } else if (!this.validEmail(this.client.email)) {
                    this.errors.push('Valid email required.');
                }

                if (!this.client.address) {
                    this.errors.push("Address is Required");
                }
                if (!this.client.nationality) {
                    this.errors.push("Nationality is Required");
                }
                if (!this.client.dob) {
                    this.errors.push("Date of Birth is Required");
                }
                if (!this.client.education_background) {
                    this.errors.push("Education Background is Required");
                }
                if (!this.client.mode_of_contact) {
                    this.errors.push("Mode of Contact is Required");
                }

                if (this.client.name && this.client.gender && this.client.email && this.client.address && this.client.nationality && this.client.dob && this.client.education_background && this.client.mode_of_contact) {
                    return true;
                }

                if (!this.errors.length) {
                    return true;
                }

                // e.preventDefault();

            },
            validEmail: function (email) {
                var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }
        },

    }
</script>