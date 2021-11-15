<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Update Record</title>
  </head>
  <body class="container bg-secondary">
    <h1>Enter SCP file details below...</h1>
    
    <?php
    
        include "connection.php";
        
        $id = $_GET['update'];
        $record = $connection->query("select * from scprecords where id=$id") or die($connection->error);
        $row = $record->fetch_assoc();
        
    ?>
    
    <form class="form-group" method="post" action="connection.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label class="fs-3">Edit Title</label>
        <br>
        <input type="text" class="form-control" name="h1" value="<?php echo $row['h1']; ?>">
        <br>
        <label class="fs-3">Edit Object Class</label>
        <textarea class="form-control" name="h2" rows="5"><?php echo $row['h2']; ?></textarea>
        <br>
        <label class="fs-3">Edit SCP Image</label>
        <input type="text" name="img" class="form-control" value="<?php echo $row['img']; ?>">
        <br>
        <label class="fs-3">Edit Special Containment Procedures</label>
        <textarea class="form-control" name="p1" rows="5"><?php echo $row['p1']; ?></textarea>
        <br>
        <label class="fs-3">Edit Description</label>
        <textarea class="form-control" name="p2" rows="5"><?php echo $row['p2']; ?></textarea>
        <br><br>
        <input type="submit" class="btn btn-dark" name="update" value="Update Record">
        
    </form>
    <br>
    <p><a href="scpfiles.php" class="btn btn-dark">Back to SCP files</a></p>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>