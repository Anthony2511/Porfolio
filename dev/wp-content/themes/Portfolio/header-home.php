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
                <header class="topbar" id="home">
                    <a href="#" class="topbar__icon" id="topbar__icon"></a>
                        <nav class="topbar__navigation">
                            <h2 aria-level="2" class="hidden"><?php _e('Navigation principale','b');?></h2>
                            <div class="topbar__list">
                                <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                                    <a href="<?php echo $navItem->url;?>" class="topbar__list__link"><div class="topbar__list__detail"><?php echo $navItem->label;?></div></a>
                                <?php endforeach; ?>
                            </div>
                        </nav>
                        <div class="topbar__intro">
                            <p class="topbar__name">
                                <?php the_field('portfolio_name'); ?>
                            </p>
                            <p class="topbar__job">
                                <?php the_field('portfolio_job'); ?>
                            </p>
                        </div>
                        <figure class="topbar__scroll">
                            <a href="#propos"><img src="<?php echo get_template_directory_uri() .'/img/scrollTopbar.png';?>" class="topbar__scroll__image" alt="fleche de défilement" width="25" height="25" /></a>
                        </figure>
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
