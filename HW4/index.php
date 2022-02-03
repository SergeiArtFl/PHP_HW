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
        // Задание №11
             echo '<strong>Задание №11</strong>';
             $arr11 = [4, [2,1], 5, [5,3,4], 10];
             $sum11 = 0;
             for ($i = 0; $i < count($arr11); $i++){
                if(is_array($arr11[$i])){
                    for($j = 0; $j < count($arr11[$i]); $j++){
                        $sum11 += $arr11[$i][$j];
                    }
                } else $sum11 += $arr11[$i];
             }
             echo '<br/>Сумма элементов массива равна: ' . $sum11;
             echo '<hr />';
         // Задание №12
         echo '<strong>Задание №12</strong>';
         $array = array(1,1,1,2,2,2,2,3);
         foreach ($array as $k => $v) {
            if (isset($check)) {
               if ($check === $v) {
                   unset($array[$k]);
               }
            }
            $check = $v;
         }
         $result = array_values($array);
         echo '<br/><pre>' . print_r($array, true) . '</pre>';
         echo '<hr />';
         // Задание №13
         echo '<strong>Задание №13</strong>';
         $arr13 = [
            'index' => 'Home',
            'about' => 'About',
            'services' => 'Services',
            'catalog' => 'Catalog',
            'contacts' => 'Contacts'
         ];
         echo '<ul>';
         foreach($arr13 as $k => $v){
            echo '<li><a href="' . $k .'.php">' . $v . '</a></li>';
         }
         echo '</ul>';
         echo '<hr />';
         // Задание №14
         echo '<strong>Задание №14</strong>';
         function func_14($n14=10){
            echo '<div style="background-color: black; width: 1280px; height: 500px; position: relative">';
            for($i = 1; $i <= $n14; $i++) {
                $z = rand (10, 70);
                $x = rand(0, (1280-$z));
                $y = rand(0, (500-$z));
                echo '<div style="background-color: red; width: '. $z .'px; height: '. $z .'px; position: absolute; margin-left: '. $x .'px; margin-top: '. $y .'px; border: 1px solid green">';
                echo '</div>';
             }
            echo '</div>';
         }
         func_14();
         echo '<hr />';
        // Задание №15
        echo '<strong>Задание №15</strong>';
        function func_15($str15='1234567890123451234567'){
            $arr15 = [];
            $pos = 0;
            $col = 1;
            for ($i = 0; $i < mb_strlen($str15); $i++){
                $a15 = mb_substr($str15, $pos, $col);
                array_push($arr15, $a15);
                $col += 1;
                $pos = $pos + $col - 1;
                if ($pos >= (mb_strlen($str15)-($col-1))) break;  
            }  
            echo '<br/><pre>' . print_r($arr15, true) . '</pre>';
        }    
        func_15('ffvvfh6668n89ngппвпккера'); 
        echo '<hr />';
        // Задание №16
        echo '<strong>Задание №16</strong>';
        function func_16($arr16 = [1,2,3,0,3,4,5,0,6,7]){
            $arr16_key = array_keys($arr16, 0);
            //echo '<br/><pre>' . print_r($arr16_key, true) . '/<pre>';
            if (count($arr16_key) < 2) echo '<br/>0';
            for ($i = 0; $i <  $arr16_key[0]; $i++) {
                unset($arr16[$i]);
            }
            //echo '<br/><pre>' . print_r($arr16, true) . '/<pre>';
            for ($i = (count($arr16) +  $arr16_key[0] - 1); $i >  $arr16_key[count($arr16_key) - 1]; $i--) {
                unset($arr16[$i]);
            }
            //echo '<br/><pre>' . print_r($arr16, true) . '/<pre>';
            $sum_arr16_zero = array_sum($arr16);
            return $sum_arr16_zero;
        }
        echo 'Сумма элементов массива между первым и последним нулями: ' .func_16();
        echo '<hr />';
        // Задание №17  
        echo '<strong>Задание №17</strong>';
        function rand_color (){
            $rand = str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);
            return '#' . $rand;
        }
        echo '<br/>Случайный цвет: ' . rand_color ();
        echo '<div style="background-color: '. rand_color () .'; width: 50px; height: 50px; "></div>';
        echo '<hr />';
        // Задание №18
        echo '<strong>Задание №18</strong>';
        $str18 = '332 441 550';
        $result18 = preg_replace("/[0-9]{2}/", "!", $str18);
        echo '<br/> Результат удаления всех идущих подряд одинаквых цифр: ' . $result18;
        echo '<hr />';
         // Задание №19
         echo '<strong>Задание №19</strong>';
        //Международный формат
        function func_mult ($tel_mult = '+375297901402'){
            $result_mult = "/^\+[1-9]{1}[0-9]{0,3}[0-9]{2,4}[1-9]{1}[0-9]{5,6}$/";
            preg_match($result_mult, $tel_mult, $matches);
            if(!empty($matches)) return 'true';
            else return 'false';
        }
        //Упрощенный вариант
        function func_easy ($tel_easy = '1234567'){
            $result_easy = "/^[1-9]{1}[0-9]{5,6}$/";
            preg_match($result_easy, $tel_easy, $matches);
            if(!empty($matches)) return 'true';
            else return 'false';
        }
          //Упрощенный вариант+код
          function func_easyCod ($tel_easyCod = '80123412345'){
            $result_easyCod= "/^8[0]{1}[1-9]{3,4}[1-9]{1}[0-9]{5,6}$/";
            preg_match($result_easyCod, $tel_easyCod, $matches);
            if(!empty($matches)) return 'true';
            else return 'false';
        }
        echo '<br/>Международный формат: ' . func_mult();;
        
        echo '<br/>Простой номер без кода: ' .  func_easy();;
 
        echo '<br/>Простой номер с кодом: ' . func_easyCod();;
        
        echo '<hr />';
         // Задание №20 (не стал замораиваться)
         echo '<strong>Задание №20</strong>';
        $email = "sergeiand13@gmail.com";
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<br/>Адрес указан корректно.";
        }else{
        echo "<br/>Адрес указан не правильно.";
        }
    ?>
</body>
</html>