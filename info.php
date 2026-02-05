<!DOCTYPE html>

<html lang="fr"> 

<head>
<title>Les Arts EnChantés</title>
<meta name="description" content="Les Arts Enchantés" />

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-Language" content="fr" />

</head>
<body>



<?php
$today=date("d/m/Y-H:i:s");
$mailde=(isset($_POST["mailinfo"]))?$_POST["mailinfo"]:'';


if($mailde==""){
print("<center><br /><br />Veuillez entrer, s'il vous plaît, 
une adresse électronique, merci.
<br /><br /><input type=\"button\" value=\" Retour \" onclick=\"javascript:history.back(-1)\" /></center>");
}

else{

?>

<table align="center" border=1 cellpadding=20><tr><td><table><tr><td align="center">

<?php
$mail = 'artsenchantes@gmail.com';
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte.
$message_txt = "Le $today \n" . " Demande de lettre d'informations : \n Contact : $mailde \n\n";
//==========
  
//=====Création de la boundary.
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Demande de suivi";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: $mailde".$passage_ligne;
$header.= "Reply-to: $mailde".$passage_ligne;
$header.= "Bcc:arthurack@yahoo.fr".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//========== 
 

 
//=====Envoi de l'e-mail.
if (mail($mail,$sujet,$message_txt,$header)){
echo "<center><br /><br />Votre message a été envoyé.<br /><br />
Vous recevrez nos lettres d'information à l'adresse indiquée.<br /><br />
Merci à vous.<br /><br />
<a href=\"accueil.html\">Retour à l'accueil</a>
</center>";
}

else{
echo"<center><br /><br />Message non transmis, erreur de connexion !
<br /><br /><br />
<input type=\"button\" name=\"retour\" value=\"  Retour  \" onclick=\"javascript:history.back(-1)\" /></center>";
}         
}
?>
			   
</td></tr></table></td></tr></table>

</body>
</html>				
