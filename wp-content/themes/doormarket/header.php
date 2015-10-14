<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Door-Market</title>
    <meta name="description" content="Default Description" />
    <meta name="keywords" content="Doors, Minsk, Yurkas" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <?php wp_head() ?>
</head>
<body class="cms-index-index cms-home">
<div class="wrapper">
<div class="page">
<div class="header">
    <div class="header-quick-access">
        <div class="container">
            <p class="welcome-msg"><span style="color:yellow; padding-left: 10px;">Velcom:</span> (29) 123-23-23 </p>
            <p class="welcome-msg"><span style="color:#D78555; padding-left: 10px;">MTS:</span> (33) 345-67-89 </p>
            <p class="welcome-msg"><span style="color:red; padding-left: 10px;">Life:</span> (25) 987-43-34 </p>
            <div class="header-col2">
                <form id="search_mini_form" action="#" method="get">
                    <div class="input-box">
                        <label for="search">Поиск:</label>
                        <input id="search" type="search" name="q" value="" class="input-text required-entry" maxlength="128" placeholder="Поиск..." />
                        <button type="submit" title="Search" class="button search-button"><span><span><i class="fa fa-search"></i></span></span></button>
                    </div>
                    <div id="search_autocomplete" class="search-autocomplete"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="header-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="page-header-content">
                        <h1 class="logo"><a href="#" title="Door market" class="logo"><img src="wp-content/themes/doormarket/images/logo.png" alt="Door market" /></a></h1>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="block_banner_header">
                        <div class="main-banner banner1">
                            <p><span>Бесплатный</span>&nbsp;замер</p>
                        </div>
                        <div class="main-banner banner2">
                            <p><span>Гарантия</span>&nbsp;Чек</p>
                        </div>
                        <div class="main-banner banner3">
                            <p><span>Работаем&nbsp;</span>24/7</p>
                        </div>
                        <div class="main-banner banner4">
                            <p><span>Установка</span>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- header-container / container -->
        <div class="top-menu">
            <div class="container">
                <div class="menu-cart">
                    <!---------------------------------------------------- MOBILE MENU -------------------------------------------------------------------------------------------------------->
                    <nav>
                        <div class="nav-mobilemenu-container visible-xs">
                            <div class="navbar">
                                <div id="navbar-inner" class="navbar-inner navbar-inactive">
                                    <div class="menu-mobile">
                                        <a class="btn btn-navbar navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </a>
                                        <span class="brand navbar-brand">Menu</span>
                                    </div>
                                    <ul id="nav-mobilemenu" class="mobilemenu nav-collapse collapse">
                                        <li class="level0 nav-1 level-top first parent">
                                            <a href="#" class="level-top">
                                                <span>Двери из массива</span>
                                            </a>
                                        </li>
                                        <li class="level0 nav-2 level-top parent">
                                            <a href="#" class="level-top">
                                                <span>Двери "Экошпон"</span>
                                            </a>
                                        </li>
                                        <li class="level0 nav-3 level-top parent">
                                            <a href="#" class="level-top">
                                                <span>Двери шпонированные</span>
                                            </a>
                                        </li>
                                        <li class="level0 nav-4 level-top">
                                            <a href="#">
                                                <span>Двери МДФ</span>
                                            </a>
                                        </li>
                                        <li class="level0 nav-5 level-top">
                                            <a href="#">
                                                <span>Двери складные</span>
                                            </a>
                                        </li>
                                        <li class="level0 nav-6 level-top">
                                            <a href="#">
                                                <span>Фурнитура</span>
                                            </a>
                                        </li>
                                        <li class="level0 nav-7 level-top">
                                            <a href="#">
                                                <span>О нас</span>
                                            </a>
                                        </li>
                                        <li class="level0 nav-8 level-top">
                                            <a href="#">
                                                <span>Контакты</span>
                                            </a>
                                        </li>
                                        <li class="level0 nav-9 level-top">
                                            <a href="#">
                                                <span>Фотогалерея</span>
                                            </a>
                                        </li>
                                        <li class="level0 nav-10 level-top">
                                            <a href="#">
                                                <span>Новости</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="nav_megamenu" class="nav_megamenu visible-lg visible-md">
                            <div id="megamenu_home" class="megamenu act">
                                <div class="level-top">
                                    <a href="#"><span><i class="fa fa-home"></i> Главная</span></a>
                                </div>
                            </div>
                            <div class="megamenu nav_product nav_bestsellerproduct">
                                <div class="level-top">
                                    <a href="#"><span>О нас</span></a>
                                </div>
                            </div>
                            <div class="megamenu nav_product nav_newproduct">
                                <div class="level-top">
                                    <a href="#"><span>Оплата и доставка</span></a>
                                </div>
                            </div>
                            <div class="megamenu nav_product nav_saleproduct">
                                <div class="level-top">
                                    <a href="#"><span>Наши контакты</span></a>
                                </div>
                            </div>
                            <div id="megamenu_foto" class="megamenu">
                                <div class="level-top">
                                    <p><a href="#">Фотогалерея</a></p>
                                </div>
                            </div>
                            <div id="megamenu_news" class="megamenu">
                                <div class="level-top">
                                    <p><a href="#">Новости</a></p>
                                </div>
                            </div>
                        </div>

                    </nav>
                    <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                </div> <!-- top-menu / container / menu-cart -->
            </div> <!-- top-menu / container -->
        </div> <!-- top-menu -->
    </div> <!-- header-container -->
