<?php 
include "../conf.php";
include "../functions.php";
if (!login()) {
  header("location:http://mindscript.tk/");
  die();
}
if (!empty($_POST['1']) && !empty($_POST['2']) && !empty($_POST['3']) && !empty($_POST['4']) && !empty($_POST['5']) && !empty($_POST['6']) && !empty($_POST['7']) && !empty($_POST['8']) && !empty($_POST['9']) && !empty($_POST['10'])) {
  $one = $_POST['1'];
  $two =$_POST['2'];
  $three =$_POST['3'];
  $four =$_POST['4'];
  $five =$_POST['5'];
  $six =$_POST['6'];
  $seven =$_POST['7'];
  $eight =$_POST['8'];
  $nine =$_POST['9'];
  $ten =$_POST['10'];
  $email = $_SESSION['email'];
  $q = "SELECT * from answers_one where email='$email'";
  $q = mysqli_query($dataBase['connection'],$q);
  if (mysqli_num_rows($q)<1) {
    $q = "INSERT into answers_one(email,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) values('$email','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten')";
    mysqli_query($dataBase['connection'],$q);
    $q = "UPDATE Client_Users SET round='2' where email='$email'";
    mysqli_query($dataBase['connection'],$q);
    header("location:../");
  }
  else {
    $q = "UPDATE answers_one SET email='$email',q1='$one',q2='$two',q3='$three',q4='$four',q5='$five',q6='$six',q7='$seven',q8='$eight',q9='$nine',q10='$ten' where email='$email'";
    mysqli_query($dataBase['connection'],$q);
    header("location:../");
  } 
}
$q = "SELECT roundTwo from questions LIMIT 30";
$q = mysqli_query($dataBase['connection'], $q);
$products=array();
for ($i=0; $row=mysqli_fetch_array($q) ; $i++) {
  $products[]=$row;
}
echo "<pre>";
var_dump($products);
die();
?>
<!DOCTYPE html>
<html>
<head>
  <title>MindScript</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="css/icon.css"/>
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/ghpages-materialize.css"/>
  <link rel="stylesheet" type="text/css" href="css/1.css"/>
  <link rel="stylesheet" type="text/css" href="css/materialize-stepper.min.css"/>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/1.js"></script>
  <script type="text/javascript" src="js/jquery.cookie.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>  
  <script type="text/javascript" src="js/materialize-stepper.min.js"></script>  
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
          <a href="#!user"><img class="circle" src="unnamed.jpg"></a>
          <a href="#!name"><span class="white-text name"><?php echo $_SESSION["firstName"]." ".$_SESSION["lastName"]; ?></span>
          <span class="white-text email"><?php echo $_SESSION["email"]; ?></span></a>
      </div>
    </li>
    <li><a href="../dashboard.php" class="waves-effect waves-light homeButton"><i class="material-icons">home</i>Dashboard</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="../progress.php" class="waves-effect waves-light"><i class="material-icons">show_chart</i>Progress</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="../profile.php" class="waves-effect waves-light"><i class="material-icons">person_pin</i>Profile</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="../notification.php" id="close" class="waves-effect waves-light"><i class="material-icons">notifications</i>Notification</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="../feedback.php" id="close" class="waves-effect waves-light"><i class="material-icons">feedback</i>Feedback</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="../aboutus.php" class="waves-effect waves-light"><i class="material-icons">sentiment_very_satisfied</i>About Us</a></li>
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
    <li><a href="../dashboard.php" class="waves-effect waves-light homeButton"><i class="material-icons">home</i>Dashboard</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="../progress.php" class="waves-effect waves-light"><i class="material-icons">show_chart</i>Progress</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="../profile.php" class="waves-effect waves-light"><i class="material-icons">person_pin</i>Profile</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="../notification.php" id="close" class="waves-effect waves-light"><i class="material-icons">notifications</i>Notification</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="../feedback.php" id="close" class="waves-effect waves-light"><i class="material-icons">feedback</i>Feedback</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
    <li><a href="../feedback.php" id="close" class="waves-effect waves-light"><i class="material-icons">feedback</i>Feedback</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
     <li><a href="../aboutus.php" class="waves-effect waves-light"><i class="material-icons">sentiment_very_satisfied</i>About Us</a></li>
    <li><div class="divider" style="margin: 8px;"></div></li>
  </ul>
  <nav class="slider-adjustment brown">
    <div class="nav-wrapper">
      <a href="#" data-activates="slide-out" class="button-collapse left"><i class="material-icons">menu</i></a>
      <a href="#" class="brand-logo center" style="display: inline;">Round-3</a>
          <a href="../logout.php" style="padding-right: 20px;" class="right">Log Out</a>
    </div>
  </nav>
</header>
<main><div class="container">
  <div class="section"></div>
<div class="stepwizard col-md-offset-3 row">
    <div class="stepwizard-row setup-panel col s12">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
      
      </div>
      <?php
        for ($i=2; $i <= 30; $i++) { 
           echo '<div class="stepwizard-step">
        <a href="#step-'.$i.'" type="button" class="btn btn-default btn-circle" disabled="disabled">'.$i.'</a>
        </div>';
         } 
      ?>
<div class="stepwizard-step">
        <a href="#step-31" type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="material-icons">check</i></a>
        
      </div>
    </div>
  </div>
  
  <form role="form" action="two.php" method="post">
    <?php 
      for ($i=1; $i <=30 ; $i++) { 
        echo '<div class="row setup-content" id="step-'.$i.'">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h5>1.Tell me about how you worked effectively under pressure.</h5>
       
          <div required="required" class="form-group">
            <p>
          <input name="group1" class="with-gap" type="radio" id="test1" />
          <label for="test1">Strongly agree</label>
        </p>
        <p>
          <input class="with-gap" name="group1" type="radio" id="test2" />
          <label for="test2">Agree</label>
        </p>
        <p>
          <input class="with-gap" name="group1" type="radio" id="test3"  />
          <label for="test3">Somewhat agree/disagree</label>
        </p>
        <p>
          <input name="group1" type="radio" class="with-gap" id="test4" />
          <label for="test4">Disagree</label>
        </p>
         <p>
          <input name="group1" type="radio" class="with-gap" id="test4" />
          <label for="test4">Strongly disagree</label>
        </p>
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
        </div>
      </div>
    </div>';
      }
    ?>
    <div class="row setup-content" id="step-31">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h5>Thanks For Giving Test. Please Submit it for reaching to the Next Level! </h5>
          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
          <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
     <script type="text/javascript">
            $('input').prop('checked', false);
            $('form').submit(function() {
    if ($('input:checkbox', this).is(':checked') &&
        $('input:radio', this).is(':checked')) {
        // everything's fine...
    } else {
        alert('Please select something!');
        return false;
    }
});
          </script>
  
</div>
</main>
</div>
</body>
</html>