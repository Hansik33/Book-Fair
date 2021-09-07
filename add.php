<?php
include 'php/add_data.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiermasz</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-white text-uppercase navbar-fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link py-3 px-lg-3" href="view.php">KIERMASZ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3 px-lg-3 active" href="add.php">DODAJ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
    <main>
        <div class="container container-content bg-white rounded p-5">
            <h1 class="text-center mb-5">Dodaj książkę</h1>
        <form action="" method="post">
            <div class="row mb-5">
                <div class="col-6">
                <input id="first_name" name="first_name" type="text" class="form-control" placeholder="Imię" minlength="3" maxlength="15"  
                required onkeypress="return /[AaĄąBbCcĆćDdEeĘęFfGgHhIiJjKkLlŁłMmNnŃńOoÓóPpRrSsŚśTtUuWwYyZzŹźŻż]/i.test(event.key)">
                </div>
                <div class="col-6">
                <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Nazwisko" minlength="3" maxlength="30" 
                required onkeypress="return /[AaĄąBbCcĆćDdEeĘęFfGgHhIiJjKkLlŁłMmNnŃńOoÓóPpRrSsŚśTtUuWwYyZzŹźŻż]/i.test(event.key)">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-6">
                <input id="tel" name="tel" type="tel" class="form-control" 
                pattern="[0-9]{3}[0-9]{3}[0-9]{3}" placeholder="Numer telefonu" required>
                </div>
                <div class="col-6">
                <input id="price" name="price" type="number" class="form-control" min="0" max="500" placeholder="Cena (zł)" required>
                </div>
            </div>
            <textarea id="description_book" name="description_book" class="form-control" placeholder="Opis książki" minlength="10" maxlength="200" required></textarea>
            <div class="d-flex">
            <button id="button" name="button" class="btn btn-lg btn-success p-3 mt-3 mx-auto" type="submit">Dodaj</button>
            </div>
        </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" 
    crossorigin="anonymous"></script>
</body>
</html>