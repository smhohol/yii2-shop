<?php
/* @var $this View */
/* @var $content string */

use frontend\widgets\CategoriesWidget;
use yii\web\View;
?>

<?php $this->beginContent('@frontend/views/layouts/main.php') ?>

<div class="row">
    <aside id="column-left" class="col-sm-3 hidden-xs">
        <?= CategoriesWidget::widget([
            'active' => $this->params['active_category'] ?? null
        ]) ?>
    </aside>

    <div id="content" class="col-sm-9">
        <?= $content ?>
    </div>
</div>

<?php $this->endContent() ?>