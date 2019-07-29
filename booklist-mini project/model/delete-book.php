<?php
include "../database/config.php";

$router_id=$_GET['bookid'];

$query="delete from book where book_id='$book_id'";

mysqli_query($myconn,$query);
header("location:../index.php");