</div> <!-- header -->
<figure style="background: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="vmagamenu-home">
                    <div class="nav-vcontainer hidden-xs hidden-sm">
                        <div class="vmegamenu-title"><h2><i class="fa fa-bars"></i>Категории</h2></div>
                        <div id="nav_vmegamenu" class="nav_vmegamenu">
                            <div id="megamenu_catid_3" class="megamenu nav-1">
                                <div class="level-top">
                                    <a href="#"><span>Двери из массива</span></a>
                                    <span class="hot">hot</span>
                                </div>
                            </div>
                            <div id="megamenu_catid_5" class="megamenu nav-2">
                                <div class="level-top">
                                    <a href="#"><span>Двери "Экошпон"</span></a>
                                </div>
                            </div>
                            <div id="megamenu_catid_6" class="megamenu nav-3">
                                <div class="level-top">
                                    <a href="#">
                                        <span>Двери шпонированные</span>
                                    </a><span class="new">new</span>
                                </div>
                            </div>
                            <div id="megamenu_catid_7" class="megamenu nav-4 megamenu_no_child">
                                <div class="level-top">
                                    <a href="#">
                                        <span>Двери МДФ</span>
                                    </a>
                                </div>
                            </div>
                            <div id="megamenu_catid_78" class="megamenu nav-5 megamenu_no_child">
                                <div class="level-top">
                                    <a href="#">
                                        <span>Складные двери</span>
                                    </a>
                                </div>
                            </div>
                            <div id="megamenu_catid_97" class="megamenu nav-6 megamenu_no_child">
                                <div class="level-top">
                                    <a href="#">
                                        <span>Фурнитура</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        //<![CDATA[
                        var MEGAMENU_EFFECT = 0;

                        //]]>
                    </script>
                </div> <!-- vmagamenu-hom -->
            </div> <!-- col-sm-3 -->
        </div> <!-- row -->
    </div> <!-- container -->
    <!-- -------------------------------------------------------------------SLIDER MAIN ---------------------------------------------------------------------- -->
    <div class="flexslider tv-nivoslider image-effect">
        <div class="ajax_loading"><i class="fa fa-spinner fa-spin"></i></div>
        <div id="tv-inivoslider" class="sliders">
            <div class="nivo-item">
                <!--  <div class="slider_description col-sm-3">Новая Серия "Z"<br>с покрытием<br> "Экошпон"</div>   -->
                <a href="#" title="Read more"><img src="wp-content/themes/doormarket/images/slides/slide_end_1.jpg"  title="#caption1" alt="image" /></a>
                <div id="caption1" class="caption-item zoomIn animated">
                    <div class="TopToBottom">
                        <div class="title"></div>
                        <div class="description"></div>
                        <div class="readmore">
                            <a href="#" title="View now !">View now !</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nivo-item">
                <a href="#" title="Read more"><img src="wp-content/themes/doormarket/images/slides/slide_end_2.jpg"  title="#caption2" alt="image" /></a>
                <div id="caption2" class="caption-item zoomIn animated">
                    <div class="LeftToRight">
                        <div class="title"></div>
                        <div class="description"></div>
                        <div class="readmore">
                            <a href="#" title="View now !">View now !</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nivo-item">
                <a href="#" title="Read more"><img src="wp-content/themes/doormarket/images/slides/slide_end_3.jpg"  title="#caption3" alt="image" /></a>
                <div id="caption3" class="caption-item zoomIn animated">
                    <div class="RightToLeft">
                        <div class="title"></div>
                        <div class="description"></div>
                        <div class="readmore">
                            <a href="#" title="View now !">View now !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</figure>

<div class="main-container col2-left-layout">
<div class="container">
<div class="main">
<div class="row">
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="col-left sidebar">
<div class="onsaleslider">
    <div class="bx-title">
        <div class="bg-title">
            <h2 class="title"><i class="fa fa-bookmark"></i>На акции</h2>
        </div>
    </div>
    <ul class="products-grid pdt-list zoomOut play">
        <li style="-webkit-animation-delay:0ms;-moz-animation-delay:0ms;-o-animation-delay:0ms;animation-delay:0ms;" class=" item first item-animate">
            <div class="item-inner">
                <div class="box-images">
                    <div class="imageslider">
                        <a href="#" title="pleasure" class="product-image">
                            <img src="wp-content/themes/doormarket/images/featured/seriaX_1.png" alt="pleasure" style="margin: 0 auto"/>
                        </a>
                    </div>
                </div>
                <div class="box-timer">
                    <div id="countbox_1" class="timer-view"></div>
                </div>

                <ul class="add-to-links">
                    <li class="button1"><button type="button" title="В корзину" class="button btn-cart"><span><span><i class="fa fa-shopping-cart"></i></span></span></button></li>
                    <li><a href="#" class="link-compare" title="Add to Compare"><i class="fa fa-refresh" ></i></a></li>
                    <li><a href="#" class="link-wishlist" title="В закладки"><i class="fa fa-heart"></i></a></li>
                </ul>
                <div class="product-shop1">
                    <h2 class="product-name"><a href="#" title="">pleasure</a></h2>
                    <div class="ratings">
                        <div class="rating-box">
                            <div class="rating" style="width:90%"></div>
                        </div>
                        <p class="rating-links">
                            <a href="#">2 Отзыв</a>
                            <span class="separator">|</span>
                            <a href="#">Add Your Review</a>
                        </p>
                    </div>
                    <div class="price-box">
                        <p class="old-price">
                            <span class="price-label">Regular Price:</span>
                            <span class="price">$333.00</span>
                        </p>
                        <p class="special-price">
                            <span class="price-label">Special Price</span>
                            <span class="price">$222.00</span>
                        </p>
                    </div>
                </div>
            </div>
        </li>
        <li style="-webkit-animation-delay:0ms;-moz-animation-delay:0ms;-o-animation-delay:0ms;animation-delay:0ms;" class=" item item-animate">
            <div class="item-inner">
                <div class="box-images">
                    <div class="imageslider">
                        <a href="#" alt="Lango T-Shirt" style="margin: 0 auto"/>
                        <img src="wp-content/themes/doormarket/images/featured/z_5.jpg" alt="pleasure" style="margin: 0 auto"/>
                        </a>
                    </div>
                </div>
                <div class="box-timer">
                    <div id="countbox_2" class="timer-view"></div>
                </div>

                <ul class="add-to-links">
                    <li class="button1"><button type="button" title="В корзину" class="button btn-cart"><span><span><i class="fa fa-shopping-cart"></i></span></span></button></li>
                    <li><a href="#" class="link-compare" title="Add to Compare"><i class="fa fa-refresh" ></i></a></li>
                    <li><a href="#" class="link-wishlist" title="В закладки"><i class="fa fa-heart"></i></a></li>
                </ul>
                <div class="product-shop1">
                    <h2 class="product-name"><a href="#" title="">Lango T-Shirt</a></h2>
                    <div class="ratings">
                        <div class="rating-box">
                            <div class="rating" style="width:80%"></div>
                        </div>
                        <p class="rating-links">
                            <a href="#">1 Отзыв</a>
                            <span class="separator">|</span>
                            <a href="#">Add Your Review</a>
                        </p>
                    </div>
                    <div class="price-box">
                        <p class="old-price">
                            <span class="price-label">Regular Price:</span>
                            <span class="price">$800.00</span>
                        </p>
                        <p class="special-price">
                            <span class="price-label">Special Price</span>
                            <span class="price">$699.00</span>
                        </p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

