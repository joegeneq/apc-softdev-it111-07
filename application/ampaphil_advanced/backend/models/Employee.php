<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $emp_lname
 * @property string $emp_fname
 * @property string $emp_mname
 * @property string $emp_gender
 * @property string $emp_bdate
 * @property string $emp_blockno
 * @property string $emp_street
 * @property string $emp_brgy
 * @property string $emp_city
 * @property integer $emp_zipcode
 * @property string $emp_contactno
 * @property string $emp_emailadd
 * @property string $emp_position
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
            [['emp_lname', 'emp_fname', 'emp_gender', 'emp_bdate', 'emp_blockno', 'emp_contactno', 'emp_emailadd', 'emp_position'], 'required'],
            [['emp_bdate'], 'safe'],
            [['emp_zipcode'], 'integer'],
            [['emp_lname', 'emp_fname', 'emp_mname', 'emp_street', 'emp_brgy', 'emp_city', 'emp_emailadd', 'emp_position'], 'string', 'max' => 45],
            [['emp_gender', 'emp_blockno'], 'string', 'max' => 10],
            [['emp_contactno'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_lname' => 'Last Name',
            'emp_fname' => 'First Name',
            'emp_mname' => 'Middle Name',
            'emp_gender' => 'Gender',
            'emp_bdate' => 'Birth Date',
            'emp_blockno' => 'Block/Lot Number',
            'emp_street' => 'Street',
            'emp_brgy' => 'Barangay',
            'emp_city' => 'City',
            'emp_zipcode' => 'Zip Code',
            'emp_contactno' => 'Contact Number',
            'emp_emailadd' => 'Email Address',
            'emp_position' => 'Position',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScreeningScheds()
    {
        return $this->hasMany(ScreeningSched::className(), ['employee_id' => 'id']);
    }
}
