<?php

namespace yagerguo\yii2post\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property integer $categoryId
 * @property string $slug
 * @property string $title
 * @property string $status
 * @property string $content
 * @property integer $createdAt
 * @property integer $updatedAt
 */
class Post extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['categoryId', 'status', 'createdAt', 'updatedAt'], 'integer'],
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['slug'], 'string', 'max' => 200],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'categoryId' => '分类ID',
            'slug' => 'Slug',
            'title' => '标题',
            'status' => '状态',
            'content' => '内容',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    public function behaviors() {
        return [
            [
                'class' => \yii\behaviors\TimestampBehavior::className(),
                'createdAtAttribute' => 'createdAt',
                'updatedAtAttribute' => 'updatedAt',
            ],
        ];
    }

}
