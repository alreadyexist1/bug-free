<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee details</title>
    <link rel="stylesheet" type="text/css" href="display.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:wght@600&display=swap">
</head>

<body>
    <div class="container">
        <button class="add"> <a href="add.php">Add employee</a>
        </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">SR NO.</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">GENDER</th>
      <th scope="col">DEPARTMENT</th>
      <th scope="col">OPERATION</th>
    </tr>
  </thead>
  <tbody>
  <?php
$sql = "select * from `crud`";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $gender = $row['gender'];
        $department = $row['department'];

        echo '<tr>
                <th scope="row">' . $id . '</th>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $phone . '</td>
                <td>' . $gender . '</td>
                <td>' . $department . '</td>
                <td>
                <button class="btn update"> <a href="update.php?updateid='.$id.'">UPDATE</a></button>
                <button class="btn delete"> <a href="delete.php? deleteid= '.$id.'"> DELETE </a></button>
                </td>
              </tr>';
    }
}
?>

  </tbody>
</table>

    </div>
</body>
</html>