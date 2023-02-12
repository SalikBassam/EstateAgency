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

    <div class="container">
    <?php
if(isset($_GET['id'])){
$annonce_id = mysqli_real_escape_string($conn,$_GET['id']);
$query = "SELECT * FROM annonce WHERE id='$annonce_id' ";
$query_run = mysqli_query($conn,$query);
if(mysqli_num_rows($query_run)){
$annonce = mysqli_fetch_array($query_run);

?>

        <div class="single-product">
            <div class="row">
                <div class="col-6">
                    <div class="product-image">
                        <div class="product-image-main">
                            <img src="<?= $annonce['image_path']; ?>" alt="" id="product-main-image">
                        </div>
                        <!-- <div class="product-image-slider">
                            <img src="img/tshirt-1.png" alt=""  class="image-list">
                            <img src="img/tshirt-2.png" alt=""  class="image-list">
                            <img src="img/tshirt-3.png" alt=""  class="image-list">
                            <img src="img/tshirt-group.png" alt=""  class="image-list">
                        </div> -->
                    </div>
                </div>
                <div class="col-6">
                    <div class="breadcrumb">
                        <span><a href="index.php">Home</a></span>
                    </div>

                    <div class="product">
                        <div class="product-title">
                            <h2><?= $annonce['title']; ?></h2>
                        </div>
                        <div class="product-rating">
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span class="review">(47 Review)</span>
                        </div>
                        <div class="product-price">
                            <span class="offer-price"><?= $annonce['amount']; ?> Dh</span>
                        </div>

                        <div class="product-details">
                            <h3><span>Description :</span></h3>
                            <p class="desc"><?= $annonce['description']; ?></p>
                            <p><span>Surface : </span><?= $annonce['surface'];?> m2</p>
                            <p class="desc"><span>Address :</span> <?= $annonce['address']; ?></p>
                            <p><span><?= $annonce['date_annonce'];?></span></p>
                        </div>
                        <span class="divider"></span>

                        <div class="product-btn-group">
                            <div class="button buy-now"><i class='bx bxs-zap' ></i> Contact</div>
                            <div class="button heart"><i class='bx bxs-heart' ></i> Add to Wishlist</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
}else{
echo "<h2>Not Found !</h2>";
}

}
?>
    </div>
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

    <!--script-->
    <script src="script.js"></script>
</body>
</html>