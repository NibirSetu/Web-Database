<?php
include "model/session.php";
include "database/config.php";
include "header.php";
?>
<form action="model/insert-book.php" method="post">
    <div class="form-group">
        <label for="book_name">Book Name:</label>
        <input type="text" class="form-control" id="book_name" name="book_name" placeholder="enter book name">
    </div>
    <div class="form-group">
        <label for="writer_name">Writer Name:</label>
        <input type="text" class="form-control" id="writer_name" name="writer_name" placeholder="enter writer name">
    </div>
    <div class="form-group">
        <label for="book_price">Price:</label>
        <input type="number" class="form-control" id="book_price" name="book_price" placeholder="enter book price">
    </div>
    <div>
        <button class="btn btn-info" type="submit">Add Book</button>
        <a class="btn btn-danger" href="index.php" role="button">Cancel</a>
    </div>
</form>
<?php
include "footer.php";
?>
