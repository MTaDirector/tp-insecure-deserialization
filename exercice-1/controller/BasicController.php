<?php

$mysqli = new mysqli("localhost", getenv("dbusername"), getenv("dbpwd"), getenv("dbname"));

if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

include_once './model/User.php';

if (isset($_POST['ident']) && !empty($_POST['ident']) && isset($_POST['pwd']) && !empty($_POST['pwd'])) {
    $user = new User();
    $user
        ->setUsername($_POST['ident'])
        ->setMdp($_POST['pwd'])
        ->setIsAdmin(true);

    setcookie("session", serialize($user), time()+3600);

    include_once './view/home.php';
} else if(isset($_COOKIE['session']) && !empty($_COOKIE['session'])) {
    $user = unserialize($_COOKIE['session']);

    if (isset($_POST['important_data']) && !empty($_POST['important_data'])) {
        $mysqli->multi_query("INSERT INTO `extremely_sensible_datas` (`sensible_data`) VALUES ('".$_POST['important_data']."');");
    }

    include_once './view/home.php';
} else {
    include_once './view/login.php';
}

/**
 * Note pour les admins tête en l'air ! Pour afficher votre formulaire secret, vous devez renseigner le paramètre d'URL secret-form
 * Si vous ne vous souvenez plus de la valeur que vous devez lui mettre, lisez le contenu du fichier secret-form-for-dummies.txt
 */

?>
