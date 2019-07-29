<?php
include "database/config.php";

$query="select * from book";
$result=mysqli_query($myconn,$query);