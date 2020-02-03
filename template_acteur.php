<?php
// traitement template acteurs
$bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', '');

if(isset($_GET['id_acteur']) AND !empty($_GET['id_acteur'])) {
  $get_id_acteur = htmlspecialchars($_GET['id_acteur']);
  $acteur = $bdd->prepare('SELECT * FROM acteur WHERE id_acteur = ?');
  $acteur->execute(array($get_id_acteur));
  
  if($acteur->rowCount() == 1) {
    $acteur = $acteur->fetch();
    $logo = $acteurs['logo'];
    $description = $acteurs['description'];

    // commentaires
    $commentaires = $bdd->prepare('SELECT * FROM post WHERE id_acteur = ?');
    $commentaires->execute(array($get_id_acteur));
    
    if($commentaires->rowCount() == 1){
      $commentaires = $commentaires->fetch();
      $post = $commentaires['post'];
      $date = $commentaires['date_add'];
    }
    else{
      $nocomment = "Aucun commentaire n\'a été rédigé.";
    }
 } else {
    die('Cet article n\'existe pas !');
 }
} else {
 die('Erreur');
}
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>

<!-- En-tête de page -->

<header>

  <?php include("barNav.php"); ?>

</header>

<!-- Corps de page -->

<body>

  <!-- Template -->

  <img class="logo_acteur_main" src='<?php echo $logo?>'/>

  <fieldset>
    <?php
      echo $description;
    ?>
  </fieldset>

  <fieldset class="fieldset_gestion_account">
    <form>
      <fieldset>
        <legend>Publier un commentaire</legend>
        <input type="text" name="new_commentaire">
      </fieldset>
    </form>
    <fieldset>
      <?php
        if(isset($commentaires)){
          echo $post;
        }
        else{
          echo $nocomment;
        }
      ?>
    </fieldset>
  </fieldset>


</body>

<!-- Pied de page -->

<footer>

<?php include("footer.php"); ?>

</footer>

</html>