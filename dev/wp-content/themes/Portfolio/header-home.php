<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portfolio - Anthony Beaumecker</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/styles.css';?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="site-container">
            <div class="site-pusher">
                <header class="topbar" id="home">
                    <a href="#" class="topbar__icon" id="topbar__icon"></a>
                    <div class="topbar__opacity">
                        <nav class="topbar__navigation">
                            <h1 aria-level="1"><?php _e('Navigation principale','b');?></h1>
                            <ul class="topbar__list">
                                <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                                    <a href="<?php echo $navItem->url;?>" class="topbar__list__link"><li class="topbar__list__detail"><?php echo $navItem->label;?></li></a>
                                <?php endforeach; ?>    
                            </ul>
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
