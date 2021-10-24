<?php include 'include/header.php';

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title></title>

    
<?php

// $product = array("title"=>"ipad",
//                 "price"=>"500",
//                 "description"=>"2020 Apple iPad (10.2-inch, Wi-Fi, 32GB)"
//                 );
// $title = $product['title'] ;
// $price = $product['price'] ;
// $description = $product['description'] ;

?>

</head>

<body>

<!-- 
--product form--
title 
price
quantity
description  -->


<div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 col-xxl-6 mx-auto my-5">
                <form action="profile.php" method="POST" class="border p-5">
                    <div class="form-group">
                        <label for="text" class="my-2">Title </label>
                        <input type="text" name="title"  id="text" class="form-control">
                    </div>
                    <div class="form-group col-4">
                        <label for="price" class="my-2">price</label>
                        <input type="number" name="price"  id="price" class="form-control" min="1">
                    
                        <label for="quantity" class="my-2">quantity</label>
                        <input type="number" name="quantity"  id="quantity" class="form-control" min="1" max="20">
                    </div>
                    <div class="form-group">
                    <label for="floatingTextarea">description </label>
                        <textarea class="form-control" name="description" placeholder="Leave your notes" id="floatingTextarea"></textarea>
                    </div>
                    <div class="d-grid gap-2" style="margin-top: 10px;">
                    <input class="btn btn-primary" type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
</body>

</html>














<!--
<script>
        var ipad = [
            type = "ipad",
            period = 12,
            cash = 500,
            benefits = .1

        ];
        console.log(`
    ${type}
    EG ${cash}
    EG ${((cash+(cash*off))/period).toFixed(1)} over ${period} months
    `)
    </script>
