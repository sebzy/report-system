<?php  
session_start();//session starts here  
  
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="shortcut icon" href="">

    <title>SMART SECURITY</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->


<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBV1uH53gtOGYYDOeKWsBX0ibkn4qMQAJs",
    authDomain: "authentication-7b709.firebaseapp.com",
    databaseURL: "https://authentication-7b709.firebaseio.com",
    projectId: "authentication-7b709",
    storageBucket: "authentication-7b709.appspot.com",
    messagingSenderId: "311826117556"
  };
  firebase.initializeApp(config);




  function powerx(){
         var email = document.getElementById('emailx').value;
        var password = document.getElementById('pwdx').value;
  // Initialize Firebase
   console.log('Email '+email+' is with password '+ password);
         
firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // ...
});







        }









</script>
</head>

  <body >

    <div class="container">

    <!--   <form class="login-form" action="login2.php">      -->   
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="email" class="form-control" placeholder="email" id = "emailx" autofocus>
            </div><BR><BR>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="password"  id = "pwdx"  >
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>

    <button class="btn btn-primary btn-lg btn-block" type="submit" value="login" name="login" onclick="powerx()" >Sign up</button>
           
        
        </div>

      </form>
    <div class="text-right">
            <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
           <!--      <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </div>
    </div>
 

  </body>
</html>
