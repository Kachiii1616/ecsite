<?php session_start(); ?>

<?php require 'head.php'; ?>

<link href="css/style-ec.css" rel="stylesheet">

<?php require 'header-short.php'; ?>
<main>

<div class="containertop"><p>&emsp;</p></div>

<div class="plbbox">
<p class="fcspace">&emsp;</p> 
<p class="plbp">登録変更の場合は、ログイン後に登録時と同じ項目(Login name/Email/Password/Name)を記入し、変更する項目のみ変更してください。</p>
<p>&emsp;</p>
<p class="plbp">If you are changing your registration, please change only the items you are changing after logging in and fill in the same items(Login name/Email/Password/Name) as when you registered.</p>
<p>&emsp;</p>
</div>

<div class="container">
    <h1>My Deer</h1>
    <h2>Create your account</h2>


<?php
$name = $post = $address =$email = $login= $password ='';

if (isset($_SESSION['customer'])) {
	$name=$_SESSION['customer']['name'];
    $post = $_SESSION['customer']['post'];
	$address=$_SESSION['customer']['address'];
    $email = $_SESSION['customer']['email'];
	$login=$_SESSION['customer']['login'];
	$password=$_SESSION['customer']['password'];
}else {
    // 存在しない場合は空文字列を代入する
    $name='';
    $post='';
	$address='';
    $email ='';
	$login='';
	$password='';
}

echo '<form action="change-output.php" method="post">';
echo '<div class="form-group">';
echo '<label for="login">Login name</label>';
echo '<input type="text" name="login" value="',htmlspecialchars( $login, ENT_QUOTES, 'UTF-8'), '">';
echo '<label for="email">Email</label>';
echo '<input type="text" name="email" value="', htmlspecialchars($email, ENT_QUOTES, 'UTF-8'), '">';
echo '<label for="password">Password</label>';
echo '<input type="password" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$" 
       title="パスワードは8文字以上で、英小文字、英大文字、数字のそれぞれ1文字以上を含む必要があります" required>';
echo '</div>';
echo '</div>';

echo '<div class="container">';
echo '<h1>Gifts for Donations</h1>';
echo '<div class="shiph2"><h2>Shipping Registration Information</h2></div>';
echo '<p>配送を希望されない場合は、NameにLogin名を記載してください。その他空白で構いません。後から変更できます。</p>';  
echo '<p>If you do not purchase,please enter your login name in the Name field. 
Other fields may be left blank.You can change it later.</p>';  
echo '<p class="fcspace">&emsp;</p> ';
echo '<section id="containerform">';
echo '<div class="form-group">';
echo '<label for="login">Name</label>';
echo '<input type="text" name="name" value="', htmlspecialchars($name, ENT_QUOTES, 'UTF-8'), '">';
echo '<label for="post">Post</label>';
echo '<input type="text" name="post" value="', htmlspecialchars($post, ENT_QUOTES, 'UTF-8'), '">';
echo '<label for="address">Address</label>';
echo '<input type="text" name="address" value="', htmlspecialchars($address, ENT_QUOTES, 'UTF-8'), '">';
echo '<input type="submit" name="submit" value="Send >">';
echo '</form>';
echo '</section>';
echo '</div>';
echo '</div>';
?>

<div class="plbbox">
<p class="fcspace">&emsp;</p> 
<p class="plbp">パスワードは8文字以上で、英小文字、英大文字、数字のそれぞれ1文字以上を含む必要があります。</p>
<p class="plbp">ログイン名は英数字で入力してください。</p>
<p class="plbp">登録変更の場合は、ログイン後に変更する項目のみ変更し、登録時と同じ項目を記入ください。</p>
<p>&emsp;</p>
<p class="plbp">Password must be at least 8 characters and contain at least 1 lowercase letter, 1 uppercase letter, and 1 number. </p>
<p class="plbp">Your login name must be entered in English and numbers. </p>
<p class="plbp">If you are changing your registration, please change only the items you are changing after logging in and fill in the same items as when you registered.</p>
<p>&emsp;</p>
</div>

</main>
<aside>

</aside>
<?php require 'footer.php'; ?>