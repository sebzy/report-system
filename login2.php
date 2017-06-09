 <?php

$con = mysql_connect("localhost","root", ""); 


if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("smart_security", $con);
  
  
if(isset($_POST['login']))  
{  
    $user_email = $_POST['email'];  
    $user_pass = $_POST['pass'];  
  
$check_user = " SELECT * FROM users_table WHERE user_email= '".$user_email."' AND user_pass='".$user_pass."' ";  
  
    $run = mysql_query($check_user);  
  
    if(mysql_num_rows($run))  
    {  
        echo "<script>window.open('Welcome.php','_self')</script>";  
  
        $_SESSION['email'] = $user_email;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  