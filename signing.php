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

    $sql = "INSERT INTO account (nom, prenom, username, password, question, reponse) VALUES (:nom, :prenom, :username, :password, :question, :reponse)";

    $query = $db->prepare($sql);
    $query->bindValue(":nom", $_POST['nom'], PDO::PARAM_STR);
    $query->bindValue(":prenom", $_POST['prenom'], PDO::PARAM_STR);
    $query->bindValue(":username", $_POST['username'], PDO::PARAM_STR);
    $query->bindValue(":password", md5($_POST['password']), PDO::PARAM_STR);
    $query->bindValue(":question", md5($_POST['question']), PDO::PARAM_STR);
    $query->bindValue(":reponse", md5($_POST['reponse']), PDO::PARAM_STR);
    $query->execute();

    $user = $query->fetch();


        
        // on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom'] = $_POST['prenom'];
		$_SESSION['username'] = $_POST['username'];

        header ('location: acteurs.php');

    ?>

