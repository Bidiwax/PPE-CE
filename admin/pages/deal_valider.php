<?php
include_once '../../includes/db_connect.php';
include_once '../../includes/functions.php';

	//récupération des valeurs des champs:
	//titre:
	$titre     = $_POST["titre"];
	//categorie:
	$categorie = $_POST["categorie"];
	// description:
	$description = $_POST["description"];
	//date début:
	$date_debut = $_POST["date_debut"];
	//date fin:
	$date_fin = $_POST["date_fin"];
	//Places disponibles:
	$places_disponibles = $_POST["places_disponibles"];
	//prix:
	$prix = $_POST["prix"];
	
	//création de la requête SQL:
	$requete_news = $bdd -> prepare ("INSERT INTO deals (titre, categorie, description, date_debut, date_fin, places_disponibles, prix)
            VALUES ( :titre, :categorie, :description, :date_debut, :date_fin, :places_disponibles, :prix) ");
	
	//execution de la requete
	$requete_news -> execute(array(
		"titre" => $titre,
		"categorie" => $categorie,
		"description" => $description,
		"date_debut" => $date_debut,
		"date_fin" => $date_fin,
		"places_disponibles" => $places_disponibles,
		"prix" => $prix
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