<?php
namespace frontend\models;
use Yii;

abstract class CustomActiveRecord extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    const SCENARIO_UPDATE = 'update';    
    
    public function beforeSave($insert) {         
        if($this->isNewRecord)
        {			
            $this->creation_date=$this->last_update_date= date('Y-m-d H:i:s', strtotime('+7 hours'));			
            if(!Yii::$app->user->isGuest)
            {
                $this->created_by=$this->last_updated_by=Yii::$app->user->id;
            } else {
                $this->created_by=$this->last_updated_by=-1;
            }			
        }
        else
        {
            $this->last_update_date = date('Y-m-d H:i:s', strtotime('+7 hours'));
            if(!Yii::$app->user->isGuest)
            {
                $this->last_updated_by=Yii::$app->user->id;
            }
            else
            {
                $this->last_updated_by=-1;
            }
        }
        return parent::beforeSave($insert);
    }
}