<?php
ob_start();
include('include/header.php');
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
      <!--Happy parents-->
      <section class="section section-md bg-home-5 bg-white">
        <div class="shell text-center">
          <div class="range range-sm-center">
            <div class="cell-sm-10 cell-md-6">
              <h3>Contactez-nous</h3>
              <svg x="0px" y="0px" width="108px" height="7px" viewbox="0 0 108 7" xml:space="preserve" class="decorative-divider">
                <path stroke-width="2" stroke-miterlimit="10" d="M1,6.001c1,0,4.049-4.927,6-5 c2.149-0.08,4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.849-5,7-5s4.851,5.08,7,5 c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.849-5,7-5 s4.851,5.08,7,5c1.951-0.073,4.049-4.927,6-5c2.149-0.08,4.849,5,7,5s4.851-5.08,7-5c1.951,0.073,5,5,6,5"></path>
              </svg>
            </div>
          </div>
          <div class="range range-sm-center range-md-left">
            <div class="cell-sm-8 cell-md-5">
<div id="erreur" class="alert-danger" style="display:none;padding:2%;font-size:20px;margin-bottom:2%"><center>Erreur d'envoi</center></div>
<div id="succes" class="alert-success" style="display:none;padding:2%;font-size:20px;margin-bottom:2%"><center>Message envoyé</center></div>
              <!-- RD Mailform-->
<form method="post" action="contact.php" class="text-center text-md-left">
                <div class="form-group">
                  <!--<label for="contact-name" class="form-label">Votre nom & prénom*</label>-->
                  <input id="name" placeholder="Votre nom & prénom*" type="text" name="name" Required class="form-control form-input">
                </div>
                <div class="form-group">
                  <!--<label for="contact-email" class="form-label">Votre E-mail*</label>-->
                  <input id="contact-email" type="email" placeholder="Votre E-mail*" name="email" Required class="form-control form-input">
                </div>
				<div class="form-group">
                 <!-- <label for="contact-sujet" class="form-label">Sujet*</label>-->
                  <input id="sujet" type="text"placeholder="Sujet*" name="sujet" Required class="form-control form-input">
                </div>
                <div class="form-group">
                  <!--<label for="contact-message" class="form-label">Votre Message*</label>-->
                  <textarea id="contenu-message" placeholder="Votre Message*" name="message" Required class="form-control form-input"></textarea>
                </div>
                <button type="submit" class="button button-primary">Envoyer Message</button>
              </form>
            </div>
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
      <!-- Page Footer-->
   <?php include('include/footer.php');?>

    </div>
    <!-- Global Mailform Output-->
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
    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  <script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
   <?php
    error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;
if($post)
{
$nom = $_POST['name'];
$WEBMASTER_EMAIL = $_POST['email'];
$msg = $_POST['message'];
$name = 'Leaders 2030';
$subject = $_POST['sujet'];
$message='De: '.$WEBMASTER_EMAIL.'<br> Nom & prenom: '.$nom.' <br>';
$message .='Message: '.$msg;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .=  "From: ".$nom." <".$WEBMASTER_EMAIL.">\r\n"
    ."Reply-To: ".$WEBMASTER_EMAIL."\r\n"
    ."X-Mailer: PHP/" . phpversion();
require_once('PHPMailer-master/PHPMailerAutoload.php');
                  $mail = new PHPMailer();
                  $mail->IsSMTP(); 
                  $mail->SMTPDebug = 0;                 
                  $mail->SMTPAuth   = true;
				  $mail->SMTPOptions = [
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
];
                  $mail->SMTPSecure = 'ssl';
                  $mail->Host       = "smtp.gmail.com"; 
                  $mail->Port       = 465;
                  $mail->IsHTML (true);
                  $mail->Username   = "infokarwisoft@gmail.com";
                  $mail->Password   = "info12345";
                  $mail->SetFrom($WEBMASTER_EMAIL);
                  $mail->Subject    = $subject;
                  $mail->Body    = $message;
                  $mail->AddAddress("support@ls2030.com");
                  if(!$mail->Send()) {
echo '<script>document.getElementById("erreur").style.display = "block";</script>';
}
else
{
echo '<script>document.getElementById("succes").style.display = "block";</script>';
}
}
   ?>
</html>
  <?php
ob_end_flush();
?>