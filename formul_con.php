<style>
body {
 font-family:"trebuchet ms",sans-serif;
 font-size:95%;
 }
form {
 background-color:#FAFAFA;
 padding:10px;
 width:98%;
 }
fieldset {
 padding:0 20px 20px 20px;
 margin-bottom:10px;
 border:1px solid #DF3F3F;
 }
legend {
 color:#DF3F3F;
 font-weight:bold
 }
label {
 margin-top:10px;
 display:block;
 }
label.inline {
 display:inline;
 margin-right:50px;
 }
input, textarea, select, option {
 background-color:#FFF3F3;
 }
input, textarea, select {
 padding:3px;
 border:1px solid #F5C5C5;
 border-radius:5px;
 width:100% ;
 box-shadow:1px 1px 2px #C0C0C0 inset;
 }
select {
 margin-top:10px;
 }
input[type=radio] {
 background-color:transparent;
 border:none;
 width:10px;
 }
input[type=submit], input[type=reset] {
 width:100px;
 margin-left:5px;
 box-shadow:1px 1px 1px #D83F3D;
 cursor:pointer;
 }





</style>


<form action="comt/toto.php" method="post" >

<fieldset>
 <legend> Les Commentaires: </legend>
   <p>les commentaires recents :</p>
   <?php require("logz.log");?>
   
</fieldset>

<fieldset>
 <legend>Donner votre Avis  :</legend>
 <label for="email">Votre Nom:</label>
   <input type="text" name="Nom" size="20" 
   maxlength="40" value="Nom" id="Nom" />
 
 <label for="email">Votre Pr&eacute;nom :</label>
   <input type="Text" name="prenom" size="20" 
   maxlength="40" value="pr&eacute;nom" id="prenom" />
 
  <label for="email">Votre email :</label>
   <input type="email" name="email" size="20" 
   maxlength="40" value="email" id="email" />

  <label for="comments">Vos commentaires :</label>
   <textarea name="comments" id="comments" cols="20" rows="4">
   </textarea>
</fieldset>

 <p>
 <input type="submit" value="Envoyer" />
 <input type="reset" value="Annuler" />
 </p>

</form>