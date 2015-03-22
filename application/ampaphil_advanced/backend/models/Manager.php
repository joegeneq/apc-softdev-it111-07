<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "manager".
 *
 * @property integer $id
 * @property string $mgr_lname
 * @property string $mgr_fname
 * @property string $mgr_mname
 * @property string $mge_gender
 * @property string $mgr_bdate
 * @property string $mgr_blkno
 * @property string $mgr_street
 * @property string $mgr_brgy
 * @property string $mgr_city
 * @property integer $mgr_zipcode
 * @property string $mgr_contactno
 * @property string $mgr_emailadd
 * @property string $mgr_expertise
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
            [['mgr_lname', 'mgr_fname', 'mge_gender', 'mgr_bdate', 'mgr_blkno', 'mgr_street', 'mgr_brgy', 'mgr_city', 'mgr_contactno', 'mgr_emailadd', 'mgr_expertise'], 'required'],
            [['mgr_bdate'], 'safe'],
            [['mgr_zipcode'], 'integer'],
            [['mgr_lname', 'mgr_fname', 'mgr_mname', 'mgr_street', 'mgr_brgy', 'mgr_city', 'mgr_emailadd'], 'string', 'max' => 45],
            [['mge_gender', 'mgr_blkno'], 'string', 'max' => 10],
            [['mgr_contactno', 'mgr_expertise'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mgr_lname' => 'Last Name',
            'mgr_fname' => 'First Name',
            'mgr_mname' => 'Middle Name',
            'mge_gender' => 'Gender',
            'mgr_bdate' => 'Birth Date',
            'mgr_blkno' => 'Block/Lot Number',
            'mgr_street' => 'Street',
            'mgr_brgy' => 'Barangay',
            'mgr_city' => 'City',
            'mgr_zipcode' => 'Zip Code',
            'mgr_contactno' => 'Contact No',
            'mgr_emailadd' => 'E-mail Address',
            'mgr_expertise' => 'Expertise',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTalents()
    {
        return $this->hasMany(Talent::className(), ['manager_id' => 'id']);
    }
}
