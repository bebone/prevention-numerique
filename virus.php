<!DOCTYPE html>
<html lang="fr">

<?php
include 'header.php';
$head = set_header('Les Virus');
echo ($head);
?>

<body>
    <?php
    include 'menu.html';
    ?>
    <div class="container-fluid">
        <div class="other-page">
            <div class="row explications">
                <h2>Les virus</h2>
                <div class="col-md-2">
                    <img src="images/virus.png">
                </div>
                <div class="col-md-10 exp-texte">
                    <p>
                        Les virus peuvent s'introduire dans votre PC après avoir téléchargé un fichier ou bien après avoir ouvert la pièce jointe d'un mail.
                        Il peut également s'immiscer par le biais d'un périphérique branché sur le PC (comme par exemple une clé USB).
                    </p>
                </div>
            </div>
            <div class="row reflexes">
                <h2>Les réflexes à avoir</h2>

                <div class="row step">
                    <div class="col-md-1"><img src="images/step1.png"></div>
                    <div class="col-md-11 step-texte">Gardez toujours votre ordinateur <b>à jour.</b> N'hésitez pas à mettre les mises à jour en automatique si vous le pouvez.</div>
                    <!--les reflexes-->
                </div>
                <div class="row step">
                    <div class="col-md-1"><img src="images/step2.png"></div>
                    <div class="col-md-11 step-texte"><b>Ne téléchargez pas</b> de fichiers dont vous ne connaissez pas la source.</div>
                    <!--les reflexes-->
                </div>
                <div class="row step">
                    <div class="col-md-1"><img src="images/step3.png"></div>
                    <div class="col-md-11 step-texte"><b>Ne branchez pas</b> de clé USB ou tout autre périphérique dont vous ne connaissez pas la provenance sur votre oridnateur, le materiel pourrait être vérolé.</div>
                    <!--les reflexes-->
                </div>
                <div class="row step">
                    <div class="col-md-1"><img src="images/step4.png"></div>
                    <div class="col-md-11 step-texte"><b>Évitez</b> de vous connecter sur des réseaux publics. Ces réseaux étant accessibles à tous, des pirates peuvent récupérer des informations vous concernant si celles-ci ne sont pas chiffrées. (wifi dans les aéroports, trains, hôtels, restaurants...)</div>
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