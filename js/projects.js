function check()
{
	if(typeof(Storage)!=="undefined")
  {
  if (localStorage.UserName)
  {
  	
  	document.getElementById("welcome").innerHTML="Welcome "+localStorage.UserName;
  	startCarousel()
  	//localStorage.removeItem("Endorsements")
}
	else
	{
		alert("No name set. You will be redirected to the front page")
		window.location ="Identity.html"
			
	}	

  }
else
  {
  alert("Sorry! No web storage support..")
  }

}
   function gup( name ){
name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");  
var regexS = "[\\?&]"+name+"=([^&#]*)";  
var regex = new RegExp( regexS );  
var results = regex.exec( window.location.href ); 
 if( results == null )    return "";  
else    return results[1];}

function startCarousel()
{
	var item = parseInt(gup("project"));
	alert(item)
	$('#myCarousel').carousel(item);
	$('#myCarousel').carousel("cycle");
}


