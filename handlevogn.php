<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Summary</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/bd95ed5b2c.js" crossorigin="anonymous"></script>
    <style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    header {
        width: 100vw;
        height: 10vh;
        background-color: #73c66c;
        border-bottom: 1px solid #73c66c;
        display: flex;
        justify-content: center;
    }

    .gheading {
        background-color: rgb(35, 107, 7);
    }

    .wrapper {
        max-width: 1200px;
        width: 100vw;
        height: 100%;
        display: flex;
        justify-content: space-between;
    }

    .meny-link-icon-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    .meny-link-icon {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: white;
        padding: 20px;
        width: 12vw;
        gap: 20;
    }

    .logo {
        padding-top: 23px;
        color: white;
        background-color: inherit;
    }

    .logo1 {
        font-size: 23px;
    }

    .container {
        width: 70%;
        margin-bottom: 30px;
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        justify-content: space-between;
    }

    main {
        width: 100vw;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .cart-items-container {
        max-height: 300px;
        overflow-y: auto;
    }

    .cart-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 10px;
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .item-info {
        flex-grow: 1;
        padding: 0 10px;
    }

    .remove-button {
        background-color: transparent;
        border: none;
        color: green;
        cursor: pointer;
    }

    .remove-button i.fas {
        font-size: 20px;
    }

    .card {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        height: 500px;
        width: 350px;
        overflow-y: hidden;
    }

    .card-image {
        width: 100%;
        border-bottom: 5px solid black;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }

    .card-content {
        flex: 1;
        overflow-y: auto;
        max-height: 300px;
    }

    .card img {
        width: auto;
        height: auto;
        max-width: 350px;
        min-height: 150px;
        max-height: 150px;
    }

    .listebanner {
        margin-top: 10px;
        margin-bottom: 30px;
        background-color: rgb(35, 107, 7);
        width: 100vw;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: antiquewhite;
    }

    .bestill-link {
        margin-top: 20px;
        border-radius: 8px;
    }

    .bestill-link a {
        display: inline-block;
        padding: 20px 40px;
        background-color: rgb(35, 107, 7);
        color: white;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .bestill-link a:hover {
        background-color: #333;
    }

    footer {
        margin-top: 30px;
        padding-top: 9vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        height: 20vh;
        background-color: rgb(35, 107, 7);
        position: relative;
        bottom: 0;
    }

    footer a {
        padding: 12px 20px;
        color: white;
    }

    footer a:hover {
        color: black;
    }
    </style>
</head>

<body>
    <header class="gheading">
        <div class="wrapper">
            <div class="main-logo-container">
                <h1 class="logo">Guttaleverer</h1>
            </div>
            <div class="meny-link-icon-container">
                <a href="index.php" class="meny-link-icon">HJEM</a>
                <a href="Login.php" class="meny-link-icon">LOGG INN</a>
                <a href="kontakt oss.php" class="meny-link-icon">KONTAKT OSS</a>
                <a href="personvern.php" class="meny-link-icon">PERSONVERN</a>
            </div>
        </div>
    </header>

    <div class="listebanner">
        <p class="logo1">Handlekurv:</p>
    </div>

    <main>
        <div class="container">
            <!-- Kiwi Store -->
            <div class="card">
                <div class="card-image">
                    <img src="bilder/Kiwi.png" alt="Kiwi">
                </div>
                <div class="card-content cart-items-container" id="kiwi-cart">
                    <!-- Kiwi products will be displayed here -->
                </div>
            </div>

            <!-- Meny Store -->
            <div class="card">
                <div class="card-image">
                    <img src="bilder/Menylogo.jpg" alt="Meny">
                </div>
                <div class="card-content cart-items-container" id="meny-cart">
                    <!-- Meny products will be displayed here -->
                </div>
            </div>

            <!-- Rema 1000 Store -->
            <div class="card">
                <div class="card-image">
                    <img src="bilder/Rema1000.png" alt="Rema 1000">
                </div>
                <div class="card-content cart-items-container" id="rema-cart">
                    <!-- Rema products will be displayed here -->
                </div>
            </div>
        </div>

        <div class="bestill-link">
            <a href="checkout.php">Bestill</a>
            <a href="index.php">Avbryt</a>
        </div>
    </main>

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
                <a href="kontakt oss.php">Kontakt oss</a>
                <a href="Vilkår.php">Vilkår</a>
            </section>
        </div>
    </footer>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const customerID = 1; // Replace with the actual customer ID
        fetch(`get_cart_summary.php?customerID=${customerID}`)
            .then(response => response.json())
            .then(data => {
                displayCart(data);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    });

    function displayCart(data) {
        const kiwiCart = document.getElementById("kiwi-cart");
        const menyCart = document.getElementById("meny-cart");
        const remaCart = document.getElementById("rema-cart");

        kiwiCart.innerHTML = '';
        menyCart.innerHTML = '';
        remaCart.innerHTML = '';

        data.forEach(store => {
            store.cartItems.forEach(item => {
                const productElement = document.createElement("div");
                productElement.classList.add("cart-item");
                productElement.innerHTML = `
                    <img src="${item.Image}" alt="${item.title}" style="width:auto; height:auto;">
                    <div class="item-info">
                        <p>${item.title}</p>
                        <h2>${item.Price}kr</h2>
                        <p>Quantity: ${item.Quantity}</p>
                    </div>
                    <button class="remove-button" onclick="removeFromCart('${item.ProductID}', '${store.storeID}')">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                `;

                switch (store.storeID) {
                    case 'K':
                        kiwiCart.appendChild(productElement);
                        break;
                    case 'M':
                        menyCart.appendChild(productElement);
                        break;
                    case 'R':
                        remaCart.appendChild(productElement);
                        break;
                }
            });
        });
    }

    function removeFromCart(productID, storeID) {
        console.log(`Removing product with ID: ${productID}`); // Debugging line
        fetch('remove_from_cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                customerID: 1, // Replace with the actual customer ID
                productID: productID,
                storeID: storeID
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.message);
            // Refresh cart display
            const customerID = 1; // Replace with the actual customer ID
            fetch(`get_cart_summary.php?customerID=${customerID}`)
                .then(response => response.json())
                .then(data => {
                    displayCart(data);
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }
    </script>
</body>
</html>
