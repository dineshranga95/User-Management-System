<template>
    <div>
        <div class="card mt-3">
            <div class="card-body">
                <h3>Manage Users</h3>
                <table class="table table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Since</th>
                        <th>Action</th>
                    </tr>
                    <tr v-for="users in userlist" :key="users.id">
                        <td>{{users.name}}</td>
                        <td>{{users.email}}</td>
                        <td>{{users.user_since}}</td>
                        <td><div class="btn-group"><button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> </button></div></td>
                    
                    </tr>
                </table>
                
            </div>
        </div> 
    </div>
</template>
<script>
export default {
    data(){
        return{
            userlist:null,
            
        }
    },
    mounted(){
        axios.get('users/userlist').then(response=>{
            this.userlist=response.data.userlist;          
        })
    }
}
</script>