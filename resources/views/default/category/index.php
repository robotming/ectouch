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
            <li class="active">女装</li>
            <li>男装</li>
            <li>母婴用品</li>
        </ul>
    </div>
</aside>

<section class="menu-right padding-all j-content">
    <h5>女装</h5>
    <ul>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(3);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/14057_thumb_G_1441848605665.jpg"/><span>真丝裙</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(5);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/14000_thumb_G_1441848627461.jpg"/><span>休闲裤</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(6);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/18387_thumb_G_1441848640764.jpg"/><span>蕾丝衫</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(7);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/16284_thumb_G_1441848650200.jpg"/><span>热裤</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(8);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/18037_thumb_G_1441848660477.jpg"/><span>休闲套装</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(9);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/16980_thumb_G_1441848671426.jpg"/><span>衬衫</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(10);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/18556_thumb_G_1441848682559.jpg"/><span>半身裙</span>
        </li>
    </ul>
</section>

<section class="menu-right padding-all j-content" style="display:none">
    <h5>男装</h5>
    <ul>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(19);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/14677_thumb_G_1441857914214.jpg"/><span>男装集结</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(20);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/16322_thumb_G_1441857925304.jpg"/><span>百搭T恤</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(21);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/7774_thumb_G_1441857928136.jpg"/><span>牛仔裤</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(22);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/15752_thumb_G_1441857942990.jpg"/><span>条纹T恤</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(23);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/18444_thumb_G_1441857953670.jpg"/><span>亚麻T恤</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(24);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/13848_thumb_G_1441857957349.jpg"/><span>印花T恤</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(25);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/14962_thumb_G_1441857965760.jpg"/><span>丝光棉T</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(26);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/12548_thumb_G_1441857974787.jpg"/><span>休闲裤</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(27);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/16530_thumb_G_1441857985104.jpg"/><span>棉麻裤</span>
        </li>
    </ul>
</section>

<section class="menu-right padding-all j-content" style="display:none">
    <h5>母婴用品</h5>
    <ul>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(258);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/16001_thumb_G_1442263607052.jpg"/><span>孕妇装</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(259);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/10535_thumb_G_1442261698192.jpg"/><span>孕妇洗护</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(260);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/10947_thumb_G_1442261831614.jpg"/><span>防辐射</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(261);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/9420_thumb_G_1442261334651.jpg"/><span>产后用品</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(262);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/10411_thumb_G_1442261657178.jpg"/><span>内衣裤</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(263);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/12883_thumb_G_1442262467771.jpg"/><span>奶粉</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(264);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/11978_thumb_G_1442262167780.jpg"/><span>辅食</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(265);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/12451_thumb_G_1442262322295.jpg"/><span>纸尿裤</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(266);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/13608_thumb_G_1442262711059.jpg"/><span>凉席睡袋</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(267);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/11066_thumb_G_1442261870898.jpg"/><span>奶瓶奶嘴</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(268);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/12593_thumb_G_1442262370082.jpg"/><span>喂养小电</span>
        </li>
        <li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(269);'></a>
            <img src="http://shop.ectouch.cn/v2/images/201509/thumb_img/13398_thumb_G_1442262641146.jpg"/><span>澡盆洗护</span>
        </li>
    </ul>
</section>
</div>

<?= $this->render('/library/tabbar') ?>