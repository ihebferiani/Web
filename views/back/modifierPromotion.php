<html>
<body>
<style>
caption 
{
	padding:10px;
	color: #78960f;
	font-weight:bold;
	font-size: 1.2em;
}
.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
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

.content-table  tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
} 




.content-table tbody td.active-row {
  font-weight: bold;
   
}
a
{
	color:#78960f;
	font-weight: bold;
}
th 
{
	color: #78960f;
}
</style>
	
<?PHP
            include "../../entities/promotion.php";
            include "../../core/promotionC.php";

		if (isset($_GET['idPromotion'])){
			$promotion1C=new promotionC();
			$result=$promotion1C->trouverPromotion($_GET['idPromotion']);
			foreach($result as $row){
				$idPromotion=$row['idPromotion'];
				$pourcentage=$row['pourcentage'];
				$dateDebut=$row['dateDebut'];
				$dateFin=$row['dateFin'];
				$idProduit=$row['idProduit'];
        ?>
		
        
		<form method="POST">
		<table border="0" class="content-table">
		<caption>Modifer Promotion</caption>
		<tr>
		<th>idPromotion</th>
		<td><input type="number" name="idPromotion" value="<?PHP echo $idPromotion ?>" disabled ></td>
		</tr>
		<tr>
		<th>pourcentage</th>
		<td><input type="text" name="pourcentage" value="<?PHP echo $pourcentage ?>"></td>
		</tr>
		<tr>
		<th>date de Debut</th>
		<td><input type="date" name="dateDebut" value="<?PHP echo $dateDebut ?>"></td>
		</tr>
		<tr>
		<th>date de fin</th>
		<td><input type="date" name="dateFin" value="<?PHP echo $dateFin ?>"></td>
		</tr>
		<tr>
		<th>idProduit</th>
		<td><input type="number" name="idProduit" value="<?PHP echo $idProduit ?>"></td>
		</tr>
		
		<tr>
		<td colspan="2"><input type="hidden" name="idPromotion" value="<?PHP echo $row['idPromotion'];?>"></td>
		</tr>
		
		<tr>
		<td colspan="2" align="center"><input type="submit" name="modifier2" value="modifier"></td>
		</tr>
		
		</table>
		</form>
		</body>
</html>
		<?PHP
			}
		}
		if (isset($_POST['modifier2'])){
			$promotion=new promotion($_POST['pourcentage'],$_POST['dateDebut'],$_POST['dateFin'],$_POST['idProduit']);
			//$promotion1C=new promotionC();
			$promotion1C->modifierPromotion($promotion,$_POST['idPromotion']);
			 
			header('location:consulterPromo.php');
			
		}
		?>

