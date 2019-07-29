<?php
//include "model/session.php";
include "database/config.php";
include "model/fetch-book.php";
echo '

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Book ID</th>
        <th>Book Name</th>
        <th>Writer Name</th>
        <th>Book Price</th>
        <th>Action</th>
      </tr>
    </thead>
';

while ($row=mysqli_fetch_array($result)){
    $book_id=$row['book_id'];
   $book_name=$row['book_name'];
   $writer_name=$row['writer_name'];
   $book_price=$row['book_price'];

    echo '
    <tbody>
      <tr>
        <td>'.$book_id.'</td>
        <td>'.$book_name.'</td>
        <td>'.$writer_name.'</td>
        <td>'.$book_price.'</td>
        <td>
        <button class="btn btn-info" type="submit"><a href="model/edit-book.php?bookid='.$book_id.'">Edit</a></button>
        <button class="btn btn-danger" type="submit"><a href="model/delete-book.php?bookid='.$book_id.'">Delete</a></button>
    </td>
    </tbody>
    ';
}
echo '</table>';
?>

