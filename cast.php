<?php

//設定ファイル読み込み
require_once 'php/conf.php';

require_once 'php/parts/function.php';

$sche = $_GET['sche'];

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャスト一覧｜群馬県伊勢崎市の熟女パブ「わけあり本舗」</title>
<meta name="description" content="群馬県伊勢崎市の熟女パブ・熟女キャバクラ「わけあり本舗」キャスト一覧ページです。伊勢崎市の熟女パブ・熟女キャバクラで楽しむ・働くなら「わけあり本舗」">
<meta name="keywords" content="キャスト一覧,熟女パブ,キャバクラ,伊勢崎,群馬,わけあり本舗">
	
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

<link rel="canonical" href="https://www.wakearihonpo.com/cast.php">

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
					<h2>CAST<br /><span style="font-size: 50%;">キャスト</span></h2>
				</div>
			</div>
			
			<div class="page_base_area">
				<div class="top_contents_in">
					<div class="wrapper_cast">
						<div class="element_castpage">
							<div class="ac-box">
								<input id="ac-1" name="accordion-1" type="checkbox" />
								<label for="ac-1">出勤予定を見る </label>
								<div class="ac-small">
									<p>
										<a href="cast.php" class="btn_schedule">全キャスト一覧</a>
										<a href="cast.php?sche=0" class="btn_schedule">本日の出勤</a>										
										<a href="cast.php?sche=1" class="btn_schedule"><?php echo $day2; ?>.<?php echo $week2; ?></a>
										<a href="cast.php?sche=2" class="btn_schedule"><?php echo $day3; ?>.<?php echo $week3; ?></a>
										<a href="cast.php?sche=3" class="btn_schedule"><?php echo $day4; ?>.<?php echo $week4; ?></a>
										<a href="cast.php?sche=4" class="btn_schedule"><?php echo $day5; ?>.<?php echo $week5; ?></a>
										<a href="cast.php?sche=5" class="btn_schedule"><?php echo $day6; ?>.<?php echo $week6; ?></a>
										<a href="cast.php?sche=6" class="btn_schedule"><?php echo $day7; ?>.<?php echo $week7; ?></a>
									</p>
								</div>
							</div>
						</div>						
					</div>
					<div class="cast_page_toptitle"><?php 
if($sche=='0'){
echo "".$day1.".".$week1.""; 
}elseif($sche=='1'){
echo "".$day2.".".$week2.""; 
}elseif($sche=='2'){
echo "".$day3.".".$week3."";  
}elseif($sche=='3'){
echo "".$day4.".".$week4.""; 
}elseif($sche=='4'){
echo "".$day5.".".$week5.""; 
}elseif($sche=='5'){
echo "".$day6.".".$week6.""; 
}elseif($sche=='6'){
echo "".$day7.".".$week7.""; 
}else{
echo "全キャスト一覧"; 
}
?></div>						

					<div class="wrapper">
						<?php
$result=mysqli_query($sql3, "SELECT * From `data` WHERE `yobi1` = '$login_id' AND `option1` = '1' ORDER by id");
$cnt=mysqli_num_rows($result);


if($sche=='0'){

while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu.php');
	
	//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);
	
if($getdays<1){
		if($yobi9==$edi){
		if ($yotei1 == '3' || $yotei1 == '1') {
			
			
		echo "<div class=\"element_castlist\"><div class=\"top_schedule_box\">
        <a href=\"prof.php?name2=".$name2."\"><div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\">";
			
			
			//写真を表示
			
	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}

echo " </div>";
				
			if($profinfo9 == ''){
	echo "";
}else{
	echo "<div class=\"fa_insta\"><img src=\"\" data-src=\"img/cast_instagram.svg\" class=\"lozad\"></div>";			
			}
		if($option4 == ''){
	echo "";
}else{
	echo "<div class=\"fa_youtube\"><img src=\"\" data-src=\"img/cast_youtube.svg\" class=\"lozad\" alt=\"You Tube\"></div>";			
			}	
			
			echo " <p>".$name."</p>";

			echo "</div></a></div></div>\n";
			
		}
			}
	}else{
	
			if ($yotei1 == '3' || $yotei1 == '1') {
			
			
		echo "<div class=\"element_castlist\"><div class=\"top_schedule_box\">
        <a href=\"prof.php?name2=".$name2."\"><div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\">";
			
			
			//写真を表示
			
	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}

echo " </div>";
				
			if($profinfo9 == ''){
	echo "";
}else{
	echo "<div class=\"fa_insta\"><img src=\"\" data-src=\"img/cast_instagram.svg\" class=\"lozad\"></div>";			
			}
		if($option4 == ''){
	echo "";
}else{
	echo "<div class=\"fa_youtube\"><img src=\"\" data-src=\"img/cast_youtube.svg\" class=\"lozad\" alt=\"You Tube\"></div>";			
			}	
			
			echo " <p>".$name."</p>";

			echo "</div></a></div></div>\n";
			
		}
	
}
	//△表示内容ここまで
}
$result=mysqli_query($sql, "SELECT * From `taiken` WHERE `shop_no` = '$login_id'  AND `taiken_limit` = '$tdy'");
$cnt=mysqli_num_rows($result);

