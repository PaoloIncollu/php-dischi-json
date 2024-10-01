<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Dischi JSON</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
        <!-- Css-->
         <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <header class="bg-info" >
            <div class="container p-5 ">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="text-success">
                        PHP Dischi JSON
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main id="app" class="bg-success p-5">
            <div class="container mt-5">
                <div class="row  ">
                    <div v-for="(album,i) in albums" class="col-sm-6 col-md-4 text-center mb-4 ">
                        <div class="card  bg-info">
                            <div>

                                <img :src="album.poster" class="card-img-top" :alt="album.title">
                            </div>
                            
                            <div class="card-body my-card-body" >
                              <h5 class="card-title">{{album.title}}</h5>
                              <p class="card-text">{{album.author}}</p>
                              <h6 class="card-subtitle"> {{album.year}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <!-- Vue -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <!-- Axios -->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <!-- My JS -->
        <script src="js/scripts.js"></script>
    </body>
</html>