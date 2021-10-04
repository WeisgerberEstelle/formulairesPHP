<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$errors="";

if (empty($_POST["user_name"])){
        
    $errors.= "Name is required </br>" . PHP_EOL;
}

if (empty($_POST["user_firstname"])){
        
    $errors.= "Firstname is required </br>";
}

if (empty($_POST["user_email"])) {
    
    $errors.= "Email is required </br>";

}else if (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {

    $errors .= "Invalid email format</br>";
}

if(empty($_POST["user_tel"])){
        
   $errors.= "Tel is required</br>";
}

if(empty($_POST["user_subject"])){
        
    $errors.= "Subject is required</br>";
}

if(empty($_POST["user_message"])){
        
    $errors.= "Message is required</br>";
}

if (empty($errors)){
?>
<p>Merci <?php echo $_POST ["user_name"] . " " ; ?><?php echo $_POST ["user_firstname"] . " ";?> de nous avoir contacté à propos de <?php echo $_POST[ "user_subject"] . " "; ?>.

Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST["user_email"] . " " ; ?> ou par téléphone au <?php echo $_POST ["user_tel"] . " " ; ?> dans les plus brefs délais pour traiter votre demande : 

<?php echo $_POST ["user_message"]; ?>
</p>

<?php }else{

    echo $errors;
} ?>


</body>
</html>
