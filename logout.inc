<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.05.18
 * Time: 22:05
 */

if (isset($_POST['logout']) && $_POST['logout']) {
  unset($_SESSION['username']);
  session_destroy();
}
?>

<form action="index.php">
  <button type="submit" name="logout" value="true">выход</button>
</form>
