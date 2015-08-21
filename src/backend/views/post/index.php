<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '所有文章';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">
    
    <div class="well">
        <?= Html::a('添加文章', ['create'], ['class' => 'btn btn-success']) ?>
    </div>
    
    <div class="box">
        <div class="box-header"></div>
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    'id',
                    'categoryId',
                    'slug',
                    'title',
                    'status',
                    // 'content:ntext',
                    // 'createdAt',
                    // 'updatedAt',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>

</div>
