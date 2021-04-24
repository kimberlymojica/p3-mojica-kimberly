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

nav a:visited {
	color: #77917B;
}

nav a:hover {
	color: #97636D;
}

nav a:active {
	color: #D0ABAE;
}
/*----------------------------------------------

Index Body

-------------------------------------------------*/


h1 {
	font-family: 'sewstain',cursive;
	font-size: 46px;
	text-shadow: 1px 1px 2px white, 0 0 1em grey, 0 0 0.2em grey;
	margin: 50px 25px;
	width: 200px;
	float: right;
	color: black;
	padding: 0 370px;
}
p{
  text-align: center;
  font-size: 24px;
  color: white;
}

/*----------------------------------------------

Index Body

-------------------------------------------------*/

h5{
  font-family: 'sewstain', cursive;
  font-size: 48px;
  text-align: center;
  margin: 20px 0 0;
}

.contain{
  width: 1370px;
  height: 490px;
  background: pink;
}

</style>

<div id="logo">
 <img src="images/logo.png" alt="logo" />
</div>

<header>
	<nav>
		<ul>
			<li><a href="index.html">HOME</a></li>
			<li><a href="lips.html">LIPS</a></li>
			<li><a href="eyes.html">EYES</a></li>
			<li><a href="contact.html">CONTACT</a></li>
		</ul>
	</nav>
</header>

<div class="contain">
  <h5>Sorry, you have not completed all of the required fields.</h5>
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
