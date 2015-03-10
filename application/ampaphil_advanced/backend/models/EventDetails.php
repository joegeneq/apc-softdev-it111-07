<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event_details".
 *
 * @property integer $id
 * @property string $EVENT_Name
 * @property string $EVENT_Location
 * @property string $EVENT_Type
 * @property string $EVENT_DateFrom
 * @property string $EVENT_DateTo
 * @property string $EVENT_TimeFrom
 * @property string $EVENT_TimeTo
 * @property string $EVENT_Status
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
            [['EVENT_Name', 'EVENT_Location', 'EVENT_Type', 'EVENT_DateFrom', 'EVENT_DateTo', 'EVENT_TimeFrom', 'EVENT_TimeTo'], 'required'],
            [['EVENT_DateFrom', 'EVENT_DateTo', 'EVENT_TimeFrom', 'EVENT_TimeTo'], 'safe'],
            [['EVENT_Name', 'EVENT_Location', 'EVENT_Type'], 'string', 'max' => 45],
            [['EVENT_Status'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'EVENT_Name' => 'Event Name',
            'EVENT_Location' => 'Event Location',
            'EVENT_Type' => 'Event Type',
            'EVENT_DateFrom' => 'Event Date From',
            'EVENT_DateTo' => 'Event Date To',
            'EVENT_TimeFrom' => 'Event Time From',
            'EVENT_TimeTo' => 'Event Time To',
            'EVENT_Status' => 'Event Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Events::className(), ['EVENTS_DETAILS_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payments::className(), ['EVENT_DETAILS_id' => 'id']);
    }
}
