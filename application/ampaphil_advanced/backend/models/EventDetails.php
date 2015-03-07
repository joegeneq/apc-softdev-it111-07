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
 * @property string $event_datefrom
 * @property string $event_dateto
 * @property string $event_timefrom
 * @property string $event_timeto
 * @property integer $transaction_id
 *
 * @property Payments $transaction
 * @property Events[] $events
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
            [['event_name', 'event_location', 'event_type', 'event_datefrom', 'event_dateto', 'event_timefrom', 'event_timeto'], 'required'],
            [['event_datefrom', 'event_dateto', 'event_timefrom', 'event_timeto'], 'safe'],
            [['transaction_id'], 'integer'],
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
            'event_name' => 'Event Name',
            'event_location' => 'Event Location',
            'event_type' => 'Event Type',
            'event_datefrom' => 'Event Datefrom',
            'event_dateto' => 'Event Dateto',
            'event_timefrom' => 'Event Timefrom',
            'event_timeto' => 'Event Timeto',
            'transaction_id' => 'Transaction ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaction()
    {
        return $this->hasOne(Payments::className(), ['id' => 'transaction_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Events::className(), ['EVENTS_DETAILS_id' => 'id']);
    }
}
