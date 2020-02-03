<?php
// On démarre la session
session_start ();
?>
   

   <?php
    if(isset($_GET['id']))
    {
        $db_options = array(

            // gestion des caractères accentués
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            // choix de récupération des données (assoc / numérique)
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            // pour afficher toutes les erreurs, à commenter en production
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING

        );
        $db = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', '', $db_options);
        $sql = "SELECT * FROM acteur WHERE id_acteur = :id";
        $query = $db -> prepare($sql);
        $query->execute([":id" => $_GET['id']]);
        $acteur = $query -> fetch();
        if(!$acteur)
        {
          header("Location: profil.php");
        }
    }
    else
    {
        
    }
?>
<!DOCTYPE html>
<html>
<title>Acteurs - Extranet GBAF</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/fw-.css">
<link rel="stylesheet" href="css/red-theme-fw.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="fa4/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="fw-theme-red">

<?php include('barNav.php'); ?>

<!-- Page Container -->
<div class="fw-container fw-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  
  <div class="fw-row">
    <!-- Left Column -->
    
    <div class="fw-coll m3">
      <!-- Profile -->
      <div class="fw-card fw-round fw-white">
        <div class="fw-container">
         <h4 class="fw-center"><?= $_SESSION['username'] ?></h4>
         <p class="fw-center"><img src="img/LogoFoxy1.png" alt="Avatar" class="fw-circle fw-center" style="width:60px"></p>
         <hr>
        </div>
      </div>
      
      <div>
        <br>
         <li class="fw-bar fw-margin-bottom" style="list-style : none;">
          <span
          class="fw-right" ><button class="fw-button fw-white fw-border fw-border-red fw-round-large" ><a href="http://localhost/P3OCx/acteurs.php?access=actor&id=1" style="text-decoration : none;">Voir</a></button></span>
          <img src="img/formation_co_full.png" class="fw-bar-item" width="175px" height="50px">
          <div class="fw-bar-item">
            <br>
          </div>
        </li> 
        
         <li class="fw-bar fw-margin-bottom" style="list-style : none;">
          <span
          class="fw-right" ><button class="fw-button fw-white fw-border fw-border-red fw-round-large" ><a href="http://localhost/P3OCx/acteurs.php?access=actor&id=2" style="text-decoration : none;">Voir</a></button></span>
          <img src="img/protectpeople_full.png" class="fw-bar-item" width="175px" height="50px">
          <div class="fw-bar-item">
            <br>
          </div>
        </li> 
        
         <li class="fw-bar fw-margin-bottom" style="list-style : none;">
          <span
          class="fw-right" ><button class="fw-button fw-white fw-border fw-border-red fw-round-large" ><a href="http://localhost/P3OCx/acteurs.php?access=actor&id=3" style="text-decoration : none;">Voir</a></button></span>
          <img src="img/CDE_full.png" class="fw-bar-item" width="175px" height="50px">
          <div class="fw-bar-item">
            <br>
          </div>
        </li> 
        
         <li class="fw-bar fw-margin-bottom" style="list-style : none;">
          <span
          class="fw-right" ><button class="fw-button fw-white fw-border fw-border-red fw-round-large" ><a href="http://localhost/P3OCx/acteurs.php?access=actor&id=4" style="text-decoration : none;">Voir</a></button></span>
          <img src="img/Dsafrance_full.png" class="fw-bar-item" width="175px" height="50px">
          <div class="fw-bar-item">
            <br>
          </div>
        </li> 
      </div>
      
      
      

    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="fw-coll m9">  
     
     
     
      <div class="fw-container fw-card fw-white fw-round fw-margin-left fw-margin-right"><br>

       <br>

        <h4 class="fw-center"><?= $acteur['acteur'] ?></h4><br>
        <img src="img/<?= $acteur['logo'] ?>">
        <hr class="fw-clear">
        <p><?= $acteur['description'] ?></p>
          <div class="fw-row-padding" style="margin:0 -16px">
        </div>
      </div>
      
      <div class="fw-container fw-card fw-white fw-round fw-margin-left fw-margin-right"><br>

       <br>

        
          <div class="fw-row-padding" style="margin:0 -16px">
        </div>
      </div>
      
   

   
    <!-- End Middle Column -->
    </div>
    

    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<?php include('footer.php'); ?>
 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("fw-show") == -1) {
    x.className += " fw-show";
    x.previousElementSibling.className += " fw-theme-d1";
  } else { 
    x.className = x.className.replace("fw-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" fw-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("fw-show") == -1) {
    x.className += " fw-show";
  } else { 
    x.className = x.className.replace(" fw-show", "");
  }
}
</script>

</body>
</html> 
