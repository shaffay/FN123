<?php

include("dp.php");
//echo $test;
if(isset($_GET['id'])){

    $id= $_GET['id'];

    $fetch = $con->query("SELECT * FROM `student` WHERE `id`='$id'");

 
    $std = mysqli_fetch_array($fetch);

}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Edit <?= $std['Name'] ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-dark text-light">
  
  <div class="container">
  
  <div class="text-center">
      <h2>Student Info Edit</h2>

  </div>
  
  <form action="edit.php" method="post">

  <input type="hidden" name="id"  value="<?= $std['id'] ?>">

  <div class="form-group">
    <label for="">Enter Your Name:</label>
    <input type="text" value="<?= $std['Name'] ?>" class="form-control" name="name" >
  </div>
  <div class="form-group">
    <label for="">Enter Your Email:</label>
    <input type="email" value="<?= $std['Email'] ?>" class="form-control" name="email" >
  </div>
  <div class="form-group">
    <label for="">Enter Your Phone No:</label>
    <input type="text" value="<?= $std['PhoneNo'] ?>" class="form-control" name="phone" >
  </div>
  <div class="form-group">
    <label for="">Select Your Qari:</label>
    <select name="qari" class="form-control">
        <option value="<?= $std['Qari'] ?>"> <?= $std['Qari'] ?></option>
        <option >Qari Ammir liaquat</option>
        <option >Qari Gaza Hassan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="">Select Your Days:</label>
    <select name="days" class="form-control">
        <option value="<?= $std['Days'] ?>"><?= $std['Days'] ?></option>
        <option value="MWF">MWF</option>
        <option value="TTS">TTS</option>
    </select>
  </div>


  <div class="text-center mt-5">
      <input type="submit" name="btn" class="btn btn-primary" value="Save">
  </div>


  </form>

  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<?php

if(isset($_POST['btn']))
{


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $qari = $_POST['qari'];
    $days = $_POST['days'];
    $id = $_POST['id'];



  $update = $con->query("UPDATE `student` SET `Name`='$name',`Email`='$email',`PhoneNo`='$phone',`Qari`='$qari',`Days`='$days' WHERE `id`='$id'");




if($update){
    
    ?>
            <script>window.location.href = "session2.php";</script>
    <?php


    }

  }

?>


