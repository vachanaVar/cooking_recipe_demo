<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title></title>
</head>
<style>
    body{

    }
.card{
    margin:60px;
}
</style>
<body>
    <?php
    include("header.php");
    include("connection.php");
    ?>
    <!-- top card -->
    <div class="card bg-dark text-white" style="width:70%;">
        <img src="./img/Rotisserie-chicken.jpg" class="card-img" alt="food" id="top-pic">
        <div class="card-img-overlay">
            <h5 class="card-title">My Personal Recipe Website</h5>
            <p class="card-text">If you are seeing this then that means I'm sharing my super secret special recipes with you. My food tastes so good it can make you orgasm</p>
            <p class="card-text">This site belongs to Kurtis Conner</p>
        </div>
    </div>
<sectin>

    <!-- middle card -->
     <div class="card-group">
  <div class="card">
    <img src="./img/tiramisu.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">My best Main Course</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="./img/tiramisu.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">My best Dessert</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="./img/tiramisu.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">My Best Appetizer</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</sectin>
<?php
    include("footer.php");
    ?>
</body>
</html>
