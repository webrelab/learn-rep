<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.05.18
 * Time: 21:20
 */

if (isset($_POST['username'])) {
  setcookie('username', $_POST['username']);
  session_start();
  if (isset($_COOKIE['page'])) {
    setcookie('page', '', -1);
    header("location: {$_COOKIE['page']}.php");
  } else {
    header('location: index.php');
  }
}

