<?php
include 'conn.php';

// Check if updateid is set in the URL
if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM `crud` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("ERROR: Could not execute $sql. " . mysqli_error($conn));
    }

    // Fetch the data for the selected record
    $row = mysqli_fetch_assoc($result);

    // Close the result set
    mysqli_free_result($result);

    if (!$row) {
        die("No record found with ID $id");
    }
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get values from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];

    // Use prepared statements to prevent SQL injection
    $sql = "UPDATE `crud` SET name=?, email=?, phone=?, gender=?, department=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssi", $name, $email, $phone, $gender, $department, $id);

        if (mysqli_stmt_execute($stmt)) {
            header('location: display.php');
        } else {
            die("ERROR: Could not execute $sql. " . mysqli_error($conn));
        }

        mysqli_stmt_close($stmt);
    } else {
        die("ERROR: Could not prepare $sql. " . mysqli_error($conn));
    }
}
?>

<html>
<head></head>
<body>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Employee Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
        <label>E-mail:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="Female" <?php echo ($row['gender'] == 'Female') ? 'checked' : ''; ?>>Female
        <input type="radio" name="gender" value="male" <?php echo ($row['gender'] == 'male') ? 'checked' : ''; ?>>Male
        <input type="radio" name="gender" value="others" <?php echo ($row['gender'] == 'others') ? 'checked' : ''; ?>>Others<br><br>
        <label for="department">Department</label>
        <input type="text" name="department" value="<?php echo $row['department']; ?>"> <br><br>
        <input type="submit" name="submit" value="update"><br>
    </form>
</body>
</html>
