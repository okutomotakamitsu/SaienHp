<?php
session_start();
header("Content-Type: text/html;charset=utf-8");

	$urll = $_SERVER["REQUEST_URI"];
	$domain = "https://www.saien.co.jp/";


print <<<EOM
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html lang="ja" xml:lang="ja" xmlns="https://www.w3.org/1999/xhtml">
<head>
	<meta https-equiv="content-type" content="text/html; charset=utf-8" />
	<meta https-equiv="content-language" content="ja" />
	<title>株式会社 埼玉園芸市場 - <MTGetVar name="page_title"></title>

<meta https-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta https-equiv="content-Style-type" content="text/css" />
	<meta https-equiv="content-Script-type" content="text/javascript" />
	<meta name="title" content="株式会社 埼玉園芸市場 - <MTGetVar name="page_title">" />
	<meta name="robots" content="ALL" />
	<meta name="keywords" content="埼玉,園芸,市場,<MTGetVar name="page_title">" />
	<meta name="description" content="株式会社 埼玉園芸市場 - <MTGetVar name="page_title">" />
	<meta name="author" content="SaitamaEngei Ichiba" />
	<meta name="copyright" content="Copyright SaitamaEngei Ichiba Co ., Ltd All Right Reserve" />
	<script src="<$MTBlogURL$>opt/include.js" type="text/javascript"></script>

<link href="<$MTBlogURL$>highslide/highslide.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<$MTBlogURL$>highslide/highslide.js"></script>
<script type="text/javascript"> hs.graphicsDir = '<$MTBlogURL$>highslide/graphics/';window.onload = function() {hs.preloadImages();}</script>
<script type="text/javascript">
hs.captionEval = 'this.thumb.alt';
</script>

	<link href="<$MTBlogURL$>opt/import.css" rel="stylesheet" type="text/css" />
	<link rel="<$MTBlogURL$>shortcut icon" href="<$MTBlogURL$>img/favicon.ico" />
	<link rel="<$MTBlogURL$>INDEX" href="<$MTBlogURL$>index.html" />
	<link rev="MADE" href="mailto:info@saien.co.jp" />

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<script type="text/javascript">
    var ua = navigator.userAgent.toUpperCase();
    if(document.referrer.indexOf(location.href.split('/')[2]) == -1 && (ua.indexOf('IPHONE') != -1 || (ua.indexOf('ANDROID') != -1 && ua.indexOf('MOBILE') != -1))) {
        if(window.confirm('スマートフォンサイトに移動しますか？')) {
            location.href = '<$MTBlogURL$>sp/index.html';
        }
    }
</script>



</head>
<body>

<div id="wrap">
	<div id="tops">
		<div id="head">
			<div id="logo"><a href="<$MTBlogURL$>index.html"><img src="<$MTBlogURL$>sp/SumahoGazou/logo.jpg" width="300" height="59" alt="株式会社 埼玉園芸市場 ロゴ" /></a></div>
			<div id="head-right">
				<div id="headnavi">
					<ul>
						<li class="navi1"><a href="<$MTBlogURL$>index.html"><span>HOME</span></a></li>
						<li class="navi2"><a href="<$MTBlogURL$>privacy.html"><span>プライバシーポリシー</span></a></li>
						<li class="navi3"><a href="<$MTBlogURL$>sitemap.html"><span>サイトマップ</span></a></li>
						<li class="navi4"><a href="<$MTBlogURL$>contact.html"><span>お問い合わせ</span></a></li>
					</ul>
				</div>
				<div id="fontSize">
					<ul id="fontSizeSet">
						<li><img id="fontL" name="fontL" src="<$MTBlogURL$>img/font_l.gif" width="21" height="21" alt="大" /></li>
						<li><img id="fontM" name="fontM" src="<$MTBlogURL$>img/font_m.gif" width="21" height="21" alt="中" /></li>
						<li><img id="fontS" name="fontS" src="<$MTBlogURL$>img/font_s.gif" width="21" height="21" alt="小" /></li>
					</ul>
					<script type="text/javascript">FontChanger.start("fontSizeSet");</script>
				</div>
				<div id="contact-box">
					<a href="<$MTBlogURL$>contact.html"><img src="<$MTBlogURL$>img/mail.gif" width="38" height="23" alt="メールでお問い合わせ" /></a>
				</div>
			</div>
		</div>
		<!-- div id="navi">
			<ul>
				<li class="navi1"><a href="<$MTBlogURL$>whatsnew.html"><span>お知らせ</span></a></li>
				<li class="navi2"><a href="<$MTBlogURL$>otorihiki.html"><span>取引希望のお客様</span></a></li>
				<li class="navi3"><a href="<$MTBlogURL$>sijyogaiyou.html"><span>市場概要</span></a></li>
				<li class="navi4"><a href="<$MTBlogURL$>section.html"><span>部門紹介</span></a></li>
				<li class="navi5"><a href="<$MTBlogURL$>staff.html"><span>スタッフ紹介</span></a></li>
				<li class="navi6"><a href="<$MTBlogURL$>sanchi.html"><span>産地情報</span></a></li>
				<li class="navi7"><a href="<$MTBlogURL$>contact.html"><span>お問い合わせ</span></a></li>
			</ul>
		</div -->
<!-- div>
			<ul class="list01">
				<li><a href="<$MTBlogURL$>whatsnew.html">お知らせ</a></li>
				<li><a href="<$MTBlogURL$>otorihiki.html">取引希望のお客様</a></li>
				<li><a href="<$MTBlogURL$>sijyogaiyou.html"><span>市場概要</a></li>
				<li><a href="<$MTBlogURL$>section.html"><span>部門紹介</a></li>
				<li><a href="<$MTBlogURL$>staff.html"><span>スタッフ紹介</a></li>
				<li><a href="<$MTBlogURL$>sanchi.html"><span>産地情報</a></li>
				<li><a href="<$MTBlogURL$>contact.html"><span>お問い合わせ</a></li>
			</ul>
</div -->
EOM;

?> 
