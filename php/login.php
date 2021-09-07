<?php
$servername = "localhost";
$username = "root";
$database = "book_fair";
if (isset($_POST['button']))
{   
    $entered_password = $_POST['password'];
    $connect = new mysqli($servername, $username, "", $database);
    $result = $connect->query("SELECT global_password FROM global_access");
    while ($row = $result->fetch_assoc()) $global_password = $row['global_password'];
    if ($global_password == $entered_password)
    {
        header('Location: view.php');
    }
    else if (empty($entered_password))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show d-flex align-items-center" role="alert">
        <strong>Pole jest puste!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    }
    else
    {
        echo '
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
        <strong>Podane hasło jest nieprawidłowe!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    }
    $connect->close();
}
?>