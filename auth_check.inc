<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.05.18
 * Time: 10:59
 */

if ((isset($_COOKIE['remember']) && $_COOKIE['remember']) || isset($_COOKIE['PHPSESSID'])) {
  session_start();
} else {
  header('location: auth.php');
}