<?php

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
}
function myError($no, $msg, $file, $line){  // Функция перехвата ошибок
    if ($no == E_USER_ERROR){
        echo "ERROR message";
        $s = date("d-m-Y H:i:s"). " - $msg at $file:$line";
        error_log("$s\n", 3, "error.log");
    }
}

function drawMenu($leftMenu, $vertical = true){     // Функция отрисовывает меню.
   if (!is_array($leftMenu)) {                     // Отлавливаем ошибку.
        trigger_error("Something went wrong", E_USER_ERROR);
        error_log("$msg\n", 3, "error.log"); // Пишем ошибку в файл. При чем если файла нет она создастся.
    }
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

        return true;
    }
}

?>
