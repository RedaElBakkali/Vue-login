<template>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home Component</div>

                    <div class="card-body">
                        I'm an home component.
                        <br>
                        <center v-if="!IsloggedIn">
                            <p>
                                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Login
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <a href="/login">Go to login page</a>
                                </div>
                            </div>
                            <p>
                                <a class="btn btn-primary mt-2" data-toggle="collapse" href="#Register" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Register
                                </a>
                            </p>
                            <div class="collapse" id="Register">
                                <div class="card card-body">
                                    <a href="/register">Go to register page</a>
                                </div>
                            </div>
                        </center>
                        <center v-else>
                            <a class="btn btn-primary" href="dashbord/user">Dashbord</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:['user'],
    data(){
        return{
            IsloggedIn: window.IsloggedIn
        }
    },
    mounted() {
        if (this.IsloggedIn == false){
            console.log('You are not authenticated');

        }else{
            console.log('You are authenticated');
        }

        if (this.IsloggedIn == true) {
            toast.fire({
                icon: 'success',
                title: 'Hello ' + this.user.name
            })
        }
    }
}
</script>