while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu5.php');
}
		$count = 0;
		$tcol = 1;

while ($count < $taiken_num){
 	
	echo "<div class=\"element_castlist\"><div class=\"top_schedule_box\">
        <div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\">";
			
			//写真を表示

	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\" />\n";

echo " </div>";			
			echo " <p>体験入店".$tcol."</p>";

			echo "</div></a></div></div>\n";
	$count++;
  $tcol++;
}

}
if($sche=='1'){

while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu.php');

//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);

//本日の出勤
	//▽表示内容ここから
	if($getdays<2){
		echo "";
	}else{
		if ($yotei2 == '3' || $yotei2 == '1') {

		echo "<div class=\"element_castlist\"><div class=\"top_schedule_box\">
        <a href=\"prof.php?name2=".$name2."\"><div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\">";
			
			
			//写真を表示
			
	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}

echo " </div>";
				
			if($profinfo9 == ''){
	echo "";
}else{
	echo "<div class=\"fa_insta\"><img src=\"\" data-src=\"img/cast_instagram.svg\" class=\"lozad\"></div>";			
			}
		if($option4 == ''){
	echo "";
}else{
	echo "<div class=\"fa_youtube\"><img src=\"\" data-src=\"img/cast_youtube.svg\" class=\"lozad\" alt=\"You Tube\"></div>";			
			}	
			
			echo " <p>".$name."</p>";


			echo "</div></a></div></div>\n";
			
			
		}
	}
	//△表示内容ここまで
}
}

if($sche=='2'){

while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu.php');

//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);
	
//本日の出勤
	//▽表示内容ここから
	if($getdays<3){
		echo "";
	}else{
		if ($yotei3 == '3' || $yotei3 == '1') {
				echo "<div class=\"element_castlist\"><div class=\"top_schedule_box\">
        <a href=\"prof.php?name2=".$name2."\"><div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\">";
			
			
			//写真を表示
			
	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}

echo " </div>";
				
			if($profinfo9 == ''){
	echo "";
}else{
	echo "<div class=\"fa_insta\"><img src=\"\" data-src=\"img/cast_instagram.svg\" class=\"lozad\"></div>";			
			}
		if($option4 == ''){
	echo "";
}else{
	echo "<div class=\"fa_youtube\"><img src=\"\" data-src=\"img/cast_youtube.svg\" class=\"lozad\" alt=\"You Tube\"></div>";			
			}	
			
			echo " <p>".$name."</p>";

			echo "</div></a></div></div>\n";
		}
	}
	//△表示内容ここまで
}
}

