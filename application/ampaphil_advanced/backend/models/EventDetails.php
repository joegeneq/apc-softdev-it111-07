<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event_details".
 *
 * @property integer $id
 * @property string $event_name
 * @property string $event_location
 * @property string $event_type
 * @property string $event_startdate
 * @property string $event_enddate
 * @property string $event_starttime
 * @property string $event_endtime
 *
 * @property Events[] $events
 * @property Payments[] $payments
 */
class EventDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_name', 'event_location', 'event_type', 'event_startdate', 'event_enddate', 'event_starttime', 'event_endtime'], 'required'],
            [['event_startdate', 'event_enddate', 'event_starttime', 'event_endtime'], 'safe'],
            [['event_name', 'event_location', 'event_type'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_name' => 'Title',
            'event_location' => 'Location',
            'event_type' => 'Type',
            'event_startdate' => 'Start Date',
            'event_enddate' => 'End Date',
            'event_starttime' => 'Start Time',
            'event_endtime' => 'End Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Events::className(), ['event_details_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payments::className(), ['event_details_id' => 'id']);
    }
}
