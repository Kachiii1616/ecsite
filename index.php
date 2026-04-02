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
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"><!--<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap">-->
	<!--cssファイルの読み込み-->
	<link href="css/style.css" rel="stylesheet"><!--ブラウザタブ表記-->
	<title>ayakaLABO</title><!--引用された時の表示-->
	<meta content="website" property="og:type">
	<meta content="https://ayaka-labo.com/" property="og:url">
	<meta content="ayakaLABO" property="og:site_name">
	<meta content="Photo Singer/音楽と写真を通して新しい視点を届けます" property="og:title">
	<meta content="ayakaLABO" property="og:description">
	<meta content="images/OGP/ogp.png" property="og:image">
	<meta content="ayakaLABO" property="og:image:alt">
	<meta content="1200" property="og:image:width">
	<meta content="700" property="og:image:height">
	<link href="images/OGP/favicon.png" rel="icon alternate" type="image/png">
</head><!--boby:webで見える場所 class=分類-->

<body class="topPage">
	<!--[文書構造タブ]header：冒頭-->
	<header>

<div class="searchwrap">       
  <input type="checkbox" id="sidebar-toggle" hidden>
  <label for="sidebar-toggle" class="sidebar-button">
  <img src="images/header/search.png" width="35" height="35"alt="search">
  </label>
  <div class="sidebar">
  <p class="sidebarp">Search</p>
  <form action="searchbox.php"  method="post">
    <div class="search">
     <input class="searchinput" type="text" placeholder="Keyword..." name="keyword">
     <div class="searchimg"><input class="searchbutton" type="submit" value=">" >
    </div>
    </div>
  </form>

    <!--
    <div class="nav">
      <h2>Blog</h2>
      <h3>Category</h3>
      <ul>
        <li><a href="#">準備中</a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </div>-->
  </div>

