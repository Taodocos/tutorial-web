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
    <title>table tutor</title>
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
									<li class="nav-item">
                                        <a class="nav-link fw-bold" href="upload.php"><b>upload</b></a>
                                    </li>
                                    <li class="nav-item">
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
            <h3 class="fw-bold display-6 text-center ">Registered custemer to take tutor</h3>
            <div class="row my-12 align-items-center justify-content-center fw-light g- 5">
                <div class="col-12 col-lg-8 col-xl-12 shadow bg-white">
                    <div class="card-border-0">
                        <div class="card-body text-center py-4">
<div class="container">
		<table id="example" class="table table-stripped">
						<thead>
							<tr>
							    <th style="width:5;">Id</th>
								<th style="width:5;">Name</th>
								<th style="width:5;">Gender</th>
								<th style="width:5;">Email</th>
								<th style="width:5;">Grade</th>
								<th style="width:5;">Region</th>
								<th style="width:5;">Wereda</th>
                                <th style="width:5;">Village</th>
								<th style="width:5;">Phone no</th>
								<th style="width:5;">teacher_gender</th>
							</tr>
						</thead>
                          <tbody>

<?php

   include("conn.php");
#if(isset($_POST['view'])){   
#include("DBof-Gibi_conn.php");   
$select = mysqli_query($conn, "select * from tutor_register"); 
while ($row = mysqli_fetch_assoc($select)) {
	$id=$row['id'];
	$name = $row['name'];
   $gender= $row['gender'];
	$email = $row['email'];
	$grade = $row['grade'];
	$region= $row['region'];
    $wereda= $row['wereda'];
	$village = $row['village'];
	$phone= $row['phone'];
	$teacher_gender= $row['teacher_gender'];
 {
 	echo'<tr>';
 	    echo'<th scope="row">'.$id.'';
		echo '<td>' .$name. '</td>';
		echo '<td>' .$gender . '</td>';
		echo '<td>' . $email . '</td>';
		echo '<td>' .$grade . '</td>';
		echo '<td>' .$region. '</td>';
		echo '<td>' .$wereda . '</td>';
		echo '<td>' . $village . '</td>';
		echo '<td>' .$phone. '</td>';
		echo '<td>' .$teacher_gender. '</td>';
		?>
		<td>
	<button class="btn btn-secondary"><a href="update.php?id=<?php echo   $id  ;?>" class="text-black">update</a></button>
	</td>
	<td><button class="btn btn-danger"><a href="delete.php?id=<?php echo   $id  ;?>"class="text-black">delete</a></button>
</td>
		<?php
	}}
	    
	                          
?>

</tr>
</tbody>
</table>
</body>
<footer class=" border-secondary shadow-lg bg-black ">
                
                
                     <p class="text-white text-right">  &copy;2024 ALICOTUTOR. All rights reserved</p>
              
                    
             </footer>
</html>
	
	