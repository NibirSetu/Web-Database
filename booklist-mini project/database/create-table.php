<?php
include "config.php";
$create_table = "create table if not exists admininfo(
                            admin_id int not null auto_increment,
                            primary key(admin_id),
                            admin_name varchar(50) not null,
                            admin_pass varchar(255) not null
)";
mysqli_query($myconn,$create_table);
$query = mysqli_query($myconn, $create_table);

if ($query === TRUE) {
    echo "<h3>Admin Table Created OK </h3>";
} else {
    echo "<h3>Admin Table NOT Created </h3>";
}

$create_table = "create table if not exists bookdb(
                            book_id int not null auto_increment,
                            primary key(book_id),
                            book_name varchar(50) not null,
                            writer_name varchar(500) not null,
                            book_price int(11) not null
)";
$query = mysqli_query($myconn, $create_table);

if ($query === TRUE) {
    echo "<h3>Book table created OK </h3>";
} else {
    echo "<h3>Book table NOT created </h3>";
}