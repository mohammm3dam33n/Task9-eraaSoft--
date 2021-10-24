<?php include '../include/header.php';





$name= trim($_POST['name']);
$salary=$_POST['salary'];
$phone=$_POST['phone'];
$email= $_POST['email'];
$notes= $_POST['notes'];
$gender=$_POST['gender'];



function name(){
  $name= trim($_POST['name']);
  
  if(empty($name)){
  echo $erros[] = "Plesae Type your name";
  }elseif(strlen($name) < 3){
  echo $erros[] = "name must be grater than 3 chars";
  }else{
  echo $name;
  }
  
  }
// echo name();

// echo"<br>";

function salary(){
  $salary=$_POST['salary'];
  
  if(empty($salary)){
  echo $erros[] = "Plesae Type your salary";
  }else{
  echo $salary;
  }
  
  }
  // echo salary();

// echo"<br>";

function phone(){
  $phone=$_POST['phone'];
  
  if(empty($phone)){
  echo $erros[] = "Plesae Type your phone";
  }elseif(strlen($phone)!==11 ){
  echo $erros[] = "wrong number!";
  }else{
  echo $phone;
  }
  
  }
  // echo phone();

// echo"<br>";

function email(){
  $email= $_POST['email'];
  
  if(empty($email)){
  echo $erros[] = "Plesae Type your email";
  }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  echo $erros[] = "please type a valid email";
  }else{
  echo $email;
  }
  
  }
  // echo email();

// echo"<br>";

// echo $notes;

// echo"<br>";

function gender(){
  $gender= $_POST['gender'];
  
  if(empty($gender)){
  echo $erros[] = "Plesae Type your gender";
  }else{
  echo $gender;
  }
  
  }
  // echo gender();
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


<div class="card text-white bg-primary mb-3" style="max-width: 28rem;">

<div class="card-body">
    <h5 class="card-title">
    <?=
    name();
  ?></h5>
</div>
<div class="card-body">
    <h5 class="card-title">
    <?=
    salary();
  ?></h5>
</div>
<div class="card-body">
    <h5 class="card-title">
    <?=
    phone();
  ?></h5>
</div>
<div class="card-body">
    <h5 class="card-title">
    <?=
    email();
  ?></h5>
</div>
<div class="card-body">
    <h5 class="card-title">
    <?=
    gender();
  ?></h5>
</div>

</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>


</html>