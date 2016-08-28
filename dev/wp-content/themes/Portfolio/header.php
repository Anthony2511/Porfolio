<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?php the_title();?> - Anthony Beaumecker</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/styles.css';?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="site-container">
            <div class="site-pusher">
                <h1 aria-level="1" class="hidden">Portfolio</h1>
                <header class="topbar-two" id="home">
                    <a href="#" class="topbar-two__icon" id="topbar__icon"></a>
                    <div class="topbar-two__opacity">
                        <nav class="topbar-two__navigation">
                            <h2 aria-level="2" class="hidden"><?php _e('Navigation principale','b');?></h2>
                            <div class="topbar-two__list">
                                <a href="<?php echo get_home_url("#home");?>" class="topbar-two__list__link"><li class="topbar-two__list__detail">Accueil</li></a>
                                <a href="<?php echo get_home_url();?>#propos" class="topbar-two__list__link"><li class="topbar-two__list__detail">A propos</li></a>
                                <a href="<?php echo get_home_url();?>#realisations" class="topbar-two__list__link"><li class="topbar-two__list__detail">Réalisations</li></a>
                                <a href="<?php echo get_home_url();?>#contact" class="topbar-two__list__link"><li class="topbar-two__list__detail">Contact</li></a>
                            </div>
                        </nav>
                        <!-- <figure class="logo">
                            <img src="<?php the_field('portfolio_logo');?>" alt="" />
                        </figure> -->
                    </div>
                </header>
                <div class="site-content">
                    <div class="container">
                    </div>
                </div>
                <div class="site-cache" id="site-cache">
                </div>
            </div>
        </div>
        <main class="container" data-midnight="orange">
