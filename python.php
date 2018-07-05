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

     <section class="section" id="python" >
        <div class="shell text-center">
          <div class="range range-sm-center">
            <div class="cell-ms-10 cell-md-8">
              <h3>Python for kids</h3>
              </div>
          </div>
		            <div class="range range-40 blurb-container" >
       
  
  
            <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/1.mp4" controls poster="images/py1.png" >

</video>

    </div>

          <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/2.mp4"  controls poster="images/py2.png" >

</video>

    </div>
 
             <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/3.mp4"  controls poster="images/py3.png" >

</video>

    </div>     
	<div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/4.mp4"  controls poster="images/py4.png" >

</video>

    </div>

           <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/5.mp4" controls poster="images/py5.png" >

</video>

    </div>
 
             <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/6.mp4" controls poster="images/py6.png" >

</video>

    </div>   
	<div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/7.mp4" controls poster="images/py7.png" >

</video>

    </div>

           <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/8.mp4" controls poster="images/py8.png">
</video>

    </div>
 
        <!--   <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/9.mp4" controls poster="images/py9.png">
 
</video>

    </div>             
  	<div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/10.mp4" controls poster="images/py10.png">
</video>

    </div>

 <div class="cell-sm-6 cell-md-4">
  <video width="400"  src="videos/python/11.mp4" controls poster="images/py11.png" >
</video>

    </div>
 
             <div class="cell-sm-6 cell-md-4">
  <video width="400"  src="videos/python/12.mp4" controls poster="images/py12.png" >
</video>

    </div>    
	<div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/13.mp4" controls poster="images/py13.png"  >
</video>

    </div>

           <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/14.mp4" controls poster="images/py14.png" >
</video>

    </div>
 
             <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/15.mp4" controls poster="images/py15.png"  >
</video>

    </div> 
	<div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/16.mp4" autobuffer controls poster="images/py16.png" >
</video>

    </div>

           <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/17.mp4" autobuffer controls poster="images/py17.png" >
</video>

    </div>
 
             <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/18.mp4" autobuffer controls poster="images/py18.png"  >
</video>

    </div>      
	<div class="cell-sm-6 cell-md-4">
  <video width="400"  src="videos/python/19.mp4" autobuffer controls poster="images/py19.png" >
</video>

    </div>

           <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/20.mp4" autobuffer controls poster="images/py20.png" >
</video>

    </div>
 
             <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/21.mp4" autobuffer controls poster="images/py21.png" >
</video>

    </div>         
    <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/22.mp4" autobuffer controls poster="images/py22.png" >
</video>

    </div>

           <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/23.mp4" autobuffer controls poster="images/py23.png" >
</video>

    </div>
 
             <div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/24.mp4" autobuffer controls poster="images/py24.png" >
</video>

    </div>  
	<div class="cell-sm-6 cell-md-4">
  <video width="400" src="videos/python/25.mp4" autobuffer controls poster="images/py25.png" >
</video>-->

    </div>      
    </div>       
      </section>
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
	  <section class="section section-md bg-secondary-img context-dark text-center">

	   <div  class="cell-sm-6 cell-md-4" style="margin-left:10%;margin-right:10%">
			 <center>
              <h3>Pourquoi Python? </h3>
             <br>
			 
            <p style="font-size:20px; text-indent: 20px; line-height: 2; text-align:justify">
				<b>
					Les cours de programmation informatique sont enseignés au lycée, nombreux sont les parents qui cherchent dès aujourd'hui à apprendre à leurs enfants à programmer... dès l’école. Cette plateforme saura plaire à la fois aux parents et aux enfants en proposant de leur apprendre à programmer en Python. Pourquoi Python ? Car il s'agit d'un langage de programmation connu et reconnu pour la facilité de lecture de son code source et qu'il permet en un clic d'afficher à l'écran le résultat de son programme. On tire de plus parti du Python pour développer des programmes amusants pour les enfants. Le code est coloré et expliqué. A la fin de la formation, vous serez capables de programmer un jeu complet.
					</b></p></center>
		
	   </div>
      </section>
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