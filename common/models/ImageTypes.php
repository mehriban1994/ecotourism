<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "image_types".
 *
 * @property int $type_id
 * @property string $type_name
 */
class ImageTypes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image_types';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_name'], 'required'],
            [['type_name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'type_id' => Yii::t('app', 'Type ID'),
            'type_name' => Yii::t('app', 'Type Name'),
        ];
    }
}
