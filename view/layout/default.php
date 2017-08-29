<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Page Description">
    <meta name="author" content="root">
    <title>Gusto - Notez plus précisement un restaurant</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <?= '<link href="' . BASE_URL . DS . 'webroot/css/bootstrap.min.css" rel="stylesheet">' ?>
    <?= '<link href="' . BASE_URL . DS . 'webroot/css/jquery-jvectormap-2.0.3.css" rel="stylesheet">' ?>
    <?= '<link href="' . BASE_URL . DS . 'webroot/css/style.css" rel="stylesheet">' ?>
    <?php
    if (file_exists(ROOT . DS . 'webroot/css/' . $path . '.css')) {
        echo '<link rel="stylesheet" href="' . BASE_URL . DS . 'webroot/css/' . $path . '.css" type="text/css"></script>';
    }

    ?>
    <?= '<script type="text/javascript" src="' . BASE_URL . DS . 'webroot/js/jquery-3.2.1.min.js"></script>' ?>
    <?= '<script type="text/javascript" src="' . BASE_URL . DS . 'webroot/js/bootstrap.min.js"></script>' ?>
    <?= '<script type="text/javascript" src="' . BASE_URL . DS . 'webroot/js/jquery-jvectormap-2.0.3.min.js"></script>' ?>
    <?= '<script type="text/javascript" src="' . BASE_URL . DS . 'webroot/js/jquery-jvectormap-be-mill.js"></script>' ?>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>
<div class="container-fluid bgcolor">
    <?php require(ROOT . DS . "view" . DS . "parts" . DS . "menu.php"); ?>
    <?= $content_layout; ?>
</div>

<?php
if (file_exists(ROOT . DS . 'webroot/js/' . $path . '.js')) {
    echo '<script type="text/javascript" src="' . BASE_URL . DS . 'webroot/js/' . $path . '.js"></script>';
}
?>
</body>
</html>