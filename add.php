<?php
include 'conn.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=($_POST['phone']);
    $gender=$_POST['gender'];
    $department=$_POST['department'];
    $sql = "INSERT INTO `crud` (name, email, phone, gender,department)  
        VALUES ('$name', '$email', '$phone', '$gender','$department')";

    $result= mysqli_query($conn,$sql);
    if($result){
        header('location:display.php');
        // echo "data inserted successfully";
        
    }else{
        die("ERROR:Could not connect.".mysqli_connect_error());
    }
}
?>

<html>

    <head>
      
<script src="validation.js"></script>

    <style>
      body {
        font-family: Arial, sans-serif;
        
      }

      form {
        max-width: 400px;
        margin: 0 auto;
      }

      label {
        display: block;
        margin-bottom: 8px;
      }

      input {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        box-sizing: border-box;
      }

      input[type="submit"] {
        background-color: #4caf50;
        color: white;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }

      input[type="radio"] {
        margin-right: 5px;
      }
    </style>
    </head>
 <body>
 <form method="post" >
 <label>Employee Name:</label>
 <input type="text" name="name"><br><br>
 <label>E-mail:</label>
 <input type="email" name="email"><br><br>
 <label>Phone:</label>
 <input type="telephone" name="phone"><br><br>
 <label>Gender:</label>
 <input type="radio" name="gender" value="Female">Female
 <input type="radio" name="gender" value="male">male
 <input type="radio" name="gender" value="others">others<br><br>
 <label>Department:</label>
 <input type="text" name="department"><br><br>
 <input type="submit" name="submit" value="sumbit"><br>
 <!-- <a href="index.php">Menu</a><br><br> -->
 </form>
 </body>
</html>