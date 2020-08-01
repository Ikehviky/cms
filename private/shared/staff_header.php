<?php 
    if(!isset($page_title)){ $page_title = 'Staff Area'; }

    db_connect($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('/stylesheet/style.css');?>">
    <title>GBI - <?= h($page_title); ?></title>
</head>
<body>
    <header>
        <h1>Globe: Bank</h1>
    </header>

    <nav>
    <ul>
        <li><a href="<?php echo url_for('/assets/index.php');?>">Menu</a></li>
    </ul>
    </nav>