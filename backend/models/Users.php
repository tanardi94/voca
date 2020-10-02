<?php

namespace backend\models;
use backend\models\CustomActiveRecord;
use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property int $status
 * @property string $unique_id
 * @property string|null $username
 * @property string $name
 * @property string|null $email
 * @property string|null $photo
 * @property string|null $encrypted_password
 * @property string|null $salt
 * @property string|null $auth_key
 * @property int $updated_password
 * @property string|null $created_at
 * @property int $created_by
 * @property string|null $updated_at
 * @property int $updated_by
 * @property string $gender
 * @property string|null $token
 * @property string|null $password_reset_token
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $birth_date
 *
 * @property ProductReview[] $productReviews
 */
class Users extends CustomActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $imageFile;
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'updated_password', 'created_by', 'updated_by'], 'integer'],
            [['unique_id', 'name', 'encrypted_password', 'username'], 'required'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'on' => 'create'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'on' => 'update'],
            [['created_at', 'updated_at', 'birth_date'], 'safe'],
            [['unique_id', 'username', 'photo', 'password_reset_token'], 'string', 'max' => 255],
            [['name'], 'string', 'max' => 50],
            [['email', 'address'], 'string', 'max' => 100],
            [['encrypted_password'], 'string', 'max' => 80],
            [['salt', 'gender'], 'string', 'max' => 10],
            [['auth_key'], 'string', 'max' => 32],
            [['token'], 'string', 'max' => 300],
            [['phone'], 'string', 'max' => 20],
            [['unique_id'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'unique_id' => 'Unique ID',
            'username' => 'Username',
            'name' => 'Name',
            'email' => 'Email',
            'photo' => 'Photo',
            'encrypted_password' => 'Encrypted Password',
            'salt' => 'Salt',
            'auth_key' => 'Auth Key',
            'updated_password' => 'Updated Password',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'gender' => 'Gender',
            'token' => 'Token',
            'password_reset_token' => 'Password Reset Token',
            'phone' => 'Phone',
            'address' => 'Address',
            'birth_date' => 'Birth Date',
            'imageFile' => 'Picture'
        ];
    }

    /**
     * Gets query for [[ProductReviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductReviews()
    {
        return $this->hasMany(ProductReview::className(), ['user_id' => 'id']);
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
        $this->salt = $hash["salt"];
        $this->save(); // salt        
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

    public function deleteImage()
    {
        $image = Yii::getAlias(Yii::$app->params['storage'] . '/uploads/users/') . $this->photo;
        if(unlink($image)) {
            $this->photo = null;
            $this->save();
            return true;
        }
        return false;
    }
}
