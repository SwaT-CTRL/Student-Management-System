<?php 
include("dbcon.php");
$rollno = $_POST['rollno'];
$name = $_POST['name'];
$city = $_POST['city'];
$pcont = $_POST['pcont'];
$standerd = $_POST['standerd'];
$id = $_POST['sid'];
$filename=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
$folder="dataimg/".$filename;       
move_uploaded_file($tempname,$folder);

$sql="UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcont', `standerd` = '$standerd', `image` = '$filename' WHERE `id` = '$id'";
if(!mysqli_query($con,$sql)){
    echo("Oops! Something Went Worng!!!");
}
else{
    echo("Inserted Successfully!!");
    header("location:updateform.php?sid=$id");

}
?>