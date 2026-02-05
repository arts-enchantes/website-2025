<!DOCTYPE html>

<html lang="fr"> 

<head>
<title>Les Arts EnChantes</title>
<meta name="description" content="Les Arts Enchantés" />

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-Language" content="fr" />

</head>
<body>



<?php
$today=date("d/m/Y-H:i:s");
$mailde=(isset($_POST["mail"]))?$_POST["mail"]:'';
$select=(isset($_POST["select"]))?$_POST["select"]:'';
$message1=(isset($_POST["message"]))?$_POST["message"]:'';
$message = wordwrap($message1, 70, "\r\n");


if($mailde==""){
print("<center><br /><br />Veuillez entrer votre une adresse email, merci.</center>");
}

if($message == ""){
print("<center><br /><br />Veuillez noter votre message, merci.</center>");
}

if($mailde=="" || $message==""){
print("<center><br /><br /><input type=\"button\" value=\" Retour \" onclick=\"javascript:history.back(-1)\" /></center>");
}

if($mailde != ""){

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
$message_txt = "Le $today \n" . " Nouveau message : \n A propos de : $select \n Contact : $mailde \n\n" . "$message";
//==========
  
//=====Création de la boundary.
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Message";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: $mailde".$passage_ligne;
$header.= "Reply-to: $mailde".$passage_ligne;
$header.= "Bcc:arthurack@yahoo.fr".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//========== 
 

 
//=====Envoi de l'e-mail.
if (mail($mail,$sujet,$message,$header)){
echo "<!DOCTYPE html>

<html lang=\"fr\"> 

<head>
<title>Les Arts EnChantes</title>
<meta name=\"description\" content=\"Les Arts Enchantés\" />

<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
<meta http-equiv=\"content-Language\" content=\"fr\" />
</head>

<body>

<center><br /><br />Votre message &#224 bien &#233t&#233 envoy&#233. Merci!
<br /><br />

<a href=\"accueil.html\">Retour vers l'accueil</a>
</center>
</body>
</html>";
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
