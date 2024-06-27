<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css"rel="stylesheet" />
    <script src="js/bootstrap.min.js"></script>
    <?php 
	//include_once('header.php');
	session_start();
    if(isset($_GET['logged']))
	{
		Header("location:home.php");
		session_destroy();
		
	} //<link rel="stylesheet" href="styles/slide1.css" type="text/css"/>
 
 ?>

 </head>
    <title>tutor registration</title>

</head>
<body>
<section class="bg-light">
<tr>
                    <td>
                        <nav class="navbar navbar-expand-md navbar-light fixed-top border-secondary shadow-lg bg-white">
                            <div class="container-xxl">
                            <h1 class="navbar-brand align-left"><B>ALICO</B>tutorial</h1>
                            </div>
                            <div class="collaps navbar-collaps justify-content-end align-center"id="main-nav">
                                
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link fw-bold" href="home.html"><b>Home</b></a>
                                    </li>
    
                                    
                                    <li class="nav-item">
                                        <a class="nav-link fw-bold" href="loginas.php"><b>login</b></a>
                                    </li>
                                   
                                        <a class="nav-link fw-bold" href="post.php"><b>posts</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fw-bold" href="about.html"><b>contact</b></a>
                                    </li>
                                </ul>
                            </div>
    
                        </nav>
                    </td>
                </tr>
        <div class="container-lg my-5 justify-content-center align-items-center">
            <h3 class="fw-bold display-6 text-center ">register for tutorial</h3>
            <div class="row my-12 align-items-center justify-content-center fw-light g-3 ">
                <div class="col-8 col-lg-4 col-xl-5 shadow bg-white">
                    <div class="card-border-0">
                        <div class="card-body align-items-center justify-content-center py-4">
 
                         <form method="Post" action="">
 
	

<table class="justify-content-center align-item-center">
                                <tr>
                                    <td><label  class="form-label "><b>Full Name</b></label></td>
                                    <td><input type="text" class="form-control" name="name" id=""
                                     required x-moz-errormessage="name is requred" ></td>
                                </tr>
                                <tr>
                                    <td><label  class="form-label "><b>gender</b></label></td>
                                    <td><select class="" name="gender" required x-moz-errormessage="gender is requred">
                                        <option>male</option>
                                        <option>female</option>
                                        
                                     </select></td>
                                </tr>

                                <tr>
                                    <td><label  class="form-label "><b>Email</b></label></td>
                                    <td><input type="email" class="form-control" name="email" id="" 
                                    ></td>
                                </tr>
                                <tr>
                                    <td><label  class="form-label "><b>Grade</b></label></td>
                                    <td><input type="text" class="form-control" name="grade" id=""
                                     required x-moz-errormessage="grade is requred"></td>
                                </tr>

                                <tr>
                                    <td><label  class="form-label "><b>Region</b></label></td>
                                    <td><input type="text" class="form-control" name="region" id="" 
                                    required x-moz-errormessage="region is requred"></td>
                                </tr>
                                <tr>
                                    <td><label  class="form-label "><b>wereda</b></label></td>
                                    <td><input type="text" class="form-control" name="wereda" id=""
                                     required x-moz-errormessage="wereda is requred"></td>
                                </tr>
                                <tr>
                                    <td><label  class="form-label "><b>village</b></label></td>
                                    <td><input type="text" class="form-control" name="village" id="" 
                                    required x-moz-errormessage="village is requred"></td>
                                </tr>
                                <tr>
                                    <td><label  class="form-label "><b>phone no</b></label></td>
                                    <td><input type="number" class="form-control" name="phone" id="" 
                                    required x-moz-errormessage="phone no is requred"></td>
                                </tr>
                                <tr>
                                <td><label  class="form-label "><b>teacher_gender</b></label></td>
                                    <td>
                                    <select class="" name="teacher_gender">
                                        <option>male</option>
                                        <option>female</option>
                                        <option>can be both</option>
                                     </select>
                                     </td>
                                </tr>
                                

                                <tr><td><button type="submit" class="btn btn-success width" name="save">save</button></td>
                                    <td><button type="reset" class="btn btn-danger" name="reset">clear</button></td>
                                  
                                </tr>
                           </table>
                           </form>
					 </div>
                    </div>
                    </div>
                    </div>
                      
      
					
												         </div>  
                                                         <?php
 include("conn.php");
if(isset($_POST['save']))
{
    $name=validate($_POST['name']);
    $gender=validate($_POST['gender']);
    $email=validate($_POST['email']);
    $grade=validate($_POST['grade']);
    $region=validate($_POST['region']);
    $wereda=validate($_POST['wereda']);
    $village=validate($_POST['village']);
    $phone=validate($_POST['phone']);
    $teacher_gender=validate($_POST['teacher_gender']);
  #include("DBof-Gibi_conn.php");
    $insert = "INSERT INTO  tutor_register (name,gender,email,grade,region, wereda, village, phone, teacher_gender)
    values('$name',' $gender ','$email','$grade','$region','$wereda','$village','$phone','$teacher_gender')";
    $query= mysqli_query($conn, $insert);
    if($query){
        echo "<script>alert('successfully registered!!!');</script>";
        echo "<script>window.location='tutor_register.php';</script>";
}
}
function validate($data){
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    $data=trim($data);
    return $data;
    #include('session.php');

}
if(isset($_POST['reset']))

{
    $name="";
    $gender="";
    $email="";
    $grade="";
    $region="";
    $wereda="";
    $village="";
    $phone="";
    $teacher_gender="";
   
}
?>

	
 
                                                                         
</body>
<footer class="row my-7 align-items-center mag justify-content-center fw-light g-8 border-secondary shadow-lg bg-black ">
                
                    <div class=" decoration-none align-items-center icon-white">
                        <h4><a href="#" class="fa fa-building">  Megenagna Maraton Blg. </a></h4>
                        <h4> <a href="https://www.facebook.com" class="fa fa-facebook">sinubeken Ali abdulwahid</a></h4>
                        <!--<h2><a href="https://www.fa-twitter.com" class="fa fa-twitter"></a></h2>-->
                        <h4><a href="https://t.me/ALICOTUTOR" class="fa fa-telegram">ALICO TUTOR</a></h4>
                    <!--<h2><a href="@Alicotution" class="fa fa-instagram"></a></h2>-->
                        <h4><a href="#" class="fa fa-phone">+251911674346</a></h4>
                        <!--<a href="@Alicotution" class="fa fa-youtube"></a>-->

                    </div>
               
                        <nav class="navbar navbar-expand-md navbar-dark  border-secondary shadow-lg bg-black">
                            
                           <div class="container-xxl justify-content-center">
                            
                <div class="collaps navbar-collaps justify-content-end align-center" id="main-nav">
                                
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="home.html"><b>Home</b></a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="loginas.php"><b>login</b></a>
                        </li>w
                       
                            <a class="nav-link fw-bold" href="post.php"><b>posts</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="about.html"><b>contact</b></a>
                        </li>
                    </ul>
                </div>

            </nav>
            
                </div>
               
                </div>
                <p class="text-white text-center">ALICO TUTOR & EDUCATIONAL  CONSULTANCY PLC <br> 
                    From KG - Grade 12 HOME TO HOME & ONLINE TUTORIAL SERVICE. <br>
                    BASED ON  CAMBRIDGE  & ETHIOPIAN lEARING  SYSTEM . BY MALE & FEMAL  PROFESSIONAL TEACHERS
                    INCLUDING SPECIAL NEEDS STUDENTS. </p>
                    <p class="text-white text-center">  &copy;2024 ALICOTUTOR. All rights reserved</p>
             </footer>
             
</html>