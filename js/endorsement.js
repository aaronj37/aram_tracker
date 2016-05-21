function check()
{
	if(typeof(Storage)!=="undefined")
  {
  if (localStorage.UserName)
  {
  	
  	document.getElementById("welcome").innerHTML="Welcome "+localStorage.UserName;
  	//localStorage.removeItem("Endorsements")
if(localStorage.Endorsements)
	{
		

	}
	else
	{
		LoadJSON();
		
	}
	populateTable();


  	
  	//localStorage.clear();
  }
	else
	{
		alert("No name set. You will be redirected to the front page")
		window.location ="Identity.html"
	
	 //make a div show up
		
		
	}	

  }
else
  {
  alert("Sorry! No web storage support..")
  }

}
function populateTable()
{
	
	var existingDiv = document.getElementById('endorsements');
		existingDiv.innerHTML=CreateTable(JSON.parse(localStorage.Endorsements));

}
function LoadJSON()
{
	//alert("Made it here");
	// Create AJAX objet and check if it was created
	var jsonAjax = GetXmlHttpObject();
	if (jsonAjax == null) { alert('Your browser is uber lame.  It does not support AJAX.  Upgrade NOW.'); return; }
	
	// Set up the AJAX callback function
	// To learn more about AJAX, go to W3Schools and read the AJAX Turotial.
	jsonAjax.onreadystatechange = function() {
		if (jsonAjax.readyState==4) {	// response from server returned
			if (jsonAjax.status==200) {	// successful status returned
			
				// Turn your JSON into a JavaScript object.
				// "("'s are put around it to make it safer.  
				// In real world it is wise to use a JavaScript library to execute JSON although this should be ok.
				// Set bracketData to objects defined by your json.
				EndJSON = eval("(" + jsonAjax.responseText + ")");
				//alert("Made it here");
				// Call function to populate matches after bracketData object created
				localStorage.Endorsements=JSON.stringify(EndJSON);
			}	
			else {
				alert("Server error returned to AJAX call: " + jsonAjax.status + "\n  Make sure you changed the url in loadJSON()");
			}
		}
	};

	// Send the request for the JSON file to the server. 
	var url = 'endorsements.json' + // EDIT THIS LINE
				'?nocache=' + (new Date().getTime());	// Leave this alone.  It makes it so the JSON will not cache in your browser.
	jsonAjax.open("GET", url, true);
	jsonAjax.send(null);


}





function predicatBy(prop){
   return function(a,b){
      if( a[prop] > b[prop]){
          return 1;
      }else if( a[prop] < b[prop] ){
          return -1;
      }
      return 0;
   }
}

//Usage
//yourArray.sort( predicatBy("age") );


function CreateTable(result) {
	console.log(result);
	result.sort( predicatBy("Name") );
    //var table = document.createElement('table');
    var str = '<table border="1" width="%100"><col width ="20"><col width ="20"><col width ="250">'; 
    str += '<tr><th>Name</th><th>Company</th><th>Comments</th></tr>';
    for ( var i=0; i< result.length; i++){
        str += '<tr><td>' + result[i].Name + '</td><td>' + result[i].Company + '</td><td>'+ result[i].Comments+ '</td></tr>';
    }
    str += '</table>';
    return str;    
}

function NewEndorsement()
{
//	alert(document.getElementById("Name").value + " " +	document.getElementById("Company").value + " " + document.getElementById("Comments").value)


var name =document.getElementById("Name").value
var company=document.getElementById("Company").value
var comment=document.getElementById("Comments").value
document.getElementById("myform").reset();
if(localStorage.Endorsements)
{
	//localStorage.removeItem("Endorsements")
	var Earray=JSON.parse(localStorage.Endorsements);
	Earray.push({ 'Name': name, 'Company': company, 'Comments': comment })
	localStorage.Endorsements=JSON.stringify(Earray);
}
else
{
var testObject = [{ 'Name': name, 'Company': company, 'Comments': comment }]
localStorage.Endorsements=JSON.stringify(testObject);

//var retrievedObject = localStorage.Endorsements;
//var test =JSON.parse(retrievedObject);
//console.log('retrievedObject: ', JSON.parse(retrievedObject));

}
populateTable();
//...

//var testObject = [{ 'one': 1, 'two': 2, 'three': 3 },{ 'one': 4, 'two': 5, 'three': 6 }];

// Put the object into storage
//localStorage.setItem('testObject', JSON.stringify(testObject));

// Retrieve the object from storage


}
function GetXmlHttpObject()
{
	if (window.XMLHttpRequest)
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		return new XMLHttpRequest();
	}
	if (window.ActiveXObject)
	{
		// code for IE6, IE5
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
	return null;
}