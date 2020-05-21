<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Alvas | Edit Student Details</title>

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
        
 
        side{
           
            width: 200px;
        }
input[type=file]{
padding:10px;
background: transparent;}
    
    </style>
    </head>


    <body class="fixed-left">
        <div id="wrapper">

 <?php include('includes/topheader.php');?>

           <?php include('includes/leftsidebar.php');?>


            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">View Student Details</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Student </a>
                                        </li>
                                        <li class="active">
                                            View Student
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
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
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
                        
                        <div class="col-md-12"> 
                            <label><font size= 5>Student Name: &nbsp;&nbsp;<?php echo htmlentities($row['Studentname']);?><br><br></font></label>
                        </div>
			            <div class="col-md-4"> 
                            <label><font size= 3>Application Number : &nbsp;&nbsp;<?php echo htmlentities($row['Apnum']);?><br><br></font></label>
                        </div>
                         <div class="col-md-4">     
                        <label><font size= 3>Admission Number : &nbsp;&nbsp;<?php echo htmlentities($row['Adnum']);?><br><br></font></label>
                        </div>
                        <div class="col-md-4">     
                        <label><font size= 3>STS Number:  &nbsp;&nbsp;<?php echo htmlentities($row['Stsnum']);?><br><br></font></label>
                        </div>
                        <div class="col-md-4"> 
                            <label><font size= 3>Entrance Test Marks :&nbsp;&nbsp;<?php echo htmlentities($row['Enttest']);?><br><br></font></label>
                        </div>
                         <div class="col-md-4">     
                        <label><font size= 3>Class: &nbsp;&nbsp;<?php echo htmlentities($row['class']);?><br><br></font></label>
                        </div>
                        <div class="col-md-4">     
                        <label><font size= 3>Section:&nbsp;&nbsp;<?php echo htmlentities($row['Section']);?><br><br></font></label>
                        </div>
                       
                   
            
                   </div></div>
            </div>        
            
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                            Personal Details
                    </div>
                    <div class="panel-body">
                        
                        <div class="col-md-4"> 
                            <label><font size= 3>Gender: &nbsp;&nbsp;<?php echo htmlentities($row['Gender']);?><br><br></font></label>
                        </div>
			            <div class="col-md-4"> 
                            <label><font size= 3>Date of Birth : &nbsp;&nbsp;<?php echo htmlentities($row['Dob']);?><br><br></font></label>
                        </div>
                        <div class="col-md-4"> 
                            <label><font size= 3>Place of Birth: &nbsp;&nbsp;<?php echo htmlentities($row['Pob']);?><br><br></font></label>
                        </div>
			            <div class="col-md-4"> 
                            <label><font size= 3>District : &nbsp;&nbsp;<?php echo htmlentities($row['Pdis']);?><br><br></font></label>
                        </div>
                        <div class="col-md-4"> 
                            <label><font size= 3>State: &nbsp;&nbsp;<?php echo htmlentities($row['Pstate']);?><br><br></font></label>
                        </div>
			            <div class="col-md-4"> 
                            <label><font size= 3>Pincode : &nbsp;&nbsp;<?php echo htmlentities($row['Ppincode']);?><br><br></font></label>
                        </div>
                        <div class="col-md-4"> 
                            <label><font size= 3>Adhaar Number: &nbsp;&nbsp;<?php echo htmlentities($row['Sadhaar']);?><br><br></font></label>
                        </div>
			            <div class="col-md-4"> 
                            <label><font size= 3>Blood Group : &nbsp;&nbsp;<?php echo htmlentities($row['Bloodgroup']);?><br><br></font></label>
                        </div>
                         <div class="col-md-4"> 
                            <label><font size= 3>Mother Tongue: &nbsp;&nbsp;<?php echo htmlentities($row['Mothertongue']);?><br><br></font></label>
                        </div>
			            <div class="col-md-4"> 
                            <label><font size= 3>Languages Known : &nbsp;&nbsp;<?php echo htmlentities($row['Langknow']);?><br><br></font></label>
                        </div>
                        <div class="col-md-4"> 
                            <label><font size= 3>Nationality: &nbsp;&nbsp;<?php echo htmlentities($row['Country']);?><br><br></font></label>
                        </div>
			            <div class="col-md-4"> 
                            <label><font size= 3>Religion : &nbsp;&nbsp;<?php echo htmlentities($row['Religion']);?><br><br></font></label>
                        </div>
                          <div class="col-md-4"> 
                            <label><font size= 3>Caste: &nbsp;&nbsp;<?php echo htmlentities($row['Caste']);?><br><br></font></label>
                        </div>
			            <div class="col-md-4"> 
                            <label><font size= 3>Category : &nbsp;&nbsp;<?php echo htmlentities($row['Category']);?><br><br></font></label>
                        </div>
                        <div class="col-md-4"> 
                            <label><font size= 3>Caste Certificate Number: &nbsp;&nbsp;<?php echo htmlentities($row['Casteno']);?><br><br></font></label>
                        </div>
			            <div class="col-md-4"> 
                            <label><font size= 3>Income Certificate Number : &nbsp;&nbsp;<?php echo htmlentities($row['Incomeno']);?><br><br></font></label>
                        </div>
                     
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Parents Details
                        </div>
                         <div class="panel-body">
                             
                               <div class="col-md-4"> 
                            <label><font size= 3>Father's Name: &nbsp;&nbsp;<?php echo htmlentities($row['Fathername']);?><br><br></font></label>
                        </div>
			            <div class="col-md-4"> 
                            <label><font size= 3>Phone Number : &nbsp;&nbsp;<?php echo htmlentities($row['Fatherphno']);?><br><br></font></label>
                        </div>
                        <div class="col-md-4"> 
                            <label><font size= 3>Education: &nbsp;&nbsp;<?php echo htmlentities($row['Fathereducation']);?><br><br></font></label>
                        </div>
			            <div class="col-md-4"> 
                            <label><font size= 3>Occupation : &nbsp;&nbsp;<?php echo htmlentities($row['Fatheroccupation']);?><br><br></font></label>
                        </div>
                    <div class="col-md-8"> 
                            <label><font size= 3>Adhaar No. : &nbsp;&nbsp;<?php echo htmlentities($row['Fatheradhar']);?><br><br></font></label>
                        </div>
                        <div class="col-md-4"> 
                            <label><font size= 3>Mother's Name: &nbsp;&nbsp;<?php echo htmlentities($row['Mothername']);?><br><br></font></label>
                        </div>
			            <div class="col-md-4"> 
                            <label><font size= 3>Phone Number : &nbsp;&nbsp;<?php echo htmlentities($row['Motherphno']);?><br><br></font></label>
                        </div>
                       <div class="col-md-4"> 
                            <label><font size= 3>Education : &nbsp;&nbsp;<?php echo htmlentities($row['Mothereducation']);?><br><br></font></label>
                        </div>
                    <div class="col-md-4"> 
                            <label><font size= 3>Occupation : &nbsp;&nbsp;<?php echo htmlentities($row['Motheroccupation']);?><br><br></font></label>
                        </div>
                        <div class="col-md-8"> 
                            <label><font size= 3>Adhaar No.: &nbsp;&nbsp;<?php echo htmlentities($row['Motheradhar']);?><br><br></font></label>
                        </div>
			            <div class="col-md-4"> 
                            <label><font size= 3>Annual Income : &nbsp;&nbsp;<?php echo htmlentities($row['Annualincome']);?><br><br></font></label>
                        </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>Number of Dependants : &nbsp;&nbsp;<?php echo htmlentities($row['Nodept']);?><br><br></font></label>
                             </div>
                             
                        </div>
                    </div>
                </div>
            
             <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Address 
                        </div>
                         <div class="panel-body">
                             <div class="col-md-4"> 
                            <label><font size= 3>Permanent Address : &nbsp;&nbsp;<?php echo htmlentities($row['PerAddress']);?><br><br></font></label>
                                 </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>District : &nbsp;&nbsp;<?php echo htmlentities($row['PerDistrict']);?><br><br></font></label>
                             </div>
                           
                        <div class="col-md-4"> 
                            <label><font size= 3>State : &nbsp;&nbsp;<?php echo htmlentities($row['PerState']);?>,&nbsp;&nbsp;<?php echo htmlentities($row['Perpincode']);?><br><br></font></label>
                        </div>
                             
                           
                             <div class="col-md-4"> 
                            <label><font size= 3>Present Address : &nbsp;&nbsp;<?php echo htmlentities($row['PreAddress']);?><br><br></font></label>
                                 </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>District : &nbsp;&nbsp;<?php echo htmlentities($row['PreDistrict']);?><br><br></font></label>
                             </div>
                           
                        <div class="col-md-4"> 
                            <label><font size= 3>State : &nbsp;&nbsp;<?php echo htmlentities($row['PreState']);?>, &nbsp;<?php echo htmlentities($row['Prepincode']);?><br><br></font></label>
                        </div>
                             
                      <div class="col-md-4"> 
                            <label><font size= 3>Guardian Name : &nbsp;&nbsp;<?php echo htmlentities($row['Guardenname']);?><br><br></font></label>
                        </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>Phone Number: &nbsp;&nbsp;<?php echo htmlentities($row['Guarphno']);?><br><br></font></label>
                             </div>
                             <div class="col-md-4"> 
                            <label><font size= 3>Adhaar No. : &nbsp;&nbsp;<?php echo htmlentities($row['Guaradhar']);?><br><br></font></label>
                        </div>
                              <div class="col-md-12"> 
                            <label><font size= 3>Address: &nbsp;&nbsp;<?php echo htmlentities($row['Guaraddress']);?><br><br></font></label>
                             </div>
                        </div>
                    </div>
                </div>
      
             <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Previous School Details
                        </div>
                         <div class="panel-body">
                              <div class="col-md-4"> 
                            <label><font size= 3>Name of the School : &nbsp;&nbsp;<?php echo htmlentities($row['Pschool']);?><br><br></font></label>
                        </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>Class: &nbsp;&nbsp;<?php echo htmlentities($row['Pclass']);?><br><br></font></label>
                             </div>
                             <div class="col-md-4"> 
                            <label><font size= 3>Whether qualified for promotion : &nbsp;&nbsp;<?php echo htmlentities($row['Promotion']);?><br><br></font></label>
                        </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>Whether the pupil has produced the transfer / School Leaving Certificate: &nbsp;&nbsp;<?php echo htmlentities($row['Tc']);?><br><br></font></label>
                             </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>Certificate No. : &nbsp;&nbsp;<?php echo htmlentities($row['Tcno']);?><br><br></font></label>
                        </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>Date: &nbsp;&nbsp;<?php echo htmlentities($row['Tcdate']);?><br><br></font></label>
                             </div>
                          
                        </div>
                    </div>
                </div>
             <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Bank Details 
                        </div>
                         <div class="panel-body">
                               <div class="col-md-4"> 
                            <label><font size= 3>Name of the Bank: &nbsp;&nbsp;<?php echo htmlentities($row['Bankname']);?><br><br></font></label>
                             </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>Branch : &nbsp;&nbsp;<?php echo htmlentities($row['Bankbranch']);?><br><br></font></label>
                        </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>IFSC Code: &nbsp;&nbsp;<?php echo htmlentities($row['Bankifsc']);?><br><br></font></label>
                             </div>
                        </div>
                 </div>
            </div>
              <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Combination Choosen 
                        </div>
                         <div class="panel-body">
                     <div class="col-md-4"> 
                            <label><font size= 3>I Language: &nbsp;&nbsp;<?php echo htmlentities($row['Lag1']);?><br><br></font></label>
                             </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>II Language : &nbsp;&nbsp;<?php echo htmlentities($row['Lag2']);?><br><br></font></label>
                        </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>III Language: &nbsp;&nbsp;<?php echo htmlentities($row['Lag3']);?><br><br></font></label>
                             </div>
                        </div>
                 </div>
            </div>
            
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                            Other Details
                    </div>
                    <div class="panel-body">
                        
                        <div class="col-md-4"> 
                            <label><font size= 3>Number of Brothers: &nbsp;&nbsp;<?php echo htmlentities($row['Nob']);?><br><br></font></label>
                             </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>Elder : &nbsp;&nbsp;<?php echo htmlentities($row['Belder']);?><br><br></font></label>
                        </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>Yonger: &nbsp;&nbsp;<?php echo htmlentities($row['Byoung']);?><br><br></font></label>
                             </div>
                        <div class="col-md-4"> 
                            <label><font size= 3>Number of Sisters: &nbsp;&nbsp;<?php echo htmlentities($row['Nos']);?><br><br></font></label>
                             </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>Elder : &nbsp;&nbsp;<?php echo htmlentities($row['Selder']);?><br><br></font></label>
                        </div>
                              <div class="col-md-4"> 
                            <label><font size= 3>Yonger: &nbsp;&nbsp;<?php echo htmlentities($row['Syoung']);?><br><br></font></label>
                             </div>
                    
                        
                                                </div>
                
                </div></div>
     <?php } ?>     
       		

	                                        </form>
                        				</div>


                        			</div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

<?php include('includes/footer.php');?>

            </div>


        </div>
        <!-- END wrapper -->



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

    </body>
</html> 