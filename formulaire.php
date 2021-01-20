<?php


try
{

    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$pseudo = $_POST['pseudo'];
$pass = $_POST['pass'];
$passConfirm = $_POST['pass2']; 
$email = $_POST['email'];


$req = $bdd->query("SELECT pseudo FROM membres WHERE pseudo = '$pseudo'"); 
$count = $req->rowCount(); 

if($count == 0) 
{
    if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)){

        if($pass == $passConfirm) 
        {
            $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
            $req->execute(array(
                'pseudo' => $pseudo,
                'pass' => $pass_hache,
                'email' => $email
            ));
            $msg = 'Félicitations votre compte vient d\être créé'; 

            echo '<p> Félicitations, vous êtes bien enregistré sur notre site ! Vous pouvez vous connecter ou bien retourner à la page d\'acceuil'; 
            $objet = 'Salut' .$pseudo . 'ton compte a bien été créé ! ' ;
            $contenu = '
                <html>
                <head>
                <title>Votre compte a bien été créé sur notre site ! </title>
                </head>
                <body>
                <p>Bonjour'.$pseudo.'</p>
                <p>Ton compte a bien été créé tu peux maintenant te connecter ! </p>
                </body>
                </html>'; 
                
                $entetes =
                'Content-type: text/html; charset=utf-8' . "\r\n" .
                'From: email@domain.tld' . "\r\n" .
                'Reply-To: email@domain.tld' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
                
                mail($email, $objet, $contenu, $entetes);
        }
        else
        {
            $msg = 'Ces mots de passe ne correspondent pas';
            echo 'Ces mots de passe ne correspondent pas, veuiller réessayer !'; 
        }
    }
    else 
    {
        echo 'Cette adresse mail est invalide, veillez réessayer'; 

    }
}
else
{
    echo 'Ce pseudo est déja utilisé, veuillez en choisir un autre veuillez réessayer';
 
}


// On pourrait ajouter d'autres étapes pour renforcer la sécurité de l'inscription. 
// En particulier, renseignez-vous sur les systèmes de Captcha qui demandent au visiteur de recopier un mot issu d'une image afin de vérifier qu'il ne s'agit pas d'un robot. 
// D'autre part, vous pourriez demander une confirmation par e-mail afin de vérifier que l'adresse est correcte.


