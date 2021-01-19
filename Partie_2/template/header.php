<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/css/uikit.min.css" />
        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit-icons.min.js"></script>
        <link rel="stylesheet" href="template/css/style.css">
        <title>EXO PHP 2</title>
    </head>
    <body>
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-center">
                <ul class="uk-navbar-nav">
                    <li><a href="../Partie_1/exo01.php">Partie 1</a></li>
                    <a class="uk-navbar-item uk-logo" href="#">ALGO_PHP</a>
                    <li><a href="../Partie_2/exo01.php">Partie 2</a></li>
                </ul>
            </div>
        </nav>
        <main class="">
            <div id="exos">
                <h1 class="white">Exos</h1>
                <ul>
                <?php
                    $nums = ["01","02","03","04","05","06","07","08","09","10","11","12","13-14","15"];

                    foreach($nums as $exo) { ?>
                        <li><span class="white" uk-icon="file-text"></span> <a href="./exo<?= $exo ?>.php">Exo <?= $exo ?></a></li>
                <?php } ?>
                </ul>
            </div>
            <div id="content">

    
    
