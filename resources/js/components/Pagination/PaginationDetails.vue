<template>
    <div>
        <h5> Showing {{userlist.from}} to {{userlist.to}} of {{userlist.total}} | page {{userlist.current_page}} of {{userlist.last_page}}</h5>
    </div>
</template>
<script>
export default {
    props:['userlist'],
    mounted(){
        console.log(this.userlist);
    }
}
</script>