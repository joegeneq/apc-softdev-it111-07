<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "talent".
 *
 * @property integer $id
 * @property integer $MANAGER_id
 * @property string $TALENT_ManagedStartDate
 * @property string $TALENT_ManagedEndDate
 * @property integer $SCREENING_SCHED_id
 * @property integer $APPLICANT_id
 *
 * @property Events[] $events
 * @property Manager $mANAGER
 * @property ScreeningSched $sCREENINGSCHED
 * @property Applicant $aPPLICANT
 */
class Talent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'talent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MANAGER_id', 'TALENT_ManagedStartDate', 'TALENT_ManagedEndDate'], 'required'],
            [['MANAGER_id', 'SCREENING_SCHED_id', 'APPLICANT_id'], 'integer'],
            [['TALENT_ManagedStartDate', 'TALENT_ManagedEndDate'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'MANAGER_id' => 'Managers Last Name',
            'TALENT_ManagedStartDate' => 'Talent Managed Start Date',
            'TALENT_ManagedEndDate' => 'Talent Managed End Date',
            'SCREENING_SCHED_id' => 'Screening Schedule ID',
            'APPLICANT_id' => 'Applicant Last Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Events::className(), ['TALENT_id' => 'id', 'TALENT_MANAGER_id' => 'MANAGER_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMANAGER()
    {
        return $this->hasOne(Manager::className(), ['id' => 'MANAGER_id']);
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
    public function getAPPLICANT()
    {
        return $this->hasOne(Applicant::className(), ['id' => 'APPLICANT_id']);
    }
}
