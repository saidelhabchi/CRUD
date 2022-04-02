<?php $id = $_GET["id"];
    $basedonnees = "commerce";
    $compte = mysqli_connect("localhost","root","",$basedonnees);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <style>
        .button{
            background-color : #eee;
            color : black;
            padding : 7px 10px;
            position: relative;
            top : 20px;
            border : 1px solid black;
            border-radius : 5px;
            box-shadow : 0px 0px 10px #ccc ;
        }
        a{
            text-decoration : none;
        }
    </style>
</head>
<body>
    <h1>Modify Page</h1>
     <?php
        echo "<form action='#' method='post'>
        Nouveau Nom : <input type='text' name='nom'><br><br>
        Nouveau Prix : <input type='text' name='prix'><br><br>
        <input type='submit' name='submit' value='Modifier'>
        </form>";
        echo "<a href='../liste.php' class='button'>Liste</a> <a href='../Home.php' class='button'>Home</a>";
        if(isset($_POST["nom"])&&isset($_POST["prix"])){
            $name = $_POST["nom"];
            $prix = $_POST["prix"];
            $result = mysqli_query($compte,"UPDATE produits SET nom = '$name', prix = '$prix' where id = '$id'");   
        }
    ?>
</body>
</html>