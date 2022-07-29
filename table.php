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
    <form name="form" action='' method="get">
      <label>Amount of columns: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Amount of rows: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Color: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <input id="create-button" type='submit' value='Создать' />
    </form>
      <br />
    <!-- Таблица -->
      <?
      $cols = $_GET['cols'];
      $rows = $_GET['rows'];
      $color = $_GET['color'];
      echo "<table>";
      for ( $row = 1; $row <= $rows ; $row++){
          echo'<tr>';
          for ( $col = 1; $col <= $cols; $col++){
              $res = $col * $row;
              if ($col == 1 or $row ==1){
                  echo '<th style="border: 1px solid black; color: '.'black'.
                      ';' . 'width: 40px; height: 20px; text-align: center;
                       background-color: chocolate;">',
                  $res, '</th>';
              }else
                  echo '<td style="border: 1px solid black; color: '.$color.
                      ';' . 'width: 40px; height: 20px; text-align: center;">',
                  $res, '</td>';
          }
          echo '</tr>';
      }
      echo "</table>";
      ?>
    <!-- Таблица -->
    <!-- Область основного контента -->
      <br>
      <div style="margin-left: 20px; font-size: 20px;">
          <?
          $arr = [
                  'a' => 'one',
                  'b' => 'two',
                  'c' => 'three'
          ];
          foreach ($arr as $v){
              echo $v."\n";
          };

          echo "</br>";

          foreach ($arr as $k => $v){
              echo "</br>" . "$k : $v\n";
          }

          ?>
      </div>
  </div>
  <div id="nav">
    <h2>Navigation Menu</h2>
    <!-- Меню -->
    <ul>
      <li><a href='index.php'>Home</a>
      </li>
      <li><a href='about.php'>About me</a>
      </li>
      <li><a href='contact.php'>Contacts</a>
      </li>
      <li><a href='table.php'>Multiplication table</a>
      </li>
      <li><a href='calc.php'>Calculator</a>
      </li>
    </ul>
    <!-- Меню -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Rabbit Master, 2022
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>