<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sro".
 *
 * @property integer $id
 * @property string $reg_num
 * @property string $name
 * @property string $state
 *
 * @property Members $members
 */
class Sro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reg_num', 'name', 'state'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reg_num' => 'Регистрационный номер СРО',
            'name' => 'Наименование СРО',
            'state' => 'Федеральный округ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembers()
    {
        return $this->hasOne(Members::className(), ['sro_id' => 'id']);
    }
}
