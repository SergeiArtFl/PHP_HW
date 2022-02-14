<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

function valid($arr){
    $tel = $arr['phone'];
    $mail = $arr['email'];
    // echo $tel. '<br>';
    // echo $mail;
    $result_tel= "/^\+375[0-9]{2,3}[1-9]{1}[0-9]{6}$/";
    preg_match($result_tel,  $tel, $matches);
    if( (!empty($matches)) && (filter_var($mail, FILTER_VALIDATE_EMAIL)))  
        return 'true';
    else 
        return 'false';
} 
if (valid($_POST) == 'true'){
    sleep(5);
    header('Location: ./page.php'); 
    exit;
    
} else{
    header('Location: ./page.php?id=contact');
}
// valid($_POST);
// header('Location: ./page.php');
