<?php
include_once "../../config.php";
class promotionC
{
    function calculPromo($promotion)
    {
        $sql= "SELECT * From promotion"; 
        $db= config::getConnection();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }
function ajouterPromotion($promotion)
    {
        
 
      
        $sql = "INSERT into promotion (pourcentage,dateDebut,dateFin,idProduit) 
                values (:pourcentage,:dateDebut,:dateFin,:idProduit) ";

        $db = config::getConnection();

        try{

        $req=$db->prepare($sql);
		
        $pourcentage=$promotion->getPourcentage();
        $dateDebut=$promotion->getdateDebut();
        $dateFin=$promotion->getdateFin();
        $idProduit=$promotion->getidProduit();
    
		$req->bindValue(':pourcentage',$pourcentage);
        $req->bindValue(':dateDebut',$dateDebut);
        $req->bindValue(':dateFin',$dateFin);
		$req->bindValue(':idProduit',$idProduit);
        
        $req->execute();
    

        }catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }
    function afficherPromotion()
    {
        $sql= "SELECT * From promotion"; 
        $db= config::getConnection();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }




    
 function trouverPromotion($idPromotion)
 {
 $sql="SELECT * FROM promotion where idPromotion='$idPromotion' ";
 $db= config::getConnection();
 try{
     $promotion=$db->query($sql);
     return $promotion;
     }
 catch (Exception $e){
     die('Erreur: '.$e->getMessage());
     }
 }

function supprimerPromotion($idPromotion)
{
    $sql="DELETE FROM promotion where idPromotion='$idPromotion'";
    $db= config::getConnection();
    $req = $db->prepare($sql);
		
		try {
            
			$req->execute();
			
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    
}


 function modifierPromotion($promotion,$idPromotion)
 {
    $sql="UPDATE promotion SET  pourcentage=:pourcentage,dateDebut=:dateDebut,dateFin=:dateFin,idProduit=:idProduit WHERE idPromotion='$idPromotion' ";
    
    $db = config::getConnection();
    try{

        $req=$db->prepare($sql);
		
        
        $pourcentage=$promotion->getPourcentage();
        $dateDebut=$promotion->getdateDebut();
        $dateFin=$promotion->getdateFin();
        $idProduit=$promotion->getidProduit();
    
        
		$req->bindValue(':pourcentage',$pourcentage);
        $req->bindValue(':dateDebut',$dateDebut);
        $req->bindValue(':dateFin',$dateFin);
		$req->bindValue(':idProduit',$idProduit);
        
        $req->execute();
    

    
    
 
        
       // header('Location: index.php');
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();

    }
    
}

    
}









?>
