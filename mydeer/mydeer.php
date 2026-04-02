<!DOCTYPE html>
<!--言語指定-->
<html lang="ja">
<!--設定 p45-->
<head>
	<!--ビット数-->
	<meta charset="UTF-8"><!--レスポンシブ:パソコン＝携帯-->
	<meta content="width=device-width,initial-scale=1" name="viewport"><!--リセット p74-->
	<link href="css/reset.css" rel="stylesheet"><!--Google font p157-->
	<link href="https://fonts.gstatic.com" rel="preconnect"><!--英語・筆記体・日本語-->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet"><!--ボタン用英語-->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"><!--MYDEER用日本語-->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"><!--h2用-->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Sawarabi+Mincho&display=swap" rel="stylesheet"><!--<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap">-->
	<!--cssファイルの読み込み-->
	<link href="css/style-mydeer.css" rel="stylesheet">
	<!--ブラウザタブ表記-->
	<title>ayakaLABO</title><!--引用された時の表示-->
	<meta content="website" property="og:type">
	<meta content="https://ayaka-music.com/" property="og:url">
	<meta content="ayakaLABO" property="og:site_name">
	<meta content="ayakaLABO" property="og:title">
	<meta content="Photo Singer/音楽と写真を通して新しい視点を届けます" property="og:description"><!--保留中！！！引用された時の写真-->
	<meta content="https://example.com/images/ogp.png" property="og:image">
	<meta content="ayakaLABO" property="og:image:alt">
	<meta content="1200" property="og:image:width">
	<meta content="630" property="og:image:height">
</head><!--boby:webで見える場所 class=分類-->

<body class="topPage">
	<!--[文書構造タブ]header：冒頭-->
	<header>
		<!--ヘッダー-->
		<nav class="gnav">
			<ul class="gnavul">
				<!--保留中！！！-->
				<li class="gnavul">
					<a href="cart-show.php"><!--<img src="images/header/search.png"  alt="search">-->
					<div class="cartimg"><img alt="cart" height="45" src="images/ec/cart3.png" width="45"></div></a>
				</li>
				<li class="gnavul">
					<p class="gnavayakaLABO">ayakaLABO</p>
				</li><!--保留中！！！-->
				<li class="gnavul">
					<a href="login-input.php"><!-- <img src="images/header/icon.png" alt="login">-->
					<div class="iconimg"><img alt="login" class="login" height="45" src="images/header/icon.png" width="45"></div></a>
				</li><!--保留中！！！
                           <li><a href="#">
                               <img src="images/header/icon.png" width="20" height="20" alt="login">
                               </a>
                           </li>-->
			</ul>
			</nav>
<!--[menuタブ]グローバルメニュー：ハンバーガーメニュー＋画像-->
<nav class="gMenu">
			<input class="menu-btn" id="menu-btn" type="checkbox"> <label class="menu-icon" for="menu-btn"><span class="navicon"></span> <!--本当はこっち <img src="images/header/1.menu.png" width="50" height="50" alt="menu">--></label>
			<ul class="menu">
				<li>
					<a href="../index.html">HOME</a>
				</li>
				<li>
					<a href="../blog.html">Blog</a>
				</li>
				<li>
					<a href="../music.html">Music</a>
				</li>
				<li>
					<a href="../photo.html">Photograph</a>
				</li>
				<li>
					<a href="mydeer.php">My deer</a>
				</li>
                <li>
					<p>&emsp;</p>
				</li>
                <li>
					<p>&emsp;</p>
				</li>
			</ul>
		</nav>
		
		<!--HOMEボタン-->
		<a class="pagetop" href="#">
		<div class="pagetop__arrow"></div><br>
		<p class="home">HOME</p></a>
		<p></p>
	</header>
	<main>
		<section id="mydeerArea">
			<p class="mydeertop">&emsp;</p>
			<div class="mydeer">
			<h1 class="mydeerh1"><a href="mydeer.php">My Deer</a></h1>
				<nav class="localnav">
					<ul class="localnavul">
						<li>
							<a href="#fcblog">Blog</a>
						</li>
						<li>
							<a href="#artworks">Store</a>
						</li>
						<li>
							<a href="#tipArea">Tip</a>
						</li>
						<li>
							<a href="#fanmeeting">Meeting!</a>
						</li>
						<li>
							<a href="#giftsArea">Gifts</a>
						</li>
						<li>
							<a href="#contactArea">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>

