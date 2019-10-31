<?php

if (isset($_POST["titre"]) AND !empty($_POST["titre"]) AND isset($_POST["editeur"]) AND !empty($_POST["editeur"]) AND isset($_POST["prix"]) AND !empty($_POST["prix"]) AND isset($_POST["resume"]) AND !empty($_POST["resume"]) )
{
	$titre = $_POST["titre"];
	$editeur = $_POST["editeur"];
	$prix = $_POST["prix"];
	$resume = $_POST["resume"];

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=projetJV;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare('INSERT INTO jeuVideo(titre, editeur, prix, resume) VALUES(:titre, :editeur, :prix, :resume)');
	$req->execute(array(
		'titre' => $titre,
		'editeur' => $editeur,
		'prix' => $prix,
		'resume' => $resume,
		));

	echo json_encode($_POST);
	exit;
}
else
{
	echo "Erreur 404";
}
