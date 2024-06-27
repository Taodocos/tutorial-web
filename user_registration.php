<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css"rel="stylesheet" />
    <script src="js/bootstrap.min.js"></script>
   

 </head>
    <title>user registration</title>

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
            <h3 class="fw-bold display-6 text-center ">register</h3>
            <div class="row my-12 align-items-center justify-content-center fw-light g-3 ">
                <div class="col-8 col-lg-4 col-xl-5 shadow bg-white">
                    <div class="card-border-0">
                        <div class="card-body align-items-center justify-content-center py-4">
 
                         <form method="Post" action="">
 
	

<table class="justify-content-center align-item-center">
                                <tr>
                                    <td><label  class="form-label "><b>User name</b></label></td>
                                    <td><input type="text" class="form-control" name="username" id="" required x-moz-errormessage="name is requred"></td>
                                </tr>
                                <tr>
                                    <td><label  class="form-label "><b>Email</b></label></td>
                                    <td><input type="email" class="form-control" name="email" id="" required x-moz-errormessage="Email is requred"></td>
                                </tr>
                                <tr>
                                    <td><label  class="form-label "><b>Phone no</b></label></td>
                                    <td><input type="number" class="form-control" name="phone" id="" required x-moz-errormessage="phone no is requred"></td>
                                </tr>

                                <tr><td><label  class="form-label "><b>Password</b></label></td>
                                    <td><input type="password" class="form-control" name="password" id="" required x-moz-errormessage="password is requred"></td></tr>
                                    
                                    <tr><td><label  class="form-label "><b>conform Password</b></label></td>
                                    <td><input type="password" class="form-control" name="pass" id="" required x-moz-errormessage="confirm password is requred"></td></tr>
                                

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
    $username=validate($_POST['username']);
    $email=validate($_POST['email']);
    $phone=validate($_POST['phone']);
    $password=validate($_POST['password']);
    $pass=validate($_POST['pass']);
   
    if($password == $pass){
        
 
        
  #include("DBof-Gibi_conn.php");
    $insert = "INSERT INTO  users (username,email,phone,password,pass)
    values('$username','$email ','$phone','$password','$pass')";
    $query= mysqli_query($conn, $insert);
    if($query){
        echo "<script>alert('successfully registered!!!');</script>";
        echo "<script>window.location='tutor_register.php';</script>";
        
}
else{
                                         

   echo "<script>alert('password and confirm password doesn't match')";

}}
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
    $username="";
    $email="";
    $phone="";
    $password="";
   
}
?>

	
 
                                                                         
</body>
<footer class=" border-secondary shadow-lg bg-black ">
                
                
                     <p class="text-white text-right">  &copy;2024 ALICOTUTOR. All rights reserved</p>
              
                    
             </footer>
             
</html>