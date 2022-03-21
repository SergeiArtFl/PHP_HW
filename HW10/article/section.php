<?php
    
    require_once '../core/core.php';
    require_once './functions.php';
    require_once './header.php';
    
?>

<section class="promo">
    <div class="container">
        <div class="promo__content">
            <h3>All posts</h3>
            <ul> 
                <?php
                    $result = paginator($mysqli);

                    if ($result) {
                        while ($row = mysqli_fetch_row($result[0])) { ?>
                        <li><a href="./detail.php?article=<?php echo $row[3] ?>"><?php echo $row[2] ?></a>
                        </li><?php
                        }
                    }
                ?>
            </ul>
        </div>
        <div class="pagination">
            <ul>
                <?php if ($result[1] > 1){ 
                            for ($i=1; $i <= $result[1]; $i++){?>
                            <li><a <?php if($result[2]==$i){echo 'style="background-color: #777777;"';}?>href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php       }
                        }?>    
            </ul>
        </div>
    </div>
</section>


<?php 
require_once './footer.php';




