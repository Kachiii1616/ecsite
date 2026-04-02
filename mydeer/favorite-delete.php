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
	$sql=$pdo->prepare(
		'delete from favorite where customer_id=? and product_id=?');
	$sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
	echo '<p>お気に入りから商品を削除しました。<br>Item removed from favorite.</p>';
	echo '<hr>';
} else {
	echo '<p>お気に入りから商品を削除するには、ログインしてください<br>Please Login.</p>';
}
echo '<section id="favshowArea">';
require 'favorite.php';
echo '</section>';
?>
</section>
</main>

<?php require 'footer.php'; ?>
