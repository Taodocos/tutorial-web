<!DOCTYPE html>
<html>
<head>
	<?php 
	//include_once('header.php');
	session_start();
    if(isset($_GET['logged']))
	{
		Header("location:home.php");
		session_destroy();
		
	} //<link rel="stylesheet" href="styles/slide1.css" type="text/css"/>
 
 ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css"rel="stylesheet" />
    <script src="js/bootstrap.min.js"></script>
    <title>post</title>
</head>
<body>
<section class="bg-light">
<tr>
                <td>
                    <nav class="navbar navbar-expand-md navbar-light fixed-top border-secondary shadow-lg bg-white">
                        <div class="container-xxl">
                            <h1 class="navbar-brand"><B>ALICO TUTORIAL</B></h1>

                        </div>
                        <div class="collaps navbar-collaps justify-content-end align-center"id="main-nav">
                            
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="home.html"><b>Home</b></a>
                                </li>

                                
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="loginas.php"><b>login</b></a>
                                </li>
                               
                                
                            </ul>
                        </div>

                    </nav>
        <div class="container-lg my-5 justify-content-center align-items-center">
            <h3 class="fw-bold display-6 text-center ">posts</h3>
            <div class="row my-12 align-items-center justify-content-center fw-light g- 5">
                <div class="col-12 col-lg-8 col-xl-8 shadow bg-white">
                    <div class="card-border-0">
                        <div class="card-body text-center py-4">
<div class="container">
		<table id="example" class="table table-stripped">
				

<?php

   include("conn.php");
#if(isset($_POST['post'])){   
#include("DBof-Gibi_conn.php");   
$select = mysqli_query($conn, "select * from upload order by id desc"); 
while ($row = mysqli_fetch_assoc($select)) {
	//$id=$row['id'];
	$info = $row['info'];
	$image= $row['image'];
 {
 	echo'<tr>';
 	   // echo'<th scope="row">'.$id.'';
		echo '<td>' . $info . '</td>';
		
		
		?>
        </tr>
        <tr>
		<td><img width="400" height="300" src='pictures/<?php  echo $image;?>'></td>
		<td>
	<!--<button class="btn btn-secondary"><a href="update.php?id=<?php echo   $id  ;?>" class="text-black">update</a></button>
	<td><button class="btn btn-danger"><a href="delete.php?id=<?php echo   $id  ;?>"class="text-black">delete</a></button>
</td>--->
		<?php
	}}
	    
#}                 
?>

</tr>
</tbody>
</table>
</body>
<footer class="row my-7 align-items-center mag justify-content-center fw-light g-8 border-secondary shadow-lg bg-black ">
                
<footer class=" border-secondary shadow-lg bg-black ">
                
                
                     <p class="text-white text-right">  &copy;2024 ALICOTUTOR. All rights reserved</p>
              
                    
             </footer>
             
</html>
	
	