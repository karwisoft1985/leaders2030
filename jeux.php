<?php 
ob_start();
include ('include/header.php') ;
?>
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

  
	        <!--Useful Facts-->
  
	  <section class="section section-md bg-secondary-img context-dark text-center">

	   <div  class="cell-sm-6 cell-md-4" style="margin-left:10%;margin-right:10%">
			 <center>
              <h3>Jeux </h3>
             <br>
			 
            <p style="font-size:20px; text-indent: 20px; line-height: 2; text-align:justify">
				<b>
Découvrez plusieurs jeux éducatifs gratuits à jouer en ligne. Ces exercices éducatifs permettent de réviser les maths, le français... Ils sont disponibles pour progresser et élever son niveau scolaire pour les enfants.

Profitez aussi des jeux de logique, memorys et des puzzles éducatifs pour développer sa mémoire et son intelligence.</div>
      </section>
	   <section class="section section-md"  >
	   		<?php
if (isset($_SESSION['login'] ) && isset($_SESSION['password'] )){
						echo'<div class="shell text-center">
         
		 <a href="jeu_math.php"> <h4>Mathématiques</h4></a>
          <div class="range range-40 blurb-container" >
       

    
 
              <a href="jeu_math.php"> <div class="cell-sm-6 cell-md-4">
         <button type="button" class="btn btn-primary btn-lg">
 <img src="images/math2.png" style="height:235px; width:330px"/>
</button>      
 </div></a>
              <a href="jeu_math.php"> <div class="cell-sm-6 cell-md-4">
         <button type="button" class="btn btn-primary btn-lg">
<img src="images/math11.png" style="height:235px; width:330px" />
</button>
 </div></a>
  <a href="jeu_math.php"><div class="cell-sm-6 cell-md-4">
         <button type="button" class="btn btn-primary btn-lg">
 <img src="images/math3.png" style="height:235px; width:330px" />
</button>      
 </div></a>
</div>
           
          <br><br>  <a href="jeu_fr.php"><h4>Français</h4></a>
		  <div class="range range-40 blurb-container">
           <a href="jeu_fr.php"> <div class="cell-sm-6 cell-md-4">
             
			 <button type="button" class="btn btn-primary btn-lg">
<img src="images/fr1.png" style="height:235px; width:330px" />
</button>
			 </div></a>
          <a href="jeu_fr.php">  <div class="cell-sm-6 cell-md-4">
               <button type="button" class="btn btn-primary btn-lg">

		
 <img src="images/fr2.png" style="height:235px"/>
		</button>	  
            </div></a>
         <a href="jeu_fr.php">   <div class="cell-sm-6 cell-md-4">
              
			  <button type="button" class="btn btn-primary btn-lg">
 <img src="images/fr3.png" style="height:235px; width:330px"/>
</button>
			  
            </div> </a>
           
          </div> 
		  <br><br><a href="jeu_eveil.php"><h4>Eveil</h4></a>
		  <div class="range range-40 blurb-container">
           <a href="jeu_eveil.php"> <div class="cell-sm-6 cell-md-4">
             
			 <button type="button" class="btn btn-primary btn-lg">
<img src="images/ev1.png" style="height:235px; width:330px" />
</button> </div></a>
      <a href="jeu_eveil.php">      <div class="cell-sm-6 cell-md-4">
               <button type="button" class="btn btn-primary btn-lg">

		
 <img src="images/ev4.png" style="height:235px; width:330px"/>
		</button>	  
            </div></a>
          <a href="jeu_eveil.php">  <div class="cell-sm-6 cell-md-4">             
			  <button type="button" class="btn btn-primary btn-lg">
 <img src="images/ev2.png" style="height:235px; width:330px"/>
</button>			  
            </div> </a>
           
          </div>
	
        </div>';
						}
						else{
						echo'<div class="shell text-center">
         
		  <h4>Mathématiques</h4>
          <div class="range range-40 blurb-container" >
       

    
 
              <div class="cell-sm-6 cell-md-4">
         <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
 <img src="images/math2.png" style="height:235px; width:330px"/>
</button>      
 </div>
              <div class="cell-sm-6 cell-md-4">
         <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
<img src="images/math11.png" style="height:235px; width:330px" />
</button>
 </div>
 <div class="cell-sm-6 cell-md-4">
         <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
 <img src="images/math3.png" style="height:235px; width:330px" />
</button>      
 </div>
</div>
           
          <br><br> <h4>Français</h4>
		  <div class="range range-40 blurb-container">
            <div class="cell-sm-6 cell-md-4">
             
			 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
<img src="images/fr1.png" style="height:235px; width:330px" />
</button>
			 
			 
            </div>
            <div class="cell-sm-6 cell-md-4">
               <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">

		
 <img src="images/fr2.png" style="height:235px"/>
		</button>	  
            </div>
            <div class="cell-sm-6 cell-md-4">
              
			  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
 <img src="images/fr3.png" style="height:235px; width:330px"/>
</button>
			  
            </div> 
           
          </div> 
		  <br><br><h4>Eveil</h4>
		  <div class="range range-40 blurb-container">
            <div class="cell-sm-6 cell-md-4">
             
			 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
<img src="images/ev1.png" style="height:235px; width:330px" />
</button>
			 
			 
            </div>
            <div class="cell-sm-6 cell-md-4">
               <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">

		
 <img src="images/ev4.png" style="height:235px; width:330px"/>
		</button>	  
            </div>
            <div class="cell-sm-6 cell-md-4">
              
			  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
 <img src="images/ev2.png" style="height:235px; width:330px"/>
</button>
			  
            </div> 
           
          </div>
	
        </div>';
						}
					?>
	

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