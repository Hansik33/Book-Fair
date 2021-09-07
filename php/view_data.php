<?php
$servername = "localhost";
$username = "root";
$database = "book_fair";

$connect = new mysqli($servername, $username, "", $database);

$result = $connect->query("SELECT COUNT(*) FROM books_data");

while ($row = $result->fetch_assoc())  $quantity =  $row['COUNT(*)'];

$result = $connect->query("SELECT books_data.id FROM books_data ORDER BY books_data.id ASC LIMIT 1");

while ($row = $result->fetch_assoc())  $smallest_id =  $row['id'];

$counter = 1;

for ($i = 1; $i <= $quantity; $i++)
{
    $result = $connect->query(
        "SELECT first_name, last_name, tel, price, description_book FROM books_data WHERE id = '".$smallest_id."'"
    );

    while ($row = $result->fetch_assoc())
    {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $tel = $row['tel'];
        $price = $row['price'];
        $description_book = $row['description_book'];
    }

    if ($counter == 1) echo '<div class="row">';

    echo '
           <div class="col-lg-6 col-md-12 mt-5 text-center">
               <div class="card text-dark bg-light mb-3 mt-5">
                  <div class="card-header"><strong>Kontakt:</strong> '.$tel.'</div>
                        <div class="card-body">
                        <h5 class="card-title">'.$first_name.' '.$last_name.'</h5>
                        <h6 class="card-subtitle mb-2 text-muted"><strong>Cena:</strong> '.$price.' zł</h6>
                        <p class="card-text"><strong>Opis: </strong>'.$description_book.'</p>
                        </div>
                </div>
           </div>
    ';

    $counter++;

    $smallest_id++;

    if ($counter == 3)
    {
        $counter = 1;
        echo '</div>';
    }
}

?>