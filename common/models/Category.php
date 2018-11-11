<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "category".
 *
 * @property int $category_id
 * @property string $category_name
 * @property int $order_no
 * @property string $header_image
 * @property string $slug
 *
 * @property Object[] $objects
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $imageFile;

    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_name'], 'required'],
            [['order_no'], 'integer'],
            [['category_name', 'header_image', 'slug'], 'string', 'max' => 200],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'category_id' => Yii::t('app', 'Category ID'),
            'category_name' => Yii::t('app', 'Category Name'),
            'order_no' => Yii::t('app', 'Order No'),
            'header_image' => Yii::t('app', 'Header Image'),
            'slug' => Yii::t('app', 'Slug'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function uploadImage() {
        // get the uploaded file instance. for multiple file uploads
        // the following data will return an array (you may need to use
        // getInstances method)
        $image = UploadedFile::getInstance($this, 'imageFile');

        // if no image was uploaded abort the upload
        if (empty($image)) {
            return false;
        }

        // store the source file name
        $this->header_image = $image->name;

        // the uploaded image instance
        return $image;
    }

    public function getObjects()
    {
        return $this->hasMany(Object::className(), ['category_id' => 'category_id']);
    }

    public function getImageFile()
    {
        return isset($this->header_image) ? Yii::getAlias('@frontend').'\web\images\uz\categories\\' . $this->header_image : null;
    }

    public static function findBySlug($slug)
    {
        $cat = Category::findOne(['slug' => $slug]);
        return $cat;
    }

}
