<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "patient_records".
 *
 * @property int $id
 * @property int $user_id
 * @property string $test_name
 * @property string $test_date
 *
 * @property User $user
 * @property RecordAttachments[] $recordAttachments
 */
class PatientRecords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient_records';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'test_name'], 'required'],
            [['user_id'], 'integer'],
            [['test_name'], 'string', 'max' => 500],
            [['test_date'], 'string', 'max' => 256],
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
            'test_name' => 'Test Name',
            'test_date' => 'Test Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecordAttachments()
    {
        return $this->hasMany(RecordAttachments::className(), ['record_id' => 'id']);
    }
}
