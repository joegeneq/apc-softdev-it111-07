<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "applicant".
 *
 * @property integer $id
 * @property string $APP_LName
 * @property string $APP_FName
 * @property string $APP_MName
 * @property string $APP_Gender
 * @property string $APP_BDate
 * @property string $APP_BlkNo
 * @property string $APP_Street
 * @property string $APP_Brgy
 * @property string $APP_City
 * @property integer $APP_ZipCode
 * @property string $APP_ContactNo
 * @property string $APP_EmailAdd
 * @property string $APP_RegDate
 * @property string $APP_RegTime
 * @property string $APP_Talent
 * @property integer $SCREENING_SCHED_id
 *
 * @property ScreeningSched $sCREENINGSCHED
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
            [['APP_LName', 'APP_FName', 'APP_Gender', 'APP_BDate', 'APP_BlkNo', 'APP_Street', 'APP_Brgy', 'APP_City', 'APP_ContactNo', 'APP_RegDate', 'APP_RegTime', 'APP_Talent'], 'required'],
            [['APP_BDate', 'APP_RegDate', 'APP_RegTime'], 'safe'],
            [['APP_ZipCode', 'SCREENING_SCHED_id'], 'integer'],
            [['APP_LName', 'APP_FName', 'APP_MName', 'APP_Street', 'APP_Brgy', 'APP_City', 'APP_EmailAdd', 'APP_Talent'], 'string', 'max' => 45],
            [['APP_Gender', 'APP_BlkNo'], 'string', 'max' => 10],
            [['APP_ContactNo'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'APP_LName' => 'Last Name',
            'APP_FName' => 'First Name',
            'APP_MName' => 'Middle Name',
            'APP_Gender' => 'Gender',
            'APP_BDate' => 'Birth Date',
            'APP_BlkNo' => 'Blk No',
            'APP_Street' => 'Street',
            'APP_Brgy' => 'Barangay',
            'APP_City' => 'City',
            'APP_ZipCode' => 'Zip Code',
            'APP_ContactNo' => 'Contact No',
            'APP_EmailAdd' => 'Email Address',
            'APP_RegDate' => 'Registration Date',
            'APP_RegTime' => 'Registration Time',
            'APP_Talent' => 'Talent',
            'SCREENING_SCHED_id' => 'Screening  Schedule ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSCREENINGSCHED()
    {
        return $this->hasOne(ScreeningSched::className(), ['id' => 'SCREENING_SCHED_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTalents()
    {
        return $this->hasMany(Talent::className(), ['APPLICANT_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTalentLines()
    {
        return $this->hasMany(TalentLine::className(), ['APPLICANT_id' => 'id']);
    }
}
