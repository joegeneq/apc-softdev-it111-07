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
 * @property string $event_status
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
            [['event_name', 'event_location', 'event_type'], 'string', 'max' => 45],
            [['event_status'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_name' => 'Event Name',
            'event_location' => 'Event Location',
            'event_type' => 'Event Type',
            'event_startdate' => 'Event Startdate',
            'event_enddate' => 'Event Enddate',
            'event_starttime' => 'Event Starttime',
            'event_endtime' => 'Event Endtime',
            'event_status' => 'Event Status',
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
