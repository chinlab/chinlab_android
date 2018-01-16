<?php

namespace app\modules\patient\models;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "order_accompany_detail_express".
 *
 * @property integer $express_id
 * @property string $express_company
 * @property string $express_com
 * @property string $express_no
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $is_delete
 */
class OrderAccompanyDetailExpress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_accompany_detail_express';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [];
    }
    
    public function afterSave($insert, $changedAttributes)
    {
    
    	parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub
    	$this->orderDowith($insert,$changedAttributes);
    }
     
    private function orderDowith($insert,$changedAttributes)
    {
    	$data = $this->toArray();
    	if(!isset($data['order_id'])){
    		return '';
    	}
    	$command = Yii::$app->db;
    	foreach($data as $k => $v) {
    		if (!is_string($v) && !is_int($v)) {
    			unset($data[$k]);
    		}
    	}
    	if($insert) {
    		//这里是新增数据
    		return  $command->createCommand()->insert(
    				'order_multi_backend', $data)->execute();
    	} else {
    		//这里是更新数据
    		return  $command->createCommand()->update(
    				'order_multi_backend', $data,
    				'order_id=:order_id',[':order_id'=>$data['order_id']])->execute();
    	}
    }
    
    

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['create_time', 'update_time'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['update_time'],
                ],
                //'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'express_id' => 'Express ID',
            'express_company' => 'Express Company',
            'express_com' => 'Express Com',
            'express_no' => 'Express No',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'is_delete' => 'Is Delete',
        ];
    }
}