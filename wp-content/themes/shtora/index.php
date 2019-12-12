<?php get_header(); ?>
<?php
$args = array(
    'post_type' => 'mainpage',
    'post_per_page' => -1
);
$social = new WP_Query($args);
$social->the_post();
?>
<section class="banner">
    <header class="container-fluid p-0">
        <div class="nav-1 container-fluid p-0">
            <div class="row">
                <div class="container">
                    <div class="row d-flex p-4 justify-content-between">
                        <div
                                class="col-12 col-md-4 py-3 py-md-0 d-flex justify-content-center justify-content-md-start">
                            <h1 class="header-title"><?php bloginfo('name'); ?></h1>
                        </div>
                        <div class="col-12 col-md-4 py-3 py-md-0 d-flex justify-content-center">
                            <h1 class="header-logo">Логотип</h1>
                        </div>
                        <div
                                class="col-12 col-md-4 py-3 py-md-0 d-flex justify-content-center justify-content-md-end">
                            <a class="header-title" href="#">+7 (999) 999-99-99</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="nav-2 nav-scroller py-3 shadow-sm header-2 align-items-center">
                        <div class="nav nav-underline justify-content-start justify-content-md-center">
                            <a class="px-3" href="#">Главная</a>
                            <a class="px-3" href="shtora.html">штора 1</a>
                            <a class="px-3" href="shtora.html">штора 2</a>
                            <a class="px-3" href="shtora.html">штора 3</a>
                            <a class="px-3" href="shtora.html">штора 4</a>
                            <a class="px-3" href="shtora.html">штора 5</a>
                            <a class="px-3" href="shtora.html">штора 6</a>
                            <a class="px-3" href="#">Контакты</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row py-5">
            <div class="col-12 my-5">
                <h1><?php bloginfo('description'); ?></h1>
            </div>
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 mt-5">
                <div class="banner-btn">
                    <a href="#about">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-2 p-3 banner-btn-left"></div>
                                <div class="col p-3 banner-btn-right d-flex align-items-center justify-content-center">
                                    <h2>Узнать подробнее</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<a name="about"></a>
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-lg-4 pb-3 pb-lg-0">
                <div class="card h-100">
                    <div class="card-ico">
                        <h1>1</h1>
                    </div>
                    <h3 class="card-title"><?php the_field('cart_1_num'); ?></h3>
                    <p class="card-offer"><?php the_field('cart_1_description') ?></p>
                </div>
            </div>
            <div class="col-12 col-lg-4 pb-3 pb-lg-0">
                <div class="card h-100">
                    <div class="card-ico">
                        <h1>2</h1>
                    </div>
                    <h3 class="card-title"><?php the_field('cart_2_num'); ?></h3>
                    <p class="card-offer"><?php the_field('cart_2_description'); ?></p>
                </div>
            </div>
            <div class="col-12 col-lg-4 pb-3 pb-lg-0">
                <div class="card h-100">
                    <div class="card-ico">
                        <h1>3</h1>
                    </div>
                    <h3 class="card-title"><?php the_field('cart_3_num'); ?></h3>
                    <p class="card-offer"><?php the_field('cart_3_description'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="mb-5">О нас</h1>
                <p class="mb-5"><?php the_field('about_us') ?></p>
                <p class="about-social">Мы в соц. сетях</p>

                <div class="row">
                    <div class="col-12">
                        <ul class="navbar-nav flex-row ml-2 d-flex social">

                            <?php if (get_field('vk')) : ?>
                                <li class="nav-item"><a class="nav-link p-2 fab fa-vk"
                                                        href="<?php the_field('vk') ?>"></a>
                                </li><?php endif ?>
                            <?php if (get_field('instagram')) : ?>
                                <li class="nav-item"><a class="nav-link p-2 fab fa-instagram"
                                                        href="<?php the_field('instagram') ?>"></a></li><?php endif ?>
                            <?php if (get_field('telegram')) : ?>
                                <li class="nav-item"><a class="nav-link p-2 fab fa-telegram"
                                                        href="<?php the_field('telegram') ?>"></a></li><?php endif ?>
                            <?php if (get_field('facebook')) : ?>
                                <li class="nav-item"><a class="nav-link p-2 fab fa-facebook"
                                                        href="<?php the_field('facebook') ?>"></a></li><?php endif ?>
                            <?php if (get_field('whatsapp')) : ?>
                                <li class="nav-item"><a class="nav-link p-2 fab fa-whatsapp"
                                                        href="<?php the_field('whatsapp') ?>"></a></li><?php endif ?>
                            <?php if (get_field('twitter')) : ?>
                                <li class="nav-item"><a class="nav-link p-2 fab fa-twitter"
                                                        href="<?php the_field('twitter') ?>"></a></li><?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 about-imgs mt-4 mt-md-0">
                <?php
                $image_1 = get_field('about_img_1');
                $image_2 = get_field('about_img_2');
                ?>
                <img class="card img about-img-1 mx-3" src="<?= esc_url($image_1['url']) ?>"
                     alt="">
                <img class="card img about-img-2 mx-3" src="<?= esc_url($image_2['url']) ?>"
                     alt="">
            </div>
        </div>
    </div>
</section>
<section class="galery">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="mb-4">Галерея</h1>
                <p><?php the_field('galery_description') ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-md-0">
                <img class="card img galery-img-big" src="/img/galery-big.png" alt="">
            </div>
            <div class="col-12 col-md-6">
                <div class="row h-100">
                    <div class="col-12 mb-3 mb-md-0">
                        <div class="row">
                            <div class="col-6 galery-img-col">
                                <img class="card img galery-img-small" src="/img/galery-small.png" alt="">
                            </div>
                            <div class="col-6 galery-img-col">
                                <img class="card img galery-img-small" src="/img/galery-small.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3 mb-md-0">
                        <div class="row">
                            <div class="col-6 galery-img-col d-flex align-items-center">
                                <img class="card img galery-img-small" src="/img/galery-small.png" alt="">
                            </div>
                            <div class="col-6 galery-img-col d-flex align-items-center">
                                <img class="card img galery-img-small" src="/img/galery-small.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex align-items-end">
                        <a href="#" class="btn-block galery-btn">Посмотреть все работы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Отзывы</h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $args2 = array(
                            'post_type' => 'reviews',
                            'post_per_page' => -1
                        );
                        $reviews = new WP_Query($args2);
                        $i = 0;
                        ?>
                        <?php while ($reviews->have_posts()): ?>
                            <?php $reviews->the_post(); ?>
                            <div class="carousel-item <?php if ($i == 0) {
                                echo 'active';
                                $i = 1;
                            } ?>">
                                <div class="container comments-block">
                                    <div class="row comments-row">
                                        <div class="col-12 col-lg-5 d-flex justify-content-center justify-content-lg-end mb-3 mb-md-0">
                                            <?php $customer_img = get_field('customer_img'); ?>

                                            <img src="<?= esc_url($customer_img['url']) ?>" class="img-carusel" alt="">
                                        </div>
                                        <div class="col">
                                            <h1>Заказчик – <?php the_field('customer_name'); ?></h1>
                                            <p><?php the_field('customer_comment'); ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                       data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Назад</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                       data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Вперёд</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$args = array(
    'post_type' => 'mainpage',
    'post_per_page' => -1
);
$social = new WP_Query($args);
$social->the_post();
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Контакты</h1>
            </div>
        </div>
        <div class="row justify-content-end mt-5 contact">
            <div class="col-12 col-lg-5 pb-3 pb-lg-0">
                <div class="card h-100">
                    <div class="card-ico contact-title">
                        <h1><?php the_field('contact_title'); ?></h1>
                    </div>
                    <div class="row pl-4">
                        <div class="col-12">
                            <h1><?php the_field('contact_adress'); ?></h1>
                        </div>
                        <div class="col-12">
                            <p class="card-offer phone"><?php the_field('contact_phone'); ?></p>
                        </div>
                        <div class="col-12">
                            <ul class="navbar-nav flex-row ml-2 d-flex social">

                                <?php if (get_field('vk')) : ?>
                                    <li class="nav-item"><a class="nav-link p-2 fab fa-vk"
                                                            href="<?php the_field('vk') ?>"></a>
                                    </li><?php endif ?>
                                <?php if (get_field('instagram')) : ?>
                                    <li class="nav-item"><a class="nav-link p-2 fab fa-instagram"
                                                            href="<?php the_field('instagram') ?>"></a>
                                    </li><?php endif ?>
                                <?php if (get_field('telegram')) : ?>
                                    <li class="nav-item"><a class="nav-link p-2 fab fa-telegram"
                                                            href="<?php the_field('telegram') ?>"></a>
                                    </li><?php endif ?>
                                <?php if (get_field('facebook')) : ?>
                                    <li class="nav-item"><a class="nav-link p-2 fab fa-facebook"
                                                            href="<?php the_field('facebook') ?>"></a>
                                    </li><?php endif ?>
                                <?php if (get_field('whatsapp')) : ?>
                                    <li class="nav-item"><a class="nav-link p-2 fab fa-whatsapp"
                                                            href="<?php the_field('whatsapp') ?>"></a>
                                    </li><?php endif ?>
                                <?php if (get_field('twitter')) : ?>
                                    <li class="nav-item"><a class="nav-link p-2 fab fa-twitter"
                                                            href="<?php the_field('twitter') ?>"></a></li><?php endif ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h1>Мы на карте</h1>
            </div>
            <div class="col">
                <?php echo do_shortcode('[wpgmza id="1"]') ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
