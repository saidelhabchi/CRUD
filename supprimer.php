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
    <title>Supprimer</title>
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
    <h1>Delete Page</h1>
    <?php
        $result = mysqli_query($compte, "DELETE FROM produits WHERE id = '$id'");
    
        echo "this item has been deleted press Home to return to Home Page or List to return to List Page<br>";
        echo "<a href='../home.php' class='button'>Home</a> <a href='../liste.php' class='button'>List</a>"
    ?>  
</body>
</html>