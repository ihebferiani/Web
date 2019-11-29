<?php
include "../core/ActiviteCore.php";
include "../entities/Activite.php";

if (!empty($_POST['Nom']) and !empty($_POST['Description']) and isset($_POST['ajouter']))
{ 
  $target="image/".basename($_FILES['image']['name']);
  $image=$_FILES['image']['name']; 
  echo $image;  
  $Activite1=new activite($_POST['Nom'],$_POST['Description'],$image);
    

    
$Activite1C=new activiteCore();

$Activite1C->ajouterActivite($Activite1);
header('Location: ListeActivite.php');
}
else echo("Verifier les Champs! ");




?>
