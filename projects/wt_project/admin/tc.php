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
<html lang="kn">
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
table, td, tr{
   
  border: 1px solid black;
  border-collapse: collapse;
      width: 50%; 
    font-size: 12.0px;
}
tr{
  width: 50%;   
}
@import url(http://fonts.googleapis.com/earlyaccess/notosanskannada.css);
body { font-family: "Noto Sans Kannada", sans-serif; font-size: 15.0px; line-height: 1.11em; }
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
   <div class="book">
    <div class="page">
     <table style="width:100%">    
    
    <h5><CENTER>EDUCATION DEPARTMENT KARNATAKA STATE<br> TRANSFER CERTIFICATE<br> (FOR PRIMARY / HIGHER / SECONDARY / MULTI-PURPOSE SCHOOL)</CENTER></h5>
    <H5 align = right>No : (phP)<br> Date : (php)</H5>
   
        <tr>
            <td>1. Name of the School   &nbsp;&nbsp;&nbsp; ಶಾಲೆಯ ಹೆಸರು</td>
        <td><center>ALVA'S ENGLISH MEDIUM HIGH SCHOOL<br> Vivekananda Nagara, Sampige Post <br> Puttige - 574227, Moodbidri, D.K.</center></td>
        </tr>
        <tr>
        <td >2. Admission No. &nbsp;&nbsp;&nbsp; ಪ್ರವೇಶ ಸಂಖ್ಯೆ</td>
        <td><center><?php echo htmlentities($row['Adnum']);?></center></td>
        </tr>
         <tr>
        <td >3. Cumulative Record No. &nbsp;&nbsp;&nbsp;
            ಸಂಚಿತ ದಾಖಲೆ ಸಂಖ್ಯೆ</td>
        <td><center>php</center></td>
        </tr>
        <tr>
        <td >4. Name of the pupil in full &nbsp;&nbsp;&nbsp;
            ವಿದ್ಯಾರ್ಥಯ ಪೂರ್ಣ ಹೆಸರು</td>
        <td><center><?php echo htmlentities($row['Studentname']);?></center></td>
        </tr>
        <tr>
        <td>5. Sex    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       6. Nationality<br>&nbsp;&nbsp;&nbsp; ಲಿಂಗ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         ರಾಷ್ಟ್ರೀಯತೆ
       
        <td>7. Religion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8. Caste  <br>&nbsp;&nbsp;&nbsp;
  
         ಧರ್ಮ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ಜಾತಿ      </td>
        </tr>
         <tr>
        <td >9. Name of the Father. &nbsp;&nbsp;&nbsp;
ತಂದೆಯ ಹೆಸರು</td>
        <td><center>php</center></td>
        </tr>
         <tr>
        <td >9. Name of the Mother.&nbsp;&nbsp;&nbsp;ತಾಯಿಯ ಹೆಸರು
</td>
        <td><center>php</center></td>
        </tr>
        <tr>
        <td>11. Whether the candidate belongs to Schedule Caste or Schedule tribe? &nbsp;&nbsp;&nbsp; 
ವಿದ್ಯಾರ್ಥಿಯು ಪರಿಶಿಷ್ಟ ಜಾತಿ ಅಥವಾ ಪರಿಶಿಷ್ಟ ವರ್ಗಕ್ಕೆ ಸೇರಿದವ ನಾಗಿದ್ದಾನೆಯೇ        </td>
        <td>12. Whether qualified for promotion to a higher standard?&nbsp;&nbsp;&nbsp; ಮುಂದಿನ ತರಗತಿಗೆ ಉತ್ತೀರ್ಣ ಗೊಳಿಸಲು ಅರ್ಹನಾಗಿದ್ದಾನೆಯೇ              php </td>
        </tr>
        <tr>
        <td>13. Date of birth (in figures and words) &nbsp;&nbsp;&nbsp; ಜನ್ಮ ದಿನಾಂಕ (ಅಕ್ಷರದಲ್ಲಿ ಮತ್ತು ಅಂಕಿಗಳಲ್ಲಿ)     php</td>
        <td>14. Place&nbsp;&nbsp;&nbsp; ಜನ್ಮಸ್ಥಳ <br> &nbsp;&nbsp; ತಾಲೂಕು  <br>&nbsp;&nbsp;
ಜಿಲ್ಲೆ     </td>
        </tr>
        <tr>
        <td >15. Student in which the pupil was reading at the time of leaving the school(in words) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   ಶಾಲೆಯನ್ನು ಬಿಡುವಾಗ ವಿದ್ಯಾರ್ಥಿಯು ಓದುತ್ತಿದ್ದ ದರ್ಜೆ : ತರಗತಿ </td>
        <td><center>php</center></td>
        </tr>
        <tr >
        <td  rowspan="2">16. In the case of pupil of Higher Standards, &nbsp;&nbsp;&nbsp;&nbsp; ಪ್ರೌಢ ತರಗತಿಯ ವಿದ್ಯಾರ್ಥಿಗಳ ವಿಷಯದಲ್ಲಿ <br>  a) Languages Studied  &nbsp;&nbsp;ಅಧ್ಯಯನ ಮಾಡಿದ ಭಾಷೆ <br> b) Elective Studied  &nbsp;&nbsp; ಅಧ್ಯಯನ ಮಾಡಿದ ಐಚ್ಛಿಕ ವಿಷಯಗಳು </td>
            <td>21. Scholarship if any (nature and period to be specified) &nbsp;&nbsp;&nbsp;  ವಿದ್ಯಾರ್ಥಿವೇತನ ಯಾವುದಾದರೂ ಇದ್ದಲ್ಲಿ (ಸ್ವರೂಪ ಮತ್ತು ಅವಧಿಯನ್ನು ನಿರ್ದಿಷ್ಟಪಡಿಸಿತಕ್ಕದ್ದು)</td>
        </tr>
        <tr>
             <td>22. Whether medically examined or not  &nbsp;&nbsp;&nbsp; ವೈದ್ಯಕೀಯ ಪರೀಕ್ಷೆ ಮಾಡಲಾಗಿದೆಯೇ ಇಲ್ಲವೇ?</td>
                </tr>
         <tr>
       <td >17. Medium of instruction  &nbsp;&nbsp;&nbsp; ಬೋಧನಾ ಮಾಧ್ಯಮ</td>
        
        <td >23. Date of pupils last attendance at the school &nbsp;&nbsp;&nbsp;  ಶಾಲೆಗೆ ವಿದ್ಯಾರ್ಥಿಯು ಕಡೆಯ ಬಾರಿ ಹಾಜರಿದ್ದ ದಿನಾಂಕ</td>
        
        </tr>
        <tr >
        <td rowspan="2" >18. Date of admission or promotion to the class or standard&nbsp;&nbsp;&nbsp;  ಆ ವರ್ಗಕ್ಕೆ ಅಥವಾ ತರಗತಿಗೆ ಪ್ರವೇಶ ಪಡೆದಿರುವ ಪಡೆದ ಅಥವಾ ಬಡ್ತಿ ಪಡೆದ ದಿನಾಂಕ</td>
       
        <td >24. Date on which the application for the Transfer Certificate was recieved &nbsp;&nbsp;&nbsp;    ವರ್ಗಾವಣೆ ಪ್ರಮಾಣ ಪತ್ರಕ್ಕಾಗಿ ಅರ್ಜಿಯನ್ನು ಸ್ವೀಕರಿಸಿದ ದಿನಾಂಕ</td>
       
        </tr>
        <tr>
            <td >25. Date of issue of the Transfer Certificate    &nbsp;&nbsp;&nbsp;ವರ್ಗಾವಣೆ ಪ್ರಮಾಣಪತ್ರ ನೀಡಿದ ದಿನಾಂಕ</td>
        </tr>
          <tr>
        <td >19. Whether the pupil had paid all the fees due to the school?  &nbsp;&nbsp;&nbsp; ಶಾಲೆಗೆ ಬಾಕಿಯಿರುವ 
