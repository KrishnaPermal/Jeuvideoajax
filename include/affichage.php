<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetJV;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM jeuVideo'); //selectionne dans la Base de donnée

while ($donnees = $reponse->fetch()) //affiche les resultats de la Base de données
{
?>
    <p id="jeu_<?php echo $donnees['id'] ?>">
        Titre : <?php echo $donnees["titre"]; ?>.
        Éditeur : <?php echo $donnees["editeur"]; ?>.
        Prix : <?php echo $donnees["prix"]; ?> €.
        Resumer : <?php echo $donnees["resume"]; ?>.
        <button onclick='suppression( <?php echo $donnees["id"]; ?> )'>Supprimer</button>
    </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>