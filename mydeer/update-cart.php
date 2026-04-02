<?php
session_start();

// カートが空の場合は何もせずに終了
if (empty($_SESSION['product'])) {
    exit('カートが空です。');
}

// POSTリクエストから商品IDと新しい個数を取得
if (!isset($_POST['id']) || !isset($_POST['quantity'])) {
    exit('必要なパラメータが提供されていません。');
}
$id = $_POST['id'];
$newQuantity = $_POST['quantity'];

// 新しい個数が1未満の場合は1に設定
if ($newQuantity < 1) {
    $newQuantity = 1;
}

// 商品IDがカート内に存在するか確認
if (!array_key_exists($id, $_SESSION['product'])) {
    exit('指定された商品がカートに存在しません。');
}

// 新しい個数をセット
$_SESSION['product'][$id]['count'] = $newQuantity;

// 合計金額を再計算して返す
$total = 0;
foreach ($_SESSION['product'] as $product) {
    $subtotal = $product['price'] * $product['count'];
    $total += $subtotal;
}

// 新しい合計金額を返す
echo $total;
