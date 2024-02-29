<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Index</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4 style="text-align:center;background:#d8d8dd;padding:20px;">Form Data</h4>
            <div class="card-body">
              <a href="adduser.php" class="btn btn-primary">Add User</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    require 'config.php';
                    $rows = mysqli_query($conn, "SELECT * FROM users");
                    $i = 1;
                    ?>
                    <?php foreach ($rows as $row): ?>
                    <tr id=<?php echo $row["id"]; ?>>
                      <td>
                        <?php echo $i++; ?>
                      </td>
                      <td>
                        <?php echo $row["name"]; ?>
                      </td>
                      <td>
                        <?php echo $row["email"]; ?>
                      </td>
                      <td>
                        <?php echo $row["gender"]; ?>
                      </td>
                      <td>
                        <a href="edituser.php?id=<?php echo $row['id'] ?>" class="btn btn-warning ">Edit</a>
                        <button type="button" class="btn btn-danger"
                          onclick="submitData(<?php echo $row['id']; ?>);">Delete</button>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <?php require 'script.php'; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>