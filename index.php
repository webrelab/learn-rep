<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.05.18
 * Time: 21:01
 */
include_once 'auth_check.inc';
$username = $_SESSION['username'];
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
</body>
</html>
