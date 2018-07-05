                /**************** Authentification ******************/
               
function authentification() 
{

  var login= document.getElementById("login").value;
  var password= document.getElementById("password").value;
  var remember= document.getElementById("remember").checked;
		
           if (( login=='adminleaders') && ( password=='admin123'))
				    {
							
                           document.location.href="list_inscri.php";

                }
					
                else 
					{
            document.getElementById('alertt').style.display='block';


                    }

}

               
/***************** Remember me ********************/

function CheckBox(){

  var login= document.getElementById("login").value;
  var password= document.getElementById("password").value;


if (document.getElementById("remember").checked) {

setcookie("login", $login);
setcookie("password", $password);

 
 }

}
 /*****************  Deconnexion ********************/

function deconnexion(){

   sessionStorage.clear();
   location.href = "admin.php";


}
