<?php
/* @var $this View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="ru" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="ru" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="ru">
<!--<![endif]-->
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="<?= Html::encode(Url::canonical()) ?>" rel="canonical"/>
    <link href="<?= Yii::getAlias('@web/images/cart.png') ?>" rel="icon"/>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
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

                        <img src="<?= Yii::getAlias('@web/images/ru-ru.png') ?>" alt="Русский" title="Русский">
                        <span class="hidden-xs hidden-sm hidden-md">Язык</span>&nbsp;<i class="fa fa-caret-down"></i></button>
                    <ul class="dropdown-menu">
                        <li>
                            <button class="btn btn-link btn-block language-select" type="button" name="en-gb"><img src="<?= Yii::getAlias('@web/images/en-gb.png') ?>" alt="English" title="English" /> English</button>
                        </li>
                        <li>
                            <button class="btn btn-link btn-block language-select" type="button" name="ru-ru"><img src="<?= Yii::getAlias('@web/images/ru-ru.png') ?>" alt="Русский" title="Русский" /> Русский</button>
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
                        <?php if (Yii::$app->user->isGuest): ?>
                            <li><a href="<?= Html::encode(Url::to(['/auth/auth/login'])) ?>">Login</a></li>
                            <li><a href="<?= Html::encode(Url::to(['/auth/signup/request'])) ?>">Signup</a></li>
                        <?php else: ?>
                            <li><a href="<?= Html::encode(Url::to(['/auth/auth/logout'])) ?>" data-method="post">Logout</a></li>
                            <li><a href="<?= Html::encode(Url::to(['/cabinet/default/index'])) ?>">Cabinet</a></li>
                        <?php endif; ?>
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
                <div id="logo">          <h1><a href="<?= Url::home() ?>">Your Store</a></h1>
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
    <?php
    NavBar::begin([
        'options' => [
            'screenReaderToggleText' => 'Menu',
            'id' => 'menu',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Catalog', 'url' => ['/shop/catalog/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/contact/index']],
        ],
    ]);
    NavBar::end();
    ?>
</div>


<div id="common-home" class="container">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>

    <?= $content ?>
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
<?php $this->endBody() ?>
</body></html>
<?php $this->endPage() ?>