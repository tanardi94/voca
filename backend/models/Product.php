<?php

namespace backend\models;
use backend\models\CustomActiveRecord;
use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $unique_id
 * @property string $name
 * @property int $price
 * @property string|null $photo
 * @property string|null $description
 * @property int $status
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 *
 * @property ProductReview[] $productReviews
 */
class Product extends CustomActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $imageFile;
    const IMAGE_PLACEHOLDER = '@backend/web/uploads/product';
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'name', 'price', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'on' => 'create'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'on' => 'update'],
            [['price', 'status', 'created_by', 'updated_by'], 'integer'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['unique_id', 'name'], 'string', 'max' => 100],
            [['unique_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'unique_id' => 'Unique ID',
            'name' => 'Name',
            'price' => 'Price',
            'photo' => 'Photo',
            'description' => 'Description',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'imageFile' => 'Photo'
        ];
    }

    /**
     * Gets query for [[ProductReviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductReviews()
    {
        return $this->hasMany(ProductReview::className(), ['product_id' => 'id']);
    }

    public function upload()
    {
        $this->photo = $this->name . '-' . rand(100,1000) . '-' . $this->unique_id . '.' . $this->imageFile->extension;
        if ($this->validate()) {            
            $fileName = '@common/uploads/product/' . $this->photo;
            $this->imageFile->saveAs($fileName);
            return true;
        } else {
            return false;
        }
    }
    
    public function deleteImage()
    {
        $image = Yii::getAlias('@backend/web/uploads/product/') . $this->photo;
        if(unlink($image)) {
            $this->photo = null;
            $this->save();
            return true;
        }
        return false;
    }

    public function ratings()
    {
        $ratings = ProductReview::find()->where(['status' => 1, 'product_id' => $this->id])->average('rating');

        if(!$ratings) {
            return 0;
        }
        
        return $ratings;
    }
}
