<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Alina Valovenko / Web Developer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <!--favicon-->
    <link rel="shortcut icon" href="<?php echo VL_IMAGES . 'favicon.ico'; ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo VL_IMAGES . 'favicon.ico'; ?>" type="image/x-icon">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600%7CRaleway:300,400,500,600,700,800" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<!-- preloader -->
<div id="loader-wrapper">
    <div class="world">
        <img src="<?php echo VL_IMAGES . 'loader.svg'; ?>" alt="" />
    </div>
</div>
<!-- preloader ends!-->

<header class="header-area">
    <div class="container">
        <!-- Nav -->
        <nav class="navbar navbar-expand-lg">
            <!-- Logo -->
            <div id="logo_home">
                <a href="index.html">Resume</a>
            </div>
            <!-- Logo ends! -->
            <!--menu toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu"
                    aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon">
               <span class="icon-th"></span>
               </span>
            </button>
            <!--menu toggler ends! -->
            <!--menu -->
            <div class="collapse navbar-collapse" id="menu">
                <ul id="menu_scroll" class="navbar-nav menu">
                    <li><a href="#home" class="scroll active">Home</a></li>
                    <li><a href="#about" class="scroll">About</a></li>
                    <li><a href="#experience" class="scroll">Experience</a></li>
                    <li><a href="#services" class="scroll">Services</a></li>
                    <li><a href="#portfolio" class="scroll">Portfolio</a></li>
                    <li><a href="#clients" class="scroll">Clients</a></li>
                    <li><a href="#blog" class="scroll">Blog</a></li>
                </ul>
            </div>
            <!--menu ends!-->
            <!--Quote button-->
            <a class="btn scroll" href="#quote">Get a Quote</a>
        </nav>
        <!-- Nav ends!-->
    </div>
</header>
<!-- Header ends! -->