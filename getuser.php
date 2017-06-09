<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid rgb(255, 255, 255);
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php


//$s = 'kla';

$con = mysql_connect("localhost","root", ""); 


if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("smart_security", $con);


  // $q = intval($_GET['q']);

  // $q = "amos";



$sql="SELECT * FROM report_table WHERE client_name =  '".$q."'  ";


// echo $q;
 
 $result = mysql_query($sql);

echo "</table>";

while($row = mysql_fetch_array($result))
  
  {
  
  echo "<tr>";

   echo "<td>" . $row['client_id'] . "</td></br>";
  
  echo "<td>" . $row['location'] . "</td></br>";

  echo "<td>" . $row['email'] . "</td></br>";

  echo "</tr>";
  
  }

echo "</table>";

mysql_close($con);
?>
</body>
</html>