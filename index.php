<$MTInclude module="globalHeader"$>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC4fOvzTfDIINRq6Or2mxTTnjigg_VJzI"></script>

<!-- �X���C�h�V���[ -->
  <link rel="stylesheet" type="text/css" href="https://saien.heteml.jp/okutomo/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://saien.heteml.jp/okutomo/slick/slick-theme2.css"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://saien.heteml.jp/okutomo/slick/slick.min.js"></script>

<script type="text/javascript">  
$(function() {
  $('.slider').slick({
    arrows: false,
    asNavFor:'.slider-thumb',
    autoplay: true    
  });

 $('.slider-thumb').slick({
    asNavFor:'.slider',
    slidesToShow:4,
  });

});

</script>
		<div id="main">
			<div id="top-main">
				<div class="fl">


  <ul class="slider">
     <li><img src="sp/SumahoGazou/tps_l_01.jpg" alt=""></li>
     <li><img src="sp/SumahoGazou/tps_l_02.jpg" alt=""></li>
     <li><img src="sp/SumahoGazou/tps_l_03.jpg" alt=""></li>
     <li><img src="sp/SumahoGazou/tps_l_04.jpg" alt=""></li>
     <li><img src="sp/SumahoGazou/tps_l_05.jpg" alt=""></li>
  </ul>

  <ul class="slider-thumb">
     <li><img src="sp/SumahoGazou/tps_l_01.jpg" alt=""></li>
     <li><img src="sp/SumahoGazou/tps_l_02.jpg" alt=""></li>
     <li><img src="sp/SumahoGazou/tps_l_03.jpg" alt=""></li>
     <li><img src="sp/SumahoGazou/tps_l_04.jpg" alt=""></li>
     <li><img src="sp/SumahoGazou/tps_l_05.jpg" alt=""></li>
  </ul>

				</div>
			</div>
			<div class="column">
				<div class="left-box">

<$MTInclude module="top-headline"$>

<section class="mainmargin">
  <p class="font02">���m�点</p>
  <?php readfile("whatsnew/list_information.php"); ?>
  <div class="listCenter"><a href="whatsnew.html"><q>���m�点�ꗗ</q></a></div>
</section>

<section class="mainmargin">					
  <p class="font02">���ڂ̎Y�n���I</p>
  <div class="santi">
    <?php readfile("sanchi/list_sanchi.php"); ?>
  </div>
</section>

<section class="mainmargin">
  <p class="font02">���ڂ̎��ޏ��I</p>
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
