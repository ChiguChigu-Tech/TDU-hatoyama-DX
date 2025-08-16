<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>東京電機大学 電大DXプロジェクト</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="東京電機大学 理工学部 理工学科 情報システムデザイン学系 電大DXプロジェクトです。情報デザイン総合演習の実習課題として作成されました。">
<link rel="stylesheet" href="css/style.css">
</head>

<?php 
date_default_timezone_set('Asia/Tokyo');
$currentTime=new DateTime();
$hour=$currentTime->format('H');
$min=$currentTime->format('i');
$sec=$currentTime->format('s');
$day=$currentTime->format('w');
?>

<body>

<div id="container">

<header>
<h1 id="logo"><a href="index.html"><img src="images/dendaiDX-logos.jpeg" alt="SAMPLE COMPANY"></a></h1>
<!--ログインボタン-->
<div id="login"><a href="login.html">ログイン<img src="images/login.png" alt="ログイン"></a></div>
</header>

<div id="menubar">

<!--メインメニュー-->
<nav>
<ul> 
	<li><a href="index.html">ホーム<span>Home</span></a></li>
	<li><a href="cafe_intro.html">食堂メニュー<span>Cafeteria Menu</span></a></li>
	<li><a href="info.php">教室利用状況検索<span>serch for classroom usage</span></a></li>
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
				<li><a href="fac_intro.html#10">10号館</a></li>
				<li><a href="fac_intro.html#11">11号館</a></li>
				<li><a href="fac_intro.html#12">12号館</a></li>
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

	<div id="sub">		
		<nav class="box1">
		<h2>翌日以降の利用状況</h2>
		<ul class="submenu">
			<form method="POST" action="info2.php">
			<li>曜日<br>
				<label class="day">
				<select name="select1">
					<option value="月曜日">月曜日</option>
					<option value="火曜日">火曜日</option>
					<option value="水曜日">水曜日</option>
					<option value="木曜日">木曜日</option>
					<option value="金曜日">金曜日</option>
				</select>
			</li>
			<li>号館<br>
				<label class="building">
				<select name="select2">
					<option value="2">2号館</option>
					<option value="3">3号館</option>
					<option value="6">6号館</option>
					<option value="8">8号館</option>
					<option value="10">10号館</option>
					<option value="12">12号館</option>
				</select>
			</li>
			<li>時限<br>
				<label class="time">
				<select name="select3">
					<option value="1">1限</option>
					<option value="2">2限</option>
					<option value="3">3限</option>
					<option value="4">4限</option>
					<option value="5">5限</option>
				</select>
			</li><br>
				<input type="submit" value="検索">
			</form>
		</ul>
		</nav>
			
	</div>
		

<main>

<h2>現在の利用状況</h2>
<h2 id="buil2">2号館</h2>
<h3>
<?php
if($day==1){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}
}else if($day==2){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "2110教室　2111教室　2112教室　2113教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}

}else if($day==3){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}

}else if($day==4){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}

}else if($day==5){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "2111教室　2112教室　2113教室";
	}
}
?>
</h3>

<h2 id="buil3">3号館</h2>
<h3>
<?php
if($day==1){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "3112教室　3311教室";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "3112教室　3120教室　3130教室　3220教室　3230教室　3240教室　3311教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "3111教室　3112教室　3130教室　3330教室　3340教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "3120教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<59 && $sec<=59)){
		echo "使用中の教室はありません";
	}
}else if($day==2){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "3112教室　3120教室　3130教室　3140教室　3150教室　3320教室　3330教室　3340教室　3350教室";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "3111教室　3120教室　3130教室　3140教室　3330教室　3350教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "3111教室　3120教室　3230教室　3311教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "3112教室　3220教室　3230教室　3311教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "3311教室";
	}

}else if($day==3){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "3120教室　3130教室　3140教室　3150教室　3210教室　3240教室　3340教室";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "3120教室　3130教室　3140教室　3150教室　3210教室　3220教室　3240教室　3250教室　3320教室　3330教室　3340教室　";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "3120教室　3130教室　3210教室　3240教室　3250教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "3111教室　3112教室　3120教室　3240教室　3250教室　3311教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "3111教室　3112教室";
	}

}else if($day==4){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "3111教室　3112教室　3120教室　3130教室　3140教室　3150教室　3210教室　3240教室　3330教室　3340教室　3350教室";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "3111教室　3112教室　3120教室　3130教室　3150教室　3210教室　3240教室　3320教室　3330教室　3340教室　3350教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "3111教室　3140教室　3220教室　3240教室　3311教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "3111教室　3140教室　3150教室　3230教室　3311教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}

}else if($day==5){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "3112教室　3220教室";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "3111教室　3112教室　3120教室　3130教室　3220教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "3111教室　3130教室　3150教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "3130教室　3140教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "3140教室";
	}
}
?>
</h3>

