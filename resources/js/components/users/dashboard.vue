<template>
    <div>
        <div class="card mt-3">
            <div class="card-body">
                <h3>Manage Users</h3>
                <Pagination :userlist="userlist" v-if="userlist!==null" v-on:get-page="getPage" />
                <table class="table table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Since</th>
                        <th>Action</th>
                    </tr>
                    <tbody v-if="userlist!==null">
                        <tr v-for="users in userlist.data" :key="users.id">
                        <td>{{users.name}}</td>
                        <td>{{users.email}}</td>
                        <td>{{users.user_since}}</td>
                        <td><div class="btn-group"><button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> </button></div></td>
                    
                    </tr>
                    </tbody>
                    
                </table>
                
            </div>
        </div> 
    </div>
</template>
<script>
import Pagination from '../Pagination/Pagination.vue'
export default {
    data(){
        return{
            userlist:null,
            params:{
                page: 1
            }
        }
    },
    components:{
        Pagination
    },
    methods:{
        getusers(){
            axios.get('users/userlist',{params:this.params}).then(response=>{
            this.userlist=response.data.userlist; 
            //console.warn(response.data.userlist);       
        })
        },
        getPage(event){
            this.params.page   = event;
            this.getusers();
        }
    },
    mounted(){
       this.getusers();
    }
}
</script>