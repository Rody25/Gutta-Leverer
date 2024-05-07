<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="stiler/styles.css">

</head>

<body>

    <header class="gheading">
        <div class="wrapper">
            <div class="main-logo-container">
                <h1 class="logo">Guttaleverer</h1>
            </div>
            <div class="meny-link-icon-container">



                <a href="index.php" class="meny-link-icon">HJEM</a>
                <a href="index.php" class="meny-link-icon">BESTILLE</a>
                <a href="kontakt oss.php" class="meny-link-icon">KONTAKT OSS</a>
                <a href="personvern.php" class="meny-link-icon">PERSONVERN</a>
            </div>

        </div>
    </header>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()"> Log In</button>
                <button type="button" class="toggle-btn" onclick="registrer()"> Registrer</button>
            </div>

            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="Bruker ID" required>
                <input type="text" class="input-field" placeholder="Skriv passord" required>
                <input type="checkbox" class="chech-box"><span>Husk Passord</span>
                <button type="submit" class="submit-btn">Log in</button>
            </form>

            <form id="registrer" class="input-group">
                <input type="text" class="input-field" placeholder="Bruker ID" required>
                <input type="email" class="input-field" placeholder="Email ID" required>
                <input type="text" class="input-field" placeholder="Skriv passord" required>
                <input type="text" class="input-field" placeholder="Adresse" required>
                <input type="checkbox" class="chech-box"><span>Enig i terms</span>
                <button type="submit" class="submit-btn">Registrer</button>
            </form>
        </div>





    </div>





    <script>
    var x = document.getElementById("login")
    var y = document.getElementById("registrer")
    var z = document.getElementById("btn")

    function registrer() {
        x.style.left = "-400px"
        y.style.left = "50px"
        z.style.left = "110px"
    }

    function login() {
        x.style.left = "50px"
        y.style.left = "450px"
        z.style.left = "0"
    }
    </script>



    <footer>
        <div class="wrapper">
            <section>
                <div class="footer-icon"></div>
                <div class="footer-icon"></div>
                <div class="footer-icon"></div>
                <div class="footer-icon"></div>
            </section>

            <section>
                <a href="about.php">Om oss</a>
                <a href="butikker.php">Butikker</a>
                <a href="kontakt.php">Få hjelp</a>
                <a href="">Vilkår</a>
            </section>
        </div>
    </footer>
</body>

</html>