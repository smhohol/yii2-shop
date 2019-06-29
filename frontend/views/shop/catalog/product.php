<?php
/* @var $this yii\web\View */
/* @var $product shop\entities\Shop\Product\Product */
/* @var $cartForm shop\forms\Shop\AddToCartForm */

use frontend\assets\MagnificPopupAsset;
use shop\helpers\PriceHelper;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $product->name;

$this->registerMetaTag(['name' =>'description', 'content' => $product->meta->description]);
$this->registerMetaTag(['name' =>'keywords', 'content' => $product->meta->keywords]);

$this->params['breadcrumbs'][] = ['label' => 'Catalog', 'url' => ['index']];
$this->params['breadcrumbs'][] = $product->name;

MagnificPopupAsset::register($this);
?>

<div class="row" xmlns:fb="http://www.w3.org/1999/xhtml">
    <div id="content" class="col-sm-12">
        <div class="row">
            <div class="col-sm-8">
                <ul class="thumbnails">
                    <?php foreach ($product->photos as $i => $photo): ?>
                        <?php if ($i == 0): ?>
                            <li>
                                <a class="thumbnail" href="<?= $photo->getUploadedFileUrl('file') ?>">
                                    <img src="<?= $photo->getThumbFileUrl('file', 'catalog_product_main') ?>"
                                         title="<?= Html::encode($product->name) ?>" alt="<?= Html::encode($product->name) ?>">
                                </a>
                            </li>
                        <?php else: ?>
                            <li class="image-additional">
                                <a class="thumbnail" href="<?= $photo->getUploadedFileUrl('file') ?>">
                                    <img src="<?= $photo->getThumbFileUrl('file', 'catalog_product_additional') ?>"
                                         alt="">
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-description" data-toggle="tab" aria-expanded="true">Description</a>
                    </li>
                    <li class=""><a href="#tab-specification" data-toggle="tab" aria-expanded="false">Specification</a>
                    </li>
                    <li class=""><a href="#tab-review" data-toggle="tab" aria-expanded="false">Reviews (0)</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-description">
                        <p><?= Yii::$app->formatter->asNtext($product->description) ?></p>
                    </div>
                    <div class="tab-pane" id="tab-specification">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td colspan="2"><strong>Memory</strong></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>test 1</td>
                                <td>16GB</td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <td colspan="2"><strong>Processor</strong></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>No. of Cores</td>
                                <td>4</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="tab-review">
                        <form class="form-horizontal" id="form-review">
                            <div id="review"><p>There are no reviews for this product.</p>
                            </div>
                            <h2>Write a review</h2>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="control-label" for="input-name">Your Name</label>
                                    <input type="text" name="name" value="" id="input-name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="control-label" for="input-review">Your Review</label>
                                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not
                                        translated!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="control-label">Rating</label>
                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                    <input type="radio" name="rating" value="1">
                                    &nbsp;
                                    <input type="radio" name="rating" value="2">
                                    &nbsp;
                                    <input type="radio" name="rating" value="3">
                                    &nbsp;
                                    <input type="radio" name="rating" value="4">
                                    &nbsp;
                                    <input type="radio" name="rating" value="5">
                                    &nbsp;Good
                                </div>
                            </div>
                            <div class="buttons clearfix">
                                <div class="pull-right">
                                    <button type="button" id="button-review" data-loading-text="Loading..."
                                            class="btn btn-primary">Continue
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="btn-group">
                    <button type="button" data-toggle="tooltip" class="btn btn-default" title=""
                            onclick="wishlist.add('47');" data-original-title="Add to Wish List"><i
                                class="fa fa-heart"></i></button>
                    <button type="button" data-toggle="tooltip" class="btn btn-default" title=""
                            onclick="compare.add('47');" data-original-title="Compare this Product"><i
                                class="fa fa-exchange"></i></button>
                </div>
                <h1><?= Html::encode($product->name) ?></h1>
                <ul class="list-unstyled">
                    <li>Brand:
                        <a href="<?= Html::encode(Url::to(['brand', 'id' => $product->brand->id])) ?>">
                            <?= Html::encode($product->brand->name) ?>
                        </a>
                    </li>
                    <li>Tags:
                        <?php foreach ($product->tags as $tag): ?>
                            <a href="<?= Html::encode(Url::to(['tag', 'id' => $tag->id])) ?>">
                                <?= Html::encode($tag->name) ?>
                            </a>
                        <?php endforeach; ?>
                    </li>
                    <li>Product Code: <?= Html::encode($product->code) ?></li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>$<?= PriceHelper::format($product->price_new) ?></b>
                    </li>
                </ul>
                <div id="product">
                    <hr>
                    <h3>Available Options</h3>
                    <?php $form = ActiveForm::begin() ?>
                        <?= $form->field($cartForm, 'modification')->dropDownList($cartForm->modificationsList(),
                            ['prompt' => '--- Select ---']) ?>
                        <?= $form->field($cartForm, 'quantity')->textInput() ?>

                        <div class="form-group">
                            <?= Html::submitButton('Add to Cart', ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                        </div>
                    <?php ActiveForm::end() ?>
                </div>
                <div class="rating">
                    <p><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <span
                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <span
                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <span
                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <span
                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <a href=""
                                                                                                       onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0
                            reviews</a> / <a href=""
                                             onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write
                            a review</a></p>
                    <hr>

                    <div class="addthis_toolbox addthis_default_style"
                         data-url="https://demo.opencart.com/index.php?route=product/product&amp;product_id=47"><a
                                class="addthis_button_facebook_like at300b" fb:like:layout="button_count">
                            <div class="fb-like fb_iframe_widget" data-layout="button_count" data-show_faces="false"
                                 data-share="false" data-action="like" data-width="90" data-height="25"
                                 data-font="arial"
                                 data-href="https://demo.opencart.com/index.php?route=product/product&amp;product_id=47"
                                 data-send="false" style="height: 25px;" fb-xfbml-state="rendered"
                                 fb-iframe-plugin-query="action=like&amp;app_id=172525162793917&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=https%3A%2F%2Fdemo.opencart.com%2Findex.php%3Froute%3Dproduct%2Fproduct%26product_id%3D47&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90">
                                <span style="vertical-align: bottom; width: 67px; height: 20px;"><iframe
                                            name="f66b942dbc3d88" width="90px" height="25px"
                                            title="fb:like Facebook Social Plugin" frameborder="0"
                                            allowtransparency="true" allowfullscreen="true" scrolling="no"
                                            allow="encrypted-media"
                                            src="https://www.facebook.com/v2.6/plugins/like.php?action=like&amp;app_id=172525162793917&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df173f41137bee68%26domain%3Ddemo.opencart.com%26origin%3Dhttps%253A%252F%252Fdemo.opencart.com%252Ff34b2338f76019%26relation%3Dparent.parent&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=https%3A%2F%2Fdemo.opencart.com%2Findex.php%3Froute%3Dproduct%2Fproduct%26product_id%3D47&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90"
                                            style="border: none; visibility: visible; width: 67px; height: 20px;"
                                            class=""></iframe></span></div>
                        </a> <a class="addthis_button_tweet at300b">
                            <div class="tweet_iframe_widget" style="width: 62px; height: 25px;"><span><iframe
                                            id="twitter-widget-0" scrolling="no" frameborder="0"
                                            allowtransparency="true"
                                            class="twitter-share-button twitter-share-button-rendered twitter-tweet-button"
                                            style="position: static; visibility: visible; width: 60px; height: 20px;"
                                            title="Twitter Tweet Button"
                                            src="https://platform.twitter.com/widgets/tweet_button.d753e00c3e838c1b2558149bd3f6ecb8.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fdemo.opencart.com%2Findex.php%3Froute%3Dproduct%2Fproduct%26product_id%3D47%26search%3DHP%2BLP3065&amp;size=m&amp;text=HP%20LP3065%3A&amp;time=1561804605511&amp;type=share&amp;url=https%3A%2F%2Fdemo.opencart.com%2Findex.php%3Froute%3Dproduct%2Fproduct%26product_id%3D47%23.XRc_PTqyTAY.twitter"
                                            data-url="https://demo.opencart.com/index.php?route=product/product&amp;product_id=47#.XRc_PTqyTAY.twitter"></iframe></span>
                            </div>
                        </a> <a class="addthis_button_pinterest_pinit at300b"></a> <a
                                class="addthis_counter addthis_pill_style addthis_nonzero" href="#"
                                style="display: inline-block;"><a
                                    class="atc_s addthis_button_compact">Share<span></span></a><a
                                    class="addthis_button_expanded" target="_blank" title="More" href="#">821</a></a>
                        <div class="atclear"></div>
                    </div>
                    <script type="text/javascript"
                            src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>

                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript"><!--
    $('#button-cart').on('click', function () {
        $.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function () {
                $('#button-cart').button('loading');
            },
            complete: function () {
                $('#button-cart').button('reset');
            },
            success: function (json) {
                $('.alert-dismissible, .text-danger').remove();
                $('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = $('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    $('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    $('.breadcrumb').after('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

                    $('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');

                    $('html, body').animate({scrollTop: 0}, 'slow');

                    $('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });
    //--></script>

<?php $js = <<<EOD
$('.thumbnails').magnificPopup({
    type: 'image',
    delegate: 'a',
    gallery: {
        enabled: true
    }
});
EOD;
$this->registerJs($js); ?>