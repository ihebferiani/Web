<?PHP
include "config.php";
class LoginC {

	function login($mail,$mdp){
		$sql="SElECT * From user_info where email='".$mail."' and password='".$mdp."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
			return 0;

        }	
	}

	
}

?>