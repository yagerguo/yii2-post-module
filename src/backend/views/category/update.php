<?php

$this->title = '编辑';
$this->params['subTitle'] = $model->title;
$this->params['breadcrumbs'][] = ['label' => '文章分类', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑';
?>
<div class="post-category-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
