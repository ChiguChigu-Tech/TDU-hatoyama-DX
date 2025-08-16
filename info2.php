<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>東京電機大学 電大DXプロジェクト</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="東京電機大学 理工学部 理工学科 情報システムデザイン学系 電大DXプロジェクトです。情報デザイン総合演習の実習課題として作成されました。">
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div id="container">

<header>
<h1 id="logo"><a href="index.html"><img src="images/dendaiDX-logos.jpeg" alt="SAMPLE COMPANY"></a></h1>
<!--ログインボタン-->
<div id="login"><a href="login.html">ログイン<img src="images/login.png" alt="ログイン"></a></div>
</header>

<div id="menubar">

<?php
	$day=$_POST["select1"];
	$buil=$_POST["select2"];
	$time=$_POST["select3"];
?>

<!--メインメニュー-->
<nav>
<ul> 
	<li><a href="index.html">ホーム<span>Home</span></a></li>
	<li><a href="cafe_intro.html">食堂メニュー<span>Cafeteria Menu</span></a></li>
	<li><a href="info.html">教室利用状況検索<span>serch for classroom usage</span></a></li>
	<li><a href="fac_intro.html">施設紹介<span>Facility Introduction</span></a>
		<ul>
				<li><a href="fac_intro.html#1">1号館</a></li>
				<li><a href="fac_intro.html#2">2号館</a></li>
				<li><a href="fac_intro.html#3">3号館</a></li>
				<li><a href="fac_intro.html#4">4号館</a></li>
				<li><a href="fac_intro.html#5">5号館</a></li>
				<li><a href="fac_intro.html#6">6号館</a></li>
				<li><a href="fac_intro.html#7">7号館</a></li>
				<li><a href="fac_intro.html#8">8号館</a></li>
				<li><a href="fac_intro.html#9">9号館</a></li>
				<li><a href="fac_intro.html10">10号館</a></li>
				<li><a href="fac_intro.html11">11号館</a></li>
				<li><a href="fac_intro.html12">12号館</a></li>
		</ul>
	</li>
	<li><a href="lab_intro.html">研究室紹介<span>Laboratory Introduction</span></a>
		<ul>
			<li><a href="lab_intro.html#RD">情報システムデザイン学系</a></li>
			<li><a href="lab_intro.html#RU">理学系</a></li>
			<li><a href="lab_intro.html#RB">生命科学系</a></li>
			<li><a href="lab_intro.html#RM">機械工学系</a></li>
			<li><a href="lab_intro.html#RE">電子工学系</a></li>
			<li><a href="lab_intro.html#RG">建築・都市環境学系</a></li>
		</ul>
	</li>
	<li><a href="contact.html">お問い合わせ<span>Contact</span></a></li>
	</ul>
</nav>

</div>
<!--/#menubar-->
<div id="contents">		

<main>

