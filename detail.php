<?php require "head/header.php";

if(isset($_get["isbn"])){
    $id=$_Get["isbn"];
  }

$titre = $link->query("SELECT titre FROM livre WHERE isbn=$id")->fetch_assoc();
$genre = $link->query("SELECT Genre.libelle FROM livre JOIN Genre ON Genre.id = Livre.genre WHERE isbn=$id")->fetch_assoc();
$editeur = $link->query("SELECT Editeur.libelle FROM livre JOIN Editeur ON Editeur.id = Livre.editeur WHERE isbn=$id")->fetch_assoc();
$date = $link->query("SELECT annee FROM livre WHERE isbn=$id")->fetch_assoc();
$nbpages = $link->query("SELECT nbpages FROM livre WHERE isbn=$id")->fetch_assoc();
$autid = $link->query("SELECT Personne.id FROM Livre JOIN Auteur ON Livre.isbn = Auteur.idLivre JOIN Personne ON Personne.id = Auteur.idPersonne JOIN Role ON Role.id = Auteur.idRole WHERE isbn=$id AND Role.libelle='Auteur'")->fetch_assoc();
$nom = $link->query("SELECT Personne.nom FROM livre JOIN Auteur ON Livre.isbn = Auteur.idlivre JOIN Personne ON Personne.id = Auteur.idPersonne JOIN Role ON Role.id = Auteur.idRole WHERE isbn=$id AND Role.libelle='AUTEUR'")->fetch_assoc();
$prenom = $link->query("SELECT Personne.prenom FROM livre JOIN Auteur ON Livre.isbn = Auteur.idlivre JOIN Personne ON Personne.id = Auteur.idPersonne JOIN Role ON Role.id = Auteur.idRole WHERE isbn=$id  AND Role.libelle='AUTEUR'")->fetch_assoc();
$illusnom = $link->query("SELECT Personne.id FROM livre JOIN Auteur ON Livre.isbn = Auteur.idlivre JOIN Personne ON Personne.id = Auteur.idPersonne JOIN Role ON Role.id = Auteur.idRole WHERE isbn=$id  AND Role.libelle='Illustrateur'")->fetch_assoc();
$illustrateur_id = $link->query("SELECT Personne.id FROM livre JOIN Auteur ON Livre.isbn = Auteur.idlivre JOIN Personne ON Personne.id = Auteur.idPersonne JOIN Role ON Role.id = Auteur.idRole WHERE isbn=$id  AND Role.libelle='Illustrateur'")->fetch_assoc();
$illusprenom = $link->query("SELECT Personne.id FROM livre JOIN Auteur ON Livre.isbn = Auteur.idlivre JOIN Personne ON Personne.id = Auteur.idPersonne JOIN Role ON Role.id = Auteur.idRole WHERE isbn=$id  AND Role.libelle='Illustrateur'")->fetch_assoc();


echo "<br>";
		echo "<img src='image/".$id.".jpg'  height='777,515625' width='590,625'>";
    echo "  <ul class='livre1' >";
		echo "<p><a href='".$id_aut['num'].".php?perso=".$autid['num']."'>Auteur: ".$prenom_aut['prenom']." ".$nom_aut['nom']."</a></p>";
		echo "<p><a href='".$illustrateur_id['num'].".php?perso=".$illustrateur_id['num']."'>Illustrateur: ".$illusprenom['prenom']." ".$illusnom['nom']."</a></p>";
		echo "<p>Date de parution: ".$date['annee']."</p>";
		echo "<p>Editeur: ".$editeur['libelle']."</p>";
		echo "<p>Nombres de pages:".$nbpages['nbpages']."</p>";
		echo "<p>Genre: ".$genre['libelle']."</p>";
		echo "<p>Numéro isbn: ".$id."</p>";

      echo "</ul>";



?>































?>
