<?php function userConnecte(){
	if(isset($_SESSION['membre'])){
		return true; 
	}
	else{
		return false; 
	}
}

function userAdmin(){
	if(userConnecte() && $_SESSION['membre']['statut'] == '1'){
		return true;
	}
	else{
		return false;
	}
}

?>
			
