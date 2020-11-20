<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="files/icon.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="master.css">
    <title>Hello, world!</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="validate.js"></script>
</head>

<body>
    <nav class="navbar py-0 ml-5 mr-5 mt-2 rounded fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">
            <img src="files/logo.png" alt="Dedsec logo" width="80">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="form.php">Formulier</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Meer
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="news.php">Nieuws</a>
                        <a class="dropdown-item" href="comment.php">Opmerkingen</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Naam en adres form -->
    <br><br><br><br><br>
    <div class="jumbotron ml-5 mr-5">
        <form action="form.php" method="POST">
            <div class="form-row">
                <div class="col">
                    <input type="text" name="name" class="form-control name">
                </div>
                <div class="col">
                    <input type="text" name="adres" class="form-control adres">
                </div>
                <div class="col-3">
                    <input type="submit" class="form-control">
                </div>
            </div>
        </form>
        <div class="collapse name-collapse" id="collapseNaam">
            <div class="card card-body">
                Vul hier uw naam in.
            </div>
        </div>
        <div class="collapse adres-collapse" id="collapseAdres">
            <div class="card card-body">
                Vul hier uw adres in.
            </div>
        </div>
        <div id="alert"></div>

        <script>
            var name = '<?php echo $_POST["name"] ?>';
            var adres = '<?php echo $_POST["adres"] ?>';
            Validate(name, adres);
        </script>

</body>
<script src="index.js"></script>

</html>