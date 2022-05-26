const app = new Vue({
    'el': '#app',
    data: {
        dischi: [],
        selectedGenre: '',
        valueForSelect: [],
        apiPath: './server.php/',
        path: '',

    },
    methods: {
        mySearch() {
            this.getData(this.selectedGenre);
        },
        getData(selectedGenre = null) {
            if (selectedGenre) {
                this.path = `${this.apiPath}?genre=${selectedGenre}`;
            } else {
                this.path = `${this.apiPath}`;
            }
            axios.get(this.path).then((response) => {
                response.data;
                this.dischi = response.data;
                if (this.valueForSelect == 0) {
                    this.dischi.forEach((disco) => {
                        if (!this.valueForSelect.includes(disco.genre)) {
                            this.valueForSelect.push(disco.genre);
                        }
                    })
                }
            })
        }
    },
    mounted() {
        this.getData();
    }
})