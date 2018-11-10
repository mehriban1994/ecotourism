<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "object".
 *
 * @property int $object_id
 * @property string $object_name
 * @property int $category_id
 * @property string $location
 * @property string $address
 * @property string $short_info
 * @property string $full_info
 * @property string $slug
 *
 * @property Category $category
 * @property ObjectImages[] $objectImages
 */
class Object extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'object';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['object_name', 'category_id'], 'required'],
            [['category_id'], 'integer'],
            [['short_info', 'full_info'], 'string'],
            [['object_name'], 'string', 'max' => 400],
            [['location'], 'string', 'max' => 1000],
            [['address'], 'string', 'max' => 200],
            [['slug'], 'string', 'max' => 200],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'category_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'object_id' => Yii::t('app', 'Object ID'),
            'object_name' => Yii::t('app', 'Object Name'),
            'category_id' => Yii::t('app', 'Category ID'),
            'location' => Yii::t('app', 'Location'),
            'address' => Yii::t('app', 'Address'),
            'slug' => Yii::t('app', 'Slug'),
            'short_info' => Yii::t('app', 'Short Info'),
            'full_info' => Yii::t('app', 'Full Info'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['category_id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjectImages()
    {
        return $this->hasMany(ObjectImages::className(), ['object_id' => 'object_id']);
    }

    public function getThumbImage()
    {
        return $this->getObjectImages()->where(['type_id' => 1])->one();
    }

    public function getHeaderImage()
    {
        return $this->getObjectImages()->where(['type_id' => 3])->one();
    }

    public function getSimpleImages()
    {
        return $this->getObjectImages()->where(['type_id' => 2])->all();
    }
}
