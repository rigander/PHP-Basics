<!DOCTYPE html>
<html>

<head>
  <title>Contact details</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="styles/contact.css" />
</head>
<div id="slogan">Act, Non Verba</div>
<body class="contact-body">
  <div id="content">
    <h1>Feedback</h1>
      <?
      $size = ini_get("post_max_size");
      $last = substr($size, -1);
      $allNumbers = $size * 1;
      $kB = "1024";
      $mB = $kB*1024;
      $gB = $mB*1024;
      $result = "";
      switch (strtoupper($last)) {
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
      <input name='subject' type='text' size="50" />
      <br />
      <label>Content: </label>
      <br />
      <textarea  name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <button class="submit-button" " type='submit' value='Submit'>
       SUBMIT
      </button>
    </form>
    <p id="data">Data send - max volume <?= $result ?> byte.</p>
      <?
      $user = ["John ", "70", "male", "football", true, false];
      echo $user[0];
      $user[] = "children ";
      $user[22] = "best-player";
      echo $user[4];
      echo count($user);
      ?>
      <br>
      <br>
      <?
      print_r($user);
      ?>
      <br>
      <br>
      <?
      var_dump($user);
      ?>
      <br>
      <br>
      <?
      $arr = [1=>"Andrew", 5=>"Bosch", "registered", 25, true, false ];
      unset ($arr[5]);
      var_dump($arr);
      ?>
      <br>
      <br>
      <?
      $dataList = [
              "name" => "George",
              "login"=> "odinson",
              "password"=> "1245",
              "age"=> "90",
                true
      ];
      echo $dataList["name"];
      ?>
  </div>
  <br>
  <br>
  <div id="nav">
      <img src="Rabbit.png" alt="Logo" class="logo" />
    <h2>Navigation Menu</h2>
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
  </div>
  <br>
  <div id="footer">
    &copy; Rabbit Master, 2022
  </div>
</body>

</html>