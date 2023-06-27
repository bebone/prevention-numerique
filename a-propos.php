<!DOCTYPE html>
<html lang="fr">

<?php
include 'header.php';
$head = set_header('À propos');
echo ($head);
?>

<body>
    <?php
    include 'menu.html';
    ?>

    <div class="container-fluid">
        <div class="other-page">
            <div class="row explications">
                <h2>A propos</h2>
                <p>Site réalisé from scratch en Html5, php et CSS3 avec Bootstrap 5. Le site n'utilise et ne recueille aucune donnée vous concernant.</p>
                <p>Vous pouvez retrouver le code source sur GitHub <a href="https://github.com/bebone/prevention-numerique" target="_blank">en cliquant ici</a></p>
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