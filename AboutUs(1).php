<?php 
   session_start() ;
   ob_start() ;
   ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128983313-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128983313-1');
</script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>IHM -- Test mode - By nabil</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="twoColFixLt.css" rel="stylesheet" type="text/css" />
<link href="sub_menu.css" rel="stylesheet" type="text/css" />
<link href="csstooltip.css" rel="stylesheet" type="text/css" />
<?php
//session_start();
?>
<style type="text/css">
.container .content h1 em strong {
	color: #006;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-weight: bold;
	text-align: center;
}

</style>


</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


     <div class=topp > <marquee>
          Application basic_µC.....TestMode ---- by S.nabil
      </marquee></div>


<div class="container">
  <div class="nabil_head">     
    <div align="center"><div class="bienv"> Bienvenue au monde de l'Eléctronique Pratique </div>
   <!-- <div class="comma" id="como" >
     <div style="background-color:#060; font-size:10px"> <marquee>
          Application basic_µC.....TestMode ---- by S.nabil
      </marquee></div>
  </div>-->
    </div>

    <!-- end .nabil_menu --></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="test_IHM.php">	I - Chenillard </a></li>
      <li><a href="test_IHM_II.php">	II - Timer </a></li>
      <li><a href="test_IHM_III.php">	III - Afficheur 7 segments:</a></li>
      <li><a href="test_IHM_IV.php">	IV - Afficheur LCD</a></li>
      <li><a href="AboutUs.php">	About US</a></li>
    </ul>
    
    
    <div  class="gg">
      <ul>
        <li><a href="#Linkeddin" class="tooltips" id="lien-bouton">LinkedIn
        <span>Cliquer ici pour accéder à LinkedIn</span></a></li>
        <br />
        <li><a href="#facebook" class="tooltips" id="lien-bouton">Comments 
        <span>Cliquer ici pour accéder à Facebook Comment</span> </a></li>
        <br />
        
       </ul>
    </div>
    
    <br/>
 <hr />
 
    <p>Apropos d'Auteur :</p>
    <p align="center">Salhi nabil</p>
    <hr />
    
    <p>On actuellement :
   <?php include('vue/cmpt_vue.php'); ?>
	</p>
       


    <!-- end .sidebar1 -->
  </div>
  <div class="content">


    <p><img src="img/Application_C2.png"  width="772" height="75" alt="Appicaion basic _Microcontromeaus"/>    </p>


    <p><strong>Contact us</strong> :</p>
   
    <div id="Linkeddin"  class="contenteeeee"   style="text-align:center; margin:3px">
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
    <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="vertical" data-theme="dark" data-vanity="nabil-salhi-02b4bb56"><a class="LI-simple-link" href='https://ae.linkedin.com/in/nabil-salhi-02b4bb56/en?trk=profile-badge'  >Nabil SALHI</a></div>

    
    <div id="facebook"></div>
    <div class="fb-comments" data-href="http://nabilmikroc.biz.ht/AboutUs.php" data-width="auto" data-numposts="5"  ></div>
   

  <!-- end .content --></div>



</div> 

<!-- end .container --></div>
</body>
</html>
