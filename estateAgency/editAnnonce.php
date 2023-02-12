<?php 
require "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solaz Agency</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
   <div id="header" style="background-color:white;color:black;">
        <div> 
<h1>lorem</h1>
        </div>
        <div>
            <ul>
                <li>lorem</li>
                <li>lorem</li>
                <li>lorem</li>
                <li>lorem</li>
            </ul>
        </div>
        <div>
           <h2> Admin </h2>
        </div>
    </div>
<section id="sec2">
<h2>Edit the annonce :</h2>
<!-- ########## add annnonce modal  -->
<?php
if(isset($_GET['id'])){
$annonce_id = mysqli_real_escape_string($conn,$_GET['id']);
$query = "SELECT * FROM annonce WHERE id='$annonce_id' ";
$query_run = mysqli_query($conn,$query);
if(mysqli_num_rows($query_run)){
$annonce = mysqli_fetch_array($query_run);

?>



    <form action="code.php" method="POST" enctype="multipart/form-data" id="editInfo">
    <input type="hidden" name="annonce_id" id="title" required value="<?=$annonce['id'] ?>">
    <div>
            <label for="image">Image :</label>
            <input type="file" name="image" id="image" required value="<?=$annonce['image_path'] ?>">
        </div>
    <div>
        <label for="title">Title :</label>
        <input type="text" name="title" id="title" required value="<?=$annonce['title'] ?>">
    </div>
    <div>
        <label for="description">Description :</label>
        <input type="text" name="description" id="description" required value="<?=$annonce['description'] ?>">
    </div>
    <div>
        <label for="surface">Surface :</label>
        <input type="number" name="surface" id="surface" required value="<?=$annonce['surface'] ?>">
    </div>
    <div>
        <label for="address">Address :</label>
        <input type="text" name="address" id="address" required value="<?=$annonce['address'] ?>">
    </div>
    <div>
        <label for="amount">Amount :</label>
        <input type="number" name="amount" id="amount" required value="<?=$annonce['amount'] ?>">
    </div>
    <div>
        <select name="type" id="type" required value="<?=$annonce['type_annonce'] ?>">
            <option value="vente">Sale</option>
            <option value="rent">Rent</option>
        </select>
    </div>
    <button type="submit" id="annonce" name="update">Update</button>  
</form>
<?php
}else{
echo "<h2>Not Found !</h2>";
}

}
?>
<footer class="footer">
     <div class="containerr">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>online shop</h4>
          <ul>
            <li><a href="#">watch</a></li>
            <li><a href="#">bag</a></li>
            <li><a href="#">shoes</a></li>
            <li><a href="#">dress</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
     </div>
  </footer>

</section>
</body>
