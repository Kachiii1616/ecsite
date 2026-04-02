<?php session_start(); ?>
<?php require 'head.php'; ?>
<link href="css/style-ec.css" rel="stylesheet">

<?php require 'header-white.php'; ?>

<?php require 'menu.php'; ?>
<main>


<?php
$id=$_REQUEST['id'];
if (!isset($_SESSION['product'])) {
	$_SESSION['product']=[];
}
$count=0;
if (isset($_SESSION['product'][$id])) {
	$count=$_SESSION['product'][$id]['count'];
}
$_SESSION['product'][$id]=[
	'name'=>$_REQUEST['name'], 
	'price'=>$_REQUEST['price'], 
	'count'=>$count+$_REQUEST['count']
];
echo '<section id="cartallArea">';
echo '<p>カートに商品を追加しました。<br>Product added to cart.</p>';
echo '<hr>';
echo '</section>';
echo '<section id="cartinsertArea">';
require 'cart-purchase.php';
?>
<p class="top">&emsp;</p>
</section>
</main>
<aside>

<hr>
<section id="favshowArea">
<p class="cartfavm">&emsp;</p>
<p class="cartfaven">Favorite</p>
<p>お気に入り</p>
<p class="cartfavm">&emsp;</p>
<?php
require 'favorite.php';
?>
</section>
<aside>
<?php require 'footer.php'; ?>
