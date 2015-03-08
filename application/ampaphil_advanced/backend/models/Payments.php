<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property integer $id
 * @property string $payments_date
 * @property string $payments_time
 * @property double $payments_rate
 * @property string $talent_percentage
 * @property string $agency_percentage
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
            [['payments_date', 'payments_time', 'payments_rate', 'talent_percentage', 'agency_percentage'], 'required'],
            [['payments_date', 'payments_time'], 'safe'],
            [['payments_rate', 'talent_percentage', 'agency_percentage'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'payments_date' => 'Payments Date',
            'payments_time' => 'Payments Time',
            'payments_rate' => 'Payments Rate',
            'talent_percentage' => 'Talent Percentage',
            'agency_percentage' => 'Agency Percentage',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventDetails()
    {
        return $this->hasMany(EventDetails::className(), ['transaction_id' => 'id']);
    }
}
