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
            //[['manager_id', 'screening_sched_id', 'applicant_id'], 'integer'],
            [['manager_id', 'applicant_id'], 'integer'],
            [['talent_managedstartdate', 'talent_managedenddate', 'screening_sched_id'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'manager_id' => 'Manager Last Name',
            'talent_managedstartdate' => 'Start Date',
            'talent_managedenddate' => 'End Date',
            'screening_sched_id' => 'Screening Schedule ID',
            'applicant_id' => 'Applicant Last Name',
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

    public static function getScreening($applicant_id)
    {
        $connection = \Yii::$app->db;
        $model = $connection
                ->createCommand("SELECT CAST((b.id) AS CHAR)
                            FROM applicant a
                            LEFT JOIN screening_sched b
                            ON a.screening_sched_id = b.id
                            WHERE a.id = ".$applicant_id);
        $data = $model->queryScalar();
        return $data;
    }

}
