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

$img=	 $_POST['img'];
$Apnum = 	 $_POST['Apnum'];
$Adnum=	 $_POST['Adnum'];
$Stsnum=	 $_POST['Stsnum'];
$Enttest=	 $_POST['Enttest'];
$class=	 $_POST['class'];
$Section=	 $_POST['Section'];
$Studentname = 	 $_POST['Studentname'];
$Gender = 	 $_POST['Gender'];
$Dob = 	 $_POST['Dob'];
$Pob=	 $_POST['Pob'];
$Pdis=	 $_POST['Pdis'];
$Pstate=	 $_POST['Pstate'];
$Ppincode=	 $_POST['Ppincode'];
$Sadhaar=	 $_POST['Sadhaar'];
$Bloodgroup= 	 $_POST['Bloodgroup'];
$Mothertongue= 	 $_POST['Mothertongue'];
$Langknow= 	 $_POST['Langknow'];
$Country = 	 $_POST['Country'];
$Religion= 	 $_POST['Religion'];
$Caste= 	 $_POST['Caste'];
$Category= 	 $_POST['Category'];
$Casteno=	 $_POST['Casteno'];
$Incomeno=	 $_POST['Incomeno'];
	
$Fathername = 	 $_POST['Fathername'];
$Fatherphno= 	 $_POST['Fatherphno'];
$Fathereducation = 	 $_POST['Fathereducation'];
$Fatheroccupation = 	 $_POST['Fatheroccupation'];
$Fatheradhar=	 $_POST['Fatheradhar'];
$Mothername= 	 $_POST['Mothername'];
$Motherphno = 	 $_POST['Motherphno'];
$Mothereducation = 	 $_POST['Mothereducation'];
$Motheroccupation = 	 $_POST['Motheroccupation'];
$Motheradhar=	 $_POST['Motheradhar'];
$Annualincome= 	 $_POST['Annualincome'];
$Nodept= 	 $_POST['Nodept'];
$PerAddress = 	 $_POST['PerAddress'];
$PerDistrict = 	 $_POST['PerDistrict'];
$PerState = 	 $_POST['PerState'];
$Perpincode= 	 $_POST['Perpincode'];
$PreAddress = 	 $_POST['PreAddress'];
$PreDistrict = 	 $_POST['PreDistrict'];
$PreState = 	 $_POST['PreState'];
$Prepincode= 	 $_POST['Prepincode'];
$Guardenname=	 $_POST['Guardenname'];
$Guarphno=	 $_POST['Guarphno'];
$Guaradhar=	 $_POST['Guaradhar'];
$Guaraddress=	 $_POST['Guaraddress'];
	
$Pschool=	 $_POST['Pschool'];
$Pclass=	 $_POST['Pclass'];
$Promotion=	 $_POST['Promotion'];
$Tc=	 $_POST['Tc'];
$Tcno=	 $_POST['Tcno'];
$Tcdate=	 $_POST['Tcdate'];
$Bankname=	 $_POST['Bankname'];
$Bankbranch=	 $_POST['Bankbranch'];
$Bankifsc=	 $_POST['Bankifsc'];
$Lag1=	 $_POST['Lag1'];
$Lag2=	 $_POST['Lag2'];
$Lag3=	 $_POST['Lag3'];
$Nob= 	 $_POST['Nob'];
$Nos= 	 $_POST['Nos'];
$Belder= 	 $_POST['Belder'];
$Byoung= 	 $_POST['Byoung'];
$Selder= 	 $_POST['Selder'];
$Syoung= 	 $_POST['Syoung'];

