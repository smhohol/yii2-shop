<?php
/* @var $this View */
/* @var $content string */

use frontend\assets\SwiperAsset;
use yii\web\View;

SwiperAsset::register($this);
?>

<?php $this->beginContent('@frontend/views/layouts/main.php') ?>

<div class="row">
    <div id="content" class="col-sm-12">
        <div class="swiper-viewport">
            <div id="slideshow0" class="swiper-container swiper-container-horizontal">
                <div class="swiper-wrapper"
                     style="transform: translate3d(-3486px, 0px, 0px); transition-duration: 0ms;">
                    <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev"
                         data-swiper-slide-index="1" style="width: 1132px; margin-right: 30px;"><img
                                src="http://static.trial.ru/cache/banners/MacBookAir-1140x380.jpg"
                                alt="MacBookAir" class="img-responsive"></div>
                    <div class="swiper-slide text-center swiper-slide-duplicate-active" data-swiper-slide-index="0"
                         style="width: 1132px; margin-right: 30px;"><a
                                href="index.php?route=product/product&amp;path=57&amp;product_id=49"><img
                                    src="http://static.trial.ru/cache/banners/iPhone6-1140x380.jpg"
                                    alt="iPhone 6" class="img-responsive"></a></div>
                    <div class="swiper-slide text-center swiper-slide-prev swiper-slide-duplicate-next"
                         data-swiper-slide-index="1" style="width: 1132px; margin-right: 30px;"><img
                                src="http://static.trial.ru/cache/banners/MacBookAir-1140x380.jpg"
                                alt="MacBookAir" class="img-responsive"></div>
                    <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-active"
                         data-swiper-slide-index="0" style="width: 1132px; margin-right: 30px;"><a
                                href="index.php?route=product/product&amp;path=57&amp;product_id=49"><img
                                    src="http://static.trial.ru/cache/banners/iPhone6-1140x380.jpg"
                                    alt="iPhone 6" class="img-responsive"></a></div>
                </div>
            </div>
            <div class="swiper-pagination slideshow0 swiper-pagination-clickable swiper-pagination-bullets"><span
                        class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                        class="swiper-pagination-bullet"></span></div>
            <div class="swiper-pager">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <h3>Featured</h3>
        <div class="row">
            <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="product-thumb transition">
                    <div class="image"><a
                                href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=43"><img
                                    src="http://static.trial.ru/cache/products/macbook_1-200x200.jpg"
                                    alt="MacBook" title="MacBook" class="img-responsive"></a></div>
                    <div class="caption">
                        <h4>
                            <a href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=43">MacBook</a>
                        </h4>
                        <p>

                            Intel Core 2 Duo processor

                            Powered by an Intel Core 2 Duo processor at speeds up to 2.1..</p>
                        <p class="price">
                            $602.00
                            <span class="price-tax">Без НДС: $500.00</span>
                        </p>
                    </div>
                    <div class="button-group">
                        <button type="button" onclick="cart.add('43');"><i class="fa fa-shopping-cart"></i> <span
                                    class="hidden-xs hidden-sm hidden-md">Купить</span></button>
                        <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('43');"
                                data-original-title="В закладки"><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="" onclick="compare.add('43');"
                                data-original-title="В сравнение"><i class="fa fa-exchange"></i></button>
                    </div>
                </div>
            </div>
            <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="product-thumb transition">
                    <div class="image"><a
                                href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=40"><img
                                    src="http://static.trial.ru/cache/products/iphone_1-200x200.jpg"
                                    alt="iPhone" title="iPhone" class="img-responsive"></a></div>
                    <div class="caption">
                        <h4>
                            <a href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=40">iPhone</a>
                        </h4>
                        <p>
                            iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping
                            a nam..</p>
                        <p class="price">
                            $123.20
                            <span class="price-tax">Без НДС: $101.00</span>
                        </p>
                    </div>
                    <div class="button-group">
                        <button type="button" onclick="cart.add('40');"><i class="fa fa-shopping-cart"></i> <span
                                    class="hidden-xs hidden-sm hidden-md">Купить</span></button>
                        <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('40');"
                                data-original-title="В закладки"><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="" onclick="compare.add('40');"
                                data-original-title="В сравнение"><i class="fa fa-exchange"></i></button>
                    </div>
                </div>
            </div>
            <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="product-thumb transition">
                    <div class="image"><a
                                href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=42"><img
                                    src="http://static.trial.ru/cache/products/apple_cinema_30-200x200.jpg"
                                    alt="Apple Cinema 30&quot;" title="Apple Cinema 30&quot;"
                                    class="img-responsive"></a></div>
                    <div class="caption">
                        <h4><a href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=42">Apple
                                Cinema 30"</a></h4>
                        <p>
                            The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution.
                            Designed sp..</p>
                        <p class="price">
                            <span class="price-new">$110.00</span> <span class="price-old">$122.00</span>
                            <span class="price-tax">Без НДС: $90.00</span>
                        </p>
                    </div>
                    <div class="button-group">
                        <button type="button" onclick="cart.add('42');"><i class="fa fa-shopping-cart"></i> <span
                                    class="hidden-xs hidden-sm hidden-md">Купить</span></button>
                        <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');"
                                data-original-title="В закладки"><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="" onclick="compare.add('42');"
                                data-original-title="В сравнение"><i class="fa fa-exchange"></i></button>
                    </div>
                </div>
            </div>
            <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="product-thumb transition">
                    <div class="image"><a
                                href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=30"><img
                                    src="http://static.trial.ru/cache/products/canon_eos_5d_1-200x200.jpg"
                                    alt="Canon EOS 5D" title="Canon EOS 5D" class="img-responsive"></a></div>
                    <div class="caption">
                        <h4><a href="http://demo-opencart.ru/index.php?route=product/product&amp;product_id=30">Canon
                                EOS 5D</a></h4>
                        <p>
                            Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while
                            we'r..</p>
                        <p class="price">
                            <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                            <span class="price-tax">Без НДС: $80.00</span>
                        </p>
                    </div>
                    <div class="button-group">
                        <button type="button" onclick="cart.add('30');"><i class="fa fa-shopping-cart"></i> <span
                                    class="hidden-xs hidden-sm hidden-md">Купить</span></button>
                        <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30');"
                                data-original-title="В закладки"><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="" onclick="compare.add('30');"
                                data-original-title="В сравнение"><i class="fa fa-exchange"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-viewport">
            <div id="carousel0" class="swiper-container swiper-container-horizontal">
                <div class="swiper-wrapper"
                     style="transform: translate3d(-1584.8px, 0px, 0px); transition-duration: 0ms;">
                    <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="6"
                         style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/harley-130x100.png"
                                alt="Harley Davidson" class="img-responsive"></div>
                    <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="7"
                         style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/dell-130x100.png"
                                alt="Dell" class="img-responsive"></div>
                    <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="8"
                         style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/disney-130x100.png"
                                alt="Disney" class="img-responsive"></div>
                    <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="9"
                         style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/starbucks-130x100.png"
                                alt="Starbucks" class="img-responsive"></div>
                    <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="10"
                         style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/nintendo-130x100.png"
                                alt="Nintendo" class="img-responsive"></div>
                    <div class="swiper-slide text-center" data-swiper-slide-index="0" style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/nfl-130x100.png"
                                alt="NFL" class="img-responsive"></div>
                    <div class="swiper-slide text-center swiper-slide-prev" data-swiper-slide-index="1"
                         style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/redbull-130x100.png"
                                alt="RedBull" class="img-responsive"></div>
                    <div class="swiper-slide text-center swiper-slide-active" data-swiper-slide-index="2"
                         style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/sony-130x100.png"
                                alt="Sony" class="img-responsive"></div>
                    <div class="swiper-slide text-center swiper-slide-next" data-swiper-slide-index="3"
                         style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/cocacola-130x100.png"
                                alt="Coca Cola" class="img-responsive"></div>
                    <div class="swiper-slide text-center" data-swiper-slide-index="4" style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/burgerking-130x100.png"
                                alt="Burger King" class="img-responsive"></div>
                    <div class="swiper-slide text-center" data-swiper-slide-index="5" style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/canon-130x100.png"
                                alt="Canon" class="img-responsive"></div>
                    <div class="swiper-slide text-center" data-swiper-slide-index="6" style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/harley-130x100.png"
                                alt="Harley Davidson" class="img-responsive"></div>
                    <div class="swiper-slide text-center" data-swiper-slide-index="7" style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/dell-130x100.png"
                                alt="Dell" class="img-responsive"></div>
                    <div class="swiper-slide text-center" data-swiper-slide-index="8" style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/disney-130x100.png"
                                alt="Disney" class="img-responsive"></div>
                    <div class="swiper-slide text-center" data-swiper-slide-index="9" style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/starbucks-130x100.png"
                                alt="Starbucks" class="img-responsive"></div>
                    <div class="swiper-slide text-center" data-swiper-slide-index="10" style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/nintendo-130x100.png"
                                alt="Nintendo" class="img-responsive"></div>
                    <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="0"
                         style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/nfl-130x100.png"
                                alt="NFL" class="img-responsive"></div>
                    <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-prev"
                         data-swiper-slide-index="1" style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/redbull-130x100.png"
                                alt="RedBull" class="img-responsive"></div>
                    <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-active"
                         data-swiper-slide-index="2" style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/sony-130x100.png"
                                alt="Sony" class="img-responsive"></div>
                    <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-next"
                         data-swiper-slide-index="3" style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/cocacola-130x100.png"
                                alt="Coca Cola" class="img-responsive"></div>
                    <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="4"
                         style="width: 226.4px;"><img
                                src="http://static.trial.ru/cache/manufacturers/burgerking-130x100.png"
                                alt="Burger King" class="img-responsive"></div>
                </div>
            </div>
            <div class="swiper-pagination carousel0 swiper-pagination-clickable swiper-pagination-bullets"><span
                        class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span
                        class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                        class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span
                        class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span
                        class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span
                        class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
            <div class="swiper-pager">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <?= $content ?>
    </div>
</div>


<?php $this->registerJs("
    new Swiper('#slideshow0', {
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
        pagination: {
            el: '.slideshow0',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
") ?>

<?php $this->registerJs("
    new Swiper('#carousel0', {
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        slidesPerView: 5,
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
        pagination: {
            el: '.carousel0',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
") ?>

<?php $this->endContent() ?>