<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercices TP dates</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="datesTP.php" method="POST">
        <select name="month">
            <?php 
                setlocale(LC_ALL, 'fr_FR');
                $tabMois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
                foreach($tabMois as $nbMois => $mois) {
                    echo '<option value="' . ($nbMois+1) . '" id="' . $mois .'">' . $mois . '</option>';
                }
            ?>
        </select>
        <select name="years">
            <?php 
                $actualYear = date('Y');
                for ($annee = $actualYear; $annee >= 1950; $annee--) {
                    echo '<option value="' . $annee . '">' . $annee . '</option>';
                }
            ?>
        </select>
        <input type="submit" value="Confirmer">
    </form>

    <table>
        <caption><?php
            if (!isset($_POST['month']) && !isset($_POST['years'])) {
                $dateMois = date('m');
                $dateAnnee = date('Y');
            }else{
                $dateMois = $_POST['month'];
                $dateAnnee = $_POST['years'];
            }
            echo strftime('%B %Y', mktime(0,0,0,$dateMois, 1, $dateAnnee)); 
         ?></caption> 
        <thead>
            <tr>
                <?php
                    $tabJours = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
                    foreach($tabJours as $jour) {
                        echo '<th>' . $jour . '</th>';
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
                $nbJours = date('t', mktime(0,0,0,$dateMois,1,$dateAnnee));
                $nbDayinWeek = date('w', mktime(0,0,0,$dateMois,1,$dateAnnee)-1);
                $flag = 0;
                
                echo '<tr>';
                if ($nbDayinWeek != 7) {
                    for ($i = 1; $i <= $nbDayinWeek; $i++) {
                        echo '<td></td>';
                        $flag = $nbDayinWeek;
                    }
                }
                for ($y = 1; $y <= $nbJours; $y++) {
                    if ($flag >= 7) {
                        echo '</tr><tr>';
                        $flag = 0;
                    }
                    echo '<td>'.$y.'</td>';
                    $flag++;
                }
                $ok = 6 - $flag;
                for ($t = 0; $t <= $ok; $t++) {
                    echo '<td></td>';
                }
                echo '</tr>'
            ?>
        </tbody>
    </table>
</body>
</html>