    <nav class="rd-navbar" data-sm-stick-up-offset="1px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="1px" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-outer">
              <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-cell rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button data-rd-navbar-toggle=".rd-navbar-nav" class="rd-navbar-toggle"><span class="toggle-icon"></span></button>
                  <!-- RD Navbar Brand--><a href="./" class="rd-navbar-brand"><img src="images/brand.png" alt=""></a>
                </div>
                <!-- RD Navbar Nav-->
                <div class="rd-navbar-cell rd-navbar-nav-wrap">
								  		 
                  <ul class="rd-navbar-nav">
				  <div id="erreur" class="alert alert-danger " role="alert" style="display:none;width:40%; margin-bottom:0px; margin-top:5px; margin-left:3%">Login ou mot de passe incorrect</div>
<li class="active"><a href="index.php">
                        <div class="icon icon-sm icon-default thin-ico thin-icon-home"></div><span class="nav-link">Accueil</span></a></li>
                    <li><a href="about_us.php">
                        <div class="icon icon-sm icon-default thin-ico thin-icon-chat"></div><span class="nav-link">A propos</span></a>
                   
                    </li>
                    <li><a >
                        <div class="icon icon-sm icon-default thin-ico thin-icon-star"></div><span class="nav-link">Skills</span></a>
						<ul class="rd-navbar-dropdown">
                             <li><a href="python.php">Python</a></li>
                             <li><a href="anglais.php">Anglais</a></li>
                             <li><a href="illustration.php">Illustration</a></li>
                             <li><a href="bricolage.php">Bricolage</a></li>
                             <li><a href="comptine.php">Comptine</a></li>
                             <li><a href="jeux.php">Jeux</a></li>
                             <li><a href="">JavaScript</a></li>
                          <!-- RD Navbar Dropdown--
                          <ul class="rd-navbar-dropdown">
                            <li><a href="#">Angelica Richie</a></li>
                            <li><a href="#">Samantha Lee</a></li>
                            <li><a href="#">Katie Lynn</a></li>
                            <li><a href="#">Amanda Lee</a></li>
                          </ul>-->
                        </li>
                      </ul>
						</li>
                   <!-- <li><a href="activities.html">
                        <div class="icon icon-sm icon-default thin-ico thin-icon-bell"></div><span class="nav-link">Activities</span></a></li>
                    <li><a href="news.html">
                        <div class="icon icon-sm icon-default thin-ico thin-icon-picture"></div><span class="nav-link">News & Events</span></a></li>-->
                    <li><a href="contact.php">
                        <div class="icon icon-sm icon-default thin-ico thin-icon-email-open"></div><span class="nav-link">Contact</span></a></li>
						<li>
						
		<?php
		session_start();
if (isset($_SESSION['login'] ) && isset($_SESSION['password'] )){
						echo'<a href="javascript:deconnexion();">
                        <div class="icon icon-sm icon-default thin-ico thin-icon-key"></div><span class="nav-link">Déconnexion</span></a>';
						}
						else{
						echo'<a data-toggle="modal" data-target="#myModalcnx">
                        <div class="icon icon-sm icon-default thin-ico thin-icon-key"></div><span class="nav-link">Connexion</span></a>';
						}
					?>	
						</li>
             
	
	
	
                  </ul>
                </div>
              </div>
            </div>
          </nav>
		  	<div class="modal fade" id="myModalcnx" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><img src="images/brand.png" width="150px"/></center>
      </div>
      <div class="modal-body">
   <div id="login_user">
       <div class="col-md-12">
	  <br><div id="msg-erreur" class="alert alert-danger" style="display:none;" >
<center>Login ou mot de passe incorrect</center></div>
</div> 
         <div class="col-md-12">
		  Login 
            <input type="text" class="form-control"   name="log_user" id="log_user">
          </div>
		  <div class="col-md-12">
		  Password
            <input type="password" class="form-control"   name="passwoed_user" id="password_user"><br>
          </div>
     
	   <div class="modal-footer">
		  <div class="col-md-12">
				  <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-bottom:1%"  onclick="verif_login()">Valider</button>
			</div>
         <div class="col-md-12">
		   <button id="login_register_btn" type="button" class="btn btn-danger btn-lg btn-block" onclick="display_inscri()">S'inscrire</button>
			</div>
      </div>
	  </div>
	  <div id="inscription_user" style="display:none">
       <div class="col-md-12">
	  <br><div id="alertsuccess" class="alert alert-success" style="display:none;" >
