<?php
include "../database/config.php";

$router_id=$_GET['bookid'];

$query="select * from book where book_id='$book_id'";

$result=mysqli_query($myconn,$query);
while ($row=mysqli_fetch_array($result)){
    $book_id=$row['book_id'];
    $book_name=$row['book_name'];
    $writer_name=$row['writer_name'];
    $book_price=$row['book_price'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form action="insert-edited-product.php" method="post">
        <div class="form-group">
            <input type="hidden" class="form-control" id="book_id" name="book_id" value="<?php echo $book_id?>">
        </div>
        <div class="form-group">
            <label for="book_name">Book Name:</label>
            <input type="text" class="form-control" id="book_name" name="book_name" value="<?php echo $book_name?>">
        </div>
        <div class="form-group">
            <label for="writer_name">Writer Name:</label>
            <input type="text" class="form-control" id="writer_name" name="writer_name" value="<?php echo $writer_name?>">
        </div>
        <div class="form-group">
            <label for="router_price">Price:</label>
            <input type="number" class="form-control" id="book_price" name="book_price" value="<?php echo $book_price?>">
        </div>
        <div>
            <button class="btn btn-info" type="submit">Update Book</button>
            <a class="btn btn-danger" href="../index.php" role="button">Cancel</a>
        </div>
    </form>
</div>
</body>
</html>
