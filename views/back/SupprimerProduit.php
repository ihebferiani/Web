<?php
            
            include "../../core/ProduitCore.php";
$ProduitC=new ProduitCore();
$ProduitC->SupprimerProduit($_GET['id']);
header('location:consulterProd.php');
?>