<center>Succès d'inscription!</center></div>
<div id="champ-obl" class="alert alert-danger" style="display:none;" >
<center>Veuillez saisir les champs obligatoires!</center></div>
</div> 
        <div class="col-md-12">
		  Nom  <span style="color:red">*</span>
            <input type="text" class="form-control"   name="nom" id="nom" required>
          </div>
		  <div class="col-md-12">
		Prénom  <span style="color:red">*</span>
            <input type="text" class="form-control"   name="prenom" id="prenom" required>
          </div>
		  
    
	   <div class="col-md-12"> 
	   <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script>
webshims.setOptions('forms-ext', {types: 'date'});
webshims.polyfill('forms forms-ext');
$.webshims.formcfg = {
en: {
    dFormat: '-',
    dateSigns: '-',
    patterns: {
        d: "yy-mm-dd"
    }
}
};
</script>
        Date de naissance  <span style="color:red">*</span>
  <input type="date" name="date_naiss"  class="form-control"  id="date_naiss" required>
         </div>
		  <div class="col-md-12">
		Téléphone 
            <input type="number" class="form-control"   name="tel" id="tel" min="0" >
            </div>
		    <div class="col-md-12">
		        Pays <span style="color:red">*</span>
        <select class="form-control" name="pays" id="pays" required>
