


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    
    <title>S'enregistrer - Dashboard</title>
    <!-- -->
    <style>

    </style>
    <!-- -->
    <link rel="stylesheet" href="css/fw-.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="fa4/css/font-awesome.min.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }
        
        .fw-row-padding img {
            margin-bottom: 12px
        }
        /* Set the width of the sidebar to 120px */
        
        .fw-sidebar {
            width: 120px;
            background: #222;
        }
        /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
        
        #main {
            margin-left: 120px
        }
        
        .boutton {
            width: 300px;
        }
        /* Supprimer la marge de "Page Content" sur les petits écrans */
        
        @media only screen and (max-width: 600px) {
            #main {
                margin-left: 0
            }
        }
    </style>
</head>

<body>
    <section>

        <div class="fw-row">
            <div class="fw-coll" style="width:20%">
                <p></p>
            </div>
            <div class="fw-coll" style="width:60%">
               <div class="fw-center">
                   <header class="fw-container fw-red fw-center">
                    <h1>S'enregistrer</h1> 
                    </header>
                    
                    <div class="fw-row-padding">
                        <div class="fw-coll m12">
                          <div class="fw-card fw-round fw-white">
                            <div class="fw-container fw-padding">
                            
                            <a href="index.php">Dejà inscrit</a>
                             
                              
                              
                              <form  name="form" method="POST" action="signing.php" class="fw-container fw-card-4" style="margin-top: 20%;">
                              <div>
                                  <p>
                                  <label for="nom">Nom <span>*</span></label>
                                <input class="input fw-input" name="nom" type="text" style="width:90%" placeholder="Votre nom" required>
                                
                            </p>
                            <p>
                                  <label for="prenom">Prénom <span>*</span></label>
                                <input class="input fw-input" name="prenom" type="text" style="width:90%" placeholder="Votre prénom" required>
                                
                            </p>
                            <p>
                                  <label for="username">Pseudo <span>*</span></label>
                                <input class="input fw-input" name="username" type="text" style="width:90%" placeholder="Votre Pseudo (publique)" required>
                                
                            </p>
                            
                            <p>
                               <label for="password">Password <span>*</span></label>
                                <input class="input fw-input" name="password" type="password" style="width:90%" placeholder="Votre mot de passe" required>
                            
                            </p>
                            
                            <p>
                                  <label for="question">Question de sécurité <span>*</span></label>
                                <input class="fw-input" name="question" type="text" style="width:90%" placeholder="Tappez une question au choix (facile à mémoriser!)" required>
                                
                            </p>
                            <p>
                                  <label for="reponse">Réponse <span>*</span></label>
                                <input class="fw-input" name="reponse" type="text" style="width:90%" placeholder="Tappez la réponse à votre question" required>
                                
                            </p>
                            <br>
                              </div>
                              
                              <div class="fw-center">
                                 <p>
                                <button type="submit" name="submit" class="fw-button fw-section fw-red fw-ripple"> S'enregistrer </button>
                            </p>
                            </div>
                            
                            
                           
                        </form>
                              
                              
                            </div>
                          </div>
                        </div>
                   </div>
                  </div>
                    
                <div>
                    <div class="fw-container fw-half fw-margin-top">
                        
                    </div>
                </div>
               </div>
                
            </div>
            <div class="fw-coll" style="width:20%">
                <p></p>
            </div>
    </section>
</body>

</html>