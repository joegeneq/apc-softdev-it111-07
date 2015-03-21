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
 * @property string $mgr_gender
 * @property string $mgr_bdate
 * @property string $mgr_blockno
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
            [['mgr_lname', 'mgr_fname', 'mgr_gender', 'mgr_bdate', 'mgr_blockno', 'mgr_street', 'mgr_brgy', 'mgr_city', 'mgr_contactno', 'mgr_emailadd', 'mgr_expertise'], 'required'],
            [['mgr_bdate'], 'safe'],
            [['mgr_zipcode'], 'integer'],
            [['mgr_lname', 'mgr_fname', 'mgr_mname', 'mgr_street', 'mgr_brgy', 'mgr_city', 'mgr_emailadd'], 'string', 'max' => 45],
            [['mgr_gender', 'mgr_blockno'], 'string', 'max' => 10],
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
            'mgr_lname' => 'Mgr Lname',
            'mgr_fname' => 'Mgr Fname',
            'mgr_mname' => 'Mgr Mname',
            'mgr_gender' => 'Mgr Gender',
            'mgr_bdate' => 'Mgr Bdate',
            'mgr_blockno' => 'Block/Lot Number',
            'mgr_street' => 'Mgr Street',
            'mgr_brgy' => 'Mgr Brgy',
            'mgr_city' => 'Mgr City',
            'mgr_zipcode' => 'Mgr Zipcode',
            'mgr_contactno' => 'Mgr Contactno',
            'mgr_emailadd' => 'Mgr Emailadd',
            'mgr_expertise' => 'Mgr Expertise',
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
