<?php
    
    require_once '../core/core.php';
    require_once './functions.php';
    require_once './header.php';

    if (!empty($_GET['article'])) {

        $code = $_GET['article'];
    
        $result = getCode($mysqli, $code);
    
        $row = mysqli_fetch_row($result);
    
        // echo '<pre>';
        // print_r($row);
        // echo '</pre>';
    
        $result = getIdAuthor($mysqli, $row[6]);
    
        $row1 = mysqli_fetch_row($result);
    
        // echo '<pre>';
        // print_r($row1);
        // echo '</pre>';
    
        $result = getIdCategories($mysqli, $row[5]);
    
        $row2 = mysqli_fetch_row($result);
    
        // echo '<pre>';
        // print_r($row2);
        // echo '</pre>';
    
    }
?>

<section class="promo">
    <div class="container">
        <div class="content">
            <h3><?php echo $row[2];?></h3>
            <p><?php echo $row[4];?></p>
            <p class="author"><?php echo 'Author: ' . $row1[1] . '<br>Date: ' .  $row[7];?></p>
        </div>     
    </div>
</section>

<?php

require_once './footer.php';