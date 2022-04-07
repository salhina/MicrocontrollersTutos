<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">

.nnnnn {
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #999;
	border-right-color: #999;
	border-bottom-color: #999;
	border-left-color: #999;
	font-family: "Times New Roman", Times, serif;
	font-size: 12px;
	color: #030;
	background-color: #6FF;
}
body form table {
	text-align: left;
}
</style></head><body>
<p><font size="5"><em>Donnez votre avis!!</em></font></p>
<div class="nnnnn" >
<?php
require("logz.log");
?>
</div>
<hr>
<!-- Début du formulaire -->

<form method="POST" action="comt/enreg.php">

	
    <table width="347" border="1" summary="salhi">
      <caption>
      Saisie des Commentaires
      </caption>
      <tr>
        <th align="left" scope="row">Entrez votre nom :</th>
        <td><input type="text" size="20" name="pseudo" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Entrez votre Prènom :</th>
        <td><input type="text" size="20" name="titre" /></td>
      </tr>
      <tr>
        <th align="left" scope="row">Entrez votre adresse e-mail : </th>
        <td><input type="text" size="20" name="email" /></td>
      </tr>
      <tr align="left">
        <th colspan="2" scope="row">Donnez vos commentaires : </th>
      </tr>
      <tr align="left">
        <th colspan="2" scope="row"><textarea name="commentaires" rows="7" cols="70"></textarea></th>
      </tr>
    </table>

    
  <div align="right">
    <input type="submit" value="Valider">
  </div>
</form>
	
<!-- Fin du formulaire -->
<hr>

<p>&nbsp;</p>
</body></html>