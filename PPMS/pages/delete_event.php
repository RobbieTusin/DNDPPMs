<?php
 
$id=$_POST['id'];

echo "shit";
 
// connexion à la base de données
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=pmr_database', 'root', '');
 } catch(Exception $e) {
 exit('Impossible de se connecter à la base de données.');
 }
 
$sql = "DELETE from calendar WHERE id=".$id;
$q = $bdd->prepare($sql);
$q->execute();
?>