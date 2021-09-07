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
                        <a class="nav-link py-3 px-lg-3 active" href="add.php">DODAJ KSIĄŻKĘ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
    <main>
        <div class="container container-content bg-white rounded p-5 mt-5">
            <h1 class="text-center mb-5">Dodaj książkę</h1>
        <form action="" method="post">
            <div class="row mb-5">
                <div class="col-6">
                <input type="text" class="form-control" placeholder="Imię" minlength="3" required onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                </div>
                <div class="col-6">
                <input type="text" class="form-control" placeholder="Nazwisko" minlength="3" required onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-6">
                <input type="tel" class="form-control" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" placeholder="Numer telefonu" required>
                </div>
                <div class="col-6">
                <input type="number" class="form-control" min="0" placeholder="Cena" required>
                </div>
            </div>
            <textarea class="form-control" placeholder="Opis książki" minlength="10" required></textarea>
            <div class="d-flex">
            <button id="button" name="button" class="btn btn-lg btn-success p-4 mt-5 mx-auto" type="submit">Dodaj książkę</button>
            </div>
        </form>
        </div>
    </main>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" 
    crossorigin="anonymous"></script>
</body>
</html>