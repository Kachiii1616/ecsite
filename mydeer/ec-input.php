<?php
session_start();
if (empty($_SESSION['user'])) { header('Location: login-input.php'); exit; }
require __DIR__ . '/db.php';

$uid = (int)$_SESSION['user']['id'];
// 既存EC情報を取得（あれば表示）
$stmt = $pdo->prepare('SELECT post, address FROM ec WHERE member_id = ?');
$stmt->execute([$uid]);
$ec = $stmt->fetch() ?: ['post'=>'', 'address'=>''];

if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<?php require 'head.php'; ?>
<link href="css/style-ec.css" rel="stylesheet">
<?php require 'header.php'; ?>

<main>
<div class="container">
  <h1>EC Registration</h1>
  <p><?php echo htmlspecialchars($_SESSION['user']['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?> さん、こんにちは。</p>

  <?php if (!empty($_SESSION['flash'])): ?>
    <p class="notice"><?php echo htmlspecialchars($_SESSION['flash'], ENT_QUOTES, 'UTF-8'); unset($_SESSION['flash']); ?></p>
  <?php endif; ?>

  <form action="ec-output.php" method="post">
    <div class="form-group">
      <label>Post</label>
      <input type="text" name="post" value="<?php echo htmlspecialchars($ec['post']); ?>"><br>

      <label>Address</label>
      <input type="text" name="address" value="<?php echo htmlspecialchars($ec['address']); ?>"><br>
    </div>

    <input type="hidden" name="csrf_token"
           value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">

    <input type="submit" value="Save ＞">
  </form>

  <form action="logout.php" method="post" style="margin-top:1rem;">
    <button type="submit">Logout</button>
  </form>
</div>
</main>

<?php require 'footer.php'; ?>