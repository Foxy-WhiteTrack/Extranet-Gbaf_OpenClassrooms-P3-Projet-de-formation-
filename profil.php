<?php
// On démarre la session
session_start ();
?>

<!DOCTYPE html>
<html>
<title>Profil - Extranet GBAF</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/fw-.css">
<link rel="stylesheet" href="css/red-theme-fw.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="fa4/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="fw-theme-l5">

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
         <h4 class="fw-center">Nom et Prénom</h4>
         <p class="fw-center"><img src="img/LogoFoxy1.png" class="fw-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw fw-margin-right fw-text-theme"></i> Poste, Spécialité</p>
         <p><i class="fa fa-home fa-fw fw-margin-right fw-text-theme"></i> Ville, Pays</p>
         <p><i class="fa fa-birthday-cake fa-fw fw-margin-right fw-text-theme"></i> Dat d'inscription</p>
        </div>
      </div>

    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="fw-coll m9">  
      <div class="fw-container fw-card fw-white fw-round fw-margin"><br>
        <img src="img/LogoFoxy1.png" alt="Avatar" class="fw-left fw-circle fw-margin-right" style="width:60px">
        <h4><?php echo $_SESSION['username']; ?></h4><br>
        <hr class="fw-clear">
        <p>Ceci est la Description de mon profil</p>
          <div class="fw-row-padding" style="margin:0 -16px">
        </div>

        <button type="button" class="fw-button fw-theme-d2 fw-margin-bottom fw-right"><i class="fa fa-ellipsis-h"></i>  En Savoir Plus</button> 
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
