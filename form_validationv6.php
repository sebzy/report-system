<?php

require 'config.php'; 

//  Database connection
// End of connecting to database 

require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM report_table";
$results = $db_handle->runQuery($query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title></title>
    <META NAME="DESCRIPTION" CONTENT="">
<META NAME="KEYWORDS" CONTENT="">


    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- the js script to work on the automatic drop down list usingthe jquery-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>


// the jquery for automatic dropdown
function getState(val) {
  $.ajax({
  type: "POST",
  url: "get_state.php",
  data:'client_name='+val,
  success: function(data){
    $("#location").html(data);
  }
  });
}

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>
   <!--    end of the script -->

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">SMART <span class="lite">SECURITY </span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    
                    
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                 
                    
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                           
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                          
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="">
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li> <li class="">
                      <a class="" href="form_validationv4.php">
                          <i class="icon_genius"></i>
                          <span>Make a report</span>
                      </a>
                  </li>
                  
                  <li> 
                       <a class="" href="All_reports.php">
                          <i class="icon_piechart"></i>
                          <span>Show reports made</span> 
                      </a>
                  </li>
                   <li>
                      <a class="" href="register.php">
                          <i class="icon_profile"></i>
                          <span>Register client</span>
                      </a>
                  </li>
                   
               
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row">
                <div class="col-lg-12"     >
        <!--<div id="txtHint" style="width : 100px;background-color: #cccc33;">Message area</div>   -->
                    <!-- <h3 class="page-header"   ><i class="fa fa fa-bars"></i> Pages</h3> -->
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                       <!--  <li><i class="fa fa-bars"></i>Pages</li>
                        <li><i class="fa fa-square-o"></i>Pages</li> -->
                    </ol>
                </div>
            </div>
              <!-- page start-->
                 <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                         <!--  <header class="panel-heading">
                          
                              
                          </header> -->
                          
                          <div class="panel-body">
                              <div class="form">
                <form class="form-validate form-horizontal" method="post" action="uploadv3.php" enctype="multipart/form-data">
                    <input type=hidden name=st value= 0>


                                      <div class="form-group ">

                             <label for="cname" class="control-label col-lg-2" >Client<span class="required">*</span></label>
                                          <div class="col-lg-10">


                                      <!--  the new script for the selection tag -->
<?Php
// connection to the database
require_once("dbcontroller.php");
$db_handle = new DBController();

// the begininng of the selection tag

echo '<br><select name="client_name" id="client_name"  onChange="getState(this.value);"  style="width:200px;" required>
<option value="">Select Client</option>';

// the for each loop for the automatic selection of the values from the database

foreach($results as $client) {

// the option tag that contains the actual displayed values

echo ' <option value='. $client["client_name"].'> '.$client["client_name"]. '</option>  ';

}


  echo "</select>";  

//////////////////  This will end the first drop down list ///////////

  echo ' &nbsp&nbsp&nbsp&nbsp Location <select name="location" id="location"  style="width:200px;" required> ';

// the second selection tag that useus jqeury to display the location

echo  '<option value=""> Select location </option>';


echo "</select>";

?>

                            
         </div>
    </div>               
                <!--   end of the selection tag script --> 



                       <div class="form-group ">
                          <label for="curl" class="control-label col-lg-2">Date of Occurence</label>
                              <div class="col-lg-10">
                                  <input class="form-control " id="report_date" type = "date" name="report_date" required/>
                                    </div>
                                      </div>

                                                                
                                 <div class="form-group " >    
                   <div   style="float:center;margin: left;margin-left: 194px;">
                                         <table>
                                           <tr><td>
                    <!--   the div that is containing the image  -->

           <div style=" height: 300px;width: 375px;  padding-top: 10px;  padding-bottom: 10px;  float:center; margin: auto; border: 3px solid #008CBA;" >

                                     <label for="file"></label>
                                     <H5 style="text-align: center;">UPLOAD SCREENSHOT</H5>
                                   <img id="target" src="upload/img.jpg"  alt ="your image" height="209px" width="369px"/>
                                    <input id="src" type="file" name="files[]"   multiple="multiple" onchange="previewFiles()"required/>
                                  
                                       
                                     </div>

                                   <!--   end of the div containing the image -->
                                           </td>

                                           <td>

                                          <label for="ccomment" class="control-label col-lg-2">Notes</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " id="notes" name="notes[]" multiple ="multiple" style="width: 325px; height: 67px;" required></textarea>
                                          </div>
                                    
                                             
                                           </td></tr>
                                           </table>
                                           </div>
                                           </div>


                                                  <div id="education_fields"></div>
                                                  </div>
                                                <!--   </div> -->
                                            <!-- and it ends here -->

                    <input type="hidden" id="timestamp1" name="timestamp1">

                        <!-- script for capturing the time stamp in the bowser-->
                                  <!--  start of the script -->

                                  <script type="text/javascript">
                        document.getElementById('timestamp1').value = Date();
                                          </script>

                                <!-- end of the script -->
                  <!-- the button for creating more form fields below  -->             

                              
                                                      <div class="input-group-btn">
      </br></br><button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>                                                  

                                                      </div>
        
                                             

                                <!--  the button div ends here -->


                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit"  value="Post">Submit</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>

                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <a href=""></a>  <a href=""></a>
            </div>
        </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- nice scroll -->

    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
     <script src="js/dropdown.js" type="text/javascript"></script>

    <!--custome script for all page-->

    <script src="js/scripts.js" type="text/javascript"></script>
   
    <!-- upload image javascript  -->
    
     <script src="upload_image.js" type="text/javascript"></script> 

    <!--  dynamic form fields javascript -->

    <script src="dynamic_form_fieldz.js" type="text/javascript"></script>

  </body>
</html>
