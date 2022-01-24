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
            // $a = '';
            // $a = 1;
            //  $a = 3;
            // $a = -3;
            // $a = 0;
            // $a = null;
            // $a = true;
            // $a = false;
            // $a = '0';
            // var_dump($a);
            if ($a == '') {
                echo '<br/>Верно';
            } else {
                echo '<br/>Неверно';
            }
            echo '<hr />';
        // Задание №2
            echo '<strong>Задание №2</strong>';
            $a2 = 123;
            $a2 =(string)$a2;
            $a2[1] = 0;
            $a2 =(int)$a2;
            // var_dump($a2);
            echo "<br/>Результат: {$a2}.";
            echo '<hr />';
        // Задание №3
            echo '<strong>Задание №3</strong>';
            $a3 = 1;
            $b3 = 3;
            // $a3 = 0;
            // $b3 = 6;
            // $a3 = 3;
            // $b3 = 5;
            if ($a3 <= 1 && $b3 >= 3){
                $result = $a3 + $b3; 
                echo "<br/>Результат: {$result}.";
            } else{
                $result = $a3 - $b3;
                echo "<br/>Результат: {$result}.";
            }
            echo '<hr />';
        // Задание №4
             echo '<strong>Задание №4</strong>';
             $str4 = 'abcde';
             if ($str4[0] == 'a'){
                 echo '<br/>Да';
             } else {
                echo '<br/>Нет';
             }
             echo '<hr />';
        // Задание №5
             echo '<strong>Задание №5</strong>';
             $num = '123456';
             if (($num[0] + $num[1] + $num[2]) == ($num[3] + $num[4] + $num[5])) {
                echo '<br/>Да';
             } else {
                echo '<br/>Нет';
             }
             echo '<hr />';
        // Задание №6
             echo '<strong>Задание №6</strong>';
             $a6 = 144;
             if ($a6 < 0){
                echo '<br/>Число должно быть от 0 до 360.';
             } elseif ($a6 >= 0 && $a6 < 30) {
                $minut = ($a6 * 60)/30; 
                echo "<br/>Прошло 0 часов {$minut} минут(а/ы).";
             } elseif ($a6 >= 30 && $a6 < 60) {
                $minut = (($a6-30) * 60)/30; 
                echo "<br/>Прошел 1 час {$minut} минут(а/ы).";
             } elseif ($a6 >= 60 && $a6 < 90) {
                $minut = (($a6-60) * 60)/30; 
                echo "<br/>Прошло 2 часа {$minut} минут(а/ы).";
             } elseif ($a6 >= 90 && $a6 < 120) {
                $minut = (($a6-90) * 60)/30; 
                echo "<br/>Прошло 3 часа {$minut} минут(а/ы).";
             } elseif ($a6 >= 120 && $a6 < 150) {
                $minut = (($a6-120) * 60)/30; 
                echo "<br/>Прошло 4 часа {$minut} минут(а/ы).";
             } elseif ($a6 >= 150 && $a6 < 180) {
                $minut = (($a6-150) * 60)/30; 
                echo "<br/>Прошло 5 часов {$minut} минут(а/ы).";
             } elseif ($a6 >= 180 && $a6 < 210) {
                $minut = (($a6-180) * 60)/30; 
                echo "<br/>Прошло 6 часов {$minut} минут(а/ы).";
             } elseif ($a6 >= 210 && $a6 < 240) {
                $minut = (($a6-210) * 60)/30; 
                echo "<br/>Прошло 7 часов {$minut} минут(а/ы).";
             } elseif ($a6 >= 240 && $a6 < 270) {
                $minut = (($a6-240) * 60)/30; 
                echo "<br/>Прошло 8 часов {$minut} минут(а/ы).";
             } elseif ($a6 >= 270 && $a6 < 300) {
                $minut = (($a6-270) * 60)/30; 
                echo "<br/>Прошло 9 часов {$minut} минут(а/ы).";
             } elseif ($a6 >= 300 && $a6 < 330) {
                $minut = (($a6-300) * 60)/30; 
                echo "<br/>Прошло 10 часов {$minut} минут(а/ы).";
             } elseif ($a6 >= 330 && $a6 < 360) {
                $minut = (($a6-330) * 60)/30; 
                echo "<br/>Прошло 11 часов {$minut} минут(а/ы).";
             } elseif ($a6 == 360) {
                echo "<br/>Прошло 12 часов.";
             } else {
                 echo '<br/>Число должно быть от 0 до 360.';
             }
             echo '<hr />';
        // Задание №7
             echo '<strong>Задание №7</strong>';
             for ($i = 20; $i <= 45; $i++){
                 if(!($i % 5)){
                    $sum7 += $i; 
                 }
            }
             echo '<br/>Сумма чисел равна: ' . $sum7;
             echo '<hr />';
         // Задание №8
             echo '<strong>Задание №8</strong>';
             $a8 = 55675;
             echo "<br/>До: {$a8}.";
             $a8 =(string)$a8;
             for ($i = 0; $i < 5; $i++){
                 if (($i % 2)){
                     $a8[$i] = 0;
                }
             }
             // var_dump($a8);
             $a8 =(int)$a8;
             echo "<br/>После: {$a8}.";
             echo '<hr />';
        // Задание №9
             echo '<strong>Задание №9</strong>';
             echo '<strong><br/>Через while</strong>';
             $a8 = 1000;
             $i = 0;
                while ($a8 >= 50) {
                    $a8 = $a8/2;
                    $i++;
                }
             echo '<br/>Полученное число: ' . $a8;
             echo '<br/>Количство итераций: ' . $i;
             echo '<strong><br/>Через for</strong>';
             $a8 = 1000;
                for ($i = 0; $a8 >= 50; $i++) {
                    $a8 = $a8/2;
                }
             echo '<br/>Полученное число: ' . $a8;
             echo '<br/>Количство итераций: ' . $i;
             echo '<hr />';
        // Задание №10 работат только на латинице
             echo '<strong>Задание №10</strong>';
             $n = 5;
             echo '<br/>';
             for ($i = 1; $i <= $n; $i++){
                 for ($j = 1; $j <= $n; $j++){
                    echo '*' . ' ';
                 }
                 echo '<br/>';
             }
             echo '<hr />';
    ?>
</body>
</html>
