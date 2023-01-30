<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi Json</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
    <header class="container-fluid">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="Spotify logo">
    </header>

    <main>
        <div id="app" class="container">
            <ul class="row g-0 mb-0 ps-0">
                    <li class="col-4 list-group-item p-3" v-for="(disc,i) in discList">
                        <div class="card col bg-black text-white text-center">
                            <img :src="disc.poster" class="card-img-top object-fit-cover" :alt="disc.title" >
                            <div class="card-body">
                                <h5 class="card-title">{{disc.title}}</h5>
                                <h6>{{disc.author}}</h6>
                                <h6>{{disc.year}}</h6>
                                <h6>{{disc.genre}}</h6>
                            </div>
                        </div>
                    </li>
            </ul>
        </div>
    </main>
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.5/axios.min.js" integrity="sha512-JEXkqJItqNp0+qvX53ETuwTLoz/r1Tn5yTRnZWWz0ghMKM2WFCEYLdQnsdcYnryMNANMAnxNcBa/dN7wQtESdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
</body>
</html>