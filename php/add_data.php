<?php
$servername = "localhost";
$username = "root";
$database = "book_fair";
if (isset($_POST['button']))
{   
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $tel = $_POST['tel'];
    $price = $_POST['price'];
    $description_book = $_POST['description_book'];

    $connect = new mysqli($servername, $username, "", $database);

    $connect->query(
        "INSERT INTO books_data(first_name, last_name, tel, price, description_book)
         VALUES ('$first_name', '$last_name', '$tel', '$price', '$description_book')"
    );

    echo '
        <div class="alert alert-success alert-dismissible fade show w-100 position-absolute" role="alert"
        style="z-index: 1;">
        <strong>Twoja książka została dodana! </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';

    $connect->close();

    header("Refresh:3; url=add.php");
}
?>