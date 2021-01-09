<!DOCTYPE html>
<html lang="sv">

<head>
    <title>Home - BDF Preschool</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <meta charset="UTF-8">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <!--container class starts here-->
        <header class="header">
            <!--header start-->

            <div class="topnav">
                <h1><a href="index.html" class="logo" tabindex="0"><i class="fa fa-pagelines fa-lg"></i><span>BDF
                            PRESCHOOL</span>
                    </a></h1>
                <nav class="navitem">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </nav>
            </div>
            <div class="header-text">
                <h2>Welcome to BDF PRESCHOOL</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit.</p>
                <a href="blog.html" class="button">Read more</a></button>
            </div>
        </header>
        <!--header end-->