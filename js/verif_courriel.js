function verif_courriel(){



if(document.courriel.mail.value.length==0){
alert("Veuillez entrer, s'il vous plaît, une adresse électronique ou un numéro de téléphone, merci");
document.getElementById("mail").style.background="#ffff00";
document.getElementById("mail").focus();
return false;}
else {
document.getElementById("mail").style.background="";}

if(document.courriel.message.value.length==0){
alert("Veuillez entrer, s'il vous plaît, votre message, merci");
document.getElementById("message").focus();
document.getElementById("message").style.background="#ffff00";
return false;}

else{
document.getElementById("message").style.background="";
return true;}

}
