<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $UserID
 * @property string $Username
 * @property string $Password
 * @property string $FirstName
 * @property string $LastName
 * @property string $Gender
 * @property string $City
 * @property string $ContactNumber
 * @property string $EmailAddress
 * @property string $LastLoggedIn
 * @property integer $LoggedIn
 * @property integer $RoleID
 *
 * @property Roles $user
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Username', 'Password', 'FirstName', 'LastName', 'Gender', 'City', 'ContactNumber', 'EmailAddress', 'LastLoggedIn', 'LoggedIn', 'RoleID'], 'required'],
            [['LastLoggedIn'], 'safe'],
            [['LoggedIn', 'RoleID'], 'integer'],
            [['Username'], 'string', 'max' => 15],
            [['Password', 'FirstName', 'LastName', 'City', 'EmailAddress'], 'string', 'max' => 45],
            [['Gender'], 'string', 'max' => 1],
            [['ContactNumber'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UserID' => 'User ID',
            'Username' => 'Username',
            'Password' => 'Password',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
            'Gender' => 'Gender',
            'City' => 'City',
            'ContactNumber' => 'Contact Number',
            'EmailAddress' => 'Email Address',
            'LastLoggedIn' => 'Last Logged In',
            'LoggedIn' => 'Logged In',
            'RoleID' => 'Role ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Roles::className(), ['RoleID' => 'UserID']);
    }
}
