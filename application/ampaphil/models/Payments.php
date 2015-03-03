<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property integer $id
 * @property string $TRANS_Date
 * @property string $TRANS_Time
 * @property double $TRANS_Rate
 * @property string $REG_Percentage
 * @property string $AGENCY_Percentage
 *
 * @property EventDetails[] $eventDetails
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
            [['TRANS_Date', 'TRANS_Time', 'TRANS_Rate', 'REG_Percentage', 'AGENCY_Percentage'], 'required'],
            [['TRANS_Date', 'TRANS_Time'], 'safe'],
            [['TRANS_Rate', 'REG_Percentage', 'AGENCY_Percentage'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'TRANS_Date' => 'Trans  Date',
            'TRANS_Time' => 'Trans  Time',
            'TRANS_Rate' => 'Trans  Rate',
            'REG_Percentage' => 'Reg  Percentage',
            'AGENCY_Percentage' => 'Agency  Percentage',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventDetails()
    {
        return $this->hasMany(EventDetails::className(), ['TRANSACTION_id' => 'id']);
    }
}
