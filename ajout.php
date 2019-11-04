<?php

if (isset($_POST["titre"]) AND !empty($_POST["titre"]) AND isset($_POST["editeur"]) AND !empty($_POST["editeur"]) AND isset($_POST["prix"]) AND !empty($_POST["prix"]) AND isset($_POST["resume"]) AND !empty($_POST["resume"]) )
{
	$jeu = array( //tableau contenant toutes les informations
		'titre' => $_POST["titre"],
		'editeur' => $_POST["editeur"],
		'prix' => $_POST["prix"],
		'resume' => $_POST["resume"],
	);

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=projetJV;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare('INSERT INTO jeuVideo(titre, editeur, prix, resume) VALUES(:titre, :editeur, :prix, :resume)'); //prepare l'envoie à la base de donées
	$req->execute( //envoie le tableau "$jeu"
			$jeu
		);

	
	$jeu["id"] = $bdd->lastInsertId(); //on recupere le dernier ID posté

	echo json_encode($jeu);
	exit;
}
else
{
	echo "Erreur 404";
}
