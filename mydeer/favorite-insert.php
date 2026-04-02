<?php session_start(); ?>

<?php require 'head.php'; ?>
<link href="css/style-ec.css" rel="stylesheet">

<?php require 'header-white.php'; ?>

<?php require 'menu.php'; ?>
<main>
<section id="favallArea">
<?php
if (isset($_SESSION['customer'])) {
	$pdo=new PDO('mysql:host=mysql2209.xserver.jp;dbname=ayaka1616_labo;charset=utf8','ayaka1616_labo','Virkyd.puvwov');
	$sql=$pdo->prepare('insert into favorite values(?,?)');
	$sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
	echo '<p>お気に入りに商品を追加しました。<br>Add to Favorite</p>';
	echo '<hr>';
	echo '<section id="favshowArea">';
	require 'favorite.php';
	echo '</section>';
} else {
	echo '<p>お気に入りに商品を追加するには、ログインしてください。<br>Please Login.</p>';
}
?>

</section>
</main>

<?php require 'footer.php'; ?>