<div class="block-testimonial-sidebar">
    <div class="testimonial-title bx-title">
        <div class="bg-title"><h2><i class="fa fa-bookmark"></i>Отзывы</h2></div>
    </div>
    <div class="testimonial-content">
        <ul id="testimonialSidebar">
            <li class="testimonial-list">
                <div class="testimonial-content-avatar">
                    <img src="wp-content/themes/doormarket/images/anonymous.jpg" alt="test" height="66" width="66" />
                    <div class="post-by">
                        <p class="testimonial-author">Олег Рысейкин</p>
                        <p class="testimonial-company">s4.by</p>
                        <p class="testimonial-date"><span class="date">11</span>
                            <span class="month">Окт</span>
                        </p>
                    </div>
                </div>
                <div class="testimonial-sidebar-content">
                    <div class="std">
                        <a href="h#" title="testimonial">
                            "Заказывал двери в компании "ДорМаркет". Остался очень доволен грамотной консультацией, своевременной доставкой и установкой. Всем советую. Буду и впредь заказывать здесь!"
                        </a>
                    </div>
                </div>
            </li>
            <li class="testimonial-list">
                <div class="testimonial-content-avatar">
                    <img src="wp-content/themes/doormarket/images/anonymous.jpg" alt="test" height="66" width="66" />
                    <div class="post-by">
                        <p class="testimonial-author">Алексей</p>
                        <p class="testimonial-company">sitebuild.by</p>
                        <p class="testimonial-date"><span class="date">03</span>
                            <span class="month">Дек</span>
                        </p>
                    </div>
                </div>
                <div class="testimonial-sidebar-content">
                    <div class="std">
                        <a href="#" title="testimonial">
                            "Мы с женой решили заказать двери в нашу новую квартиру, долго выбирали и решили сделать свой выбор в компании "ДорМаркет". Грамотная консультация, бесплатный замер и доставка, очень аккуратная установка. Остались только положительные эмоции от сотрудничества. Млодцы!!!
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="blog-testimonial">
    <div class="blog-content">
        <div class="bx-title">
            <div class="bg-title">
                <h2 class="title"><i class="fa fa-bookmark"></i>Последние новости</h2>
            </div>
        </div>
        <ul class="bxslider">
            <li class="item">
                <img  width="244" height="155" alt="blog" src="http://ecoblueocean.com/themeforest/demo/tv_arion_furniture/media/themevast/blog/blog_3.jpg" />
                <div class="main-blog">
                    <p class="author">
                        <i class="fa fa-user"></i>от Дормаркет<span class="times"><span>01</span><span class="month">Янв</span></span>
                    </p>
                    <a href="#" ><span class="title">"Экошпон или массив ?"</span></a>
                    <div class="des">
                        <p>Экошпон — это технологичный многослойный материал нового поколения CPL (означает «ContiniousPressure Laminates», то есть, подвергнутый продолжительному прессованию), который получается...</p>
                    </div>
                    <p class="link-more"><a href="#"> <i class="fa fa-arrow-circle-o-right"></i>Читать...</a></p>
                </div>
            </li>
            <li class="item">
                <img  width="244" height="155" alt="blog" src="http://ecoblueocean.com/themeforest/demo/tv_arion_furniture/media/themevast/blog/blog_2.jpg" />
                <div class="main-blog">
                    <p class="author">
                        <i class="fa fa-user"></i>от Дормаркет<span class="times"><span>01</span><span class="month">Окт</span></span>
                    </p>
                    <a href="#" ><span class="title">Нестандартный проем ???</span></a>
                    <div class="des">
                        <p> Бывает так, что размер дверного проема не соответствует стандартам, которыми руководствуется производитель. В таких случаях...</p>
                    </div>
                    <p class="link-more"><a href="#"> <i class="fa fa-arrow-circle-o-right"></i>Читать...</a></p>
                </div>
            </li>
            <li class="item">
                <img  width="244" height="155" alt="blog" src="http://ecoblueocean.com/themeforest/demo/tv_arion_furniture/media/themevast/blog/blog_1.jpg" />
                <div class="main-blog">
                    <p class="author">
                        <i class="fa fa-user"></i>от Дормаркет<span class="times"><span>01</span><span class="month">Дек</span></span>
                    </p>
                    <a href="#" ><span class="title">Бережем покрытие!</span></a>
                    <div class="des">
                        <p>Некоторые мастера рекомендуют перед нанесением на поверхность каждого последующего слоя лака немного отшлифовать поверхность...</p>
                    </div>
                    <p class="link-more"><a href="#"> <i class="fa fa-arrow-circle-o-right"></i>Читать...</a></p>
                </div>
            </li>
        </ul>
    </div>
</div>

</div>
</div>
<!-- ------------------------------------------------------------------FEATURED----------------------------------------------------------------------------------------------------- -->
<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
<div class="col-main">
<div class="std">
<div class="home-content">
<div class="featuredproduct">
<div class="featured-title bx-title">
    <div class="bg-title">
        <h2 class="title">Рекомендуемые</h2>
    </div>
