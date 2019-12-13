<?PHP
include "../core/ProduitCore.php";
$Produit1C=new ProduitCore();
$listeProduit=$Produit1C->afficherProduit();

?>

	<style>
	
	

.content-table {
  border-collapse: collapse;
  margin: 50px 185px;
  font-size: 1.3em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  font-family: sans-serif;

}

.content-table thead tr {
  background-color: #78960f;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
} 


.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #78960f;
}

.content-table tbody td.active-row {
  font-weight: bold;
   
}
a
{
	color:#78960f;
	font-weight: bold;
}
#ossbor 
{
    margin-left:185px;
    font-size:1.3em;
}
	

	
	 </style>
	 <table class="content-table">
	<thead>	 
<tr>
<th>Id</th>
<th>Image</th>

<th>Nom</th>
<th>Description</th>
<th>Prix</th>

</tr>
     </thead>
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
