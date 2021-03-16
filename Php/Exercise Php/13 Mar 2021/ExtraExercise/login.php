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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Login</title>
</head>
<style>
    .bg-image-login {
        background-image: url("../background2.jpg");
        background-size: cover;
        width: 100%;
        height: 100vh;
    }

    h6 {
        display: flex;
        flex-direction: row;
    }

    h6:before,
    h6:after {
        content: "";
        flex: 1 1;
        border-bottom: 1px solid #000;
        margin: auto;
    }
</style>
<?php
setcookie("username", "admin", time() + 60, "/");
setcookie("password", "Iamnotarobot@Mis2022", time() + 60, "/");
$err = "";
if (isset($_POST["submit"])) {
    if ($_POST["username"] == $_COOKIE["username"] && $_POST["password"] == $_COOKIE["password"]) {
        setcookie("statusLog", "success", time() + 60, "/");
        echo "<script>window.location.href='http://localhost/T3h/Php/Exercise%20Php/13%20Mar%202021/ExtraExercise/'</script>";
    }
    if ($_POST["password"] != $_COOKIE["password"]) {
        $err = "Mật khẩu không chính xác";
    }
}
?>

<body>
    <div class="container-fluid bg-image-login">
        <div class="float-right bg-white mt-5 mr-5">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="bg-white m-3">
                <h6>Đăng nhập với</h6>
                <div class="form-group d-flex justify-content-around">
                    <a href="#" class="btn btn-primary ml-5"><i class="fab fa-facebook-f mr-2"></i>Facebook</a>
                    <a href="#" class="btn btn-danger ml-5"><i class="fab fa-google mr-2"></i>Google</a>
                    <a href="#" class="btn btn-success ml-5 mr-5"><i class="fa fa-phone-alt mr-2"></i>Phone</a>
                </div>
                <h6>Hoặc</h6>
                <div class="form-group">
                    <input type="text" name="username" id="username" placeholder="Username" class="form-control mb-3" required oninvalid="this.setCustomValidity('Bạn quên tôi rồi à??')" onchange="this.setCustomValidity('')">
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control mb-3" required oninvalid="this.setCustomValidity('Bạn bị đui à??')" onchange="this.setCustomValidity('')">
                    <span class="text-danger"><?php echo $err; ?></span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="rememberPass" id="rememberPass">
                    <label for="rememberPass">Nhớ mật khẩu</label>
                    <a href="#" class="float-right">Quên mật khẩu ?</a>
                    <p>Cần email xác minh mới? <a href="#">Gửi lại</a></p>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Đăng nhập" class="btn btn-primary form-control">
                    <h6>Bạn chưa có tài khoản</h6>
                    <a href="#" class="btn btn-info form-control">Đăng ký</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>