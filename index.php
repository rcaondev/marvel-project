<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Marvel Comics - API</title>
</head>

<body onload="character()">
    <div class="jumbotron">
        <div class="container">
            <h1 class="header-main-title">Marvel Comics Character Search</h1>
            <form id="connectionForm">

                <div class="form-group">
                    <input required type="text" name="name" id="name" class="form-control character-search-box" placeholder="(Ex. Hulk, Iron Man, Spider-Man, etc...)">
                </div>
                <input type="submit" value="Search!" class="btn btn-danger mb-2 float-right search-character-button">

            </form>
        </div>
    </div>

    <div class="container" id="contentContainer">

        <div class="d-flex align-items-center" id="characterSpinnerSection"></div>
        <div class="d-flex align-items-center" id="comicsSpinnerSection"></div>

        <section id="characterSection"></section>

        <section id="comicSection"></section>
    </div>



    <script src="main.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>