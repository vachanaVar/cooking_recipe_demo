<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php
    include("header.php");
    include("connection.php");
    ?>
  <style>
    .placeholder-box {
      background-color: #ddd;
      height: 150px;
      width: 100%;
    }
    .sidebar-box {
      background-color: #ddd;
      padding: 1rem;
      height: 200px;
    }
  </style>
<div class="container my-4">
  <h2 class="mb-4">recipe name</h2>

  <div class="row">
    <!-- Main Column -->
    <div class="col-lg-8">
      <!-- Banner Image -->
      <div class="placeholder-box mb-3"></div>

      <!-- Info Row -->
      <div class="row text-center mb-4">
        <div class="col">
          <strong>Total time</strong><br>1 hour 30 mins
        </div>
        <div class="col">
          <strong>Prep Time</strong><br>1 hour 30 mins
        </div>
        <div class="col">
          <strong>Cook time</strong><br>1 hour 30 mins
        </div>
        <div class="col">
          <strong>Servings</strong><br>12
        </div>
        <div class="col">
          <strong>Difficulty</strong><br>Easy
        </div>
      </div>

      <!-- Ingredients -->
      <h5>Ingredients</h5>
      <ul>
        <li>egg</li>
        <li>sugar</li>
        <li>flour</li>
        <li>milk</li>
        <li>vanilla</li>
      </ul>

      <!-- Instructions -->
      <h5>Instruction</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula augue id nulla malesuada feugiat.</p>

      <!-- Nutrition Info -->
      <h5>Nutrition Info</h5>
      <p><strong>Calories:</strong> 250</p>
      <p><strong>Protein:</strong> 5g</p>
    </div>

    <!-- Sidebar -->
    <div class="col-lg-4">
      <div class="sidebar-box mb-4">
        <h6>Tags</h6>
        <p>#dessert #easy #quick</p>
      </div>
      <div class="sidebar-box">
        <h6>Categories</h6>
        <p>Desserts, Cakes, Baking</p>
      </div>
    </div>
  </div>
</div>
    <?php
    include("footer.php");
    ?>
</body>
</html>