<h2 id="buil2"><?php print("$day $time 限 $buil 号館の使用状況"); ?></h2>
<h3>
<?php
if($buil==2){
	if($day=="月曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "使用中の教室はありません";
		}else if($time==3){
			echo "使用中の教室はありません";
		}else if($time==4){
			echo "使用中の教室はありません";
		}else if($time==5){
			echo "使用中の教室はありません";
		}
	}else if($day=="火曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "使用中の教室はありません";
		}else if($time==3){
			echo "使用中の教室はありません";
		}else if($time==4){
			echo "使用中の教室はありません";
		}else if($time==5){
			echo "使用中の教室はありません";
		}

	}else if($day=="水曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "使用中の教室はありません";
		}else if($time==3){
			echo "使用中の教室はありません";
		}else if($time==4){
			echo "使用中の教室はありません";
		}else if($time==5){
			echo "使用中の教室はありません";
		}

	}else if($day=="木曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "使用中の教室はありません";
		}else if($time==3){
			echo "使用中の教室はありません";
		}else if($time==4){
			echo "使用中の教室はありません";
		}else if($time==5){
			echo "使用中の教室はありません";
		}

	}else if($day=="金曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "使用中の教室はありません";
		}else if($time==3){
			echo "使用中の教室はありません";
		}else if($time==4){
			echo "使用中の教室はありません";
		}else if($time==5){
			echo "2111教室　2112教室　2113教室";
		}
	}
}else if($buil==3){
	if($day=="月曜日"){
		if($time==1){
			echo "3112教室　3311教室";
		}else if($time==2){
			echo "3112教室　3120教室　3130教室　3220教室　3230教室　3240教室　3311教室";
		}else if($time==3){
			echo "3111教室　3112教室　3130教室　3330教室　3340教室";
		}else if($time==4){
			echo "3120教室";
		}else if($time==5){
			echo "使用中の教室はありません";
		}
	}else if($day=="火曜日"){
		if($time==1){
			echo "3112教室　3120教室　3130教室　3140教室　3150教室　3320教室　3330教室　3340教室　3350教室";
		}else if($time==2){
			echo "3111教室　3120教室　3130教室　3140教室　3330教室　3350教室";
		}else if($time==3){
			echo "3111教室　3120教室　3230教室　3311教室";
		}else if($time==4){
			echo "3112教室　3220教室　3230教室　3311教室";
		}else if($time==5){
			echo "3311教室";
		}

	}else if($day=="水曜日"){
		if($time==1){
			echo "3120教室　3130教室　3140教室　3150教室　3210教室　3240教室　3340教室";
		}else if($time==2){
			echo "3120教室　3130教室　3140教室　3150教室　3210教室　3220教室　3240教室　3250教室　3320教室　3330教室　3340教室　";
		}else if($time==3){
			echo "3120教室　3130教室　3210教室　3240教室　3250教室";
		}else if($time==4){
			echo "3111教室　3112教室　3120教室　3240教室　3250教室　3311教室";
		}else if($time==5){
			echo "3111教室　3112教室";
		}

	}else if($day=="木曜日"){
		if($time==1){
			echo "3111教室　3112教室　3120教室　3130教室　3140教室　3150教室　3210教室　3240教室　3330教室　3340教室　3350教室";
		}else if($time==2){
			echo "3111教室　3112教室　3120教室　3130教室　3150教室　3210教室　3240教室　3320教室　3330教室　3340教室　3350教室";
		}else if($time==3){
			echo "3111教室　3140教室　3150教室　3220教室　3240教室　3311教室";
		}else if($time==4){
			echo "3111教室　3140教室　3150教室　3230教室　3311教室";
		}else if($time==5){
			echo "使用中の教室はありません";
		}

	}else if($day=="金曜日"){
		if($time==1){
			echo "3112教室　3220教室";
		}else if($time==2){
			echo "3111教室　3112教室　3120教室　3130教室　3220教室";
		}else if($time==3){
			echo "3111教室　3130教室　3150教室";
		}else if($time==4){
			echo "3130教室　3140教室";
		}else if($time==5){
			echo "3140教室";
		}
	}
}else if($buil==6){
	if($day=="月曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "6101教室";
		}else if($time==3){
			echo "6104教室";
		}else if($time==4){
			echo "使用中の教室はありません";
		}else if($time==5){
			echo "6101教室";
		}
	}else if($day=="火曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "使用中の教室はありません";
		}else if($time==3){
			echo "6103教室";
		}else if($time==4){
			echo "6102教室　6103教室";
		}else if($time==5){
			echo "使用中の教室はありません";
		}

	}else if($day=="水曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "6102教室　6104教室";
		}else if($time==3){
			echo "使用中の教室はありません";
		}else if($time==4){
			echo "6101教室　6102教室　6103教室　6104教室　";
		}else if($time==5){
			echo "使用中の教室はありません";
		}

	}else if($day=="木曜日"){
		if($time==1){
			echo "6101教室　6102教室　6103教室　";
		}else if($time==2){
			echo "6101教室　6102教室　6103教室";
		}else if($time==3){
			echo "6101教室";
		}else if($time==4){
			echo "6101教室　6102教室";
		}else if($time==5){
			echo "6102教室";
		}

	}else if($day=="金曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "使用中の教室はありません";
		}else if($time==3){
			echo "使用中の教室はありません";
		}else if($time==4){
			echo "使用中の教室はありません";
		}else if($time==5){
			echo "使用中の教室はありません";
		}
	}
}else if($buil==8){
	if($day=="月曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "使用中の教室はありません";
		}else if($time==3){
			echo "使用中の教室はありません";
		}else if($time==4){
			echo "使用中の教室はありません";
		}else if($time==5){
			echo "使用中の教室はありません";
		}
	}else if($day=="火曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "使用中の教室はありません";
		}else if($time==3){
			echo "8203教室";
		}else if($time==4){
			echo "8203教室";
		}else if($time==5){
			echo "使用中の教室はありません";
		}

	}else if($day=="水曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "8203教室";
		}else if($time==3){
			echo "使用中の教室はありません";
		}else if($time==4){
			echo "8201教室　8203教室";
		}else if($time==5){
			echo "使用中の教室はありません";
		}

	}else if($day=="木曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "使用中の教室はありません";
		}else if($time==3){
			echo "使用中の教室はありません";
		}else if($time==4){
			echo "8203教室";
		}else if($time==5){
			echo "使用中の教室はありません";
		}

	}else if($day=="金曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "使用中の教室はありません";
		}else if($time==3){
			echo "8203教室";
		}else if($time==4){
			echo "8203教室";
		}else if($time==5){
			echo "使用中の教室はありません";
		}
	}
}else if($buil==10){
	if($day=="月曜日"){
		if($time==1){
			echo "209教室　210教室　213教室";
		}else if($time==2){
			echo "117教室　204(第2メディア)教室　213教室";
		}else if($time==3){
			echo "204(第2メディア)教室　206教室　210教室　211教室　213教室";
		}else if($time==4){
			echo "203(第1メディア)教室　204(第2メディア)教室";
		}else if($time==5){
			echo "117教室";
		}
	}else if($day=="火曜日"){
		if($time==1){
			echo "117教室　203(第1メディア)教室　204(第2メディア)教室　206教室　207教室　208教室　210教室　211教室　213教室";
		}else if($time==2){
			echo "117教室　206教室　207教室　209教室　210教室　211教室　213教室";
		}else if($time==3){
			echo "206教室　207教室　208教室　209教室　210教室　213教室";
		}else if($time==4){
			echo "206教室　208教室　209教室　213教室";
		}else if($time==5){
			echo "117教室　201(プレゼンテーションホール)　206教室　207教室　213教室";
		}

	}else if($day=="水曜日"){
		if($time==1){
			echo "203(第1メディア)教室　204(第2メディア)教室";
		}else if($time==2){
			echo "117教室　203(第1メディア)教室　209教室　211教室";
		}else if($time==3){
			echo "117教室　201(プレゼンテーションホール)　204(第2メディア)　206教室　208教室　209教室　210教室　211教室";
		}else if($time==4){
			echo "206教室　207教室　208教室　209教室　210教室　211教室　212教室　213教室";
		}else if($time==5){
			echo "206教室　207教室　208教室　209教室　211教室";
		}

	}else if($day=="木曜日"){
		if($time==1){
			echo "204(第2メディア)教室　206教室　208教室　209教室　211教室　212教室";
		}else if($time==2){
			echo "201教室　203(第1メディア)教室　204(第2メディア)教室　207教室　208教室　209教室　211教室";
		}else if($time==3){
			echo "117教室　204(第2メディア)教室　206教室　208教室　209教室　210教室　211教室　213教室";
		}else if($time==4){
			echo "206教室　207教室　211教室　213教室";
		}else if($time==5){
			echo "117教室";
		}

	}else if($day=="金曜日"){
		if($time==1){
			echo "203(第1メディア)教室　206教室　207教室　210教室";
		}else if($time==2){
			echo "204(第2メディア)教室　206教室　207教室　208教室　210教室　211教室　213教室";
		}else if($time==3){
			echo "203(第1メディア)教室　206教室　207教室　208教室　210教室　211教室　212教室　213教室";
		}else if($time==4){
			echo "203(第1メディア)教室　204(第2メディア)教室　206教室　208教室　210教室　211教室";
		}else if($time==5){
			echo "203(第1メディア)教室　208教室　210教室";
		}
	}
}else if($buil==12){
	if($day=="月曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "321教室";
		}else if($time==3){
			echo "229教室";
		}else if($time==4){
			echo "124教室　221教室";
		}else if($time==5){
			echo "213教室　321教室";
		}
	}else if($day=="火曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "321教室";
		}else if($time==3){
			echo "321教室";
		}else if($time==4){
			echo "321教室";
		}else if($time==5){
			echo "使用中の教室はありません";
		}

	}else if($day=="水曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "221教室";
		}else if($time==3){
			echo "221教室";
		}else if($time==4){
			echo "221教室　221教室　224教室　225教室　226教室　227教室　228教室　229教室";
		}else if($time==5){
			echo "使用中の教室はありません";
		}

	}else if($day=="木曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "124教室";
		}else if($time==3){
			echo "124教室　221教室　229教室　321教室";
		}else if($time==4){
			echo "124教室　221教室　321教室";
		}else if($time==5){
			echo "使用中の教室はありません";
		}

	}else if($day=="金曜日"){
		if($time==1){
			echo "使用中の教室はありません";
		}else if($time==2){
			echo "124教室　224教室　229教室";
		}else if($time==3){
			echo "224教室　225教室　229教室";
		}else if($time==4){
			echo "124教室　221教室　225教室　321教室";
		}else if($time==5){
			echo "124教室　221教室　321教室";
		}
	}
}
?>
</h3>

