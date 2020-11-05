<style scoped>
.table-white{

}
</style>

<template>
    <div class="container" v-if="IsloggedIn">
        <div class="card">
            <div class="card-header">
<h3>Users list</h3>
            </div>
            <div class="card-body">
                <table class="table table-white table-hover table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">email</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Role</th>
                        <th scope="col">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="user in users" v-bind:key="user.id">
                        <th scope="row">{{user.id}}</th>
                        <td>{{user.name}}</td>
                        <td>{{user.email}}</td>
                        <td>{{moment(user.created_at, "YYYY-MM-DD hh:mm:ss").fromNow()}}</td>
                        <td v-for="role in user.roles" :key="role.id">{{ role.display_name }}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-6">
                                <a type="button" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit mr-1"></i>

                                    Edit
                                    </a>
                                </div>
                                <div class="col-md-6">
                                <a type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#editModal">
                                    <i class="fa fa-trash mr-1"></i>

                                    Delete
                                </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
<span></span>
    </div>
</template>
<script>
export default {
    data(){
        return{
            IsloggedIn: window.IsloggedIn,
            users:{},
            user_date: "20111031",
            //user_created_at: moment(this.test_date, "YYYYMMDD").fromNow(), // 9 years ago
        }
    },
    mounted(){
            
    },
    created(){
            axios.get('/api/dashbord/admin/getUsers')
            .then(res => {
                console.log(res)
                this.users = res.data
            })
            .catch(err => {
                console.error(err); 
            })
    },
    
}
</script>
