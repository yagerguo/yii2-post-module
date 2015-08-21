<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PostCategory */

$this->title = '添加文章分类';
$this->params['breadcrumbs'][] = ['label' => '文章分类', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-category-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
