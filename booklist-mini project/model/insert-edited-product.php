<?php
include "../database/config.php";
$book_id=$_POST['book_id'];
$book_name = $_POST['book_name'];
$writer_name = $_POST['writer_name'];
$book_price = $_POST['book_price'];
$query = "update book set book_id='$book_id', book_name='$book_name', writer_name='$writer_name', book_price='$book_price' where book_id='$book_id'";
mysqli_query($myconn,$query);

header("location:../index.php");