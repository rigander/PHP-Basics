<?php
    require "inc/lib.inc.php";
    set_error_handler("myError");
    require  "inc/data.inc.php";
    // Инициализация заголовков страницы
    $title = 'Our web-site';
    $header = "$welcome, Guest";
    $id = strtolower(strip_tags(trim($_GET['id'])));
    switch ($id){
        case 'about':
         $title = 'About web-site';
         $header = 'About out web-site';
         break;
        case 'contact':
         $title = 'Contacts';
         $header = 'Feed back';
         break;
        case 'table':
         $title = 'On-line calculator';
         $header = 'Calculator';
         break;
    }

?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title?></title>
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
      <h1 style="color: blue; font-size: 28px;"><? echo $header?></h1>
<?
 require_once "inc/index.inc.php";
?>
    <!-- Область основного контента -->
      <?php
      switch($id){
          case 'about':
            include 'about.php';
            break;
          case 'contact':
              include 'contact.php';
              break;
          case 'table':
              include 'table.php';
              break;
          case 'calc':
              include 'calc.php';
              break;
          default:
              include 'index.inc.php';
      }
      ?>
  </div>
  <div>
      <div id="nav">
          <!-- Навигация -->
          <?
          require_once "inc/menu.inc.php";
          ?>
          <!-- Навигация -->
      </div>
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