<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property integer $talent_id
 * @property integer $manager_id
 * @property integer $event_details_id
 * @property integer $client_id
 *
 * @property Talent $talent
 * @property EventDetails $eventDetails
 * @property Client $client
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['talent_id', 'manager_id', 'event_details_id', 'client_id'], 'required'],
            [['talent_id', 'manager_id', 'event_details_id', 'client_id'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'talent_id' => 'Name',
            'manager_id' => 'Manager Name',
            'event_details_id' => 'Event Name',
            'client_id' => 'Client Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTalent()
    {
        return $this->hasOne(Talent::className(), ['id' => 'talent_id', 'manager_id' => 'manager_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventDetails()
    {
        return $this->hasOne(EventDetails::className(), ['id' => 'event_details_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Client::className(), ['id' => 'client_id']);
    }
}
