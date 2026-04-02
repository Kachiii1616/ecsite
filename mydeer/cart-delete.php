<?php session_start(); ?>
<?php require 'head.php'; ?>
<link href="css/style-ec.css" rel="stylesheet">

<?php require 'header-white.php'; ?>
<main>
<?php require 'menu.php'; ?>

<section id="cartallArea">
<?php
unset($_SESSION['product'][$_REQUEST['id']]);
echo '<p>カートから商品を削除しました。<br>Item removed from cart.</p>';
echo '<hr>';
require 'cart.php';
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
