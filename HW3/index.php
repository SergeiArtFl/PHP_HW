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
            function func_1 ($a1){
               echo '<br/>' . $a1**3;
            }
            func_1 (3);
            echo '<hr />';
        // Задание №2
            echo '<strong>Задание №2</strong>';
            function func_2 ($a2, $b2){
               echo '<br/>' . ($a2+$b2);
            }
            func_2 (3, 10);
            echo '<hr />';
        // Задание №3
            echo '<strong>Задание №3</strong>';
            function func_3 ($a3){
              switch ($a3) {
                 case 1: echo '<br/>Понедельник';
                 break;
                 case 2: echo '<br/>Вторник';
                 break;
                 case 3: echo '<br/>Среда';
                 break;
                 case 4: echo '<br/>Четверг';
                 break;
                 case 5: echo '<br/>Пятница';
                 break;
                 case 6: echo '<br/>Суббота';
                 break;
                 case 7: echo '<br/>Воскресенье';
                 break;
                 default: echo '<br/>Ошибка ввода';
              }
            }
            func_3 (2);
            echo '<hr />';
        // Задание №4
             echo '<strong>Задание №4</strong>';
             function func_4 ($a4){
              echo ($a4 < 0) ? '<br/> true' : '<br/> false';
            }
            func_4 (5);
             echo '<hr />';
        // Задание №5
             echo '<strong>Задание №5</strong>';
             function getDigitSum ($a5){
               $a5 = (string)$a5;
               $sum = 0;
               for($i = 0; $i < strlen($a5); $i++){
                  $sum += $a5[$i];
               }
               return $sum;
             }
             echo '<br/>' . getDigitSum (12345);
             echo '<hr />';
        // Задание №6
             echo '<strong>Задание №6</strong>';
             function func_6 (){
               echo '<br/> Список лет от 1 до 2020, в которых сумма цифр равна 13: ';
               for ($i = 1; $i < 2021; $i++){
                  $result = getDigitSum ($i);
                  if ($result == 13) {
                     echo $i . ' ';
                  }
               }
             }
             func_6 ();
             echo '<hr />';
        // Задание №7
             echo '<strong>Задание №7</strong>';
             function isEven ($a7){
               echo (!($a7 % 2)) ? '<br/> true' : '<br/> false';
             }
             isEven (8);
             echo '<hr />';
         // Задание №8 
            echo '<strong>Задание №8</strong>';
                  function translit($textForTranslit){
                     $arr_rus=['а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ь','ы','ъ','э','ю','я',' '];
                     $arr_lat=['a','b','v','g','d','e','jo','zh','z','i','j','k','l','m','n','o','p','r','s','t','u','f','h','cz','ch','sh','shh','`','y','``','e`','yu','ya',' '];
                     $arr_translit = array_combine($arr_lat,$arr_rus); // создаем массив в котором $arr_lat - ключ, а $arr_rus - значение
                     
                     $n = strlen($textForTranslit); //определяем длину строки введенного текста
                     $arr_translit_text = [];
                     for ($i = 0; $i < $n; $i++){
                        $simvol = mb_substr ($textForTranslit,$i,1); //берем один символ из строки
                        $simvol_trans = array_search ($simvol,$arr_translit); //ищем этот символ в массиве транслитерации и возвращаем КЛЮЧ, а ключ и есть транлитированный символ
                        if ($simvol_trans == false) {
                            $simvol_trans = $simvol;
                        } // оставляем символы, которых нет в массиве в том же виде.
                        array_push($arr_translit_text, $simvol_trans);//добавляем в пустой массив транслитированный символ
                     }

                     $translit_1 = implode($arr_translit_text); // преобразуем массив в строку
                     return $translit_1;
                  }   
            echo '<form method="post" action="index.php">
                  <p><input name="text"></p>
                  <p><button type="submit" name="send" value="test">Go translit</button></p>
                  </form>';      
            //var_dump ($_POST['text']);
            echo '<br><br>';
            if(!empty($_POST['text'])) { // проверяем введен ли текст, вызываем функцию для обработки и возвращаем транслитированный
               echo 'Введенный текст для транслитерации - '.$text_for_translit = mb_strtolower ($_POST['text'],'utf-8'); // приводим все буквы к строчным.
               echo '<br><br>';
               $translit_1 = translit($text_for_translit);
            }
               else echo 'Текст для транлитерации не введен'; 
            echo '<br>';
            echo 'Транслитированный текст - '. $translit_1;
             echo '<hr />';
        // Задание №9
             echo '<strong>Задание №9</strong>';
             function func_9 ($n9, $a9 = 'яблоко', $b9 = 'яблока', $c9 = 'яблок'){
               if (($n9 >= 5 && $n9 < 21) || ($n9 % 10 >= 5) || ($n9 % 10 == 0)) echo '<br>' . $n9 . ' ' . $c9;
               elseif ($n9 % 10 == 1) echo '<br>' . $n9 . ' ' . $a9;
               elseif ($n9 % 10 > 1 && $n9 % 10 < 5) echo '<br>' . $n9 . ' ' . $b9;
             }
             func_9 (19);
             echo '<hr />';
        // Задание №10 
             echo '<strong>Задание №10</strong>';
             function func_10 ($arr, $i = 0){
               if (!empty($arr[$i])){
                  echo '<br>' . $arr[$i];
                  $i++;
                  func_10 ($arr, $i);
               }
             }
             func_10([3,4,5,5,6,7,9,8]);
             echo '<hr />';
         // Задание №11 
         echo '<strong>Задание №11</strong>';
         function func_11 ($a11){
            $result = getDigitSum ($a11);
            if ($result > 9) {
               func_11 ($result);
            } else echo '<br>Результат: ' . $result;
         }
         func_11(559);
         echo '<hr />';
         // Задание №12 
         echo '<strong>Задание №12</strong>';
         function func_12 ($km = 0, $hour = 0){
            $speed_km_ch = $km / $hour;
            $speed_m_min = $speed_km_ch / 3.6;
            echo '<br>Скорость движения машины: ' . round($speed_km_ch,1) . 'км/ч (' . round($speed_m_min,1) . 'м/с ).';
         }
         func_12(100, 1.1);
         echo '<hr />';
         // Задание №13 работает только с латиницей
         echo '<strong>Задание №13</strong>';
         function func_13 ($w1, $w2){
            $length_w1 = mb_strlen($w1);
            $length_w2 = mb_strlen($w2);
            for ($i = 0; $i < $length_w2; $i++){
               for ($j = 0; $j < $length_w1; $j++){
                  if ($w2[$i] == $w1[$j]){
                     $w2[$i] = 1;
                  }
               }
            }
            if (is_numeric($w2)){
               echo '<br>Можно составить слово!';
            } else{
               echo '<br>Нельзя составить слово!';
            }
            //print_r($w2); 
         }
         func_13('fkgyskb', 'byk');
         echo '<hr />';
          // Задание №14 работает только с латиницей
          echo '<strong>Задание №14</strong>';
          function func_14 ($a14){
             $revers = strrev($a14);
             if ($a14 == $revers) echo '<br>Это палиндром!';
             else echo '<br>Это не палиндром!';
          }
          func_14('sunus');
          echo '<hr />';
           // Задание №15 
           echo '<strong>Задание №15</strong>';
           function func_15 ($n_str = 10, $n_ctolb = 10){
            // $n_str = 10;  количество строк, tr
            // $n_ctolb = 10; количество столбцов, td
            
            echo '<table border="1"; style = "background-color: lightblue;">';
            
            for ($tr = 1; $tr <= $n_str; $tr++){ 
                echo '<tr>';
                for ($td = 1; $td <= $n_ctolb; $td++){ 
                    echo '<td>'. $tr*$td .'</td>';
                }
                echo '</tr>';
            }
            
            echo '</table>';
           }
           func_15();
           echo '<hr />';
            // Задание №16 
          echo '<strong>Задание №16</strong>';
          function func_16 ($a16){
            $arr_16 = explode(" ", $a16);
            $n_16 = count($arr_16);
            $max_16 = mb_strlen($arr_16[0]);
            for($i = 1; $i < $n_16; $i++){
               if ($max_16 < mb_strlen($arr_16[$i])) {
                  $max_16 = mb_strlen($arr_16[$i]);
                  $result = $arr_16[$i];
               }
            }
            return  $result;
          }
          echo '<br>Самое длинное слово в строке: ' . '"' .func_16('Найдём самое длинное из перечисленных') . '"';
          echo '<hr />';
           // Задание №17 
           echo '<strong>Задание №17</strong>';
           function func_17 ($a17 = 1, $b17 = 100){
         
            $sum_17 = 0;
            for ($i = $a17; $i <= $b17; $i++){
               for($j = 0; $j < mb_strlen((string)$i); $j++){
                  $i = (string)$i;
                  if ($i[$j] === '1'){
                     $sum_17++;
                  }
               }
            }
            echo '<br>Суммарное количество единиц в числах от ' . $a17 . ' до ' . $b17 . ' равно: ';
            return $sum_17;
           }
           echo func_17(1,12);
           echo '<hr />';
            // Задание №18 
          echo '<strong>Задание №18</strong>';
          function func_18 ($a18, $n18){
            $result = '';
            $l_str = mb_strlen($a18);
            if ($l_str > $n18){
               for ($i = 1; $i <= $l_str; $i++){
                  $a18_i = mb_substr($a18, ($i-1), 1);
                  for($j = 1; $j <= intdiv($l_str,$n18); $j++){
                     if ($i == $n18*$j) $a18_i .= '<br>';
                     if ($i[($n18*$j+1)] === ' ') $a18_i .= '';
                  }
                  $result .= $a18_i;
               }     
            }
            return  $result;
          }
          echo '<br>Результат: <br>' .func_18('fghjfhg qWjfjtrgjv nrkhgkjhg khrkhg kjgkrhg sk rit', 10);
          echo '<hr />';
    ?>
</body>
</html>