</div>
<div class="slide-multirows">
<ul class="products-grid">
    <li class="item  first  item-animate">
        <div class="item-inner">
            <div class="box-images">
                <div class="imageslider">
                    <a href="#" title="Sanctuary" class="product-image"><img src="wp-content/themes/doormarket/images/featured/seriaX_1.png"  alt="Sanctuary" /></a>
                </div>
            </div>
            <span class="icon-sale"></span>
            <ul class="add-to-links">
                <li class="button1"><button type="button" class="button btn-cart" title="В корзину"><span><span><i class="fa fa-shopping-cart"></i></span></span></button></li>
                <li><a href="#" title="В закладки" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                <li class="last"><a href="#" title="Add to Compare" class="link-compare"><i class="fa fa fa-refresh"></i></a></li>
            </ul>
            <div class="product-shop1">
                <h2 class="product-name"><a href="#" title="profil doors X">profil doors X</a></h2>
                <div class="ratings">
                    <div class="rating-box">
                        <div class="rating" style="width:70%"></div>
                    </div>
                    <p class="rating-links">
                        <a href="#">2 Отзыв</a>
                        <span class="separator">|</span>
                        <a href="#">Add Your Review</a>
                    </p>
                </div>
                <div class="price-box">
                    <p class="old-price">
                        <span class="price-label">Regular Price:</span>
                        <span class="price">$170.00</span>
                    </p>
                    <p class="special-price">
                        <span class="price-label">Special Price</span>
                        <span class="price">$150.00</span>
                    </p>
                </div>
            </div>
        </div>
    </li>
    <li class="item  last item-animate">
        <div class="item-inner">
            <div class="box-images">
                <div class="imageslider">
                    <a href="#" title="lectus ipsum" class="product-image"><img src="wp-content/themes/doormarket/images/featured/z_5.jpg" alt="lectus ipsum" /></a>
                </div>
            </div>
            <span class="icon-new"></span>
            <ul class="add-to-links">
                <li class="button1"><button type="button" class="button btn-cart" title="В корзину"><span><span><i class="fa fa-shopping-cart"></i></span></span></button></li>
                <li><a href="#" title="В закладки" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                <li class="last"><a href="#" title="Add to Compare" class="link-compare"><i class="fa fa fa-refresh"></i></a></li>
            </ul>
            <div class="product-shop1">
                <h2 class="product-name"><a href="#" title="lectus ipsum">lectus ipsum</a></h2>
                <div class="ratings">
                    <div class="rating-box">
                        <div class="rating" style="width:100%"></div>
                    </div>
                    <p class="rating-links">
                        <a href="#">1 Отзыв</a>
                        <span class="separator">|</span>
                        <a href="#">Add Your Review</a>
                    </p>
                </div>
                <div class="price-box">
                    <span class="regular-price" ><span class="price">$999.00</span></span>
                </div>
            </div>
        </div>
    </li>
</ul>
<ul class="products-grid">
    <li class="item  first  item-animate">
        <div class="item-inner">
            <div class="box-images">
                <div class="imageslider">
                    <a href="#" title="Bumblebee" class="product-image"><img src="wp-content/themes/doormarket/images/featured/z_4.jpg"  alt="Bumblebee" /></a>
                </div>
            </div>
            <span class="icon-sale"></span>
            <ul class="add-to-links">
                <li class="button1"><button type="button" class="button btn-cart" title="В корзину"><span><span><i class="fa fa-shopping-cart"></i></span></span></button></li>
                <li><a href="#" title="В закладки" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                <li class="last"><a href="#" title="Add to Compare" class="link-compare"><i class="fa fa fa-refresh"></i></a></li>
            </ul>
            <div class="product-shop1">
                <h2 class="product-name"><a href="#" title="Bumblebee">Bumblebee</a></h2>
                <div class="ratings">
                    <div class="rating-box">
                        <div class="rating" style="width:80%"></div>
                    </div>
                    <p class="rating-links">
                        <a href="#">1 Отзыв</a>
                        <span class="separator">|</span>
                        <a href="#">Add Your Review</a>
                    </p>
                </div>
                <div class="price-box">
                    <p class="old-price">
                        <span class="price-label">Regular Price:</span>
                        <span class="price">$123.00</span>
                    </p>
                    <p class="special-price">
                        <span class="price-label">Special Price</span>
                        <span class="price">$110.00</span>
                    </p>
                </div>
            </div>
        </div>
    </li>
    <li class="item  last item-animate">
        <div class="item-inner">
            <div class="box-images">
                <div class="imageslider">
                    <a href="#" title="tempus " class="product-image"><img src="wp-content/themes/doormarket/images/featured/z_3.jpg" alt="tempus " /></a>
                </div>
            </div>
            <span class="icon-sale"></span>
            <ul class="add-to-links">
                <li class="button1"><button type="button" class="button btn-cart" title="В корзину"><span><span><i class="fa fa-shopping-cart"></i></span></span></button></li>
                <li><a href="#" title="В закладки" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                <li class="last"><a href="#" title="Add to Compare" class="link-compare"><i class="fa fa fa-refresh"></i></a></li>
            </ul>
            <div class="product-shop1">
                <h2 class="product-name"><a href="#" title="tempus ">tempus </a></h2>
                <div class="ratings">
                    <div class="rating-box">
                        <div class="rating" style="width:80%"></div>
                    </div>
                    <p class="rating-links">
                        <a href="#">1 Отзыв</a>
                        <span class="separator">|</span>
                        <a href="#">Add Your Review</a>
                    </p>
                </div>
                <div class="price-box">
                    <p class="old-price">
                        <span class="price-label">Regular Price:</span>
                        <span class="price">$222.00</span>
                    </p>
                    <p class="special-price">
                        <span class="price-label">Special Price</span>
                        <span class="price">$100.00</span>
                    </p>
                </div>
            </div>
        </div>
    </li>
