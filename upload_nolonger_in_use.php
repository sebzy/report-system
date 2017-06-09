 <?php



$con = mysql_connect("localhost","root", ""); 


if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }



if(isset($_FILES['files'])){ 
    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name){
        $target="upload/";
        $target=$target.$_FILES['files']['name'][$key];
            if(move_uploaded_file($tmp_name, $target)){
                $id = mysql_insert_id($con);

                echo $target;
                mysql_query("INSERT INTO costumes (id,name) VALUES ('$id','$target')");
            }
    }
}
  

// if ((($_FILES["file"]["type"] == "image/gif")
// || ($_FILES["file"]["type"] == "image/jpeg")
// || ($_FILES["file"]["type"] == "image/pjpeg"))
// || ($_FILES["file"]["size"] < 40000))
//   {
//   if ($_FILES["file"]["error"] > 0)
//     {
//     echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
//     }
//   else
//     {
//     echo "Upload: " . $_FILES["file"]["img"] . "<br />";
//     echo "Type: " . $_FILES["file"]["type"] . "<br />";
//     echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
//     echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

//     if (file_exists("upload/" . $_FILES["file"]["img"]))
//       {
//       echo $_FILES["file"]["img"] . " already exists. ";
//       }
//     else
//       {
//       move_uploaded_file($_FILES["file"]["tmp_name"],
//       "upload/" . $_FILES["file"]["img"]);
//       echo "Stored in: " . "upload/" . $_FILES["file"]["img"];
//       }
//     }
//   }
// else
//   {
//   echo "Invalid file";
//   }


mysql_select_db("smart_security", $con);





 //  // this is for the notes
 //  if(isset($_POST["notes"]) &&is_array($_POST["notes"])){
 //   $subject1 = implode(", ", $_POST["notes"]);
 //    echo $subject1;
 //         }

 // // this is for the images
 //     if(isset($_POST["image"]) &&is_array($_POST["images"])){
 //   $subject2 = implode(", ", $_POST["image"]);
 //    echo $subject2;
         //}



// Open a new connection to the MySQL server
// $mysqli = new mysqli('host','username','password','database_name');

// //Output any connection error
// if ($mysqli->connect_error) {
//     die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
// }

$capture_field_vals1 ="";
 if(isset($_POST["notes"]) && is_array($_POST["notes"])){
     $capture_field_vals1 = implode("~", $_POST["notes"]); 
     echo $capture_field_vals1;
 }





    // $capture_field_vals2 ="";
    //  if(isset($_POST["image"]) && is_array($_POST["image"])){
    //      $capture_field_vals2 = implode(",~", $_POST["image"]); 
    //      echo $capture_field_vals2;
    //  }



$str="This is a test";
$words=explode("~",mysql_escape_string($capture_field_vals1));
$query="insert into data_table (notes) values ('".implode("'),('",array_unique($words))."')";
$result=mysql_query($query);
  


  // $dbh = new PDO("mysql:host=localhost;dbname=smart_security", $username, $password);


  //      // new PDO("mysql:host=$hostname;dbname=stickercollections",$username,$password);


  // $query = "INSERT into data_table (notes) VALUES ('".$capture_field_vals1."')";

  // // $data = $capture_field_vals1;
  // $st = $dbh->prepare($query);

  // foreach(explode(',', $capture_field_vals1) as $r) {
  //   // user array($r) for php 5.3 or lower
  //   $st->execute($r);

  //   echo "</br>".$r;
  // }



// 
  //$insert_row = "INSERT INTO data_table ( notes) VALUES  ('".$capture_field_vals1."' )";






// if (!mysql_query($query,$con))
//   {
//   die('Error: ' . mysql_error());
//   }
// echo "1 record added";







mysql_close($con);


                                        





// $sql="INSERT INTO report_table (client_name, location, report_date, notes,image) VALUES ('".$_POST['client_name']."', '".$_POST['location']."', '".$_POST['report_date']."', '".$_POST['notes']."' ,'".$_FILES["file"]["name"]."')";


// if (!mysql_query($sql,$con))
//   {
//   die('Error: ' . mysql_error());
//   }
// echo "1 record added";

// mysql_close($con);

// header('Location:report.php');
?>



