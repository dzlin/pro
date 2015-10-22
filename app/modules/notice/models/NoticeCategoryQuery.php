<?php

namespace app\modules\notice\models;

/**
 * This is the ActiveQuery class for [[NoticeCategory]].
 *
 * @see NoticeCategory
 */
class NoticeCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return NoticeCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return NoticeCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}