<template>
    <div>
        <div class="container">
            <div v-if="IsloggedIn">
                <div class="container">
                    <div class="row flex-lg-nowrap">
                        <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
                            <div class="card p-3">
                                <div class="e-navlist e-navlist--active-bg">
                                    <ul class="nav">
                                        <li class="nav-item"><a class="nav-link px-2 active" href="./overview.html"><i class="fa fa-fw fa-bar-chart mr-1"></i>
                                        <router-link :to="{name:'UserDashbordHome'}"> Dashbord</router-link>
                                        </a></li>
                                        <li class="nav-item"><a class="nav-link px-2" href="./users.html"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
                                        <li class="nav-item"><a class="nav-link px-2" href="./settings.html"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="e-profile">
                                                <div class="row">
                                                    <div class="col-12 col-sm-auto mb-3">
                                                        <div class="mx-auto" style="width: 140px;">
                                                            <img :src="img_avatar_url">

                                                        </div>
                                                    </div>
                                                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3 toLoad">
                                                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{user.name}}</h4>
                                                            <p class="mb-0">@{{ username[0] }}.{{ username[1] }}</p>
                                                            <div class="text-muted"><small><B>email  :    </B>{{ user.email }}</small></div>

                                                        </div>
                                                        <div class="text-center text-sm-right">
                                                            <span class="badge badge-secondary">{{ user_roles[0].display_name }}</span>
                                                            <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                                                </ul>
                                                <div class="tab-content pt-3">
                                                    <div class="tab-pane active">
                                                        <form class="form toLoad" novalidate="" @submit.prevent="UpdateProfileInfo">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Full Name</label>
                                                                                <input class="form-control" v-model="fields.name" type="text" name="name" placeholder="John Smith" value="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Email</label>
                                                                                <input class="form-control" v-model="fields.email" type="text" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col d-flex justify-content-end">
                                                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                         <hr>
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-md-8 col-12">
                                                                    <div class="browser-section" style="display: inline-block;">
                                                                    <i class="fa fa-chrome" style="display: inline-block; color: green;"></i> <p style="display: inline-block;" class="ml-2">Browser : <B>{{userbrowser}}</B></p>

                                                                    </div>
                                                                <div class="device-section" style="display: block;">
                                                                    <i class="fa fa-laptop" style="display: inline-block; color: #7F9CF5;"></i> <p style="display: inline-block;" class="ml-2">device : <B>{{userdevice}} , {{useros}}</B></p>
                                                                    
                                                                    </div>
                                                                </div>
                                                                 <div class="col-md-4 col-12">
                                                                    <div class="browser-section" style="display: inline-block;">
                                                                    <i class="fa fa-map-marker" style="display: inline-block;"></i> <p style="display: inline-block;" class="ml-2">Ip : <B>{{userip}}</B></p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title font-weight-bold">Support</h6>
                                            <p class="card-text">Get fast, free help from our friendly assistants.</p>
                                            <button type="button" class="btn btn-primary">Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <h2 v-else>
You are not authorized
            </h2>


        </div>
    </div>
</template>
<script>
export default {
    props:['user' , 'user_roles'],
    data(){
        return{
            IsloggedIn: window.IsloggedIn,
            img_avatar_url : null,
            random_Avatarc: 'EBF4FF',
            username: this.user.name.split(' '),
            userbrowser: {},
            userdevice: {},
            useros: {},
            userip: {},
            fields:{
                id: this.user.id,
                name: this.user.name,
                email: this.user.email,
            }
        }
    },
    mounted(){
        if (this.IsloggedIn == false){
            this.$Progress.start()
            this.$Progress.finish()
            console.log('You are not authenticated');
   

        }else{
     
            console.log('You are authenticated');
            axios.get('/api/syi')
            .then(res => {
                this.userbrowser = res.data.browser
                this.userdevice = res.data.device
                this.useros = res.data.os
                this.userip = res.data.ip
            })
            .catch(err => {
                console.error(err); 
            });
        }
       



    },
    created() {
        this.img_avatar_url='https://ui-avatars.com/api/?name='+this.user.name+'&color=7F9CF5&background='+this.random_Avatarc+'&size=140'

    },
    methods:{
        UpdateProfileInfo(){
            this.$Progress.start();
            axios.put('/api/dashbord/user/update',this.fields)
            .then(res => {
                console.log(res)
                this.$Progress.finish();
                

            })
            .catch(err => {
            })
        }
    }
}
</script>
