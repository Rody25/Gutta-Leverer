<?php
session_start();
require_once 'vendor/autoload.php'; // Google Client Library inkluderes her

// Initialiser Google Client med klient-ID og klienthemmelighet
$client = new Google_Client();
$client->setClientId("56111820490-8akho6orhherhrl8hii242r8qv31q4th.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setRedirectUri("http://localhost/APP2000/Login.php"); // Endre til URIen som håndterer Google respons
$client->addScope("email");
$client->addScope("profile");

// Lage en URL for innlogging
$login_url = $client->createAuthUrl();

// Håndter responsen fra Google etter brukerens godkjenning
if (isset($_GET['code'])) {
    try {
        error_log("Received auth code: " . $_GET['code']);
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        
        // Log responsen for debugging
        error_log("Token response: " . print_r($token, true));

        if (is_null($token) || !is_array($token)) {
            error_log("Failed to fetch access token. Response: " . print_r($token, true));
            throw new Exception('Feil ved henting av access token. Null eller ugyldig token mottatt.');
        }

        if (isset($token['error'])) {
            // Håndter feilen - for eksempel logge feilen eller vise en melding til brukeren
            error_log("Error in token response: " . htmlspecialchars($token['error']));
            echo 'Feil ved henting av access token: ' . htmlspecialchars($token['error']);
            exit();
        }

        $client->setAccessToken($token);

        // Hent brukerdata fra Google
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
        $email = $google_account_info->email;
        $name = $google_account_info->name;

        // Logg inn brukeren eller opprett ny konto i din database
        // Sjekk om e-posten allerede finnes, og håndter innlogging eller registrering etter behov

        // Sett brukerdata i en sesjon eller lignende for å holde brukeren logget inn
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        header('Location: index.php');
        exit();
    } catch (Exception $e) {
        error_log('Exception caught: ' . $e->getMessage());
        echo 'Feil under autentisering: ' . $e->getMessage();
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logg inn</title>
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
                <a href="Login.php" class="meny-link-icon">LOGG INN</a>
                <a href="kontakt oss.php" class="meny-link-icon">KONTAKT OSS</a>
                <a href="personvern.php" class="meny-link-icon">PERSONVERN</a>
            </div>
        </div>
    </header>
    <div class="hero" style="display: flex; justify-content: center; align-items: center; height: 80vh;">
        <div class="form-box" style="text-align: center; width: 100%; max-width: 400px; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <h2 style="margin-bottom: 20px;">Logg inn</h2>
            <div class="input-group" style="margin-bottom: 20px;">
                <a href="<?php echo $login_url; ?>" class="submit-btn" style="display: inline-block; width: 100%; padding: 10px; background-color: #4285f4; color: white; border: none; border-radius: 5px; text-align: center; text-decoration: none; font-size: 16px; margin-left: 40px;">Logg inn med Google</a>
            </div>
        </div>
    </div>

    <footer>
        <div class="wrapper" style="text-align: center; padding: 20px;">
            <section>
                <a href="about.php" style="margin: 0 10px;">Om oss</a>
                <a href="butikker.php" style="margin: 0 10px;">Butikker</a>
                <a href="kontakt oss.php" style="margin: 0 10px;">Kontakt oss</a>
                <a href="Vilkår.php" style="margin: 0 10px;">Vilkår</a>
            </section>
        </div>
    </footer>
</body>
</html>
