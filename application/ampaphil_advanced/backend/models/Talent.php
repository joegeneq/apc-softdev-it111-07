<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "talent".
 *
 * @property integer $id
 * @property integer $manager_id
 * @property string $talent_managedstartdate
 * @property string $talent_managedenddate
 * @property integer $screening_sched_id
 * @property integer $applicant_id
 *
 * @property Events[] $events
 * @property Applicant $applicant
 * @property Manager $manager
 * @property ScreeningSched $screeningSched
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
            [['manager_id', 'talent_managedstartdate', 'talent_managedenddate'], 'required'],
            [['manager_id', 'screening_sched_id', 'applicant_id'], 'integer'],
            [['talent_managedstartdate', 'talent_managedenddate'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'manager_id' => 'Manager ID',
            'talent_managedstartdate' => 'Talent Managedstartdate',
            'talent_managedenddate' => 'Talent Managedenddate',
            'screening_sched_id' => 'Screening Sched ID',
            'applicant_id' => 'Applicant ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Events::className(), ['TALENT_id' => 'id', 'TALENT_MANAGER_id' => 'manager_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicant()
    {
        return $this->hasOne(Applicant::className(), ['id' => 'applicant_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManager()
    {
        return $this->hasOne(Manager::className(), ['id' => 'manager_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScreeningSched()
    {
        return $this->hasOne(ScreeningSched::className(), ['id' => 'screening_sched_id']);
    }
}
