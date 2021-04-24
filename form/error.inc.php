<link rel="icon"  type="image/ico" href="images/favicon.ico">
<link rel="icon" type="img/png" href="images/favicon.png">
<link rel="stylesheet" href="css/styles.css">

<style type="text/css">
*{
  padding: 0;
  margin: 0;
  border: 0;
}

/*----------------------------------------------

 Logo

-------------------------------------------------*/
#logo {
  margin: 5px 450px;
}

/*----------------------------------------------

Nav Bar

-------------------------------------------------*/
header{
 margin: 0 auto;
 text-align: center;

}

header nav li{
  display: inline-block;
  margin: 20px auto;
  color: black;
}

header nav a{
  padding: 15px 60px;
  text-transform: uppercase;
  color: black;
  text-decoration: none;
  border-top: 2px solid #000;
  border-bottom: 2px solid #000;
  margin: -5px;
  font-weight: bold;
}

header nav a:visited {
  color: #77917B;
}

header nav a:hover {
  color: #97636D;
}

header nav a:active {
  color: #D0ABAE;
}
.contain{

}
</style>

<div id="logo">
 <img src="images/logo.png" alt="logo" />
</div>

<div class="contain">


<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

</div>