<?php
	print("<br><A HREF=info.php><<<戻る</A>");
?>

</main>

</div>
<!--/#contents-->

<div id="footermenu">
<ul>
<li class="title">メニュー</li>
<li><a href="index.html">ホーム</a></li>
<li><a href="#update">更新状況</a></li>
<li><a href="#about">プロジェクトについて</a></li>
<li><a href="#reason">プロジェクトの立ち上げの動機</a></li>
<li><a href="#function">各種機能の紹介</a></li>
<li><a href="#prospect">今後の展望</a></li>

</ul>

<ul>
<li class="title">メニュー見出し</li>
<li><a href="index.html">ホーム　　　　Home</span></a></li>
<li><a href="list_base.html">食堂メニュー　Cafeteria Menu</a></li>
<li><a href="info.html">空き教室検索　Search for empty classrooms</a></li>
<li><a href="faq.html">施設紹介　　　Facility Introduction</a></li>
<li><a href="faq.html">研究室紹介　　Laboratory Introduction</a></li>
<li><a href="contact.html">お問い合わせ　Contact</a></li>
</ul>

</ul>
<ul>
</div>
<!--/#footermenu-->

<footer>
<small>Copyright&copy; <a href="index.html">電大DXプロジェクト</a> All Rights Reserved.</small>
<span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
</footer>

