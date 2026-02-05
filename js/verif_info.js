function verif_info(){



if(document.lettreinfo.mailinfo.value.length==0){
alert("Veuillez entrer, s'il vous plaît, une adresse électronique ou un numéro de téléphone, merci");
document.getElementById("mailinfo").style.background="#ffff00";
document.getElementById("mailinfo").focus();
return false;}

else {
document.getElementById("mailinfo").style.background="";

return true;}

}
