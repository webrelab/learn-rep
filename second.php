<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.05.18
 * Time: 12:18
 */

include_once 'auth_check.inc';
setcookie('page', 'second', time() + 3600 * 24 * 7, '/');
$username = $_SESSION['username'];
?>

<h1>Вторая страница</h1>
<div>Вы вошли как <?php echo $username; ?></div>
<?php include_once 'logout_button.inc'; ?>
<?php include_once 'logout.inc'; ?>
