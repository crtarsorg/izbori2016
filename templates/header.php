<?php 


// pripremiti skripte i stilove ako treba posebno da se ucitaju


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Izbori 2016</title>

        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        
        <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"></link> -->

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="static/css/style.css">
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="static/js/script.js"></script>
    </head>
    <body>
        <section class="container-fluid main-top main-background">
            <header class="container">
                <h1 class="logo">
                    <a href="./">
                        <img class="img-responsive" src="static/images/logo_white.svg" alt="izbori-2016_logo">
                    </a>
                </h1>
            </header>
           
			<?php include_once 'carousel.php'; ?>

            
        </section>


        <section class="container main-navigation">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="main-navigation">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">Izveštaji</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="glasomer.html">Glasomer</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">Izborni rezultati</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="pages/koalicije-stranke.html">Koalicije / Stranke</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">Lokalni izbori</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">Beležnica</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="pages/o-nama.html">O nama</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </section>