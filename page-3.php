<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.05.18
 * Time: 12:32
 */

include_once 'auth_check.inc';
setcookie('page', 'page-3', time() + 3600 * 24 * 7, '/');
$username = $_SESSION['username'];
?>

<h1>Третья страница</h1>
<div>Вы вошли как <?php echo $username; ?></div>
<?php include_once 'logout_button.inc'; ?>
<?php include_once 'logout.inc'; ?>
