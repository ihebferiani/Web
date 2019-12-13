
<?PHP
// include "../back/menu.php";
include "../../core/promotionC.php";

$promotion1C=new promotionC();
$listePromotion=$promotion1C->afficherPromotion();


?>

<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

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
<table class="content-table" >
	<thead>
		<tr>
			<th>idPromotion</th>
			<th>pourcentage</th>
			<th>dateDebut</th>
			<th>dateFin  </th>
			<th>idProduit </th>
		</tr>
	</thead>

<?PHP
foreach($listePromotion as $row){

	?>
	<tbody>

		<tr>
			<td><?PHP echo $row['idPromotion']; ?></td>
			<td><?PHP echo $row['pourcentage']; ?></td>
			<td><?PHP echo $row['dateDebut']; ?></td>
			<td><?PHP echo $row['dateFin']; ?></td>
			<td><?PHP echo $row['idProduit']; ?></td>

			<td class="active-row"> <a href="modifierPromotion.php?idPromotion=<?php echo $row['idPromotion']; ?>">modifier</a> </td>
			<td class="active-row">  <a href="supprimerPromotion.php?idPromotion=<?php echo $row['idPromotion']; ?>">supprimer</a> </td>
		</tr>
	</tbody>


    
	<?PHP 
}
if (isset($_POST["supprimer"])) {
		$compteC->deleteCompte($_POST["num"]);
		header('Location:listecomptes.php');
	}
	?>
</table>

<a id="ossbor" href="AjouterPromotion.html">Ajouter une nouvelle promotion</a>



