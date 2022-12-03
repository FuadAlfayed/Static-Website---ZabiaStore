<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="registrasi.css" rel="stylesheet " type="text/css ">
</head>

<body>

    <form action="Simpan_Registrasi.php" method = "post">
        <img src="image/business.png">
        <div class="container">
            <h1>Welcome to<br>ZABIA COLLECTION</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="name"><b>Name</b></label><br>
            <input type="text" placeholder="    Name" name="name" id="name" required><br>

            <label for="Username"><b>Username</b></label><br>
            <input type="text" placeholder="    Username" name="Username" id="Username" required><br>

            <label for="password"><b>Password</b></label><br>
            <input type="password" placeholder="    Enter Password" name="password" id="password" required><br>

            <label for="email"><b>Email</b></label><br>
            <input type="text" placeholder="    Email" name="email" id="email" required><br>

            <label for="phone"><b>Phone</b></label><br>
            <input type="number" placeholder="  Phone" name="phone" id="phone" required><br>
            <hr>
            <p>Already have an account? <a href="Form Login.php">Sign in.</p></a>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <button class = "registerbtn" onclick="location.href='Form login.php'">Registrasi</button>

        </div>
</form>
</body>

</html>