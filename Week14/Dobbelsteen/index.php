<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_REQUEST['verzendknop'])) {
            $dob1 = $_REQUEST["dob1"];
            $dob2 = $_REQUEST["dob2"];
            $dob3 = $_REQUEST["dob3"];
            $inzet = $_REQUEST["inzet"];
            $zijde1 = (int) $dob1[1];
            $gooi1 = mt_rand(1, $zijde1);
            $zijde2 = (int) $dob1[1];
            $gooi2 = mt_rand(1, $zijde2);
            $zijde3 = (int) $dob1[1];
            $gooi3 = mt_rand(1, $zijde3);

            if ($gooi1 == $gooi2 && $gooi2 == $gooi3) {
                $resultaat = ($zijde1 + $zijde2 + $zijde3) * $inzet;
            } else {
                $resultaat = 0;
            }
            ?>
        <table>
            <tr>
                <td>Inzet </td>
                <td><?php echo $inzet?></td>
            </tr>
            <tr>
                <td>Gooi 1</td>
                <td><?php echo $gooi1?></td>
            </tr>
            <tr>
                <td>Gooi 2</td>
                <td><?php echo $gooi2?></td>
            </tr>
            <tr>
                <td>Gooi 3</td>
                <td><?php echo $gooi3?></td>
            </tr>
            <tr>
                <td>Resultaat</td>
                <td><?php echo $resultaat?></td>
            </tr>
        </table>
        <?php
        } else {
            ?>
            <form action="index.php" method="get">
                <div class="tabel">
                    <div  class="rij">
                        <div  class="titel">Dobbelsteen 1</div>
                        <div  class="invoer">
                            <select name="dob1">
                                <option value="d2">d2</option>
                                <option value="d4">d4</option>
                                <option value="d6">d6</option>
                            </select> </div>
                    </div>
                    <div  class="rij">
                        <div  class="titel">Dobbelsteen 2</div>
                        <div  class="invoer">
                            <select name="dob2" >
                                <option value="d2">d2</option>
                                <option value="d4">d4</option>
                                <option value="d6">d6</option>
                            </select> </div>
                    </div>
                    <div  class="rij">
                        <div  class="titel">Dobbelsteen 3</div>
                        <div  class="invoer">
                            <select name="dob3" >
                                <option value="d2">d2</option>
                                <option value="d4">d4</option>
                                <option value="d6">d6</option>
                            </select> </div>
                    </div>
                    <div  class="rij">
                        <div  class="titel">Inzet</div>
                            <div  class="invoer">
                                <input type="text" name = "inzet"/>
                            </div>
                        </div>
                        <div  class="rij">
                            <div class="titel">&nbsp;</div>
                            <div  class="invoer">
                                <input type="submit" value="verzend" 
                                       name = "verzendknop"/> 		
                            </div>
                        </div>
                        </form>	
                        <?php
                    }
                    ?>
                    </body>
                    </html>