<section id="fcblog">
<p class="mydeertop">&emsp;</p>
		<h2>Blog</h2>
		<div class="fcblogwrap">
			<div class="fcblogbox">
				<!--変更 日付・題名-->
				<p>8th.Apr.2025</p>
				<p>[資生堂バズりデパコス]メイク崩れ7時間耐久検証！&3conins購入品♩/[Shiseido Viral Department Store Cosmetics] 7-Hour Long-Lasting Makeup Test! & 3COINS Purchases ♩</p>
			</div>
			    <p><img alt="ayakaLABO" src="fcblog/images/fc/fcblog/makeup.png"></p>
				<!--/変更　写真番号-->
    	</div>
		<p class="fcblogbtn"><a class="btn" href="fcblog/fcblog.php">&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;Vlog&emsp;&nbsp;&nbsp;&nbsp;&emsp;&gt;</a></p>
		<p class="fcblogbtnm">&emsp;</p>
</section>

<!-- Art Works -->	

<section id="artworks">
<p class="mydeertop">&emsp;</p>
<h2>Store</h2>
<p class="tiph2p">Gifts for Donations</p>

<div class="artworks">
<?php
$pdo=new PDO('mysql:host=mysql2209.xserver.jp;dbname=ayaka1616_labo;charset=utf8','ayaka1616_labo','Virkyd.puvwov');
if (isset($_REQUEST['keyword'])) {
    $sql=$pdo->prepare('select * from product where name like ?');
    $sql->execute(['%'.$_REQUEST['keyword'].'%']);
} else {
    $sql=$pdo->query('select * from product');
}

$count = 0; // カウンターを初期化
foreach ($sql as $row) {
    if ($count >= 6) break; // カウンターが6以上になったらループを終了する

    echo '<div class="mydeerproduct">';
    echo '<h3>', htmlspecialchars($row['name']), '</h3>';
    echo '<p><a href="detail.php?id=', $row['id'], '"><img alt="image" width="150" height="100" src="images/detail/', $row['id'], '.', $row['ext'], '"></a></p>';
    echo '<p class="mydeerprice">¥', htmlspecialchars($row['price']), '</p>';
    echo '</div>';

    $count++; // カウンターをインクリメント
}
?>
</div>


<p>&emsp;</p>
<p class="artbtn"><a class="btn" href="product.php">&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;More&emsp;&nbsp;&nbsp;&nbsp;&emsp;&gt;</a></p>
<p class="artbtnm">&emsp;</p>
</div>
</section>
<!-- Art Works -->	

<section id="tipArea">
<p class="mydeertop">&emsp;</p>
<h2 class="tiph2">Donation</h2>
<p class="tiph2p">寄付</p>
<section id="detailArea">
<div class="detailWrap">
<p><img alt="image" src="images/donation/donation.jpg"></p>
<div class="tipbox">
<p class="tipm">&emsp;</p>
<p class="tipm">&emsp;</p>
<p>お支払い方法を選択してください.・*<br>Please select a payment method.</p>
<p class="tipm">&emsp;</p>
<p class="detailcartbtn"><a href="tip.php">お支払い選択<br>Payment method</a></p>
<p class="tipbtnm">&emsp;</p>
</section>
<p class="tipm">&emsp;</p>
</section>

