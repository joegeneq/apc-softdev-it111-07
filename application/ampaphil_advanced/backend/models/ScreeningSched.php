<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "screening_sched".
 *
 * @property integer $id
 * @property string $scr_date
 * @property string $scr_time
 * @property string $app_status
 * @property integer $employee_id
 *
 * @property Applicant[] $applicants
 * @property Employee $employee
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
            [['scr_date', 'scr_time'], 'required'],
            [['scr_date', 'scr_time'], 'safe'],
            [['employee_id'], 'integer'],
            [['app_status'], 'string', 'max' => 10],
            [['app_status'], 'default', 'value' => 'Screening']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'scr_date' => 'Date',
            'scr_time' => 'Time',
            'app_status' => 'Status',
            'employee_id' => 'Employee Last Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicant::className(), ['screening_sched_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTalents()
    {
        return $this->hasMany(Talent::className(), ['screening_sched_id' => 'id']);
    }
}
