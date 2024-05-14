<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="checkout.css">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.smiley-bg {
    background-image: url('bilder/smiley.jpg');
    /* Replace 'smiley.png' with the path to your smiley face image */
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    background-color: rgba(255, 255, 255, 0.8);
    /* Add a semi-transparent white background */
    padding: 20px;
    border-radius: 10px;
}

.content {
    text-align: center;
}

a {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

a:hover {
    background-color: #0056b3;
}
</style>



<body>
    <div class="smiley-bg">
        <div class="container">
            <div class="content">
                <p>Ordreren er levert og varene er snart på vei til deg:)</p>
                <p>Betaling gjøres ved døren!</p>
                <a href="index.php">Gå tilbake til forsiden</a>
            </div>
        </div>
    </div>
</body>

</html>