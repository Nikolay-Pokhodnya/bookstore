<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<header>
	<blockquote>
		<a href="index.php"><img src="image/logo.png"></a>
	</blockquote>
</header>
<blockquote>
	<div class="container">
		<center><h1>Вход в интернет магазин</h1></center>
		<form action="checlogin.php" method="post">
			Логин:<br><input type="text" name="Ваш логин" />
			<br><br>
			Пароль:<input type="password" name="pwd" />
			<br><br>
			<input class="button" type="submit" value="Войти"/>
			<input class="button" type="button" name="cancel" value="Отмена" onclick="window.location='index.php';" />
		</form>
	</div>
</blockquote>

<?php
if(isset($_GET['errcode'])){
    if($_GET['errcode']==1){
        echo '<span style="color: red;">Invalid username or password.</span>';
    }elseif($_GET['errcode']==2){
        echo '<span style="color: red;">Please login.</span>';
    }
}

?>

</body>
</html>