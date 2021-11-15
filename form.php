<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Enter Record</title>
  </head>
  <body class="container bg-secondary">
    <h1>Enter SCP file details below...</h1>
    
    <form class="form-group" method="post" action="connection.php">
        
        <label class="fs-3">Title</label>
        <br>
        <input type="text" class="form-control" name="h1" placeholder="SCP file number..." required>
        <br>
        <label class="fs-3">Object Class</label>
        <br>
        <input type="text" class="form-control" name="h2" placeholder="Enter SCP object class..." required>
        <br>
        <label class="fs-3">Add image address</label>
        <input type="text" name="img" class="form-control" placeholder="images/name-of-image">
        <br>
        <label class="fs-3">Special containment procedures...</label>
        <textarea class="form-control" name="p1" rows="5" required></textarea>
        <br>
        <label class="fs-3">Description...</label>
        <textarea class="form-control" name="p2" rows="5" required></textarea>
        <br>
        <br><br>
        <input type="submit" class="btn btn-dark" name="submit" value="Submit Record">
        
    </form>
    <br>
    <p><a href="index.php" class="btn btn-dark">Back to index page</a></p>
    
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