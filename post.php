<?php

/* Endpoint requête POST ajout de tweet dans la base de donnée dbtw 

 (si tous les champs sont remplis alors ajout du tweet dans la bdd) */
 
	if(!empty($_POST["send"])) {

		$user =( $_POST['user']);
		$msg =( $_POST['msg']);
		$tags =( $_POST["tags"]);
		$date =( $_POST["date"]);
			
		// Connexion bdd dbtw pour ajout d'un tweet dans la table tweet
			include("db_connect.php");
			
			$result = mysqli_query($connexion, "INSERT INTO tweet (user,msg,tags,date) VALUES ('" . $user. "', '" . $msg. "','" . $tags. "','" . $date. "')");
			if($result){
				$db_msg = "Vos informations de contact sont enregistrées avec succés.";
				$type_db_msg = "success";
			}else{
				$db_msg = "Erreur lors de la tentative d'enregistrement de contact.";
				$type_db_msg = "error";
			}
			
		}
		
?>