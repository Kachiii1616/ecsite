<?php
session_start();
if (empty($_SESSION['user'])) { header('Location: login-input.php'); exit; }
if (!isset($_SESSION['csrf_token'], $_POST['csrf_token'])
    || !hash_equals($_SESSION['csrf_token'], (string)$_POST['csrf_token'])) {
  $_SESSION['flash'] = '不正なリクエストです。';
  header('Location: ec-input.php'); exit;
}

$uid     = (int)$_SESSION['user']['id'];
$post    = trim($_POST['post'] ?? '');
$address = trim($_POST['address'] ?? '');

require __DIR__ . '/db.php';

try {
  $pdo->beginTransaction();

  // 排他ロックして upsert
  $sel = $pdo->prepare('SELECT id FROM ec WHERE member_id = ? FOR UPDATE');
  $sel->execute([$uid]);

  if ($sel->fetch()) {
    $upd = $pdo->prepare('UPDATE ec SET post = ?, address = ? WHERE member_id = ?');
    $upd->execute([$post, $address, $uid]);
  } else {
    $ins = $pdo->prepare('INSERT INTO ec (member_id, post, address) VALUES (?, ?, ?)');
    $ins->execute([$uid, $post, $address]);
  }

  $pdo->commit();
  $_SESSION['flash'] = 'EC情報を保存しました。';

} catch (Throwable $e) {
  $pdo->rollBack();
  error_log($e->getMessage());
  $_SESSION['flash'] = '保存時にエラーが発生しました。';
}
header('Location: ec-input.php'); exit;