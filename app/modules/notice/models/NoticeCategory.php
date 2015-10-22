<?php

namespace app\modules\notice\models;

use Yii;

/**
 * This is the model class for table "{{%notice_category}}".
 *
 * @property string $id
 * @property string $name
 * @property string $pid
 */
class NoticeCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%notice_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid'], 'integer'],
            [['name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '分类id'),
            'name' => Yii::t('app', '分类名称'),
            'pid' => Yii::t('app', '父级分类id'),
        ];
    }

    /**
     * @inheritdoc
     * @return NoticeCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NoticeCategoryQuery(get_called_class());
    }
}
