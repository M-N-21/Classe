<?php
    require_once "../model/reglementdb.php";
    require_once "../model/facturedb.php";
    extract($_POST);
    $result = addReglement($date, $idF);
    if($result != 0)
    {
        updateFacture($idF);
    }
    header("location:reglements");
?>