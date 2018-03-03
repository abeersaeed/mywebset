<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "patient_details".
 *
 * @property string $id
 * @property int $user_id
 * @property string $height
 * @property string $weight
 * @property string $bmi
 * @property string $date
 *
 * @property User $user
 */
class PatientDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['height', 'weight', 'bmi', 'date'], 'string', 'max' => 256],
            [['id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'height' => 'Height',
            'weight' => 'Weight',
            'bmi' => 'Bmi',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
