<?php 
require "connect.php";
if(isset($_POST['delete_annonce'])){
$annonce_id = mysqli_real_escape_string($conn,$_POST['delete_annonce']);
$query = "DELETE FROM annonce WHERE id='$annonce_id' ";
$query_run = mysqli_query($conn,$query);

if($query_run){
    header("Location: index.php");
}

}

if(isset($_POST["annonce"])){
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $image = $_FILES['image'];
    $image_path = "images/" . basename($image['name']);
    move_uploaded_file($image['tmp_name'], $image_path);
$description = mysqli_real_escape_string($conn,$_POST['description']);
$surface = mysqli_real_escape_string($conn,$_POST['surface']);
$address = mysqli_real_escape_string($conn,$_POST['address']);
$amount = mysqli_real_escape_string($conn,$_POST['amount']);
$type = mysqli_real_escape_string($conn,$_POST['type']);

$query = "INSERT INTO annonce(title,image_path,description,surface,address,amount,type_annonce) 
VALUES('$title','$image_path','$description','$surface','$address','$amount','$type')";
$query_run = mysqli_query($conn,$query);
}



if(isset($_POST["update"])){

    
    $annonce_id = mysqli_real_escape_string($conn,$_POST['annonce_id']);
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $image = $_FILES['image'];
    $image_path = "images/" . basename($image['name']);
    move_uploaded_file($image['tmp_name'], $image_path);
$description = mysqli_real_escape_string($conn,$_POST['description']);
$surface = mysqli_real_escape_string($conn,$_POST['surface']);
$address = mysqli_real_escape_string($conn,$_POST['address']);
$amount = mysqli_real_escape_string($conn,$_POST['amount']);
$type = mysqli_real_escape_string($conn,$_POST['type']);

$query = " UPDATE annonce SET title='$title' ,
 image_path='$image_path',
 description='$description',
 surface='$surface',
 address='$address',
 amount='$amount',
 type_annonce='$type'
 WHERE id='$annonce_id' ";
 $query_run = mysqli_query($conn,$query);
}







header("Location: index.php");
?>
