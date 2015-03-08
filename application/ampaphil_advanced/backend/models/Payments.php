<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property integer $id
 * @property string $PAYMENTS_Date
 * @property string $PAYMENTS_Time
 * @property double $Rate
 * @property string $TALENT_Percentage
 * @property string $AGENCY_Percentage
 * @property integer $EVENT_DETAILS_id
 *
 * @property EventDetails $eVENTDETAILS
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
            [['PAYMENTS_Date', 'PAYMENTS_Time', 'Rate', 'TALENT_Percentage', 'AGENCY_Percentage', 'EVENT_DETAILS_id'], 'required'],
            [['PAYMENTS_Date', 'PAYMENTS_Time'], 'safe'],
            [['Rate', 'TALENT_Percentage', 'AGENCY_Percentage'], 'number'],
            [['EVENT_DETAILS_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'PAYMENTS_Date' => 'Payments  Date',
            'PAYMENTS_Time' => 'Payments  Time',
            'Rate' => 'Rate',
            'TALENT_Percentage' => 'Talent  Percentage',
            'AGENCY_Percentage' => 'Agency  Percentage',
            'EVENT_DETAILS_id' => 'Event  Details ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEVENTDETAILS()
    {
        return $this->hasOne(EventDetails::className(), ['id' => 'EVENT_DETAILS_id']);
    }
}
