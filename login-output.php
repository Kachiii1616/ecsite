<?php session_start(); ?>

<?php require 'head.php'; ?>
<link href="css/style-ec.css" rel="stylesheet">

<?php require 'header.php'; ?>

<main>
<section id="loginoutArea">
<p class="top">&emsp;</p>

<?php
unset($_SESSION['customer']);
$pdo = new PDO('mysql:host=mysql2209.xserver.jp;dbname=ayaka1616_labo;charset=utf8',
'ayaka1616_labo','Virkyd.puvwov');
$sql = $pdo->prepare('select * from customer where login=?');
$sql->execute([$_REQUEST['login']]);

$row = $sql->fetch();

if ($row && password_verify($_REQUEST['password'], $row['password'])) {
    // ログインが成功した場合、名前と住所の情報を取得する
    $name = $row['name'];
    $post= $row['post'];
    $address = $row['address'];
    $email= $row['email'];


    // $_SESSION['customer'] に名前と住所をセットする    
    $_SESSION['customer'] = [
        'id' => $row['id'], 'login' => $row['login'],
        'password' => $row['password'], 'name' => $name,
        'post'=> $post,'address' => $address,
        'email' => $email
    ];

    echo '<p>Welcom！', $_SESSION['customer']['login'], 'さん♩</p>';
    echo '<p class="loginoutbtn"><a class="btn" href="mydeer.php">HOME</a></p>';
} else {
    echo '<p>ログイン名またはパスワードが違います。</p>';
    echo '<p>Wrong login name or password.</p>';
    echo '<p class="loginoutbtn"><a class="btn" href="login-input.php">Login</a></p>';
}
?>
</section>
</main>
<?php require 'footer.php'; ?>
