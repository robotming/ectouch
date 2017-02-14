<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%affiliate_log}}".
 *
 * @property integer $log_id
 * @property integer $order_id
 * @property integer $time
 * @property integer $user_id
 * @property string $user_name
 * @property string $money
 * @property integer $point
 * @property integer $separate_type
 */
class AffiliateLog extends Foundation
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%affiliate_log}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'time', 'user_id'], 'required'],
            [['order_id', 'time', 'user_id', 'point', 'separate_type'], 'integer'],
            [['money'], 'number'],
            [['user_name'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'log_id' => Yii::t('app', 'Log ID'),
            'order_id' => Yii::t('app', 'Order ID'),
            'time' => Yii::t('app', 'Time'),
            'user_id' => Yii::t('app', 'User ID'),
            'user_name' => Yii::t('app', 'User Name'),
            'money' => Yii::t('app', 'Money'),
            'point' => Yii::t('app', 'Point'),
            'separate_type' => Yii::t('app', 'Separate Type'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(OrderInfo::className(), ['order_id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
}