<option value="">--- Choisissez ---</option>
                       <option value="AF">Afghanistan
                       <option value="ZA">Afrique du sud
                       <option value="AX">Åland, îles
                       <option value="AL">Albanie
                       <option value="DZ">Algérie
                       <option value="DE">Allemagne
                       <option value="AD">Andorre
                       <option value="AO">Angola
                       <option value="AI">Anguilla
                       <option value="AQ">Antarctique
                       <option value="AG">Antigua et barbuda
                       <option value="SA">Arabie saoudite
                       <option value="AR">Argentine
                       <option value="AM">Arménie
                       <option value="AW">Aruba
                       <option value="AU">Australie
                       <option value="AT">Autriche
                       <option value="AZ">Azerbaïdjan
                       <option value="BS">Bahamas
                       <option value="BH">Bahreïn
                       <option value="BD">Bangladesh
                       <option value="BB">Barbade
                       <option value="BY">Bélarus
                       <option value="BE">Belgique
                       <option value="BZ">Belize
                       <option value="BJ">Bénin
                       <option value="BM">Bermudes
                       <option value="BT">Bhoutan
                       <option value="BO">Bolivie, l'état plurinational de
                       <option value="BQ">Bonaire, saint eustache et saba
                       <option value="BA">Bosnie herzégovine
                       <option value="BW">Botswana
                       <option value="BV">Bouvet, île
                       <option value="BR">Brésil
                       <option value="BN">Brunei darussalam
                       <option value="BG">Bulgarie
                       <option value="BF">Burkina faso
                       <option value="BI">Burundi
                       <option value="KY">Caïmans, îles
                       <option value="KH">Cambodge
                       <option value="CM">Cameroun
                       <option value="CA">Canada
                       <option value="CV">Cap vert
                       <option value="CF">Centrafricaine, république
                       <option value="CL">Chili
                       <option value="CN">Chine
                       <option value="CX">Christmas, île
                       <option value="CY">Chypre
                       <option value="CC">Cocos (keeling), îles
                       <option value="CO">Colombie
                       <option value="KM">Comores
                       <option value="CG">Congo
                       <option value="CD">Congo, la république démocratique du
                       <option value="CK">Cook, îles
                       <option value="KR">Corée, république de
                       <option value="KP">Corée, république populaire démocratique de
                       <option value="CR">Costa rica
                       <option value="CI">Côte d'ivoire
                       <option value="HR">Croatie
                       <option value="CU">Cuba
                       <option value="CW">Curaçao
                       <option value="DK">Danemark
                       <option value="DJ">Djibouti
                       <option value="DO">Dominicaine, république
                       <option value="DM">Dominique
                       <option value="EG">Égypte
                       <option value="SV">El salvador
                       <option value="AE">Émirats arabes unis
                       <option value="EC">Équateur
                       <option value="ER">Érythrée
                       <option value="ES">Espagne
                       <option value="EE">Estonie
                       <option value="US">États unis
                       <option value="ET">Éthiopie
                       <option value="FK">Falkland, îles (malvinas)
                       <option value="FO">Féroé, îles
                       <option value="FJ">Fidji
                       <option value="FI">Finlande
                       <option value="FR">France
                       <option value="GA">Gabon
                       <option value="GM">Gambie
                       <option value="GE">Géorgie
                       <option value="GS">Géorgie du sud et les îles sandwich du sud
                       <option value="GH">Ghana
                       <option value="GI">Gibraltar
                       <option value="GR">Grèce
                       <option value="GD">Grenade
                       <option value="GL">Groenland
                       <option value="GP">Guadeloupe
                       <option value="GU">Guam
                       <option value="GT">Guatemala
                       <option value="GG">Guernesey
                       <option value="GN">Guinée
                       <option value="GW">Guinée bissau
                       <option value="GQ">Guinée équatoriale
                       <option value="GY">Guyana
                       <option value="GF">Guyane française
                       <option value="HT">Haïti
                       <option value="HM">Heard et îles macdonald, île
                       <option value="HN">Honduras
                       <option value="HK">Hong kong
                       <option value="HU">Hongrie
                       <option value="IM">Île de man
                       <option value="UM">Îles mineures éloignées des états unis
                       <option value="VG">Îles vierges britanniques
                       <option value="VI">Îles vierges des états unis
                       <option value="IN">Inde
                       <option value="ID">Indonésie
                       <option value="IR">Iran, république islamique d'
                       <option value="IQ">Iraq
                       <option value="IE">Irlande
                       <option value="IS">Islande
                       <option value="IL">Israël
                       <option value="IT">Italie
                       <option value="JM">Jamaïque
                       <option value="JP">Japon
                       <option value="JE">Jersey
                       <option value="JO">Jordanie
                       <option value="KZ">Kazakhstan
                       <option value="KE">Kenya
                       <option value="KG">Kirghizistan
                       <option value="KI">Kiribati
                       <option value="KW">Koweït
                       <option value="LA">Lao, république démocratique populaire
                       <option value="LS">Lesotho
                       <option value="LV">Lettonie
                       <option value="LB">Liban
                       <option value="LR">Libéria
                       <option value="LY">Libye
                       <option value="LI">Liechtenstein
                       <option value="LT">Lituanie
                       <option value="LU">Luxembourg
                       <option value="MO">Macao
                       <option value="MK">Macédoine, l'ex république yougoslave de
                       <option value="MG">Madagascar
                       <option value="MY">Malaisie
                       <option value="MW">Malawi
                       <option value="MV">Maldives
                       <option value="ML">Mali
                       <option value="MT">Malte
                       <option value="MP">Mariannes du nord, îles
                       <option value="MA">Maroc
                       <option value="MH">Marshall, îles
                       <option value="MQ">Martinique
                       <option value="MU">Maurice
                       <option value="MR">Mauritanie
                       <option value="YT">Mayotte
                       <option value="MX">Mexique
                       <option value="FM">Micronésie, états fédérés de
                       <option value="MD">Moldova, république de
                       <option value="MC">Monaco
                       <option value="MN">Mongolie
                       <option value="ME">Monténégro
                       <option value="MS">Montserrat
                       <option value="MZ">Mozambique
                       <option value="MM">Myanmar
                       <option value="NA">Namibie
                       <option value="NR">Nauru
                       <option value="NP">Népal
                       <option value="NI">Nicaragua
                       <option value="NE">Niger
                       <option value="NG">Nigéria
                       <option value="NU">Niué
                       <option value="NF">Norfolk, île
                       <option value="NO">Norvège
                       <option value="NC">Nouvelle calédonie
                       <option value="NZ">Nouvelle zélande
                       <option value="IO">Océan indien, territoire britannique de l'
                       <option value="OM">Oman
                       <option value="UG">Ouganda
                       <option value="UZ">Ouzbékistan
                       <option value="PK">Pakistan
                       <option value="PW">Palaos
                       <option value="PS">Palestinien occupé, territoire
                       <option value="PA">Panama
                       <option value="PG">Papouasie nouvelle guinée
                       <option value="PY">Paraguay
                       <option value="NL">Pays bas
                       <option value="PE">Pérou
                       <option value="PH">Philippines
                       <option value="PN">Pitcairn
                       <option value="PL">Pologne
                       <option value="PF">Polynésie française
                       <option value="PR">Porto rico
                       <option value="PT">Portugal
                       <option value="QA">Qatar
                       <option value="RE">Réunion
                       <option value="RO">Roumanie
                       <option value="GB">Royaume uni
                       <option value="RU">Russie, fédération de
                       <option value="RW">Rwanda
                       <option value="EH">Sahara occidental
                       <option value="BL">Saint barthélemy
                       <option value="SH">Sainte hélène, ascension et tristan da cunha
                       <option value="LC">Sainte lucie
                       <option value="KN">Saint kitts et nevis
                       <option value="SM">Saint marin
                       <option value="MF">Saint martin(partie française)
                       <option value="SX">Saint martin (partie néerlandaise)
                       <option value="PM">Saint pierre et miquelon
                       <option value="VA">Saint siège (état de la cité du vatican)
                       <option value="VC">Saint vincent et les grenadines
                       <option value="SB">Salomon, îles
                       <option value="WS">Samoa
                       <option value="AS">Samoa américaines
                       <option value="ST">Sao tomé et principe
                       <option value="SN">Sénégal
                       <option value="RS">Serbie
                       <option value="SC">Seychelles
                       <option value="SL">Sierra leone
                       <option value="SG">Singapour
                       <option value="SK">Slovaquie
                       <option value="SI">Slovénie
                       <option value="SO">Somalie
                       <option value="SD">Soudan
                       <option value="SS">Soudan du sud
                       <option value="LK">Sri lanka
                       <option value="SE">Suède
                       <option value="CH">Suisse
                       <option value="SR">Suriname
                       <option value="SJ">Svalbard et île jan mayen
                       <option value="SZ">Swaziland
                       <option value="SY">Syrienne, république arabe
                       <option value="TJ">Tadjikistan
                       <option value="TW">Taïwan, province de chine
                       <option value="TZ">Tanzanie, république unie de
                       <option value="TD">Tchad
                       <option value="CZ">Tchèque, république
                       <option value="TF">Terres australes françaises
                       <option value="TH">Thaïlande
                       <option value="TL">Timor leste
                       <option value="TG">Togo
                       <option value="TK">Tokelau
                       <option value="TO">Tonga
                       <option value="TT">Trinité et tobago
                       <option value="TN">Tunisie
                       <option value="TM">Turkménistan
                       <option value="TC">Turks et caïcos, îles
                       <option value="TR">Turquie
                       <option value="TV">Tuvalu
                       <option value="UA">Ukraine
                       <option value="UY">Uruguay
                       <option value="VU">Vanuatu
                       <option value="VE">Venezuela, république bolivarienne du
                       <option value="VN">Viet nam
                       <option value="WF">Wallis et futuna
                       <option value="YE">Yémen
                       <option value="ZM">Zambie
                       <option value="ZW">Zimbabwe​​​​​

               </select>
               <div class="col-md-12" >
                   Ville<span style="color: red">*</span>
               <input type="text" class="form-control" name="ville" id="ville" minlength="2">
               </div>
 </div>
 

<div class="col-md-12" id="autre_eco" style="display:none">
                                       Autre école                                    
                                                <input type="text" id="autre_ecole" name="autre_ecole"  class="form-control">
                                          
                                        </div>
	   <div class="modal-footer">
		  <div class="col-md-12">
		<br> <span style="color:red; float:left"> (*) Champ obligatoire</span>
		
        <button type="button" class="btn btn-primary btn-lg btn-block"  style="margin-bottom:1%" onclick="inscription_user()">Enregistrer</button>
          </div>
		    <div class="col-md-12">
		   <button id="login_register_btn" type="button" class="btn btn-danger btn-lg btn-block" onclick="display_login()">S'authentifier</button>
			</div>
      </div>
	  </div>
	  
    </div>
  </div>
</div>
