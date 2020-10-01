<?php session_start();
include("vues/header.php");

$uc = empty($_GET['uc']) ? "accueil" : $_GET['uc']; 
switch($uc){
    case 'accueil' :
      include('vues/formPret.php');
    break;
    case 'materiel' :
      include('vues/materiel.php');
    break;
    case 'listMateriel' :
      include('vues/listMateriel.php');
    break;
  }  
include("vues/footer.php");
?>

