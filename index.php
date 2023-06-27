<!DOCTYPE html>
<html lang="fr">

<?php
include 'header.php';
$head = set_header('Accueil'); // changement de titre selon la page
echo ($head);
?>

<body>
  <!-- MENU -->
  <?php
  include 'menu.html';
  ?>
  <!-- FIN MENU -->
  <div class="container-fluid">
    <div id="section-un" class="row">
      <div id="col1-section1" class="col">
        <h1>La route a ses risques,<br />
          <b class="animation-fade" style="color:#7A0101;">le numérique aussi.</b>
        </h1>
        <!--<h3 id="description-accueil">
          Toutes et tous concernés, quelque soit l’appareil utilisé
        </h3>-->
      </div>
      <div class="col-md-3">
        <div class="animation-fade"><img id="img-warning" src="images/prevention-num.png"></div>
      </div>
    </div>
    <div id="section-deux" class="row">
      <a id="btn-ensavoirplus" href="#section-trois">En savoir plus</a>
    </div>

    <div id="section-trois" class="row divprevention"> <!--Début-->
      <div class="col-md-9">
        <div class="divprevention-texte">
          <h2>Le Phishing (ou hameçonnage)</h2>
          L'escroc vous envoie un SMS ou un mail en se faisant passer pour un organisme de confiance (une banque, un
          frounisseur d'accès à Internet...). Le but est de récuperer des données personnelles/bancaires vous
          concernant.

          <a href="phishing.html">Comment vérifier que mon mail est sûr ?</a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="divprevention-img-left"><img src="images/spam.png"></div>
      </div>
    </div>
  </div> <!--Fin section-->
  <div id="section-quatre" class="row divprevention"> <!--Début-->
    <div class="col-md-3">
      <div class="divprevention-img-right"><img src="images/sites-frauduleux.png"></div>
    </div>
    <div class="col-md-9">
      <div class="divprevention-texte">
        <h2>Les sites frauduleux</h2>
        Un site e-commerce Français des mentions obligatoires doivent y figurer.
        <a href="sites-frauduleux.php">Comment vérifier que le site est fiable ?</a>
      </div>
    </div>
  </div> <!--Fin section-->
  <div id="section-trois" class="row divprevention"> <!--Début-->
    <div class="col-md-9">
      <div class="divprevention-texte">
        <h2>Les virus</h2>
        Personne n'est à l'abri d'un virus sur son ordinateur. Soyons vigilant !

        <a href="virus.php">Que faire ? ?</a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="divprevention-img-right"><img src="images/virus.png"></div>
    </div>
  </div> <!--Fin section-->

  <?php
  include 'footer.html';
  ?>

  </div> <!--fin du container-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>