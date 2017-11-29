<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
    <link rel="stylesheet" href="css/phpstyle1.css">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Loïc
 * Date: 27/11/2017
 * Time: 15:13
 */
if(!empty($_POST['choix'])) {
    if(!empty($_POST['my_checkbox'])) {

        if(isset($_POST['submit'])){
            $to = "loic.losson@gmail.com"; // this is your Email address;
            $subject = "la nouvelle";
            $message = $_POST['choix'];
            $from = $_POST['nom'];
            $headers = "From:" . $from;
            mail($to,$subject,$message,$headers);
            // You can also use header('Location: thank_you.php'); to redirect to another page.
            echo("<div class='php'> <h1>c'est bien parti !</h1> "."<a href='index.html' class='button'>retour au site</a></div>");
        }

    } else {

        echo("<div class='php'><h1>veuillez cliquer sur j'accepte</h1>"."<a href='index.html' class='button'>retour au site</a></div>");

    }}
else{
    echo("<div class='php'><h1>faîtes un choix</h1>"."<a href='index.html' class='button'>retour au site</a></div>");
}
?>

</body>
</html>


