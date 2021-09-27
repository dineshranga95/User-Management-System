<template>
    <div>
       <nav aria-label="Page navigation example">
            <ul class="pagination">
                
                <li class="page-item"><a class="page-link" href="#" @click.prevent="$emit('get-page',userlist.current_page + 1)"><i class="fas fa-chevron-right"></i>  </a></li>
                
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