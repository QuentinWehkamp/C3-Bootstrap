<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="files/icon.png" type="image/png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="master.css">
  <script src="cato.js"></script>
  <title>Hello, world!</title>
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

  <br><br><br><br><br>

  <div class="ml-4 mr-3 card">
    <div class="card-body">
      <p>Filters:</p>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" onclick="analyzeValue(this.value);">
        <label class="form-check-label" for="inlineRadio1">Alles</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2" onclick="analyzeValue(this.value);">
        <label class="form-check-label" for="inlineRadio2">Politiek</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3" onclick="analyzeValue(this.value);">
        <label class="form-check-label" for="inlineRadio3">Streaming</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="4" onclick="analyzeValue(this.value);">
        <label class="form-check-label" for="inlineRadio3">Verzamelaars</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="5" onclick="analyzeValue(this.value);">
        <label class="form-check-label" for="inlineRadio3">Next-Gen</label>
      </div>
    </div>
  </div>

  <br>

  <div class="ml-5 row">
    <div class=" card politiek news" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Amerikaanse politicus zamelt 200.000 dollar in via stream game Among Us</h5>
        <p class="card-text"></p>
        <a href="https://www.nu.nl/tech/6093491/amerikaanse-politicus-zamelt-200000-dollar-in-via-stream-game-among-us.html" class="btn btn-primary">Naar artikel</a>
      </div>
    </div>

    <div class="ml-3 card news verzamelaars" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Zeldzame Super Mario-game verkocht voor ruim 130.000 euro</h5>
        <a href="https://www.nu.nl/games/6091929/zeldzame-super-mario-game-verkocht-voor-ruim-130000-euro.html" class="btn btn-primary">Naar artikel</a>
      </div>
    </div>

    <div class="ml-3 card news next-gen" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Vijf vragen over de Xbox Series X en PlayStation 5 beantwoord</h5>
        <a href="https://www.nu.nl/games/6091498/vijf-vragen-over-de-xbox-series-x-en-playstation-5-beantwoord.html" class="btn btn-primary">Naar artikel</a>
      </div>
    </div>

    <div class="ml-3 card news streaming" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Google test iOS-versie van eigen gamestreamingdienst Stadia</h5>
        <a href="https://www.nu.nl/tech/6091588/google-test-ios-versie-van-eigen-gamestreamingdienst-stadia.html" class="btn btn-primary">Naar artikel</a>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>