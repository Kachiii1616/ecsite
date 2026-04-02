<div class="cart-container">
    <?php
    if (!empty($_SESSION['customer'])) {
        $pdo = new PDO('mysql:host=mysql2209.xserver.jp;dbname=ayaka1616_labo;charset=utf8', 'ayaka1616_labo', 'Virkyd.puvwov');
        $sql = $pdo->prepare(
            'SELECT * FROM product ' .
            'WHERE id IN (SELECT product_id FROM favorite WHERE customer_id=?)'
        );
        $sql->execute([$_SESSION['customer']['id']]);
        $favorites = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach ($favorites as $row) {
            $id = $row['id'];
            echo '<div class="cart-item">';
			echo '<div class="item-details">';
            echo '<h3 class="item-name"><a href="detail.php?id=' . $id . '">' . $row['name'] . '</a></h3>';
            echo '<img src="images/detail/' . $id . '.jpg" alt="image" class="item-image">';
            echo '<p class="item-price">¥ ' . $row['price'] . '</p>';
            echo '<p class="deleteb"><a href="favorite-delete.php?id=' . $id . '">削除/delete</a></p>';
            echo '</div>';
			echo '</div>';
        }
    } else {
        echo 'お気に入りを表示するには、ログインしてください。<br>Please login.';
    }
    ?>

	</div>
