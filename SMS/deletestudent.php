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
    <link rel="stylesheet" type="text/css" href="css/updatestudent.css">
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
                <form action="deletestudent.php" method="post" enctype="multipart/form-data">
                    <div class="form-group text-white">
                        <label>Standerd</label>
                        <input type="number" name="standerd" class="form-control text-white" required="">
                    </div>
                    <div class="form-group text-white">
					    <label>Name</label>
					    <input type="text" name="name" class="form-control text-white" required="">
                    </div>
                    <button class="btn" name="update_student" method="post">Search</button>
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





<div class="table-responsive pt-5">

<!--Table-->
<table class="table"  style="text-align:center">

  <!--Table head-->
  <thead>
    <tr>
      <th class="th-lg text-white">No</th>
      <th class="th-lg text-white">Image</th>
      <th class="th-lg text-white">Name</th>
      <th class="th-lg text-white">Roll No</th>
      <th class="th-lg text-white">Edit</th>
    </tr>
  </thead>
  <!--Table head-->
  <tbody>
<?php 

if(isset($_POST['update_student'])){
    include('dbcon.php');

    $standerd = $_POST['standerd'];
    $name = $_POST['name'];

    $sql="SELECT * FROM `student` WHERE `standerd`='$standerd' AND `name` LIKE '%$name%'";
    $query_run = mysqli_query($con, $sql);

    if(mysqli_num_rows($query_run)<1){
        echo "<tr><td>No Records Found</td></tr>";
    }
    else{

        $count = 0;
        while($data = mysqli_fetch_assoc($query_run)){
            $count++;
            ?>

            <tr class="pt-2">
            <td class="th-lg text-white"><?php echo $count; ?></td>
            <td class="th-lg text-white"><img src="dataimg/<?php echo $data['image']; ?>" style="max-width:100px;" /></td>
            <td class="th-lg text-white"><?php echo $data['name']; ?></td>
            <td class="th-lg text-white"><?php echo $data['rollno']; ?></td>
            <td class="th-lg text-white"><a href="deleteform.php?sid=<?php echo $data['id']; ?>" class="btn text-white">Delete</a></td>
            </tr>

            <?php
        }
    }
} 
?>

  </tbody>
</thead>
</table>
</div>