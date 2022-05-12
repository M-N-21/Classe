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
            <div class="panel-heading">Liste des Reglements</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>ID</td>
                            <td>Date</td>
                            <td>Facture</td>
                        </tr>
                        <?php
                            require_once "../../model/reglementdb.php";
                            $reglement = listeReglement()->fetchAll();
                            foreach ($reglement as $key => $value) {
                                echo"<tr>
                                <td>".$value[0]."</td>
                                <td>$value[1]</td>
                                <td>$value[2]</td>
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
            <div class="panel-heading">Formulaire de gestion des reglements</div>
                <div class="panel-body">
                    <form action="reglementController" method="POST">
                        <div class="form-group">
                            <label class="control-label" for="date">Date de reglement</label>
                            <input class="form-control" type="date" name="date" id="date" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="facture">Factures</label>
                            <select class="form-control" name="idF" id="idF" required>
                                <option value="">Faites votre choix</option>
                                <?php
                                    require_once "../../model/facturedb.php";
                                    $facture = listeFactureNonReglee()->fetchAll();
                                    foreach ($facture as $key => $value) {
                                        echo"<option value=$value[0]>$value[0]</option>";
                                    }
                                ?>
                            </select>
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