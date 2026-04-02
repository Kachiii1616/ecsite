<?php require 'head.php'; ?>
<link href="css/style-ec.css" rel="stylesheet">

<?php require 'header-short.php'; ?>

<main>
<div class="log">
<div class="containertop"><p>&emsp;</p></div>
<div class="container">
<h1>Login</h1>
<h2>Welcom !</h2>
<form action="login-output.php" method="post">
<label for="loginname">Login Name</label>
<input type="text" name="login"><br>
<label for="loginpass">Password</label>
<input type="password" name="password"><br>
<input type="submit" name="submit" value="Send >">
</form>
</div>
<p class="loginbtnm">&emsp;</p>
<section id="signupArea">
    <div class="signup">
        <h2>Sign Up</h2>
        <h3>新規会員登録</h3>
        <p class="signupbtn"><a class="btn" href="premier-input.php">Sign Up</a></p>
        <!--[ <img src="images/sns/1.YouTube.png" width="250" height="250" alt="YouTube">-->
        <p class="signupbtnm">&emsp;</p>
    </div>
</section>
</main>
<?php require 'footer.php'; ?>