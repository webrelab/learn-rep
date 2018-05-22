<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.05.18
 * Time: 21:01
 */

if ((isset($_COOKIE['remember']) && $_COOKIE['remember']) || isset($_COOKIE['PHPSESSID'])) {
  session_start();
  $username = $_SESSION['username'];
} else {
  header('location: auth.php');
}

?>

<!doctype html>
<html>
<head>

</head>
<body>
  <h1>Главная страница</h1>
  <div>Вы вошли как <?php echo $username; ?></div>
<?php include_once 'logout.inc'; ?>
</body>
</html>
