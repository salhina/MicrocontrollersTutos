

<?php

$email=0 ;
$pseudo=0 ;
$titre=0 ;
$commentaires=0 ;

foreach($_POST as $d =>$val) 
{	if ( $d=="email") {$email = $val ;}
	if ( $d=="pseudo") {$pseudo = $val ;}
	if ( $d=="titre") {$titre = $val ;}
	if ( $d=="commentaires") {$commentaires = $val ;}
}

$quand = date("d M Y H:i:s"); //Temps
$fp = fopen("logz.log","a+"); //Ouverture ou création du fichier
fputs($fp, "| <a href='mailto:".$email."'> ".$pseudo." </a> qui a comme Nom : ".$titre."; le ".$quand." et il a écrit ".$commentaires." <br />");
fclose($fp);//Ecriture et fermeture du fichier
?>

<HTML><HEAD>
<script language='JavaScript'>
var url = "../test_IHM.php"; <!-- Redirection du visiteur -->
window.location.replace(url);
</script></HEAD>
<BODY>
</BODY>
</HTML>