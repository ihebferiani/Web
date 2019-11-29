<html>
<body>
	
<?PHP
            include "../entities/Activite.php";
            include "../core/ActiviteCore.php";

		if (isset($_GET['id'])){
			$Activite1C=new activiteCore();
			$result=$Activite1C->rechercheActivite($_GET['id']);
			foreach($result as $row){
				$Id=$row['Id'];
				$Nom=$row['Nom'];
				$Description=$row['Description'];
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
		<td>Description</td>
		<td><input type="text" name="Description" value="<?PHP echo $Description ?>"></td>
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
			$Activite=new activite($_POST['Nom'],$_POST['Description'],$Image);
			
			$Activite1C->modifierActivite($Activite,$_POST['Id']);
			
			header('location:ListeActivite.php');
			
		}
		?>

