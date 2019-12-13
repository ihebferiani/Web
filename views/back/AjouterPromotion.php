<?php

include "../../core/promotionC.php";
include "../../entities/promotion.php";




if (isset($_POST['ajouter']) )
{
	
    $pourcentage=$_POST['pourcentage'];
	$dateDebut=$_POST['dateDebut'];
	$dateFin=$_POST['dateFin'];
	$idProduit=$_POST['idProduit'];

var_dump($_POST);
     
$promotion1=new promotion($_POST['pourcentage'],$_POST['dateDebut'],$_POST['dateFin'],$_POST['idProduit']);
    

    
$promotion1C=new promotionC();

$promotion1C->ajouterPromotion($promotion1);
header('Location: consulterPromo.php');
}
else echo("Verifier les Champs! ");




?>

