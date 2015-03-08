<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "screening_sched".
 *
 * @property integer $id
 * @property string $SCR_Date
 * @property string $SCR_Time
 * @property string $APP_Status
 * @property integer $EMPLOYEE_id
 *
 * @property Applicant[] $applicants
 * @property Employee $eMPLOYEE
 * @property Talent[] $talents
 */
class ScreeningSched extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'screening_sched';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SCR_Date', 'SCR_Time', 'APP_Status'], 'required'],
            [['SCR_Date', 'SCR_Time'], 'safe'],
            [['EMPLOYEE_id'], 'integer'],
            [['APP_Status'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'SCR_Date' => 'Screening  Date',
            'SCR_Time' => 'Screening  Time',
            'APP_Status' => 'Applicant  Status',
            'EMPLOYEE_id' => 'Employee ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicant::className(), ['SCREENING_SCHED_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEMPLOYEE()
    {
        return $this->hasOne(Employee::className(), ['id' => 'EMPLOYEE_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTalents()
    {
        return $this->hasMany(Talent::className(), ['SCREENING_SCHED_id' => 'id']);
    }
}
