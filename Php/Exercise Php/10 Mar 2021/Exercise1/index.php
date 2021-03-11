<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Exercise 1</title>
</head>

<body>
    <?php
    $username = $password = $notice = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
            $username = $_POST["username"];
            $password = $_POST["password"];
        } else {
            $notice = "Thông tin đăng nhập không chính xác.Hãy kiểm tra lại!";
        }
    }

    ?>
    <div class="container-fluid">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="w-50 mx-auto text-center rounded-top" method="POST">
            <div class=" bg-success">Sign in</div>
            <input class="w-75 mt-3" type="text" name="username" id="userName" placeholder="Username" required> <br>
            <input class="w-75 mt-3" type="text" name="password" id="passWord" placeholder="Password" required> <br>
            <input class="w-75 mt-3 bg-success" type="submit" name="login" id="loginBtn" value="Login">
        </form>

    </div>
    <div class="text-center">
        <?php
        echo $notice;
        echo $username . "<br>";
        echo $password;
        ?>
    </div>


</body>

</html>