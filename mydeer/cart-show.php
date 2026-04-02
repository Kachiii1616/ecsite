<?php session_start(); ?>

<?php require 'head.php'; ?>
<link href="css/style-ec.css" rel="stylesheet">


<?php require 'header-white.php'; ?>

<?php require 'menu.php'; ?>

<main>
<section id="cartshowArea">
<?php
require 'cart-purchase.php';
?>
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