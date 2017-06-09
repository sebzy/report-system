<!-- php code  to register the client and insert the data into the database -->

<?php $con = mysql_connect("localhost","root", ""); 


if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("smart_security", $con);

        // echo $_POST['timestamp1'];
        
       $client_name = $_POST['client_name'];

        $email = $_POST['email'];

     


  $result2 = "INSERT INTO report_table (client_name,  email) VALUES ('".$client_name."', '".$email."' )";


  $result2 = mysql_query( $result2);



// php code to work on the multiple notes inputs
    
foreach ($_POST['location'] AS $location) {

  $location = mysql_real_escape_string($location);




  $result2 = "INSERT INTO location_table (client_name, email ,location) VALUES ('".$client_name."','".$email."','".$location."' )";


  $result2 = mysql_query( $result2);

}


      mysql_close($con);  


        header("Location:success.php");

    ?>