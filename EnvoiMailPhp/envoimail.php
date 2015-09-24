<?php 
$headers = "From: \"expediteur moi\"<moi@domaine.com>\n";
$headers .= "Reply-To: moi@domaine.com\n";
$recepteur =  $_POST['adresse'];
$object = $_POST['object'];
$message = $_POST['message'];

f(mail($recepteur,$message,$object,$headers))
{
        echo "L'email a bien été envoyé.";
}
else
{
        echo "Une erreur c'est produite lors de l'envois de l'email.";
}
?>
