
<?PHP
include_once "../../config.php";

class ProduitCore
{
	function afficherProduit()
	{ 
       
        $sql= "SELECT* From Produit order by Nom "; 
        $db= config::getConnection();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }

	}
    
   

    function modifierProduit($Produit,$id){
        $sql="UPDATE Produit SET Image=:Image,Nom=:Nom,Description=:Description,Prix=:Prix  WHERE id='$id'";
        
        $db = config::getConnection();
        try{
    
            $req=$db->prepare($sql);
            
            
            $Image=$Produit->getImage();
      
            $Nom=$Produit->getNom();
            
            $Description=$Produit->getDescription();
            $Prix=$Produit->getPrix();
           
            $req->bindValue(':Image',$Image);
            $req->bindValue(':Nom',$Nom);
            $req->bindValue(':Description',$Description);
            $req->bindValue(':Prix',$Prix);
          
                  
            $req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
        }
        
    }
   
   
	function AjouterProduit($Produit)
	{
		$sql = "INSERT INTO Produit (Image,Nom,Description,Prix) values (:Image,:Nom,:Description,:Prix)";
		$db = Config::getConnection();
		try {

			$req = $db->prepare($sql);

            $Image=$Produit->getImage();
          
            $Nom=$Produit->getNom();
            
            $Description=$Produit->getDescription();
            $Prix=$Produit->getPrix();
          

           
            $req->bindValue(':Image',$Image);
            $req->bindValue(':Nom',$Nom);
            $req->bindValue(':Description',$Description);
            $req->bindValue(':Prix',$Prix);

            
            
                  


			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	
	function SupprimerProduit($id)
	{
		$sql = "DELETE FROM Produit where id='$id'";
		$db = config::getConnection();
		try {
            $req = $db->prepare($sql);
			$req->execute();
		
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    }
    function rechercheProduit($id){
        $sql="SELECT * FROM Produit where id='$id'";
        $db = config::getConnection();
        try{
            $Produit=$db->query($sql);
            return $Produit;
        }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    } 
}