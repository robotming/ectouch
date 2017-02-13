<?php

use yii\helpers\Url;

?>

<footer class="footer-nav dis-box">
    <a href="<?= Url::home() ?>" class="box-flex nav-list">
        <i class="nav-box i-home"></i><span>首页</span>
    </a>
    <a href="<?= Url::to(['category/index']) ?>" class="box-flex nav-list">
        <i class="nav-box i-cate"></i><span>分类</span>
    </a>
    <a href="<?= Url::to(['discover/index']) ?>" class="box-flex nav-list">
        <i class="nav-box i-shop"></i><span>发现</span>
    </a>
    <a href="<?= Url::to(['flow/cart']) ?>" class="box-flex nav-list">
        <i class="nav-box i-flow"></i><span>购物车</span>
    </a>
    <a href="<?= Url::to(['user/index']) ?>" class="box-flex nav-list">
        <i class="nav-box i-user"></i><span>我的</span>
    </a>
</footer>