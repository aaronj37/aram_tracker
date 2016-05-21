<?php
session_start();
include 'connect.php';
if (isset($_POST['summoner'])){
//get summoners from database *ignore for now*
/*$query = "SELECT Name FROM Summoner WHERE UserID = '"$_SESSION['userID']. "'";

$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
   // echo $result;
    // see if any rows were returned
    if (mysql_num_rows($result) >= 1) {
        // if a row was returned
        // authentication was successful
        // create session and set cookie with username
        
        $_SESSION['auth'] = 1;
	*/
//summoner, champion, victorious, kills, deaths, assists
$summoner =$_POST['summoner'];
$champion =$_POST['champion'];
$victorious =$_POST['victorious'];
$kills =$_POST['kills'];
$deaths =$_POST['deaths'];
$assists =$_POST['assists'];
$kda=$kills+.5*$assists -$deaths;
//die($summoner." ".$champion." ".$victorious." ".$kills." ".$deaths." ".$assists." ".$kda);

$sql="INSERT INTO games (s_name, c_name, won, kills, deaths, assists, kda, game_date)
VALUES
('$summoner','$champion','$victorious', '$kills','$deaths','$assists','$kda','now')";
pg_query($sql);

}


?>
<html lang="en">
  <head>
<


    <meta charset="utf-8">
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="css/portfolio.css" type="text/css" rel="stylesheet">
    <style type="text/css">
      body {
        /*padding-top: 60px;
        padding-bottom: 40px;*/
       /* background-image:url('img/blackhole.JPG');
        background-repeat:repeat;
        background-size: contain;*/
      }
      input:required:invalid, input:focus:invalid { background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAeVJREFUeNqkU01oE1EQ/mazSTdRmqSxLVSJVKU9RYoHD8WfHr16kh5EFA8eSy6hXrwUPBSKZ6E9V1CU4tGf0DZWDEQrGkhprRDbCvlpavan3ezu+LLSUnADLZnHwHvzmJlvvpkhZkY7IqFNaTuAfPhhP/8Uo87SGSaDsP27hgYM/lUpy6lHdqsAtM+BPfvqKp3ufYKwcgmWCug6oKmrrG3PoaqngWjdd/922hOBs5C/jJA6x7AiUt8VYVUAVQXXShfIqCYRMZO8/N1N+B8H1sOUwivpSUSVCJ2MAjtVwBAIdv+AQkHQqbOgc+fBvorjyQENDcch16/BtkQdAlC4E6jrYHGgGU18Io3gmhzJuwub6/fQJYNi/YBpCifhbDaAPXFvCBVxXbvfbNGFeN8DkjogWAd8DljV3KRutcEAeHMN/HXZ4p9bhncJHCyhNx52R0Kv/XNuQvYBnM+CP7xddXL5KaJw0TMAF8qjnMvegeK/SLHubhpKDKIrJDlvXoMX3y9xcSMZyBQ+tpyk5hzsa2Ns7LGdfWdbL6fZvHn92d7dgROH/730YBLtiZmEdGPkFnhX4kxmjVe2xgPfCtrRd6GHRtEh9zsL8xVe+pwSzj+OtwvletZZ/wLeKD71L+ZeHHWZ/gowABkp7AwwnEjFAAAAAElFTkSuQmCC'); background-position: right top; background-repeat: no-repeat; -moz-box-shadow: none; } input:required:valid { background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAepJREFUeNrEk79PFEEUx9/uDDd7v/AAQQnEQokmJCRGwc7/QeM/YGVxsZJQYI/EhCChICYmUJigNBSGzobQaI5SaYRw6imne0d2D/bYmZ3dGd+YQKEHYiyc5GUyb3Y+77vfeWNpreFfhvXfAWAAJtbKi7dff1rWK9vPHx3mThP2Iaipk5EzTg8Qmru38H7izmkFHAF4WH1R52654PR0Oamzj2dKxYt/Bbg1OPZuY3d9aU82VGem/5LtnJscLxWzfzRxaWNqWJP0XUadIbSzu5DuvUJpzq7sfYBKsP1GJeLB+PWpt8cCXm4+2+zLXx4guKiLXWA2Nc5ChOuacMEPv20FkT+dIawyenVi5VcAbcigWzXLeNiDRCdwId0LFm5IUMBIBgrp8wOEsFlfeCGm23/zoBZWn9a4C314A1nCoM1OAVccuGyCkPs/P+pIdVIOkG9pIh6YlyqCrwhRKD3GygK9PUBImIQQxRi4b2O+JcCLg8+e8NZiLVEygwCrWpYF0jQJziYU/ho2TUuCPTn8hHcQNuZy1/94sAMOzQHDeqaij7Cd8Dt8CatGhX3iWxgtFW/m29pnUjR7TSQcRCIAVW1FSr6KAVYdi+5Pj8yunviYHq7f72po3Y9dbi7CxzDO1+duzCXH9cEPAQYAhJELY/AqBtwAAAAASUVORK5CYII='); background-position: right top; background-repeat: no-repeat; }
    </style>
    <link href=".css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>
    
<div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      
   
  <!--summoner, champion, win/loose, kills, deaths, assissts-->

        <form id="myform" class="well span8" action='' method="POST">
    <fieldset>
    <div id="legend">
    <legend class="">Enter Game Information</legend>
    </div>
    <div class="control-group">
    <!-- Password-->
    
    <div class="controls">
    <input type="radio" name="victorious" value="1">Won
	<input type="radio" name="victorious" value="0">Lost
    </div>
    </div>
    <div class="control-group">
    <!-- Username -->
    <label class="control-label" for="summoner">Summoner Name</label>
    <div class="controls">
    <input type="text" id="summoner" name="summoner" required="" placeholder="Enter your summoner name here" class="input-xlarge">
    </div>
    </div>
     
    <div class="control-group">
    <!-- Password-->
    <label class="control-label" for="champion">Champion</label>
    <div class="controls">
    <input type="text" id="champion" name="champion" required="" placeholder="Enter your champion here" class="input-xlarge">
    </div>
    </div>
     
     

    <div class="control-group">
    <!-- Password-->
    <label class="control-label" for="kills">Kills</label>
    <div class="controls">
    <input type="text" id="kills" name="kills" required="" placeholder="Enter your kills here" class="input-xlarge">
    </div>
    </div>

    <div class="control-group">
    <!-- Password-->
    <label class="control-label" for="deaths">Deaths</label>
    <div class="controls">
    <input type="text" id="deaths" name="deaths" required="" placeholder="Enter your deaths here" class="input-xlarge">
    </div>
    </div>

    <div class="control-group">
    <!-- Password-->
    <label class="control-label" for="assists">Assists</label>
    <div class="controls">
    <input type="text" id="assists" name="assists" required="" placeholder="Enter your assists here" class="input-xlarge">
    </div>
    </div>
     
    <div class="control-group">
    <!-- Button -->
    <div class="controls">
    <button class="btn btn-success">Submit</button>
     
    </div>
    </div>
    </fieldset>
    
    </form>
    
    
	
    
	
   
    
</div>
  <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
