<?php

require_once('Product.php');
require_once('Book.php');
$Book = new Book;
$Book->chooseBookName();
$Book->calcPrice();
$Book->description = "سيختطفك أحمد مراد في آلة زمن، ليهبط بك في حقبة تغلي فيها القاهرة بالأحداث.. وثبة زمنية إلى عال;";
$Book->uploadImage("https://fakeimg.pl/50x50/") ;
$Book->choosePublisher();
$Book->chooseWriter();
$Book->chooseColor();
$Book->chooseSupplier();

$Book2 = new Book;
$Book2->chooseBookName();
$Book2->calcPrice();
$Book2->description = "تعمل تحت مقهى «ريش»، وعوالم البغاء المقنن.. شخصيات عديدة سوف تتعاطف ظ،";
$Book2->uploadImage("https://fakeimg.pl/150x150/");
$Book2->choosePublisher();
$Book2->chooseWriter();
$Book2->chooseColor();
$Book2->chooseSupplier();

$Book3 = new Book;
$Book3->chooseBookName();
$Book3->calcPrice();
$Book3->description = "بحوار مفعم بالحيوية حتى لتوشك على سماعه يتردد في أذنك، وتفاصيل تاريخية مضنية ودقيقة. سوف تدرك أن البعض ما زال مصرًّا على";
$Book3->uploadImage("https://fakeimg.pl/50x50/");
$Book3->choosePublisher();
$Book3->chooseWriter();
$Book3->chooseColor();
$Book3->chooseSupplier();



// echo "<pre>";
// var_dump($Book);
// echo "</pre>";
// die;

$all_Books = [$Book, $Book2, $Book3];



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
                    <h3 class="card-title">BOOKS</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Publisher</th>
                                <th>Writer</th>
                                <th>Color</th>
                                <th>Supplier</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            <?php foreach ($all_Books as $book): ?>
                                <tr>
                                    <td><?= $i++;?></td>
                                    <td><?= $book->chooseBookName()?></td>
                                    <td><?= $book->calcPrice()?></td>
                                    <td><?= $book->description?></td>
                                    <td><img src="<?= $book->uploadImage("https://fakeimg.pl/50x50/")?>" alt="img" width="50px" height="50px"></td>
                                    <td><?= $book->choosePublisher()?></td>
                                    <td><?= $book->chooseWriter()?></td>
                                    <td><?= $book->chooseColor()?></td>
                                    <td><?= $book->chooseSupplier()?></td>
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