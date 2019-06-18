<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class SwiperAsset extends AssetBundle
{
    public $sourcePath = '@bower/swiper';
    public $css = [
        'dist/css/swiper.min.css',
    ];
    public $js = [
        'dist/js/swiper.min.js',
    ];
}