<?php include '../include/header.php';



$name       = trim($_POST['name']);
$email      = $_POST['email'];
$subject      = $_POST['subject'];
$Comments   = $_POST['Comments'];




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

function subject(){
$subject= $_POST['subject'];

if(empty($subject)){
echo $erros[] = "Plesae Type subject";
}elseif(strlen($subject) < 30){
echo $erros[] = "subject must be grater than 30 chars";
}else{
echo $subject;
}

}
// echo subject();

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
    <?php
    echo name();
  ?></h5>
</div>
<div class="card-body">
    <h5 class="card-title">
    <?php
    echo email();
  ?></h5>
</div>
<div class="card-body">
    <h5 class="card-title">
    <?php
    echo subject();
    ?></h5>
</div>
<div class="card-body">
    <h5 class="card-title">
    <?php
    echo $Comments;
    ?></h5>
</div>

  </div>

  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>