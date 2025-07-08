<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
  <style>
    .recipe-name {
      text-decoration: none !important;
      color: black  !important;
    }
    .recipe-name:hover {
      text-decoration: underline !important;
      color: blue  !important;
    }
  </style>
    <?php
    include("header.php");
    include("connection.php");
    ?>
    <div class="container my-4">
      <!-- Search & Filter -->
    <div class="row mb-4">
        <div class="col-md-8 mb-2 mb-md-0 d-flex align-items-center">
            <input type="text" class="form-control me-2" placeholder="search">
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Appetizer</a></li>
                    <li><a class="dropdown-item" href="#">Main Dish</a></li>
                    <li><a class="dropdown-item" href="#">Dessert</a></li>
                    <li><a class="dropdown-item" href="#">Beverage</a></li>
                </ul>
            </div>
        </div>
    </div>
    
      <!-- Recipe List -->
      <div class="row g-4">
        <!-- Repeat this card for each recipe -->
        <div class="col-12">
          <div class="d-flex align-items-start">
            <div class="flex-shrink-0 me-3" style="width: 200px;">
              <img src="./img/cat_kiss.gif" class="img-fluid rounded" alt="Recipe Thumbnail">
            </div>
            <div class="ms-3 flex-grow-1 w-100">
              <div class="d-flex justify-content-between align-items-center">
          <h3 class="mb-0"><a href="recipe_details.php" class="recipe-name">recipe name</a></h3>
          <div class="icons ms-3">
            <a href="#"><img src="./img/delete.png" height="20px;" width="20px;" alt="delete"></a>
            <a href="edit_recipe.php"><img src="./img/edit.png" height="20px;" width="20px;" alt="edit"></a>
          </div>
              </div>
              <div>
                  <p>
              The recipe that grandma used to make. chicken, lots of chicke. brownies, cereal, hot pot with ice cream, even a rainbow meatball. i dont know im just filling text this will be replaced anyway
                  </p>
                  <ul>Cook Time:</ul>
                  <ul>Servings:</ul>
                  <ul>Diifficulty</ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>
</html>
