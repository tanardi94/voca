<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "segment".
 *
 * @property int $id
 * @property string $title
 * @property string|null $attr1
 * @property string|null $content
 * @property int|null $seq
 * @property string|null $image
 * @property int $segment_id
 * @property int $status
 * @property int $created_by
 * @property string $created_at
 * @property int $updated_by
 * @property string $updated_at
 *
 * @property Segment $segment
 * @property Segment[] $segments
 */
class Segment extends \backend\models\CustomActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $imageFile;
    public static function tableName()
    {
        return 'segment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['attr1', 'content'], 'string'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'on' => 'create'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'on' => 'update'],
            [['seq', 'segment_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'image'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'attr1' => 'Attr1',
            'content' => 'Content',
            'seq' => 'Type',
            'image' => 'Image',
            'segment_id' => 'Main Segment',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'imageFile' => 'Image'
        ];
    }


    public function deleteImage()
    {
        $image = Yii::getAlias('@backend/web/uploads/segment/') . $this->image;
        if(unlink($image)) {
            $this->image = null;
            $this->save();
            return true;
        }
        return false;
    }
}