</div>
<!--/#container-->

<div id="menubar">

<!--<p>※ここ（menubar内）に小さな端末用（折り畳み）コンテンツを詰め込んで下さい。</p>

メインメニュー
<nav>
<h2>メインメニュー</h2>
<ul>
<li><a href="index.html">ホーム</a></li>
<li><a href="">物件一覧</a>
	<ul>
	<li><a href="list.html">売買物件</a></li>
	<li><a href="list.html">賃貸物件</a></li>
	<li><a href="list.html">店舗物件</a></li>
	<li><a href="list.html">駐車場物件</a></li>
	</ul>
</li>
<li><a href="info.html">掲載のご案内</a></li>
<li><a href="faq.html">よく頂く質問</a></li>
<li><a href="contact.html">お問い合わせ</a></li>
</ul>
</nav>

<h2>サブメニュー</h2>
<ul class="submenu">
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
<li><a href="#">メニューサンプル</a></li>
</ul>

</div>
-->

<!--/#menubar-->

<!--jQueryの読み込み-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--biz57用のスクリプト-->
<script src="js/main.js"></script>

<!--ハンバーガーボタン（開閉操作のボタン）-->
<div id="menubar_hdr"></div>

<!--ページの上部へ戻るボタン-->
<div class="pagetop"><a href="#"><i class="fas fa-angle-double-up"></i></a></div>

</body>
</html>
