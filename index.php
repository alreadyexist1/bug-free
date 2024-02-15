<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:wght@600&display=swap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Management</title>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .container {
        text-align: center;
        margin-top: 50px;
    }

    .button {
        display: block; /* Change from inline-block to block */
        padding: 10px 20px;
        margin: 10px auto; /* Center the button horizontally with auto margins */
        font-size: 16px;
        text-align: center;
        cursor: pointer;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 5px;
        box-shadow: 0 2px #999;
        width: 150px; /* Optional: Set a fixed width for consistency */
    }

    .button:hover {
        background-color: #45a049;
    }
</style>

</head>
<body>
    <div class="container">
        <a href="add.php" class="button">Insert Data</a>
        <a href="display.php" class="button">View Data</a>
        <a href="update.php" class="button">Update Data</a>
        <a href="login.php" class="button">Go Back</a>
    </div>
</body>
</html>
