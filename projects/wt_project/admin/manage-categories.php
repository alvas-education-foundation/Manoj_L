<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{


?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Alvas | Manage Student</title>
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
        .help-box {
  color: rgba(255, 255, 255, 0.5);
  padding: 18px;
  margin: 14px;
  border: 2px solid rgba(255, 255, 255, 0.2);
  border-radius: 5px;
  font-size: 12px;
}</style>
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
<?php include('includes/topheader.php');?>

            <!-- ========== Left Sidebar Start ========== -->
<?php include('includes/leftsidebar.php');?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Manage Student Details</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Student </a>
                                        </li>
                                        <li class="active">
                                           Manage student
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


<div class="row">
<div class="col-sm-6">  
 
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<?php if($delmsg){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($delmsg);?></div>
<?php } ?>


</div>
 

                                    <div class="row">
										<div class="col-md-12">
											<div class="demo-box m-t-20">                                
                                 
<div class="m-b-30">
<a href="add-category.php">
<button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline" ></i></button><br><br><br>
</a>
<label>Search</label>
    <i class="fa fa-search" style="color: blue">
 <input type="text" id="myInput2" onkeyup="myFunction2()" ></i>
</div>



												<div class="table-responsive">
                                                    <table id="table" class="table m-0 table-colored-bordered table-bordered-primary">
                                                        <thead>
                                                           <tr>
                                                <th>Sl NO.</th>
                                                <th>Admission NO.</th>
											     <th>Student Name</th>
                                                <th>Class</th>
                                                <th>Section</th>
                                                <th>Gender</th>
											 <th>Date of Birth</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                                        </thead>
                                                        <tbody>
<?php 
$query=mysqli_query($con,"SELECT  * FROM student_application");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                                                         
 <tr>
<th scope="row"><?php echo htmlentities($cnt);?></th>
<td><?php echo htmlentities($row['Adnum']);?></td>
<td><?php echo htmlentities($row['Studentname']);?></td>
<td><?php echo htmlentities($row['class']);?></td>
<td><?php echo htmlentities($row['Section']);?></td>
<td><?php echo htmlentities($row['Gender']);?></td>
<td><?php echo htmlentities($row['Dob']);?></td>
<td><a href="edit-category.php?Adnum=<?php echo htmlentities($row['Adnum']);?>"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a> 
	&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="del-student.php?Adnum=<?php echo htmlentities($row['Adnum']);?>"> <i class="fa fa-trash-o" style="color: #f05050"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="generate-tc.php?Adnum=<?php echo htmlentities($row['Adnum']);?>"> <i class="fa fa-trash-o" style="color: #f05050"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="view-student.php?Adnum=<?php echo htmlentities($row['Adnum']);?>"> <i class="fa fa-book" style="color: blue"></i></a></td>
</tr>
<?php
$cnt++;
 } ?>
</tbody>
                                                  
                                                    </table>
                                                </div>




											</div>

										</div>

							
									</div>
                                    <!--- end row -->
                    </div> <!-- container -->

                </div> <!-- content -->
<?php include('includes/footer.php');?>
            </div>

                        </div></div>
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
            <script src="assets/js/jquery.app.js"></script></div>
<script>
    
    
     function myFunction2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        txtValue = tr[i].textContent || tr[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[0].style.display="";
        tr[i].style.display = "";
      } else {
          tr[0].style.display="";
        tr[i].style.display = "none";
          
      }
    }       
  }

        </script>
    </body>
</html>
<?php } ?>