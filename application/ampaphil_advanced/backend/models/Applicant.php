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
            'APP_LName' => 'App  Lname',
            'APP_FName' => 'App  Fname',
            'APP_MName' => 'App  Mname',
            'APP_Gender' => 'App  Gender',
            'APP_BDate' => 'App  Bdate',
            'APP_BlkNo' => 'App  Blk No',
            'APP_Street' => 'App  Street',
            'APP_Brgy' => 'App  Brgy',
            'APP_City' => 'App  City',
            'APP_ZipCode' => 'App  Zip Code',
            'APP_ContactNo' => 'App  Contact No',
            'APP_EmailAdd' => 'App  Email Add',
            'APP_RegDate' => 'App  Reg Date',
            'APP_RegTime' => 'App  Reg Time',
            'APP_Talent' => 'App  Talent',
            'SCREENING_SCHED_id' => 'Screening  Sched ID',
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
