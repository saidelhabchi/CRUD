<!DOCTYPE html>
<html>
<head>
    <title>ajouter</title>
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
    <h1>Add Page</h1>
    <form action="#" method="post">
        Id : <input type="text" name="id" /><br /><br />
        Name : <input type="text" name="nom" /><br /><br />
        Prix : <input type="text" name="prix" /><br /><br />
        <input type="submit" name="submit" value="Submit" /><br /><br /> 
        <a href='../liste.php' class='button'>Liste</a>
        <a href='../Home.php' class='button'>Home</a>
    </form>
    <?php 
        if(isset($_POST["id"])&&isset($_POST["nom"])&&isset($_POST["prix"])){
            $id = $_POST["id"];
            $nom = $_POST["nom"];
            $prix = $_POST["prix"];    
            
            $con = mysqli_connect("localhost","root","","commerce");

            $result = mysqli_query($con,"INSERT INTO produits VALUES ('$id','$nom','$prix')");
        }
    ?>    
</body>
</html>