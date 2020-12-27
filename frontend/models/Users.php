<?php

namespace frontend\models;

use Imagine\Exception\NotSupportedException;
use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property string|null $username
 * @property string|null $address
 * @property string $encrypted_password
 * @property string|null $photo
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int $status
 */
class Users extends CustomActiveRecord implements IdentityInterface
{

    const STATUS_ACTIVE = 1;
    const STATUS_BLOCKED = -1;
    const STATUS_DELETED = 0;

    public $imageFile;
    public $password_hash;
    public $old_password;
    public $new_password;
    public $repeat_password;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'birth_date'], 'safe'],
            [['created_by', 'updated_by', 'status'], 'integer'],
            [['name', 'address'], 'string', 'max' => 100],
            [['email', 'username', 'photo', 'gender'], 'string', 'max' => 50],
            [['encrypted_password'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'username' => 'Username',
            'address' => 'Address',
            'encrypted_password' => 'Encrypted Password',
            'photo' => 'Photo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'status' => 'Status',
        ];
    }

    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
                   
    }

    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'status' => self::STATUS_ACTIVE]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function validatePassword($password)
    {        
        //return Yii::$app->security->validatePassword($password, $this->password_hash);
        // verifying user password
        $salt = $this->salt;
        $encrypted_password = $this->encrypted_password;
        $hash = $this->checkhashSSHA($salt, $password);
        // check for password equality

        if ($encrypted_password == $hash) {
            // user authentication details are correct
            return true;
        } else {
            return false;
        }
    }

    public function checkhashSSHA($salt, $password) {
 
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
 
        return $hash;
    }

    public function setPassword($password)
    {                
        $hash = $this->hashSSHA($password);
        $this->encrypted_password = $hash["encrypted"]; // encrypted password
        $this->salt = $hash["salt"]; // salt        
    }

    public function hashSSHA($password) {
 
        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }

    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
}
