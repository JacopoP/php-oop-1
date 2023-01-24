<?php
require __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassFilm</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        #container{
            display:flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: center;
            margin-top: 25px;
            gap: 10px;
        }
        .card{
            display: inline-block;
            width: 500px;
            border: 1px solid black;
            padding: 5px 10px 20px;
        }
        h1, h2, h3  {
            text-align: center;
            margin: 5px 0;
        }
        h2 {
            height: 56px;
        }
        h2 *{
            display: inline-block;
        }
        footer{
            text-align: center;
            margin-top: 15px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div id="app">
        <div id="container">
            <div v-for='film in this.filmArray' class='card'>
                <h1>{{film.title}}</h1>
                <h2>
                    <span v-for="(genre, index) in film.genres">
                        <span>{{genre}}</span>
                        <span v-if='index < film.genres.length - 1'>,&nbsp;</span>
                    </span>
                </h2>
                <h3>{{film.year_release}}</h3>
                <h3>{{film.publisher}}</h3>
                <p>{{film.synopsis}}</p>
                <footer>{{film.length}}</footer>
            </div>
        </div>
    </div>
    <script>
        const {createApp} = Vue;
        createApp({
            data(){
                return{
                    filmArray: [],
                }
            },
            mounted(){
                this.filmArray = <?php getArrayFilm() ?>;
            }
        }).mount("#app");
    </script>
</body>
</html>