<?php 
//include("setup.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sleepingfire Games</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="css/icon.css"/>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/ghpages-materialize.css"/>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>	
</head>
<body>
<div class="progress" id="progressbar">
      <div class="indeterminate"></div>
  </div>
<div id="contentiner">
<header>

	<div id="sidebar" class="hide-on-small-only">
		<div class=" ">
			<ul class="side-nav fixed">
				<li>
					<div class="user-view">
						<div class="background">
				        	<img src="unnamed.jpg">
				    	</div>
				    	<img class="circle" src="unnamed.jpg"/>
				    	<span class="white-text name">Dibyendu Saha</span>
				     	<span class="white-text email">admin@sleepingfire.in</span>
				    </div>
				</li>

				<li><div class="divider" style="margin: 8px;"></div></li>
				<li><a href="login.php" class="waves-effect waves-light login"><i class="material-icons">home</i>Login</a></li>
				<li><div class="divider" style="margin: 8px;"></div></li>
				<li><a href="#" class="waves-effect waves-light homeButton"><i class="material-icons">home</i>Home</a></li>
				<li><div class="divider" style="margin: 8px;"></div></li>
				<li><a href="#" class="waves-effect waves-light catClickerButton"><i class="material-icons">touch_app</i>Cat Clicker</a></li>
				<li><a href="#" class="waves-effect waves-light"><i class="material-icons">sentiment_very_satisfied</i>Meme Maker</a></li>
				<li><div class="divider" style="margin: 8px;"></div></li>
				<li><a class="subheader">Designed By</a></li>
				<li><a class="waves-effect waves-light" href="#!"><i class="material-icons">person_pin</i>Dibyendu Saha</a></li>
			</ul>
		</div>
	</div>
	<ul id="slide-out" class="side-nav">
		<li>
			<div class="user-view">
			    <div class="background">
			        <img src="unnamed.jpg">
			    </div>
			    <a href="#!user"><img class="circle" src="unnamed.jpg"></a>
			    <a href="#!name"><span class="white-text name">Dibyendu Saha</span></a>
			    <a href="#!email"><span class="white-text email">admin@sleepingfire.in</span></a>
			</div>
		</li>
		<li><div class="divider" style="margin: 8px;"></div></li>
		<li><a href="login.php" class="waves-effect waves-light login"><i class="material-icons">home</i>Login</a></li>
		<li><div class="divider" style="margin: 8px;"></div></li>
		<li><a href="#" class="waves-effect waves-light homeButton"><i class="material-icons">home</i>Home</a></li>
		<li><div class="divider" style="margin: 8px;"></div></li>
		<li><a href="#" class="waves-effect waves-light catClickerButton"><i class="material-icons">touch_app</i>Cat Clicker</a></li>
		<li><a href="#" class="waves-effect waves-light"><i class="material-icons">sentiment_very_satisfied</i>Meme Maker</a></li>
		<li><div class="divider" style="margin: 8px;"></div></li>
		<li><a href="#" id="close" class="waves-effect waves-light"><i class="material-icons">cancel</i>Close</a></li>
		<li><div class="divider" style="margin: 8px;"></div></li>
		<li><a class="subheader">Designed By</a></li>
		<li><a class="waves-effect waves-light" href="#!"><i class="material-icons">person_pin</i>Dibyendu Saha</a></li>
	</ul>
	<nav class="slider-adjustment">
		<div class="nav-wrapper">
			<a href="#" data-activates="slide-out" class="button-collapse left"><i class="material-icons">menu</i></a>
			<a href="#" class="brand-logo center" style="display: inline;">Welcome</a>
		</div>
	</nav>
</header>
<main>
	<div class="container" style="margin-top: 15px;" id="playGround">
		<h1>Hi there</h1>
	</div>
</main>
</div>
</body>
</html>