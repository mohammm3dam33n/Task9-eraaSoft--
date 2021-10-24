
<?php include '../include/header.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>employee form</title>
  </head>
  <body>


<!--

--employee form--
name 
salary
phone 
email
notes 
gender 

-->

    <div class="container">
        <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 col-xxl-6 mx-auto my-5">
                <form action="profile.php" method="POST" class="border p-5">

                    <div class="form-group">
                        <label for="text" class="my-2">your Name</label>
                        <input type="text" name="name"  id="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="salary" class="my-2">salary</label>
                        <input type="number" name="salary"  id="salary" class="form-control" min="2400" max="50000">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="my-2">phone</label>
                        <input type="text" name="phone"  id="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email" class="my-2">email</label>
                        <input type="email" name="email"  id="email" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="floatingTextarea">notes</label>
                        <textarea class="form-control" name="notes" placeholder="Leave your notes" id="floatingTextarea"></textarea>
                    </div>



                    
                    <label for="gender">gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">female</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="Male" value="Male">
                    <label class="form-check-label" for="Male">Male</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="Other" value="Other" checked>
                    <label class="form-check-label" for="Other">Other</label>
                    </div>

                    <div class="d-grid gap-2" style="margin-top: 10px;">
                    <input class="btn btn-primary" type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>