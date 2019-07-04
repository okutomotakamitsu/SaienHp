<$MTInclude module="globalHeader"$>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC4fOvzTfDIINRq6Or2mxTTnjigg_VJzI"></script>

<!-- スライドショー -->
  <link rel="stylesheet" type="text/css" href="https://saien.heteml.jp/okutomo/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://saien.heteml.jp/okutomo/slick/slick-theme2.css"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://saien.heteml.jp/okutomo/slick/slick.min.js"></script>

<script type="text/javascript">  
$(function() {
  $('.slider').slick({
    dots: true,
    arrows: false,
    centerMode: false,
    autoplay:true,
    autoplaySpeed:8000,
  });
});
</script>


		<div id="main">
			<div id="top-main">
				<div class="fl">


  <ul class="slider">
     <li><img src="sp/SumahoGazou/tps_l_01.jpg"></li>
     <li><img src="sp/SumahoGazou/tps_l_02.jpg"></li>
     <li><img src="sp/SumahoGazou/tps_l_03.jpg"></li>
     <li><img src="sp/SumahoGazou/tps_l_04.jpg"></li>
  </ul>



				</div>
			</div>
			<div class="column">
				<div class="left-box">

<$MTInclude module="top-headline"$>

<section class="mainmargin">
 <p class="font02">インフォメーション</p>
  <a target="_blank" href="http://www2.saien.co.jp/">
  <img alt="touroku.jpg" src="img/saienlogin3.jpg" width="500px" height="auto" alt="SaienLogin画面へ" /><br />→画像が反応しない方はコチラから【Saienログイン画面へ】</a>
</section>

<section class="mainmargin2">
  <h2>■SaienLogin画面の取扱いについて</h2>

  <h3>１.ユーザー登録について</h3>
  <p>SaienLogin画面中央下にある【ユーザー登録】をクリックしてユーザー登録画面に進んで下さい。<br />必要事項を入力後画面下の【登録】をクリックすると登録完了です。</p>

  <h3>２.ログインの仕方</h3>
  <p>SaienLogin画面中央にある【ＮＯ】と【パスワード】を入力後、画面左下の【ログイン】をクリックしてください。</p>

  <h3>３.ユーザー変更について</h3>
  <p>【パスワードの変更】と【メールアドレスの変更】を行う場合はSaienLogin画面右下の【ユーザー変更】をクリックしてして下さい。</p>

  <h3>必要事項を入力後画面下の【登録】をクリックすると変更を反映させることができます。</h3><br />
  <p>※もしうまくいかないようでしたら下記リンクよりメールを下さい。<br /><a href="mailto:info@saien.co.jp?subject=%e3%83%87%e3%83%bc%e3%82%bf%e3%82%b5%e3%83%bc%e3%83%93%e3%82%b9%e3%81%ab%e3%81%a4%e3%81%84%e3%81%a6">→システムについてのメールはこちらから</a></p>

</section>

<section class="mainmargin">
  <p class="font02">お知らせ</p>
  <?php readfile("whatsnew/list_information.php"); ?>
  <div class="right-link"><a href="whatsnew.html">お知らせ一覧</a></div>
</section>

<section class="mainmargin">
  <p class="font02">お取引希望の方へ</p>
  <img src="image/0818/torihikimeisi.jpg" width="500px" height="auto" alt="取引イメージ画像" />

  <p>全国から集まる生花、鉢物植木のせり売り、 オリジナル商品の企画、アレンジメント、世界の 園芸用品・資材の卸売りまで、花き、園芸のことなら 全てを取り扱う総合市場です。</p>
  <p>まだご登録のお済みで無い生産様・そしてこれから当市場をご利用なさろうとご検討中の新規買参人様等々、この御機会にあなたの花ビジネスプランをぜひご相談下さい。</p>
  <p>【まずはお電話】0480-69-1118（担当：高瀬まで）</p>

  <div class="otorihiki-banner">
  <a href="baisan.html"><img src="img/baisannin_button.gif" width="219" height="64" alt="買参人の方へ" /></a>
  <a href="seisan.html"><img src="img/seisansha_button.gif" width="219" height="64" alt="生産者の方へ" /></a>
  </div>
</section>






<section class="mainmargin">					
  <p class="font02">注目の産地情報！</p>
  <div class="santi">
    <?php readfile("sanchi/list_sanchi.php"); ?>
  </div>
</section>

<section class="mainmargin">
  <p class="font02">注目の資材情報！</p>
  <div class="santi">
    <?php readfile("sizai/list_sizai.php"); ?>
  </div>
</section>

</div>
<div class="right-box">



					<$MTInclude module="right-box"$>



				</div>
			</div>
		</div>




<$MTInclude module="globalFooter"$>
