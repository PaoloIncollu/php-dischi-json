const { createApp } = Vue;

createApp({
    data() {
        return {
          albums:[]
        };
    },
    created() {
        axios
                .get('http://localhost/php-dischi-json/backend/api.php', {
                    
                })
                .then((res) => {
                    console.log(res.data.results);

                    this.albums = res.data.results;
                });
    
    }
}).mount('#app');