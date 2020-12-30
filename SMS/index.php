<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Student Management System</title>
</head>
<body>
    <h3 align="right" style="margin-right:20px;"><a href="login.php" class="btn" style="font-size:16px; padding: 10px 35px;">Admin Login</a></h3>
    <h1 align="center" class="font-weight-bold" style="color:#fff;">Welcome to Student Management System</h1>
    <h1 align="center" class="font-weight-bold" style="font-size:25px; color:#fff;">Student Information</h1>
    <form method="post" action="index.php">
        <table style="width:50%;" align="center">
            <tr>
                <td align="right" class="form-group" style="color:#fff; font-size:20px;">Choose Standerd</td>
                <td>
                    <select name="standerd" class="form-control" style="color:#fff;" required>
                        <option value="Select"><span style="color:#fff;">Select</span></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </td>
            
                <td align="right" class="form-group" style="color:#fff; font-size:20px;">Enter Roll No.</td>
                <td><input type="text" name="rollno" class="form-control" style="color:#fff;" required></td>
                <td colspan="2" align="right"><input type="submit" name="show" value="Show" class="btn" style="font-size:16px; padding: 8px 30px;" ></td>
            </tr>
        </table>
    </form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>




<div class="table-responsive pt-5">

<!--Table-->
<table class="table"  style="text-align:center;">

  <!--Table head-->
  <thead>
    <tr>
      <th class="th-lg" style="text-align:center; color:#fff;">Image</th>
      <th class="th-lg" style="text-align:center; color:#fff;">Roll No.</th>
      <th class="th-lg" style="text-align:center; color:#fff;">Name</th>
      <th class="th-lg" style="text-align:center; color:#fff;">City</th>
      <th class="th-lg" style="text-align:center; color:#fff;">Contact</th>
      <th class="th-lg" style="text-align:center; color:#fff;">Standerd</th>
    </tr>
  </thead>
  <!--Table head-->
  <tbody>
<?php 

if(isset($_POST['show'])){
    include('dbcon.php');

    $standerd = $_POST['standerd'];
    $rollno = $_POST['rollno'];

    $sql="SELECT * FROM `student` WHERE `rollno` = '$rollno' AND `standerd` = '$standerd'";
    $query_run = mysqli_query($con, $sql);

    if(mysqli_num_rows($query_run)<1){
        echo "<tr><td>No Records Found</td></tr>";
    }
    else{
        
        while($data = mysqli_fetch_assoc($query_run)){
            
            ?>

            <tr>
            <td><img src="dataimg/<?php echo $data['image']; ?>" style="max-width:100px;" /></td>
                <td  style="text-align:center; color:#fff;"><?php echo $data['rollno']; ?></td>
                <td  style="text-align:center; color:#fff;"><?php echo $data['name']; ?></td>
                <td  style="text-align:center; color:#fff;"><?php echo $data['city']; ?></td>
                <td  style="text-align:center; color:#fff;"><?php echo $data['pcont']; ?></td>
                <td  style="text-align:center; color:#fff;"><?php echo $data['standerd']; ?></td>
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