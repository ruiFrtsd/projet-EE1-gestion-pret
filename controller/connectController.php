<?php 


session_start();
include('../modeles/Login.php');
include('../modeles/monPDO.php');


$login = new Login();

$action = $_GET['action'];

switch ($action) {
    case 'login':
        $pseudo = filter_input(INPUT_POST, "nom");
        $password = filter_input(INPUT_POST, "password");

        if ($pseudo != "" && $password != "") {
            $res = $login::findUsersAndPasswords();

            $_POST['isconnected'] = false;


            if ($res != null) {

                if ($pseudo == $res['pseudo'] && $password == $res['password']) {



                    $_POST['isconnected'] = true;
                    $login->setPseudo($_POST['nom'])
                        ->setPassword($_POST['password']);
                    $_SESSION['utilisateur'] = $_POST['nom'];
                    header('Location: ../index.php?uc=accueil&action=loggedin');
                }
                else{
                    header('Location: ../index.php?uc=login');
                }



                //    if ($res !=null){
                //      do {
                //          if($_POST['nom'] == $res['pseudo'] && $_POST['password'] == $res['password']){
                //          
                //            $_POST['nom'] = $pseudo;
                //            $_POST['password'] = $password;
                //            $_SESSION['isconnected'] = true;
                //            $login->setPseudo($_POST['nom'])
                //            ->setPassword($_POST['password']);
                //      header('Location : index.php?uc=accueil&action=loggedin');
                //
                //          }
                //          else{
                //            $message = "Entrée incorrecte";
                //          }
                //      } while ($res = $reponse->fetch());
                //  }
                //  }
                //  else{
                //    $message = "Entrée incorrecte";
                //  }
                //if($pseudo == null && $password == null){
                //  $message = "";
            }
        }
    break;


}
