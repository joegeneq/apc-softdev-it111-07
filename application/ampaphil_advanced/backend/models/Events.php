<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property integer $TALENT_id
 * @property integer $TALENT_MANAGER_id
 * @property integer $EVENTS_DETAILS_id
 * @property integer $CLIENT_id
 *
 * @property Talent $tALENT
 * @property EventDetails $eVENTSDETAILS
 * @property Client $cLIENT
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
            [['TALENT_id', 'TALENT_MANAGER_id', 'EVENTS_DETAILS_id', 'CLIENT_id'], 'required'],
            [['TALENT_id', 'TALENT_MANAGER_id', 'EVENTS_DETAILS_id', 'CLIENT_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'TALENT_id' => 'Talent ID',
            'TALENT_MANAGER_id' => 'Talent  Manager ID',
            'EVENTS_DETAILS_id' => 'Events  Details ID',
            'CLIENT_id' => 'Client ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTALENT()
    {
        return $this->hasOne(Talent::className(), ['id' => 'TALENT_id', 'MANAGER_id' => 'TALENT_MANAGER_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEVENTSDETAILS()
    {
        return $this->hasOne(EventDetails::className(), ['id' => 'EVENTS_DETAILS_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCLIENT()
    {
        return $this->hasOne(Client::className(), ['id' => 'CLIENT_id']);
    }
}
