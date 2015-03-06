<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "talent_line".
 *
 * @property integer $id
 * @property string $TALENT_Type
 * @property string $TALENT_Specialization
 * @property integer $APPLICANT_id
 *
 * @property Applicant $aPPLICANT
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
            [['TALENT_Type', 'TALENT_Specialization'], 'required'],
            [['APPLICANT_id'], 'integer'],
            [['TALENT_Type', 'TALENT_Specialization'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'TALENT_Type' => 'Talent  Type',
            'TALENT_Specialization' => 'Talent  Specialization',
            'APPLICANT_id' => 'Applicant ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAPPLICANT()
    {
        return $this->hasOne(Applicant::className(), ['id' => 'APPLICANT_id']);
    }
}
