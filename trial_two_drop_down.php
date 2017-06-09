<?php
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************

require 'config.php';  // Database connection
//////// End of connecting to database ////////
?>

<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Multiple drop down list box from plus2net</title>
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.client_name.options[form.client_name.options.selectedIndex].value;
self.location='trial_two_drop_down.php?client_name=' + val ;
}

</script>
</head>

<body>
<?Php

require 'config.php';

@$cat=$_GET['client_name']; // Use this line or below line if register_global is off
// if(strlen($cat) > 0 and !is_numeric($cat)){ // to check if $cat is numeric data or not. 
// echo "Data Error";
// exit;

//echo $cat;
//}



///////// Getting the data from Mysql table for first list box//////////

$quer2="SELECT DISTINCT client_name FROM report_table"; 

 // End of query for first list box////////////

/////// for second drop down list we will check if category is selected else we will display all the subcategory///// 


if(isset($cat) and strlen($cat) > 0){
$quer="SELECT DISTINCT location FROM location_table where client_name = '". $cat."' "; 
}

// else{$quer="SELECT DISTINCT location FROM location_table "; } 
////////// end of query for second subcategory drop down list box ///////////////////////////

echo "<form method = 'post' name=f1 action='trial_two_drop_down.php'>";
/// Add your form processing page address to action in above line. Example  action=dd-check.php////
//////////        Starting of first drop downlist /////////

echo "<select name='client_name' onchange=\"reload(this.form)\"><option value=''>Select one</option>";
foreach ($dbo->query($quer2) as $noticia2) {
if($noticia2['client_name']==@$cat){echo "<option selected value='$noticia2[client_name]'>$noticia2[client_name]</option>"."<BR>";}
else{echo  "<option value='$noticia2[client_name]'>$noticia2[client_name]</option>";}
}
echo "</select>";
//////////////////  This will end the first drop down list ///////////


//////////        Starting of second drop downlist /////////

echo "<select name='location'><option value=''>Select one</option>";

foreach ($dbo->query($quer) as $noticia) {

echo  "<option value='$noticia[location]'>$noticia[location]</option>";

}
echo "</select>";

//////////////////  This will end the second drop down list ///////////

//// Add your other form fields as needed here/////

echo "<input type=submit value=Submit>";

echo "</form>";

?>

<br><br>
<a href=dd.php>Reset and start again</a>

<br><br>
<center><a href='http://www.plus2net.com' rel="nofollow">PHP SQL HTML free tutorials and scripts</a></center> 
</body>

</html>
