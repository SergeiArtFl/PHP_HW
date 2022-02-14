<?php
require_once './header.php';
require_once './pagesData.php';
?>

<?php if (!empty($_GET['id']) && !empty($pagesData) && !empty($pagesFooterData)):
    $namePage = $pagesData[$_GET['id']];
    $nameFootPage = $pagesFooterData[$_GET['id']];
?>
   <section class="universal">
        <div class="container">
            <div class="uni_block">
                <h2><?php echo $namePage['name'] ?></h2>
                <h2><?php echo $nameFootPage['pole'] ?></h2>
                <?php if ($namePage['name'] == 'Contact'){
                require_once './contactForm.php';
                }?>
            </div>
        </div>
    </section> 
               
<?php endif; 
require_once './footer.php';