</ul>
<ul class="products-grid">
    <li class="item  first  item-animate">
        <div class="item-inner">
            <div class="box-images">
                <div class="imageslider">
                    <a href="#" title="Softwear" class="product-image"><img src="wp-content/themes/doormarket/images/featured/z_1.png"  alt="Softwear" /></a>
                </div>
            </div>
            <span class="icon-new"></span>
            <ul class="add-to-links">
                <li class="button1"><button type="button" class="button btn-cart" title="В корзину"><span><span><i class="fa fa-shopping-cart"></i></span></span></button></li>
                <li><a href="#" title="В закладки" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                <li class="last"><a href="#" title="Add to Compare" class="link-compare"><i class="fa fa fa-refresh"></i></a></li>
            </ul>
            <div class="product-shop1">
                <h2 class="product-name"><a href="#" title="Softwear">Softwear</a></h2>
                <div class="ratings">
                    <div class="rating-box">
                        <div class="rating" style="width:80%"></div>
                    </div>
                    <p class="rating-links">
                        <a href="#">1 Отзыв</a>
                        <span class="separator">|</span>
                        <a href="#">Add Your Review</a>
                    </p>
                </div>
                <div class="price-box">
                    <span class="regular-price" ><span class="price">$333.00</span></span>
                </div>
            </div>
        </div>
    </li>
    <li class="item  last item-animate">
        <div class="item-inner">
            <div class="box-images">
                <div class="imageslider">
                    <a href="#" title="nam sapien" class="product-image"><img src="wp-content/themes/doormarket/images/featured/verda_po4.jpg" alt="nam sapien" /></a>
                </div>
            </div>
            <span class="icon-new"></span>
            <ul class="add-to-links">
                <li class="button1"><button type="button" class="button btn-cart" title="В корзину"><span><span><i class="fa fa-shopping-cart"></i></span></span></button></li>
                <li><a href="#" title="В закладки" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                <li class="last"><a href="#" title="Add to Compare" class="link-compare"><i class="fa fa fa-refresh"></i></a></li>
            </ul>
            <div class="product-shop1">
                <h2 class="product-name"><a href="#" title="nam sapien">nam sapien</a></h2>
                <div class="ratings">
                    <div class="rating-box">
                        <div class="rating" style="width:80%"></div>
                    </div>
                    <p class="rating-links">
                        <a href="#">1 Отзыв</a>
                        <span class="separator">|</span>
                        <a href="#">Add Your Review</a>
                    </p>
                </div>
                <div class="price-box">
                    <span class="regular-price" ><span class="price">$432.00</span></span>
                </div>
            </div>
        </div>
    </li>
</ul>
<ul class="products-grid">
    <li class="item  first  item-animate">
        <div class="item-inner">
            <div class="box-images">
                <div class="imageslider">
                    <a href="#" title="Nunc facil" class="product-image"><img src="wp-content/themes/doormarket/images/featured/verda_po3.jpg" alt="Nunc facil" /></a>
                </div>
            </div>
            <span class="icon-new"></span>
            <ul class="add-to-links">
                <li class="button1"><button type="button" class="button btn-cart" title="В корзину"><span><span><i class="fa fa-shopping-cart"></i></span></span></button></li>
                <li><a href="#" title="В закладки" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                <li class="last"><a href="#" title="Add to Compare" class="link-compare"><i class="fa fa fa-refresh"></i></a></li>
            </ul>
            <div class="product-shop1">
                <h2 class="product-name"><a href="#" title="Nunc facil">Nunc facil</a></h2>
                <div class="ratings">
                    <div class="rating-box">
                        <div class="rating" style="width:80%"></div>
                    </div>
                    <p class="rating-links">
                        <a href="#">1 Отзыв</a>
                        <span class="separator">|</span>
                        <a href="#">Add Your Review</a>
                    </p>
                </div>
                <div class="price-box">
                    <span class="regular-price" ><span class="price">$222.00</span></span>
                </div>
            </div>
        </div>
    </li>
    <li class="item  last item-animate">
        <div class="item-inner">
            <div class="box-images">
                <div class="imageslider">
                    <a href="#" title="Primis" class="product-image"><img src="wp-content/themes/doormarket/images/featured/verda_po1.jpg" alt="Primis" /></a>
                </div>
            </div>
            <span class="icon-new"></span>
            <ul class="add-to-links">
                <li class="button1"><button type="button" class="button btn-cart" title="В корзину"><span><span><i class="fa fa-shopping-cart"></i></span></span></button></li>
                <li><a href="#" title="В закладки" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                <li class="last"><a href="#" title="Add to Compare" class="link-compare"><i class="fa fa fa-refresh"></i></a></li>
            </ul>
            <div class="product-shop1">
                <h2 class="product-name"><a href="#" title="Primis">Primis</a></h2>
                <div class="ratings">
                    <div class="rating-box">
                        <div class="rating" style="width:80%"></div>
                    </div>
                    <p class="rating-links">
                        <a href="#">1 Отзыв</a>
                        <span class="separator">|</span>
                        <a href="#">Add Your Review</a>
                    </p>
                </div>
                <div class="price-box">
                    <span class="regular-price" ><span class="price">$111.00</span></span>
                </div>
            </div>
        </div>
    </li>
</ul>
</div> <!-- slide-multyrows -->
</div> <!-- featureproduct -->

</div> <!-- home-content -->
</div> <!-- std -->
<!-- ---------------------------------------------------------------------- BANNER -------------------------------------------------------------------------------------------------------- -->
<div class="banner_content_home1">
    <div class="banner-box banner1">
        <div class="box-image"><img src="wp-content/themes/doormarket/images/new_banner.jpg" alt="" /></div>
        <a href="#" title="view more">&nbsp;</a>
    </div>
    <div class="banner-position1">
        <div class="banner-box banner2">
            <div class="box-image"><img src="wp-content/themes/doormarket/images/whitedoors.jpg" alt="" /></div>
            <a href="#" title="view more">&nbsp;</a>
        </div>
        <div class="banner-box banner3">
            <div class="box-image"><img src="wp-content/themes/doormarket/images/banner_3.jpg" alt="" /></div>
            <a href="#" title="view more">&nbsp;</a>
        </div>
    </div>
