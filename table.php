<?php
require "inc/lib.inc.php";
set_error_handler("myError");
require  "inc/data.inc.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cols = abs((int) $_POST['cols']);
    $rows = abs((int) $_POST['rows']);
    $color = trim(strip_tags($_POST['color']));
}
$cols = ($cols) ?: 10;
$rows = ($rows) ?: 10;
$color = ($color) ?: 'yellow';
?>
<!DOCTYPE html>

<html>
<head>
    <title>Таблица умножения</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/table.css" />
</head>
<header>
</header>
<body>

<div id="header">
    <!-- Верхняя часть страницы -->
    <img src="Rabbit.png" alt="Наш логотип" class="logo" />
    <span class="slogan">Amor Vincit Omnia</span>
    <!-- Верхняя часть страницы -->
</div>
<div id="content">
    <!-- Заголовок -->
    <h1>Multiplication table</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form name="form" action='' method="post">
      <label>Amount of columns: </label>
      <br />
      <input name='cols' id="cols" type='text' value="" />
      <br />
      <label>Amount of rows: </label>
      <br />
      <input name='rows' id='rows' text' value="" />
      <br />
      <label>Color: </label>
      <br />
      <input name='color' id="color" type='text' value="" />
      <br />
      <input id="create-button" name="button1" type='submit' value='Создать'" />
    </form>
      <br />
    <!-- Таблица -->
      <?
          drawTable($cols, $rows, $color);
      ?>
    <div id="footer">
        <!-- Нижняя часть страницы -->
        <?
        require_once "inc/bottom.inc.php";
        ?>
        <!-- Нижняя часть страницы -->
    </div>
    <!-- Таблица -->
    <!-- Область основного контента -->
<div>
    <div id="nav">
        <!-- Навигация -->
        <?
        require_once "inc/menu.inc.php";
        ?>
        <!-- Навигация -->
    </div>

</div>

</body>

</html>

