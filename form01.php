<?php

	$Civilite = htmlspecialchars($_POST["Civilite"]);
	$Nom = htmlspecialchars($_POST["Nom"]);
	$Prenom = htmlspecialchars($_POST["Prenom"]);
	$Remarques = htmlspecialchars($_POST["Remarques"]);
	$Mail = htmlspecialchars($_POST["Mail"]);
	$Telephone = htmlspecialchars($_POST["Telephone"]);
	$Societe = htmlspecialchars($_POST["Societe"]);
echo("ça fonctionne enfin ");

	// 1 : on ouvre le fichier
	$monfichier = fopen('donneesformulaire.txt', 'a+');
	fputs($monfichier, "==================================\n"); 
	fputs($monfichier, $Civilite."\n");
	fputs($monfichier, $Nom."\n"); 
	fputs($monfichier, $Prenom."\n");
	fputs($monfichier, $Societe."\n"); 
	fputs($monfichier, $Mail."\n");
	fputs($monfichier, $Telephone."\n");
	fputs($monfichier, $Remarques."\n");

	// 3 : quand on a fini de l'utiliser, on ferme le fichier
	fclose($monfichier);

?>



