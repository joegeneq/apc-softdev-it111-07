<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property integer $id
 * @property string $client_lname
 * @property string $client_fname
 * @property string $client_mname
 * @property string $client_company
 * @property string $client_companyclkno
 * @property string $client_companybrgy
 * @property string $client_contactno
 * @property string $client_companycity
 * @property string $client_emailadd
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
            [['client_lname', 'client_fname', 'client_companyclkno', 'client_companybrgy', 'client_contactno', 'client_companycity', 'client_emailadd'], 'required'],
            [['client_lname', 'client_fname', 'client_mname', 'client_company', 'client_companybrgy', 'client_companycity', 'client_emailadd'], 'string', 'max' => 45],
            [['client_companyclkno'], 'string', 'max' => 10],
            [['client_contactno'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_lname' => 'Client Lname',
            'client_fname' => 'Client Fname',
            'client_mname' => 'Client Mname',
            'client_company' => 'Client Company',
            'client_companyclkno' => 'Client Companyclkno',
            'client_companybrgy' => 'Client Companybrgy',
            'client_contactno' => 'Client Contactno',
            'client_companycity' => 'Client Companycity',
            'client_emailadd' => 'Client Emailadd',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Events::className(), ['client_id' => 'id']);
    }
}
