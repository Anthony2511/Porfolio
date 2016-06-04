<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php the_title();?> - Anthony Beaumecker</title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/styles.css';?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="site-container">
            <div class="site-pusher">
                <header class="topbar-two" id="home">
                    <a href="#" class="topbar-two__icon" id="topbar-two__icon"></a>
                        <nav class="topbar-two__navigation">
                            <h1 aria-level="1"><?php _e('Navigation principale','b');?></h1>
                            <ul class="topbar-two__list">
                                <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                                    <a href="<?php echo $navItem->url;?>" class="topbar-two__list__link"><li class="topbar-two__list__detail"><?php echo $navItem->label;?></li></a>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                </header>
                <div class="site-content">
                    <div class="container">
                    </div>
                </div>
                <div class="site-cache" id="site-cache">
                </div>
            </div>
        </div>
        <main class="container">
