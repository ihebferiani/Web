<?php
include "../../core/ProduitCore.php";
include "../../entities/Produit.php";

if (  !empty($_POST['Nom']) and !empty($_POST['Description']) and !empty($_POST['Prix'])   and isset($_POST['ajouter']))
{     
    $target="Image/".basename($_FILES['Image']['name']);
    $Image=$_FILES['Image']['name']; 
    echo $Image;  
$Produit1=new produit($Image,$_POST['Nom'],$_POST['Description'],$_POST['Prix']);
    

    
$Produit1C=new produitCore();

$Produit1C->AjouterProduit($Produit1);
header('Location: consulterProd.php');
}
else echo("Verifier les Champs! ");




?>

