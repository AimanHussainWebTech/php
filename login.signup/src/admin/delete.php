<?php 
include 'config.php';
$ID = $_GET['parentid'];
$delquery = "DELETE FROM parents WHERE parent_id = '$ID' ";

if(mysqli_query($conn,$delquery)){

header("location: index.php");
echo"dede";



} else{

    echo "error";



}
$Hid = $_GET['hospitalid'];
$delquery2 = "DELETE FROM hospitals WHERE hospital_id = '$Hid' ";


if(mysqli_query($conn,$delquery2)){

header("location: hospitalTable.php");
echo"dede";



} else{

    echo "error";


}
$chid = $_GET['childid'];
$delquery3 = "DELETE FROM children WHERE child_id = '$chid' ";


if(mysqli_query($conn,$delquery3)){

header("location: childrenTable.php");
echo"dede";



} else{

    echo "error";


}
$vacid = $_GET['vaccid'];
$delquery4 = "DELETE FROM vaccinations WHERE vaccinations_id = '$vacid' ";


if(mysqli_query($conn,$delquery4)){

header("location: vaccinationsTable.php");
echo"dede";



} else{

    echo "error";


}










?>