<?php
    require_once 'db.php';
    function addReglement($date, $idF)
    {
        $paiement = 0;
        $sql = "INSERT INTO reglement VALUES(NULL, '$date', $idF)";
        $conn = getConnexion();
        return $conn->exec($sql);
    }
    function listeReglement()
    {
        $sql = "SELECT * FROM reglement";
        $conn = getConnexion();
        return $conn->query($sql); 
    }
?>