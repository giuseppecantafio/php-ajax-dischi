const app = new Vue({
    'el': '#app',
    data: {
        dischi: [],
    },
    methods: {

    },
    mounted() {
        axios.get('server.php').then((response) => {
            response.data;
            this.dischi = response.data;
        })
    }
})