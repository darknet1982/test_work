<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "members".
 *
 * @property integer $id
 * @property string $status
 * @property string $name
 * @property string $inn
 * @property string $ogrn
 * @property string $date_append
 * @property integer $sro_id
 *
 * @property Sro $sro
 */
class Members extends \yii\db\ActiveRecord
{
    public $reg_num;
    public $sro_state;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'members';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_append','reg_num','sro_state','sro'], 'safe'],
            [['date_append'],'date', 'format'=>'yyyy-mm-dd'],
            [['sro_id'], 'integer'],
            [['status', 'name', 'inn', 'ogrn'], 'string', 'max' => 255],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Статус',
            'name' => 'Наименование',
            'inn' => 'ИНН',
            'ogrn' => 'ОГРН',
            'date_append' => 'Дата внесения в реестр',
            'reg_num' => 'Регистрационный номер СРО',
            'sro_state' => 'Федеральный округ'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSro()
    {
        return $this->hasOne(Sro::className(), ['id' => 'sro_id']);
    }
    
}
