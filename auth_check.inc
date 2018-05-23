<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.05.18
 * Time: 10:59
 */

if (isset($_COOKIE['PHPSESSID'])) {
  session_start();
  if (!isset($_SESSION['username'])) {
    setcookie(session_name(), '', -1);
    session_destroy();
    header('location: auth.php');
  }
} else {
  header('location: auth.php');
}