const app = new Vue({
    el:'#app',
    data:{
        dischi:[],
    },

    methods:{
        fetchDisk(){
            axios 
            .get('http://localhost/boolean/php-ajax-dischi/php-ajax-dischi/seconda_versione/api/dischi.php')
            .then((res)=>{
                const {response} = res.data
                this.dischi = response
            })
        },  
    },

    created(){

        this.fetchDisk()

    }
})