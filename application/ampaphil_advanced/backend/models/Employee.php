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
            'emp_lname' => 'Emp Lname',
            'emp_fname' => 'Emp Fname',
            'emp_mname' => 'Emp Mname',
            'emp_gender' => 'Emp Gender',
            'emp_bdate' => 'Emp Bdate',
            'emp_blockno' => 'Emp Blockno',
            'emp_street' => 'Emp Street',
            'emp_brgy' => 'Emp Brgy',
            'emp_city' => 'Emp City',
            'emp_zipcode' => 'Emp Zipcode',
            'emp_contactno' => 'Emp Contactno',
            'emp_emailadd' => 'Emp Emailadd',
            'emp_position' => 'Emp Position',
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
