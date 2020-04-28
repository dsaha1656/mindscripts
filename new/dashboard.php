<!DOCTYPE html>
<html>
<head>
	<title>MindScript</title>
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
<header>

	<div id="sidebar" class="hide-on-small-only">
		<div class=" ">
			<ul class="side-nav fixed">
				<li>
			<div class="user-view">
			    <div class="background">
			        <img src="unnamed.jpg">
			    </div>
			    <a href="#!user"><img class="circle" src="unnamed.jpg"></a>
			    <a href="#!name"><span class="white-text name"><?php echo $_SESSION["firstName"]." ".$_SESSION["lastName"]; ?></span>
          <span class="white-text email"><?php echo $_SESSION["email"]; ?></span></a>
			</div>
		</li>
    <li><a href="dashboard.php" class="waves-effect waves-light homeButton"><i class="material-icons">home</i>Dashboard</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="progress.php" class="waves-effect waves-light"><i class="material-icons">show_chart</i>Progress</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="profile.php" class="waves-effect waves-light"><i class="material-icons">person_pin</i>Profile</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="notification.php" id="close" class="waves-effect waves-light"><i class="material-icons">notifications</i>Notification</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="feedback.php" id="close" class="waves-effect waves-light"><i class="material-icons">feedback</i>Feedback</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="aboutus.php" class="waves-effect waves-light"><i class="material-icons">sentiment_very_satisfied</i>About Us</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
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
			    <a href="#!name"><span class="white-text name"><?php echo $_SESSION["firstName"]." ".$_SESSION["lastName"]; ?></span>
          <span class="white-text email"><?php echo $_SESSION["email"]; ?></span></a>
			</div>
		</li>
		<li><a href="dashboard.php" class="waves-effect waves-light homeButton"><i class="material-icons">home</i>Dashboard</a></li>
		<li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="progress.php" class="waves-effect waves-light"><i class="material-icons">show_chart</i>Progress</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="profile.php" class="waves-effect waves-light"><i class="material-icons">person_pin</i>Profile</a></li>
		<li><div class="divider" style="margin: 8px;"></div></li>
		<li><a href="notification.php" id="close" class="waves-effect waves-light"><i class="material-icons">notifications</i>Notification</a></li>
		<li><div class="divider" style="margin: 8px;"></div></li>
		<li><a href="feedback.php" id="close" class="waves-effect waves-light"><i class="material-icons">feedback</i>Feedback</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="aboutus.php" class="waves-effect waves-light"><i class="material-icons">sentiment_very_satisfied</i>About Us</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
	</ul>
	<nav class="slider-adjustment brown">
		<div class="nav-wrapper">
			<a href="#" data-activates="slide-out" class="button-collapse left"><i class="material-icons">menu</i></a>
			<a href="#" class="brand-logo center" style="display: inline;">Dashboard</a>
      <a href="logout.php" style="padding-right: 20px;" class="right">Log Out</a>
    	</div>
	</nav>
</header>
<main>
	<div class="container" style="margin-top: 15px;" id="playGround">
      <div class="row">
        <div class="col s12 m6 l4">
          <div class="card orange accent-3">
            <div class="card-content white-text">
              <span class="card-title center"><span style="font-weight:bold; ">Round 1</span> </span>
              <p class="center"> <span  style  ="font-family:serif;  "> <font size="+2">Psychometric Test</font>  </span>  <br/> [Personality Test] </p>

            </div>
            <a href="Rounds/one.php">
            <div class="card-action deep-purple darken-3" style="color:#ffab40">
              TAKE TEST 
            </div>
            </a>
          </div>
        </div>
         <div class="col s12 m6 l4">
          <div class="card orange accent-3">
            <div class="card-content white-text">
               <span class="card-title center"><span style="font-weight:bold; ">Round 2</span> </span>
              <p class="center"> <span  style  ="font-family:serif;  "> <font size="+2">Positive Emotion</font>  </span>  <br/> [Optimistic & View] </p>
            </div>
            <a href="Rounds/two.php">
            <div class="card-action deep-purple darken-3" style="color:#ffab40">
              TAKE TEST 
            </div>
            </a>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card orange accent-3">
            <div class="card-content white-text">
  
               <span class="card-title center"><span style="font-weight:bold; ">Round 3</span> </span>
              <p class="center"> <span  style  ="font-family:serif;  "> <font size="+2">Engagement</font>  </span>  <br/> [Blissful Immersion] </p>
            </div>
            <a href="Rounds/three.php">
            <div class="card-action deep-purple darken-3" style="color:#ffab40">
              TAKE TEST 
            </div>
            </a>
          </div>
        </div>
         <div class="col s12 m6 l4">
          <div class="card orange accent-3">
            <div class="card-content white-text">
            
               <span class="card-title center"><span style="font-weight:bold; ">Round 4  </span> </span>
              <p class="center"> <span  style  ="font-family:serif;  "> <font size="+2">Relationships</font>  </span>  <br/> [Social Connection] </p>
            </div>
            <a href="Rounds/four.php">
            <div class="card-action deep-purple darken-3" style="color:#ffab40">
              TAKE TEST 
            </div>
            </a>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card orange accent-3">
            <div class="card-content white-text">
          
               <span class="card-title center"><span style="font-weight:bold; ">Round 5</span> </span>
              <p class="center"> <span  style  ="font-family:serif;  "> <font size="+2">Meaning of Life</font>  </span>  <br/> [Meaning] </p>
            </div>
            <a href="Rounds/five.php">
            <div class="card-action deep-purple darken-3" style="color:#ffab40">
              TAKE TEST 
            </div>
            </a>
          </div>
        </div>
         <div class="col s12 m6 l4">
          <div class="card orange accent-3">
            <div class="card-content white-text">
          
               <span class="card-title center"><span style="font-weight:bold; ">Round 6</span> </span>
              <p class="center"> <span  style  ="font-family:serif;  "> <font size="+2">Accomplishments</font>  </span>  <br/> [Goals & Ambitions] </p>
            </div>
            <a href="Rounds/six.php">
            <div class="card-action deep-purple darken-3" style="color:#ffab40">
              TAKE TEST 
            </div>
            </a>
          </div>
        </div>
      </div>
      </div>
</main>
</body>
</html>