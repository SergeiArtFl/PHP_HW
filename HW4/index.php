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
            $str1 = 'london is the capital of great britain';
            echo '<br/>' . ucwords($str1);
            echo '<hr />';
        // Задание №2
            echo '<strong>Задание №2</strong>';
            $str2 = 'html <b>css</b> php';
            $str2 = strip_tags($str2);
            $arr2 = explode(" ", $str2);
            echo '<br/><pre>' . print_r($arr2, true) . '</pre>';
            echo '<hr />';
        // Задание №3
            echo '<strong>Задание №3</strong>';
            $str3 = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil ratione vero quo officiis, maiores asperiores hic deleniti natus iste tenetur.';
            echo '<br/>До: ' .  $str3 . '<br/>После: ' . str_shuffle($str3);
            echo '<hr />';
        // Задание №4
             echo '<strong>Задание №4</strong>';
             function func_4 (){
                if (date("t") == 31){
                   $end = ' день.';
                } else $end = ' дней.';
              echo '<br/>В текущем месяце ' . date("t") .$end;
            }
            func_4 ();
             echo '<hr />';
        // Задание №5 timestamp?
             echo '<strong>Задание №5</strong>';
             echo '<br/>' . date("Y-m-d") . '<br/>' . date("d.m.Y") . '<br/>' . date("d.m.y") . '<br/>' . date("H:i:s");
             echo '<hr />';
        // Задание №6
             echo '<strong>Задание №6</strong>';
             $date = date("Y-m-d");
             echo '<br/> Текущая дата: ' . $date . '<br/> +2 дня: ' . date("Y-m-d", strtotime('+2 day')) . '<br/> +1 месяц и 3 дня: ' . date("Y-m-d", strtotime('+1 mounth 3 day')) . '<br/> +1 год: ' . date("Y-m-d", strtotime('+1 year')) . '<br/> -3 дня: ' . date("Y-m-d", strtotime('-3 day'));
             echo '<hr />';
        // Задание №7
             echo '<strong>Задание №7</strong>';
             $str7 = '1a2b3c4b5d6e7f8g9h0';
	          $result7 = preg_replace("/[0-9]/", "", $str7);
             echo '<br/> Результат удалния всех цифр из строки: ' . $result7;
             echo '<hr />';
         // Задание №8 
            echo '<strong>Задание №8</strong>';
            echo '<br/>Максимальное число: ' . max(4,-2,5,19,-130,0,10);
            echo '<br/>Минимальное число: ' . min(4,-2,5,19,-130,0,10);
             echo '<hr />';
        // Задание №9
             echo '<strong>Задание №9</strong>';
             echo '<br/>Случайное число от 1 до 100: ' . rand(1, 100);
             echo '<hr />';
        // Задание №10 
             echo '<strong>Задание №10</strong>';
             $arr10 = [
                1 => 'Понедельник',
                2 => 'Вторник',
                3 => 'Среда',
                4 => 'Четверг',
                5 => 'Пятница',
                6 => 'Суббота',
                7 => 'Воскресенье'
             ];
             echo '<br/>Текущий день недели: ' . $arr10[date("N")];
             echo '<hr />';
        
    ?>
</body>
</html>