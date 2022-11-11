<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '')

if(isset($_POST['forminscription']))
{
	echo "ok";
}

?>

<html>
<head>
	<title>Connexion membre</title>
	<meta charset="utf-8">
</head>
<body>
	<div align="center">
		<h2>Inscription</h2>
		<br /><br />
		<form method="POST" action="">
			<div>
		<table>
			
			<tr>
		<td align="right">
			<label for="
			pseudo">Pseudo :
		</label>
			</td>
			<td align="right">
			<input type="
			text"
			placeholder="Votre pseudo" id
			="pseudo" name="
			pseudo" />
			</td>
		</tr>
			<tr>
		<td align="right">
			<label for="mail">Mail :</label>
			</td>
			<td align="right">
			<input type="text" placeholder="Votre mail" id="mail" name="mail" />
			</td>
		</tr>
		<tr>
		<td align="right">
			<label for="mail2">Confirmation du mail :</label>
			</td>
			<td align="right">
			<input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2"/>
			</td>
		</tr>

		<tr>
		    <td align="right">
			<label for="mdp">Mot de passe :</label>
			</td>
			<td align="right">
			<input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp"/>
			</td>
			<tr>
		    <td align="right">
			<label for="mdp2">Confirmation du mot de passe :</label>
			</td>
			<td align="right">
			<input type="password" placeholder="Confirmer votre mdp" id="mdp2" name="mdp2"/>
			</td>
		</tr>
		<tr>
			<td></td>
			<td align="center">
				<br />
				<input type="submit" name="forminscription" value="Je m'inscris" />
			</td>
		</tr>
	</table>
		</form>
	</div>
   </body>
</html>
