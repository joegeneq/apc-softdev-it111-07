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
            'MGR_LName' => 'Mgr  Lname',
            'MGR_FName' => 'Mgr  Fname',
            'MGR_MName' => 'Mgr  Mname',
            'MGR_Gender' => 'Mgr  Gender',
            'MGR_BDate' => 'Mgr  Bdate',
            'MGR_BlkNo' => 'Mgr  Blk No',
            'MGR_Street' => 'Mgr  Street',
            'MGR_Brgy' => 'Mgr  Brgy',
            'MGR_City' => 'Mgr  City',
            'MGR_ZipCode' => 'Mgr  Zip Code',
            'MGR_ContactNo' => 'Mgr  Contact No',
            'MGR_EmailAdd' => 'Mgr  Email Add',
            'MGR_Expertise' => 'Mgr  Expertise',
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
