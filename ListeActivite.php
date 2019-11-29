<?PHP
include "../core/ActiviteCore.php";
$Activite1C=new ActiviteCore();
$listeActivite=$Activite1C->afficherActivite();

?>
<table border="1">
<tr>
<td>Id</td>
<td>Nom</td>
<td>Description</td>
<td>Image</td>
</tr>

<?PHP
foreach($listeActivite as $row){
	?>
	<tr>
	<td><?PHP echo $row['Id']; ?></td>
	<td><?PHP echo $row['Nom']; ?></td>
	<td><?PHP echo $row['Description']; ?></td>
	<td><img src="image/<?PHP echo $row['Image']; ?>"></td>
    <td><a href="ModifierActivite.php?id=<?php echo $row['Id'];  ?>">Modifier</a></td>
    <td><a href="SupprimerActivite.php?id=<?php echo $row['Id'];  ?>">Supprimer</a></td>
	</tr>
    
	<?PHP 
}
?>

</table>

<a href="AjouterActivite.html"> Ajouter une nouvelle activite</a>

