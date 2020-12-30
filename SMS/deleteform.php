<?php 
include("dbcon.php");
$id = $_REQUEST['sid'];

$sql="DELETE FROM `student` WHERE `id` = '$id'";
if(!mysqli_query($con,$sql)){
    echo("Oops! Something Went Worng!!!");
}
else{
    echo("Inserted Successfully!!");
    header("location:deletestudent.php");

}
?>