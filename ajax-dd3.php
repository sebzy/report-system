<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title></title>
<META NAME="DESCRIPTION" CONTENT="">
<META NAME="KEYWORDS" CONTENT="">
<script type="text/javascript">
function ajaxFunction(choice)
{

var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      httpxml=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }
function stateChanged() 
    {
    if(httpxml.readyState==4)
      {
//alert(httpxml.responseText);
var myObject = JSON.parse(httpxml.responseText);

for(j=document.myForm.location.options.length-1;j>=0;j--)
{
document.myForm.location.remove(j);
}

var state1=myObject.value.state1;

var optn = document.createElement("OPTION");
optn.text = 'Select State';
optn.value = '';
document.myForm.location.options.add(optn);
for (i=0;i<myObject.location.length;i++)
{
var optn = document.createElement("OPTION");
optn.text = myObject.location[i];
optn.value = myObject.location[i];
document.myForm.location.options.add(optn);

if(optn.value==state1){
var k= i+1;
document.myForm.location.options[k].selected=true;
}
} 

//////////////////////////
for(j=document.myForm.report_id.options.length-1;j>=0;j--)
{
document.myForm.report_id.remove(j);
}
var report_id1=myObject.value.report_id1;
//alert(report_id1);
for (i=0;i<myObject.report_id.length;i++)
{
var optn = document.createElement("OPTION");
optn.text = myObject.report_id[i];
optn.value = myObject.report_id[i];
document.myForm.report_id.options.add(optn);
if(optn.value==report_id1){
document.myForm.report_id.options[i].selected=true;
}

} 


///////////////////////////
document.getElementById("txtHint").style.background='#00f040';
document.getElementById("txtHint").innerHTML='done';
//setTimeout("document.getElementById('txtHint').style.display='none'",3000)
    }
    }

var url="ajax-dd3ck.php";
var client_name=myForm.client_name.value;
if(choice != 's1'){
var location=myForm.location.value;
var report_id=myForm.report_id.value;
}else{
var location='';
var report_id='';
}
url=url+"?client_name="+client_name;
url=url+"&location="+location;
url=url+"&report_id="+report_id;
url=url+"&id="+Math.random();
myForm.st.value=location;
//alert(url);
 document.getElementById("txtHint2").innerHTML=url;
httpxml.onreadystatechange=stateChanged;
httpxml.open("GET",url,true);
httpxml.send(null);
 document.getElementById("txtHint").innerHTML="Please Wait....";
document.getElementById("txtHint").style.background='#f1f1f1';
}
</script>


</head>

<body >
</head>

<body>
<div id="txtHint" style="width : 100px;background-color: #cccc33;">Message area</div>
<br><br>
<form name="myForm" action='ajax-dd3-details.php' method='post'">
<input type=hidden name=st value=0>
<table width=500>
<tr><td >
Select Client name<br><select name=client_name id='s1' onchange=ajaxFunction('s1');>
<option value=''>Select One</option>
<?Php
//require "../include/z_db1.php";
require "config.php";// connection to database

$sql="select distinct client_name from report_table ";

foreach ($dbo->query($sql) as $row) {

echo "<option value= ".$row['client_name'].">        ".$row['client_name'] ." </option>";

}

?>

</select>

</td><td ><select name=location  onchange=ajaxFunction('s2');>
<option value=''>Select One</option></select></td>
<td ><select name=report_id  onchange=ajaxFunction('s3');>
<option value=''>Select One</option></select></td>
</tr></tr>
<tr><td colspan=3><input type=submit value='Submit'></td></tr>
</form>
</table>
<br><br>
<div id="txtHint2"></div>

</body>
</html>
