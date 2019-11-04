<?php

	$id = $_POST['id']; //recuperation de l'ID
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=projetJV;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}

    $reponse = $bdd->query('SELECT id FROM jeuVideo');

	$req = $bdd->prepare('DELETE FROM jeuVideo WHERE id = :id'); //selection l'element dans la Base de données
	$req->execute(array( //execute l'action
		'id' => $id 
		));

	echo json_encode($_POST);
	exit;
	


