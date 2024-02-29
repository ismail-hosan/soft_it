<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Add User</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row ">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h2>Edit Data</h2>
            <form autocomplete="off" action="" method="post">
              <?php
              require 'config.php';
              $id = $_GET["id"];
              $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
              ?>
              <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
              <label for="">Name</label>
              <input type="text" id="name" value="<?php echo $rows['name']; ?>"><br>


              <label for="">Email</label>
              <input type="text" id="email" value="<?php echo $rows['email']; ?>"><br>


              <label for="">Gender</label>
              <select class="" id="gender">
                <option value="Male" <?php if ($rows["gender"] == "Male")
                  echo "selected"; ?>>Male</option>
                <option value="Female" <?php if ($rows["gender"] == "Female")
                  echo "selected"; ?>>Female</option>
              </select> <br>
              <button type="button" class="btn btn-primary" onclick="submitData('edit');">Edit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br>
    <a href="index.php">Go To Index</a>
    <?php require 'script.php'; ?>
</body>

</html>