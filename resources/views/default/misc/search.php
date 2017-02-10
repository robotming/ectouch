<?php 

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="search-div ts-3">
	<section class="search">
		<form action="<?= Url::to(['category/detail']) ?>" method="post">
		<div class="text-all dis-box j-text-all">
			<a class="a-icon-back j-close-search" href="javascript:history.go(-1)"><i class="iconfont icon-jiantou is-left-font"></i></a>
			<div class="box-flex input-text">
				<input class="j-input-text" type="text" name="name" placeholder="请输入搜索关键词！" id="newinput" autofocus="autofocus"/ >
				<i class="iconfont icon-guanbi2 is-null j-is-null"></i>
			</div>
			<button type="submit" class="btn-submit">搜索</button>
		</div>
		</form>
	</section>
	<section class="search-con">
		<div class="swiper-scroll history-search">
			<div class="swiper-wrapper">
			<div class="swiper-slide">
		<p>
			<label class="fl">热门搜索</label>
		</p>
		<ul class="hot-search a-text-more">
						<li class="w-3"><a href="/v2/index.php?m=default&c=category&a=index&keywords=%E7%BE%8E%E5%9B%BD&u=0"><span>美国</span></a></li>
						<li class="w-3"><a href="/v2/index.php?m=default&c=category&a=index&keywords=%E6%96%B0%E7%94%9F%E5%A9%B4%E5%84%BF&u=0"><span>新生婴儿</span></a></li>
					</ul>
		<p class="hos-search">
			<label class="fl">最近搜索</label>
			<span class="fr" onclick="javascript:clearHistroy();"><i class="iconfont icon-xiao10 is-xiao10 jian-top fr"></i></span>
		</p>
		
			<ul class="hot-search a-text-more a-text-one" id="search_histroy">
							</ul>
			</div>
			</div>
			<div class="swiper-scrollbar"></div>
		</div>
	</section>
</div>