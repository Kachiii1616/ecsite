<?php session_start(); ?>

<?php require 'head.php'; ?>
<link href="css/style-ec.css" rel="stylesheet">

<?php require 'header-white.php'; ?>

<?php require 'menu.php'; ?>
<main>
<section id="purchaseArea">
<?php
if (!isset($_SESSION['customer'])) {
	echo '<section id="cartallArea">';
	echo '<p>購入手続きを行うにはログインしてください。<br>Please login.</p>';
	echo '</section>';
} else 
if (empty($_SESSION['product'])) {
	echo '<p>カートに商品がありません。<br>There are no items in your cart.</p>';
} else  {
	echo '<div class="purp1">';
	echo '<p>内容をご確認いただき、ご注文を確定してください。<br>Review items and shipping</p>';

	echo '<p class="purbtn"><a class="btn" href="purchase-output.php">ご注文を確定する<br>Place of order</a></p>';
	echo '</div>';

	echo '<hr>';
	echo '<section id="cartshowArea">';
	require 'cart.php';
	echo '</section>';
	echo '<hr>';
	echo '<p class="purbtnm">&emsp;</p>';
	echo '<div class="purp2">';
	echo '<p>Name：', $_SESSION['customer']['name'], '</p>';
	echo '<p>Post：', $_SESSION['customer']['post'], '</p>';
	echo '<p>Adress：', $_SESSION['customer']['address'], '</p>';
	echo '<p class="purbtnm">&emsp;</p>';
	echo '<hr>';
	echo '<p class="purbtnm">&emsp;</p>';
	echo '<p>※送料は着払いです。東京から発送いたします。</p>';
	echo '<p>Shipping charges are cash on delivery.(from Tokyo.)</p>';
	echo '<p>※贈与金として頂戴し、当方から所定の税金を納めます。</p>';
	echo '<p>I will receive the money as a gift and pay the prescribed tax from me.</p>';
	echo '</div>';
}
?>
</section>
<p class="purbtnm">&emsp;</p>
</main>
<?php require 'footer.php'; ?>