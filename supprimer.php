<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=projetJV;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}

    $reponse = $bdd->query('SELECT id FROM jeuVideo');

	$req = $bdd->prepare('DELETE FROM jeuVideo WHERE id = :id');
	$req->execute(array(
		'id' => $id
		));

	echo json_encode($_POST);
	exit;

