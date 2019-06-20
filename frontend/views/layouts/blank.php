<?php
/* @var $this View */
/* @var $content string */

use yii\web\View;
?>

<?php $this->beginContent('@frontend/views/layouts/main.php') ?>

    <div class="row">
        <div id="content" class="col-sm-12">
            <?= $content ?>
        </div>
    </div>

<?php $this->endContent() ?>