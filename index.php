<?php

require_once __DIR__ . '/hp1.php';
require_once __DIR__ . '/hp2.php';
require_once __DIR__ . '/hp3.php';
require_once __DIR__ . '/hp4.php';
require_once __DIR__ . '/hp5.php';
require_once __DIR__ . '/hp6.php';
require_once __DIR__ . '/hp7a.php';
require_once __DIR__ . '/hp7b.php';

 $hp1 = new Hp1;
 $hp2 = new Hp2;
 $hp3 = new Hp3;
 $hp4 = new Hp4;
 $hp5 = new Hp5;
 $hp6 = new Hp6;
 $hp7a = new Hp7a;
 $hp7b = new Hp7b;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harry Potter Saga</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Saga di Harry Potter</h1>
    <main>


        <div class="card">
            <img src=" <?php echo $hp1->img ?> " alt="">
            <div class="description">
                <h2 class='title'> <?php echo $hp1->title ?> </h2>
                <p> <?php echo $hp1->genre ?> / <?php echo $hp1->date_drop ?> </p>
                <p class="trama"> <?php echo $hp1->trama ?> </p>
                <p class="price"> <?php echo $hp1->price ?> </p>
                <p class="trama"> <?php foreach ( $hp1->cast as $key => $value ) {
                            echo $key ." - ".$value . '<br>';
                        } ?>
                </p> 
            </div>
        </div>
        <div class="card">
            <img src=" <?php echo $hp2->img ?> " alt="">
            <div class="description">
                <h2 class='title'> <?php echo $hp2->title ?> </h2>
                <p> <?php echo $hp2->genre ?> / <?php echo $hp2->date_drop ?> </p>
                <p class="trama"> <?php echo $hp2->trama ?> </p>
                <p class="price"> <?php echo $hp2->price ?> </p>
                <p class="trama"> <?php foreach ( $hp2->cast as $key => $value ) {
                            echo $key ." - ".$value . '<br>';
                        } ?>
                </p> 
            </div>
        </div>
        <div class="card">
            <img src=" <?php echo $hp3->img ?> " alt="">
            <div class="description">
                <h2 class='title'> <?php echo $hp3->title ?> </h2>
                <p> <?php echo $hp3->genre ?> / <?php echo $hp3->date_drop ?> </p>
                <p class="trama"> <?php echo $hp3->trama ?> </p>
                <p class="price"> <?php echo $hp3->price ?> </p>
                <p class="trama"> <?php foreach ( $hp3->cast as $key => $value ) {
                            echo $key ." - ".$value . '<br>';
                        } ?>
                </p> 
            </div>
        </div>
        <div class="card">
            <img src=" <?php echo $hp4->img ?> " alt="">
            <div class="description">
                <h2 class='title'> <?php echo $hp4->title ?> </h2>
                <p> <?php echo $hp4->genre ?> / <?php echo $hp4->date_drop ?> </p>
                <p class="trama"> <?php echo $hp4->trama ?> </p>
                <p class="price"> <?php echo $hp4->price ?> </p>
                <p class="trama"> <?php foreach ( $hp4->cast as $key => $value ) {
                            echo $key ." - ".$value . '<br>';
                        } ?>
                </p> 
            </div>
        </div>
        <div class="card">
            <img src=" <?php echo $hp5->img ?> " alt="">
            <div class="description">
                <h2 class='title'> <?php echo $hp5->title ?> </h2>
                <p> <?php echo $hp5->genre ?> / <?php echo $hp5->date_drop ?> </p>
                <p class="trama"> <?php echo $hp5->trama ?> </p>
                <p class="price"> <?php echo $hp5->price ?> </p>
                <p class="trama"> <?php foreach ( $hp5->cast as $key => $value ) {
                            echo $key ." - ".$value . '<br>';
                        } ?>
                </p> 
            </div>
        </div>
        <div class="card">
            <img src=" <?php echo $hp6->img ?> " alt="">
            <div class="description">
                <h2 class='title'> <?php echo $hp6->title ?> </h2>
                <p> <?php echo $hp6->genre ?> / <?php echo $hp6->date_drop ?> </p>
                <p class="trama"> <?php echo $hp6->trama ?> </p>
                <p class="price"> <?php echo $hp6->price ?> </p>
                <p class="trama"> <?php foreach ( $hp6->cast as $key => $value ) {
                            echo $key ." - ".$value . '<br>';
                        } ?>
                </p> 
            </div>
        </div>
        <div class="card">
            <img src=" <?php echo $hp7a->img ?> " alt="">
            <div class="description">
                <h2 class='title'> <?php echo $hp7a->title ?> </h2>
                <p> <?php echo $hp7a->genre ?> / <?php echo $hp7a->date_drop ?> </p>
                <p class="trama"> <?php echo $hp7a->trama ?> </p>
                <p class="price"> <?php echo $hp7a->price ?> </p>
                <p class="trama"> <?php foreach ( $hp7a->cast as $key => $value ) {
                            echo $key ." - ".$value . '<br>';
                        } ?>
                </p> 
            </div>
        </div>
        <div class="card">
            <img src=" <?php echo $hp7b->img ?> " alt="">
            <div class="description">
                <h2 class='title'> <?php echo $hp7b->title ?> </h2>
                <p> <?php echo $hp7b->genre ?> / <?php echo $hp7b->date_drop ?> </p>
                <p class="trama"> <?php echo $hp7b->trama ?> </p>
                <p class="price"> <?php echo $hp7b->price ?> </p>
                <p class="trama"> <?php foreach ( $hp7b->cast as $key => $value ) {
                            echo $key ." - ".$value . '<br>';
                        } ?>
                </p> 
            </div>
        </div>
    </main> 
</body>
</html>