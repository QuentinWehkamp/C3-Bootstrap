<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="files/icon.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="master.css">
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

    <div class="container text-white">
        <form action="comment.php" method="POST">
            <label for="name">Naam</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="opmerking">Opmerking</label><br>
            <textarea name="opmerking" id="opmerking" cols="80" rows="5"></textarea><br>
            <input type="submit">
        </form>
    </div>
    <br><br>

    <?php
    include 'conn.php';

    // create table
    $table = "CREATE TABLE IF NOT EXISTS comments (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    comment TEXT(280) NOT NULL,
    date TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
    )";

    $db->query($table);
    //

    // insert comment to database
    if (isset($_POST["name"], $_POST["opmerking"])) {
        $name = $_POST['name'];
        $comment = $_POST['opmerking'];

        $insertcomment = "INSERT IGNORE INTO comments(name, comment) VALUES('$name','$comment')";

        if (isset($name, $comment)) {
            if ($db->query($insertcomment)) {
                echo "<p>Opmerking geplaatst</p>";
            }
        }
    };
    //

    // Display comment
    $query = "SELECT id, name, comment FROM comments";
    $result = $db->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="container media text-white">';
            echo    '<img class=" mr-3" src="files/p_image.jpg" alt="Generic placeholder image">';
            echo    '<div class="media-body">';
            echo        '<h5 class="mt-0">' . $row["name"] . '</h5>';
            echo        '<p>' . $row["comment"].'</p>';
            echo    '</div>';
            echo '</div>';
            echo '<br>';
        };
    };
    //

    $db->close();
    ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>