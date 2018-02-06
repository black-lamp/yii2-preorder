<?php

namespace bl\preorder\common\models;


/**
 * @author Maxim Sluysarenko <waspmax1@gmail.com>
 *
 * This is the model class for table "preorder".
 *
 * @property int $id
 * @property int $phone_number
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 */
class Preorder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'preorder';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone_number'], 'integer'],
            [['phone_number'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone_number' => 'Номер телефона',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
