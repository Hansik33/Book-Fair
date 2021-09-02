<?php
include 'php/login.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dostęp</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <img src="png/logo_light.png" class="img-fluid mx-auto d-block logo pb-5 pt-5" alt="logo">
        <form action="" method="post">
            <div class="form-group d-flex flex-column justify-content-center align-items-center">
                <label class="h1 text-light" for="password">Podaj hasło:</label>
                <input id="password" name="password" class="form-control text-center mt-2 mb-3" type="password">
                <button id="button" name="button" class="btn btn-lg btn-success p-3 mb-5" type="submit">Wprowadź</button>
            </div>
        </form>
    </div>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
    integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" 
    crossorigin="anonymous"></script>
</body>
</html>

