<!DOCTYPE html>
<html>

<head>
  <title>PHP Basics</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="/styles/style.css"/>
</head>

<body>
  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="Rabbit.png" alt="Наш логотип" class="logo" />
    <span class="slogan">Omnium Rerum Principia Parva Sunt</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1 class="header">Welcome to my training php project!</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
      <blockquote style="font-size: 20px;">
          <?php
            echo strftime('Today is: %d-%m-%Y');
          ?>
      </blockquote>
    <h3 class="small-head">Why to learn?</h3>
    <p>
        It helps us break out of our normal patterns of behaviour. It gives our brains something to think about other than our daily worries. It might be a mere temporary distraction but it shows our mind and body that thinking about something other than stressful things is possible and desirable.
    </p>
    <h3 class="small-head">What is PHP?</h3>
    <p>
        PHP - is an open-source server-side scripting language that many devs use for web development. It is also a general-purpose language that you can use to make lots of projects, including Graphical User Interfaces (GUIs).
    </p>
    <p>
        The abbreviation PHP initially stood for Personal Homepage. But now it is a recursive acronym for Hypertext Preprocessor. (It's recursive in the sense that the first word itself is an abbreviation, so the full meaning doesn't follow the abbreviation.)

        The first version of PHP was launched 26 years ago. Now it's on version 8, released in November 2020, but version 7 remains the most widely used.

        PHP runs on the Zend engine, which is the most popular implementation. There are some other implementations as well, like parrot, HPVM (Hip Hop Virtual Machine), and Hip Hop, created by Facebook.

        PHP is mostly used for making web servers. It runs on the browser and is also capable of running in the command line. So, if you don't feel like showing your code output in the browser, you can show it in the terminal.
    </p>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
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
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Rabbit Master , 2022
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>