</div>
<!-- ---------------------------------------------------------------------- NEW PRODUCT SLIDER -------------------------------------------------------------------------------------------------------- -->
<section>
    <div class="newproductslider">
        <div class="bx-title new-title">
            <div class="bg-title">
                <h2>Новинки</h2>
            </div>
        </div>
        <div class="images-thum">
            <img src="wp-content/themes/doormarket/images/banner_block2-1.jpg" alt="" />
        </div>
        <div class="slide-multirows">
            <ul class="products-grid pdt-list zoomOut play">
                <li class="item  first  item-animate">
                    <div class="item-inner">
                        <div class="box-images">
                            <a href="#" title="Lango T-Shirt" class="product-image">
                                <img src="wp-content/themes/doormarket/images/featured/seriaX_1.png" alt="Lango T-Shirt" />
                            </a>
                        </div>
                        <div class="product-shop1">
                            <h2 class="product-name"><a href="#" title="Lango T-Shirt">Lango T-Shirt</a></h2>
                            <div class="ratings">
                                <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                </div>
                                <p class="rating-links">
                                    <a href="#">1 Отзыв</a>
                                    <span class="separator">|</span>
                                    <a href="#">Add Your Review</a>
                                </p>
                            </div>
                            <div class="price-box">
                                <p class="old-price">
                                    <span class="price-label">Regular Price:</span>
                                    <span class="price">$800.00</span>
                                </p>
                                <p class="special-price">
                                    <span class="price-label">Special Price</span>
                                    <span class="price">$699.00</span>
                                </p>
                            </div>
                            <button type="button" title="В корзину" class="button btn-cart"><span><span>В корзину</span></span></button>
                        </div>
                    </div>
                </li>
                <li class="item  last item-animate">
                    <div class="item-inner">
                        <div class="box-images">
                            <a href="#" title="Cras neque" class="product-image">
                                <img src="wp-content/themes/doormarket/images/featured/verda_po1.jpg" alt="Cras neque" />
                            </a>
                        </div>
                        <div class="product-shop1">
                            <h2 class="product-name"><a href="#l" title="Cras neque">Cras neque</a></h2>
                            <div class="ratings">
                                <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                </div>
                                <p class="rating-links">
                                    <a href="#">1 Отзыв</a>
                                    <span class="separator">|</span>
                                    <a href="#">Add Your Review</a>
                                </p>
                            </div>
                            <div class="price-box">
                                <span class="regular-price" ><span class="price">$155.00</span></span>
                            </div>
                            <button type="button" title="В корзину" class="button btn-cart"><span><span>В корзину</span></span></button>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="products-grid pdt-list zoomOut play">
                <li class="item  first  item-animate">
                    <div class="item-inner">
                        <div class="box-images">
                            <a href="#" title="voluptas nulla" class="product-image">
                                <img src="wp-content/themes/doormarket/images/featured/verda_po2.jpg" alt="voluptas nulla" />
                            </a>
                        </div>
                        <div class="product-shop1">
                            <h2 class="product-name"><a href="#" title="voluptas nulla">Lango Z-Shirt</a></h2>
                            <div class="ratings">
                                <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                </div>
                                <p class="rating-links">
                                    <a href="#">2 Отзыв</a>
                                    <span class="separator">|</span>
                                    <a href="#">Add Your Review</a>
                                </p>
                            </div>
                            <div class="price-box">
                                                                        <span class="regular-price" >
                                                                        <span class="price">$222.00</span></span>
                            </div>
                            <button type="button" title="В корзину" class="button btn-cart"><span><span>В корзину</span></span></button>
                        </div>
                    </div>
                </li>
                <li class="item  last item-animate">
                    <div class="item-inner">
                        <div class="box-images">
                            <a href="#" title="Softwear" class="product-image">
                                <img src="wp-content/themes/doormarket/images/featured/z_2.png" alt="Softwear" />
                            </a>
                        </div>
                        <div class="product-shop1">
                            <h2 class="product-name"><a href="#" title="Softwear">Softwear</a></h2>
                            <div class="ratings">
                                <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                </div>
                                <p class="rating-links">
                                    <a href="#">1 Отзыв</a>
                                    <span class="separator">|</span>
                                    <a href="#">Add Your Review</a>
                                </p>
                            </div>
                            <div class="price-box">
                                <span class="regular-price" ><span class="price">$333.00</span></span>
                            </div>
                            <button type="button" title="В корзину" class="button btn-cart"><span><span>В корзину</span></span></button>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="products-grid pdt-list zoomOut play">
                <li class="item  first  item-animate">
                    <div class="item-inner">
                        <div class="box-images">
                            <a href="#" title="consequen" class="product-image">
                                <img src="wp-content/themes/doormarket/images/featured/z_3.jpg" alt="consequen" />
                            </a>
                        </div>
                        <div class="product-shop1">
                            <h2 class="product-name"><a href="#" title="consequen">consequen</a></h2>
                            <div class="ratings">
                                <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                </div>
                                <p class="rating-links">
                                    <a href="#">1 Отзыв</a>
                                    <span class="separator">|</span>
                                    <a href="#">Add Your Review</a>
                                </p>
                            </div>
                            <div class="price-box">
                                <span class="regular-price" ><span class="price">$211.00</span></span>
                            </div>
                            <button type="button" title="В корзину" class="button btn-cart"><span><span>В корзину</span></span></button>
                        </div>
                    </div>
                </li>
                <li class="item  last item-animate">
                    <div class="item-inner">
                        <div class="box-images">
                            <a href="#" title="Donec est" class="product-image">
                                <img src="wp-content/themes/doormarket/images/featured/z_5.jpg" alt="Donec est" />
                            </a>
                        </div>
                        <div class="product-shop1">
                            <h2 class="product-name"><a href="#" title="Donec est">Donec est</a></h2>
                            <div class="ratings">
                                <div class="rating-box">
                                    <div class="rating" style="width:40%"></div>
                                </div>
                                <p class="rating-links">
                                    <a href="#">1 Отзыв</a>
                                    <span class="separator">|</span>
                                    <a href="#">Add Your Review</a>
                                </p>
                            </div>
                            <div class="price-box">
                                <span class="regular-price" ><span class="price">$721.00</span></span>
                            </div>
                            <button type="button" title="В корзину" class="button btn-cart"><span><span>В корзину</span></span></button>
                        </div>
                    </div>
                </li>
            </ul>
        </div> <!-- slide-multyrows -->

    </div> <!-- newproductslider -->
</section>
</div>  <!-- col-xs-12 col-sm-9 col-md-9 col-lg-9 / col-main -->
</div> <!-- main-container col2-left-layout / container / main / row / col-xs-12 col-sm-9 col-md-9 col-lg-9 -->
</div> <!-- main-container col2-left-layout / container / main / row -->
</div> <!-- main-container col2-left-layout / container / main -->
</div> <!-- main-container col2-left-layout / container -->
</div> <!-- main-container col2-left-layout -->
<!-- ---------------------------------------------------------------------- BESTSELLERS SLIDER ------------------------------------------------------------------------------------------------------------>
<section>
<div class="bestsellerslider">
<div class="container">
<div class="bx-title bestseller-title">
    <div class="bg-title">
        <h2><i class="fa fa-bookmark"></i>Хиты Продаж</h2>
    </div>
