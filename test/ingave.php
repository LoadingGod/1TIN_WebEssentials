<?php

if(isset($_GET)){
    echo ("Naam:\t" . $_GET['naamveld']);
} else {

    echo ("Het formulier is nog niet ingevuld!");
}
?>