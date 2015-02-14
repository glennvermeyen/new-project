<?php
$currentpage = basename($_SERVER["PHP_SELF"]);

$autoload = __DIR__ . "../vendor/autoload.php";

if (file_exists ( $autoload )) { require_once($autoload); }

?>

<?php require_once("../elixir.php"); ?>

<!doctype html>
<html lang="en" class="nav-no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>title</title>
    <link rel="stylesheet" href="<?= elixir("css/styles.css") ?>">
    <link type="image/x-icon" href="favicon.ico" rel="icon"></link>
    <link type="image/x-icon" href="favicon.ico" rel="shortcut icon"></link>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet'>
</head>
<body>

<header>
    <div class="nav_bar">

    </div>
</header>