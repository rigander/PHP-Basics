<div style="background-color: #2A4F6F; font-size: 60px; color: wheat;width: 100%; height: 5500px; ">
    <?
    $name = "William";
    $age = 75;
    echo "Hello $name!!!";
    ?>
    <br>
    <?= strftime('%d'); ?>
    <?
    echo <<<TEXT
Hello   world!!! 
    My "name" is 
    $name and age is 
    $age
TEXT;

    ?>
    <br>
    <br>
    <div style="margin: 0 auto; text-align: center;">
        <?
        $a = 3;
        $b = 4;
        $c = $a**$b;
        echo $c;
        ?>
        <br>
        <?
        $x = "5.25asd";
        echo "Result is: ";
        echo $x * 10;
        ?>
        <br>
        <?
        $h = "Hello ";
        $w = "world";
        echo $h . $w . " my name is Andrew";
        ?>
        <br>
        <?
        $d = "$h  $w";
        echo $d;
        ?>
        <br>
        <?
        $jk = true;
        echo $jk * 20;
        ?>
        <br>
        <?
        $set = "robert";
        echo isset($set);
        ?>
        <br>
        <?
        $shop = false;
        if ($shop)
            echo "Visit shop";
        echo "\nCome back home";
        ?>
        <?
            echo $names ?? "Well, unknown";
        ?>
        <br>
<!--        Цикл for-->
        <br>
        <?
        for($i=1; $i<=5; $i++) {
            echo $i;
        }
        ?>
        <br>
        <br>
<!--        Альтенативный синтаксис для цикла for-->
        <?
        for ($x=1; $x<=10; $x++):
            echo $x;
        endfor;
        ?>
        <br>
        <br>
<!--        Лаба3.1 - Вывод нечетных чисел из заданного диапазона.-->
<!--        Используя цикл for выведите в столбик нечётные числа от 1 до 50.-->
        <?
        for ($j=1; $j<=50; $j++){
            if($j%2 !== 0){
                echo "\n$j";
            }
        }
        ?>
        <br>
        <br>
<!--        Цикл while-->
        <?
        $l = 1;
        while ($l <= 10){
            echo $l;
            $l++;
        }
        ?>
        <br>
<!--        Тоже самое будет при использовании постфиксного инкремента-->
        <?
        $l = 1;
        while ($l <= 10) {
            echo $l++, '<br/>';
        }
        ?>
        <br>
<!--        А вот если использовать префиксный инкремент, то цикл начнется с 2 и до 11.-->
<!--        Так как в теле цикла сначала переменная будет увеличина на 1, и только после -->
<!--        этого выведен результат.-->
        <?
        $l = 1;
        while ($l <= 10) {
            echo ++$l;
        }
        ?>
        <br>
<!--        Лаба 3.2 - Используя цикл while вывести значение строки в столбик.-->
<!--        Функция strlen() нужна для того чтобы узнать длину слова.-->
        <?
        $var = "SEMPLER";
        $i=0;
        while ($i <= strlen($var)) {
            echo $var{$i}, '<br/>';
            $i++;
        }
        ?>
<!--        Второй способ - более краткая запись.        -->
        <?
        $rom = "IDEM";
        $i=0;
        while ($i <= strlen($rom)) {
            echo $rom{$i++}, '<br/>';
        }
        ?>
        <?
        $rom = "PACT";
        $i=0;
        $len = strlen($rom);
        while ($i <= $len) {
            echo $rom{$i++}, '<br/>';
        }
        ?>
        <?
        $i = 100;
        do {
            echo $i++;
        } while ($i <= 10 );
        ?>
    </div>
</div>

