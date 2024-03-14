<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Guttaleverer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="site.css" rel="stylesheet" />
</head>
<body>
<nav>
    <input type="checkbox" id="check" />
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>

    <label class="logo">Guttaleverer</label>
    <ul>
        <li><a href="index.php">Hjem</a></li>
        <li><a href="#">Bestille</a></li>
        <li><a href="#">Kontakt oss</a></li>
        <li><a href="Personvern.html">Personvern</a></li>
    </ul>
</nav>

<div class="container text-center py-4">
    <form action="http://www.google.com/search" method="get" class="search-bar">
        <input type="text" placeholder="search anything" name="q" />
        <button type="submit"><img src="search.png" alt="" /></button>
    </form>
    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <div class="card">
                <img src="Kiwi.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <a href="Kiwi.html" class="btn btn-primary">Se produkt</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <img src="Meny.png" class="card-img-top" alt="..." />
                <div class="card-body1">
                    <a href="Meny.html" class="btn btn-primary">Se produkt</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <img src="Rema1000.png" class="card-img-top" alt="bilde" />
                <div class="card-body2">
                    <a href="Rema1000.html" class="btn btn-primary">Se produkt</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container py-5">
        <div class="row justify-content-between">
            <div class="col-12 col-md-6">
                <div class="social">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-snapchat"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <ul class="list">
                    <li><a href="about.html">Om oss</a></li>
                    <li><a href="index.html">Butikker</a></li>
                    <li><a href="kontakt.html">Få hjelp</a></li>
                    <li><a href="#">Vilkår</a></li>
                </ul>
            </div>
        </div>
        <p>&copy; <?php echo date("Y"); ?> Guttaleverer. All rights reserved.</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
