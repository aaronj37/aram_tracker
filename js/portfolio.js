function check(){
	if(typeof(Storage)!=="undefined")
  {
  if (localStorage.UserName)
  {
  	
  	document.getElementById("welcome").innerHTML="Welcome "+localStorage.UserName;
  	//localStorage.clear();
  }
	else
	{
		//alert("No name set")
	
	document.getElementById("firsttime").style.display="inline"; //make a div show up
		
		
	}	

  }
else
  {
  alert("Sorry! No web storage support..");
  }

}
function submitname(){
	//alert("Made it here")
	//alert(document.getElementById("firsttimename").value);
	if(document.getElementById("firsttimename").value!="")
	{
	localStorage.UserName=document.getElementById("firsttimename").value//get Username and store it
	document.getElementById("firsttime").style.display="none";//Hide yo divs, hide yo wives
	document.getElementById("welcome").innerHTML="Welcome "+localStorage.UserName;
	}
}
function clearStorage(){
	//alert("Made it here");
	localStorage.clear();

}