<!DOCTYPE html>
<html lang="fr">

<?php
include 'header.php';
$head = set_header('Le Phishing');
echo ($head);
?>

<body>
    <?php
    include 'menu.html';
    ?>
    <div class="container-fluid">
        <div class="other-page">
            <div class="row explications">
                <h2>Le Phishing</h2>
                <div class="col-md-2">
                    <img src="images/spam.png">
                </div>
                <div class="col-md-10 exp-texte">
                    L'escroc vous envoie un SMS ou un mail en se faisant passer pour un organisme de confiance (une banque,
                    un frounisseur d'accès à Internet...). Le but est de récuperer des données personnelles/bancaires vous
                    concernant. La plupart du temps les escrocs jouent sur l'émotion pour envoyer leur message : une (soi-disant) commande non payée, un chèque de grande valeur gagné, des identifiants non à jour etc.
                </div>
            </div>
            <div class="row reflexes">
                <h2>Les réflexes à avoir</h2>

                <div class="row step">
                    <div class="col-md-1"><img src="images/step1.png"></div>
                    <div class="col-md-11 step-texte">Vérifiez l'expéditeur du mail.</div>
                    <!--les reflexes-->
                </div>
                <div class="row step">
                    <div class="col-md-1"><img src="images/step2.png"></div>
                    <div class="col-md-11 step-texte">En cas de doute, ne cliquez pas sur les liens.</div>
                    <!--les reflexes-->
                </div>
                <div class="row step">
                    <div class="col-md-1"><img src="images/step3.png"></div>
                    <div class="col-md-11 step-texte">N'ouvrez pas les pièces jointes.</div>
                    <!--les reflexes-->
                </div>
                <div class="row step">
                    <div class="col-md-1"><img src="images/step4.png"></div>
                    <div class="col-md-11 step-texte">Si vous avez un doute, <b>n'hésitez pas à contacter directement</b> la personne ou l'entreprise qui vous a envoyé le mail.</div>
                    <!--les reflexes-->
                </div>
            </div>

        </div>

        <?php
        include 'footer.html';
        ?>

    </div> <!--fin du container-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>