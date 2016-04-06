<?php
include_once '../../includes/db_connect.php';
include_once '../../includes/functions.php';

  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement supprimer:
  $id  = $_POST["id"] ;
 
  //requête SQL:
  	$requete_sql = $bdd -> prepare ("DELETE FROM news WHERE id = :id" );
  
	//execution de la requete
	$requete_sql -> execute(array(
		"id" => $id
		));
  //affichage des résultats, pour savoir si la suppression a marchée:
  if($requete_sql)
  {
    echo("<meta http-equiv=\"refresh\" content=\"4;news.php\" />La suppression à été correctement effectuée") ;
  }
  else
  {
    echo("<meta http-equiv=\"refresh\" content=\"4;news.php\" />La suppression à échouée") ;
  }
?>
