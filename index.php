<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Melvin Jerome Luna Maligaya">
    <title>php-dischi-json</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.7/axios.min.js"
        integrity="sha512-DdX/YwF5e41Ok+AI81HI8f5/5UsoxCVT9GKYZRIzpLxb8Twz4ZwPPX+jQMwMhNQ9b5+zDEefc+dcvQoPWGNZ3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- css -->
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- script.js -->
    <script defer src="script/script.js"></script>

</head>

<body>
    <div id="app">
        <header>
            <h1>php-dischi-json</h1>
        </header>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <ul>
                            <li v-for="(disk, index) in listDisks" :key="index">
                                <div class="img-box">
                                    <img :src="disk.poster" :alt="disk.title">
                                </div>
                                <p>{{ disk.title }}</p>
                                <p>{{ disk.author }}</p>
                                <p>{{ disk.year }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>

<!-- esercizio finito -->