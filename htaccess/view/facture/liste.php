<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facturation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
    <div class="nav navbar-primary">
        <ul class="nav navbar-nav">
            <li><a href="factures">Gestion des factures</a></li>
            <li><a href="reglements">Gestion des reglements</a></li>
        </ul>
    </div>

    <div class="container col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Liste des Factures</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>ID</td>
                            <td>Date</td>
                            <td>Consommation</td>
                            <td>Prix</td>
                            <td>Etat Facture</td>
                        </tr>
                        <?php 
                            require_once "../../model/facturedb.php";
                            $facture = listeFacture()->fetchAll();
                            foreach ($facture as $key => $value) {
                                echo"<tr>
                                <td>".$value[0]."</td>
                                <td>$value[1]</td>
                                <td>$value[2]</td>
                                <td>$value[3]</td>
                                <td>$value[4]</td>
                            </tr>";
                            }
                        ?>
                    </table>
                </div>
                <div class="panel-footer">LIAGE 3</div>
            </div>
        </div>
    </div>
    <div class="container col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Formulaire de gestion des factures</div>
                <div class="panel-body">
                    <form action="factureController" method="POST">
                        <div class="form-group">
                            <label class="control-label" for="date">Date de facturation</label>
                            <input class="form-control" type="date" name="date" id="date" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="consommation">Consommation de la facture</label>
                            <input class="form-control" type="number" name="consommation" id="consommation" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="prix">Prix de la  de facture</label>
                            <input class="form-control" type="number" name="prix" id="prix" required>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer">
                            <input class="btn btn-danger" type="reset" name="annuler" id="annuler" value="Annuler">
                        </div>
                    </form>
                </div>
                <div class="panel-footer">LIAGE 3</div>
            </div>
        </div>
    </div>
</body>
</html>