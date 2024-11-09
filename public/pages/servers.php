<?
    if(!defined("Arizona")) return require_once '../../public/pages/404.php';
?>
<div class="layout__content">
	<div class="all-servers">
		<center><h1>Список серверов ARIZONA MaryLand</h1></center>
		<div class="all-servers__wrap">
			<? echo $serversonline; ?>
		</div>
	</div> 
</div>
<div class="breadcrumbs"><div class="breadcrumbs__wrapper container">
	<ul itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs__list">
	<li itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"><a href="/" class="nuxt-link-active" itemprop="item"><span itemprop="name">SAMP</span>
	</a> <meta itemprop="position" content="1"></li><li itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
	<a href="/servers" aria-current="page" class="nuxt-link-exact-active nuxt-link-active" itemprop="item"></a> <span itemprop="name">Сервера</span> 
	<meta itemprop="position" content="2"></li></ul></div>
</div> 
<?php require_once('public/pages/votes.php');?>