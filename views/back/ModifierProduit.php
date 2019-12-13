<html>
<body>
	
<?PHP
            include "../../entities/Produit.php";
            include "../../core/ProduitCore.php";

		if (isset($_GET['id'])){
			$Produit1C=new produitCore();
			$result=$Produit1C->rechercheProduit($_GET['id']);
			foreach($result as $row){
				$id=$row['id'];
				$Image=$row['Image'];
			
				$Nom=$row['Nom'];
				$Description=$row['Description'];
				$Prix=$row['Prix'];
				
		
				
			
        ?>
        
		<form method="POST">
		<table border="1">
		<caption>Modifer Produit</caption>



		<tr>
		<td>Image</td>
		<td><img src="image/<?PHP echo $Image ?>"></td>
		</tr>
		
		
		<tr>
		<td>Nom</td>
		<td><input type="text" name="Nom" value="<?PHP echo $Nom ?>"></td>
		</tr>

		<tr>
		<td>Description</td>
		<td><input type="text" name="Description" value="<?PHP echo $Description ?>"></td>
		</tr>

		<tr>
		<td>Prix</td>
		<td><input type="number" name="Prix" value="<?PHP echo $Prix?>"></td>
		</tr>
		
		<input type="hidden" name="id" value="<?PHP echo $row['id'];?>">

		<tr>
		<td><input type="submit" name="modifier" value="Modifier"></td>
		</tr>
		
		</table>
		</form>
		</body>
</html>
		<?PHP
			}
		} 
		if (isset($_POST['modifier'])){
			$Produit=new produit($Image,$_POST['Nom'],$_POST['Description'],$_POST['Prix']);
			
			$Produit1C->modifierProduit($Produit,$_POST['id']);
			
			header('location:consulterProd.php');
			
		}
		?>


