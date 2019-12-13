<?php
include_once "../../core/promotionC.php";
echo $_GET['idPromotion'];
$promotion1C=new promotionC();
$promotion1C->supprimerPromotion($_GET['idPromotion']);
header('Location: consulterPromo.php');

?>