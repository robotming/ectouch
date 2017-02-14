<?php

namespace app\repositorys;

use Yii;
use app\models\Category;
use app\models\Goods;

class CategoryRepository
{
    /**
     * 返回全部分类
     * @param array $attributes
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getAll(array $attributes)
    {
        extract($attributes);

        $data = Category::find()
            ->where(['parent_id' => $id])
            ->andWhere(['is_show' => 1])
            ->orderBy('parent_id', 'ASC')
            ->orderBy('sort_order', 'ASC')
            ->asArray()
            ->all();

        foreach ($data as $k => $v) {
            $res = Goods::find()
                ->select(['goods_thumb'])
                ->where(['cat_id' => $v['cat_id']])
                ->andWhere(['is_on_sale' => 1])
                ->andWhere(['is_delete' => 0])
                ->orderBy('sort_order DESC')
                ->addOrderBy('goods_id DESC')
                ->asArray()
                ->one();

            if (empty($res['goods_thumb'])) {
                $data[$k]['goods_thumb'] = getImagePath('images/no_picture.gif');
            } else {
                $data[$k]['goods_thumb'] = getImagePath($res['goods_thumb']);
            }

            if (isset($v['cat_id'])) {
                $child_tree = self::getAll(['id' => $v['cat_id']]);

                if ($child_tree) {
                    $data[$k]['child'] = $child_tree;
                    $data[$k]['haschild'] = 1;
                }
            }
        }

        return $data;
    }

    /**
     * 返回指定分类
     * @param array $attributes
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getList(array $attributes)
    {
        extract($attributes);

        $model = Category::find();

        if (isset($id) && $id) {
            // 指定分类
            $model->where(['cat_id' => $id])->orWhere(['parent_id' => $id]);
        } else {
            $model->where(['parent_id' => 0]);
        }

        if (isset($keyword) && $keyword) {
            $model->orWhere(['like', 'cat_name', $keyword])->orWhere(['cat_id' => $keyword]);
        }

        $data = $model
            ->orderBy('parent_id ASC')
            ->addOrderBy('sort_order ASC')
            ->asArray()
            ->all();

        return $data;
    }

    /**
     * @param array $attributes
     */
    public static function getDetail(array $attributes)
    {
        extract($attributes);

        return Category::find()->where(['cat_id' => $id])->asArray()->one();
    }

    /**
     * 返回分类下子类ID
     * @param $id
     * @param bool $all
     * @return array
     */
    public static function getCategoryIds(array $attributes)
    {
        extract($attributes);

        if ($model = Category::find()->where(['cat_id' => $id])->andWhere(['is_show' => 1])->one()) {
            $ids = Category::find()->select('cat_id')
                ->where(['parent_id' => $id])
                ->andWhere(['is_show' => 1])
                ->orderBy('cat_id ASC')
                ->asArray()
                ->column();

            if (!empty($ids) && isset($all) && $all) {
                foreach ($ids as $vo) {
                    $res = self::getCategoryIds(['id' => $vo, 'all' => $all]);
                    $ids = array_merge($ids, $res);
                }
            }

            return $ids;
        }

        return [0];
    }

}