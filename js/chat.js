function chatshow(){
if (document.getElementById("chatBox").style.display == "block" && document.getElementById("msg").style.display == "block" ){
    document.getElementById("chatBox").style.display="none";
	document.getElementById("msg").style.display="none";
	}
    else{
	document.getElementById("chatBox").style.display="block";
	document.getElementById("msg").style.display="block";
	}
	chatBox.scrollTop=chatBox.scrollHeight
}
function Ajax_Send(GP,URL,PARAMETERS,RESPONSEFUNCTION){
var xmlhttp
try{xmlhttp=new ActiveXObject("Msxml2.XMLHTTP")}
catch(e){
try{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP")}
catch(e){
try{xmlhttp=new XMLHttpRequest()}
catch(e){
alert("Your Browser Does Not Support AJAX")}}}
err=""
if (GP==undefined) err="GP "
if (URL==undefined) err +="URL "
if (PARAMETERS==undefined) err+="PARAMETERS"
if (err!=""){alert("Missing Identifier(s)\n\n"+err);return false;}

xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState == 4){
if (RESPONSEFUNCTION=="") return false;
eval(RESPONSEFUNCTION(xmlhttp.responseText))
}
}
if (GP=="GET"){
URL+="?"+PARAMETERS
xmlhttp.open("GET",URL,true)
xmlhttp.send(null)
}

if (GP="POST"){
PARAMETERS=encodeURI(PARAMETERS)
xmlhttp.open("POST",URL,true)
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
xmlhttp.setRequestHeader("Content-length",PARAMETERS.length)
xmlhttp.setRequestHeader("Connection", "close")
xmlhttp.send(PARAMETERS)
}
}
lastReceived=0;
// Hide the message form
function hideShow(hs){
if(hs=="hide"){
signInForm.signInButt.value="Sign in"
signInForm.signInButt.name="signIn"
messageForm.style.display="none"
//signInForm.userName.style.display="block"
signInName.innerHTML=""
}
if(hs=="show"){
signInForm.signInButt.value="Sign out"

signInForm.signInButt.name="signOut"
messageForm.style.display="block"
signInForm.userName.style.display="none"
signInName.innerHTML=signInForm.userName.value

}}

// Sign in and Out
$(document).ready(function () {
// Sign in
if (signInForm.userName.value==''){
Ajax_Send("GET","js/userconnect.php",'',archiname);
return false
}
else{
if (signInForm.signInButt.name=="signIn"){
data="user=" + signInForm.userName.value +"&oper=signin"
Ajax_Send("POST","js/users.php",data,checkSignIn);
return false
}

// Sign out
if (signInForm.signInButt.name=="signOut"){
data="user=" + signInForm.userName.value +"&oper=signout"
Ajax_Send("POST","js/users.php",data,checkSignOut);
return false
}
}
});

// Sign in response
function archiname(nom){
nom = nom.replace(/[\s]{2,}/g," "); // Enlève les espaces doubles, triples, etc.
nom = nom.replace(/^[\s]/, ""); // Enlève les espaces au début
nom = nom.replace(/[\s]$/,"");
signInForm.userName.value=nom;
if (signInForm.signInButt.name=="signIn"){
data="user=" + signInForm.userName.value +"&oper=signin"
Ajax_Send("POST","js/users.php",data,checkSignIn);
return false
}

// Sign out
if (signInForm.signInButt.name=="signOut"){
data="user=" + signInForm.userName.value +"&oper=signout"
Ajax_Send("POST","js/users.php",data,checkSignOut);
return false
}
}
function checkSignIn(res){
if(res=="signin"){
hideShow("show")
messageForm.message.focus()
updateInterval=setInterval("updateInfo()",1000);
//serverRes.innerHTML="Sign in"
}
}

// Sign out response
function checkSignOut(res){
if(res=="usernotfound"){
serverRes.innerHTML="Sign out error";
res="signout"
}
if(res=="signout"){
hideShow("hide")
signInForm.userName.focus()
clearInterval(updateInterval)
serverRes.innerHTML="Sign out"
return false
}
}

// Update info
function updateInfo(){
//serverRes.innerHTML="Updating"
Ajax_Send("POST","js/users.php","",showUsers)
Ajax_Send("POST","js/receive.php","lastreceived="+lastReceived,showMessages)
}

// update online users
function showUsers(res){
usersOnLine.innerHTML=res
}

// Update messages view
function showMessages(res){
//serverRes.innerHTML=""
var a=chatBox.scrollHeight;
var b=chatBox.clientHeight;
var c = a - b;
var d=chatBox.scrollTop;
var k = d / c;
msgTmArr=res.split("<SRVTM>")
lastReceived=msgTmArr[1]
messages=document.createElement("span")
messages.innerHTML=msgTmArr[0]
chatBox.appendChild(messages)
if(k==1){
chatBox.scrollTop=chatBox.scrollHeight
}
}

// Send message
function sendMessage(){
data="message="+messageForm.message.value+"&user="+signInForm.userName.value
//serverRes.innerHTML="Sending"
Ajax_Send("POST","js/send.php",data,sentOk)
}

// Sent Ok
function sentOk(res){
if(res=="sentok"){
messageForm.message.value=""
messageForm.message.focus()
//serverRes.innerHTML="Sent"
}
}