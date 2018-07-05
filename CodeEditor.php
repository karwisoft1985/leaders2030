<?php
ob_start();
include('include/header.php');
?>
<script>
    function play(){
        document.getElementById('vidwrapi22').innerHTML = '<iframe width="400" height="220" src="http://www.youtube.com/embed/f_YXz7ZZTPc"  allowfullscreen ></iframe>';
        document.getElementById('vidwrapi23').innerHTML = '<iframe width="400" height="220" src="http://www.youtube.com/embed/V8idKRyfgrA"  allowfullscreen ></iframe>';
        document.getElementById('vidwrapi2').innerHTML = '<iframe width="400" height="220" src="http://www.youtube.com/embed/FiOCCttd7zg"  allowfullscreen ></iframe>';
    }


</script>
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

	<section class="section section-build bg-primary-img">
		<!-- Swiper-->
		<div data-height="602px" data-min-height="400px" data-simulate-touch="false" data-autoplay="false" data-slide-effect="slide" class="swiper-container swiper-slider">
			<div class="swiper-wrapper">
				<div data-slide-bg="images/1.jpg" class="swiper-slide">
					<div class="swiper-slide-caption">
						<div class="shell">
							<div class="range">
								<div class="cell-sm-1"></div>
								<div class="cell-sm-10 cell-md-6">
									<h1 data-caption-animate="fadeInUp" data-caption-delay="100">La clé du succès c'est Leaders 2030!</h1>
									<h5 data-caption-animate="fadeInUp" data-caption-delay="400">Lorsque apprendre est amusant, l'avenir devient prometteur !</h5><a href="about_us.php" data-caption-animate="fadeInUp" data-caption-delay="700" class="button button-md button-primary">Lire la suite</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div data-slide-bg="images/2.jpg" class="swiper-slide">
					<div class="swiper-slide-caption">
						<div class="shell">
							<div class="range">
								<div class="cell-sm-1"></div>
								<div class="cell-sm-10 cell-md-6">
									<h1 data-caption-animate="fadeInUp" data-caption-delay="100">Volez plus haut, allez plus loin!</h1>
									<h5 data-caption-animate="fadeInUp" data-caption-delay="400">Enrichissez vos soft skills et faites plaisir à votre cerveau !</h5><a href="about_us.php" data-caption-animate="fadeInUp" data-caption-delay="700" class="button button-md button-primary">Lire la suite</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div data-slide-bg="images/3.jpg" class="swiper-slide">
					<div class="swiper-slide-caption">
						<div class="shell">
							<div class="range">
								<div class="cell-sm-1"></div>
								<div class="cell-sm-10 cell-md-6">
									<h1 data-caption-animate="fadeInUp" data-caption-delay="100">Le succès n'est pas une option!</h1>
									<h5 data-caption-animate="fadeInUp" data-caption-delay="400">Les portes de l’avenir sont ouvertes! Vos choix ont crée cet instant! </h5><a href="about_us.php" data-caption-animate="fadeInUp" data-caption-delay="700" class="button button-md button-primary">Lire la suite</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Swiper Navigation-->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
			<!-- Swiper Pagination-->
			<div class="swiper-pagination"></div>
		</div>
	</section>
	<!-- Welcome-->
	<section class="section section-md" id="videos" style="display:none">
		<div class="shell text-center">
			<center><div id="msg-welcome" class="alert alert-success " role="alert" style="width:60%; margin-bottom:0px; margin-top:5px; margin-left:3%">Bienvenue </div></center>

			<div class="range range-sm-center">
				<div class="cell-ms-10 cell-md-8">
					<h3>TOP skills</h3><br><br>
				</div>
			</div>
			<a href="python.php"><h4>Python for kids</h4></a>
			<div class="range range-40 blurb-container" >



				<div class="cell-sm-6 cell-md-4">
					<video width="400" src="videos/python/1.mp4" autobuffer controls poster="images/py1.png" >

					</video>

				</div>

				<div class="cell-sm-6 cell-md-4">
					<video width="400" src="videos/python/2.mp4" autobuffer controls poster="images/py2.png" >

					</video>

				</div>

				<div class="cell-sm-6 cell-md-4">
					<video width="400" src="videos/python/3.mp4" autobuffer controls poster="images/py3.png" >

					</video>

				</div>
			</div>
			<br><br><br><a href="anglais.php"> <h4>English for kids</h4></a>
			<div class="range range-40 blurb-container">
				<div class="cell-sm-6 cell-md-4">
					<div class="youtube" id="9E5nbQZWVqI" style="width:400px;height:220px;">

					</div></div>
				<div class="cell-sm-6 cell-md-4"><div class="youtube" id="WYMIUOYzO3c" style="width:400px;height:220px;">
					</div>
				</div>
				<div class="cell-sm-6 cell-md-4">
					<div class="youtube" id="K-NN41j1fN4" style="width:400px;height:220px;">
					</div>
				</div>

			</div>

			<br><br><br> <a href="illustration.php"> <h4>Illustration for kids</h4></a>
			<div class="range range-40 blurb-container">
				<div class="cell-sm-6 cell-md-4" >
					<div onclick="play();" id="vidwrapi22"></div>
				</div>
				<div class="cell-sm-6 cell-md-4" >
					<div onclick="play();" id="vidwrapi23"></div>
				</div>
				<div class="cell-sm-6 cell-md-4" >
					<div onclick="play();" id="vidwrapi2"></div>
				</div>

			</div>
			<br><br><br><a href="bricolage.php"> <h4>Bricolage for kids</h4></a>
			<div class="range range-40 blurb-container">
				<div class="cell-sm-6 cell-md-4">
					<div class="youtube" id="9XMXvTAeLns" style="width:400px;height:220px;">

					</div></div>
				<div class="cell-sm-6 cell-md-4"><div class="youtube" id="P3OYc-Nr7wc" style="width:400px;height:220px;">
					</div>
				</div>
				<div class="cell-sm-6 cell-md-4">
					<div class="youtube" id="GHa39n6uhU4" style="width:400px;height:220px;">
					</div>
				</div>

			</div>
			<br><br><br><a href="comptine.php"> <h4>Comptine</h4></a>
			<div class="range range-40 blurb-container">
				<div class="cell-sm-6 cell-md-4">
					<div class="youtube" id="hzu1jElAmVQ" style="width:400px;height:220px;">

					</div>
				</div>
				<div class="cell-sm-6 cell-md-4">
					<div class="youtube" id="zduapTwsSwA" style="width:400px;height:220px;">
					</div>
				</div>
				<div class="cell-sm-6 cell-md-4">
					<div class="youtube" id="f6EI_dakSlA" style="width:400px;height:220px;">
					</div>
				</div>

			</div>
			<br><br><br><a href="jeux.php"> <h4>Jeux éducatifs</h4></a>
			<div class="range range-40 blurb-container">
				<div class="cell-sm-6 cell-md-4">
					<a href="jeux.php">
						<img src="images/fr1.png" />
					</a> </div>
				<div class="cell-sm-6 cell-md-4">
					<a href="jeux.php">
						<img src="images/fr2.png"/>
					</a> </div>
				<div class="cell-sm-6 cell-md-4">

					<a href="jeux.php">
						<img src="images/fr3.png" />
					</a>

				</div>

			</div>
		</div>
	</section>
	<section class="section section-md" id="images" style="display:none">
		<div class="shell text-center">
			<div class="range range-sm-center">
				<div class="cell-ms-10 cell-md-8">
					<h3>TOP skills</h3><br><br>
				</div>
			</div>
			<h4>Python for kids</h4>
			<div class="range range-40 blurb-container" >


				<div class="cell-sm-6 cell-md-4">
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
						<img src="images/py1.png" />
					</button>
				</div>

				<div class="cell-sm-6 cell-md-4">
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
						<img src="images/py2.png" />
					</button>
				</div>
				<div class="cell-sm-6 cell-md-4">
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
						<img src="images/py4.png" />
					</button>
				</div>
			</div>

			<br><br> <h4>English for kids</h4>
			<div class="range range-40 blurb-container">
				<div class="cell-sm-6 cell-md-4">

					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
						<img src="images/an1.png" />
					</button>


				</div>
				<div class="cell-sm-6 cell-md-4">
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">


						<img src="images/an2.png" />
					</button>
				</div>
				<div class="cell-sm-6 cell-md-4">

					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
						<img src="images/an3.png" />
					</button>

				</div>

			</div>
			<br><br><h4>Illustration for kids</h4>
			<div class="range range-40 blurb-container">
				<div class="cell-sm-6 cell-md-4">

					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
						<img src="images/41.png" />
					</button>


				</div>
				<div class="cell-sm-6 cell-md-4">
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">


						<img src="images/5.png"/>
					</button>
				</div>
				<div class="cell-sm-6 cell-md-4">

					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
						<img src="images/i2.png" />
					</button>

				</div>

			</div>
			<br><br> <h4>Bricolage for kids</h4>
			<div class="range range-40 blurb-container">
				<div class="cell-sm-6 cell-md-4">

					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
						<img src="images/br1.png" />
					</button>


				</div>
				<div class="cell-sm-6 cell-md-4">
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">


						<img src="images/br2.png" />
					</button>
				</div>
				<div class="cell-sm-6 cell-md-4">

					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
						<img src="images/br3.png" />
					</button>

				</div>

			</div>
			<br><br> <h4>Comptine</h4>
			<div class="range range-40 blurb-container">
				<div class="cell-sm-6 cell-md-4">

					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
						<img src="images/comptine1.png" />
					</button>


				</div>
				<div class="cell-sm-6 cell-md-4">
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">


						<img src="images/comptine2.png"/>
					</button>
				</div>
				<div class="cell-sm-6 cell-md-4">

					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
						<img src="images/comptine3.png" />
					</button>

				</div>

			</div>
			<br><br> <h4>Jeux éducatifs</h4>
			<div class="range range-40 blurb-container">
				<div class="cell-sm-6 cell-md-4">

					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
						<img src="images/fr1.png" />
					</button>


				</div>
				<div class="cell-sm-6 cell-md-4">
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">


						<img src="images/fr2.png"/>
					</button>
				</div>
				<div class="cell-sm-6 cell-md-4">

					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcnx">
						<img src="images/fr3.png" />
					</button>

				</div>

			</div>
		</div>
	</section>
	<!--Our mission-->
	<section class="section section-md bg-secondary-img context-dark">
		<div class="shell text-center text-md-left">
			<div class="range range-0">
				<div class="cell-md-7">
					<div class="bg-wraper bg-wraper-1"><img src="images/home-custom-1-570x551.png" alt="" width="570" height="551"/>
					</div>
				</div>
				<div class="cell-md-5">
					<h3>A propos de nous</h3>
					<svg x="0px" y="0px" width="108px" height="7px" viewbox="0 0 108 7" xml:space="preserve" class="decorative-divider">
                <path stroke-width="2" stroke-miterlimit="10" d="M1,6.001c1,0,4.049-4.927,6-5 c2.149-0.08,4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.849-5,7-5s4.851,5.08,7,5 c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.849-5,7-5 s4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.851-5.08,7-5c1.951,0.073,5,5,6,5"></path>
              </svg>
					<p style="text-align:justify">Leaders 2030 : Comme le nom l’indique, on vise d’ici 2030 à créer une génération confiante en soi, compétente et autonome. En effet, les méthodes d'apprentissage évoluent ! C'est pour cette raison que cette plateforme est née permettant aux enfants d’apprendre, de s’entraîner et de développer leurs habiletés! Notre plateforme est régulièrement mise à jour, améliorée, complétée, enrichie... où des professionnels et des élèves viennent déposer des contenus pour ensuite les partager et créer une interactivité. Notre mission est d'offrir des services de haute qualité adaptés aux besoins et aux âges de chacun de vous.</p><a href="about_us.php" class="button button-md button-primary">Lire la suite</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-md bg-primary-img context-dark text-center">
		<h3>Partenaires</h3>
		<svg x="0px" y="0px" width="108px" height="7px" viewbox="0 0 108 7" xml:space="preserve" class="decorative-divider">
          <path stroke-width="2" stroke-miterlimit="10" d="M1,6.001c1,0,4.049-4.927,6-5 c2.149-0.08,4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.849-5,7-5s4.851,5.08,7,5 c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.849-5,7-5 s4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.851-5.08,7-5c1.951,0.073,5,5,6,5"></path>
        </svg>
		<div data-photo-swipe-gallery="gallery" class="range range-condensed">
			<div class="cell-xs-6 cell-md-3">
				<!-- PhotoSwipe image--><a data-photo-swipe-item="" data-size="1178x900" href="images/home-psw-1-478x350.jpg" class="thumbnail-classic"><img src="images/home-psw-1-478x350.jpg" alt="" width="478" height="350"/></a>
			</div>
			<div class="cell-xs-6 cell-md-3">
				<!-- PhotoSwipe image--><a data-photo-swipe-item="" data-size="1200x800" href="images/home-psw-2-478x350.jpg" class="thumbnail-classic"><img src="images/home-psw-2-478x350.jpg" alt="" width="478" height="350"/></a>
			</div>
			<div class="cell-xs-6 cell-md-3">
				<!-- PhotoSwipe image--><a data-photo-swipe-item="" data-size="1200x800" href="images/home-psw-3-478x350.jpg" class="thumbnail-classic"><img src="images/home-psw-3-478x350.jpg" alt="" width="478" height="350"/></a>
			</div>
			<div class="cell-xs-6 cell-md-3">
				<!-- PhotoSwipe image--><a data-photo-swipe-item="" data-size="1118x900" href="images/home-psw-4-478x350.jpg" class="thumbnail-classic"><img src="images/home-psw-4-478x350.jpg" alt="" width="478" height="350"/></a>
			</div>
		</div><!--<a href="about_us.php" class="button button-md button-primary">Voir tous les photos</a>-->
	</section>
	<!--Teachers-->
	<!--
	<section class="section section-md">
	  <div class="shell text-center">
		<div class="range range-sm-center">
		  <div class="cell-sm-10 cell-md-6">
			<h3>Meet Our Teachers</h3>
			<svg x="0px" y="0px" width="108px" height="7px" viewbox="0 0 108 7" xml:space="preserve" class="decorative-divider">
			  <path stroke-width="2" stroke-miterlimit="10" d="M1,6.001c1,0,4.049-4.927,6-5 c2.149-0.08,4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.849-5,7-5s4.851,5.08,7,5 c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.849-5,7-5 s4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.851-5.08,7-5c1.951,0.073,5,5,6,5"></path>
			</svg>
			<p>A fully qualified and experienced international teaching team, with enthusiasm and devotion to early childhood education.</p>
		  </div>
		</div>
		<div class="range range-30">
		  <div class="cell-sm-6 cell-md-3">
			<div class="person"><img src="images/home-person-1-271x380.png" alt="" width="271" height="380"/>
			  <div class="person-info bg-person-yellow">
				<div class="person-title">
				  <h5 class="person-name">Angelica Richie</h5>
				  <div class="small position">Teacher</div>
				</div>
				<div class="person-contacts">
				  <div class="divider"></div>
				  <div class="small"><a href="callto:#" class="person-phone">+1 (409) 987 - 5874</a></div>
				  <div class="small"><a href="/cdn-cgi/l/email-protection#d7f4" class="person-mail"><span class="__cf_email__" data-cfemail="83eaede5ecc3e7e6eeecefeaede8adecf1e4">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="cell-sm-6 cell-md-3">
			<div class="person"><img src="images/home-person-2-271x380.png" alt="" width="271" height="380"/>
			  <div class="person-info bg-person-green">
				<div class="person-title">
				  <h5 class="person-name">Samantha Lee</h5>
				  <div class="small position">Teacher</div>
				</div>
				<div class="person-contacts">
				  <div class="divider"></div>
				  <div class="small"><a href="callto:#" class="person-phone">+1 (409) 987 - 5874</a></div>
				  <div class="small"><a href="/cdn-cgi/l/email-protection#ffdc" class="person-mail"><span class="__cf_email__" data-cfemail="96fff8f0f9d6f2f3fbf9fafff8fdb8f9e4f1">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="cell-sm-6 cell-md-3">
			<div class="person"><img src="images/home-person-3-271x380.png" alt="" width="271" height="380"/>
			  <div class="person-info bg-person-blue">
				<div class="person-title">
				  <h5 class="person-name">Katie Lynn</h5>
				  <div class="small position">Lead Teacher</div>
				</div>
				<div class="person-contacts">
				  <div class="divider"></div>
				  <div class="small"><a href="callto:#" class="person-phone">+1 (409) 987 - 5874</a></div>
				  <div class="small"><a href="/cdn-cgi/l/email-protection#0b28" class="person-mail"><span class="__cf_email__" data-cfemail="cca5a2aaa38ca8a9a1a3a0a5a2a7e2a3beab">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="cell-sm-6 cell-md-3">
			<div class="person"><img src="images/home-person-4-271x380.png" alt="" width="271" height="380"/>
			  <div class="person-info bg-person-orange">
				<div class="person-title">
				  <h5 class="person-name">Amanda Lee</h5>
				  <div class="small position">Assistant Teacher</div>
				</div>
				<div class="person-contacts">
				  <div class="divider"></div>
				  <div class="small"><a href="callto:#" class="person-phone">+1 (409) 987 - 5874</a></div>
				  <div class="small"><a href="/cdn-cgi/l/email-protection#9bb8" class="person-mail"><span class="__cf_email__" data-cfemail="6b02050d042b0f0e0604070205004504190c">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</section>
	-->
	<!--Useful Facts-->
	<section class="section section-md bg-secondary-img context-dark">
		<div class="shell text-center">
			<!-- <div class="range range-sm-center">
			   <div class="cell-sm-10 cell-md-6">
				 <h3>Lorem ipsum dolor</h3>
				 <svg x="0px" y="0px" width="108px" height="7px" viewbox="0 0 108 7" xml:space="preserve" class="decorative-divider">
				   <path stroke-width="2" stroke-miterlimit="10" d="M1,6.001c1,0,4.049-4.927,6-5 c2.149-0.08,4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.849-5,7-5s4.851,5.08,7,5 c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.849-5,7-5 s4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.851-5.08,7-5c1.951,0.073,5,5,6,5"></path>
				 </svg>
			   </div>
			 </div>-->
			<div class="range range-40">
				<div class="cell-sm-6 cell-md-3">
					<!-- CountTo-->
					<div data-from="0" data-to="2500" class="counter">2500</div>
					<h5>Leaders</h5>
					<p style="text-align:justify">Notre objectif est d’investir dans la prochaine génération en leur permettant de développer et renforcer leurs compétences pour que chacun soit leader dans son domaine.</p>
				</div>
				<div class="cell-sm-6 cell-md-3">
					<!-- CountTo-->
					<div data-from="0" data-to="07" class="counter">07</div>
					<h5>Coachs</h5>
					<p style="text-align:justify">En incorporant au savoir leur expertise, leur créativité, leur attention et leur compréhension, les coachs s’efforcent quotidiennement de développer la valeur du travail et de l’entraide. </p>
				</div>
				<div class="cell-sm-6 cell-md-3">
					<!-- CountTo-->
					<div data-from="0" data-to="7" class="counter">7</div>
					<h5>Skills</h5>
					<p style="text-align:justify">Pour réussir votre vie, vous devez développer vos compétences en apprenant avec leaders 2030 des qualités vitales (soft skills) qui permettent la créativité, l’innovation et les résultats. </p>
				</div>
				<div class="cell-sm-6 cell-md-3">
					<!-- CountTo-->
					<div data-from="0" data-to="8" class="counter">8</div>
					<h5>Ecoles</h5>
					<p style="text-align:justify">Pour atteindre notre but sur lequel l'idée de Leaders 2030 est née, nous sommes conventionnés avec des différentes écoles afin de rejoindre le grand nombre des prochains leaders.  </p>
				</div>
			</div>
		</div>
	</section>
	<!-- RD Parallax-->
	<section class="section rd-parallax bg-home-4 context-dark">
		<div data-speed="0.2" data-type="media" data-url="images/parallax-home-1.jpg" class="rd-parallax-layer"></div>
		<div data-speed="0" data-type="html" class="rd-parallax-layer section-md">
			<div class="shell text-center">
				<h3>Témoignages Parents</h3>
				<svg x="0px" y="0px" width="108px" height="7px" viewbox="0 0 108 7" xml:space="preserve" class="decorative-divider">
              <path stroke-width="2" stroke-miterlimit="10" d="M1,6.001c1,0,4.049-4.927,6-5 c2.149-0.08,4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.849-5,7-5s4.851,5.08,7,5 c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.849-5,7-5 s4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.851-5.08,7-5c1.951,0.073,5,5,6,5"></path>
            </svg>
				<div class="range range-sm-center">
					<div class="cell-sm-9 cell-md-8">
						<!-- Owl Carousel-->
						<div data-items="1" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false" data-nav="true" class="owl-carousel">
							<div class="owl-item">
								<blockquote class="quote">
									<div class="icon icon-xl icon-primary thin-ico thin-icon-chat"></div>
									<h5>
										<q>J'ai beaucoup apprécié ce site, mon enfant apprend en jouant et il est très motivé de continuer les différentes rubriques et ne veut plus arrêter. Merci. </q>
									</h5>
									<cite class="h5">M.Mohamed</cite>
								</blockquote>
							</div>
							<div class="owl-item">
								<blockquote class="quote">
									<div class="icon icon-xl icon-primary thin-ico thin-icon-chat"></div>
									<h5>
										<q>Merci infiniment pour ce site qui soulage les mamans. Excellent support ludique et super sympa, mon fils adore et moi aussi.</q>
									</h5>
									<cite class="h5">Mme.Eya</cite>
								</blockquote>
							</div>
							<div class="owl-item">
								<blockquote class="quote">
									<div class="icon icon-xl icon-primary thin-ico thin-icon-chat"></div>
									<h5>
										<q>BRAVO! site intéressant. Mes enfants adorent les activités qui s'y trouvent, et tant mieux pour eux. Félicitations et MERCI pour pour ce que vous faites.</q>
									</h5>
									<cite class="h5">Mme.Rim</cite>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

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
 