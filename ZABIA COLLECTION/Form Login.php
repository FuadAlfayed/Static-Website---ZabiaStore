<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style_Login.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="background">

        <div class="capt">
            <h1 id="Phone">+62 123 456 789/owner</h1>
            <h2> ZABIA COLLECTION </h2>
            <p>
                commodo consequat. Duis aute irure dolor in reprehenderit in<br> voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur<br> sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit <br> anim id est
                laborum
            </p>


        </div>
        <div class="baju">
            <img src="image/baju.png">
        </div>

        <button class="button-awal" onclick="document.getElementById('id01').style.display='block'">LOGIN</button>
        <a href="REGISTRASI1.php"><button class = "button-kedua">REGISTRASI</button></a>

        <div id="id01" class="modal">

            <form class="modal-content animate" action="simpan1.php" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>

                <div class="container">
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="Nama" required>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <button href="Dasboard .php" class="button1" type="submit">Login</button>
                    <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>