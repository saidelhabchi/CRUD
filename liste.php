<!DOCTYPE html>
<html>
<head>
    <title>liste</title>
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
    <h1>List Page</h1>
    <?php 
        $link = mysqli_connect("localhost","root","","commerce");
        $query = "SELECT * FROM produits";
        $result = mysqli_query($link,$query);
    ?>
    <ul>
    <?php 
        while($row = mysqli_fetch_assoc($result)){
            echo "<li>nom : ".$row["nom"]." prix : ".$row["prix"]."</li>";
            $id = $row["id"];
            echo " <a href='modifier.php/?id=$id' class='button'>Modifier</a> <a href='supprimer.php/?id=$id' class='button'>Supprimer</a>";
            echo "<br><br><br>";
        }
    ?>
    </ul>
</form>
</body>
<!-- <a href='modifier.php'>modifier</a> <a href='supprimer.php'>supprimer</a> -->
<!--  <input type='button' value='modifier'  action='ajouter.php'> <input type='button' value='supprimer' >  -->
</html>