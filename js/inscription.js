function reload() {
location.reload();
}
function reloadpage() {
location.reload();
}
function inscription() {
var nom=document.getElementById("nom").value;
var prenom=document.getElementById("prenom").value;
var date_naiss=document.getElementById("date_naiss").value;
var ville=document.getElementById("ville").value;
var ecole=document.getElementById("ecole").value;
var tel=document.getElementById("tel").value;
var autre_ecole=document.getElementById("autre_ecole").value;
if(nom==''||prenom==''||date_naiss==''||ville==''||ecole==''){
document.getElementById("champ-obl").style.display = "block";
}
else{
var dataString='nom='+addslashes(nom)+'&prenom='+addslashes(prenom)+'&date_naiss='+date_naiss+'&tel='+tel+'&ville='+ville+'&ecole='+addslashes(ecole)+'&autre_ecole='+addslashes(autre_ecole);
$.getJSON("php/inscription.php", dataString,
function (donnees) {
var contenuHtml = donnees.leader[0].login;
var contenuHtml1 = donnees.leader[0].password;
var contenuHtml2 = donnees.leader[0].prenom+' '+donnees.leader[0].nom;
   document.getElementById("alertsuccess").style.display = "block";
   $("#myModal").modal("hide");
   $("#myModallog").modal("show");
		  // setTimeout(function(){ location.reload(); }, 1000);
		 document.getElementById("logi_user").innerHTML = contenuHtml;
		 document.getElementById("pass_user").innerHTML = contenuHtml1;
		 document.getElementById("leader_cnct").innerHTML = contenuHtml2;
		 

	});}
}
function inscription_user() {
var nom=document.getElementById("nom").value;
var prenom=document.getElementById("prenom").value;
var date_naiss=document.getElementById("date_naiss").value;
var ville=document.getElementById("ville").value;
var ecole=document.getElementById("ecole").value;
var tel=document.getElementById("tel").value;
var autre_ecole=document.getElementById("autre_ecole").value;
if(nom==''||prenom==''||date_naiss==''||ville==''||ecole==''){
document.getElementById("champ-obl").style.display = "block";
}
else{
var dataString='nom='+addslashes(nom)+'&prenom='+addslashes(prenom)+'&date_naiss='+date_naiss+'&tel='+tel+'&ville='+ville+'&ecole='+addslashes(ecole)+'&autre_ecole='+addslashes(autre_ecole);
$.getJSON("php/inscription.php", dataString,
function (donnees) {
var contenuHtml = donnees.leader[0].login;
var contenuHtml1 = donnees.leader[0].password;
var contenuHtml2 = donnees.leader[0].prenom+' '+donnees.leader[0].nom;
   document.getElementById("alertsuccess").style.display = "block";
 
   $("#myModalcnx").modal("hide");
   $('.modal-backdrop').hide();	
   $("#myModalloguser").modal("show");
		 document.getElementById("logiuser").innerHTML = contenuHtml;
		 document.getElementById("passuser").innerHTML = contenuHtml1;
		 document.getElementById("leadercnct").innerHTML = contenuHtml2;

	});}
}

function verif_auth() {
var login=document.getElementById("login_user").value;
var password=document.getElementById("mot_de_passe").value;
var dataString='login='+addslashes(login)+'&password='+addslashes(password);
$.getJSON("php/authentification.php", dataString,
function (donnees) {
if(donnees.authentification[0].id==0){
   document.getElementById("erreur").style.display = "block";}
		  else{ 
			location.href="index.php#videos";
		   }

	});
}
function verif_login() {
var login=document.getElementById("log_user").value;
var password=document.getElementById("password_user").value;
var dataString='login='+addslashes(login)+'&password='+addslashes(password);
$.getJSON("php/authentification.php", dataString,
function (donnees) {
if(donnees.authentification[0].id==0){
   document.getElementById("msg-erreur").style.display = "block";}
		  else{	  
		$('#myModalcnx').hide();
$('.modal-backdrop').hide();	
/*
		  document.getElementById("images").style.display = "none";		  
		    document.getElementById("videos").style.display = "block";				  
		  location.href="index.php#videos";*/
location.reload();		  }

	});
}
function deconnexion() {
$.getJSON("php/deconnexion.php",
function (donnees) {  	
location.reload();		  

	});
}
function addslashes(ch){

ch = ch.replace(/\\/g,"\\\\")
ch = ch.replace(/\'/g,"\\'")
ch = ch.replace(/\"/g,"\\\"")
return ch
}
/**************************afficher ville***************************************/
$(document).ready(function () {
    $.getJSON("php/ville.php",
    function (donnees) {

    var contenuHtml = '';

for (var i = 0; i < donnees.ville.length; i++) {
contenuHtml +=  '<option value="'+donnees.ville[i].id_ville+'"';

contenuHtml +=  '>'+donnees.ville[i].nom+'</option>';										
}

document.getElementById("villes").innerHTML = contenuHtml;
        });
		
});

/**************************afficher école***************************************/
$(document).ready(function () {

    $.getJSON("php/ecole.php",
    function (donnees) {

    var contenuHtml = '';

for (var i = 0; i < donnees.ecole.length; i++) {
contenuHtml +=  '<option value="'+donnees.ecole[i].id_ecole+'"';

contenuHtml +=  '>'+donnees.ecole[i].nom+'</option>';										
}

document.getElementById("ecoles").innerHTML = contenuHtml;
        });
		
});
function displayecole(){
var ecole = document.getElementById("ecole").value;
if (ecole == '1' ) {
document.getElementById('autre_eco').style.display='block';
}
else
{
document.getElementById('autre_eco').style.display='none';
}
}
function display_login(){

document.getElementById('inscription_user').style.display='none';
document.getElementById('login_user').style.display='block';
}
function display_inscri(){

document.getElementById('inscription_user').style.display='block';
document.getElementById('login_user').style.display='none';
}
function displaylogin(){

document.getElementById('inscription').style.display='none';
document.getElementById('login').style.display='block';
}
function displayinscri(){

document.getElementById('inscription').style.display='block';
document.getElementById('login').style.display='none';
}