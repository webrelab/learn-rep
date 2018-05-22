<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.05.18
 * Time: 21:01
 */

if (isset($_COOKIE['username']) || isset($_COOKIE['PHPSESSID'])) {
  session_start();
} else {
  header('location: auth.php');
}