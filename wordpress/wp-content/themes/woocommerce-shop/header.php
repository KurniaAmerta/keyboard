<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet" crossorigin="anonymous"> -->
    <script src="https://kit.fontawesome.com/0058da3196.js" crossorigin="anonymous"></script>
</head>
<body>
   
    <nav class="navbar navbar-expand-lg bg-warning fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">STORE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">VIP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">OUR STORY</a>
                    </li> -->
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'top_menu',
                                'container' => false
                            )
                        );
                    ?>
                </ul>
                <div>
                    <button type="button" class="btn btn-dark">SIGN IN</button>
                    <button type="button" class="btn btn-dark">CART</button>
                </div>
            </div>
        </div>
    </nav>