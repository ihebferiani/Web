<?PHP
include "../core/RecetteCore.php";
$Recette1C=new RecetteCore();
$listeRecette=$Recette1C->afficherRecette();

?>
<table border="1">
<tr>
<td>Id</td>
<td>Nom</td>
<td>Ingredients</td>
<td>Preparation</td>
<td>Image</td>
</tr>

<?PHP
foreach($listeRecette as $row){
	?>
	<tr>
	<td><?PHP echo $row['Id']; ?></td>
	<td><?PHP echo $row['Nom']; ?></td>
	<td><?PHP echo $row['Ingredients']; ?></td>
	<td><?PHP echo $row['Preparation']; ?></td>
	<td><img src="image/<?PHP echo $row['Image']; ?>"></td>
    <td><a href="ModifierRecette.php?id=<?php echo $row['Id'];  ?>">Modifier</a></td>
    <td><a href="SupprimerRecette.php?id=<?php echo $row['Id'];  ?>">Supprimer</a></td>
	</tr>
    
	<?PHP 
}
?>

</table>

<a href="AjouterRecette.html"> Ajouter une nouvelle recette</a>

