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
 * @property string $client_companyblkno
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
            [['client_lname', 'client_fname', 'client_companyblkno', 'client_companybrgy', 'client_contactno', 'client_companycity', 'client_emailadd'], 'required'],
            [['client_lname', 'client_fname', 'client_mname', 'client_company', 'client_companybrgy', 'client_companycity', 'client_emailadd'], 'string', 'max' => 45],
            [['client_companyblkno'], 'string', 'max' => 10],
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
            'client_lname' => 'Last Name',
            'client_fname' => 'First Name',
            'client_mname' => 'Middle Name',
            'client_company' => 'Company',
            'client_companyblkno' => 'Block/Lot Number',
            'client_companybrgy' => 'Barangay',
            'client_contactno' => 'Contact Number',
            'client_companycity' => 'City',
            'client_emailadd' => 'E-mail Address',
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
