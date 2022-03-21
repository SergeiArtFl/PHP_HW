<?php

function preview($dbConnect)
{
    $size_page = 6; // кол-во записей
    $query = "SELECT * FROM posts ORDER BY id DESC LIMIT $size_page"; //  - вывод 6ти последних записей
    $res_data = mysqli_query($dbConnect,$query);

    return $res_data;
}

function paginator($dbConnect)
{
    if (isset($_GET['page'])) {
        $pageno = $_GET['page'];
    } else {
        $pageno = 1;
    }
    $size_page = 6; // кол-во записей на станице
    $offset = ($pageno-1) * $size_page;

   

    $total_pages = "SELECT COUNT(*) FROM posts";
    $result = mysqli_query($dbConnect,$total_pages); 
    $total_rows = mysqli_fetch_array($result)[0]; // кол-во записей в таблице 
    $total_pages = ceil($total_rows / $size_page); // кол-во страниц 

    $query = "SELECT * FROM posts LIMIT $size_page OFFSET  $offset"; // ORDER BY id DESC - обратный порядок вывода записей
    $res_data = mysqli_query($dbConnect,$query);
    
    
    return [$res_data, $total_pages, $pageno];
    
}

function writeDataToDb($idPosts, $active, $title, $codePosts, $content, $datePosts, $categoryId, $categoryName, $categoryCode, $authorId, $authorName, $dbConnect)
{
   
    $query = "INSERT INTO categories (id, name, code) VALUES ";
    $values = "(" . $categoryId . ", '" . $categoryName . "', '" . $categoryCode . "')";
    $query .= $values;
    // echo  '<br>' . $query;
    $result = mysqli_query($dbConnect, $query) or die("SQL: insert Error 2!");

    $query = "INSERT INTO authors (id, name) VALUES ";
    $values = "(" . $authorId . ", '" . $authorName . "')";
    $query .= $values;
    // echo  '<br>' . $query;
    $result = mysqli_query($dbConnect, $query) or die("SQL: insert Error3!");

     //posts
     $query = "INSERT INTO posts (id, active, title, code, content, category_id, author_id, date) VALUES ";
     $values = "(" . $idPosts . ",'" . $active . "', '" . $title . "', '" . $codePosts . "', '" . $content . "', " . $categoryId . ", " . $authorId . ", '" .$datePosts . "')";
     $query .= $values;
     // echo  $query;
     $result = mysqli_query($dbConnect, $query) or die("SQL: insert Error 1!");

     return 1;
}


function getCategories ($dbConnect)
{
    $query = "SELECT * FROM categories";
    $result = mysqli_query($dbConnect, $query) or die("SQL:getGategories Error!" . __FILE__ . " " . __LINE__);

    return $result;
}

function getPostOfCategories ($dbConnect, $categoriesId)
{
    $query = "SELECT code, title FROM posts WHERE posts.category_id = {$categoriesId}";
    $result = mysqli_query($dbConnect, $query) or die("SQL: getPostOfCategories Error!" . __FILE__ . " " . __LINE__);

    return $result;
}

function getPosts($dbConnect)
{
    $query = "SELECT * FROM posts";
    $result = mysqli_query($dbConnect, $query) or die("SQL: getPosts Error!" . __FILE__ . " " . __LINE__);

    return $result;
}

function getMaxId($dbConnect)
{
    $query = "SELECT max(id) FROM posts";
    $result = mysqli_query($dbConnect, $query) or die("SQL: getMaxId Error!" . __FILE__ . " " . __LINE__);

    return $result;
}

function getMaxIdCategory($dbConnect)
{
    $query = "SELECT max(id) FROM categories";
    $result = mysqli_query($dbConnect, $query) or die("SQL: getMaxIdCategory Error!" . __FILE__ . " " . __LINE__);

    return $result;
}

function getMaxIdAuthor($dbConnect)
{
    $query = "SELECT max(id) FROM authors";
    $result = mysqli_query($dbConnect, $query) or die("SQL: getMaxIdAuthor Error!" . __FILE__ . " " . __LINE__);

    return $result;
}

function getCode($dbConnect, $code)

{
    $query = "SELECT * FROM posts WHERE CODE = '{$code}'";
    $result = mysqli_query($dbConnect, $query) or die("SQL: getCode Error!" . __FILE__ . " " . __LINE__);

    return $result;
}

function getIdAuthor($dbConnect, $authorId)

{
    $query = "SELECT * FROM authors WHERE ID = {$authorId}";
    $result = mysqli_query($dbConnect, $query) or die("SQL: getIdAutho Error!" . __FILE__ . " " . __LINE__);

    return $result;
}

function getIdCategories($dbConnect, $categoriesId)

{
    $query = "SELECT * FROM categories WHERE ID = {$categoriesId}";
    $result = mysqli_query($dbConnect, $query) or die("SQL:  getIdCategories Error!" . __FILE__ . " " . __LINE__);

    return $result;
}