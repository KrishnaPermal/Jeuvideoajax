<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetJV;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM jeuVideo');

while ($donnees = $reponse->fetch())
{
?>
    <p>
        Titre : <?php echo $donnees["titre"]; ?>.
        Editeur : <?php echo $donnees["editeur"]; ?>.
        Prix : <?php echo $donnees["prix"]; ?> €.
        Resumer : <?php echo $donnees["resume"]; ?>.
        <button onclick='suppression( <?php echo $donnees["id"]; ?> )'>Remove</button>
    </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>