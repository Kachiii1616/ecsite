<?php
// カートに商品が追加された場合にセッション変数を更新し、合計金額を再計算する

// 初期化
$total = 0;

// 商品が追加された場合の処理
if (isset($_SESSION['product'])) {
    foreach ($_SESSION['product'] as $id => $product) {
        // 各商品の小計を計算して合計金額を更新
        $subtotal = $product['price'] * $product['count'];
        $total += $subtotal;
    }
}
?>

<div class="total-header"><p>Total: ¥<span id="total"><?php echo $total; ?></span></p></div>

<div class="cart-container">
    <?php
    if (!empty($_SESSION['product'])) {
        foreach ($_SESSION['product'] as $id => $product) {
            echo '<div class="cart-item">';
            echo '<div class="item-details">';
            echo '<h3 class="item-name"><a href="detail.php?id=' . $id . '">' . $product['name'] . '</a></h3>';
            echo '<img src="images/detail/' . $id . '.jpg" alt="image" class="item-image">';
            echo '<p class="item-price">¥ ' . $product['price'] . '</p>';
            echo '<p class="item-quantity"> ' . $product['count'] . '</p>';
            echo '<p class="deleteb"><a href="cart-delete.php?id=' . $id . '">削除</a></p>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<section id="cartemptyArea"><p class="empty-cart-message">カートに商品がありません。<br>
        There are no items in your cart.</p>';
    }
    ?>













