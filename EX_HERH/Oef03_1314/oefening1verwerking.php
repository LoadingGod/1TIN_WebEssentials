<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Oefening 1 Verwerking</title>
    </head>
    <body>
        <?php
        $uren = array("10u11u", "11u12u", "13u15u", "15u16u");
        echo ('<h1>U hebt gereserveerd op ' . $_GET['dag'] . '</h1>');
        echo ('<table>');
        echo ('<tr><td><b>Uren</b></td><td><b>Boodschap</b></td>');
        if (isset($_GET['uurkeuze0'])) {
            echo('<tr><td>' . $uren[0] . '</td><td>' . $_GET['uurtext0'] . '</td></tr>');
        }
        if (isset($_GET['uurkeuze1'])) {
            echo('<tr><td>' . $uren[1] . '</td><td>' . $_GET['uurtext1'] . '</td></tr>');
        }
        if (isset($_GET['uurkeuze2'])) {
            echo('<tr><td>' . $uren[2] . '</td><td>' . $_GET['uurtext2'] . '</td></tr>');
        }
        if (isset($_GET['uurkeuze3'])) {
            echo('<tr><td>' . $uren[3] . '</td><td>' . $_GET['uurtext3'] . '</td></tr>');
        }        
        echo ('</table>');
        ?>
    </body>
</html>
