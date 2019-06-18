<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="ru" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="ru" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="ru">
<!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Your Store</title>
    <script type="text/javascript" src="/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" charset="UTF-8"></script><base href="http://demo-opencart.ru/" />
    <meta name="description" content="My Store" />
    <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
    <link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">
    <link href="catalog/view/javascript/jquery/swiper/css/swiper.min.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="catalog/view/javascript/jquery/swiper/css/opencart.css" type="text/css" rel="stylesheet" media="screen" />
    <script src="catalog/view/javascript/jquery/swiper/js/swiper.jquery.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/common.js" type="text/javascript"></script>
    <link href="http://demo-opencart.ru/image/catalog/cart.png" rel="icon" />
</head>
<body>
<nav id="top">
    <div class="container"><div class="pull-left">
            <form action="http://demo-opencart.ru/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="form-currency">
                <div class="btn-group">
                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">                               <strong>$</strong>        <span class="hidden-xs hidden-sm hidden-md">Валюта</span>&nbsp;<i class="fa fa-caret-down"></i></button>
                    <ul class="dropdown-menu">
                        <li>
                            <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                        </li>
                        <li>
                            <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                        </li>
                        <li>
                            <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button>
                        </li>
                    </ul>
                </div>
                <input type="hidden" name="code" value="" />
                <input type="hidden" name="redirect" value="http://demo-opencart.ru/index.php?route=common/home" />
            </form>
        </div>

        <div class="pull-left">
            <form action="http://demo-opencart.ru/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="form-language">
                <div class="btn-group">
                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">

                        <img src="catalog/language/ru-ru/ru-ru.png" alt="Русский" title="Русский">
                        <span class="hidden-xs hidden-sm hidden-md">Язык</span>&nbsp;<i class="fa fa-caret-down"></i></button>
                    <ul class="dropdown-menu">
                        <li>
                            <button class="btn btn-link btn-block language-select" type="button" name="en-gb"><img src="catalog/language/en-gb/en-gb.png" alt="English" title="English" /> English</button>
                        </li>
                        <li>
                            <button class="btn btn-link btn-block language-select" type="button" name="ru-ru"><img src="catalog/language/ru-ru/ru-ru.png" alt="Русский" title="Русский" /> Русский</button>
                        </li>
                    </ul>
                </div>
                <input type="hidden" name="code" value="" />
                <input type="hidden" name="redirect" value="http://demo-opencart.ru/index.php?route=common/home" />
            </form>
        </div>

        <div id="top-links" class="nav pull-right">
            <ul class="list-inline">
                <li><a href="http://demo-opencart.ru/index.php?route=information/contact"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">123456789</span></li>
                <li class="dropdown"><a href="http://demo-opencart.ru/index.php?route=account/account" title="Личный кабинет" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">Личный кабинет</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="http://demo-opencart.ru/index.php?route=account/register">Регистрация</a></li>
                        <li><a href="http://demo-opencart.ru/index.php?route=account/login">Авторизация</a></li>
                    </ul>
                </li>
                <li><a href="http://demo-opencart.ru/index.php?route=account/wishlist" id="wishlist-total" title="Закладки (0)"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">Закладки (0)</span></a></li>
                <li><a href="http://demo-opencart.ru/index.php?route=checkout/cart" title="Корзина"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Корзина</span></a></li>
                <li><a href="http://demo-opencart.ru/index.php?route=checkout/checkout" title="Оформить заказ"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">Оформить заказ</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div id="logo">          <h1><a href="http://demo-opencart.ru/index.php?route=common/home">Your Store</a></h1>
                </div>
            </div>
            <div class="col-sm-5"><div id="search" class="input-group">
                    <input type="text" name="search" value="" placeholder="Поиск" class="form-control input-lg" />
                    <span class="input-group-btn">
    <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
  </span>
                </div></div>
            <div class="col-sm-3"><div id="cart" class="btn-group btn-block">
                    <button type="button" data-toggle="dropdown" data-loading-text="Загрузка..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total">Товаров 0 ($0.00)</span></button>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <p class="text-center">Ваша корзина пуста!</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <nav id="menu" class="navbar">
        <div class="navbar-header"><span id="category" class="visible-xs">Категории</span>
            <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=20" class="dropdown-toggle" data-toggle="dropdown">Desktops</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">               <ul class="list-unstyled">
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=20_26">PC (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=20_27">Mac (1)</a></li>
                            </ul>
                        </div>
                        <a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=20" class="see-all">Показать все Desktops</a> </div>
                </li>
                <li class="dropdown"><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=18" class="dropdown-toggle" data-toggle="dropdown">Laptops &amp; Notebooks</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">               <ul class="list-unstyled">
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=18_46">Macs (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=18_45">Windows (0)</a></li>
                            </ul>
                        </div>
                        <a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=18" class="see-all">Показать все Laptops &amp; Notebooks</a> </div>
                </li>
                <li class="dropdown"><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=25" class="dropdown-toggle" data-toggle="dropdown">Components</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">               <ul class="list-unstyled">
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=25_29">Mice and Trackballs (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=25_28">Monitors (2)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=25_30">Printers (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=25_31">Scanners (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=25_32">Web Cameras (0)</a></li>
                            </ul>
                        </div>
                        <a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=25" class="see-all">Показать все Components</a> </div>
                </li>
                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=57">Tablets</a></li>
                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=17">Software</a></li>
                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=24">Phones &amp; PDAs</a></li>
                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=33">Cameras</a></li>
                <li class="dropdown"><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34" class="dropdown-toggle" data-toggle="dropdown">MP3 Players</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">               <ul class="list-unstyled">
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_43">test 11 (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_44">test 12 (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_47">test 15 (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_48">test 16 (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_49">test 17 (0)</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_50">test 18 (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_51">test 19 (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_52">test 20 (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_53">test 21 (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_54">test 22 (0)</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_55">test 23 (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_56">test 24 (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_38">test 4 (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_37">test 5 (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_39">test 6 (0)</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_40">test 7 (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_41">test 8 (0)</a></li>
                                <li><a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34_42">test 9 (0)</a></li>
                            </ul>
                        </div>
                        <a href="http://demo-opencart.ru/index.php?route=product/category&amp;path=34" class="see-all">Показать все MP3 Players</a> </div>
                </li>
            </ul>
        </div>
    </nav>
</div>


<div id="common-home" class="container">
    <div class="row">
        <div id="content" class="col-sm-12"><div class="swiper-viewport">
                <div id="slideshow0" class="swiper-container">
                    <div class="swiper-wrapper">       <div class="swiper-slide text-center"><a href="index.php?route=product/product&amp;path=57&amp;product_id=49"><img src="http://demo-opencart.ru/image/cache/catalog/demo/banners/iPhone6-1140x380.jpg" alt="iPhone 6" class="img-responsive" /></a></div>
                        <div class="swiper-slide text-center"><img src="http://demo-opencart.ru/image/cache/catalog/demo/banners/MacBookAir-1140x380.jpg" alt="MacBookAir" class="img-responsive" /></div>
                    </div>
                </div>
                <div class="swiper-pagination slideshow0"></div>
                <div class="swiper-pager">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <script type="text/javascript"><!--
                $('#slideshow0').swiper({
                    mode: 'horizontal',
                    slidesPerView: 1,
                    pagination: '.slideshow0',
                    paginationClickable: true,
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    spaceBetween: 30,
                    autoplay: 2500,
                    autoplayDisableOnInteraction: true,
                    loop: true
                });
                --></script>
            <h3>Рекомендуемые</h3>
            <div class="row">
                <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=43"><img src="http://demo-opencart.ru/image/cache/catalog/demo/macbook_1-200x200.jpg" alt="MacBook" title="MacBook" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=43">MacBook</a></h4>
                            <p>

                                Intel Core 2 Duo processor

                                Powered by an Intel Core 2 Duo processor at speeds up to 2.1..</p>
                            <p class="price">
                                $602.00
                                <span class="price-tax">Без НДС: $500.00</span>
                            </p>
                        </div>
                        <div class="button-group">
                            <button type="button" onclick="cart.add('43');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Купить</span></button>
                            <button type="button" data-toggle="tooltip" title="В закладки" onclick="wishlist.add('43');"><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" title="В сравнение" onclick="compare.add('43');"><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=40"><img src="http://demo-opencart.ru/image/cache/catalog/demo/iphone_1-200x200.jpg" alt="iPhone" title="iPhone" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=40">iPhone</a></h4>
                            <p>
                                iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a nam..</p>
                            <p class="price">
                                $123.20
                                <span class="price-tax">Без НДС: $101.00</span>
                            </p>
                        </div>
                        <div class="button-group">
                            <button type="button" onclick="cart.add('40');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Купить</span></button>
                            <button type="button" data-toggle="tooltip" title="В закладки" onclick="wishlist.add('40');"><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" title="В сравнение" onclick="compare.add('40');"><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=42"><img src="http://demo-opencart.ru/image/cache/catalog/demo/apple_cinema_30-200x200.jpg" alt="Apple Cinema 30&quot;" title="Apple Cinema 30&quot;" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=42">Apple Cinema 30&quot;</a></h4>
                            <p>
                                The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed sp..</p>
                            <p class="price">
                                <span class="price-new">$110.00</span> <span class="price-old">$122.00</span>
                                <span class="price-tax">Без НДС: $90.00</span>
                            </p>
                        </div>
                        <div class="button-group">
                            <button type="button" onclick="cart.add('42');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Купить</span></button>
                            <button type="button" data-toggle="tooltip" title="В закладки" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" title="В сравнение" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=30"><img src="http://demo-opencart.ru/image/cache/catalog/demo/canon_eos_5d_1-200x200.jpg" alt="Canon EOS 5D" title="Canon EOS 5D" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=30">Canon EOS 5D</a></h4>
                            <p>
                                Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we'r..</p>
                            <p class="price">
                                <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                                <span class="price-tax">Без НДС: $80.00</span>
                            </p>
                        </div>
                        <div class="button-group">
                            <button type="button" onclick="cart.add('30');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Купить</span></button>
                            <button type="button" data-toggle="tooltip" title="В закладки" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" title="В сравнение" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-viewport">
                <div id="carousel0" class="swiper-container">
                    <div class="swiper-wrapper">      <div class="swiper-slide text-center"><img src="http://demo-opencart.ru/image/cache/catalog/demo/manufacturer/nfl-130x100.png" alt="NFL" class="img-responsive" /></div>
                        <div class="swiper-slide text-center"><img src="http://demo-opencart.ru/image/cache/catalog/demo/manufacturer/redbull-130x100.png" alt="RedBull" class="img-responsive" /></div>
                        <div class="swiper-slide text-center"><img src="http://demo-opencart.ru/image/cache/catalog/demo/manufacturer/sony-130x100.png" alt="Sony" class="img-responsive" /></div>
                        <div class="swiper-slide text-center"><img src="http://demo-opencart.ru/image/cache/catalog/demo/manufacturer/cocacola-130x100.png" alt="Coca Cola" class="img-responsive" /></div>
                        <div class="swiper-slide text-center"><img src="http://demo-opencart.ru/image/cache/catalog/demo/manufacturer/burgerking-130x100.png" alt="Burger King" class="img-responsive" /></div>
                        <div class="swiper-slide text-center"><img src="http://demo-opencart.ru/image/cache/catalog/demo/manufacturer/canon-130x100.png" alt="Canon" class="img-responsive" /></div>
                        <div class="swiper-slide text-center"><img src="http://demo-opencart.ru/image/cache/catalog/demo/manufacturer/harley-130x100.png" alt="Harley Davidson" class="img-responsive" /></div>
                        <div class="swiper-slide text-center"><img src="http://demo-opencart.ru/image/cache/catalog/demo/manufacturer/dell-130x100.png" alt="Dell" class="img-responsive" /></div>
                        <div class="swiper-slide text-center"><img src="http://demo-opencart.ru/image/cache/catalog/demo/manufacturer/disney-130x100.png" alt="Disney" class="img-responsive" /></div>
                        <div class="swiper-slide text-center"><img src="http://demo-opencart.ru/image/cache/catalog/demo/manufacturer/starbucks-130x100.png" alt="Starbucks" class="img-responsive" /></div>
                        <div class="swiper-slide text-center"><img src="http://demo-opencart.ru/image/cache/catalog/demo/manufacturer/nintendo-130x100.png" alt="Nintendo" class="img-responsive" /></div>
                    </div>
                </div>
                <div class="swiper-pagination carousel0"></div>
                <div class="swiper-pager">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <script type="text/javascript"><!--
                $('#carousel0').swiper({
                    mode: 'horizontal',
                    slidesPerView: 5,
                    pagination: '.carousel0',
                    paginationClickable: true,
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    autoplay: 2500,
                    loop: true
                });
                --></script>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>Информация</h5>
                <ul class="list-unstyled">
                    <li><a href="http://demo-opencart.ru/index.php?route=information/information&amp;information_id=4">About Us</a></li>
                    <li><a href="http://demo-opencart.ru/index.php?route=information/information&amp;information_id=6">Delivery Information</a></li>
                    <li><a href="http://demo-opencart.ru/index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>
                    <li><a href="http://demo-opencart.ru/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Служба поддержки</h5>
                <ul class="list-unstyled">
                    <li><a href="http://demo-opencart.ru/index.php?route=information/contact">Контакты</a></li>
                    <li><a href="http://demo-opencart.ru/index.php?route=account/return/add">Возврат товара</a></li>
                    <li><a href="http://demo-opencart.ru/index.php?route=information/sitemap">Карта сайта</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Дополнительно</h5>
                <ul class="list-unstyled">
                    <li><a href="http://demo-opencart.ru/index.php?route=product/manufacturer">Производители</a></li>
                    <li><a href="http://demo-opencart.ru/index.php?route=account/voucher">Подарочные сертификаты</a></li>
                    <li><a href="http://demo-opencart.ru/index.php?route=affiliate/login">Партнерская программа</a></li>
                    <li><a href="http://demo-opencart.ru/index.php?route=product/special">Акции</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Личный Кабинет</h5>
                <ul class="list-unstyled">
                    <li><a href="http://demo-opencart.ru/index.php?route=account/account">Личный Кабинет</a></li>
                    <li><a href="http://demo-opencart.ru/index.php?route=account/order">История заказов</a></li>
                    <li><a href="http://demo-opencart.ru/index.php?route=account/wishlist">Закладки</a></li>
                    <li><a href="http://demo-opencart.ru/index.php?route=account/newsletter">Рассылка</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p>Работает на <a href="https://www.opencart.ru">OpenCart</a><br /> Your Store &copy; 2019</p>
    </div>
</footer>
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>