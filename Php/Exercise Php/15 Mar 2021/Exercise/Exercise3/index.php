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
    <title>Shopping cart</title>
</head>
<?php
require_once('./data.php');
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST['add'])) {
        foreach ($data as $value) {
            if ($value['code'] == $_POST['code']) {
                $value['quantity'] = $_POST['quantity'];
                array_push($_SESSION['cart'], $value);
            }
        }
    }
    if (isset($_POST['empty'])) {
        array_splice($_SESSION['cart'], 0, count($_SESSION['cart']) - 1);
    }
    if (isset($_POST['remove'])) {
        foreach ($data as $value) {
            if ($value['code'] == $_POST['code']) {
                array_splice($_SESSION['cart'], array_search($value,$_SESSION['cart']),1);
            }
        }
    }
}
?>

<body>
    <div class="container-fluid">
        <div class="shopping-cart w-75 mx-auto">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="mt-3">
                <input type="submit" name="empty" value="Empty Cart" class="btn btn-danger">
            </form>
            <table class="table">
                <?php
                if (empty($_SESSION['cart'])) {
                    echo "Cart is empty";
                } else { ?>
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Code</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Price</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <?php
                        foreach ($_SESSION['cart'] as $val) { ?>
                        <tbody>
                            <td><?php echo $val['name']; ?></td>
                            <td><?php echo $val['code']; ?></td>
                            <td><?php echo $val['quantity']; ?></td>
                            <td><?php echo $val['price']; ?></td>
                            <td><?php echo $val['quantity'] * $val['price']; ?></td>>
                            <td>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="mt-3">
                                    <input type="hidden" name="code" id="code" value="<?php echo $val['code'] ?>" />
                                    <input type="submit" name="remove" value="X" class="btn btn-primary">
                                </form>
                            </td>
                        </tbody>
                <?php   }
                }
                ?>
            </table>
        </div>
        <div class="container-fluid w-75 mx-auto d-flex justify-content-around">
            <div class="card-deck">
                <?php foreach ($data as $value) { ?>
                    <div class="col-3">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $value['image']; ?>" alt="Card image">
                            <div class="card-body">
                                <p class="card-title"><?php echo $value['name'] ?></p>
                                <p class="card-title">$<?php echo $value['price'] ?></p>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="mt-3">
                                    <input type="text" name="quantity" id="quantity" value='1' size='2'>
                                    <input type="hidden" name="code" id="code" value="<?php echo $value['code'] ?>" />
                                    <input type="submit" name="add" value="Add to cart" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </div>
</body>

</html>