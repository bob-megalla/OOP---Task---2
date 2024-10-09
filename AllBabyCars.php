<?php

require_once('Product.php');
require_once('Book.php');
require_once('BabyCar.php');
$BabyCar = new BabyCar;
$BabyCar->name = "First Car";
$BabyCar->calcPrice();
$BabyCar->description = "سيختطفك أحمد مراد في آلة زمن، ليهبط بك في حقبة تغلي فيها القاهرة بالأحداث.. وثبة زمنية إلى عال;";
$BabyCar->uploadImage("https://fakeimg.pl/50x50/") ;
$BabyCar->age = "6 Years";
$BabyCar->weight = "55 KG";
$BabyCar->chooseMaterial();
$BabyCar->getFinalPrice();

$BabyCar2 = new BabyCar;
$BabyCar2->name = "Second Car";
$BabyCar2->calcPrice();
$BabyCar2->description = "سيختطفك أحمد مراد في آلة زمن، ليهبط بك في حقبة تغلي فيها القاهرة بالأحداث.. وثبة زمنية إلى عال;";
$BabyCar2->uploadImage("https://fakeimg.pl/50x50/") ;
$BabyCar2->age = "5 Years";
$BabyCar2->weight = "40 KG";
$BabyCar2->chooseMaterial();
$BabyCar2->getFinalPrice();

$BabyCar3 = new BabyCar;
$BabyCar3->name = "Third Car";
$BabyCar3->calcPrice();
$BabyCar3->description = "سيختطفك أحمد مراد في آلة زمن، ليهبط بك في حقبة تغلي فيها القاهرة بالأحداث.. وثبة زمنية إلى عال;";
$BabyCar3->uploadImage("https://fakeimg.pl/50x50/") ;
$BabyCar3->age = "3 Years";
$BabyCar3->weight = "25 KG";
$BabyCar3->chooseMaterial();
$BabyCar3->getFinalPrice();





// echo "<pre>";
// var_dump($BabyCar);
// echo "</pre>";
// die;

$All_BabyCars = [$BabyCar, $BabyCar2, $BabyCar3];



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Task 2</title>
</head>

<body>
    <?php require_once('navbar.php'); ?>
    <div class="container my-5 "></div>
    <div class="row">
        <div class="col-11 ml-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">BABY CARS</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price After Tax</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Age</th>
                                <th>Weight</th>
                                <th>Materials</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            <?php foreach ($All_BabyCars as $babyCar): ?>
                                <tr>
                                    <td><?= $i++;?></td>
                                    <td><?= $babyCar->name?></td>
                                    <td><?= $babyCar->getFinalPrice()?></td>
                                    <td><?= $babyCar->description?></td>
                                    <td><img src="<?= $babyCar->uploadImage("https://fakeimg.pl/50x50/")?>" alt="img" width="50px" height="50px"></td>
                                    <td><?= $babyCar->age?></td>
                                    <td><?= $babyCar->weight?></td>
                                    <td><?= $babyCar->chooseMaterial()?></td>
                                   
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>

        </div>
    </div>
    </div>

  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>