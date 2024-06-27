<?php
include('conn.php');
//$id= $_GET['id'];
if(isset($_POST['submit']))
{
    $info=validate($_POST['info']);
    $image=validate($_POST['image']);
   
    
    
    $insert = "INSERT INTO  upload (info,image)
    values(' $info','$image')";
    $query= mysqli_query($conn, $insert);
    if($query){
        echo "<script>alert('successfully uploaded!!!');</script>";
        echo "<script>window.location='upload.php';</script>";}}
function validate($data){
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    $data=trim($data);
    return $data;
    #include('session.php');

}
if(isset($_POST['reset']))
{
    $image="";
    $info="";
   
}
?>
<!DOCTYPE html>
<html>
<head>
<?php 
	//include_once('header.php');
	session_start();
    if(isset($_GET['logged']))
	{
		Header("location:index.php");
		session_destroy();
		
	} //<link rel="stylesheet" href="styles/slide1.css" type="text/css"/>
 
 ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css"rel="stylesheet" />
    <script src="js/bootstrap.min.js"></script>
    <title>upload</title>
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
        <div class="container-lg my-5 justify-content-center align-items-center">
            <h3 class="fw-bold display-6 text-center ">upload</h3>
            <div class="row my-12 align-items-center justify-content-center fw-light g-3 ">
                <div class="col-8 col-lg-8 col-xl-8 shadow bg-white">
                    <div class="card-border-0">
                        <div class="card-body text-center py-4">
                            <form method="post" action="">
                            <table>
                                <tr>
                                    <td><textarea name="info" rows="" cols="80"></textarea></td>
                                    
                                </tr>
                                <tr>
                                
                                    <td> 

                                        <input type="file" value="<?php // echo $myimage; ?> "  name="image" id="img" class="form-control"  accept=".JPG, .PNG, .JPEG,">
                             </td></tr>

                                <tr><td>
                                
                                <button type="submit" class="btn btn-success width" name="submit">save</button>
                           
                               <!-- <button class="btn btn-primary"><a href="post.php?id=<?php echo   $id  ;?>" 
                                    class="text-black">post</a></button>--> </td>
                                    <td><button type="reset" class="btn btn-danger" name="reset">clear</button></td>

                                  
                                </tr>
                           </table>
                           </form>
                        </div>
                    </div>
</body>
</html>
