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
 * @property string $EMP_BlkOrAreaNo
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
            [['EMP_LName', 'EMP_FName', 'EMP_Gender', 'EMP_BDate', 'EMP_BlkOrAreaNo', 'EMP_ContactNo', 'EMP_EmailAdd', 'EMP_Position'], 'required'],
            [['EMP_BDate'], 'safe'],
            [['EMP_ZipCode'], 'integer'],
            [['EMP_LName', 'EMP_FName', 'EMP_MName', 'EMP_Street', 'EMP_Brgy', 'EMP_City', 'EMP_EmailAdd', 'EMP_Position'], 'string', 'max' => 45],
            [['EMP_Gender', 'EMP_BlkOrAreaNo'], 'string', 'max' => 10],
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
            'EMP_LName' => 'Emp  Lname',
            'EMP_FName' => 'Emp  Fname',
            'EMP_MName' => 'Emp  Mname',
            'EMP_Gender' => 'Emp  Gender',
            'EMP_BDate' => 'Emp  Bdate',
            'EMP_BlkOrAreaNo' => 'Emp  Blk Or Area No',
            'EMP_Street' => 'Emp  Street',
            'EMP_Brgy' => 'Emp  Brgy',
            'EMP_City' => 'Emp  City',
            'EMP_ZipCode' => 'Emp  Zip Code',
            'EMP_ContactNo' => 'Emp  Contact No',
            'EMP_EmailAdd' => 'Emp  Email Add',
            'EMP_Position' => 'Emp  Position',
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
