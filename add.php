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
    <nav class="navbar navbar-expand-sm navbar-light bg-white text-uppercase navbar-fixed-top" style="z-index: 1;">
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
        <div class="container container-content bg-white rounded p-5 mt-4">
            <h1 class="text-center mb-5">Dodaj książkę</h1>
        <form action="" method="post">
            <div class="row mb-5">
                <div class="col-6">
                <input id="title_book" name="title_book" type="text" class="form-control" placeholder="Tytuł książki" minlength="10" maxlength="50"  
                required onkeypress="return /[AaĄąBbCcĆćDdEeĘęFfGgHhIiJjKkLlŁłMmNnŃńOoÓóPpRrSsŚśTtUuWwYyZzŹźŻż ,.]/i.test(event.key)">
                </div>
                <div class="col-6">
                <input id="authors" name="authors" type="text" class="form-control" placeholder="Autorzy" minlength="10" maxlength="100" 
                required onkeypress="return /[AaĄąBbCcĆćDdEeĘęFfGgHhIiJjKkLlŁłMmNnŃńOoÓóPpRrSsŚśTtUuWwYyZzŹźŻż ,.]/i.test(event.key)">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                <textarea id="description_book" name="description_book" class="form-control" placeholder="Opis książki" minlength="10" maxlength="200" required></textarea>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-6">
                <input id="tel" name="tel" type="tel" class="form-control" 
                pattern="[0-9]{3}[0-9]{3}[0-9]{3}" placeholder="Numer telefonu" maxlength="9"
                required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>
                <div class="col-6">
                <input id="price" name="price" type="number" class="form-control" min="0" max="500" placeholder="Cena (zł)" required>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                <select class="form-select form-select-sm" id="class" name="class" required>
                  <option value="">Klasa:</option>
                  <option value="1">Pierwsza</option>
                  <option value="2">Druga</option>
                  <option value="3">Trzecia</option>
                  <option value="4">Czwarta</option>
                  </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <select class="form-select form-select-sm" id="job_profile" name="job_profile" required>
                  <option value="">Profil: </option>
                  <option value="Technik Programista">Technik Programista</option>
                  <option value="Technik Informatyk">Technik Informatyk</option>
                  <option value="Technik Budownictwa">Technik Budownictwa</option>
                  <option value="Technik Elektronik">Technik Elektronik</option>
                  <option value="Technik energetyki odnawialnej">Technik energetyki odnawialnej</option>
                  <option value="Technik Chłodnictwa">Technik Chłodnictwa</option>
                  <option value="Technik robót wykończeniowych w budownictwie">Technik robót wykończeniowych w budownictwie</option>
                  </select>
                </div>
            </div>
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