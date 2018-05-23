<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.05.18
 * Time: 21:01
 */
include_once 'auth_check.inc';
$username = $_SESSION['username'];
setcookie('page', '', -1);
?>

<!doctype html>
<html>
<head>

</head>
<body>
  <h1>Главная страница</h1>
  <div>Вы вошли как <?php echo $username; ?></div>
<?php include_once 'logout_button.inc'; ?>
<?php include_once 'logout.inc'; ?>
<a href="first.php">Первая страница</a><br>
  <a href="second.php">Вторая страница</a>
  <a href="page-4.php">Четвертая страница</a><br>
</body>
</html>
