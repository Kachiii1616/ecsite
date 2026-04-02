<?php session_start(); ?>

<?php require 'head.php'; ?>
<link href="css/style-ec.css" rel="stylesheet">

<?php require 'header-white.php'; ?>

<?php require 'menu.php'; ?>

<main>
<section id="purchaseArea">

<?php
$pdo=new PDO('mysql:host=mysql2209.xserver.jp;dbname=ayaka1616_labo;charset=utf8','ayaka1616_labo','Virkyd.puvwov');
$purchase_id=1;
foreach ($pdo->query('select max(id) from purchase') as $row) {
	$purchase_id=$row['max(id)']+1;
}
$sql=$pdo->prepare('insert into purchase values(?,?)');
if ($sql->execute([$purchase_id, $_SESSION['customer']['id']])) {
	foreach ($_SESSION['product'] as $product_id=>$product) {
		$sql=$pdo->prepare('insert into purchase_detail values(?,?,?)');
		$sql->execute([$purchase_id, $product_id, $product['count']]);
	}
	unset($_SESSION['product']);

  // 顧客情報を取得
  $customer_name = $_SESSION['customer']['name'];
  $customer_post = $_SESSION['customer']['post'];
  $customer_address = $_SESSION['customer']['address'];
  $customer_email = $_SESSION['customer']['email'];

  // 日付をフォーマット
  $date = date("Y-m-d");

  // メールの本文
  $message = "Thank you for Donation!\n";
  $message .= "サポートありがとうございます！\n\n";
  $message .= "活動をより充実させることができます！\n";
  $message .= "返礼品の到着まで１週間程度いただきます。それ以上遅れる場合はご連絡させていただきます。\n";
  $message .= "本当にありがとうございます！\n";
  $message .= "It helps me to improve my activities!\n";
  $message .= "Thank you so much!!\n\n";
  $message .= "Lots Love :)\n\n";
  $message .= "Confirmation\n";
  $message .= "Name: $customer_name 様\n";
  $message .= "Post: $customer_post\n";
  $message .= "Address: $customer_address\n";
  $message .= "Email: $customer_email\n";
  $message .= "Date: $date\n\n";
  $message .= "ayakaLABO\n";

  $subject = 'Thank you for Donation!'; // メールの件名

  $headers = 'From: contact@ayaka-labo.com'; // 送信元メールアドレス

  // すべてのメールアドレスを含む配列を作成
  $to = array(
      'tough.sweet.1616@gmail.com',
      $customer_email
  );

  // メール送信
  if (mail(implode(', ', $to), $subject, $message, $headers)) {
    echo '<div class="purp1">';
    echo '<p>通貨を選択してください.・*<br>Please select a currency.</p>';
    echo '<p class="detailcartbtn"><a href="https://donate.stripe.com/dR6g2r0aoeL6aKk9AK">日本(JPY)</a></p>';
    echo '<p class="detailcartbtn"><a href="https://buy.stripe.com/7sI3fFaP232ocSs6oH">US(USD)</a></p>';
    echo '<p class="detailcartbtn"><a href="https://buy.stripe.com/fZe8zZ7CQbyUaKk9AV">EU(EUR)</a></p>';
    echo '<p class="detailcartbtn"><a href="https://buy.stripe.com/bIY4jJ2iw5aw7y88wQ">UK(GBP)</a></p>';
    echo '<p class="detailcartbtn"><a href="https://buy.stripe.com/4gw17x5uIbyU6u48wS">IDR</a></p>';
    echo '</div>';
  } else {
    echo '<section id="cartallArea">';
    echo '<p>購入手続き中にエラーが発生しました。申し訳ございません。もう一度やり直してください。<br>Sorry!Please try again. ';
    echo '</section>';
  }
}else {
    echo '<section id="cartallArea">';
    echo '<p>購入手続き中にエラーが発生しました。申し訳ございません。もう一度やり直してください。<br>Sorry!Please try again. ';
    echo '</section>';
  }
?>
<p class="cartfavm">&emsp;</p>

</section>
<p class="purbtnm">&emsp;</p>
</main>
<?php require 'footer.php'; ?>