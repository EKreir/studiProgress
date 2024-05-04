<?php
require_once "/home/eliess/studiwork/MVC/models/user.php";
$email = $_POST['email'];
$user = new User($email);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
        <h1>Profile</h1>
        <p>Bienvenue sur votre page de profil !</p>
        <ul>
            <li>Email : <?php echo $user->getEmail(); ?></li>
        </ul>
        <a href="<?php echo BASE_URL; ?> /Logout">Se déconnecter</a>
    </body>
</html>