<?php
setlocale(LC_ALL, "russian");
$year = strftime('%Y');
$month = strftime('%B');
$month = iconv("windows-1251", "UTF-8", $month);
$day = strftime('%d');

$leftMenu = [
    ['link' => 'Home', 'href' => 'index.php?'],
    ['link' => 'About me', 'href' => 'index.php?id=about'],
    ['link' => 'Contact', 'href' => 'index.php?=contact'],
    ['link' => 'Multiplication table', 'href' => 'index.php?=table'],
    ['link' => 'Calculator', 'href' => 'index.php?=calc']
];

$time = date("H");
$welcome = "";
if ($time >= 0 && $time < 6) {
    $welcome = "Good Night";
} elseif ($time >= 6 && $time < 12) {
    $welcome = "Good Morning";
} elseif ($time >= 12 && $time < 18) {
    $welcome = "Good Day!";
} else $welcome = "Good Evening";


function area_of_disk($r){
    return 3.14 * $r * $r;
}

function area_of_ring($big, $small){
    $b = area_of_disk($big);
    $s = area_of_disk($small);
    return $b - $s;
}
?>
