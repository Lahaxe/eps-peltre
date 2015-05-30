<?php
include "f_connexion.php";
include "c_commentaire.php";

function newZoneComm($reference)
{
	echo 	"<input type=\"hidden\" name=\"comm_ref\" value=\"".$reference."\" />";
	echo "<table>";
	echo "<tr>";
	echo "<td class=\"titlecomm\" colspan=2>Laissez un commentaire</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td class=\"colname\">Nom :</td>";
	echo "<td><input name='comm_name' type='text' size='40'></input></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td colspan=2><textarea name='comm_text' cols='40' rows='3'></textarea></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td></td>";
	echo "<td align=\"right\"><input type='submit' value='Envoyer' /></td>";
	echo "</tr>";
	echo "</table>";
}

function enregistrerComm($commentaire)
{
	$connection = connect_to("epsComm");
	
	$requete = "INSERT INTO commentaires (comm_id, comm_ref, comm_date, comm_pseudo, comm_texte, comm_valider) VALUES (NULL,'".$commentaire->m__ref."','".$commentaire->m__date."','".$commentaire->m__pseudo."','".$commentaire->m__texte."',0)";
	$requete = mysql_query($requete) or die(mysql_error());
	
	deconnect($connection);
}

function listerCommNonValide()
{
	$connection = connect_to("epsComm");
	
	$requete = "SELECT * FROM commentaires WHERE comm_valider = 0";
	$requete = mysql_query($requete) or die(mysql_error());
	
	deconnect($connection);

	echo 	"<input type=\"hidden\" name=\"valid_ok\" value=\"true\" />";
	echo 	"<table border=1 width='800'>";
	echo 	"<tr align='center'>";
	echo 	"<th>Date</th>";
	echo 	"<th>Nom</th>";
	echo 	"<th>Commentaire</th>";
	echo 	"<th>valider</th>";
	echo 	"<th>supprimer</th>";
	echo 	"</tr>";
	while ($res_comm = mysql_fetch_array($requete))
	{
		echo 	"<tr>";
		echo 	"<td>".$res_comm['comm_date']."</td>";
		echo 	"<td>".$res_comm['comm_pseudo']."</td>";
		echo 	"<td>".$res_comm['comm_texte']."</td>";
		echo "<td><input type='checkbox' name='valid_".$res_comm['comm_id']."' /></td>";
		echo "<td><input type='checkbox' name='supp_".$res_comm['comm_id']."' /></td>";
		echo 	"</tr>";
	}
	echo "<tr>";
	echo "<td align=\"right\" colspan=5><input type='reset' value='Annuler'></input>";
	echo "<input type='submit' value='Envoyer'></input></td>";
	echo "</tr>";
	echo 	"</table>";
}

function GetMaxID()
{
	$connection = connect_to("epsComm");
	$requete = "SELECT MAX(comm_id) FROM commentaires";
	$requ = mysql_query($requete); 
	deconnect($connection);
	
	return mysql_result($requ, 0);
}

function validerComm($comm_id)
{
	$connection = connect_to("epsComm");
	
	$requete = "UPDATE commentaires SET comm_valider = '1' WHERE comm_id = '".$comm_id."'";
	$requete = mysql_query($requete) or die(mysql_error());
	
	deconnect($connection);
}

function supprimerComm($comm_id)
{
	$connection = connect_to("epsComm");
	
	$requete = "DELETE FROM commentaires WHERE comm_id = '".$comm_id."'";
	$requete = mysql_query($requete) or die(mysql_error());
	
	deconnect($connection);
}

function afficherComm($reference)
{
	$connection = connect_to("epsComm");
	
	$requete = "SELECT * FROM commentaires WHERE comm_ref = '".$reference."' AND comm_valider = 1 ORDER BY comm_id DESC";
	$requete_r = mysql_query($requete) or die(mysql_error());
	
	deconnect($connection);

	$count = 0;
	echo "<table>";
	while ($res_com = mysql_fetch_array($requete_r))
	{
		if ($count < 3)
		{
		echo 	"<tr>";
		echo 	"<td class=\"poste\">Posté par ".$res_com['comm_pseudo'].", date : ".$res_com['comm_date']."</td>";
		echo 	"</tr>";
		echo 	"<tr>";
		echo 	"<td class=\"texte\">".$res_com['comm_texte']."</td>";
		echo 	"</tr>";
		}
		$count = $count + 1;
	}
	echo 	"</table>";
}

?>