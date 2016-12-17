<?php

namespace andahrm\structure\models;

use Yii;

/**
 * This is the model class for table "structure_position".
 *
 * @property integer $structure_id
 * @property integer $position_id
 * @property integer $created_by
 * @property integer $created_at
 * @property integer $updated_by
 * @property integer $updated_at
 *
 * @property Position $position
 * @property Structure $structure
 */
class StructurePosition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'structure_position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['structure_id', 'position_id', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'required'],
            [['structure_id', 'position_id', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['position_id'], 'exist', 'skipOnError' => true, 'targetClass' => Position::className(), 'targetAttribute' => ['position_id' => 'id']],
            [['structure_id'], 'exist', 'skipOnError' => true, 'targetClass' => Structure::className(), 'targetAttribute' => ['structure_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'structure_id' => Yii::t('andahrm/structure', 'โครงสร้าง'),
            'position_id' => Yii::t('andahrm/structure', 'ตำแหน่ง'),
            'created_by' => Yii::t('andahrm/structure', 'Created By'),
            'created_at' => Yii::t('andahrm/structure', 'Created At'),
            'updated_by' => Yii::t('andahrm/structure', 'Updated By'),
            'updated_at' => Yii::t('andahrm/structure', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['id' => 'position_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStructure()
    {
        return $this->hasOne(Structure::className(), ['id' => 'structure_id']);
    }
}