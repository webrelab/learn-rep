<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.05.18
 * Time: 21:20
 */

if (isset($_POST['username'])) {
  session_start();
  if (isset($_POST['rememberme'])) {
    setcookie('username', $_POST['username']);
  }
  if (isset($_COOKIE['page'])) {
    setcookie('page', '', -1);
    header("location: {$_COOKIE['page']}.php");
  } else {
    header('location: index.php');
  }
}

?>

<form action="auth.php" method="post">
  <label for="username">Имя пользователя</label>
  <input name="username" type="text" id="username"><br>
  <input type="checkbox" name="rememberme" value="1" id="rememberme">
  <label for="rememberme">запомнить меня</label><br>
  <button type="submit">Войти</button>
</form>
