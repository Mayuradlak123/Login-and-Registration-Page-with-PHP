
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- <title>Hello, world!</title> -->
    <style>
        #Log-in {
            color: whitesmoke;
            padding: 30px;
        }
    </style>
</head>

<body>

    <div class="nav-item">
        <li class="nav-item">
            <a style="margin-top: 50px;" class="nav-link" aria-current="page" href="index.html">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="php_laravel/Register.html">Register</a>
        </li>
    </div>

    <!-- <li class="nav-item">
        <a class="nav-link" aria-current="page" href="php_laravel/Register.html">Register</a>
        <a class="nav-link" aria-current="page" href="index.html">Login</a>
    </li> -->

    <div class="col-md-12">
        <div class="login_page">
            <div class="form">
                <h1 id="Log-in"> Log in </h1>

                <form class="login_form" action="Login.php" method="post">
                    <input type="text" placeholder="E-mail" name="email">
                    <br><br>
                    <input type="password" placeholder="password" name="password">
                    <br> <br>
                    <button>login</button>
                    <p class="message">Not Registered? <a href="php_laravel/Register.html">Register Now!</a></p>
                </form>
            </div>
        </div>
    </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php
if($_SERVER['REQUEST_METHOD']){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $_SESSION['email']="mayuradlak030@gmail.com";
    $_SESSION['password']="Mayur_2002";
    echo "Your Email is:  $email ";
    echo "Your Password is:  $password";
}
?>