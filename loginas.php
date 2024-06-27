<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css"rel="stylesheet" />
    <script src="js/bootstrap.min.js"></script>
    <?php 
    
    session_start();
    include_once("conn.php");
   #include_once("i-head.php");
    if(isset($_GET['logged']))
    {
        Header("location:home.php");
        session_destroy();
        
    }

                    $Today=date('y:m:d');
                    $new=date('l, F d, Y',strtotime($Today));
                    
                ?>


 </head>
    <title>log in</title>

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
    
                                  
                                    
                                   
                                        <a class="nav-link fw-bold" href="post.php"><b>posts</b></a>
                                    </li>
                                   
                                </ul>
                            </div>
    
                        </nav>
                    </td>
                </tr>
        <div class="container-lg my-5 justify-content-center align-items-center">
            <h3 class="fw-bold display-6 text-center ">LOG IN AS</h3>
            <div class="row my-12 align-items-center justify-content-center fw-light g-3 ">
                <div class="col-8 col-lg-4 col-xl-5 shadow bg-white">
                    <div class="card-border-0">
                        <div class="card-body align-items-center justify-content-center py-4">
 
                         <form method="Post" action="">
 
	

                         <table class="justify-content-center align-item-center">
                                <tr>
                                    <td><label  class="form-label "><b>User name</b></label></td>
                                    <td><input type="text" class="form-control" name="Username" id=""></td>
                                </tr>
                                <tr><td><label  class="form-label "><b>Password</b></label></td>
                                    <td><input type="password" class="form-control" name="password" id=""></td></tr>
                                

                                <tr>
                                    
                                    <td><button type="submit" class="btn btn-success width" name="admin">admin</button></td>
                                    <td><button type="submit" class="btn btn-success width" name="user">user</button></td>
                                    <td><button type="reset" class="btn btn-danger width-4" name="reset">clear</button></td>
                                  
                                </tr>
                           </table>
                          <center> To create new account  <a class="nav-link fw-bold" href="user_registration.php"><b> click me</b></a></center> 
                           </form>
                           
					 </div>
                    </div>
                    </div>
                   
                   
                    </div>
                    
                      <?php
                      include('conn.php');
                    $flag=0;
        if(isset($_POST['admin']))
        {
            $username=$_POST['Username'];
            $password=($_POST['password']);//md5 tetekem mechersha lay
			//echo $password;
            
            $sql = "select * from acount where username ='$username' AND password='$password'";
                                
								$qr = mysqli_query($conn,$sql);  
								$result = mysqli_num_rows($qr);
        		                if($result>0)
                                {
                                    $flag=1; 
                                       
											$_SESSION["username"]=$username;

                                          
											if(isset($_SESSION["username"]))
											{       
												echo "<script>window.location='view_tutor.php';</script>"; 
											}	else
											{
												echo("not exist");
											}	
								            }
                                    else{
                                         
											 ?>
											<div class="alert alert-danger" style="width: 300px margin-bottom: 100px;">
                                            <a href="Login.php" class="close" ></a>
                                            <h4 style="color:red;">Incorrect Username or Password</h4>
                                            </div>
											<?php
													
													
																			
							                        }}
							                 
                                                $flag=0;
        if(isset($_POST['user']))
        {
            $username=$_POST['Username'];
            $password=($_POST['password']);//md5 tetekem mechersha lay
			//echo $password;
            
            $sql = "select * from users where username ='$username' AND password='$password'";
                                
								$qr = mysqli_query($conn,$sql);  
								$result = mysqli_num_rows($qr);
        		                if($result>0)
                                {
                                    $flag=1; 
                                       
											$_SESSION["username"]=$username;

                                          
											if(isset($_SESSION["username"]))
											{       
												echo "<script>window.location='tutor_register.php';</script>"; 
											}	else
											{
												echo("not exist");
											}	
								            }
                                    else{
                                         
											 ?>
											<div class="alert alert-danger" style="width: 300px margin-bottom: 100px;">
                                            <a href="Login.php" class="close" ></a>
                                            <h4 style="color:red;">Incorrect Username or Password</h4>
                                            </div>
											<?php
													
													
																			
							                        }}
							                    ?> 
												         </div>  

							         </div>  

	
 
                                                                         
</body>
<footer class="row my-7 align-items-center mag justify-content-center fw-light g-8 border-secondary shadow-lg bg-black ">
                
<footer class=" border-secondary shadow-lg bg-black ">
                
                
                     <center><p class="text-white text-left">  &copy;2024 ALICOTUTOR. All rights reserved</p></center>
              
                    
             </footer>
             
             
</html>