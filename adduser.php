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
            <h2>Add User</h2>
            <form autocomplete="off" action="" method="post">

              <label for="">Name</label>
              <input class="form-contol" type="text" id="name" value=""><br>


              <label for="">Email</label>
              <input class="form-contol" type="text" id="email" value=""><br>


              <label for="">Gender</label>
              <select class="form-contol" id="gender"><br>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select><br>
              <button type="button" class="btn btn-success" onclick="submitData('insert');">Insert</button>
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