</div>
<ul class="products-grid pdt-list zoomOut play">
<li class="item first item-animate">
    <div class="item-inner">
        <div class="box-images">
            <a href="#" title="Lorem ispum" class="product-image">
                <span class="images1"><img src="wp-content/themes/doormarket/images/featured/seriaX_1.png"  alt="Lorem ispum" /></span>
            </a>
            <ul class="add-to-links">
                <li><button type="button" title="В корзину" class="button btn-cart"><span><span><i class="fa fa-shopping-cart" style="font-size: 16px; vertical-align:middle;"></i></span></span></button></li>
                <li><a href="#" class="link-compare" title="Add to Compare"><i class="fa fa-compress"></i></a></li>
                <li><a href="#" class="link-wishlist" title="В закладки"><i class="fa fa-heart"></i></a></li>
            </ul>
        </div>
        <div class="product-shop">
            <h2 class="product-name"><a href="#" title="Lorem ispum">Lorem ispum</a></h2>
            <div class="ratings">
                <div class="rating-box">
                    <div class="rating" style="width:60%"></div>
                </div>
                <p class="rating-links">
                    <a href="#">1 Отзыв</a>
                    <span class="separator">|</span>
                    <a href="#">Add Your Review</a>
                </p>
            </div>
            <div class="price-box">
                <p class="old-price">
                    <span class="price-label">Regular Price:</span>
                    <span class="price">$200.00</span>
                </p>
                <p class="special-price">
                    <span class="price-label">Special Price</span>
                    <span class="price">$150.00</span>
                </p>
            </div>
        </div>
    </div>
</li>
<li class="item item-animate">
    <div class="item-inner">
        <div class="box-images">
            <a href="#" title="Sanctuary" class="product-image">
                <span class="images1"><img src="wp-content/themes/doormarket/images/featured/seriaX_4.jpg"  alt="Sanctuary" /></span>
            </a>
            <ul class="add-to-links">
                <li><button type="button" title="В корзину" class="button btn-cart"><span><span><i class="fa fa-shopping-cart" style="font-size: 16px; vertical-align:middle;"></i></span></span></button></li>
                <li><a href="#" class="link-compare" title="Add to Compare"><i class="fa fa-compress"></i></a></li>
                <li><a href="#" class="link-wishlist" title="В закладки"><i class="fa fa-heart"></i></a></li>
            </ul>
        </div>
        <div class="product-shop">
            <h2 class="product-name"><a href="#" title="Sanctuary">Sanctuary</a></h2>
            <div class="ratings">
                <div class="rating-box">
                    <div class="rating" style="width:70%"></div>
                </div>
                <p class="rating-links">
                    <a href="#">2 Отзыв</a>
                    <span class="separator">|</span>
                    <a href="#">Add Your Review</a>
                </p>
            </div>
            <div class="price-box">
                <p class="old-price">
                    <span class="price-label">Regular Price:</span>
                    <span class="price">$170.00</span>
                </p>
                <p class="special-price">
                    <span class="price-label">Special Price</span>
                    <span class="price">$150.00</span>
                </p>
            </div>
        </div>
    </div>
</li>
<li class="item item-animate">
    <div class="item-inner">
        <div class="box-images">
            <a href="#" title="Lango T-Shirt" class="product-image">
                <span class="images1"><img src="wp-content/themes/doormarket/images/featured/z_1.png"  alt="Lango T-Shirt" /></span>
            </a>
            <ul class="add-to-links">
                <li><button type="button" title="В корзину" class="button btn-cart"><span><span><i class="fa fa-shopping-cart" style="font-size: 16px; vertical-align:middle;"></i></span></span></button></li>
                <li><a href="#" class="link-compare" title="Add to Compare"><i class="fa fa-compress"></i></a></li>
                <li><a href="#" class="link-wishlist" title="В закладки"><i class="fa fa-heart"></i></a></li>
            </ul>
        </div>
        <div class="product-shop">
            <h2 class="product-name"><a href="#" title="Lango T-Shirt">Lango T-Shirt</a></h2>
            <div class="ratings">
                <div class="rating-box">
                    <div class="rating" style="width:80%"></div>
                </div>
                <p class="rating-links">
                    <a href="#">1 Отзыв</a>
                    <span class="separator">|</span>
                    <a href="#">Add Your Review</a>
                </p>
            </div>
            <div class="price-box">
                <p class="old-price">
                    <span class="price-label">Regular Price:</span>
                    <span class="price">$800.00</span>
                </p>
                <p class="special-price">
                    <span class="price-label">Special Price</span>
                    <span class="price">$699.00</span>
                </p>
            </div>
        </div>
    </div>
</li>
<li class="item item-animate">
    <div class="item-inner">
        <div class="box-images">
            <a href="#" title="Bumblebee" class="product-image">
                <span class="images1"><img src="wp-content/themes/doormarket/images/featured/z_2.png"  alt="Bumblebee" /></span>
            </a>
            <ul class="add-to-links">
                <li><button type="button" title="В корзину" class="button btn-cart"><span><span><i class="fa fa-shopping-cart" style="font-size: 16px; vertical-align:middle;"></i></span></span></button></li>
                <li><a href="#" class="link-compare" title="Add to Compare"><i class="fa fa-compress"></i></a></li>
                <li><a href="#" class="link-wishlist" title="В закладки"><i class="fa fa-heart"></i></a></li>
            </ul>
        </div>
        <div class="product-shop">
            <h2 class="product-name"><a href="#" title="Bumblebee">Bumblebee</a></h2>
            <div class="ratings">
                <div class="rating-box">
                    <div class="rating" style="width:80%"></div>
                </div>
                <p class="rating-links">
                    <a href="#">1 Отзыв</a>
                    <span class="separator">|</span>
                    <a href="#">Add Your Review</a>
                </p>
            </div>
            <div class="price-box">
                <p class="old-price">
                    <span class="price-label">Regular Price:</span>
                    <span class="price">$123.00</span>
                </p>
                <p class="special-price">
                    <span class="price-label">Special Price</span>
                    <span class="price">$110.00</span>
                </p>
            </div>
        </div>
    </div>
