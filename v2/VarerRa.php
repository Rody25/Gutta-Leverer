<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Landing Page</title>
    <link rel="stylesheet" href="stiler/lol.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/bd95ed5b2c.js" crossorigin="anonymous"></script>
</head>

<body>

    <header class=rheading>
        <div class="wrapper">
            <div class="main-logo-container">
                <img class="meny-logo" src="bilder/Rema1000.png" alt="">
            </div>
            <div class="meny-link-icon-container">
                <a href="index.php" class="meny-link-icon">

                    HJEM
                </a>
                <a href="Login.php" class="meny-link-icon">LOGG INN</a>
                <a href="kontakt oss.php" class="meny-link-icon">KONTAKT OSS</a>
                <a href=personvern.php class="meny-link-icon">PERSONVERN</a>

            </div>

        </div>
    </header>
    <div class="listebanner2">
        <p class="logo">Kategori</p>
        <div class="cart"> <i class="fa-solid fa-shopping-cart cart-icon"></i>
            <p id="count">0</p>
        </div>
    </div>
    <div class="container">
        <div id="root"></div>
        <div class="sidebar">
            <div class="head2">
                <p>My Cart</p>
            </div>
            <div id="cartItem">Your cart is empty</div>
            <div class="foot">
                <h3>Total</h3>
                <h2 id="total">0kr</h2>
            </div>
        </div>
    </div>
    <?php
    // Embedding JavaScript code
    echo '<script>';

    // JavaScript product data
    echo 'const product = [
        {
            id: 0,
            Image: "bilder/dopapir.jpg",
            titile: "Dopapir",
            price: 120,
        },

        {
            id: 1,
            Image: "bilder/tannbørste.png",
            titile: "Tannbørste",
            price: 120,
          },
        
          {
            id: 2,
            Image: "bilder/omo.jpg",
            titile: "Omo",
            price: 120,
          },
        
          {
            id: 3,
            Image: "bilder/sjampo.png",
            titile: "Sjampo",
            price: 120,
          },
        
          {
            id: 4,
            Image: "bilder/såpe.png",
            titile: "Såpe",
            price: 120,
          },
        
          {
            id: 5,
            Image: "bilder/kjøkkenpapir.png",
            titile: "Kjøkkenpapir",
            price: 120,
          },
    ];';

    // JavaScript variable for storing cart items
    echo 'var cart = [];';

    // JavaScript function for adding items to cart
    echo 'function addtocart(a) {
        cart.push({...product[a]});
        displaycart();
    }';

    // JavaScript function for displaying cart items
    echo 'function displaycart() {
        let j = 0, total=0;
        document.getElementById("count").innerHTML=cart.length; // Update the cart count
        if (cart.length == 0) {
            document.getElementById("cartItem").innerHTML = "Your cart is empty";
            document.getElementById("total").innerHTML = "kr "+0+".00"; 
        } else {
            document.getElementById("cartItem").innerHTML = cart.map((items) => {
                var { Image, titile, price } = items;
                total=total+price;
                document.getElementById("total").innerHTML = "kr " +total+".00";
                return `
                    <div class="cart-item">
                        <div class="row-img">
                            <img class="rowimg" src="${Image}">
                        </div>
                        <p style="font-size:12px;">${titile}</p>
                        <h2 style="font-size:15px;">${price}.00</h2>
                        <i class="fa-solid fa-trash" onclick="delElement(${j++})"></i>
                    </div>`;
            }).join("");
        }
    }';

    // JavaScript function for deleting items from cart
    echo 'function delElement(a) {
        cart.splice(a, 1);
        displaycart();
    }';

    // JavaScript code for rendering product boxes
    echo 'document.getElementById("root").innerHTML = product.map((item) => {
        var { id, Image, titile, price } = item;
        return `
            <div class="box">
                <div class="img-box">
                    <img class="images" src="${Image}" alt="${titile}">
                </div>
                <div class="bottom">
                    <p>${titile}</p>
                    <h2>${price}.00</h2>
                    <button onclick="addtocart(${id})">Add to cart</button>
                </div>
            </div>`;
    }).join("");';

    echo '</script>';
    ?>


    </main>
    <footer class="rema-footer">
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
                <a href="kontakt oss.php">Kontakt oss</a>
                <a href="Vilkår.php">Vilkår</a>
            </section>
        </div>
    </footer>


</body>

</html>