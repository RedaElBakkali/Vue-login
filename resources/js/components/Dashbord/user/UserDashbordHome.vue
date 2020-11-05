<template>
    <div class="container">
        <div class="row justify-content-center">
             <div v-if="IsloggedIn">
                 <h1> {{HelloMsg}} </h1>
                 </div>
             <div v-else>
                 Not logged in
            </div>
        </div>

    </div>
</template>
<script>

export default {

    props:['user'],
    data(){
        return{
            IsloggedIn: window.IsloggedIn,
            HelloMsg: null,
        }
    },
    mounted(){
    if (this.IsloggedIn == true) {

        if (this.IsloggedIn) {
            toast.fire({
                icon: 'success',
                title: 'Bonjour ' + this.user.name
            })
        }
        this.HelloMsg = 'Hello ' + this.user.name
    }else{
        this.$router.push('/login');
    }



    },
    created() {

    }
}
</script>
