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
                                    <td><input type="text" class="form-control" name="name" id=""></td>
                                </tr>
                                <tr>
                                    <td><label  class="form-label "><b>gender</b></label></td>
                                    <td><select class="" name="gender">
                                        <option>male</option>
                                        <option>female</option>
                                        
                                     </select></td>
                                </tr>

                                <tr>
                                    <td><label  class="form-label "><b>Email</b></label></td>
                                    <td><input type="email" class="form-control" name="email" id=""></td>
                                </tr>
                                <tr>
                                    <td><label  class="form-label "><b>Grade</b></label></td>
                                    <td><input type="text" class="form-control" name="grade" id=""></td>
                                </tr>

                                <tr>
                                    <td><label  class="form-label "><b>Region</b></label></td>
                                    <td><input type="text" class="form-control" name="region" id=""></td>
                                </tr>
                                <tr>
                                    <td><label  class="form-label "><b>wereda</b></label></td>
                                    <td><input type="text" class="form-control" name="wereda" id=""></td>
                                </tr>
                                <tr>
                                    <td><label  class="form-label "><b>village</b></label></td>
                                    <td><input type="text" class="form-control" name="village" id=""></td>
                                </tr>
                                <tr>
                                    <td><label  class="form-label "><b>phone no</b></label></td>
                                    <td><input type="number" class="form-control" name="phone" id=""></td>
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
                                

                                <tr><td><button type="submit" class="btn btn-success width" name="update">update</button></td>
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
if(isset($_POST['update']))
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
    $update = "update `tutor_register`
    set name = '$name',gender=' $gender ',email='$email',grade='$grade',region='$region',
    wereda='$wereda',village='$village',phone='$phone',teacher_gender='$teacher_gender'";
    $query= mysqli_query($conn,  $update);
    if($query){
        echo "<script>alert('successfully updated!!!');</script>";
        echo "<script>window.location='view_tutor.php';</script>";
}
}
function validate($data){
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    $data=trim($data);
    return $data;
    #include('session.php');

}

?>

	
 
                                                                         
</body>
</html>