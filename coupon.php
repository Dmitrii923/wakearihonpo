<?php

//設定ファイル読み込み
require_once 'php/conf.php';

require_once 'php/parts/function.php';

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>クーポン｜群馬県伊勢崎市の熟女パブ「わけあり本舗」</title>
<meta name="description" content="群馬県伊勢崎市の熟女パブ・熟女キャバクラ「わけあり本舗」クーポンページです。伊勢崎市の熟女パブ・熟女キャバクラで楽しむ・働くなら「わけあり本舗」">
<meta name="keywords" content="クーポン,熟女パブ,キャバクラ,伊勢崎,群馬,わけあり本舗">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
	
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">	
<link href="https://fonts.googleapis.com/css2?family=Gelasio:wght@500&display=swap" rel="stylesheet">

<link rel="canonical" href="https://www.wakearihonpo.com/coupon.php">

<meta name="format-detection" content="telephone=no">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144819770-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144819770-1');
</script>	
</head>

<body>
	<div id="top_fade">
		<div class="drawer drawer--right">
			<?php include ('php/header.php'); ?>
			<div id="page_top_bg">
				<div class="page_title_area">
					<h2>COUPON<br /><span style="font-size: 50%;">クーポン</span></h2>
				</div>
			</div>
			
			<div class="page_base_area">
				<div class="top_contents_in">
					<?php
$result=mysqli_query($sql, "SELECT * From `coupon` WHERE coupon_shop='$login_id'  AND `coupon2` >=$news_today ORDER by coupon_id DESC");
$cnt=mysqli_num_rows($result);

//while(list($key,$line)=each($datacsv)){
while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu4.php');
	
	$coupon_day = date("Y年m月d日",strtotime("$coupon2"));
	
	echo "<div class=\"coupon_page_ticket_box_base\">
      <div class=\"coupon_page_ticket_box\">
        <div class=\"coupon_page_ticket_box_1\">".$coupon1."</div>
        <div class=\"coupon_page_ticket_box_2\">有効期限：".$coupon_day."まで</div>
        <div class=\"coupon_page_ticket_box_3\">
        ".$coupon3."
        </div>
      </div><!--coupon_page_ticket_box-->
    </div>\n";

		}

?>

				</div>
			</div>
			<?php include ('php/footer.php'); ?>
		</div>
	</div>	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>
<!--サイド　プラグイン-->
<script>
$(function() {
var topBtn = $('#page_top');	
topBtn.hide();
//スクロールが100に達したらボタン表示
$(window).scroll(function () {
　if ($(this).scrollTop() > 100) {
　　topBtn.fadeIn();}
 　　　else { topBtn.fadeOut();
	}
	});
//スクロールしてトップ
    topBtn.click(function () {
	$('body,html').animate({
	scrollTop: 0}, 500);
		return false;
    });
});
</script>
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>