ಎಲ್ಲಾ ಶುಲ್ಕಗಳನ್ನು ವಿದ್ಯಾರ್ಥಿಯು ಪಾವತಿ ಮಾಡಿದ್ದಾನೆಯೇ?</td>
        <td >26. Number of school days up to date of leaving &nbsp;&nbsp;&nbsp;ಶಾಲೆ ಬಿಟ್ಟ ದಿನಾಂಕದವರೆಗೆ ಶಾಲೆಯ ದಿನಗಳ ಸಂಖ್ಯೆ </td>
        
        </tr>
       
        <tr>
        <td  rowspan="2" >20. Fee concessions, if any (nature and period to be specified)&nbsp;&nbsp;&nbsp; ಶುಲ್ಕ ವಿನಾಯತಿ ಯಾವುದಾದರೂ ಇದ್ದಲ್ಲಿ (ಸ್ವರೂಪ ಮತ್ತು ಅವಧಿಯನ್ನು ನಿರ್ದಿಷ್ಟಪಡಿಸಿತಕ್ಕದ್ದು) </td>
       
        <td >27. Number of school days the pupil attended  &nbsp;&nbsp;&nbsp; ಶಾಲೆಯು ಹಾಜರಾಗಿದ್ದ ಶಾಲೆಯ ದಿನಗಳ ಸಂಖ್ಯೆ</td>
        
        </tr>
        <tr>
        <td >28. Character and conduct &nbsp;&nbsp;&nbsp; ಶೀಲ ಮತ್ತು ಚಾರಿತ್ರ್ಯ       </td>
        </tr>
        </table>
                 
        
        <h6><left>School Dise Number : php</left>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                                          <right>Signature of the Head of the Institution</right></h6><h6>Student STS Id Number :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ಸಂಸ್ಥೆಯ ಮುಖ್ಯೋಪಾಧ್ಯಾಯರ ಸಹಿ</h6>
        </div>
    </div>
     <?php } ?>     
                                </div></div>

	                                    
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