<!DOCTYPE html>
<html>

<head>
  <title>Contact details</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./styles/style.css" />
</head>

<body style="background-color: #a68130" id="contact-body">

  <div id="header">
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Feedback</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
      <?
      $size = ini_get("post_max_size");
      $last = substr($size, -1);
      $allNumbers = $size * 1;
      $kB = "1024";
      $mB = $kB*1024;
      $gB = $mB*1024;
      $result = "";
      switch ($last) {
          case "K":
              $result = $allNumbers * $kB; break;
          case "M":
              $result = $allNumbers * $mB; break;
          case "G":
              $result = $allNumbers * $gB; break;
          default:
              $result = $allNumbers; break;
      }
      ?>
    <h3>Address</h3>
    <p>Odessa, Ukraine</p>
    <h3>Ask a question</h3>
    <form action='' method='post'>
      <label>Subject: </label>
      <br />
      <input style="background-color: #2A4F6F" name='subject' type='text' size="50" />
      <br />
      <label>Content: </label>
      <br />
      <textarea style="background-color: #2A4F6F" name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input style=" font-family: AIGDT; background-color: #B2BCC6; width: 150px;" type='submit' value='Submit' />
    </form>
      <p>Data send - max volume <?= $result ?> byte.</p>
    <!-- Область основного контента -->
  </div>
  <br>
  <br>
  <div id="nav">
    <h2 style="color:#3b3b9b;">Navigation</h2>
    <!-- Меню -->
    <ul>
      <li><a href='index.php'>Home</a>
      </li>
      <li><a href='about.php'>About us</a>
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
  <br>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Rabbit Master, 2022
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>