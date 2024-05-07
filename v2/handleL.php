<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Landing Page</title>
    <link rel="stylesheet" href="stiler/lol.css">
</head>

<body>
    <div class="container">
        <button type="submit" class="btn" onclick="openPopup()">Submit</button>
        <div class="popup" id="popup">
            <img src="bilder/urge.png" alt="">
            <button type="button" onclick="closePopup()">Avslutt</button>
        </div>

        <button type="submit" class="btn" onclick="openPopup1()">Submit</button>

        <div class="popup" id="popup1">
            <img src="bilder/vegansk.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero fugit excepturi ea necessitatibus
                deleniti, voluptatibus quis minima, officia vel velit nostrum optio aut laudantium quod neque eaque
                recusandae debitis soluta.</p>
            <button type="button" onclick="closePopup1()" class="knapp">Avslutt</button>
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
    </script>
</body>

<!-- <div class="container">
        <h1>Checkout</h1>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" required>

            <label for="zip">Zip Code:</label>
            <input type="text" id="zip" name="zip" required>

            <label for="country">Country:</label>
            <select id="country" name="country" required>
                <option value="">Select Country</option>
                <option value="USA">United States</option>
                <option value="UK">United Kingdom</option>
                <option value="CA">Canada</option>
                
            </select>

            <button type="submit">Place Order</button>
        </form>
    </div> -->

</html>