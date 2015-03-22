<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property integer $id
 * @property string $payments_date
 * @property string $payments_time
 * @property double $rate
 * @property double $talent_share
 * @property double $agency_share
 * @property integer $event_details_id
 *
 * @property EventDetails $eventDetails
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['payments_date', 'payments_time', 'rate', 'talent_share', 'agency_share', 'event_details_id'], 'required'],
            [['payments_date', 'payments_time'], 'safe'],
            [['rate', 'talent_share', 'agency_share'], 'number'],
            [['event_details_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'payments_date' => 'Date',
            'payments_time' => 'Time',
            'rate' => 'Rate',
            'talent_share' => 'Talent Share',
            'agency_share' => 'Agency Share',
            'event_details_id' => 'Event Details ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventDetails()
    {
        return $this->hasOne(EventDetails::className(), ['id' => 'event_details_id']);
    }
}
