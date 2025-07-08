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
    .form-section {
      margin-bottom: 2rem;
    }
  </style>
    <?php
    include("header.php");
    include("connection.php");
    ?>
<div class="container my-4">
  <h2 class="mb-4">Add New Recipe</h2>

  <form>
    <!-- Recipe Name -->
    <div class="form-section">
      <label for="recipeName" class="form-label"><strong>Recipe Name</strong></label>
      <input type="text" class="form-control" id="recipeName" name="recipeName" required>
    </div>

    <!-- Image Upload -->
    <div class="form-section">
      <label for="recipeImage" class="form-label"><strong>Recipe Image</strong></label>
      <input type="file" class="form-control" id="recipeImage" name="recipeImage" accept="image/*">
    </div>

    <!-- Times and Difficulty -->
    <div class="form-section row">
      <div class="col-md-4">
        <label for="prepTime" class="form-label">Prep Time</label>
        <input type="text" class="form-control" id="prepTime" placeholder="e.g., 30 mins">
      </div>
      <div class="col-md-4">
        <label for="cookTime" class="form-label">Cook Time</label>
        <input type="text" class="form-control" id="cookTime" placeholder="e.g., 1 hour">
      </div>
      <div class="col-md-2">
        <label for="servings" class="form-label">Servings</label>
        <input type="number" class="form-control" id="servings" placeholder="e.g., 4">
      </div>
      <div class="col-md-2">
        <label for="difficulty" class="form-label">Difficulty</label>
        <select class="form-select" id="difficulty">
          <option>Easy</option>
          <option>Medium</option>
          <option>Hard</option>
        </select>
      </div>
    </div>

    <!-- Ingredients -->
    <div class="form-section">
      <label class="form-label"><strong>Ingredients</strong></label>
      <div id="ingredientList">
        <input type="text" class="form-control mb-2" name="ingredients[]" placeholder="e.g., 2 cups flour">
      </div>
      <button type="button" class="btn btn-sm btn-outline-primary" onclick="addIngredient()">Add More</button>
    </div>

    <!-- Instructions -->
    <div class="form-section">
      <label for="instructions" class="form-label"><strong>Instructions</strong></label>
      <textarea class="form-control" id="instructions" name="instructions" rows="5" required></textarea>
    </div>

    <!-- Nutrition Info -->
    <div class="form-section row">
      <div class="col-md-6">
        <label for="calories" class="form-label">Calories</label>
        <input type="text" class="form-control" id="calories" name="calories">
      </div>
      <div class="col-md-6">
        <label for="protein" class="form-label">Protein</label>
        <input type="text" class="form-control" id="protein" name="protein">
      </div>
    </div>

    <!-- Tags and Categories -->
    <div class="form-section row">
      <div class="col-md-6">
        <label for="tags" class="form-label">Tags (comma-separated)</label>
        <input type="text" class="form-control" id="tags" name="tags" placeholder="e.g., easy, dessert, vegan">
      </div>
      <div class="col-md-6">
        <label for="categories" class="form-label">Categories</label>
        <select class="form-select" id="categories" name="categories">
          <option>Appetizer</option>
          <option>Main Dish</option>
          <option>Dessert</option>
          <option>Beverage</option>
        </select>
      </div>
    </div>

    <!-- Submit -->
    <div class="form-section">
      <button type="submit" class="btn btn-primary" id="add-button">Add Recipe</button>
    </div>
  </form>
</div>

<script>
  function addIngredient() {
    const container = document.getElementById("ingredientList");
    const input = document.createElement("input");
    input.type = "text";
    input.name = "ingredients[]";
    input.className = "form-control mb-2";
    input.placeholder = "e.g., 1 tsp salt";
    container.appendChild(input);
  }
</script>
    <?php
    include("footer.php");
    ?>
</body>
</html>
