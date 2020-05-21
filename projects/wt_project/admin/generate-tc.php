<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
    $Studentname=	$_POST['Studentname'];
$Adnum=$_POST['Adnum'];

$promotohigh=	$_POST['promotohigh'];
$readleave=	$_POST['readleave'];
$medical=	$_POST['medical'];
$lastattend=	$_POST['lastattend'];
$admisiondate=	$_POST['admisiondate'];
$apptc=	$_POST['apptc'];
$issuetc=	$_POST['issuetc'];
$paidfee=	$_POST['paidfee'];
$feecoscession=	$_POST['feecoscession'];
$noschoolhave=	$_POST['noschoolhave'];
$noschoolattend=	$_POST['noschoolattend'];
$character=	$_POST['character'];
$schoolarship=	$_POST['schoolarship'];



$status=1;
$query1=mysqli_query($con,"insert into tc(promotohigh,readleave,medical,lastattend,admisiondate,apptc,issuetc,paidfee,feecoscession,noschoolhave,noschoolattend) values('$promotohigh', '$readleave', '$medical', '$lastattend', '$admisiondate', '$apptc', '$issuetc', '$paidfee', '$feecoscession','$noschoolhave', '$noschoolattend')");
$query=mysqli_query($con,"insert into tc(promotohigh,readleave,medical,lastattend,admisiondate,apptc,issuetc,paidfee,feecoscession,noschoolhave,noschoolattend,character,schoolarship) values('$promotohigh', '$readleave', '$medical', '$lastattend', '$admisiondate', '$apptc', '$issuetc', '$paidfee', '$feecoscession', '$noschoolhave', '$noschoolattend', '$character', '$schoolarship')");
if($query1)
{
$msg="Category created ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Alvas | Add Student Details</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
       
         <style>
        body{
                font-family: -webkit-body;
        }
        container{
            display: flex;
            flex-wrap: wrap-reverse;
            align-items: center;

        }
             .help-box {
  color: rgba(255, 255, 255, 0.5);
  padding: 18px;
  margin: 14px;
  border: 2px solid rgba(255, 255, 255, 0.2);
  border-radius: 5px;
  font-size: 12px;
}

        side{
           
            width: 200px;
        }
input[type=file]{
padding:10px;
background: transparent;}
    
    </style>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

<!-- Top Bar Start -->
 <?php include('includes/topheader.php');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>
 <!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Generate TC</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Student Details </a>
                                        </li>
                                        <li class="active">
                                            Add Details
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done! Details Uploaded</strong> 
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap! Something Went Wrong!!!!!!</strong></div>
<?php } ?>
</div>
</div>

<?php 
$Adnum=$_GET['Adnum'];
$query=mysqli_query($con,"Select * from  student_application where Adnum='$Adnum'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                        			<div class="row">
                        				<div class="col-md-12">
 <form class="form-horizontal" name="category" method="post">
            
            <div class="col-md-12">
                <div class="panel panel-primary">
                    
                    <div class="panel-body">
                        <div class="col-md-4">
				            <div class="form-group">
                                <label>Admission Number</label>
                                    <input type="text" name="Adnum" class="form-control" value="<?php echo htmlentities($row['Adnum']);?>">
                            </div>    
                        </div>
                        <div class="col-md-2"></div>
                         <div class="col-md-4">
							 <div class="form-group">
                                <label>Student Name</label>
                                    <input type="text" name="Studentname" class="form-control" value="<?php echo htmlentities($row['Studentname']);?>">
                            </div>         
                        </div>
                           
				        <div class="col-md-4">
							 <div class="form-group"><br>
                                <label>Whether qualified for promotion to higher school </label>
                                    <select name="promotohigh" type="text" class="form-control" value="">          
						              <option value selected ></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                            </div>         
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
							 <div class="form-group"><br>
                                <label> Student in which the pupil was reading at the time of leaving the school</label>
                                    <select name="readleave" class="form-control" value="">          
						              <option value selected ></option>
                                        <option value="Eighth">8</option>
                                        <option value="Ninth">9</option>
                                        <option value="Tenth">10</option>
                                    </select>
                            </div>      
                        </div>
                        
                     
                        
                        <div class="col-md-4">
							 <div class="form-group"><br>
                                <label> Whether medically examined or not </label>
                                   <select name="medical" class="form-control" value="">          
						              <option value selected ></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                            </div>       
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                        <div class="form-group"><br>
                            <label> Date of pupils last attendance at the school </label>
                                <input name="lastattend" type ="Date" class="form-control"  value="">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group"><br>
                                <label> Date of admission or promotion to the class or standard</label>
                                    <input name="admisiondate" type ="Date" class="form-control"  value="">
                            </div>
                        </div>
                         <div class="col-md-2"></div>
                        <div class="col-md-4">
				            <div class="form-group"><br>
                                <label>Date on which the application for the Transfer Certificate was recieved</label>
                                    <input name="apptc" type ="Date" class="form-control"  value="">
                            </div>     
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group"><br><br>
                                <label>Date of issue of the Transfer Certificate</label>
                                    <input name="issuetc" type ="Date" class="form-control"  value="">
                            </div>       
                        </div>
                           <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="form-group"><br>
                                <label>Whether the pupil had paid all the fees due to the school?</label>
                                <select name="paidfee" class="form-control" value="">          
						              <option value selected ></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><br>
                                <label> Fee concessions, if any (nature and period to be specified)</label>
                                    <input type="text" name="feecoscession" class="form-control"   value="">
                            </div>     
                        </div>
                           <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="form-group"><br><br>
                                <label>Number of school days up to date of leaving </label>
                                    <input type="text" name="noschoolhave" class="form-control"   value="">
                            </div>    
                        </div>
                      
                         <div class="col-md-4">
				            <div class="form-group"><br>
                                <label>Number of school days the pupil attended</label>
                                    <input type="text" name="noschoolattend" class="form-control" value="">
                            </div>  
                        </div>
                           <div class="col-md-2"></div>  
                        <div class="col-md-4">
                            <div class="form-group"><br>
                                <label>Character and conduct</label>
                                    <select name="character" type="text" class="form-control" value="">          
						              <option value selected ></option>
                                        <option value="Good">Good</option>
                                        <option value="Bad">Bad</option>
                                    </select>     
                            </div>
                        </div>
                      
                         <div class="col-md-4">
                            <div class="form-group"><br>
                                <label>Scholership Details(if any)</label>
                                    <input name="schoolarship" type ="text" class="form-control"  value="">
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>
            <?php } ?>
        <div class="col-md-12 col-sm-12">
            <div class="well">
                <center><input input type="submit" name="submit" value="Generate TC" class="btn btn-primary"></center>
            </div>        
        </div>			
    </form>   
                        			
                                        </div></div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

<?php include('includes/footer.php');?>

            </div>
        </div>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
       <script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        } 
    
            </script> 
    </body>
</html>
<?php } ?>