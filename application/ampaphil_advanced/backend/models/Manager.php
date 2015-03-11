<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "manager".
 *
 * @property integer $id
 * @property string $MGR_LName
 * @property string $MGR_FName
 * @property string $MGR_MName
 * @property string $MGR_Gender
 * @property string $MGR_BDate
 * @property string $MGR_BlkNo
 * @property string $MGR_Street
 * @property string $MGR_Brgy
 * @property string $MGR_City
 * @property integer $MGR_ZipCode
 * @property string $MGR_ContactNo
 * @property string $MGR_EmailAdd
 * @property string $MGR_Expertise
 *
 * @property Talent[] $talents
 */
class Manager extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manager';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MGR_LName', 'MGR_FName', 'MGR_Gender', 'MGR_BDate', 'MGR_BlkNo', 'MGR_Street', 'MGR_Brgy', 'MGR_City', 'MGR_ContactNo', 'MGR_EmailAdd', 'MGR_Expertise'], 'required'],
            [['MGR_BDate'], 'safe'],
            [['MGR_ZipCode'], 'integer'],
            [['MGR_LName', 'MGR_FName', 'MGR_MName', 'MGR_Street', 'MGR_Brgy', 'MGR_City', 'MGR_EmailAdd'], 'string', 'max' => 45],
            [['MGR_Gender', 'MGR_BlkNo'], 'string', 'max' => 10],
            [['MGR_ContactNo', 'MGR_Expertise'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'MGR_LName' => 'Managers Last Name',
            'MGR_FName' => 'First Name',
            'MGR_MName' => 'Middle Name',
            'MGR_Gender' => 'Gender',
            'MGR_BDate' => 'Birth Date',
            'MGR_BlkNo' => 'Block Number',
            'MGR_Street' => 'Street',
            'MGR_Brgy' => 'Barangay',
            'MGR_City' => 'City',
            'MGR_ZipCode' => 'Zip Code',
            'MGR_ContactNo' => 'Contact Number',
            'MGR_EmailAdd' => 'Email Address',
            'MGR_Expertise' => 'Expertise',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTalents()
    {
        return $this->hasMany(Talent::className(), ['MANAGER_id' => 'id']);
    }
}
