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
            'event_name' => 'Name',
            'event_location' => 'Location',
            'event_type' => 'Type',
            'event_datefrom' => 'Start Date',
            'event_dateto' => 'End Date',
            'event_timefrom' => 'Start Time',
            'event_timeto' => 'End Time',
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
