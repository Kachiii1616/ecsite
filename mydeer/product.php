<?php require 'head.php'; ?>
<link href="css/style-ec.css" rel="stylesheet">
<link href="css/style-search2.css" rel="stylesheet">

<?php require 'header-white.php'; ?>

<?php require 'menu.php'; ?>

<main>
<!-- Art Works Search -->	
<section id="artworkssearchArea">
<h2 class="searchh2">Search</h2>
<div class="search">
    <form action="product.php" method="post">
        <input class="searchinput" type="text" placeholder="Keyword..." name="keyword">
        <div class="searchimg"><input class="searchbutton" type="submit" value=">" >
        </div>
    </form>
</div>
</section>
<!-- /Art Works Search -->	


<!-- Art Works -->	

<section id="artworksArea">
<h2>Store</h2>
<p class="tiph2p">CD & Goods</p>

<div class="artworks">
<?php
$pdo=new PDO('mysql:host=mysql2209.xserver.jp;dbname=ayaka1616_labo;charset=utf8','ayaka1616_labo','Virkyd.puvwov');
if (isset($_REQUEST['keyword'])) {
    $sql=$pdo->prepare('select * from product where name like ?');
    $sql->execute(['%'.$_REQUEST['keyword'].'%']);
} else {
    $sql=$pdo->query('select * from product');
}

foreach ($sql as $row) {

    echo '<div class="mydeerproduct">';
    echo '<h3>', htmlspecialchars($row['name']), '</h3>';
    echo '<p><a href="detail.php?id=', $row['id'], '"><img alt="image" width="150" height="100" src="images/detail/', $row['id'], '.', $row['ext'], '"></a></p>';
    echo '<p>¥', htmlspecialchars($row['price']), '</p>';
    echo '</div>';
}
?>
</div>
<p class="top">&emsp;</p>
</section>
<!-- Art Works -->	

</main>
<?php require 'footer.php'; ?>