<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $EMP_LName
 * @property string $EMP_FName
 * @property string $EMP_MName
 * @property string $EMP_Gender
 * @property string $EMP_BDate
 * @property string $EMP_BlkNo
 * @property string $EMP_Street
 * @property string $EMP_Brgy
 * @property string $EMP_City
 * @property integer $EMP_ZipCode
 * @property string $EMP_ContactNo
 * @property string $EMP_EmailAdd
 * @property string $EMP_Position
 *
 * @property ScreeningSched[] $screeningScheds
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EMP_LName', 'EMP_FName', 'EMP_Gender', 'EMP_BDate', 'EMP_BlkNo', 'EMP_ContactNo', 'EMP_EmailAdd', 'EMP_Position'], 'required'],
            [['EMP_BDate'], 'safe'],
            [['EMP_ZipCode'], 'integer'],
            [['EMP_LName', 'EMP_FName', 'EMP_MName', 'EMP_Street', 'EMP_Brgy', 'EMP_City', 'EMP_EmailAdd', 'EMP_Position'], 'string', 'max' => 45],
            [['EMP_Gender', 'EMP_BlkNo'], 'string', 'max' => 10],
            [['EMP_ContactNo'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'EMP_LName' => 'Last Name',
            'EMP_FName' => 'First Name',
            'EMP_MName' => 'Middle Name',
            'EMP_Gender' => 'Gender',
            'EMP_BDate' => 'Birth Date',
            'EMP_BlkNo' => 'Block Number',
            'EMP_Street' => 'Street',
            'EMP_Brgy' => 'Barangay',
            'EMP_City' => 'City',
            'EMP_ZipCode' => 'Zip Code',
            'EMP_ContactNo' => 'Contact Number',
            'EMP_EmailAdd' => 'Email Address',
            'EMP_Position' => 'Position',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScreeningScheds()
    {
        return $this->hasMany(ScreeningSched::className(), ['EMPLOYEE_id' => 'id']);
    }
}
