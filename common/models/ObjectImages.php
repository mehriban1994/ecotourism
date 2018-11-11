<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "object_images".
 *
 * @property int $object_image_id
 * @property int $object_id
 * @property string $image
 * @property int $type_id
 *
 * @property Object $object
 * @property ImageTypes $type
 */
class ObjectImages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $imageFile;

    public static function tableName()
    {
        return 'object_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['object_id', 'type_id'], 'required'],
            [['object_id', 'type_id'], 'integer'],
            [['image'], 'string', 'max' => 200],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['object_id'], 'exist', 'skipOnError' => true, 'targetClass' => Object::className(), 'targetAttribute' => ['object_id' => 'object_id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ImageTypes::className(), 'targetAttribute' => ['type_id' => 'type_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'object_image_id' => Yii::t('app', 'Object Image ID'),
            'object_id' => Yii::t('app', 'Object'),
            'image' => Yii::t('app', 'Image'),
            'type_id' => Yii::t('app', 'Type'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObject()
    {
        return $this->hasOne(Object::className(), ['object_id' => 'object_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(ImageTypes::className(), ['type_id' => 'type_id']);
    }
}
