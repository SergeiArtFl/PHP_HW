<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet"  href="css/media.css">
    <title>HW5</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="flex">
                <div class="logo">
                    <ul>
                        <li><a class="logo_bg" href="./index.php"><span class="logo"></span></a></li>
                        <li><span>Treehouse</span></li>
                    </ul>
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="./index.php" >Home</a></li>
                        <?php require_once './pagesData.php';
                        if (!empty($pagesData)):
                            foreach ($pagesData as $id => $page): ?>
                            <li><a href="./page.php?id=<?php echo $id ?>"><?php echo $page['name'] ?></a></li>
                        <?php endforeach;
                        endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>