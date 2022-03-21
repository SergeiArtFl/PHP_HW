<?php
 require_once '../core/core.php';
 require_once './functions.php';
 require_once './header.php';

 //posts
$result = getMaxId($mysqli);
$row = mysqli_fetch_row($result);
$idPosts = $row[0] +1;
$active = 1;
$title = $_POST['title'];
$codePosts = 'post_' . $idPosts;
$content = $_POST['content'];
$datePosts = date('Y-m-d H:i:s');

//categories
$result = getMaxIdCategory($mysqli);
$row = mysqli_fetch_row($result);
$categoryId = $row[0] +1;
$categoryName = $_POST['category_name'];
$categoryCode = $categoryName . "_" . ($categoryId)%10;

//author
$result = getMaxIdAuthor($mysqli);
$row = mysqli_fetch_row($result);
$authorId = $row[0] +1;
$authorName = $_POST['author_name'];

// echo 'posts<br><br>' . $idPosts . '<br>' . $active .'<br>' . $title . '<br>' . $codePosts . '<br>' .$content . '<br>' . $datePosts . '<br><br>categories<br>' . '<br>' . $categoryId . '<br>' . $categoryName . '<br>' . $categoryCode . '<br><br>author<br><br>' . $authorId . '<br>' .$authorName;
 
$result = writeDataToDb($idPosts, $active, $title, $codePosts, $content, $datePosts, $categoryId, $categoryName, $categoryCode, $authorId, $authorName, $mysqli);

?>

<section class="promo">
    <div class="container">
        <div class="promo__content">
            <?php if ($result == true)?>
            <h3> Success, data entered into the database!</h3>
        </div>
    </div>
</section>

 <?php require_once './footer.php';