if($sche=='3'){

while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu.php');
	
	//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);

	if($getdays<4){
		echo "";
	}else{
		if ($yotei4 == '3' || $yotei4 == '1') {
			echo "<div class=\"element_castlist\"><div class=\"top_schedule_box\">
        <a href=\"prof.php?name2=".$name2."\"><div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\">";
			
			
			//写真を表示
			
	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}

echo " </div>";
				
				if($profinfo9 == ''){
	echo "";
}else{
	echo "<div class=\"fa_insta\"><img src=\"\" data-src=\"img/cast_instagram.svg\" class=\"lozad\"></div>";			
			}
		if($option4 == ''){
	echo "";
}else{
	echo "<div class=\"fa_youtube\"><img src=\"\" data-src=\"img/cast_youtube.svg\" class=\"lozad\" alt=\"You Tube\"></div>";			
			}	
			
			echo " <p>".$name."</p>";

			echo "</div></a></div></div>\n";
			
		}
	}
	
	//△表示内容ここまで
}
}
if($sche=='4'){


while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu.php');


//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);

		if($getdays<5){
		echo "";
	}else{
//本日の出勤
	//▽表示内容ここから

		if ($yotei5 == '3' || $yotei5 == '1') {
			echo "<div class=\"element_castlist\"><div class=\"top_schedule_box\">
        <a href=\"prof.php?name2=".$name2."\"><div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\">";
			
			
			//写真を表示
			
	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}

echo " </div>";
				
			if($profinfo9 == ''){
	echo "";
}else{
	echo "<div class=\"fa_insta\"><img src=\"\" data-src=\"img/cast_instagram.svg\" class=\"lozad\"></div>";			
			}
		if($option4 == ''){
	echo "";
}else{
	echo "<div class=\"fa_youtube\"><img src=\"\" data-src=\"img/cast_youtube.svg\" class=\"lozad\" alt=\"You Tube\"></div>";			
			}	
			
			echo " <p>".$name."</p>";

			echo "</div></a></div></div>\n";
		}
	}
	//△表示内容ここまで
}
}
if($sche=='5'){


while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu.php');


//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);

//本日の出勤
	//▽表示内容ここから
	if($getdays<6){
		echo "";
	}else{
		if ($yotei6 == '3' || $yotei6 == '1') {
					
			echo "<div class=\"element_castlist\"><div class=\"top_schedule_box\">
        <a href=\"prof.php?name2=".$name2."\"><div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\">";
			
			
			//写真を表示
			
	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}

echo " </div>";
				
				if($profinfo9 == ''){
	echo "";
}else{
	echo "<div class=\"fa_insta\"><img src=\"\" data-src=\"img/cast_instagram.svg\" class=\"lozad\"></div>";			
			}
		if($option4 == ''){
	echo "";
}else{
	echo "<div class=\"fa_youtube\"><img src=\"\" data-src=\"img/cast_youtube.svg\" class=\"lozad\" alt=\"You Tube\"></div>";			
			}	
			
			echo " <p>".$name."</p>";

			echo "</div></a></div></div>\n";
		}
	}
	//△表示内容ここまで
}
}
if($sche=='6'){

while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu.php');



//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);

//本日の出勤
	//▽表示内容ここから
	if($getdays<7){
		echo "";
	}else{
		if ($yobi4 == '3' || $yobi4 == '1') {
			echo "<div class=\"element_castlist\"><div class=\"top_schedule_box\">
        <a href=\"prof.php?name2=".$name2."\"><div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\">";
			
			
			//写真を表示
			
	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}

echo " </div>";
				
			if($profinfo9 == ''){
	echo "";
}else{
	echo "<div class=\"fa_insta\"><img src=\"\" data-src=\"img/cast_instagram.svg\" class=\"lozad\"></div>";			
			}
		if($option4 == ''){
	echo "";
}else{
	echo "<div class=\"fa_youtube\"><img src=\"\" data-src=\"img/cast_youtube.svg\" class=\"lozad\" alt=\"You Tube\"></div>";			
			}	
			
			echo " <p>".$name."</p>";

			echo "</div></a></div></div>\n";
		}
	}
	//△表示内容ここまで
}
}
if($sche==''){
//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);
	
while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu.php');

			echo "<div class=\"element_castlist\"><div class=\"top_schedule_box\">
        <a href=\"prof.php?name2=".$name2."\"><div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\">";
			
			
			//写真を表示
			
	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\" />\n";
}

echo " </div>";
				
			if($profinfo9 == ''){
	echo "";
}else{
	echo "<div class=\"fa_insta\"><img src=\"\" data-src=\"img/cast_instagram.svg\" class=\"lozad\"></div>";			
			}
		if($option4 == ''){
	echo "";
}else{
	echo "<div class=\"fa_youtube\"><img src=\"\" data-src=\"img/cast_youtube.svg\" class=\"lozad\" alt=\"You Tube\"></div>";			
			}	
			
			echo " <p>".$name."</p>";

			echo "</div></a></div></div>\n";
	
}
}
//ソート関数の定義
//function cmp($b,$a){
//return strcmp($a[97],$b[97]);}
?>				
					</div>					
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