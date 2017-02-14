<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

    <div class="category-top">
        <header>
            <section class="search">
                <div class="text-all  text-all-back j-text-all">
                    <div class="input-text n-input-text i-search-input">
                        <a class="a-search-input" href="<?= Url::to(['misc/search']) ?>"></a>
                        <i class="iconfont icon-sousuo"></i>
                        <input type="text" placeholder="请输入您搜索的关键词!"/>
                        <i class="iconfont icon-guanbi is-null j-is-null"></i>
                    </div>
                </div>
            </section>
        </header>
    </div>

    <aside>
        <div class="menu-left scrollbar-none" id="sidebar">
            <ul>
                <?php foreach ($category as $key => $item): ?>
                    <li
                        <?php if ($key == 0) {
                            echo ' class="active"';
                        } ?>
                    ><?= $item['cat_name'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </aside>

<?php foreach ($category as $key => $item): ?>
    <section class="menu-right padding-all j-content"
        <?php if ($key > 0) {
            echo ' style="display:none"';
        } ?>
    >
        <h5><?= $item['cat_name'] ?></h5>
        <ul>
            <?php foreach ($item['child'] as $k => $vo): ?>
                <li class="w-3"><a href="<?= Url::to(['detail', 'id' => $vo['cat_id']]) ?>"></a>
                    <img src="<?= $vo['goods_thumb'] ?>"/><span><?= $vo['cat_name'] ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php endforeach; ?>

<?= $this->render('/library/tabbar') ?>