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

<script>
window.onload=function(){
	var html=document.getElementById("html"),
		css=document.getElementById("css"),
		js=document.getElementById("js"),
		output=document.getElementById("output"),
		working=false,
		fill=function(){
			if(working){
				return false;
			}
			working=true;
			var document=output.contentDocument,
				style=document.createElement("style"),
				script=document.createElement("script");
			document.body.innerHTML=html.textContent;
			style.innerHTML=css.textContent.replace(/\s/g,"");
			script.innerHTML=js.textContent;
			document.body.appendChild(style);
			document.body.appendChild(script);
			working=false;
		};
	html.onkeyup=fill;
	css.onkeyup=fill;
	js.onkeyup=fill;
}
</script>
<style>
html,body,table,div.content,iframe{
	border:0;
	height:100%;
	margin:0;
	padding:0;
	width:100%;
}
td{
	border:2px solid black;
	height:300px;
	padding:25px 5px 5px 5px;
	position:relative;
	vertical-align:top;
	width:50%;
}
div.tag{
	position:absolute;
	right:5px;
	top:5px;
}
</style>
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

	<section>
	  <div class="container">
		<table>
			<tr>
				<td>
					<div class="tag">HTML (Body)</div>
					<div id="html" class="content" contenteditable></div>
				</td>
				<td>
					<div class="tag">CSS</div>
					<div id="css" class="content" contenteditable></div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="tag">JavaScript</div>
					<div id="js" class="content" contenteditable></div>
				</td>
				<td>
					<div class="tag">Output</div>
					<iframe id="output"></iframe>
				</td>
			</tr>
		</table>
	  </div>
	</section>
	
	<br><br><br><br>
	

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
 