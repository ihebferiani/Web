<?PHP
include "../core/ProduitCore.php";
$Produit1C=new ProduitCore();
$listeProduit=$Produit1C->afficherProduit();

?>
<table border="1">
<tr>
<td>Id</td>
<td>Image</td>

<td>Nom</td>
<td>Description</td>
<td>Prix</td>


</tr>

<?PHP
foreach($listeProduit as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><img src="Image/<?PHP echo $row['Image']; ?>"></td>

	<td><?PHP echo $row['Nom']; ?></td>
	<td><?PHP echo $row['Description']; ?></td>
	<td><?PHP echo $row['Prix']; ?></td>


	<td><a href="ModifierProduit.php?id=<?php echo $row['id'];  ?>"> Modifier</a></td>
	<td><a href="SupprimerProduit.php?id=<?php echo $row['id'];  ?>">Supprimer</a></td>
	</tr>
    
	<?PHP 
}
?>

</table>

<a href="AjouterProduit.html"> Ajouter une nouveau produit </a>
