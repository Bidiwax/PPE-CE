<?php
include_once '../../includes/db_connect.php';
include_once '../../includes/functions.php';

	//récupération des valeurs des champs:
	//titre:
	$titre     = $_POST["titre"] ;
	//article:
	$article = $_POST["article"] ;
	//date:
	$date = $_POST["date"] ;
   
	//création de la requête SQL:
	$requete_news = $bdd -> prepare ("INSERT INTO news (titre, article, date)
            VALUES ( :titre, :article, :date) ");
	
	//execution de la requete
	$requete_news -> execute(array(
		"titre" => $titre,
		"article" => $article,
		"date" => $date
		));
	//affichage des résultats, pour savoir si l'insertion a marchée:
	if($bdd)
	{
		echo("<meta http-equiv=\"refresh\" content=\"4;news.php\" /> La mise à jour a été correctement effectuée") ;
	}
	else
	{
		echo("<meta http-equiv=\"refresh\" content=\"4;news_editer.php\" />La mise à jour à échoué") ;
	}
?>
