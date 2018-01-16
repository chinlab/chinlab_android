<?php

namespace app\modules\patient\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "pay_inquiry_online".
 *
 * @property integer $pay_id
 * @property integer $user_id
 * @property integer $order_id
 * @property string $pay_money
 * @property integer $pay_type
 * @property integer $pay_status
 * @property string $pay_account
 * @property string $pay_order_id
 * @property integer $order_type
 * @property integer $order_state
 * @property string $requestParams
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $is_delete
 */
class PayGoods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pay_goods';
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
        $this->payDowith($insert,$changedAttributes);
    }

    private function payDowith($insert,$changedAttributes)
    {
        $data = $this->toArray();
        if(!isset($data['pay_id'])){
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
                'pay_multi_backend', $data)->execute();
        } else {
            //这里是更新数据
            return  $command->createCommand()->update(
                'pay_multi_backend', $data,
                'pay_id=:pay_id',[':pay_id'=>$data['pay_id']])->execute();
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
            'pay_id' => 'Pay ID',
            'user_id' => 'User ID',
            'order_id' => 'Order ID',
            'pay_money' => 'Pay Money',
            'pay_type' => 'Pay Type',
            'pay_status' => 'Pay Status',
            'pay_account' => 'Pay Account',
            'pay_order_id' => 'Pay Order ID',
            'order_type' => 'Order Type',
            'order_state' => 'Order State',
            'requestParams' => 'Request Params',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'is_delete' => 'Is Delete',
        ];
    }
}