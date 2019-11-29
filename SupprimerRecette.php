<?php
include '../core/RecetteCore.php';
$recetteC=new recetteCore();
$recetteC->supprimerRecette($_GET['id']);
header('location:ListeRecette.php');
?>