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
 * @property double $TALENT_Share
 * @property double $AGENCY_Share
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
            [['PAYMENTS_Date', 'PAYMENTS_Time', 'Rate', 'TALENT_Share', 'AGENCY_Share', 'EVENT_DETAILS_id'], 'required'],
            [['PAYMENTS_Date', 'PAYMENTS_Time'], 'safe'],
            [['Rate', 'TALENT_Share', 'AGENCY_Share'], 'number'],
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
            'PAYMENTS_Date' => 'Payments Date',
            'PAYMENTS_Time' => 'Payments Time',
            'Rate' => 'Rate',
<<<<<<< HEAD
            'TALENT_Share' => 'Talent  Share',
            'AGENCY_Share' => 'Agency  Share',
            'EVENT_DETAILS_id' => 'Event  Details ID',
=======
            'TALENT_Percentage' => 'Talent Percentage',
            'AGENCY_Percentage' => 'Agency Percentage',
            'EVENT_DETAILS_id' => 'Event Details ID',
>>>>>>> 7ba794e6f0df6cb1f8bbbc0438370725cab3d0b2
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
