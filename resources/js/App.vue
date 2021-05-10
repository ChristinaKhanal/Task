<template>
    <div class="container">
        <div class="card" style="margin: 20px 0px 20px 0px;">
            <div class="card-header">
                <router-link to="/" class="btn btn-primary">Home</router-link>
                <router-link to="/add" class="btn btn-primary">Add Client</router-link>
            </div>
            <div class="card-body">
                <router-view></router-view>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">

                </div>
            </div>
        </nav>
        <br/>

    </div>
</template>

<script>
    export default {}
</script>