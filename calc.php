
<?php
// Calculator
    function clearInt($data){  //Функция приводящая данные к целым числам.
        return (int)$data;
    }
    function clearStr($data){
        return trim(strip_tags($data)); // Функция уберет html tags и пробелы.
    }
    $output = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $n1 = clearInt($_POST["num1"]);
        $n2 = clearInt($_POST["num2"]);
        $op = clearStr($_POST["operator"]);
        // TODO: Проверить поля
        $output = "$n1 $op $n2 = ";
        switch ($op){
            case "+" : $output .= $n1 + $n2; break; //тоже что: $output = $output. ($n1 + $n2)
            case "-" : $output .= $n1 - $n2; break;
            case "/" :if ($n2 === 0){ $output = "Division by zero is not allowed!";
                } else $output .= $n1 / $n2; break;
            case "*" : $output .= $n1 * $n2; break;
            case "**" : $output .= $n1 ** $n2; break;
            default: $output = "Unknown operator";
        }
        // NOTA BENE: В php в case используется мягкое сравнение, то есть == а не === .
        // А вот в JS жесткое сравнение ===.
    }


require "inc/lib.inc.php";
set_error_handler("myError");
require  "inc/data.inc.php";
// Инициализация заголовков страницы
$title = 'Our web-site';
$header = "$welcome, Guest";
$id = strtolower(strip_tags(trim($_GET['id'])));
switch ($id){
    case 'about':
        $title = 'About web-site';
        $header = 'About out web-site';
        break;
    case 'contact':
        $title = 'Contacts';
        $header = 'Feed back';
        break;
    case 'table':
        $title = 'On-line calculator';
        $header = 'Calculator';
        break;
}

?>


<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title?></title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/styles/style.css"/>
</head>
<h1 style="color: blue; font-size: 28px;"><? echo $header?></h1>
<span style="font-size: 20px;" class="slogan">Omnium Rerum Principia Parva Sunt</span>
<body class="calculator">
<?php
    if($output) {
        echo "<h3>Result: $output</h3>";
    }
?>
<h1>Calculator</h1>
<form action='' method="post">
    <label>Число 1:</label>
    <br/>
<!--    Значения остаются в полях после нажатия кнопки Считать.-->
    <input name='num1' type='text' value='<?=$n1?>'/>
    <br/>
    <label>Оператор: </label>
    <br/>
    <input name='operator' type='text' value='<?=$op?>'/>
    <br/>
    <label>Число 2: </label>
    <br/>
    <input name='num2' type='text' value='<?=$n2?>' />
    <br/>
    <br/>
    <input type='submit' value='Считать'>
</form>
</body>
<div>
    <div id="nav">

        <!-- Навигация -->
        <?
        require "inc/top.inc.php";
        require_once "inc/menu.inc.php";
        ?>
        <!-- Навигация -->
    </div>
</div>
</div>
<div id="footer">
    <!-- Нижняя часть страницы -->
    <?
    require_once "inc/bottom.inc.php";
    ?>
    <!-- Нижняя часть страницы -->
</div>


</html>
