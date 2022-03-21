<?php
    
    require_once '../core/core.php';
    require_once './functions.php';
    require_once './header.php';

    if (!empty($_GET['article'])) {

        $categoriesId = $_GET['article'];
    }
?>

<section class="promo">
    <div class="container">
        <div class="promo__content">
            <?php
            $result = getIdCategories($mysqli, $categoriesId);
            $row = mysqli_fetch_row($result);
            ?>
            <h3>Posts of category: <?php echo ' ' . $row[1]; ?></h3>
            <ul> 
                <?php
                    $result = getPostOfCategories($mysqli, $categoriesId);

                    if ($result) {
                        while ($row = mysqli_fetch_row($result)) { ?>
                            <li><a href="./detail.php?article=<?php echo $row[0] ?>"><?php echo $row[1] ?></a>
                            </li><?php
                        }
                    }?>
            </ul>
        </div>
    </div>
</section>

<?php 
require_once './footer.php';