</li>
<li class="item item-animate">
    <div class="item-inner">
        <div class="box-images">
            <a href="#" title="Donec est" class="product-image">
                <span class="images1"><img src="wp-content/themes/doormarket/images/featured/z_3.jpg"  alt="Donec est" /></span>
            </a>
            <ul class="add-to-links">
                <li><button type="button" title="В корзину" class="button btn-cart" onclick="setLocation('http://ecoblueocean.com/themeforest/demo/tv_arion_furniture/index.php/donec-non-est.html')"><span><span><i class="fa fa-shopping-cart" style="font-size: 16px; vertical-align:middle;"></i></span></span></button></li>
                <li><a href="#" class="link-compare" title="Add to Compare"><i class="fa fa-compress"></i></a></li>
                <li><a href="#" class="link-wishlist" title="В закладки"><i class="fa fa-heart"></i></a></li>
            </ul>
        </div>
        <div class="product-shop">
            <h2 class="product-name"><a href="#" title="Donec est">Donec est</a></h2>
            <div class="ratings">
                <div class="rating-box">
                    <div class="rating" style="width:40%"></div>
                </div>
                <p class="rating-links">
                    <a href="#">1 Отзыв</a>
                    <span class="separator">|</span>
                    <a href="#">Add Your Review</a>
                </p>
            </div>
            <div class="price-box">
                                            <span class="regular-price" >
                                            <span class="price">$721.00</span></span>
            </div>
        </div>
    </div>
</li>
<li class="item item-animate">
    <div class="item-inner">
        <div class="box-images">
            <a href="#" title="tempus " class="product-image">
                <span class="images1"><img src="wp-content/themes/doormarket/images/featured/z_4.jpg"  alt="tempus " /></span>
            </a>
            <ul class="add-to-links">
                <li><button type="button" title="В корзину" class="button btn-cart"><span><span><i class="fa fa-shopping-cart" style="font-size: 16px; vertical-align:middle;"></i></span></span></button></li>
                <li><a href="#" class="link-compare" title="Add to Compare"><i class="fa fa-compress"></i></a></li>
                <li><a href="#" class="link-wishlist" title="В закладки"><i class="fa fa-heart"></i></a></li>
            </ul>
        </div>
        <div class="product-shop">
            <h2 class="product-name"><a href="#" title="tempus ">tempus </a></h2>
            <div class="ratings">
                <div class="rating-box">
                    <div class="rating" style="width:80%"></div>
                </div>
                <p class="rating-links">
                    <a href="#/">1 Отзыв</a>
                    <span class="separator">|</span>
                    <a href="#">Add Your Review</a>
                </p>
            </div>
            <div class="price-box">
                <p class="old-price">
                    <span class="price-label">Regular Price:</span>
                    <span class="price">$222.00</span>
                </p>
                <p class="special-price">
                    <span class="price-label">Special Price</span>
                    <span class="price">$100.00</span>
                </p>
            </div>
        </div>
    </div>
</li>
<li class="item item-animate">
    <div class="item-inner">
        <div class="box-images">
            <a href="#" title="Softwear" class="product-image">
                <span class="images1"><img src="wp-content/themes/doormarket/images/featured/z_5.jpg"  alt="Softwear" /></span>
            </a>
            <ul class="add-to-links">
                <li><button type="button" title="В корзину" class="button btn-cart"><span><span><i class="fa fa-shopping-cart" style="font-size: 16px; vertical-align:middle;"></i></span></span></button></li>
                <li><a href="#" class="link-compare" title="Add to Compare"><i class="fa fa-compress"></i></a></li>
                <li><a href="#" class="link-wishlist" title="В закладки"><i class="fa fa-heart"></i></a></li>
            </ul>
        </div>
        <div class="product-shop">
            <h2 class="product-name"><a href="#" title="Softwear">Softwear</a></h2>
            <div class="ratings">
                <div class="rating-box">
                    <div class="rating" style="width:80%"></div>
                </div>
                <p class="rating-links">
                    <a href="#">1 Отзыв</a>
                    <span class="separator">|</span>
                    <a href="#">Add Your Review</a>
                </p>
            </div>
            <div class="price-box">
                                            <span class="regular-price" >
                                            <span class="price">$333.00</span></span>
            </div>
        </div>
    </div>
</li>
</ul>

</div> <!-- container -->
</div> <!-- bestsellerslider -->
</section>
<!-- ---------------------------------------------------------------------- BRAND LOGO SLIDER ------------------------------------------------------------------------------------------------------------>
<section class="brandlogo-wrapper">
    <div class="container">
        <div class="brandlogo-contain">
            <div class="bx-title brand-title">
                <div class="bg-title">
                    <h2><i class="fa fa-bookmark"></i>brand logo</h2>
                </div>
            </div>
            <ul class="bxslider">
                <li class="item">
                    <a href="#" title=""><img src="wp-content/themes/doormarket/images/brands/belwooddoors.jpg" alt="brand" /></a>

                </li>
                <li class="item">
                    <a href="#" title=""><img src="wp-content/themes/doormarket/images/brands/casaporte.jpg" alt="brand" /></a>

                </li>
                <li class="item">
                    <a href="#" title=""><img src="wp-content/themes/doormarket/images/brands/mariam.jpg" alt="brand" /></a>

                </li>
                <li class="item">
                    <a href="#" title=""><img src="wp-content/themes/doormarket/images/brands/pd_logo.png" alt="brand" /></a>

                </li>
                <li class="item">
                    <a href="#" title=""><img src="wp-content/themes/doormarket/images/brands/pmc.jpg" alt="brand" /></a>

                </li>
                <li class="item">
                    <a href="#" title=""><img src="wp-content/themes/doormarket/images/brands/rostra.jpg" alt="brand" /></a>

                </li>
                <li class="item">
                    <a href="#" title=""><img src="wp-content/themes/doormarket/images/brands/verda.png" alt="brand" /></a>

                </li>
                <li class="item">
                    <a href="#" title=""><img src="wp-content/themes/doormarket/images/brands/vudrev.jpg" alt="brand" /></a>

                </li>

                <li class="item">
                    <a href="#" title=""><img src="wp-content/themes/doormarket/images/brands/yurkas.png" alt="brand" /></a>

                </li>

                <li class="item">
                    <a href="#" title=""><img src="wp-content/themes/doormarket/images/brands/zadoor.png" alt="brand" /></a>

                </li>
            </ul>

        </div> <!-- brandlogo-contain -->
    </div> <!-- container -->
</section>
