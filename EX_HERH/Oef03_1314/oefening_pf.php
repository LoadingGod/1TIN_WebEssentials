<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        if (isset($_POST['submit'])) {
            $uren = array("10u11u", "11u12u", "13u15u", "15u16u");
            echo ('<h1>Reservatie voor ' . $_POST['dag'] . '</h1>');
            echo ('<form action="oefening1verwerking.php" method="get">');
            for ($i = 0; $i < count($uren); $i++) {
                echo ($uren[$i] . ' : <input type="checkbox" name="uurkeuze' . $i . '" value="uurkeuze' . $i . '"/><input type="text" name="uurtext' . $i . '"/><br/>');
            }
            echo ('<input type="hidden" name="dag" value="' . $_POST['dag'] . '"/>');
            echo ('<input type="submit" value="OK"/>');
            echo ('</form>');
        } else {
            $dagen = array("ma", "di", "wo", "do", "vr", "za", "zo");
            echo ('<h1>Gelieve een dag te kiezen voor de reservatie</h1>');
            echo ('<form action="oefening_pf.php" method="post">');
            echo ('<select name="dag">');
            for ($i = 0; $i < count($dagen); $i++) {
                echo ('<option>' . $dagen[$i] . '</option>');
            }
            echo ('</select>');
            echo ('<input name="submit" type="submit" value="OK"/>');
            echo ("<form>");
        }
        ?>
    </body>
</html>
