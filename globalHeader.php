<?php
session_start();
header("Content-Type: text/html;charset=utf-8");

	$urll = $_SERVER["REQUEST_URI"];
	$domain = "https://www.saien.co.jp/";

print <<<EOM



<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Saien�b��ʉ��|�s������T�C�g</title>
<meta name="keywords" content="���,���|,�s��,<MTGetVar name="page_title">" />
<meta name="description" content="������� ��ʉ��|�s�� - <MTGetVar name="page_title">" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="mixi-check-robots" content="noimage" />
<meta property="og:title" content="Saien�b��ʉ��|�s������T�C�g">
<meta property="og:description" content="�u��ʉ��|�s��v�̌����E�F�u�T�C�g�B������Ѝ�ʉ��|�s��̊�Ə��f�ځB">
<meta property="og:type" content="website">
<meta property="og:url" content="/index.html">
<meta property="og:image" content="">
<meta property="og:locale" content="ja_JP">
<meta name="p:domain_verify" content="f7368a4426544b684cac8f8fe249fc22"/>
<meta name="viewport" content="width=1200" />



<!-- :::: highslide :::: -->
<link href="<$MTBlogURL$>highslide/highslide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<$MTBlogURL$>highslide/highslide.js"></script>
<script type="text/javascript"> hs.graphicsDir = '<$MTBlogURL$>highslide/graphics/';window.onload = function() {hs.preloadImages();}</script>
<script type="text/javascript"> hs.captionEval = 'this.thumb.alt';</script>

<link href="<$MTBlogURL$>opt/import.css" rel="stylesheet" type="text/css" />
<link rel="<$MTBlogURL$>shortcut icon" href="<$MTBlogURL$>img/favicon.ico" />
<link rel="<$MTBlogURL$>INDEX" href="<$MTBlogURL$>index.html" />
<link rev="MADE" href="mailto:info@saien.co.jp" />

<!-- :::: facebook :::: -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- :::: �X�}�[�g�t�H���T�C�g�Ɉړ� :::: -->
<script type="text/javascript">
    var ua = navigator.userAgent.toUpperCase();
    if(document.referrer.indexOf(location.href.split('/')[2]) == -1 && (ua.indexOf('IPHONE') != -1 || (ua.indexOf('ANDROID') != -1 && ua.indexOf('MOBILE') != -1))) {
        if(window.confirm('�X�}�[�g�t�H���T�C�g�Ɉړ����܂����H')) {
            location.href = '<$MTBlogURL$>sp/index.html';
        }
    }
</script>

</head>



<body>

<div id="wrap">
	<div id="tops">
		<div id="head">
			<div id="logo"><a href="<$MTBlogURL$>index.html"><img src="<$MTBlogURL$>sp/SumahoGazou/logo.jpg" width="300" height="59" alt="������� ��ʉ��|�s�� ���S" /></a></div>

<div id="head-right01">
	<div id="headnavi01">
		<ul>
			<li><a href="<$MTBlogURL$>index.html">HOME</a></li>
			<li><a href="<$MTBlogURL$>privacy.html">�v���C�o�V�[�|���V�[</a></li>
			<li><a href="<$MTBlogURL$>sitemap.html">�T�C�g�}�b�v</a></li>
			<li><a href="mailto:info@saien.co.jp?subject=%e3%82%b5%e3%82%a4%e3%82%a8%e3%83%b3%e3%83%9b%e3%83%bc%e3%83%a0%e3%83%9a%e3%83%bc%e3%82%b8%e3%81%8b%e3%82%89%e3%81%ae%e3%81%8a%e5%95%8f%e3%81%84%e5%90%88%e3%82%8f%e3%81%9b">���₢���킹</a></li>
		</ul>
	</div>
<form id="cse-search-box" action="http://google.com/cse">
  <input type="hidden" name="cx" value="006227392899238622030:hryq1kpas8s" />
  <input type="hidden" name="ie" value="UTF-8" />
  <input type="text" name="q" size="32" />
  <input type="submit" name="sa" value="����" id="search_btn" />
</form>
<script type="text/javascript" src="//www.google.com/cse/brand?form=cse-search-box&lang=ja">
</script>
<a class="tel01" href="tel:0480691118">? 0480-69-1118</a>


	
</div>


			<!-- div id="head-right">

				<div id="headnavi">
					<ul>
						<li class="navi1"><a href="<$MTBlogURL$>index.html"><span>HOME</span></a></li>
						<li class="navi2"><a href="<$MTBlogURL$>privacy.html"><span>�v���C�o�V�[�|���V�[</span></a></li>
						<li class="navi3"><a href="<$MTBlogURL$>sitemap.html"><span>�T�C�g�}�b�v</span></a></li>
						<li class="navi4"><a href="<$MTBlogURL$>contact.html"><span>���₢���킹</span></a></li>
					</ul>
				</div>

				<div id="fontSize">
					<ul id="fontSizeSet">
						<li><img id="fontL" name="fontL" src="<$MTBlogURL$>img/font_l.gif" width="21" height="21" alt="��" /></li>
						<li><img id="fontM" name="fontM" src="<$MTBlogURL$>img/font_m.gif" width="21" height="21" alt="��" /></li>
						<li><img id="fontS" name="fontS" src="<$MTBlogURL$>img/font_s.gif" width="21" height="21" alt="��" /></li>
					</ul>
					<script type="text/javascript">FontChanger.start("fontSizeSet");</script>
				</div>

				<div id="contact-box">
					<a href="<$MTBlogURL$>contact.html"><img src="<$MTBlogURL$>img/mail.gif" width="38" height="23" alt="���[���ł��₢���킹" /></a>
				</div>
			</div -->






		</div>

<div id="navi01">
	<ul class="list01">
		<li><a href="<$MTBlogURL$>whatsnew.html">���m�点</a></li>
		<li><a href="<$MTBlogURL$>otorihiki.html">�����]�̂��q�l</a></li>
		<li><a href="<$MTBlogURL$>sijyogaiyou.html"><span>�s��T�v</a></li>
		<li><a href="<$MTBlogURL$>section.html"><span>����Љ�</a></li>
		<li><a href="<$MTBlogURL$>staff.html"><span>�X�^�b�t�Љ�</a></li>
		<li><a href="<$MTBlogURL$>sanchi.html"><span>�Y�n���</a></li>
	</ul>
</div>



EOM;

?> 

