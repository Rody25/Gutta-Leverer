<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Landing Page</title>
    <link rel="stylesheet" href="stiler/lol.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/bd95ed5b2c.js" crossorigin="anonymous"></script>
    <style>
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
    </style>
</head>

<body>
    <header>
        <div class="wrapper">
            <div class="main-logo-container">
                <img src="https://kiwi.no/static/images/logo-kiwi.svg" alt="">
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
        <p class="logo">Annet:</p>
        <div class="cart">
            <a class="cart-button" href="handlevogn.php">
                <i class="fa-solid fa-shopping-cart cart-icon"></i>
            </a>
            <p id="count">0</p>
        </div>
    </div>

    <div class="container">
        <div id="root"></div>
        <div class="sidebar">
            <div class="head">
                <p>My Cart</p>
            </div>
            <div id="cartItem" class="cart-items-container">Your cart is empty</div>
            <div class="foot">
                <h3>Total</h3>
                <h2 id="total">0kr</h2>
            </div>
            <a class="button" href="handlevogn.php" onclick="saveCart()">Save Cart</a>

        
        </div>
    </div>

    <?php
    include('db_connect.php'); // Ensure this points to your actual database connection script

    try {
        $stmt = $conn->prepare("SELECT ProductID, Name AS title, Price, Image, Quantity FROM Products WHERE Category = 'Godteri' AND StoreID = 'K'");
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "An error occurred: " . $e->getMessage();
        exit;
    }
    ?>

    <script>
    const products = <?php echo json_encode($products); ?>;
    var cart = [];

    function addToCart(productID) {
        const item = products.find(p => p.ProductID === productID);
        if (!item || item.Quantity <= 0) return;
        const cartItem = cart.find(p => p.ProductID === productID);
        if (cartItem) {
            cartItem.Quantity += 1;
        } else {
            cart.unshift({
                ...item,
                Quantity: 1
            });
        }
        item.Quantity -= 1; // Decrease available quantity

        // Send the updated cart and products to the server
        updateCartAndProductsOnServer();

        displayCart();
        displayProducts();
    }

    function removeFromCart(productID) {
        const cartItemIndex = cart.findIndex(p => p.ProductID === productID);
        if (cartItemIndex > -1) {
            const cartItem = cart[cartItemIndex];
            cartItem.Quantity -= 1;
            const product = products.find(p => p.ProductID === productID);
            product.Quantity += 1; // Increase available quantity

            if (cartItem.Quantity <= 0) {
                cart.splice(cartItemIndex, 1); // Remove item if quantity is 0
            }

            // Send the updated cart and products to the server
            updateCartAndProductsOnServer();

            displayCart();
            displayProducts();
        }
    }

    function displayCart() {
        let total = 0;
        document.getElementById("cartItem").innerHTML = cart.map((item, index) => {
            total += parseFloat(item.Price) * item.Quantity;
            return `
                    <div class="cart-item">
                        <img src="${item.Image}" alt="${item.title}" style="width:50px; height:auto;">
                        <div class="item-info">
                            <p>${item.title}</p>
                            <h2>${item.Price}kr</h2>
                            <p>Quantity: ${item.Quantity}</p>
                        </div>
                        <button class="remove-button" onclick="removeFromCart('${item.ProductID}')">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>`;
        }).join("");

        document.getElementById("total").innerHTML = total.toFixed(2) + "kr";
        document.getElementById("count").innerHTML = cart.length;
    }

    function displayProducts() {
        document.getElementById("root").innerHTML = products.map((item) => {
            return `
                <div class="box">
                    <img src="${item.Image}" alt="${item.title}" style="width:100px; height:auto;">
                    <p>${item.title}</p>
                    <h2>${item.Price}kr</h2>
                    <p>Available Quantity: ${item.Quantity}</p>
                    <button onclick="addToCart('${item.ProductID}')">Add to cart</button>
                </div>`;
        }).join("");
    }

    function saveCart() {
        if (cart.length === 0) {
            alert("The cart is empty!");
            return;
        }

        fetch('save_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    customerID: 1, // Replace with the actual customer ID
                    cartItems: cart
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                console.log(data);
                alert("Cart saved successfully.");
            })
            .catch((error) => {
                console.error('Error:', error);
                alert("Failed to save cart.");
            });
    }

    function updateCartAndProductsOnServer() {
        fetch('update_cart_and_products.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    customerID: 1, // Replace with the actual customer ID
                    cartItems: cart,
                    products: products
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log(data.message);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }

    document.addEventListener("DOMContentLoaded", () => {
        fetch('get_cart_and_products.php?customerID=1') // Replace with the actual customer ID
            .then(response => response.json())
            .then(data => {
                cart = data.cartItems.map(cartItem => {
                    const product = products.find(p => p.ProductID === cartItem.ProductID);
                    if (product) {
                        return {
                            ...product,
                            Quantity: cartItem.Quantity
                        };
                    }
                    return cartItem;
                });
                data.products.forEach(updatedProduct => {
                    const product = products.find(p => p.ProductID === updatedProduct.ProductID);
                    if (product) {
                        product.Quantity = updatedProduct.Quantity;
                    }
                });
                displayCart();
                displayProducts();
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    });

    displayProducts();
    </script>

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
                <a href="kontakt oss.php">Kontakt oss</a>
                <a href="Vilkår.php">Vilkår</a>
            </section>
        </div>
    </footer>
</body>

</html>