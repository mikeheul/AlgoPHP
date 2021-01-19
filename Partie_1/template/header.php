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
        <title>EXO PHP 1</title>
    </head>
    <body>
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-center">
                
                <ul class="uk-navbar-nav">
                    <li><a class="uk-navitem" href="../Partie_1/exo01.php">Partie 1</a></li>
                    <a class="uk-navbar-item uk-logo uk-navitem" href="#">ALGO_PHP</a>
                    <li><a class="uk-navitem" href="../Partie_2/exo01.php">Partie 2</a></li>
                </ul>
            </div>
        </nav>
        <main class="">
            <div id="exos">
                <h1 class="white">Exos</h1>
                <ul>
                <?php
                    foreach(range(1,15) as $exo) {
                        $num = ($exo < 10) ? "0".$exo : $exo ?> 
                        <li><span class="white" uk-icon="file-text"></span> <a href="./exo<?= $num ?>.php">Exo <?= $num ?></a></li>
                <?php } ?>
                </ul>
            </div>
            <div>
    
