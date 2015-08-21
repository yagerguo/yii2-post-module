<?php

namespace yagerguo\yii2post\models;

use Yii;

/**
 * This is the model class for table "post_category".
 *
 * @property integer $id
 * @property string $slug
 * @property string $title
 * @property string $status
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['status'], 'integer'],
            [['slug'], 'string', 'max' => 200],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slug' => 'Slug',
            'title' => '标题',
            'status' => '状态',
        ];
    }
    
    public static function dropDownData(){
        $data = self::find()->all();
        $result = [];
        foreach($data as $one){
            $result[$one->id] = $one->title;
        }
        return $result;
    }
    
}
