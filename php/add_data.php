<?php
$servername = "localhost";
$username = "root";
$database = "book_fair";
if (isset($_POST['button']))
{   
    $title_book = $_POST['title_book'];
    $authors = $_POST['authors'];
    $description_book = $_POST['description_book'];
    $tel = $_POST['tel'];
    $price = $_POST['price'];
    $class = $_POST['class'];
    $job_profile = $_POST['job_profile'];

    $connect = new mysqli($servername, $username, "", $database);

    $connect->query(
        "INSERT INTO books_data(title_book, authors, description_book, tel, price, class, job_profile)
         VALUES ('$title_book', '$authors', '$description_book', '$tel', '$price', '$class', '$job_profile')"
    );

    echo '
        <div class="alert alert-success alert-dismissible fade show w-100 position-absolute" role="alert"
        style="z-index: 2;">
        <strong>Twój wpis oczekuje na akceptację!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';

    $connect->close();

    header("Refresh:3; url=view.php");
}
?>