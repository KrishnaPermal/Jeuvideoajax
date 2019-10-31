<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link src="css/style.css" rel="stylesheet">
    <title>Jeux vidéo</title>
</head>
<body>

<?php
include 'include/affichage.php';
?>
<p id="test"></p>
<form onsubmit="envoie()" id="formAjout">

    <label for="titre">Titre :</label>
    <input name="titre" type="text" id="titre">

    <label for="editeur">Éditeur :</label>
    <input name="editeur" type="text" id="editeur">

    <label for="prix">Prix :</label>
    <input name="prix" type="text" id="prix">

    <label for="resume">Résumé :</label>
    <input name="resume" type="text" id="resume">

    <input type="submit" id="btn_form" value="Ajouter">
</form>

<br>

<form  onsubmit="suppression()">

    <label for="titre_a_supprimer">Titre de l'élément à supprimer :</label>
    <input name="titre_a_supprimer" type="text" id="titre_a_supprimer">

    <input type="submit" id="btn_form_supprimer" value="Supprimer">
</form>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-3.4.1.js"></script>
<script src="js/script.js"></script> <!-- Attention chargement dans l'orde d'apparition / de Haut en Bas-->
</body>
</html>