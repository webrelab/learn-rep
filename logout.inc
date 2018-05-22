<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.05.18
 * Time: 22:05
 */

if (isset($_POST['logout']) && $_POST['logout']) {
  unset($_SESSION['username']);
  if (isset($_COOKIE['remember'])) unset($_COOKIE['remember']);
  setcookie('PHPSESSID', '', -1);
  session_destroy();
}
?>


<form action="index.php" method="post">
  <button type="submit" name="logout" value="true">выход</button>
</form>
