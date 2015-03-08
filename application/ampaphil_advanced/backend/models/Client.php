<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property integer $id
 * @property string $CLIENT_LName
 * @property string $CLIENT_FName
 * @property string $CLIENT_MName
 * @property string $CLIENT_Company
 * @property string $CLIENT_CompanyBlkNo
 * @property string $CLIENT_CompanyBrgy
 * @property string $CLIENT_ContactNo
 * @property string $CLIENT_CompanyCity
 * @property string $CLIENT_EmailAdd
 *
 * @property Events[] $events
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CLIENT_LName', 'CLIENT_FName', 'CLIENT_CompanyBlkNo', 'CLIENT_CompanyBrgy', 'CLIENT_ContactNo', 'CLIENT_CompanyCity', 'CLIENT_EmailAdd'], 'required'],
            [['CLIENT_LName', 'CLIENT_FName', 'CLIENT_MName', 'CLIENT_Company', 'CLIENT_CompanyBrgy', 'CLIENT_CompanyCity', 'CLIENT_EmailAdd'], 'string', 'max' => 45],
            [['CLIENT_CompanyBlkNo'], 'string', 'max' => 10],
            [['CLIENT_ContactNo'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'CLIENT_LName' => 'Last Name',
            'CLIENT_FName' => 'First Name',
            'CLIENT_MName' => 'Middle Name',
            'CLIENT_Company' => 'Client  Company',
            'CLIENT_CompanyBlkNo' => 'Blk No',
            'CLIENT_CompanyBrgy' => 'Barangay',
            'CLIENT_ContactNo' => 'Contact No',
            'CLIENT_CompanyCity' => 'City',
            'CLIENT_EmailAdd' => 'Email Add',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Events::className(), ['CLIENT_id' => 'id']);
    }
}
