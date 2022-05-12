<?php
    require_once 'db.php';
    function addFacture($date, $consommation, $prix, $paiement)
    {
        $paiement = 0;
        $sql = "INSERT INTO facture VALUES(NULL, '$date', $consommation, $prix, $paiement)";
        $conn = getConnexion();
        return $conn->exec($sql);
    }
    function updateFacture($idF)
    {
        $paiement = false;
        $sql = "UPDATE facture SET paiement = 1 WHERE idF = $idF";
        $conn = getConnexion();
        return $conn->exec($sql); 
    }
    function listeFacture()
    {
        $sql = "SELECT * FROM facture";
        $conn = getConnexion();
        return $conn->query($sql); 
    }
    function listeFactureNonReglee()
    {
        $sql = "SELECT * FROM facture WHERE paiement=0";
        $conn = getConnexion();
        return $conn->query($sql); 
    }
    function listeFactureReglee()
    {
        $sql = "SELECT * FROM facture WHERE paiement=1";
        $conn = getConnexion();
        return $conn->query($sql); 
    }
?>