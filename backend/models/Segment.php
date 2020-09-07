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
            [['segment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Segment::className(), 'targetAttribute' => ['segment_id' => 'id']],
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
            'seq' => 'Seq',
            'image' => 'Image',
            'segment_id' => 'Segment ID',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Segment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSegment()
    {
        return $this->hasOne(Segment::className(), ['id' => 'segment_id']);
    }

    /**
     * Gets query for [[Segments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSegments()
    {
        return $this->hasMany(Segment::className(), ['segment_id' => 'id']);
    }
}
