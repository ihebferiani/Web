<?php
include '../core/ActiviteCore.php';
$activitec=new activiteCore();
$activitec->supprimerActivite($_GET['id']);
header('location:ListeActivite.php');
?>