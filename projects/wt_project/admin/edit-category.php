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
$Adnum=$_GET['Adnum'];
$img=	 $_POST['img'];
$Apnum = 	 $_POST['Apnum'];

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
$qq="Update student_application set img='$img',Apnum='$Apnum',Stsnum='$Stsnum',Enttest='$Enttest',class='$class',Section='$Section',Studentname='$Studentname',Gender='$Gender',Dob='$Dob',Pob='$Pob',Pdis='$Pdis',Pstate='$Pstate',Ppincode='$Ppincode',Sadhaar='$Sadhaar',Bloodgroup='$Bloodgroup',Mothertongue='$Mothertongue',Langknow='$Langknow',Country='$Country',Religion='$Religion',Caste='$Caste',Category='$Category',Casteno='$Casteno',Incomeno='$Incomeno',Fathername='$Fathername',Fatherphno='$Fatherphno',Fathereducation='$Fathereducation',Fatheroccupation='$Fatheroccupation',Fatheradhar='$Fatheradhar',Mothername='$Mothername',Motherphno='$Motherphno',Mothereducation='$Mothereducation',Motheroccupation='$Motheroccupation',Motheradhar='$Motheradhar',Annualincome='$Annualincome',Nodept='$Nodept',PerAddress='$PerAddress',PerDistrict='$PerDistrict',PerState='$PerState',Perpincode='$Perpincode',PreAddress='$PreAddress',PreDistrict='$PreDistrict',PreState='$PreState',Prepincode='$Prepincode',Guardenname='$Guardenname',Guarphno='$Guarphno',Guaradhar='$Guaradhar',Guaraddress='$Guaraddress',Pschool='$Pschool',Pclass='$Pclass',Promotion='$Promotion',Tc='$Tc',Tcno='$Tcno',Tcdate='$Tcdate',Bankname='$Bankname',Bankbranch='$Bankbranch',Bankifsc='$Bankifsc',Lag1='$Lag1',Lag2='$Lag2',Lag3='$Lag3',Nob='$Nob',Nos='$Nos',Belder='$Belder',Byoung='$Byoung',Selder='$Selder',Syoung='$Syoung' where Adnum='$Adnum'";
$query=mysqli_query($con,$qq);
if($query)
{
$msg="Category Updated successfully ";
}
else{
$error="Something went wrong . Please try again.";    
} 
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
                                    <h4 class="page-title">Edit Student Details</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Student </a>
                                        </li>
                                        <li class="active">
                                            Edit Student
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
                         
			             <div class="col-md-4">
                            <div class="form-group">
                                <label>Application Number</label>
                                    <input type="tel" pattern="^\d{7}$" name="Apnum" class="form-control" value="<?php echo htmlentities($row['Apnum']);?>">
                             </div>
                        </div>
                        <div class="col-md-4">
				            <div class="form-group">
                                <label>Admission Number</label>
                                    <input type="tel" pattern="^\d{7}$" name="Adnum" class="form-control" value="<?php echo htmlentities($row['Adnum']);?>">
                            </div>    
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>STS No.</label>
                                    <input type="tel" pattern="^\d{9}$" name="Stsnum" class="form-control" value="<?php echo htmlentities($row['Stsnum']);?>">
                             </div>
                        </div>
                        <div class="col-md-4">
				            <div class="form-group">
                                <label>Entrance Test Marks</label>
                                    <input type="tel" name="Enttest" class="form-control" value="<?php echo htmlentities($row['Enttest']);?>">
                            </div>    
                        </div>
                        <div class="col-md-4">
				            <div class="form-group">
                                <label>Class</label>
                                    <select name="class" class="form-control">  
                                        <option value="<?php echo htmlentities($row['class']);?>"><?php echo htmlentities($row['class']);?></option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-4">
				            <div class="form-group">
                                <label>Section</label>
                                    <input type="text" name="Section" class="form-control" value="<?php echo htmlentities($row['Section']);?>">
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
                                <label>Student Name</label>
                                    <input type="text" name="Studentname" class="form-control" value="<?php echo htmlentities($row['Studentname']);?>">
                            </div>         
                        </div>
                       
                        <div class="col-md-3">
							 <div class="form-group">
                                <label>Gender</label>
                                    <select name="Gender" class="form-control">          
						             <option value="<?php echo htmlentities($row['Gender']);?>"><?php echo htmlentities($row['Gender']);?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                            </div>      
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                    <input name="Dob" type ="Date" class="form-control"  value="<?php echo htmlentities($row['Dob']);?>">
                            </div>
                        </div>
                        
                        <div class="col-md-3">
							 <div class="form-group">
                                <label>Place of Birth</label>
                                    <input name="Pob" type ="text" class="form-control"  value="<?php echo htmlentities($row['Pob']);?>">
                            </div>       
                        </div>
                        
                        <div class="col-md-3">
                        <div class="form-group">
                            <label>District</label>
                                <input type="text" name="Pdis" class="form-control"   value="<?php echo htmlentities($row['Pdis']);?>">
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>State</label>
                                    <input type="text" name="Pstate" class="form-control" value="<?php echo htmlentities($row['Pstate']);?>">
                            </div>
                        </div>
                        
                        <div class="col-md-3">
				            <div class="form-group">
                                <label>Pincode</label>
                                    <input type="tel" pattern="^\d{6}$" name="Ppincode" class="form-control"  value="<?php echo htmlentities($row['Ppincode']);?>">
                            </div>     
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Adhaar Number</label>
                                    <input type="tel" pattern="^\d{12}$" name="Sadhaar" class="form-control" value="<?php echo htmlentities($row['Sadhaar']);?>">
                            </div>       
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Blood Group</label>
                                <select name="Bloodgroup" class="form-control">          
						              <option value="<?php echo htmlentities($row['Bloodgroup']);?>"><?php echo htmlentities($row['Bloodgroup']);?></option>
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
                                <label>Mother Tongue</label>
                                    <input type="text" name="Mothertongue" class="form-control"   value="<?php echo htmlentities ($row['Mothertongue']);?>">
                            </div>     
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Languages Known</label>
                                    <input type="text" name="Langknow" class="form-control"   value="<?php echo htmlentities ($row['Langknow']);?>">
                            </div>    
                        </div>
                        
                         <div class="col-md-3">
				            <div class="form-group">
                                <label>Nationality</label>
                                    <input type="text" name="Country" class="form-control" value="<?php echo htmlentities($row['Country']);?>">
                            </div>  
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Religion</label>
                                    <input type="text" name="Religion" class="form-control"  value="<?php echo htmlentities ($row['Religion']);?>">      
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Caste</label>
                                    <input name="Caste" type ="text" class="form-control"  value="<?php echo htmlentities ($row['Caste']);?>">
                            </div>      
                        </div>
                        
                        <div class="col-md-3">
				            <div class="form-group">
                                <label>Category</label>
                                    <input name="Category" type ="text" class="form-control"  value="<?php echo htmlentities ($row['Category']);?>">
                            </div>     
                        </div>
                          <div class="col-md-3">
                            <div class="form-group">
                                <label>Caste Certificate Number</label>
                                    <input name="Casteno" type ="text" class="form-control"  value="<?php echo htmlentities ($row['Casteno']);?>">
                            </div>      
                        </div>
                        
                        <div class="col-md-3">
				            <div class="form-group">
                                <label>Income Certificate Number</label>
                                    <input name="Incomeno" type ="text" class="form-control"  value="<?php echo htmlentities ($row['Incomeno']);?>">
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
                                    <label>Father's Name</label>
                                        <input name="Fathername" type ="text" class="form-control"  value="<?php echo htmlentities ($row['Fathername']);?>">
                                </div>     
                            </div>
                            
                             <div class="col-md-2">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                        <input type="tel" pattern="^\d{10}$" name="Fatherphno" class="form-control" value="<?php echo htmlentities($row['Fatherphno']);?>">
                                            
                                  </div>
                             </div>
                             
                             <div class="col-md-2">
							    <div class="form-group">
                                    <label>Education</label>
                                        <input type="text" name="Fathereducation" class="form-control"   value="<?php echo htmlentities($row['Fathereducation']);?>">
                                </div>      
                            </div>
                             
                             <div class="col-md-2">
                                <div class="form-group">
                                    <label>Occupation</label>
                                        <input type="text" name="Fatheroccupation" class="form-control"   value="<?php echo htmlentities($row['Fatheroccupation']);?>">
                                </div>   
                            </div>
                              <div class="col-md-2">
							     <div class="form-group">
                                    <label>Adhaar No.</label>
                                        <input name="Fatheradhar" type="tel" pattern="^\d{12}$" class="form-control" value="<?php echo htmlentities($row['Fatheradhar']);?>">
                                 </div>  
                            </div>
                             
                            <div class="col-md-4">
							     <div class="form-group">
                                    <label>Mother's Name</label>
                                        <input name="Mothername" type ="text" class="form-control"  value="<?php echo htmlentities ($row['Mothername']);?>">
                                 </div>  
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                        <input type="tel" pattern="^\d{10}$" name="Motherphno" class="form-control"  value="<?php echo htmlentities ($row['Motherphno']);?>">
                                </div>     
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Education</label>
                                        <input type="text" name="Mothereducation" class="form-control" value="<?php echo htmlentities ($row['Mothereducation']);?>" >
                                </div>     
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Occupation</label>
                                        <input type="text" name="Motheroccupation" class="form-control" value="<?php echo htmlentities ($row['Motheroccupation']);?>">
                                </div>
                             </div>
                             <div class="col-md-2">
							     <div class="form-group">
                                    <label>Adhaar No.</label>
                                        <input name="Motheradhar" type="tel" pattern="^\d{12}$" class="form-control"  value="<?php echo htmlentities ($row['Motheradhar']);?>">
                                 </div>  
                            </div>
                             
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Annual Income</label>
                                        <input type="tel" name="Annualincome" class="form-control"   value="<?php echo htmlentities ($row['Annualincome']);?>">
                                </div>   
                            </div>
                             
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Number of Dependants</label>
                                    <select name="Nodept" class="form-control">          
						             <option value="<?php echo htmlentities ($row['Nodept']);?>"><?php echo htmlentities ($row['Nodept']);?></option>
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
                                    <label>Permanent Address</label>
                                        <input name="PerAddress" type ="text" class="form-control"  value="<?php echo htmlentities ($row['PerAddress']);?>">
                                </div>     
                            </div>
                            
                            <div class="col-md-3">
                        <div class="form-group">
                            <label>District</label>
                                <input type="text" name="PerDistrict" class="form-control"   value="<?php echo htmlentities ($row['PerDistrict']);?>">
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>State</label>
                                    <input type="text" name="PerState" class="form-control" value="<?php echo htmlentities ($row['PerState']);?>">
                            </div>
                        </div>
                        
                        <div class="col-md-3">
				            <div class="form-group">
                                <label>Pincode</label>
                                    <input type="tel" pattern="^\d{6}$" name="Perpincode" class="form-control" value="<?php echo htmlentities ($row['Perpincode']);?>">
                            </div>     
                        </div>
                             
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label>Present Address</label>
                                        <input name="PreAddress" type ="text" class="form-control"  value="<?php echo htmlentities ($row['PreAddress']);?>">
                                </div>     
                            </div>
                            
                            <div class="col-md-3">
                        <div class="form-group">
                            <label>District</label>
                                <input type="text" name="PreDistrict" class="form-control"   value="<?php echo htmlentities ($row['PreDistrict']);?>">
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>State</label>
                                    <input type="text" name="PreState" class="form-control" value="<?php echo htmlentities ($row['PreState']);?>">
                            </div>
                        </div>
                        
                        <div class="col-md-3">
				            <div class="form-group">
                                <label>Pincode</label>
                                    <input type="tel" pattern="^\d{6}$" name="Prepincode" class="form-control"  value="<?php echo htmlentities ($row['Prepincode']);?>">
                            </div>     
                        </div>
                          <div class="col-md-3">
                                <div class="form-group">
                                    <label>Guardian Name(if Pupil stay)</label>
                                        <input name="Guardenname" type ="text" class="form-control"  value="<?php echo htmlentities ($row['Guardenname']);?>">
                                </div>     
                            </div>
                             
                             <div class="col-md-2">
                        <div class="form-group">
                            <label>Phone Number</label>
                                <input type="tel" name="Guarphno" class="form-control" value="<?php echo htmlentities ($row['Guarphno']);
 ?>">
                            </div>
                        </div>
                            
                            <div class="col-md-2">
                        <div class="form-group">
                            <label>Adhaar No.</label>
                                <input type="tel" name="Guaradhar" class="form-control"   value="<?php echo htmlentities ($row['Guaradhar']);?>">
                            </div>
                        </div>
                        
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Address</label>
                                    <input type="text" name="Guaraddress" class="form-control" value="<?php echo htmlentities ($row['Guaraddress']);?>">
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
                                    <label>Name of the School</label>
                                        <input name="Pschool" type ="text" class="form-control"  value="<?php echo htmlentities ($row['Pschool']);?>">
                                </div>     
                            </div>
                            
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label>Class </label>
                                        <input type="text" name="Pclass" class="form-control"   value="<?php echo htmlentities ($row['Pclass']);?>">
                                            
                                  </div>
                             </div>
                             
                             <div class="col-md-3">
							    <div class="form-group">
                                    <label>Whether qualified for promotion</label>
                                        <input type="text" name="Promotion" class="form-control"   value="<?php echo htmlentities ($row['Promotion']);?>">
                                </div>      
                            </div>
                            
                             
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label>Whether the pupil has produced the transfer / School Leaving Certificate</label>
                                        <input type="text" name="Tc" class="form-control"   value="<?php echo htmlentities ($row['Tc']);?>">
                                </div>   
                            </div>
                            <div class="col-md-3">
							    <div class="form-group"><br>
                                    <label>Certificate No.</label>
                                        <input type="text" name="Tcno" class="form-control"   value="<?php echo htmlentities ($row['Tcno']);?>">
                                </div>      
                            </div>
                             <div class="col-md-3">
							    <div class="form-group"><br>
                                    <label>Date</label>
                                        <input type="date" name="Tcdate" class="form-control"   value="<?php echo htmlentities ($row['Tcdate']);?>">
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
                             
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label>Name of the Bank</label>
                                        <input name="Bankname" type ="text" class="form-control"  value="<?php echo htmlentities ($row['Bankname']);?>">
                                </div>     
                            </div>
                            
                            <div class="col-md-3">
                        <div class="form-group">
                            <label>Branch</label>
                                <input type="text" name="Bankbranch" class="form-control"   value="<?php echo htmlentities ($row['Bankbranch']);?>">
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>IFSC Code</label>
                                    <input type="text" name="Bankifsc" class="form-control" value="<?php echo htmlentities ($row['Bankifsc']);?>">
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
                             
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label>I Language</label>
                                        <input name="Lag1" type ="text" class="form-control"  value="<?php echo htmlentities ($row['Lag1']);?>">
                                </div>   
                            </div>
                            
                            <div class="col-md-3">
                        <div class="form-group">
                            <label>II Language</label>
                                <input type="text" name="Lag2" class="form-control"   value="<?php echo htmlentities ($row['Lag2']);?>">
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>III Language</label>
                                    <input type="text" name="Lag3" class="form-control" value="<?php echo htmlentities ($row['Lag3']);?>">
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
                                    <label>Number of Brothers</label>
                                    <select name="Nob" class="form-control">          
						              <option value="<?php echo htmlentities ($row['Nob']);?>"><?php echo htmlentities ($row['Nob']);?></option>
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
                                <label>Elder</label>
                                    <select name="Belder" class="form-control">          
						            <option value="<?php echo htmlentities ($row['Belder']);?>"><?php echo htmlentities ($row['Belder']);?></option>
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
                                <label>Yonger</label>
                                 <select name="Byoung" class="form-control">        
						           <option value="<?php echo htmlentities ($row['Byoung']);?>"><?php echo htmlentities ($row['Byoung']);?></option>  
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
                                 <label>Number of Sisters</label>
                                     <select name="Nos" class="form-control">          
						             <option value="<?php echo htmlentities ($row['Nos']);?>"><?php echo htmlentities ($row['Nos']);?></option>
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
                                <label>Elder</label>
                                 <select name="Selder" class="form-control">          
						               <option value="<?php echo htmlentities ($row['Selder']);?>"><?php echo htmlentities ($row['Selder']);?></option>
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
                                 <label>Yonger</label>
                                     <select name="Syoung" class="form-control">
						          <option value="<?php echo htmlentities ($row['Syoung']);?>"><?php echo htmlentities ($row['Syoung']);?></option>
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
                
                </div></div>
     <?php } ?>     
        <div class="col-md-12 col-sm-12">
            <div class="well">
                <center><input input type="submit" name="submit" value="update" class="btn btn-primary"></center>
            </div>        
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
 <?php } ?>  