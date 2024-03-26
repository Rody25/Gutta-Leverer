<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stiler/styles.css">

</head>

<body>
    <header class="mheading">
        <div class="wrapper">
            <div class="main-logo-container">
                <img class="meny-logo" src="bilder/Menylogo.jpg" alt="">
            </div>
            <div class="meny-link-icon-container">
                <a href="index.php" class="meny-link-icon">
                    <!-- <div>
                        <img src="https://banner2.cleanpng.com/20180705/lhh/kisspng-computer-icons-icon-design-magnifying-glass-clip-a-5b3de3ce2ab8c8.713829551530782670175.jpg"
                            class="magnifying-glass-icon" alt="">
                    </div> -->
                    <div>HJEM</div>
                </a>
                <a href="index.php" class="meny-link-icon">KONTAKT OSS</a>
                <a href="#" class="meny-link-icon">PERSONVERN</a>
            </div>
            <div class="search-icon-container">
                <img src="https://banner2.cleanpng.com/20180705/lhh/kisspng-computer-icons-icon-design-magnifying-glass-clip-a-5b3de3ce2ab8c8.713829551530782670175.jpg"
                    class="magnifying-glass-icon" alt="">
            </div>
        </div>
    </header>

    <main>
        <div class="wrapper wrapper-main">
            <div class="card-image-container">
                <img class="main-logo-container__image" src="bilder/Frukt og grønnsaker.jpg" alt="">
            </div>
            <a style="margin-top: -100px; font-size: 2rem; color: white" href="VarerK.php">Mat varer</a>
            <div class="card-image-container">
                <img class="main-logo-container__image" src="bilder/Drikke.jpg" alt="">
            </div>
            <a style="margin-top: -100px; font-size: 2rem; color: white" href="VarerK.php">Drikke</a>
            <div class="card-image-container">
                <img class="main-logo-container__image" src="bilder/Gitems.webp" alt="">
            </div>
            <a style="margin-top: -100px; font-size: 2rem; color: white" href="VarerK.php">Andre varer</a>

        </div>
    </main>


    <footer>
        <div class="wrapper wrapper-footer">
            <div class="footer-container">
                <div class="social">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-snapchat"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </div>

                <div class="items-container">
                    <ul class="list">
                        <li><a href="about.php">Om oss</a></li>
                        <li><a href="index.php">Butikker</a></li>
                        <li><a href="kontakt.php">Få hjelp</a></li>
                        <li><a href="#">Vilkår</a></li>
                    </ul>
                </div>


                <p>&copy; <?php echo date("Y"); ?> Guttaleverer. All rights reserved.</p>
            </div>
        </div>

        <script src="bilder/https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>

    </footer>

</body>

</html>