</div>

		<!--ヘッダー-->
		<nav class="gnav">
			<ul class="gnavul">
				<!--保留中！！！-->
				<li class="gnavul">
					<p class=headershikaku>□</p>
				</li>
				<li class="gnavul">
					<p class="gnavayakaLABO">ayakaLABO</p>
				</li><!--保留中！！！-->
				<li class="gnavul">
					<a href="mydeer/login-input.php"><!-- <img src="images/header/icon.png" alt="login">-->
					<div class="iconimg"><img alt="login" class="login" height="35" src="images/header/icon.png" width="28"></div></a>
				</li><!--保留中！！！
                   <li><a href="#">
                       <img src="images/header/icon.png" width="20" height="20" alt="login">
                       </a>
                   </li>-->
			</ul>
		</nav><!--[menuタブ]グローバルメニュー：ハンバーガーメニュー＋画像-->
		<nav class="gMenu">
			<input class="menu-btn" id="menu-btn" type="checkbox"> <label class="menu-icon" for="menu-btn"><span class="navicon"></span> <!--本当はこっち <img src="images/header/1.menu.png" width="50" height="50" alt="menu">--></label>
			<ul class="menu">
				<li>
					<a href="index.html">HOME</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
				<li>
					<a href="music.html">Music</a>
				</li>
				<li>
					<a href="photo.html">Photograph</a>
				</li>
				<li>
					<a href="mydeer/mydeer.php">My deer</a>
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
		<p><a class="pagetop" href="#">
		<div class="pagetop__arrow"></div><br>
		<p class="home">HOME</p></a></p>
		<div class="headerimgp">
			<p class="toppageimg"><img alt="search" src="images/header/icon.jpg"></p><!--<p><img src="images/header/icon.jpg" width="72" height="72" alt="search"></p>-->
			<div class="headerp">
				<h1>Music<br>
				Photograph</h1>
				<p class="h1p">History and cluture , every feeling<br>
				gives me a new point of view.</p><!--[基本タブ]リンク:①ページ内<a href="#（リンク先）">／②他html<img src="(ファイル名)" alt="(画像が表示されなかった時の代わりの文字)"></a>-->
				<nav class="localnav">
					<ul class="localnavul">
						<li>
							<a href="#conceptArea">Concept</a>
						</li>
						<li>
							<a href="#musicArea">Music</a>
						</li>
						<li>
							<a href="#photographArea">Photo</a>
						</li>
						<li>
							<a href="#aboutArea">About</a>
						</li>
						<li>
							<a href="#mydeerArea">My Deer</a>
						</li>
						<li>
							<a href="#contactArea">Contact</a>
						</li>
					</ul>
				</nav><!--[基本タブ]imgファイル：同階層(ファイル名）下階層（images/ファイル名）上階層（../images/ファイル名）-->
				<p class="scroll">Scroll</p>
			</div>
		</div>
	</header><!--[文書構造タブ]main:そのページの主題１つだけ-->
	<main>
		<!--[文書構造タブ]section:見出しと段落を囲む/<h>伴う-->
		<div class="concept">
			<section id="conceptArea">
				<h2 class="concepth2">Concept</h2>
				<p class="concept1">音楽・写真を合わせて表現</p>
				<p class="concept2">歴史・文化・様々な感情を通して<br>
				新しい視点を届けます</p>
				<p class="conceptimg"><img alt="Concept" src="images/concept/concept.jpg"></p>
				<p class="conceptbtn"><a class="btn" href="concept.html">&nbsp;&emsp;&emsp;&emsp;Concept&emsp;&emsp;&nbsp;&gt;</a></p>
				<p class="conceptbtnm">&emsp;</p>
			</section>
		</div>
		<div class="musicc">
			<section id="musicArea">
				<h2>Music</h2>
				<ul class="music">
					<li><a class="btn" href="https://youtu.be/QCEOXIVoyEM?si=DvscGVjjGzqO3iGh"><img alt="Three" height="1080" src="images/song/three.jpg" width="1920"></a></li>
					<li><a class="btn" href="https://youtu.be/N1egHcaRSeE?si=aEKfsp-MvnAO_aeV"><img alt="IBUKI" height="1080" src="images/song/ibuki.jpg" width="1920"></a></li>
					<li><a class="btn" href="https://youtu.be/C5-Zf3uoD84?si=npg90k7Y3ounjo7M"><img alt="Sunshine" height="1080" src="images/song/Sunshine.jpg" width="1920"></a></li>
                    <li class="onlyPC"><a class="btn" href="https://youtu.be/6kN9T47k7vg?si=c1QwOr60ui1D6SWN"><img alt="ICE" height="1080" src="images/song/ICE.jpg" width="1920"></a></li>
					<!---<li><a class="btn" href="https://youtu.be/fs-dMgO_540?si=Vz8FZPPsqWVkIifb"><img alt="Summer Rose" height="1080" src="images/song/summerrose.jpg" width="1920"></a></li><<li><img src="images/song/blue.jpg" width="1920" height="1080" alt="Blue"></li>=--><!---<li><img src="images/song/sangria.jpg" width="1920" height="1080" alt="sungria"></li>=--><!--- <li><img src="images/song/over.jpg" width="1920" height="1080" alt="over"></li>=-->
				</ul>
				<p class="musicbtn"><a class="btn" href="music.html">&nbsp;&nbsp;&emsp;&emsp;All Songs&emsp;&nbsp;&nbsp;&gt;</a></p>
			</section>
		</div>
		<div class="photo1">
			<h2 id="photographArea">Photograph</h2>
			<h4 class="photoh4b">「美しい人」</h4>
			<p class="photob"><img alt="美しい人" height="323" src="images/photo/beautiful.png" width="451"></p>
			<p class="photopc"><img alt="美しい人" height="541" src="images/photo/1.photo.png" width="963"></p>
			<p class="photom">&emsp;</p>
		</div>
		<div class="photo2">
			<h4 class="photoh4t">&emsp;" Trip "&emsp;</h4>
			<ul class="photot">
				<!--<li><img alt="Trip" src="images/trip/1.trip.jpg"></li>
				<li><img alt="Trip" src="images/trip/2.trip.jpg"></li>
				<li><img alt="Trip" src="images/trip/3.trip.jpg"></li>-->
				<li><img alt="Trip" height="200" src="images/trip/1.trip.jpg" width="200"></li>
				<li><img alt="Trip" height="200" src="images/trip/2.trip.jpg" width="200"></li>
				<li><img alt="Trip" height="200" src="images/trip/3.trip.jpg" width="200"></li>
			</ul>
			<p class="photobtn"><a class="btn" href="photo.html">&nbsp;&emsp;&emsp;All Photos&emsp;&nbsp;&gt;</a></p>
			<p class="photobtnm">&emsp;</p>
		</div>
		<div class="about">
			<section id="aboutArea">
				<h2>About</h2>
				<div class="aboutwrap">
					<p><img alt="ayakaLABO" src="images/about/icon.b.png"></p>
					<div class="aboutbox">
						<span class="youtube"><!---<p>YouTube</p>=--></span>
						<p><span class="youtube">＼Thank you for 1180sub on YouTube!!／</span></p>
						<p><span class="youtube">SNSでは活動で学んだ音楽・写真・<br>
						生活に役立つことを発信していきます :)</span></p><span class="hobby"></span>
						<p><span class="hobby">趣味</span></p>
						<p><span class="hobby">映画観賞・漫画・F1・YouTube・歴史</span></p>
						<p><span class="hobby">海外旅行🇰🇭🇹🇭🇲🇲🇱🇦🇹🇼🇹🇷🇬🇧🇮🇪</span></p>
						<p><span class="hobby">音楽は、ビートルズ・Led Zeppelin・<br></span></p>
						<p><span class="hobby">LOVEPSYCHEDELICO・宇多田ヒカル</span></p>
						<p><span class="hobby">写真は星野道夫/アンリ・カルティエ＝<br></span></p>
						<p><span class="hobby">ブレッソン（敬称略）が好き♡</span></p><span class="histry"></span>
						<ul>
							<li style="list-style: none; display: inline">
								<p><span class="histry">経歴</span></p>
							</li>
							<li>
								<span class="histry"></span>
								<p><span class="histry">・WOODミュージックスクール<br>
								&emsp;シンガーソングライター科卒業</span></p>
							</li>
							<li>
								<span class="histry"></span>
								<p><span class="histry">・写真の学校プロカメラマンコース<br>
								&emsp;&デジタルコース卒業</span></p>
							</li>
							<li>
								<span class="histry"></span>
								<p><span class="histry">・天使大学看護栄養学部看護科卒業<br>
								&emsp;ドラム・ベース習得中 !</span></p>
							</li>
						</ul>
					</div>
				</div>
				<p class="aboutbtn"><a class="btn" href="about.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;About&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a></p>
				<p class="aboutbtnm">&emsp;</p>
			</section>
		</div>
		<section id="mydeerArea">
			<p class="mydeertop">&emsp;</p>
			<div class="mydeer">
				<h2 class="mydeerh2">My Deer</h2>
				<div class="mydeerh3m">
					<h3>Membershipはじめました！</h3>
				</div>
				<div class="mydeerwrap">
					<p class="maydeerimg"><img alt="My Deer" src="images/mydeer/mydeermac.png"></p>
					<div class="mydeerbox">
						<div class="mydeerh3pc">
							<h3>Membershipはじめました！</h3>
						</div><span class="mydeerol"></span>
						<p><span class="mydeergiftp">登録時にオリジナル８曲プレゼント中！</span></p>
						<span class="mydeerp"></span>
						<ol>
							<li>
								<span class="mydeerol"></span>
								<p class="about2"><span class="mydeerol">1.週１回の限定Vlog&emsp;&emsp;&emsp;</span></p>
							</li>
							<li>
								<span class="mydeerol"></span>
								<p class="about1"><span class="mydeerol">2.月１回の<br>
								&emsp;テレビ電話or電話orテキスト&emsp;<br>
								&emsp;&emsp;(希望者のみ)</span></p>
							</li>
							<li>
								<span class="mydeerol"></span>
								<p class="about3"><span class="mydeerol">3.Store 特典つきライブチケット</span></p>
							</li>
						</ol><span class="mydeerp"></span>
						<p><span class="mydeerp">料金は無料です♩</span></p>
						<p class="deer"><img alt="My Deer" src="images/deer/deer.gr.png"></p>
					</div>
				</div>
				<p class="mydeerbtn"><a class="btn" href="mydeer.php">&nbsp;&nbsp;&nbsp;&emsp;&emsp;My Deer&emsp;&nbsp;&nbsp;&nbsp;&gt;</a></p>
				<p class="mydeerbtnm">&emsp;</p>
			</div>
		</section>
		<section id="contactArea">
			<div class="contact">
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