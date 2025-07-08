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
    <?php
    include("header.php");
    include("connection.php");
    ?>
<div class="container my-5">
  <h2 class="mb-4">Manage Tags & Categories</h2>
  <div class="row">
    <!-- Tags Section -->
    <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-header">
          <strong>Tags</strong>
        </div>
        <div class="card-body">
          <!-- Existing Tags List -->
          <ul class="list-group mb-3" id="tagList">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              #easy
              <span>
                <button class="btn btn-sm btn-outline-secondary">Edit</button>
                <button class="btn btn-sm btn-outline-danger">Delete</button>
              </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              #vegan
              <span>
                <button class="btn btn-sm btn-outline-secondary">Edit</button>
                <button class="btn btn-sm btn-outline-danger">Delete</button>
              </span>
            </li>
            <!-- Add more tags here -->
          </ul>

          <!-- Add New Tag -->
          <form class="d-flex" onsubmit="event.preventDefault(); addTag();">
            <input type="text" class="form-control me-2" id="newTag" placeholder="Add new tag">
            <button type="submit" class="btn btn-primary">Add</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Categories Section -->
    <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-header">
          <strong>Categories</strong>
        </div>
        <div class="card-body">
          <!-- Existing Categories List -->
          <ul class="list-group mb-3" id="categoryList">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Dessert
              <span>
                <button class="btn btn-sm btn-outline-secondary">Edit</button>
                <button class="btn btn-sm btn-outline-danger">Delete</button>
              </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Main Course
              <span>
                <button class="btn btn-sm btn-outline-secondary">Edit</button>
                <button class="btn btn-sm btn-outline-danger">Delete</button>
              </span>
            </li>
            <!-- Add more categories here -->
          </ul>

          <!-- Add New Category -->
          <form class="d-flex" onsubmit="event.preventDefault(); addCategory();">
            <input type="text" class="form-control me-2" id="newCategory" placeholder="Add new category">
            <button type="submit" class="btn btn-primary">Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function addTag() {
    const input = document.getElementById('newTag');
    const tag = input.value.trim();
    if (tag !== '') {
      const li = document.createElement('li');
      li.className = 'list-group-item d-flex justify-content-between align-items-center';
      li.innerHTML = `#${tag} <span>
          <button class="btn btn-sm btn-outline-secondary">Edit</button>
          <button class="btn btn-sm btn-outline-danger">Delete</button>
        </span>`;
      document.getElementById('tagList').appendChild(li);
      input.value = '';
    }
  }

  function addCategory() {
    const input = document.getElementById('newCategory');
    const category = input.value.trim();
    if (category !== '') {
      const li = document.createElement('li');
      li.className = 'list-group-item d-flex justify-content-between align-items-center';
      li.innerHTML = `${category} <span>
          <button class="btn btn-sm btn-outline-secondary">Edit</button>
          <button class="btn btn-sm btn-outline-danger">Delete</button>
        </span>`;
      document.getElementById('categoryList').appendChild(li);
      input.value = '';
    }
  }
</script>

<?php
    include("footer.php");
    ?>
</body>
</html>