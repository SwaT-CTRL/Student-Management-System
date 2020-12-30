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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/11a408d726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/addstudent.css">
    <title>Add Students</title>
</head>
<body>
<section class="header-extradiv">
        <div class="container hero text-center">
            <h1 class="text-center font-weight-bold text-white">Welcome Admin</h1>
        </div>
</section>
    <div class="row">
            <div class="col-md-4"></div>
            
            <div class="col-md-4">
                <form action="addstudent.php" method="post" enctype="multipart/form-data">
                    <div class="form-group text-white">
                        <label>Enrollment No.</label>
                        <input type="text" name="rollno" class="form-control text-white" required="">
                    </div>
                    <div class="form-group text-white">
					    <label>Name</label>
					    <input type="text" name="name" class="form-control text-white" required="">
                    </div>
                    <div class="form-group text-white">
					    <label>City</label>
					    <input type="text" name="city" class="form-control text-white" required="">
                    </div>
                    <div class="form-group text-white">
					    <label>Contact No.</label>
					    <input type="text" name="pcont" class="form-control text-white" required="">
                    </div>
                    <div class="form-group text-white">
					    <label>Standerd</label>
					    <input type="number" name="standerd" class="form-control text-white" required="">
                    </div>
                    <div class="form-group text-white">
					    <label>Photo</label>
					    <input type="file" name="image" class="form-control text-white" required="">
                    </div>
                    <button class="btn" name="add_student" method="post">Add Student</button>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>


<?php 

    if(isset($_POST['add_student'])){
        include("dbcon.php");
        $rollno = $_POST['rollno'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $pcont = $_POST['pcont'];
        $standerd = $_POST['standerd'];
        $filename=$_FILES['image']['name'];
        $tempname=$_FILES['image']['tmp_name'];
        $folder="dataimg/".$filename;       
        move_uploaded_file($tempname,$folder);

        $sql="INSERT INTO student (rollno,name,city,pcont,standerd,image)
         VALUES ('$rollno','$name','$city','$pcont','$standerd','$filename')";
        if(!mysqli_query($con,$sql)){
            echo("Oops! Something Went Worng!!!");
        }
        else{
            echo("Inserted Successfully!!");
            header("location:addstudent.php");

        }
    }

?>