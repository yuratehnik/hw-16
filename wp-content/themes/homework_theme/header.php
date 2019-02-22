
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/main.css'; ?>">
    <title>Main Page</title>
</head>
<body>
<header>
    <span id="header_anchor-link"></span>
    <nav class="wide-container nav-container">
        <div class="nav__wrapper">
            <a class="toggleMenu fa fa-list-ul" href="#"></a>
            <ul class="nav">
                <?php wp_nav_menu(array(
                    'theme_location'=>'my-custom-menu',
                    'container'=>'ul',
                    'container_class'   => "nav",
                    'items_wrap' => '%3$s'
                )); ?>
            </ul>
        </div>
        <a href="#" class="header__logo__wrapper">
            <img src="<?php echo get_template_directory_uri() . '/img/header/header__logo.png'; ?>" alt="logo">
        </a>
        <ul class="social-list__wrapper">
            <li class="social-list__item">
                <a href="#" class="social-list__link">
                    <i class="fa fa-facebook-f"></i>
                </a>
            </li>
            <li class="social-list__item">
                <a href="#" class="social-list__link">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="social-list__item">
                <a href="#" class="social-list__link">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
            <li class="social-list__item">
                <a href="#" class="social-list__link">
                    <i class="fa fa-flickr"></i>
                </a>
            </li>
            <li class="social-list__item">
                <a href="#" class="social-list__link">
                    <i class="fa fa-google-plus"></i>
                </a>
            </li>
            <li class="social-list__item">
                <a href="#" class="social-list__link">
                    <i class="fa fa-envelope"></i>
                </a>
            </li>
        </ul>
    </nav>
</header>