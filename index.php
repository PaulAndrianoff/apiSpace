<?php
<<<<<<< HEAD
include_once "config.php";

$headers = array( 
    'Accept: application/json'
);
=======
include 'includes/config.php';
include 'includes/handle_form.php';
$query = $pdo -> query('SELECT * FROM inscription');
$users = $query -> fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>partiel T2</title>
    <!-- <link rel="stylesheet" href="src/css/reset.css"> -->
    <link rel="stylesheet" href="src/css/style.min.css">
</head>
<body>
    <div class="wrapper-inscription">
        <!-- Viewing data -->
        <h1 class="title-inscription">Bienvenue sur TODO by Serhat</h1>
        <h4 class="title-formulaire-inscription">CRÉEZ UN COMPTE</h4>
        <p class="description">Gérez vos tâches et vos projets partout avec Todoist. Chez vous, à l'école, au bureau ou en ligne.</p>

        <!-- IDENTIFICATION FORM -->
        <div class="messages success">
            <?php foreach($success_messages as $_sucess):?>
                <p><?php echo $_sucess ?></p>
            <?php endforeach ?>
        </div>

        <div class="messages error">
            <?php foreach($error_messages as $_error):?>
                <p><?php echo $_error ?></p>
            <?php endforeach ?>
        </div>
        <form action="#" method="POST" class="identification-form">
            <p>*Champs obligatoire</p>
            <div class="<php array_key_exists('pseudo', $error_messages) ? 'error' : '' ?>">
                <input required type="text" name="pseudo" id="pseudo-identification" value="<?php $_POST['pseudo'] ?>" placeholder="Votre pseudo*">
            </div>
            <div >
                <input required type="password" name="password" id="password"  placeholder="Entrer votre mot de pass*">
            </div>
            <div>
                <input  required type="password" name="password_confirm" id="password_confirm"  placeholder="Confirmer votre mot de pass*">
            </div>
            <div >
                <input required type="email" name='email' id="email" placeholder="Entrez votre email*">
            </div>
            <div class="button-inscription">
                <input type="submit" name="submit_form" value="S'inscrire" >
            </div>
>>>>>>> 4ad957758a8b81a97ec205be900f60cee95f2c46

$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36';

<<<<<<< HEAD
// Instantiate curl
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://launchlibrary.net/1.2/agency/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($curl, CURLOPT_USERAGENT, $ua);
$agency = curl_exec($curl);
curl_close($curl);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://launchlibrary.net/1.2/mission/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($curl, CURLOPT_USERAGENT, $ua);
$mission = curl_exec($curl);
curl_close($curl);
=======
        <!--  ERROR MESSAGES-->

    </div>
    <footer>
        <script src="src/js/script.js"></script>
    </footer>
</body>
>>>>>>> 4ad957758a8b81a97ec205be900f60cee95f2c46

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://launchlibrary.net/1.2/pad/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($curl, CURLOPT_USERAGENT, $ua);
$pad = curl_exec($curl);
curl_close($curl);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://launchlibrary.net/1.2/location/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($curl, CURLOPT_USERAGENT, $ua);
$location = curl_exec($curl);
curl_close($curl);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://launchlibrary.net/1.2/rocket/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($curl, CURLOPT_USERAGENT, $ua);
$rocket = curl_exec($curl);
curl_close($curl);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://launchlibrary.net/1.2/launch/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($curl, CURLOPT_USERAGENT, $ua);
$launch = curl_exec($curl);
curl_close($curl);

// Json decode
$agency = json_decode($agency);
$mission = json_decode($mission);
$pad = json_decode($pad);
$location = json_decode($location);
$rocket = json_decode($rocket);
$launch = json_decode($launch);

// Show result
echo '<pre>';
print_r($agency);
print_r($mission);
print_r($pad);
print_r($location);
print_r($rocket);
print_r($launch);
echo '</pre>';