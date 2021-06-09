<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Marko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style-min.css">
    <style>
    .carousel-inner>.carousel-item>img {
        width: auto;
        height: 300px !important;
    }

    .carousel-item {
        opacity: 0.2;
        transition: opacity ease-out 1.0s;
        /*opacity */
    }

    .carousel.carousel-fade .carousel-item.active {
        margin-bottom: 50px;
        opacity: 1 !important;
    }

    .card-body {
        font-family: 'Marko One', serif;
        margin-bottom: 30px;
        height: 4em;
    }
    </style>
    <title>Great Violinists History</title>
</head>

<body style="background-image: url('violin_subtract.png');">
    <?php require 'navbar.php'; ?>
    <?php require 'db_connect.php'; ?>

    <div class="container container-fluid">

    <div class="card text-center bg-transparent" style="box-shadow: 0px 0px">

<div class="card-body">
    <!-- <img src = "violin_brown_shadow.png" > -->
    <h2 class="card-header rounded-top bg-transparent text-danger id=" header">Violin Classics!</h2>
</div>

            <div class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./musicianImages/Vivaldi.jpg" alt="Vivaldi">
                    </div>
                    <div class="carousel-item">
                        <img src="./musicianImages/u-g-PNSWF90.jpg" alt="Beethoven">
                    </div>
                    <div class="carousel-item">
                        <img src="./musicianImages/Tchaikovsky.jpg" alt="Tchaikovsky">
                    </div>
                    <div class="carousel-item">
                        <img src="musicianImages/Mozart.jpg" alt="Mozart">
                    </div>
                    <div class="carousel-item">
                        <img src="musicianImages/Paganini.jpg" alt="Paganini">
                    </div>
                </div>
            </div>
        </div>
      
        <!-- <div class="card-footer text-muted bg-light"> -->