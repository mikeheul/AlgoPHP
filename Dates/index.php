<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Manipulation de dates en PHP</title>
</head>
<body>
    <main class="uk-container uk-container-expand">

        <?php define("LOCALE_FR", "fr_FR.utf8"); ?>

        <h1><strong>Manipulation de dates en PHP</strong></h1>

        <!-- Exercice 1 -->
        <h3 class="uk-heading-bullet"><strong>Exercice 1 : </strong>Formatage de date (afficher date et heure courante sur le fuseau horaire Europe/Paris)</h3>
        <?php
            date_default_timezone_set('Europe/Paris'); // définir le fuseau horaire de l'utilisateur et pas celui du serveur
            setLocale(LC_ALL, LOCALE_FR);
            $now = new DateTime(); // récupérer la date courante
            var_dump($now);
            $date = strftime("%A %d %B %Y", strtotime($now->format("d-m-Y")));
            echo "<div class='result'>";
                echo "Nous sommes le ". $date . " et il est ". $now->format("H:i"); // formater la date au format jj/mm/aaaa hh:mm
            echo "</div>";
        ?>

        <!-- Exercice 2 -->
        <h3 class="uk-heading-bullet"><strong>Exercice 2 : </strong>Ajout d'un nombre de jours à la date courante</h3>
        <?php
            $now = new DateTime(); // récupérer la date du jour
            $dateFin = clone $now; // cloner l'objet représentent la date du jour
            $nbJours = 5; // nombre de jours à ajouter à la date du jour
            $dateFin = date_add($dateFin, DateInterval::createFromDateString("$nbJours days")); // méthode date_add pour l'ajout du nombre de jour

            echo "<div class='result'>";
                echo "Aujourd'hui : ". $now->format("d-m-Y") ."<br/>";  
                echo "Nombre de jours : $nbJours<br/>";
                echo "Nouvelle date : ". $dateFin->format('d-m-Y') ."<br/>";
            echo "</div>";
        ?>

        <!-- Exercice 3 -->
        <h3 class="uk-heading-bullet"><strong>Exercice 3 : </strong>Ecart entre 2 dates (date de naissance et date courante)</h3>
        <?php
            $dateNaissance = new DateTime("1985-01-17 13:30:00"); // création d'un objet date pour une date précise
            $now = new DateTime(); // récupérer la date du jour
            $interval = $dateNaissance->diff($now); // calculer la différence de date
            var_dump($interval);
            echo "<div class='result'>";
                echo "Date de naissance : ". $dateNaissance->format("d-m-Y")."<br/>";
                echo "Date du jour : ". $now->format("d-m-Y")."<br/>";
                echo "Ecart entre les 2 dates : ". $interval->format("%Y ans %m mois %d jours"); // formater l'affichage de la différence de date en années, mois et jours
            echo "</div>";
        ?>

        <!-- Exercice 4 -->
        <h3 class="uk-heading-bullet"><strong>Exercice 4 : </strong>Afficher tous les lundis du mois courant</h3>
        <?php
            setlocale(LC_ALL, LOCALE_FR); // définir la locale en français
            $now = new DateTime(); // récupérer la date du jour
            $begin = clone $now; // cloner l'objet représentant la date courante
            $begin->modify("first monday of this month"); // récupérer le 1er jour du mois
            $end = $now->modify("last day of this month"); // récupérer le dernier jour du mois
            $interval = DateInterval::createFromDateString('next monday'); // récupérer tous les lundis suivants
            $period = new DatePeriod($begin, $interval, $end);
            var_dump($period);

            echo "<div class='result'>";
                echo "Les lundis du mois courant sont : <br/><ul>";
                foreach ($period as $date) { // boucler sur le tableau de périodes pour en afficher chaque élément
                    echo "<li>".strftime("%A %d %B %Y", strtotime($date->format("d-m-Y")))."</li>";
                }
            echo "</ul></div>";
        ?>

        <!-- Exercice 5 -->
        <h3 class="uk-heading-bullet"><strong>Exercice 5 : </strong>Tester si la date courante est le premier jour du mois ou le x ème jour du mois</h3>
        <?php
            echo "<div class='result'>";
                echo (date("j") == 1) ? "C'est le premier jour du mois" : "C'est le ".date('j')." ème jour du mois";
            echo "</div>";
        ?>

        <!-- Exercice 6 -->
        <h3 class="uk-heading-bullet"><strong>Exercice 6 : </strong>Vérifiez si la date du 29 Février 1985 a existé (valide ou pas)</h3>
        <?php
            echo "<div class='result'>";
                echo (checkdate(2,27,1985)) ? "La date est valide" : "La date n'est pas valide"; // checkdate renvoie un booléen
            echo "</div>";
        ?>

        <!-- Exercice 7 -->
        <h3 class="uk-heading-bullet"><strong>Exercice 7 : </strong>Afficher le numéro de semaine de la date suivante : 5 septembre 2018</h3>
        <?php
            $date = new DateTime("2018-09-05");
            echo "<div class='result'>";
                echo "Numéro de semaine de la date ". $date->format("d-m-Y") ." : ". date('W',$date->getTimestamp());
            echo "</div>";
        ?>

        <!-- Exercice 8 -->
        <h3 class="uk-heading-bullet"><strong>Exercice 8 : </strong>Indiquer la date de chaque 1<sup>er</sup> jour du mois de l'année en cours</h3>
        <?php
            setLocale(LC_ALL, LOCALE_FR);
            $year = date("Y");
            // construire un tableau contenant tous les mois de l'années en cours
            $months = array_reduce(range(1,12), function($res, $m){ $res[$m] = date('F', mktime(0, 0, 0, $m, 10)); return $res; });
            var_dump($months);

            ?>
            <div class="result">
                <table class="uk-table uk-table-striped uk-table-responsive">
                    <thead>
                        <tr>
                            <th>Mois</th>
                            <th>Jour de la semaine</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php    
                        foreach($months as $month){ ?>
                            <tr>
                                <td><?= strftime("%B", strtotime("first day of $month $year")); ?></td>
                                <td><?= strftime("%A", strtotime("first day of $month $year")); ?></td>
                                <td><?= strftime("%d-%m-%Y", strtotime("first day of $month $year")) ;?></td>
                            </tr> 
                    <?php } ?>
                    </tbody>
                </table>
            </div>

        <!-- Exercice 9 -->
        <h3 class="uk-heading-bullet"><strong>Exercice 9 : </strong>Donner le nombre de jours du mois courant ou d'un mois d'une année précise</h3>
        <?php
            setLocale(LC_ALL, LOCALE_FR);
            $mois = date("M"); $idmois = 2; $year = 2024;
            echo "<div class='result'>";
                echo "Nombre de jours du mois courant (" . strftime("%B %Y", strtotime($mois)). ") : ". date("t") ." jours<br/>";
                echo "Nombre de jours (". strftime("%B %Y", mktime(0, 0, 0, $idmois, 1, $year)) .") : ". cal_days_in_month(CAL_GREGORIAN, $idmois, $year)." jours<br/>";
            echo "</div>";
        ?>

        <!-- Exercice 10 -->
        <h3 class="uk-heading-bullet"><strong>Exercice 10 : </strong>Afficher l'ensemble des jours sur une période de dates donnée</h3>
        <?php
            $from = new DateTime('-1 week'); // -1 month, -8 days, ...
            // $from = new DateTime("2020-10-11");
            $to = new DateTime();
            
            $interval = DateInterval::createFromDateString('1 day');
            $days = new DatePeriod($from, $interval, $to);
            
            echo "<div class='result'>";
                echo "Entre le ". $from->format("d-m-Y") ." et le ".$to->format("d-m-Y")."<br/>";
                foreach ($days as $day) {
                    echo $day->format('d-m-Y')."<br/>";
                }
                echo $to->format("d-m-Y");
            echo "</div>";
        ?>
    </main>
    <footer>&copy; Copyright</footer>   
</body>
</html>