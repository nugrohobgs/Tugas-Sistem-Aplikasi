<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wilayah".
 *
 * @property int $id_wilayah
 * @property string $Provinsi
 * @property string $Kota
 * @property string $Klinik
 */
class Wilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Provinsi', 'Kota', 'Klinik'], 'required'],
            [['Provinsi', 'Kota', 'Klinik'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wilayah' => 'Id Wilayah',
            'Provinsi' => 'Provinsi',
            'Kota' => 'Kota',
            'Klinik' => 'Klinik',
        ];
    }
}
