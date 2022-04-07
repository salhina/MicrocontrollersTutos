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
      <li><a href="test_IHM_II.php">	II - TIMER </a></li>
      <li><a href="test_IHM_III.php">	III - Afficheur 7 segments:</a></li>
      <li><a href="test_IHM_IV.php">	IV - Afficheur LCD</a></li>
      <li><a href="AboutUs.php">	About US</a></li>
    </ul>
    
    
    <div  class="gg">
      <ul>
        <li><a href="#Simulation" class="tooltips" id="lien-bouton">Simulation
        <span>Cliquer ici pour accéder à la Simulation</span> </a></li>
        <br />
        <li><a href="#code" class="tooltips" id="lien-bouton">Code en C
        <span>Cliquer ici pour accéder au code du programme</span></a></li>
        <br />
        <li><a href="#commentaire" class="tooltips" id="lien-bouton">Commenter
        <span>Cliquer ici pour donner vôtre Avis !! </span></a></li>
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
        <p><strong>III - Afficheur 7 segments:</p>
    
    <!-- images   --><div id="Simulation"></div>
    <ul> <li><strong><u>La Simulation&nbsp;:</u></strong></li>
    </ul>
    
    <div class="cont_nabil" id="img">
      <div align="center">
        <p><img src="img/7seg_1.png" alt="" width="408" height="278" /></p>
        <p align="left">Après 1s :</p>
        <p><img src="img/7seg_2.png" alt="" width="386" height="262" /></p>
      </div>
    </div>
    <!-- fin images   -->
    
    <div id="code"></div>
    
    
    <ul>
      <li><strong><u>Le programme  détaillé&nbsp;:</u></strong></li>
    </ul>

    <div class="cont_nabil" id="prog"><strong>#include &lt;htc.h&gt;</strong><br />
      <strong>#define _XTAL_FREQ 8000000          //présision de l'horloge du systéme à  8MHz</strong><br />
      <strong>__CONFIG(WDTDIS&amp;UNPROTECT&amp;MCLRDIS);  //configuration du registre config(WatchDog disable,code n'est pas  protégeé,MCLR disable)</strong><br />
      <strong>//Validation des résistances de  pull ups du port B</strong>
      <p><strong>void Delays_ms(unsigned int tick)</strong><br />
        <strong>{</strong><br />
        <strong>        while(tick--)</strong><br />
        <strong>        {</strong><br />
        <strong>                __delay_ms(1);</strong><br />
        <strong>        }</strong><br />
        <strong>}</strong></p>
      <p><strong>int i;</strong><br />
        <strong>void main()</strong><br />
        <strong>{</strong><br />
        <strong>TRISD=0x00;</strong><br />
        <strong>while(1)</strong><br />
        <strong>     {</strong><br />
        <strong>     PORTD=0X01;</strong><br />
        <strong>     Delays_ms(300);</strong><br />
        <strong>     for(i=1;i&lt;=8;i++)</strong><br />
        <strong>          {</strong><br />
        <strong>          PORTD=PORTD&lt;&lt;1;</strong><br />
        <strong>          Delays_ms(100);</strong><br />
        <strong>          }</strong><br />
        <strong>     }</strong><br />
        <strong>}</strong></p>
    </div>
	
	    
     <div id="commentaire"></div>   
    <p></p>
         
  <div class="fb-comments" data-href="http://nabilmikroc.biz.ht/test_IHM_III.php" data-width="auto" data-numposts="5"  ></div>
   <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
	
    <!-- end .content -->
  </div>
  <!-- end .container --></div>
</body>
</html>
