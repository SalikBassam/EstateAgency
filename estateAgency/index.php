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
    <div id="header">
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
    <section id="sec1">
        <img src="./images/francesca-tosolini-tHkJAMcO3QE-unsplash (1).jpg" alt="">
   <div id="intro">
    <h1>Connecting people &
        Beijing properties perfectly</h1>
        <p>We are recognized for exceeding client expectations and delivering great results through dedication, ease of process, and extraordinary services to our worldwide clients.</p>
   </div>
   <div id="panelSearch">
<form action="" method="post">
    <div>
    <label for="type">Type</label>
    <select name="type" id="types">
        <option value="sell">Sell</option>
        <option value="rent">Rent</option>
    </select>
</div>
<div>
    <label for="min">Min price</label>
    <input type="number" name="min" id="min" placeholder="45$">
    </div>
    <div>
    <label for="max">Max price</label>
    <input type="number" name="max" id="max" placeholder="1500$">
</div>
<div>
<button type="submit">Search</button>
</div>
</form>
   </div>
    </section>
<section id="sec2">
<h2>Discover the latest properties in Morocco</h2>
<p class="desc">We are very proud of the service we provide and what our guests have to say about us. Our locations and services prove we are the best.</p>
<button type="submit" id="add">Add Announce</button>
<!-- ########## add annnonce modal  -->
<div class="dark"></div>
<div id="add-model">

    <form action="code.php" method="POST" enctype="multipart/form-data" id="infoForm">
        <p class="close">x</p>
        <div>
            <label for="image">Image :</label>
            <input type="file" name="image" id="image" required>
        </div>
    <div>
        <label for="title">Title :</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="description">Description :</label>
        <input type="text" name="description" id="description" required>
    </div>
    <div>
        <label for="surface">Surface :</label>
        <input type="number" name="surface" id="surface" required>
    </div>
    <div>
        <label for="address">Address :</label>
        <input type="text" name="address" id="address" required>
    </div>
    <div>
        <label for="amount">Amount :</label>
        <input type="number" name="amount" id="amount" required>
    </div>
    <div>
        <select name="type" id="type" required>
            <option value="vente">Sale</option>
            <option value="rent">Rent</option>
        </select>
    </div>
    <button type="submit" id="annonce" name="annonce">Annonce</button>  
</form>
</div>
<!-- ############# end add modal -->
<div id="annonces">
<?php 
    $query = "SELECT * FROM annonce";
    $query_run= mysqli_query($conn , $query);
if (mysqli_num_rows($query_run) > 0) {
    foreach ($query_run as $annonce) {
?>
    <div class="annonce">
        <img src="<?= $annonce['image_path']; ?>" alt="">
        <div class="inf">
        <p><?= $annonce['amount']; ?> Dh</p>
        <h3><?= $annonce['title']; ?></h3>
    </div>
   
    <div class="inf2">
    <div>
    <p><?= $annonce['address']; ?></p>
</div>
<div>
    <p style="color:black;"><b>For <?= $annonce['type_annonce']; ?></b></p>
</div>
<div>
    <form action="code.php" method="POST">
    <button type="submit" class="more"> <a href="viewannonce.php?id=<?= $annonce['id']?>"> More </a></button>
</form>
</div>
</div>
<div class="btns">
   <img src="./images/delete (1).png" alt="" id="dlt">
  <a href="editAnnonce.php?id=<?= $annonce['id']?>"> <img src="./images/delete (2).png" alt=""></a>
</div>
    <div class="deleteModal">
    <div class="dltChild">
       <p><b><?= $annonce['title']; ?>: </b></p>
    </div>
    <p>Are you sure you want to delete this item ? </p>
    <div class="ynn">
        <form action="code.php" method="POST">
        <button type="button" class="no">No</button>
        <button type="submit" name="delete_annonce" value="<?= $annonce['id']  ?>" class="yes">Yes</button>
    </form>
    </div>
    </div>
    </div>

<?php
    }
    }else{
    echo "<p>There is no annonces :(</p>";
}
    ?>
</div>

</section>
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

    <script src="main.js"></script>
</body>
</html>