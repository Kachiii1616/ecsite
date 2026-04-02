<?php session_start(); ?>

<?php require 'head.php'; ?>
<link href="css/style-ec.css" rel="stylesheet">

<?php require 'header.php'; ?>


<main>
<?php
$pdo=new PDO('mysql:host=mysql2209.xserver.jp;dbname=ayaka1616_labo;charset=utf8','ayaka1616_labo','Virkyd.puvwov');
if (isset($_SESSION['customer'])) {
	$id=$_SESSION['customer']['id'];
	$sql=$pdo->prepare('select * from customer where id!=? and login=?');
	$sql->execute([$id, $_REQUEST['login']]);
} else {
	$sql=$pdo->prepare('select * from customer where login=?');
	$sql->execute([$_REQUEST['login']]);
}
if (empty($sql->fetchAll())) {

    $name = $_REQUEST['name'];
    $post = $_REQUEST['post'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];

    // 名前の検証
    if (!preg_match('/^[ぁ-んァ-ン一-龠a-zA-Z0-9\s]+$/u', $name)) {
        echo '<section id="premieroutArea">';
        echo '名前は漢字・ひらがな・カタカナ・半角英数字およびスペースのみ入力可能です。';
        echo '<p class="loginoutbtn"><a class="btn" href="premier-input.php">Login</a></p>';
        echo '</section>';
        exit;
    }

    // メールアドレスの検証
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<section id="premieroutArea">';
        echo 'メールアドレスが正しくありません。';
        echo '<p class="loginoutbtn"><a class="btn" href="premier-input.php">Login</a></p>';
        echo '</section>';
        exit;
    }

    // ログイン名の検証
        if (!preg_match('/^[a-zA-Z0-9]+$/', $login)) {
        echo '<section id="premieroutArea">';
        echo 'ログイン名は英数字で入力してください。';
        echo '<p class="loginoutbtn"><a class="btn" href="premier-input.php">Login</a></p>';
        echo '</section>';
        exit;
    }
    
    // パスワードの検証
    if (!preg_match('/^[a-zA-Z0-9]+$/', $password)) {
        echo '<section id="premieroutArea">';
        echo 'パスワードは英数字で入力してください。';
        echo '<p class="loginoutbtn"><a class="btn" href="premier-input.php">Login</a></p>';
        echo '</section>';
        exit;
    }

	// パスワードのハッシュ化
	$hashed_password 
	= password_hash($_REQUEST['password'], PASSWORD_DEFAULT);

	if (isset($_SESSION['customer'])) {
		$sql=$pdo->prepare('update customer set name=?, post=? ,address=?, '.
			'email=?, login=?, password=? where id=?');
		$sql->execute([
			$_REQUEST['name'], $_REQUEST['post'], 
            $_REQUEST['address'], $_REQUEST['email'], 
			$_REQUEST['login'], $hashed_password, $id]);
		$_SESSION['customer']=[
			'id'=>$id, 'name'=>$_REQUEST['name'], 'post'=>$_REQUEST['post'], 
			'address'=>$_REQUEST['address'], 'login'=>$_REQUEST['login'], 
			$hashed_password];
        echo '<section id="premieroutArea">';
		echo '<p>お客様情報を更新しました。ログアウト後、再度ログインしてください。<br>
        Your information has been updated. Please logout and login again.</p>';
        echo '<p class="loginoutbtn"><a class="btn" href="logout-input.php">Logout</a></p>';
        echo '</section>';
	} else {
		$sql=$pdo->prepare('insert into customer values(null,?,?,?,?,?,?)');
		$sql->execute([
			$_REQUEST['name'], $_REQUEST['post'], $_REQUEST['address'], 
            $_REQUEST['email'], $_REQUEST['login'], $hashed_password]);

// 登録成功時にメールを送信する
if (empty($sql->fetchAll())) {
    // メール送信処理
    $subject = 'ご登録ありがとうございます！Thank you for registration!!';
    $message = "ようこそ My Deerへ！ログインしてくださいね♩\n\n";
    $message .= "Welcome to 'My Deer'! Please login♩\n\n";
    $message .= "Login▶︎https://www.ayaka-labo.com/mydeer/login-input.php\n\n";
    $message .= "登録特典！\n\n";
    $message .= "ログイン後、下記のURLから登録特典をダウンロードしてください♩\n\n";
    $message .= "After logging in, please download the registration benefits from the following URL♩\n\n";
    $message .= "Gifts▶︎https://www.ayaka-labo.com/mydeer/dl.php\n\n";

    $headers = 'From: contact@ayaka-labo.com'; // 送信元メールアドレス

    $to = 'tough.sweet.1616@gmail.com,' . $_REQUEST['email']; // 送信先メールアドレスをカンマ区切りで指定

    // メールを送信
    mail($to, $subject, $message, $headers);
}
        echo '<section id="premieroutArea">';
		echo '<p>お客様情報を登録しました。ログインしてください。<br>
        Customer information has been registered.Please login again.</p>';
        echo '<p>また確認のメールをお送りしましたので、ご確認ください。<br>I have also sent you an email when you registered, please check it!</p>';
        echo '<p class="loginoutbtn"><a class="btn" href="login-input.php">Login</a></p>';
        echo '</section>';
	}

} else {
    echo '<section id="premieroutArea">';
	echo '<p>ログイン名がすでに使用されていますので、変更してください。<br>Your login name is already in use, please change it.</p>';
    echo '<p class="loginoutbtn"><a class="btn" href="premier-input.php">Login</a></p>';
    echo '</section>';
}
?>
<p class="cartfavm">&emsp;</p>
</main>
<?php require 'footer.php'; ?>