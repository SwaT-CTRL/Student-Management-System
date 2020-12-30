<?php 
session_start();
// if(isset($_SESSION['uid'])){
//     echo "";
// }
// else{
//     header("location:login.php");
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/11a408d726.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/admindash.css">
    <title>Admin Dashboard</title>
</head> 

<body>

<!-- <h4><a href="logout.php" style="text-decoration:none; color:#fff; float:right; >Logout</a></h4> -->
    
<section class="header-extradiv">
        <div class="container hero text-center">
            <h1 class="text-center font-weight-bold">Welcome Admin</h1>
            <button class="btn margin-right:500;" align="right"><a href="logout.php" style="text-decoration:none; color:#fff">Logout</a></button>
            <p class="text-center pt-1">Here all things under your control.</p>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-2x fa fa-user" aria-hidden="true"></i></a>
                    <h2>Add Students</h2>
                    <a href="addstudent.php" style="text-decoration:none; color:#fff;"><button class="btn" type="submit" name="add" value="Add">Add</button></a>        
                </div>
                <div class="extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-2x fa fa-pencil" aria-hidden="true"></i></a>
                    <h2>Update Students</h2>
                    <a href="updatestudent.php" style="text-decoration:none; color:#fff;"><button class="btn" type="submit" name="update" value="Update">Update</button></a>
                </div>
                <div class="extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-2x fa fa-ban" aria-hidden="true"></i></a>
                    <h2>Delete Students</h2>
                    <a href="deletestudent.php" style="text-decoration:none; color:#fff;"><button class="btn" type="submit" name="delete" value="Delete">Delete</button></a>
                </div>
            </div>
        </div>
</section> 


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>


</html>
