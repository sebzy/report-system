 <?php



$con = mysql_connect("localhost","root", ""); 


if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }



mysql_select_db("smart_security", $con);

        // asignging the values to teh variables

        $client_namex = $_POST['client_name'];
        
        $timestamp1 = $_POST['timestamp1'];

        $report_date = $_POST['report_date'];

        $location = $_POST['location'];




// php code to work on the multiple images
            

  if(isset($_FILES['files'])){ 
    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name){
        $target="upload/";
        $target=$target.$_FILES['files']['name'][$key];
            if(move_uploaded_file($tmp_name, $target)){
           

                // inserting the multiple images in to the database

  $result1 = "INSERT INTO  image_table (image_date, timestamp1,  client_name, image,location ) VALUES ('".$report_date."','".$timestamp1."','".$client_namex."','".$target."','".$location."' )";


if (!mysql_query($result1,$con))
  {
  die('Error: ' . mysql_error());
  }

  
         }
       }
     }


// php code to work on the multiple notes inputs
    
foreach ($_POST['notes'] AS $notes) {

  $notes = mysql_real_escape_string($notes);



  //php code to insert the value in the database
  $result4 = "INSERT INTO notes_table ( notes_date, timestamp1,  client_name, notes, location) VALUES ('".$report_date."','".$timestamp1."','".$client_namex."', '".$notes."', '".$location."')";
  // $result = mysql_query( $result4);


if (!mysql_query($result4,$con))
  {
  die('Error: ' . mysql_error());
  }

 }

mysql_close($con);


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

    <title>Smart security</title>

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
            <a href="index.html" class="logo">Smart<span class="lite">Security</span></a>
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
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Design PSD </div>
                                        <div class="percent">90%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">
                                            Project 1
                                        </div>
                                        <div class="percent">30%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Digital Marketing</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Logo Designing</div>
                                        <div class="percent">78%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            <span class="sr-only">78% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">50%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
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
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
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
                  </li>
                  <li> 
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

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row">
                <div class="col-lg-12">
                 <!--    <h3 class="page-header"><i class="fa fa-table"></i> Table</h3> -->
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                      <!--   <li><i class="fa fa-table"></i>Table</li> -->
                        <li><i class="fa fa-th-list"></i><b>SMART SECURITY REPORTS</b></li>
                    </ol>
                </div>
            </div>
        


              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              CLIENT DETAILS
                          </header>
                          <div class="table-responsive">


                            <table class="table">

                            <?php
          
$con = mysql_connect("localhost","root", ""); 


if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("smart_security", $con);


           // selecting the client details from the database
                            

    $query = "SELECT * FROM report_table WHERE client_name = '".$client_namex."' ";

    $results = mysql_query($query);


        echo '
            <thead>
            <tr>
            <th>#</th>
            <th>Client ID</th>
            <th><i class="icon_profile"></i> Client name</th>
            <th><i class="icon_mail_alt"></i>Email </th>
            </tr>
            </thead>
             ';


     while      ($row = mysql_fetch_array($results)) {
                       
        echo ' <tbody>
                <tr>
                <td>1</td>
                <td>'.$row['client_id'].'</td>
                <td>'.$row['client_name'].'</td>
                <td>'.$row['email'].'</td>
                </tr>
                </tbody>

            '; } ?>

                        </table>
                    </div>
            </section>
        </div>
    </div>

</br><div style ="float:center;"><h5><b>CLIENT REPORT DETAILS</b></h5></div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              report details
                          </header>
                          <div class="table-responsive">


                            <table class="table">
                            <?php


                            // php code to collect the client details from the database
          
$con = mysql_connect("localhost","root", ""); 


if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("smart_security", $con);


//use of the inner joins to qeury both the images and the notes from the database

  $query = " SELECT  image_table.image, notes_table.notes ,notes_table.notes_date, notes_table.timestamp1 ,notes_table.location ,notes_table.notes_id
FROM image_table  
INNER JOIN notes_table  
ON image_table.images_id = notes_table.notes_id 

WHERE image_table.timestamp1 = '".$timestamp1."' 
             ";

$results = mysql_query($query);

        echo '

         <thead>
         <tr>
        <th>Report ID</th>
        <th><i class="icon_cogs"></i>Comments</th>
        <th>Screenshot</th> 
        <th>Timestamp</th>
        <th>Date of incidence</th>
        <th><i class="icon_pin_alt"></i> Location</th>
        </tr>
        </thead> ';


     while      ($row = mysql_fetch_array($results)) {
                            
         echo ' <tbody>
                <tr>
                <td>'.$row['notes_id'].'</td>
                <td>'.$row['notes'].'</td>
                <td><img src="'.$row['image'].'"   style="float:center;   height:400px; width: 500px;"></td>
                <td>'.$row['timestamp1'].'</td>
                <td>'.$row['notes_date'].'</td>
                <td>'.$row['location'].'</td>
                </tr>
                </tbody>

                 '; } ?>

                        </table>

                          
                           </div>
                     </section>
                   </div>
             </div>
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
                <a href="https:">Smart security</a> <a href="https:///"></a>
            </div>
        </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>


