const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'http://localhost/php-dischi-json/api/api.php',
            listDisks: [],
        }
    },
    methods: {
        getDiskList() {
            axios.get(this.apiUrl)

                .then(response => {
                    // handle success
                    console.log('response', response);
                    this.listDisks = response.data.data;
                    console.log('listDisks', this.listDisks)

                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });
        },
    },
    created() {
        this.getDiskList()
    }
}).mount('#app')