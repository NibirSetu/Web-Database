<?php
include "../database/config.php";
$book_name = $_POST['book_name'];
$writer_name = $_POST['writer_name'];
$book_price = $_POST['book_price'];
$query = "insert into book(book_name, writer_name, book_price) values('$book_name', '$writer_name','$book_price')";
mysqli_query($myconn,$query);

header("location:../index.php");