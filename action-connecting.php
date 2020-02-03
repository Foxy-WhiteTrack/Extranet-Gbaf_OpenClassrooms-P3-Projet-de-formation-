 <?php




    $db_options = array(

        // gestion des caractères accentués
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        // choix de récupération des données (assoc / numérique)
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        // pour afficher toutes les erreurs, à commenter en production
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING

    );
    $db = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', '', $db_options);

    $sql = "SELECT id FROM account WHERE username = :username AND password = :password";

    $query = $db->prepare($sql);
    $query->bindValue(":username", $_POST['username'], PDO::PARAM_STR);
    $query->bindValue(":password", md5($_POST['password']), PDO::PARAM_STR);
    $query->execute();

    $user = $query->fetch();

    if ($user) {
        
        // on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
        
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
        
        

        header ('location: acteurs.php');
        
    } else {
        echo "Erreur";
    }
    ?>

