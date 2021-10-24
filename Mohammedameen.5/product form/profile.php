<?php include 'include/header.php';



$title= trim($_POST['title']);
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$description= $_POST['description'];



function title(){
  $title= trim($_POST['title']);
  
  if(empty($title)){
  echo $erros[] = "Plesae Type your name";
  }elseif(strlen($title) < 3){
  echo $erros[] = "name must be grater than 3 chars";
  }else{
  echo $title;
  }
  
  }
// echo name();

// echo"<br>";

function price(){
  $price=$_POST['price'];
  $quantity=$_POST['quantity'];

  if(empty($price)){
  echo $erros[] = "Plesae Type your salary";
  }else{
  echo $price*$quantity;
  }
  
  }
  // echo salary();

// echo"<br>";

function quantity(){
  $quantity=$_POST['quantity'];
  
  if(empty($quantity)){
  echo $erros[] = "Plesae Type Required quantity";
  }elseif(strlen($quantity)>50 ){
  echo $erros[] = "The allowed quantity is 50 pieces per order";
  }else{
  echo $quantity;
  }
  
  }
  // echo phone();

// echo"<br>";

function description(){
  $description=$_POST['description'];
  
  if(empty($description)){
  echo $erros[] = "Plesae Type your description";
  }elseif(strlen($description)<20 ){
  echo $erros[] = "Description must be greater than 20 characters";
  }else{
  echo $description;
  }
  
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>


<?php

?>






<div class="container">
        <div class="row row-cols-1 ">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/ipad/mainimage0Apple-iPad-Mini-2nd-Original-used-7-9-2013-16GB-32GB-64GB-Black-Silver-90-iOS.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=title()?></h5>
                        <p class="card-text">
                          Price : EGP <?=price()?>
                          <span style="float:right">
                          Quantity : <?=quantity()?>
                          </span>
                        </p>
                        <p class="card-text">
                        Description : <?=description()?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

