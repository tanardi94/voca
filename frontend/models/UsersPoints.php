<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "users_points".
 *
 * @property int $id
 * @property int $user_id
 * @property int $points
 * @property int $status
 * @property int $created_by
 * @property string $created_at
 * @property int $updated_by
 * @property string $updated_at
 * @property int|null $source
 * @property int $amount
 * @property string $transaction_date
 * @property string|null $notes
 *
 * @property Users $user
 */
class UsersPoints extends \backend\models\CustomActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users_points';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'points', 'amount'], 'required'],
            [['user_id', 'points', 'status', 'created_by', 'updated_by', 'source', 'amount'], 'integer'],
            [['created_at', 'updated_at', 'transaction_date'], 'safe'],
            [['notes'], 'string'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'points' => 'Jumlah Poin',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'source' => 'Tempat Beli',
            'amount' => 'Dalam Rupiah',
            'transaction_date' => 'Tanggal Transaksi',
            'notes' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }

    public static function getTotal($provider, $fieldName) {
        $total = 0;
        foreach($provider as $item) {
            $total += $item[$fieldName];
        }
        return $total;
    }
}
