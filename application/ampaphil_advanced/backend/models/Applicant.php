<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "applicant".
 *
 * @property integer $id
 * @property string $app_lname
 * @property string $app_fname
 * @property string $app_mname
 * @property string $app_gender
 * @property string $app_bdate
 * @property string $app_blkno
 * @property string $app_street
 * @property string $app_brgy
 * @property string $app_city
 * @property integer $app_zipcode
 * @property string $app_contactno
 * @property string $app_emailadd
 * @property string $app_regdate
 * @property string $app_regtime
 * @property string $app_talent
 * @property integer $screening_sched_id
 *
 * @property ScreeningSched $screeningSched
 * @property Talent[] $talents
 * @property TalentLine[] $talentLines
 */
class Applicant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'applicant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['app_lname', 'app_fname', 'app_gender', 'app_bdate', 'app_blkno', 'app_street', 'app_brgy', 'app_city', 'app_contactno', 'app_regdate', 'app_regtime', 'app_talent'], 'required'],
            [['app_bdate', 'app_regdate', 'app_regtime'], 'safe'],
            [['app_zipcode', 'screening_sched_id'], 'integer'],
            [['app_lname', 'app_fname', 'app_mname', 'app_street', 'app_brgy', 'app_city', 'app_emailadd', 'app_talent'], 'string', 'max' => 45],
            [['app_gender', 'app_blkno'], 'string', 'max' => 10],
            [['app_contactno'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'app_lname' => 'Last Name',
            'app_fname' => 'First Name',
            'app_mname' => 'Middle Name',
            'app_gender' => 'Gender',
            'app_bdate' => 'Birth Date',
            'app_blkno' => 'Block/Lot Number',
            'app_street' => 'Street',
            'app_brgy' => 'Barangay',
            'app_city' => 'City',
            'app_zipcode' => 'Zip Code',
            'app_contactno' => 'Contact Number',
            'app_emailadd' => 'E-mail Address',
            'app_regdate' => 'Registration Date',
            'app_regtime' => 'Registration Time',
            'app_talent' => 'Talent',
            'screening_sched_id' => 'Screening Schedule',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScreeningSched()
    {
        return $this->hasOne(ScreeningSched::className(), ['id' => 'screening_sched_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTalents()
    {
        return $this->hasMany(Talent::className(), ['applicant_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTalentLines()
    {
        return $this->hasMany(TalentLine::className(), ['applicant_id' => 'id']);
    }
}