$status=1;
$query=mysqli_query($con,"insert into student_application(img,Apnum,Adnum,Stsnum,Enttest,class,Section,Studentname,Gender,Dob,Pob,Pdis,Pstate,Ppincode,Sadhaar,Bloodgroup,Mothertongue,Langknow,Country,Religion,Caste,Category,Casteno,Incomeno,Fathername,Fatherphno,Fathereducation,Fatheroccupation,Fatheradhar,Mothername,Motherphno,Mothereducation,Motheroccupation,Motheradhar,Annualincome,Nodept,PerAddress,PerDistrict,PerState,Perpincode,PreAddress,PreDistrict,PreState,Prepincode,Guardenname,Guarphno,Guaradhar,Guaraddress,Pschool,Pclass,Promotion,Tc,Tcno,Tcdate,Bankname,Bankbranch,Bankifsc,Lag1,Lag2,Lag3,Nob,Nos,Belder,Byoung,Selder,Syoung) values('$img', '$Apnum', '$Adnum', '$Stsnum', '$Enttest', '$class', '$Section', '$Studentname', '$Gender', '$Dob', '$Pob', '$Pdis', '$Pstate', '$Ppincode', '$Sadhaar', '$Bloodgroup', '$Mothertongue', '$Langknow', '$Country', '$Religion', '$Caste', '$Category', '$Casteno', '$Incomeno', '$Fathername', '$Fatherphno', '$Fathereducation', '$Fatheroccupation', '$Fatheradhar', '$Mothername', '$Motherphno', '$Mothereducation', '$Motheroccupation', '$Motheradhar', '$Annualincome', '$Nodept', '$PerAddress', '$PerDistrict', '$PerState', '$Perpincode', '$PreAddress', '$PreDistrict', '$PreState', '$Prepincode', '$Guardenname', '$Guarphno', '$Guaradhar', '$Guaraddress', '$Pschool', '$Pclass', '$Promotion', '$Tc', '$Tcno', '$Tcdate', '$Bankname', '$Bankbranch', '$Bankifsc', '$Lag1', '$Lag2', '$Lag3', '$Nob', '$Nos', '$Belder', '$Byoung', '$Selder', '$Syoung')");
if($query)
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
                                    <h4 class="page-title">Add Student Details</h4>
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
<div class="row">
<div class="col-md-12">
<form class="form-horizontal" name="category" method="post">                              
                <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Application Number &nbsp;*</label>
                                    <input type="tel" pattern="^\d{7}$" name="Apnum" class="form-control" value="" placeholder="-------7 Digits-------" required>
                             </div>
                        </div>
                        <div class="col-md-4">
				            <div class="form-group">
                                <label>Admission Number&nbsp;*</label>
                                    <input type="tel" pattern="^\d{7}$" name="Adnum" class="form-control" value="" placeholder="-------7 digits-------" required>
                            </div>    
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>STS No.</label>
                                    <input type="tel" pattern="^\d{9}$" name="Stsnum" class="form-control" value="" placeholder="-------9 Digits-------" >
                             </div>
                        </div>
                        <div class="col-md-4">
				            <div class="form-group">
                                <label>Entrance Test Marks &nbsp;*</label>
                                    <input type="text" name="Enttest" class="form-control" value="">
                            </div>    
                        </div>
                        <div class="col-md-4">
				            <div class="form-group">
                                <label>Class&nbsp;*</label>
                                    <select name="class" class="form-control" value="" required>          
						              <option value selected ></option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-4">
				            <div class="form-group">
                                <label>Section</label>
                                    <input type="text" name="Section" class="form-control" value="">
                            </div>    
                        </div>
                   
            
                   </div></div>
            </div>        
            
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                            Personal Details
                    </div>
                    <div class="panel-body">
                        
				        <div class="col-md-6">
							 <div class="form-group">
                                <label>Student Name&nbsp;*</label>
                                    <input type="text" name="Studentname" class="form-control" value="" required>
                            </div>         
                        </div>
                       
                        <div class="col-md-3">
							 <div class="form-group">
                                <label>Gender&nbsp;*</label>
                                    <select name="Gender" class="form-control" value="" required>          
						              <option value selected ></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                            </div>      
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Date of Birth&nbsp;*</label>
                                    <input name="Dob" type ="Date" class="form-control"  value="" required>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
							 <div class="form-group">
                                <label>Place of Birth&nbsp;*</label>
                                    <input name="Pob" type ="text" class="form-control"  value="" required>
                            </div>       
                        </div>
                        
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>District&nbsp;*</label>
                                <input type="text" name="Pdis" class="form-control"   value="" required>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>State&nbsp;*</label>
                                    <input type="text" name="Pstate" class="form-control" value="" required>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
				            <div class="form-group">
                                <label>Pincode&nbsp;*</label>
                                    <input type="tel" pattern="^\d{6}$" name="Ppincode" class="form-control"  value="" required>
                            </div>     
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Adhaar Number</label>
                                    <input type="tel" pattern="^\d{12}$" name="Sadhaar" class="form-control" value="">
                            </div>       
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Blood Group</label>
                                <select name="Bloodgroup" class="form-control" value="">          
						              <option value selected ></option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mother Tongue&nbsp;*</label>
                                    <input type="text" name="Mothertongue" class="form-control"   value="" required>
                            </div>     
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Languages Known&nbsp;*</label>
                                    <input type="text" name="Langknow" class="form-control"   value="" required>
                            </div>    
                        </div>
                        
                         <div class="col-md-3">
				            <div class="form-group">
                                <label>Nationality&nbsp;*</label>
                                    <input type="text" name="Country" class="form-control" value="" required>
                            </div>  
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Religion&nbsp;*</label>
                                    <input type="text" name="Religion" class="form-control"  value="" required>      
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Caste&nbsp;*</label>
                                    <input name="Caste" type ="text" class="form-control"  value="" required>
                            </div>      
                        </div>
                        
                        <div class="col-md-3">
				            <div class="form-group">
                                <label>Category&nbsp;*</label>
                                    <input name="Category" type ="text" class="form-control"  value="" required>
                            </div>     
                        </div>
                          <div class="col-md-3">
                            <div class="form-group">
                                <label>Caste Certificate Number</label>
                                    <input name="Casteno" type ="text" class="form-control"  value="">
                            </div>      
                        </div>
                        
                        <div class="col-md-3">
				            <div class="form-group">
                                <label>Income Certificate Number</label>
                                    <input name="Incomeno" type ="text" class="form-control"  value="">
                            </div>     
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
                                <div class="form-group">
                                    <label>Father's Name&nbsp;*</label>
                                        <input name="Fathername" type ="text" class="form-control"  value="" required>
                                </div>     
                            </div>
                            
                             <div class="col-md-2">
                                <div class="form-group">
                                    <label>Phone Number&nbsp;*</label>
                                        <input type="tel" pattern="^\d{10}$" name="Fatherphno" class="form-control" value="" required>
                                            
                                  </div>
                             </div>
                             
                             <div class="col-md-2">
							    <div class="form-group">
                                    <label>Education&nbsp;*</label>
                                        <input type="text" name="Fathereducation" class="form-control"   value="" required>
                                </div>      
                            </div>
                             
                             <div class="col-md-2">
                                <div class="form-group">
                                    <label>Occupation&nbsp;*</label>
                                        <input type="text" name="Fatheroccupation" class="form-control"   value="" required>
                                </div>   
                            </div>
                              <div class="col-md-2">
							     <div class="form-group">
                                    <label>Adhaar No.</label>
                                        <input name="Fatheradhar" type="tel" pattern="^\d{12}$" class="form-control" value="" >
                                 </div>  
                            </div>
                             
                            <div class="col-md-4">
							     <div class="form-group">
                                    <label>Mother's Name&nbsp;*</label>
                                        <input name="Mothername" type ="text" class="form-control"  value="" required>
                                 </div>  
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Phone Number&nbsp;*</label>
                                        <input type="tel" pattern="^\d{10}$" name="Motherphno" class="form-control"  value="" required>
                                </div>     
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Education&nbsp;*</label>
                                        <input type="text" name="Mothereducation" class="form-control" value="" required>
                                </div>     
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Occupation&nbsp;*</label>
                                        <input type="text" name="Motheroccupation" class="form-control" value="" required>
                                </div>
                             </div>
                             <div class="col-md-2">
							     <div class="form-group">
                                    <label>Adhaar No.&nbsp;*</label>
                                        <input name="Motheradhar" type="tel" pattern="^\d{12}$" class="form-control"  value="" required>
                                 </div>  
                            </div>
                             
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Annual Income&nbsp;*</label>
                                        <input type="tel" name="Annualincome" class="form-control"   value="" required>
                                </div>   
                            </div>
                             
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Number of Dependants&nbsp;*</label>
                                    <select name="Nodept" class="form-control" value="" required>          
						              <option value selected ></option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="10+">10+</option>
                                    </select>
                                </div>
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
                             
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label>Permanent Address&nbsp;*</label>
                                        <input name="PerAddress" type ="text" class="form-control"  value="" required>
                                </div>     
                            </div>
                            
                            <div class="col-md-3">
                        <div class="form-group">
                            <label>District&nbsp;*</label>
                                <input type="text" name="PerDistrict" class="form-control"   value="" required>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>State&nbsp;*</label>
                                    <input type="text" name="PerState" class="form-control" value="" required>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
				            <div class="form-group">
                                <label>Pincode&nbsp;*</label>
                                    <input type="tel" pattern="^\d{6}$" name="Perpincode" class="form-control" value="" required>
                            </div>     
                        </div>
                             
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label>Present Address&nbsp;*</label>
                                        <input name="PreAddress" type ="text" class="form-control"  value="" required>
                                </div>     
                            </div>
                            
                            <div class="col-md-3">
                        <div class="form-group">
                            <label>District&nbsp;*</label>
                                <input type="text" name="PreDistrict" class="form-control"   value="" required>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>State&nbsp;*</label>
                                    <input type="text" name="PreState" class="form-control" value="" required>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
				            <div class="form-group">
                                <label>Pincode&nbsp;*</label>
                                    <input type="tel" pattern="^\d{6}$" name="Prepincode" class="form-control"  value="" required>
                            </div>     
                        </div>
                          <div class="col-md-3">
                                <div class="form-group">
                                    <label>Guardian Name(if Pupil stay)</label>
                                        <input name="Guardenname" type ="text" class="form-control"  value="">
                                </div>     
                            </div>
                             
                             <div class="col-md-2">
                        <div class="form-group">
                            <label>Phone Number</label>
                                <input type="tel" name="Guarphno" class="form-control" value="" >
                            </div>
                        </div>
                            
                            <div class="col-md-2">
                        <div class="form-group">
                            <label>Adhaar No.</label>
                                <input type="tel" name="Guaradhar" class="form-control"   value="">
                            </div>
                        </div>
                        
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Address</label>
                                    <input type="text" name="Guaraddress" class="form-control" value="">
                            </div>
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
                                <div class="form-group">
                                    <label>Name of the School&nbsp;*</label>
                                        <input name="Pschool" type ="text" class="form-control"  value="" required>
                                </div>     
                            </div>
                            
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label>Class &nbsp;*</label>
                                        <input type="tel" name="Pclass" class="form-control"   value="" required>
                                            
                                  </div>
                             </div>
                             
                             <div class="col-md-4">
							    <div class="form-group">
                                    <label>Whether qualified for promotion&nbsp;*</label>
                                        <input type="text" name="Promotion" class="form-control"   value="" required>
                                </div>      
                            </div>
                            
                             
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label>Whether the pupil has produced the transfer / School Leaving Certificate&nbsp;*</label>
                                        <input type="text" name="Tc" class="form-control"   value="" required>
                                </div>   
                            </div>
                            <div class="col-md-4">
							    <div class="form-group"><br>
                                    <label>Certificate No.</label>
                                        <input type="text" name="Tcno" class="form-control"   value="">
                                </div>      
                            </div>
                             <div class="col-md-4">
							    <div class="form-group"><br>
                                    <label>Date</label>
                                        <input type="date" name="Tcdate" class="form-control"   value="" >
                                </div>      
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
                                <div class="form-group">
                                    <label>Name of the Bank</label>
                                        <input name="Bankname" type ="text" class="form-control"  value="">
                                </div>     
                            </div>
                            
                            <div class="col-md-4">
                        <div class="form-group">
                            <label>Branch</label>
                                <input type="text" name="Bankbranch" class="form-control"   value="">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>IFSC Code</label>
                                    <input type="text" name="Bankifsc" class="form-control" value="">
                            </div>
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
                                <div class="form-group">
                                    <label>I Language</label>
                                        <input name="Lag1" type ="text" class="form-control"  value="">
                                </div>     
                            </div>
                            
                            <div class="col-md-4">
                        <div class="form-group">
                            <label>II Language</label>
                                <input type="text" name="Lag2" class="form-control"   value="">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>III Language</label>
                                    <input type="text" name="Lag3" class="form-control" value="">
                            </div>
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
							 <div class="form-group">
                                    <label>Number of Brothers&nbsp;*</label>
                                    <select name="Nob" class="form-control" value="" required>          
						              <option value selected ></option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        
                                    </select>
                               </div>
                        </div>
							 
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Elder&nbsp;*</label>
                                    <select name="Belder" class="form-control" value="" required>          
						              <option value selected ></option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                       
                                    </select>
                                 </div>
                        </div>
                        
                        <div class="col-md-4">
                             <div class="form-group">
                                <label>Yonger&nbsp;*</label>
                                 <select name="Byoung" class="form-control" value="" required>          
						              <option value selected ></option>
                                     <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                       
                                    </select>
                            </div>
                        </div>
                        
                         <div class="col-md-4">
                            <div class="form-group">
                                 <label>Number of Sisters&nbsp;*</label>
                                     <select name="Nos" class="form-control" value="" required>          
						              <option value selected ></option>
                                         <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                       
                                    </select>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                             <div class="form-group">
                                <label>Elder&nbsp;*</label>
                                 <select name="Selder" class="form-control" value="" required>          
						              <option value selected ></option>
                                     <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                       
                                    </select>
                            </div>
                        </div>
                        
                         <div class="col-md-4">
                            <div class="form-group">
                                 <label>Yonger&nbsp;*</label>
                                     <select name="Syoung" class="form-control" value="" required>          
						              <option value selected ></option>
                                        <option value="0">0</option>
                                         <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                     
                                    </select>
                            </div>
                        </div>
                        
                    </div>
                </div>
        </div>
          
      <label class="col-md-2 control-label">&nbsp;</label>
      <div class="col-md-10">
     <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">Submit</button>
     </div>		
     
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