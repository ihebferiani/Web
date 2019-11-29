<?php
include "../core/RecetteCore.php";
include "../entities/Recette.php";

if (!empty($_POST['Nom']) and !empty($_POST['Ingredients']) and isset($_POST['Preparation']))
{ 
     $target="image/".basename($_FILES['image']['name']);
     $image=$_FILES['image']['name'];
     echo $image;
$Recette1=new recette($_POST['Nom'],$_POST['Ingredients'],$_POST['Preparation'],$image);
    

    
$Recette1C=new recetteCore();

$Recette1C->ajouterRecette($Recette1);
header('Location: ListeRecette.php');
}
else echo("Verifier les Champs! ");




?>
