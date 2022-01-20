<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumentPhp</title>
</head>
<body>
    <?php
        // phpinfo();
        // Задание №1
            echo '<strong>Задание №1</strong>';
            $a = 10;
            $b = 2;
            $sum1 = $a + $b;
            $razn1 = $a - $b;
            $proizv1 = $a * $b;
            $chastn1 = $a / $b;
            echo "<br/>Сумма a и b равна: {$sum1}. <br/>Разность a и b равна: {$razn1}. <br/>Произведение a и b равно: {$proizv1}. <br/>Частное a и b равно: {$chastn1}.";
            echo '<hr />';
        // Задание №2
            echo '<strong>Задание №2</strong>';
            $x = 2;
            $y = 6;
            $z = 9;
            $result2 = ($x + 1)*4 - 2*($z - 2*pow($x, 2) + pow($y, 2));
            echo "<br/>Результат выражения равен: {$result2}.";
            echo '<hr />';
        // Задание №3
            echo '<strong>Задание №3</strong>';
            $a = 17;
            $b = 10;
            $c = $a - $b;
            $d = 7;
            $result = $c + $d;
            echo "<br/>Результат равен: {$result}.";
            echo '<hr />';
        // Задание №4
             echo '<strong>Задание №4</strong>';
             $text1 = 'Привет,';
             $text2 = ' Мир!';
             echo "<br/>{$text1}{$text2}";
             echo '<hr />';
        // Задание №5
             echo '<strong>Задание №5</strong>';
             $name = 'Сергей';
             echo "<br/>Привет, {$name}!";
             echo '<hr />';
        // Задание №6
             echo '<strong>Задание №6</strong>';
             $num = '12345';
             $a6 = $num[0];
             $b6 = $num[1];
             $c6 = $num[2];
             $d6 = $num[3];
             $e6 = $num[4];
             $sum6 = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
             echo "<br/>Сумма цифр числа {$num} равна: {$sum6}.";
             echo '<hr />';
        // Задание №7
             echo '<strong>Задание №7</strong>';
             $today = getdate();
             echo '<br/>';
             print_r($today);
             $secondsMinutes = $today[minutes] * 60;
             $secondsHours = $today[hours] * 3600;
             $secondsMDay = $today[mday] * 24 * 3600;
             $NYear = $today[year] - 2000;
             $secondsYear = ($NYear * 365 + intdiv($NYear, 4)) * 24 * 3600;
             $sumSeconds = $secondsYear + $secondsMDay + $secondsHours + $secondsMinutes + $today[seconds];
             echo "<br/>С начала 2000 года прошло {$sumSeconds} секунд.";
             echo '<hr />';
    ?>
</body>
</html>
