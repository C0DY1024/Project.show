<?php
require_once 'php/db.php';
require_once 'php/function.php';
$article = get_article($_GET['i']);
?>



<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $article['title'];?></title>
    <meta name="description" content="公司網站">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include_once 'php/menu.php'; ?>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                   <h1><?php echo $article['title'];?></h1>
                   <hr>
                   <?php echo $article['content'];?>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'php/footer.php'; ?>

</body>
</html>