<!DOCTYPE html>
<html>
    <head>
        <title>EMPLOYEE LOGIN- EMPLOYEE Management System</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:wght@600&display=swap">
    </head>
    <body>
    <div class="banner">
        <div class="header">
        <!-- <div class="logo">
                    <img src="home.jpeg" alt="web-logo">
                </div> -->
            <div class="navbar">
                <div class="navopts">
                    <ul>
                        <li><a href="home.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="login-container">
            <div class="loginheader"> 
                <h1>EMPLOYEE MANAGEMENT SYSTEM</h1>
            </div>
            <form class="loginbody" method="post" action="index.php" onsubmit="verifyCredentials()">
                <div>
                    <label for="Username">Username</label>
                    <input type="text" id="Username" name="Username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <div>
                    <button class="btn" type="submit"><span></span>Login</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function verifyCredentials() {
            var username = document.getElementById("Username").value;
            var password = document.getElementById("password").value;

            if (username === "admin" && password === "admin") {
                alert("Login successful!");
                window.location.href = "index.php"
            } else {
                alert("Incorrect username or password. Please try again.");
                event.preventDefault();
            }
        }
    </script>
</body>
</html>
</html>