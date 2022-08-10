<h1 class="header">Welcome to my training php project!</h1>
<?
$time = date("H");
$welcome = "";
if ($time >= 0 && $time < 6){
    $welcome = "Good Night!";
}elseif ($time >= 6 && $time < 12){
    $welcome = "Good Morning!";
}elseif ($time >= 12 && $time < 18){
    $welcome = "Good Day!";
}else echo $welcome = "Good Evening!";
?>
<h2 style="color:#1e3cd2;"><?= $welcome ?></h2>
<blockquote style="font-size: 20px;">
    <?= "Today: Date - $day , Month - $month, Year - $year"; ?>
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
<?
echo area_of_disk(5);
echo "<br/><div style='color:blue; font-weight:bold; font-size: 21px;'>";
echo area_of_ring(11,9);
echo "</div>";
?>
<br>
<?
$A = "Michaels";
echo strlen($A);
echo "<br/>";
echo log(3);
echo "<br/>";
// Выводим первую букву строки в верхнем регистре
$s = "hello";
$s{0} = strtoupper($s{0});
echo $s{0};
echo "<br/>";
// более простой способ, при помощи специальной функции
echo ucfirst($s{0});
echo "<br/>";
// Проверяем была ли установлена переменная значением, отличным от null
$varity = " ";
var_dump(isset($varity));
echo "<br/>";
// Вызвать метку указанной даты в параметрах даты
$dt = mktime(0, 0, 0, 2, 15, 1978);
echo $dt;
echo "<br/>";
print_r(getdate($dt));
?>