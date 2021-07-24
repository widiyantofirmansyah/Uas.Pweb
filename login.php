<?php
require 'Function.php';

if(isset($_POST['login'])){
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $cekdatabase = mySqli_query($conn, "SELECT * FROM login where Email='$email' and Password='$password'");

    $hitung = mySqli_num_rows($cekdatabase);

    if($hitung>0){
        $_SESSION['log'] = 'True';
        header('location:uas.php');
    }else {
        header('location:login.php');
    };
};

if(!isset($_SESSION['log'])){

} else {
    header('location:uas.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <link href="Login.css" rel="stylesheet" />
    </head>
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                    <form method="post">
                                        <div class="imgcontainer">
                                            <img src="logo-academy.png" alt="Avatar" class="avatar">
                                        </div>

                                        <div class="container">
                                            <label for="Email"><b>Username</b></label>
                                            <input type="text" placeholder="Enter Email" name="Email" required>

                                            <label for="Password"><b>Password</b></label>
                                            <input type="password" placeholder="Enter Password" name="Password" required>

                                            <button type="submit" href="uas.php" name="login">Login</button>
                                            <label>
                                            <input type="checkbox" checked="checked" name="remember"> Remember me
                                            </label>
                                        </div>

                                        <div class="container" style="background-color:#f1f1f1">
                                        <button type="button" class="cancelbtn">Cancel</button>
                                            <span class="psw">Forgot <a href="#">password?</a></span>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Widiyanto UAS</div>
                            <div>
                                <a href="https://www.instagram.com/firmansyahwidi08/">Sosial Media</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
