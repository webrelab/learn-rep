<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24.05.18
 * Time: 13:00
 */

if (isset($_POST['style'])) {
  setcookie('style', 'style-' . $_POST['style'], time() + 3600*24*7);
  if (isset($_COOKIE['page'])) {
    header("location: {$_COOKIE['page']}.php");
  } else {
    header('location: index.php');
  }
}

?>

<form method="post" action="settings.php">
  <label for="select-style">Выбрать стиль</label>
  <select name="style" id="select-style">
    <option value="1">Стиль красный</option>
    <option value="2">Стиль зелёный</option>
    <option value="3">Стиль синий</option>
  </select>
  <br>
  <button type="submit">Выбрать</button>
</form>
