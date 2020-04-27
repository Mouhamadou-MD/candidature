<?php

	$civilites = array(
	
		 "m" => "Monsieur" ,
		 "mme" => "Madame" ,
		 "mlle" => "Mademoiselle" 
	) ;
	
	$fram = array(
		"1" => "Symfony" ,
		"2" => "CodeIgniter" ,
		"3" => "FuelPHP",
		"4" => "CakePHP",
		"5" => "Laravel"
	) ;
	
	$niveauphp = array(
	
		 "deb" => "Debutant" ,
		 "moy" => "Moyen" ,
		 "bon" => "Bon" 
	);
	
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice 8-V2</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="texte/css" href="style.css" media="screen"/>
    </head>

    <body>
		
		<h3>Récapitulation :</h3> 
		
		<table>
		<tr>
		<td>Civilité</td>
		<td> <?php echo $civilites[$_GET['civilite']]?></td>
		</tr>
		<tr> 
		<td> Nom </td>
		<td> <?php echo $_GET["nom"] ?> </td>
		</tr>
		<tr>	
		<td>Prénom</td>	 
		<td><?php echo $_GET["prenom"] ?> </td>
		</tr>
		<tr>
		<td> Date de naissance </td>
		<td> <?php echo $_GET["date"] ?> </td>
		</tr>
		<tr>
		<td> Téléphone </td>
		<td> <?php echo $_GET["telephone"] ?> </td>
		</tr>
		<tr>
		<td> Email </td>	
		<td> <?php echo $_GET["email"] ?> </td>
		</tr>
		<tr>
		<td> Niveau en PHP </td>
		<td> <?php echo $niveauphp[$_GET['niveau']] ?> </td>
		</tr>
		<tr>
		<td> Frameworks PHP </td>
		<td> <?php  echo "<li>".$fram[$_GET['fram']]."</li>" ?></td>
		</tr>
		<tr>
		<td> Presentation parcours </td>
		<td> <?php echo $_GET["parcours"] ?> </td>
		</tr>
		
		
		
		</table>
		<br/>
		<a href="saisieCandidature.html">
			<?php echo "Retour"; ?> </a>
	</body>

</html>	
