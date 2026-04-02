<?php require 'head.php'; ?>
<link href="css/style-ec.css" rel="stylesheet">

<?php require 'header-white.php'; ?>

<?php require 'menu.php'; ?>
<main>
<section id="detailArea">
<?php
$pdo=new PDO('mysql:host=mysql2209.xserver.jp;dbname=ayaka1616_labo;charset=utf8','ayaka1616_labo','Virkyd.puvwov');
$sql=$pdo->prepare('select * from product where id=?');
$sql->execute([$_REQUEST['id']]);
foreach ($sql as $row) {
	echo '<div class="detailWrap">';
	echo '<p class="name">', $row['name'], '</p>';
	echo '<p><img alt="image" width=500 src="images/detail/', $row['id'], '.', $row['ext'], '"></p>';
	echo '<div class="detailBox">';
	echo '<p class="namepc">', $row['name'], '</p>';
	echo '<p class="price">' . $row['descri'] . '</p>';
	echo '<form action="cart-insert.php" method="post">';
	echo '<p class="price">¥', $row['price'], '</p>';
	echo '<p class="qty">数量/Qty：<select name="count">';
	for ($i=1; $i<=10; $i++) {
		echo '<option value="', $i, '">', $i, '</option>';
	}
	echo '</select></p>';
	echo '<input type="hidden" name="id" value="', $row['id'], '">';
	echo '<input type="hidden" name="name" value="', $row['name'], '">';
	echo '<input type="hidden" name="price" value="', $row['price'], '">';
	echo '<button class="detailcartbtn">カートに追加<br />Add to Cart</button>';
	echo '<p class="detailcartbtnm">&emsp;</p>';
	echo '</form>';
	echo '<p class="cartfavorite"><a href="favorite-insert.php?id=', $row['id'], 
		'">お気に入りに追加<br />Add to Favorite</a></p>';
}
?>
</div>
</div>
<p class="detailm">&emsp;</p>
</main>
<?php require 'footer.php'; ?>

