<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.05.18
 * Time: 21:20
 */

if (isset($_COOKIE['PHPSESSID'])) {
  session_start();
  if (isset($_COOKIE['page'])) {
    header("location: {$_COOKIE['page']}.php");
  } else {
    header('location: index.php');
  }
}

if (isset($_POST['username'])) {
  if (isset($_POST['rememberme']) && $_POST['rememberme'] == 1) {
    ini_set('session.cookie_lifetime', 3600 * 24 * 7);
  }
  session_start();
  $_SESSION['username'] = $_POST['username'];
  if (isset($_COOKIE['page'])) {
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
