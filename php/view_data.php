<?php
$servername = "localhost";
$username = "root";
$database = "book_fair";

$connect = new mysqli($servername, $username, "", $database);

$result = $connect->query("SELECT COUNT(*) FROM books_data");

while ($row = $result->fetch_assoc())  $quantity =  $row['COUNT(*)'];

$result = $connect->query(
    "SELECT COUNT(books_data.is_confirmed) FROM books_data 
WHERE books_data.is_confirmed = '1'"
);

while ($row = $result->fetch_assoc())  $quantity_confirmed =  $row['COUNT(books_data.is_confirmed)'];

if ($quantity_confirmed % 2 == 0) $is_even = true;
else $is_even = false;

$result = $connect->query("SELECT books_data.id FROM books_data ORDER BY books_data.id DESC LIMIT 1");

while ($row = $result->fetch_assoc())  $largest_id =  $row['id'];

$counter = 0;

for ($i = 1; $i <= $quantity; $i++)
{
    $result = $connect->query(
        "SELECT title_book, authors, description_book, tel, price, class, job_profile, is_confirmed 
        FROM books_data WHERE id = '".$largest_id."'"
    );

    while ($row = $result->fetch_assoc())
    {
        $title_book = $row['title_book'];
        $authors = $row['authors'];
        $description_book = $row['description_book'];
        $tel = $row['tel'];
        $price = $row['price'];
        $class = $row['class'];
        $job_profile = $row['job_profile'];
        $is_confirmed = $row['is_confirmed'];
    }

    if ($is_confirmed)
    {

    if ($counter == 0) echo '
    <div class="row">
    ';

    $counter++;

    echo '
           <div class="col-lg-6 col-md-12 mt-5 text-center">
               <div class="card text-dark bg-light mb-3 mt-5">
                  <div class="card-header"><strong>Kontakt:</strong> '.$tel.'</div>
                        <div class="card-body">
                        <h5 class="card-title">'.$title_book.'</h5>
                        <h6 class="card-text"><strong>Autorzy:</strong> '.$authors.'</h6>
                        <h6 class="card-text"><strong>Cena:</strong> '.$price.' zł</h6>
                        <h6 class="card-text"><strong>Klasa:</strong> '.$class.'</h6>
                        <h6 class="card-text"><strong>Profil:</strong> '.$job_profile.'</h6>
                        <p class="card-text"><strong>Opis: </strong>'.$description_book.'</p>
                        </div>
                </div>
           </div>
    ';

    if ($counter == 2)
    {
        echo '
        </div>
        ';
        $counter = 0;
    }
    
    }

    $largest_id--;
}

if ($is_even == false) 
echo '
        </div>
        ';

$connect->close();

?>