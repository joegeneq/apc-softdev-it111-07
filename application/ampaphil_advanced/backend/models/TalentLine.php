<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "talent_line".
 *
 * @property integer $id
 * @property string $talent_type
 * @property string $talent_specialization
 * @property integer $applicant_id
 *
 * @property Applicant $applicant
 */
class TalentLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'talent_line';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['talent_type', 'talent_specialization'], 'required'],
            [['applicant_id'], 'integer'],
            [['talent_type', 'talent_specialization'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'talent_type' => 'Type',
            'talent_specialization' => 'Specialization',
            'applicant_id' => 'Last Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicant()
    {
        return $this->hasOne(Applicant::className(), ['id' => 'applicant_id']);
    }
}
