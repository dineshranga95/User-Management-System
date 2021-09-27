<template>
    <div>
       <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item" v-if="userlist.current_page >2"  @click.prevent="$emit('get-page',1)"><a class="page-link" href="#"><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i>  </a></li>
                <li class="page-item" v-if="userlist.current_page >1" @click.prevent="$emit('get-page',userlist.current_page - 1)"><a class="page-link" href="#"><i class="fas fa-chevron-left"></i>  </a></li>
                <li class="page-item" v-if="userlist.current_page >5">
                    <span class="page-link">...</span>
                </li>
                 <li class="page-item" v-for="num in userlist.last_page" :key="num" @click.prevent="$emit('get-page',num)" :class="{active: num === userlist.current_page}">
                     <a href="" class="page-link" v-if="num > userlist.current_page - 5 && num < userlist.current_page +5 "  >{{num}}</a>
                </li>
                <li class="page-item" v-if="userlist.current_page < userlist.last_page -5 ">
                    <span class="page-link">...</span>
                </li>
                <li class="page-item"  v-if="userlist.current_page<userlist.last_page" @click.prevent="$emit('get-page',userlist.current_page + 1)"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i>  </a></li>
                <li class="page-item" v-if="userlist.current_page<userlist.last_page-1" @click.prevent="$emit('get-page',userlist.last_page)"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>   </a></li>
            </ul>
        </nav>
    </div>
</template>
<script>

export default {
    
    props:[
        'userlist'
    ],
    mounted(){
        //console.log(this.userlist)
    }
    
}
</script>