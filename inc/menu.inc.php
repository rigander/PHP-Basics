<h2 style="margin-left: 10px;">Navigation Menu</h2>
<!-- Меню -->
<?
//Инициализация массива

$leftMenu = [
    ['link' => 'Home', 'href' => 'index.php'],
    ['link' => 'About me', 'href' => 'about.php'],
    ['link' => 'Contact', 'href' => 'contact.php'],
    ['link' => 'Multiplication table', 'href' => 'table.php'],
    ['link' => 'Calculator', 'href' => 'calc.php']
];
// Обработка ошибок
function drawMenu($leftMenu, $vertical = true){
    if (!is_array($leftMenu))
        return false;
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
drawMenu($leftMenu, false);
echo date("Y-m-d H:i:s");
echo "<br/>";
// Возвращает номер строки в которой она прописана.
echo __LINE__;
echo "<br/>";
$t = get_defined_constants(true);
// Полный физический путь к директории
echo __DIR__;
?>
<!-- Меню -->