<section id="fanmeeting">
<p class="mydeertop">&emsp;</p>
		<h2>Meeting!</h2>
		<div class="fanmeetingwrap">
			<p><img alt="ayakaLABO" height="400" src="images/fc/fcmeet/june.png" width="400"></p>
			<div class="fanmeetingbox">
				<p>可能な日付を選んでください♩</p>
				<p>Please select a possible date :)</p>
				<form action="fanmeeting.php" method="post">
					<p class="datep">希望日/Date <select name="fanmeetingdate">
						<option value="0606">
							6月6日(木)/Thu.6th June
						</option>
						<option value="0615">
							6月15日(土)/Sat.15th June
						</option>
						<option value="0620">
							6月20日(木)/Thu.20th June
						</option>
						<option value="0627">
							6月27日(木)/Thu.27th June	
						</option>
					</select></p>
					<p class="fanmeetingsend"><button type="submit">Send</button></p>
					<p>&emsp;</p>
					<p>&emsp;</p>
				</form>
				</div>
		</div>	
	     	<p>&emsp;</p>
			<p>&emsp;</p>
		    <div class="fanmeetingdetail">
		    <p>ZOOMを利用してのFan Meetingとなります♩</p>
            <p>時間はライブ配信後、10分間です。</p>
            <p>ライブ終了後、開始時間と参加用URLをメールにてお送りします。</p>
			<p>&emsp;</p>
            <p>We will use the ZOOM app!</p>
            <p>TIME:For 10 minutes after livestreaming.</p>
            <p>After the livestreaming,you will receive an email with the start time and URL to join ZOOM♩</p>
			<p>&emsp;</p>
			<p>&emsp;</p>
            <p>&emsp;</p>
            </div>
		<p class="fanmeetingm">&emsp;</p>
</section>

<section id="giftsArea">
<p class="mydeertop">&emsp;</p>
	<h2>Gifts</h2>
	<p>&emsp;</p>
	<p>登録時特典！</p>
	<p>ダウンロードページで音源とLIVE映像を<br>ダウンロードしてください♩</p>
	<p>&emsp;</p>
	<p class="dlbtn"><a href="dl.php">Download</a></p>
	<p>&emsp;</p>
</section>

		<section id="contactArea">
			<div class="contact">
			<p class="mydeertop">&emsp;</p>
				<h2>Contact</h2>
				<h3>お問い合わせ</h3>
				<p class="contactbtn"><a class="btn" href="mailto:tough.sweet.1616@gmail.com">Contact</a></p><!--[ <img src="images/sns/1.YouTube.png" width="250" height="250" alt="YouTube">-->
				<p class="contactbtnm">&emsp;</p>
				<p class="follow">＼&nbsp;follow me&nbsp;／</p>
				<ul class="socialmedia">
					<li>
						<a class="btn" href="https://youtube.com/@ayakaLABO?si=vE7XcPWQ8OiaeMfd"><img alt="YouTube" height="250" src="images/sns/1.YouTube.png" width="250"></a>
					</li>
					<li>
						<a class="btn" href="https://www.instagram.com/ayaka.labo/"><img alt="Instagram" height="250" src="images/sns/2.instagram.png" width="250"></a>
					</li>
					<li>
						<a class="btn" href="https://www.tiktok.com/@ayakalabo?_t=8inq10JTsRO&_r=1"><img alt="TikTok" height="250" src="images/sns/3.tiktoc.png" width="250"></a>
					</li>
					<li>
						<a class="btn" href="https://twitter.com/ayakaLABO"><img alt="X" height="250" src="images/sns/4.x.png" width="250"></a>
					</li>
				</ul>
			</div>
		</section>
	</main><!--[文書構造タブ]footer:最下部-->
	<footer>
		<div class="example3">
			&emsp;
		</div>
		<p class="footertop">&emsp;</p>
		<p class="footercopy">Copyright 2024 ayakaLABO <!--ALLrights reserved.--></p>
		<p class="footerbottom">&emsp;</p>
	</footer>
</body>
</html>