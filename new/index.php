<?php
include "conf.php";
include "functions.php";
if (login()) {
  header("location:dashboard.php");
  die();
}
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $user=$_POST['email'];
    $pass=$_POST['password'];
    $query = mysqli_query($dataBase['connection'], "SELECT * from Client_Users where email='$user'");
if (mysqli_num_rows($query)==1) {
  $query=mysqli_fetch_array($query);
  if ($pass==$query[5]) {
    $_SESSION['uid']=$user;
    header("location:./dashboard.php");
    exit(); 
  }
  else {
    echo "Pass does not match";
  }
}
else {
  echo "Email not found";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MindScript Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  </style>
  
<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBffQLFg-cRQItcrvQARwEjbZUUWIroYv8",
    authDomain: "mindscript-dit.firebaseapp.com",
    databaseURL: "https://mindscript-dit.firebaseio.com",
    projectId: "mindscript-dit",
    storageBucket: "mindscript-dit.appspot.com",
    messagingSenderId: "805788809733"
  };
  firebase.initializeApp(config);
</script>
</head>

<body>
  
  <div class="container" style="height: -webkit-fill-available;background-image: url(https://i.imgur.com/zy85SqV.gif);width:  -webkit-fill-available;margin-right: 0px;margin-left: 0px;">
    <main>
    <center>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; 
    background-image: url(https://i.imgur.com/zy85SqV.gif);
    display: inline-block;
    border-radius: 25px;
    padding: 40px 48px 20px 48px;">

          <form class="col s12" method="post" action="index.php">
            <div class="row">
              <div class="col s12">
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input class="validate invalid" type="email" name="email" id="email" style="color:white;">
                <label for="email" class="active">Enter your email</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input class="validate valid" type="password" name="password" id="password" style="color:white;">
                <label for="password" class="active">Enter your password</label>
              </div>
              <label style="float: right;">
                <a class="pink-text" href="#!"><b>Forgot Password?</b></a>
              </label>
            </div>

            <br>
            <center>
              <div class="row">
                <button type="submit" class="col s12 btn btn-large waves-effect indigo">Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="signup.php">Create account</a>
    </center>

    
    
  </main>
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>


<div class="hiddendiv common"></div></body></html>