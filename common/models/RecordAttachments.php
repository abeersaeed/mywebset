<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "record_attachments".
 *
 * @property int $id
 * @property int $record_id
 * @property string $file
 *
 * @property PatientRecords $record
 */
class RecordAttachments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'record_attachments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id', 'file'], 'required'],
            [['record_id'], 'integer'],
            [['file'], 'string', 'max' => 256],
            [['record_id'], 'exist', 'skipOnError' => true, 'targetClass' => PatientRecords::className(), 'targetAttribute' => ['record_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'record_id' => 'Record ID',
            'file' => 'File',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecord()
    {
        return $this->hasOne(PatientRecords::className(), ['id' => 'record_id']);
    }
}
