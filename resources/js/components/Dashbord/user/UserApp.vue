<template>

    <div>
        <router-view :user="user, user_roles" ></router-view>
        <vue-progress-bar></vue-progress-bar>

    </div>

</template>



<script>

export default {

    props:['user', 'user_roles'],
    name: "UserApp",
    mounted() {
        this.$Progress.start()
        this.$Progress.finish()


    }

}
</script>


