<!DOCTYPE html>
<html lang="fr">

<?php
include 'header.php';
$head = set_header('Les sites frauduleux');
echo ($head);
?>

<body>
    <?php
    include 'menu.html';
    ?>
    <div class="container-fluid">
        <div class="other-page">
            <div class="row explications">
                <h2>Les sites frauduleux</h2>
                <div class="col-md-2">
                    <img src="images/sites-frauduleux.png">
                </div>
                <div class="col-md-10 exp-texte">
                    <p>Il existe plusieurs types de sites frauduleux.</p>
                    <p> Tout d'abords ceux se faisant passer pour des sites officiels comme votre banque par exemple.
                        Le site ressemble en tout point au site officiel (c'est une sorte de miroir du vrai site) où il vous est demandé de rensigner vos informations personnelles. <b> Vérifier bien le nom du site avant toute saisie !</b>
                    </p>
                    <p>Il y a également des sites de vente en ligne sans mentions légales. Les mentions légales sont obligatoires.</p>
                </div>
            </div>
            <div class="row reflexes">
                <h2>Les réflexes à avoir</h2>

                <div class="row step">
                    <div class="col-md-1"><img src="images/step1.png"></div>
                    <div class="col-md-11 step-texte">Vérifiez <b>les mentions légales du site</b>. Doivent y figurer le <b>nom de
                            l'entreprise et plusieurs moyens de contact</b>. Méfiez-vous des sites avec seulement un
                        formulaire de contact. </div>
                    <!--les reflexes-->
                </div>
                <div class="row step">
                    <div class="col-md-1"><img src="images/step2.png"></div>
                    <div class="col-md-11 step-texte">Vérifiez si le site a de bons avis sur internet <b>(les seuls avis du site ne
                            suffisent pas et peuvent s'avérer faux)</b> : vous pouvez faire une vérification sur le site
                        <a href="https://www.signal-arnaques.com/" target="_blank">signal-arnaque</a> par exemple. Il existe ausi d'autres sites d'avis comme Trustpilot.
                    </div>
                    <!--les reflexes-->
                </div>
                <div class="row step">
                    <div class="col-md-1"><img src="images/step3.png"></div>
                    <div class="col-md-11 step-texte">Attention au nom de domaine trop générique, ou au nom ressemblant au domaine officiel (on appelle cela le <em>combosquatting</em>)</div>
                    <!--les reflexes-->
                </div>
                <div class="row step">
                    <div class="col-md-1"><img src="images/step4.png"></div>
                    <div class="col-md-11 step-texte">Des prix très ou trop attractifs pour être vrais</div>
                    <!--les reflexes-->
                </div>
            </div>

        </div>

        <div id="section-footer" class="row"> <!--Début de-->
            <div>
                WebPrevention 2023 - création web - A propos du site
            </div>

        </div> <!--Fin section-->

    </div> <!--fin du container-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>