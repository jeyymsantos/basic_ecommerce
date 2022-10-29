<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'ecommerce');
$sql = "SELECT * FROM tblitems";
$items = $con->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> JEYYM </title>

    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="images/gdsc.png" alt="Bootstrap" width="30" height="24">
                    <span style="color: #E7493C">G</span><span style="color: #498AF4">D</span><span style="color: #3CAB5A">S</span><span style="color: #F5BB0E">C</span>
                    NU Baliwag
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <button class="btn btn-warning"><i class="bi bi-cart"></i></button>
                    </span>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <?php
            while ($item = mysqli_fetch_assoc($items)) :
            ?>
                <div class="card m-3" style="width: 18rem;">
                    <img src="<?= $item['itemImage']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['itemName']; ?><br>
                            <span style="font-size: 75%; color:#3CAB5A"> Php <?= $item['itemPrice']; ?></span>
                        </h5>

                        <p class="card-text"><?= $item['itemDesc']; ?></p>
                        <a href="#" class="btn btn-warning">
                            <i class="bi bi-info-circle-fill"></i>
                            View Item
                        </a>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
        </div>


    </div>



    <script src="js/bootstrap/bootstrap.min.js"></script>
</body>

</html>