<h2 id="buil6">6号館</h2>
<h3>
<?php
if($day==1){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "6101教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "6104教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "6101教室";
	}
}else if($day==2){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "6103教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "6102教室　6103教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}

}else if($day==3){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "6102教室　6104教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "6101教室　6102教室　6103教室　6104教室　";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}

}else if($day==4){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "6101教室　6102教室　6103教室　";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "6101教室　6102教室　6103教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "6101教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "6101教室　6102教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "6102教室";
	}

}else if($day==5){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}
}
?>
</h3>

<h2 id="buil8">8号館</h2>
<h3>
<?php
if($day==1){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}
}else if($day==2){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "8203教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "8203教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}

}else if($day==3){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "8203教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "8201教室　8203教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}

}else if($day==4){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "8203教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}

}else if($day==5){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "8203教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "8203教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}
}
?>
</h3>

<h2 id="buil10">10号館</h2>
<h3>
<?php
if($day==1){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "209教室　210教室　213教室";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<50 && $sec<=59)){
		echo "117教室　204(第2メディア)教室　213教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "204(第2メディア)教室　206教室　210教室　211教室　213教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "203(第1メディア)教室　204(第2メディア)教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "117教室";
	}
}else if($day==2){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "117教室　203(第1メディア)教室　204(第2メディア)教室　206教室　207教室　208教室　210教室　211教室　213教室";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<=50 && $sec<=59)){
		echo "117教室　206教室　207教室　209教室　210教室　211教室　213教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "117教室　206教室　207教室　208教室　209教室　210教室　213教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "206教室　208教室　209教室　213教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "117教室　201(プレゼンテーションホール)　206教室　207教室　213教室";
	}

}else if($day==3){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "203(第1メディア)教室　204(第2メディア)教室";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<=50 && $sec<=59)){
		echo "117教室　203(第1メディア)教室　209教室　211教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "117教室　201(プレゼンテーションホール)　204(第2メディア)　206教室　208教室　209教室　210教室　211教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "206教室　207教室　208教室　209教室　210教室　211教室　212教室　213教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "206教室　207教室　208教室　209教室　211教室";
	}

}else if($day==4){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "204(第2メディア)教室　206教室　208教室　209教室　211教室　212教室";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<=50 && $sec<=59)){
		echo "201教室　203(第1メディア)教室　204(第2メディア)教室　207教室　208教室　209教室　211教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "117教室　204(第2メディア)教室　206教室　208教室　209教室　210教室　211教室　213教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "206教室　207教室　211教室　213教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "117教室";
	}

}else if($day==5){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "203(第1メディア)教室　206教室　207教室　210教室";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<=50 && $sec<=59)){
		echo "204(第2メディア)教室　206教室　207教室　208教室　210教室　211教室　213教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "203(第1メディア)教室　206教室　207教室　208教室　210教室　211教室　212教室　213教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "203(第1メディア)教室　204(第2メディア)教室　206教室　208教室　210教室　211教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "117教室　203(第1メディア)教室　208教室　210教室";
	}
}
?>
</h3>

<h2 id="buil12">12号館</h2>
<h3>
<?php
if($day==1){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<=50 && $sec<=59)){
		echo "321教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "229教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "124教室　221教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "213教室　321教室";
	}
}else if($day==2){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<=50 && $sec<=59)){
		echo "321教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "321教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "321教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}

}else if($day==3){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<=50 && $sec<=59)){
		echo "221教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "221教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "221教室　224教室　225教室　226教室　227教室　228教室　229教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}

}else if($day==4){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<=50 && $sec<=59)){
		echo "124教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "124教室　221教室　229教室　321教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "124教室　221教室　321教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}

}else if($day==5){
	if(($hour==9 && $min>=20) || ($hour==10 && $min<=59 && $sec<=59)){
		echo "使用中の教室はありません";
	}else if(($hour==11 && $min>=10) || ($hour==12 && $min<=50 && $sec<=59)){
		echo "124教室　224教室　229教室";
	}else if(($hour==13 && $min>=40) || $hour==14 || ($hour==15 && $min<20 && $sec<=59)){
		echo "224教室　225教室　229教室";
	}else if(($hour==15 && $min>=30) || $hour==16 || ($hour==17 && $min<10 && $sec<=59)){
		echo "124教室　221教室　225教室　321教室";
	}else if(($hour==17 && $min>=20) || ($hour==18 && $min<=59 && $sec<=59)){
		echo "124教室　221教室　321教室";
	}
}
?>
</h3>

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
