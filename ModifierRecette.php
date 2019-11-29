<html>
<body>
	
<?PHP
    include "../entities/Recette.php";
    include "../core/RecetteCore.php";

		if (isset($_GET['id'])){
			$Recette1C=new recetteCore();
			$result=$Recette1C->rechercheRecette($_GET['id']);
			foreach($result as $row){
				$Id=$row['Id'];
				$Nom=$row['Nom'];
				$Ingredients=$row['Ingredients'];
				$Preparation=$row['Preparation'];
				$Image=$row['Image'];
			
        ?>
        
		<form method="POST">
		<table border="1">
		<caption>Modifer Activite</caption>
		
		<tr>
		<td>Nom</td>
		<td><input type="text" name="Nom" value="<?PHP echo $Nom ?>"></td>
		</tr>
		<tr>
		<td>Ingredients</td>
		<td><input type="text" name="Ingredients" value="<?PHP echo $Ingredients ?>"></td>
        </tr>
        <tr>
		<td>Preparation</td>
		<td><input type="text" name="Preparation" value="<?PHP echo $Preparation ?>"></td>
		</tr>
		<tr>
		<td>Image</td>
		<td><img src="image/<?PHP echo $Image ?>"></td>
		</tr>
		<input type="hidden" name="Id" value="<?PHP echo $row['Id'];?>">

		<tr>
		<td><input type="submit" name="modifier" value="Modifier"></td>
		</tr>
		<
		</table>
		</form>
		</body>
</html>
		<?PHP
			}
		}
		if (isset($_POST['modifier'])){
			$recette=new recette($_POST['Nom'],$_POST['Ingredients'],$_POST['Preparation'],$Image );
			$recette1C=new recetteCore();
			$recette1C->modifierRecette($recette,$_POST['Id']);
			
			header('location:ListeRecette.php');
			
		}
		?>

