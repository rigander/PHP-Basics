<?php

$cols = $_GET['cols'];
$rows = $_GET['rows'];
$color = $_GET['color'];

function drawTable($cols = 10, $rows = 10, $color = "red")
{
    echo "<table>";
    for ($row = 1; $row <= $rows; $row++) {
        echo '<tr>';
        for ($col = 1; $col <= $cols; $col++) {
            $res = $col * $row;
            if ($col == 1 or $row == 1) {
                echo '<th style="border: 1px solid black; color: ' . 'black' .
                    ';' . 'width: 40px; height: 20px; text-align: center;
                       background-color: chocolate;">',
                $res, '</th>';
            } else
                echo '<td style="border: 1px solid black; color: ' . $color .
                    ';' . 'width: 40px; height: 20px; text-align: center;">',
                $res, '</td>';
        }
        echo '</tr>';
    }
    echo "</table>";

    function drawMenu($leftMenu, $vertical = true){
        if ($vertical){
            echo '<ul style="font-weight:bold;">';
            foreach ($leftMenu as $val) {
                echo "<li><a href='{$val["href"]}'>{$val["link"]}</a></li>";
            }
            echo '</ul>';
        } if (!$vertical) {
            $style = " ' color: green;'";
            echo '<ul style="font-weight:bold; ">';
            foreach ($leftMenu as $val) {
                echo "<li style='padding-top: 10px;'><a style= {$style} href='{$val["href"]}'>{$val["link"]}</a></li>";
            }
            echo '</ul>';
        }
    }

}

?>

