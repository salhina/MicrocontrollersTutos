

<?php

$Nom=0 ;
$prenom=0 ;
$email=0 ;
$comments=0 ;

foreach($_POST as $d =>$val) 
{	if ( $d=="Nom") {$Nom = $val ;}
	if ( $d=="prenom") {$prenom = $val ;}
	if ( $d=="email") {$email = $val ;}
	if ( $d=="comments") {$comments = $val ;}
}

$quand = date("d M Y H:i:s"); //Temps
$fp = fopen("logz.log","a+"); //Ouverture ou création du fichier
fputs($fp, "| <a href='mailto:".$email."'> ".$Nom." ".$prenom."</a> a comment&eacute; le \"".$quand."\", et il a &eacute;crit : <div class=\"com_nabil\" >
".$comments." </div> ");
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