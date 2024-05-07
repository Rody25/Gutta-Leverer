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
    <header>
        <div class="wrapper">
            <div class="main-logo-container">
                <img src="https://kiwi.no/static/images/logo-kiwi.svg" alt="">
            </div>
            <div class="meny-link-icon-container">
                <a href="index.php" class="meny-link-icon">
                    <!-- <div>
                        <img src="https://banner2.cleanpng.com/20180705/lhh/kisspng-computer-icons-icon-design-magnifying-glass-clip-a-5b3de3ce2ab8c8.713829551530782670175.jpg"
                            class="magnifying-glass-icon" alt="">
                    </div> -->
                    HJEM
                </a>
                <a href="index.php" class="meny-link-icon">BESTILLE</a>
                <a href="kontakt oss.php" class="meny-link-icon">KONTAKT OSS</a>
                <a href=personvern.php class="meny-link-icon">PERSONVERN</a>
            </div>

        </div>
    </header>

    <main>
        <div class="wrapper wrapper-main">
            <div class="varer-r">

                <div class="varer-container">

                    <img src="bilder/skinke.jpg" alt="" onclick="openPopup()" class="r-image">
                    <div class="popup" id="popup">
                        <h3>Skinke</h3>
                        <p>110g</p>
                        <img src="bilder/skinke.jpg" alt="">

                        <p>23,50kr</p>
                        <a class="cart-button" href="Login.php">

                            <i class="fas fa-shopping-cart cart-icon"> </i>

                        </a>
                        <button type="button" onclick="closePopup()" class="knapp">Avslutt</button>
                    </div>
                    <h3 class="text-tag1">Skinke</h3>

                    <h3 class="text-tag1">Pris 23,50kr</h3>
                    <a class="cart-button" href="Login.php">

                        <i class="fas fa-shopping-cart cart-icon"> </i>

                    </a>
                </div>
            </div>

            <div class="varer-r">
                <div class="varer-container">

                    <img src="bilder/krydret skinke.jpg" alt="" onclick="openPopup1()" class="r-image">
                    <div class="popup" id="popup1">
                        <h3>Krydret Skinke</h3>
                        <p>110g</p>
                        <img src="bilder/krydret skinke.jpg" alt="">
                        <p>25,50kr</p>
                        <a class="cart-button" href="Login.php">

                            <i class="fas fa-shopping-cart cart-icon"> </i>

                        </a>

                        <button type="button" onclick="closePopup1()" class="knapp">Avslutt</button>
                    </div>
                    <h3 class="text-tag1">Krydret Skinke</h3>

                    <h3 class="text-tag1">Pris 25,50kr</h3>
                    <a class="cart-button" href="handleL.php">

                        <i class="fas fa-shopping-cart cart-icon"> </i>

                    </a>
                </div>
            </div>

            <div class="varer-r">
                <div class="varer-container">
                    <img src="bilder/hamburgerrygg.jpg" alt="" onclick="openPopup2()" class="r-image">
                    <div class="popup" id="popup2">
                        <h3>Hamburgerrygg</h3>
                        <p>110g</p>
                        <img src="bilder/hamburgerrygg.jpg" alt="">
                        <p>25,10kr</p>
                        <a class="cart-button" href="Login.php">

                            <i class="fas fa-shopping-cart cart-icon"> </i>

                        </a>
                        <button type="button" onclick="closePopup2()" class="knapp">Avslutt</button>
                    </div>
                    <h3 class="text-tag1">Hamburgerrygg</h3>
                    <h3 class="text-tag1">Pris 25,10kr</h3>
                    <a class="cart-button" href="handleL.php">

                        <i class="fas fa-shopping-cart cart-icon"> </i>

                    </a>
                </div>
            </div>

            <div class="varer-r">
                <div class="varer-container">
                    <img src="bilder/salami.jpg" alt="" onclick="openPopup3()" class="r-image">
                    <div class="popup" id="popup3">
                        <h3>Salami</h3>
                        <p>110g</p>
                        <img src="bilder/salami.jpg" alt="">
                        <p>20,50kr</p>
                        <a class="cart-button" href="Login.php">

                            <i class="fas fa-shopping-cart cart-icon"> </i>

                        </a>
                        <button type="button" onclick="closePopup3()" class="knapp">Avslutt</button>
                    </div>
                    <h3 class="text-tag1">Salami</h3>
                    <h3 class="text-tag1">Pris 20,50kr</h3>
                    <a class="cart-button" href="handleL.php">

                        <i class="fas fa-shopping-cart cart-icon"> </i>

                    </a>
                </div>
            </div>

            <div class="varer-r">
                <div class="varer-container">
                    <img src="bilder/hestp.jpg" alt="" onclick="openPopup4()" class="r-image">
                    <div class="popup" id="popup4">
                        <h3>Svartpølse</h3>
                        <p>110g</p>
                        <img src="bilder/hestp.jpg" alt="" class="r-image">
                        <p>27,10kr</p>
                        <a class="cart-button" href="Login.php">

                            <i class="fas fa-shopping-cart cart-icon"> </i>

                        </a>
                        <button type="button" onclick="closePopup4()" class="knapp">Avslutt</button>
                    </div>
                    <h3 class="text-tag1">Svartpølse</h3>
                    <h3 class="text-tag1">Pris 27,10kr</h3>
                    <a class="cart-button" href="handleL.php">

                        <i class="fas fa-shopping-cart cart-icon"> </i>

                    </a>
                </div>
            </div>

            <div class="varer-r">
                <div class="varer-container">
                    <img src="bilder/spekeskinke.jpg" alt="" onclick="openPopup5()" class="r-image">
                    <div class="popup" id="popup5">
                        <h3>Spekeskinke</h3>
                        <p>110g</p>
                        <img src="bilder/spekeskinke.jpg" alt="" class="r-image">
                        <p>30,50kr</p>
                        <a class="cart-button" href="Login.php">

                            <i class="fas fa-shopping-cart cart-icon"> </i>

                        </a>
                        <button type="button" onclick="closePopup5()" class="knapp">Avslutt</button>
                    </div>
                    <h3 class="text-tag1">Spekeskinke</h3>
                    <h3 class="text-tag1">Pris 30,50kr</h3>
                    <a class="cart-button" href="handleL.php">

                        <i class="fas fa-shopping-cart cart-icon"> </i>

                    </a>
                </div>
            </div>

        </div>

        <script>
        let popup = document.getElementById("popup")

        function openPopup() {
            popup.classList.add("open-popup");

        }

        function closePopup() {
            popup.classList.remove("open-popup");

        }

        let popup1 = document.getElementById("popup1")


        function openPopup1() {
            popup1.classList.add("open-popup1");

        }

        function closePopup1() {
            popup1.classList.remove("open-popup1");

        }

        let popup2 = document.getElementById("popup2")


        function openPopup2() {
            popup2.classList.add("open-popup2");

        }

        function closePopup2() {
            popup2.classList.remove("open-popup2");

        }



        let popup3 = document.getElementById("popup3")


        function openPopup3() {
            popup3.classList.add("open-popup3");

        }

        function closePopup3() {
            popup3.classList.remove("open-popup3");

        }

        let popup4 = document.getElementById("popup4")


        function openPopup4() {
            popup4.classList.add("open-popup4");

        }

        function closePopup4() {
            popup4.classList.remove("open-popup4");

        }

        let popup5 = document.getElementById("popup5")


        function openPopup5() {
            popup5.classList.add("open-popup5");

        }

        function closePopup5() {
            popup5.classList.remove("open-popup5");

        }
        </script>



    </main>

    <footer class="kiwi-footer">
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