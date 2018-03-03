<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_profile".
 *
 * @property int $id
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $picture
 * @property int $gender
 * @property string $dob
 * @property string $country
 * @property string $city
 * @property string $zip_code
 *
 * @property User $user
 */
class UserProfile extends \yii\db\ActiveRecord
{
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'first_name', 'last_name'], 'required'],
            [['user_id'], 'integer'],
            [['first_name', 'last_name', 'picture', 'dob', 'country', 'city', 'zip_code'], 'string', 'max' => 256],
            [['gender'], 'string', 'max' => 3],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'        => 'ID',
            'user_id'   => 'User ID',
            'first_name'=> 'First Name',
            'last_name' => 'Last Name',
            'picture'   => 'Picture',
            'gender'    => 'Gender',
            'dob'       => 'Date of birth',
            'country'   => 'Country',
            'city'      => 'City',
            'zip_code'  => 'Zip Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public static function getGenderArray(){

        return [
            Self::GENDER_MALE   => 'Male',
            Self::GENDER_FEMALE => 'Female'
        ];
    }
}
