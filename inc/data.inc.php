<?php
setlocale(LC_ALL, "russian");
$year = strftime('%Y');
$month = strftime('%B');
$month = iconv("windows-1251", "UTF-8", $month);
$day = strftime('%d');





function area_of_disk($r){
    return 3.14 * $r * $r;
}

function area_of_ring($big, $small){
    $b = area_of_disk($big);
    $s = area_of_disk($small);
    return $b - $s;
}
?>
