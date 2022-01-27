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
               echo '<br/>Сумма цифр числа ' . $a5 . ' равна: ' . $sum; // почему не работает?
             }
             getDigitSum (12345);
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
         // Задание №8 не рботает
            echo '<strong>Задание №8</strong>';
                  function translit($textForTranslit){
                     $arr_rus=['а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ь','ы','ъ','э','ю','я',' '];
                     $arr_lat=['a','b','v','g','d','e','jo','zh','z','i','j','k','l','m','n','o','p','r','s','t','u','f','h','cz','ch','sh','shh','`','y','``','e`','yu','ya',' '];
                     $arr_translit = array_combine($arr_lat,$arr_rus); // создаем массив в котором $arr_lat - ключ, а $arr_rus - значение
                     
                     $n = strlen($textForTranslit); //определяем длину строки введенного текста
                     for ($i = 0; $i < $n; $i++){
                        $simvol = substr ($textForTranslit,$i,1); //берем один символ из строки
                        $simvol_trans = array_search ($simvol,$arr_translit); //ищем этот символ в массиве транслитерации и возвращаем КЛЮЧ, а ключ и есть транлитированный символ
                        // if ($simvol_trans == false) {
                        //    $simvol_trans = $simvol;
                        // } // оставляем символы, которых нет в массиве в том же виде.
                        $arr_translit_text = [];
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
    ?>
</body>
</html>
