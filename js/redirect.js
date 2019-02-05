
var seconds =6;
var url="card_page.php";

function redirect(){
 if (seconds <=0){
 // redirect to new url after counter  down.
  window.location = url;
 }else{
  seconds--;
  document.getElementById("counter").innerHTML = "<p>you can start shopping in "+seconds+" seconds...</p>";
  setTimeout("redirect()", 1000)
 }
}
window.onload=redirect;
