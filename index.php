<?php
    include  "inc/lib.inc.php";
?>
<?php
    include  "inc/data.inc.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>PHP Basics</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="/styles/style.css"/>
</head>

<body>
  <div id="header">
<?
    require_once "inc/top.inc.php";
?>
  </div>

  <div id="content">
    <!-- Заголовок -->
<?
 require_once "inc/index.inc.php";
?>
    <!-- Область основного контента -->
  </div>
  <div style="text-align: center;">
  <?
  // Дата время
  print_r(getdate()[0]);
  echo "<br/>";
  echo "<br/>";
  echo time();
  ?>
  </div>
  <div id="nav">
    <!-- Навигация -->
<?
    require_once "inc/menu.inc.php";
?>
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
<?
    require_once "inc/bottom.inc.php";
?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>