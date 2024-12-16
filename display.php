<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">

</head>

<body>
    <div class="container my-5">
        <button class=" btn btn-primary">
            <a href="user.php" class="text-light text-decoration-none">
                Add User
            </a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM `phptest`";
                $result = mysqli_query($con, $sql);
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    $password = $row['password'];

                    echo '<tr>
      <th scope="row">' . $i ++ . '</th>
      <td>' . $name . '</td>
      <td>' . $email . '</td>
      <td>' . $mobile . '</td>
      <td>' . $password . '</td>
      <td>
      <button class="btn btn-primary">
      <a href="update.php?id=' . $id . '" class="text-light text-decoration-none">
      Update
      </a>
      </button>
      <button class="btn btn-danger">
      <a href="delete.php?id=' . $id . '" class="text-light text-decoration-none">
      Delete
      </a>
      </button>
      </td>
      </tr>';
                }
                ?>

                <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr> -->
            </tbody>
        </table>
    </div>
</body>

</html>