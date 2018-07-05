<?php 
ob_start();
include ('include/header.php') ?>
  <body>
    <!-- Page-->
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
		 <?php include('include/navbar.php'); ?>
        </div>
      </header>

      <?php
if (isset($_SESSION['login'] ) && isset($_SESSION['password'] )){
						echo'  <section class="section" >
        <div class="shell text-center">
          <div class="range range-sm-center">
            <div class="cell-ms-10 cell-md-8">
              <h3>Jeux éducatifs</h3>
              </div>
          </div>
		            <div class="range range-40 blurb-container" >
			  <div class="cell-sm-6 cell-md-6">             
<object width="500" height="350" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" >
 <param name="movie" value="games/TRVCR01.swf" />
    <param name="quality" value="high" />
    <embed width="500" height="350" src="games/TRVCR01.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" ></embed>
  </object>
            </div>  
	<div class="cell-sm-6 cell-md-6">             
<object width="500" height="350"codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" >
 <param name="movie" value="games/LAVOYEL1.swf" />
    <param name="quality" value="high" />
    <embed width="500" height="350" src="games/LAVOYEL1.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" ></embed>
  </object>
            </div>			
			<div class="cell-sm-6 cell-md-6">             
<object width="500" height="350"codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" >
 <param name="movie" value="games/P1GENR01.swf" />
    <param name="quality" value="high" />
    <embed width="500" height="350" src="games/P1GENR01.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" ></embed>
  </object>
            </div>
		
			<div class="cell-sm-6 cell-md-6">             
<object width="500" height="350"codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" >
 <param name="movie" value="games/VRAIFAU01.swf" />
    <param name="quality" value="high" />
    <embed width="500" height="350" src="games/VRAIFAU01.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" ></embed>
  </object>
            </div>
			<div class="cell-sm-6 cell-md-6">             
<object width="500" height="350"codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" >
 <param name="movie" value="games/MOCOUP01.swf" />
    <param name="quality" value="high" />
    <embed width="500" height="350" src="games/MOCOUP01.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" ></embed>
  </object>
            </div>

			<div class="cell-sm-6 cell-md-6">             
<object width="500" height="350"codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" >
 <param name="movie" value="games/AJOUTERV01.swf" />
    <param name="quality" value="high" />
    <embed width="500" height="350" src="games/AJOUTERV01.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" ></embed>
  </object>
            </div>
			<div class="cell-sm-6 cell-md-6">             
<object width="500" height="350"codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" >
 <param name="movie" value="games/PHRASE01.swf" />
    <param name="quality" value="high" />
    <embed width="500" height="350" src="games/PHRASE01.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" ></embed>
  </object>
            </div>
					<div class="cell-sm-6 cell-md-6">             
<object width="500" height="350"codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" >
 <param name="movie" value="games/VTEMPS01.swf" />
    <param name="quality" value="high" />
    <embed width="500" height="350" src="games/VTEMPS01.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" ></embed>
  </object>
            </div>
					</div>       
    
        </div>
      </section><br>';}
	  else {
	  echo'  <section class="section section-md bg-secondary-img context-dark text-center">

	   <div  class="cell-sm-6 cell-md-4" style="margin-left:10%;margin-right:10%">
			 <center>
              <h3>Jeux </h3>
             <br>
			 
            <p style="font-size:20px; text-indent: 20px; line-height: 2; text-align:justify">
				<b>
Découvrez plusieurs jeux éducatifs gratuits à jouer en ligne. Ces exercices éducatifs permettent de réviser les maths, le français... Ils sont disponibles pour progresser et élever son niveau scolaire pour les enfants.

Profitez aussi des jeux de logique, memorys et des puzzles éducatifs pour développer sa mémoire et son intelligence.</div>
      </section>';}?>
	
	        <!--Useful Facts-->
  	<div class="modal fade" id="myModalloguser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="reloadpage()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><img src="images/brand.png" width="150px"/></center>
      </div>
    <div class="modal-body" style="padding: 0px;">
         <div class="col-md-12">
		 <br><center  style="color:red">Bienvenue <span id="leadercnct"></span></center><br>
          </div>
		  <div class="col-md-12">
		  Votre login:  <span id="logiuser"></span>
          </div>
		  <div class="col-md-12">
		Votre mot de passe:  <span id="passuser">*</span>
          </div>
          </div>
 <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reloadpage()">Fermer</button>
      </div>
  
  </div>
</div>
    </div>
	
 <?php include('include/footer.php');?>
    </div>
    <!-- Global Mailform Output-->
    <div id="form-output-global" class="snackbars"></div>
    <!-- PhotoSwipe Gallery-->
    <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
            <button title="Share" class="pswp__button pswp__button--share"></button>
            <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
            <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
          <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__cent"></div>
          </div>
        </div>
      </div>
    </div>
	<div id="fb-root"></div>
</html>
  <?php
ob_end_flush();
?>