<?php

include("dp.php");
//echo $test;
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-dark text-light">
  
  
  <div class="container">
  


<br>
<a href="addstudent.php" class="btn btn-info float-right">Add Student</a>
<h1 class="display-3 mb-5 text-center">All Student</h1>
<table class="table table-light">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Qari</th>
      <th>Timings</th>
      <th>Options</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    $fetch = $con->query("SELECT * FROM `student`");
      foreach($fetch as $data){
    ?>
    <tr>
      <td><?php echo $data['Name'] ?></td>
      <td><?php echo $data['Email'] ?></td>
      <td><?php echo $data['PhoneNo'] ?></td>
      <td><?php echo $data['Qari'] ?></td>
      <td><?php echo $data['Days'] ?></td>
      <td>
        <a href="" class="btn btn-primary">Edit</a>
        <a href="delete.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">Delete</a>
      </td>
  
    </tr>
<?php } ?>
  
  </tbody>
</table>


  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

