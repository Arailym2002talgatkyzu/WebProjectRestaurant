<?php
$servername = "localhost";
$username = "root";
$password = "650464";
$dbname = "cooklovers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu Book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <style>
        .menuBook>div table{
            width:50%;
            margin-left:25%;
        }
        body{
            background-color: black;
        }
        tr, th{
            background-color: white;
        }
        a:hover {
            background-color: green;
            color: white;
        }
        .menuHeader{
            width:50%;
            margin-left: 25%;
            background-color: green;
            color : white;
            font-family: Gabriola;
            font-size: 30px;
            text-align: center;
            border-radius: 6px;
            margin-bottom: 0;
            margin-top: 10px;
        }
        .btn{
            background-color: green;
            color:white;
            border-radius: 10px;
            padding:6px;
            margin-left: 5%;
            text-align: center;
            text-decoration: none;
        }
        .btn:hover{
            background-color: white;
            color: green;
        }
    </style>
</head>
<body>
<div class ="menuBook">
    <h1 style="background-color: black; color: orange; width: 100%;margin-left: 45% ">Main Menu</h1>
    <a href="menuBook.php"class="btn">UPDATE</a>
    <div class="hotFoods">
        <p class="menuHeader">Hot Foods</p>
        <?php
        $sql = "SELECT * FROM hotfood";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>Price</th><th></th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["price"]."Tg". "</td><td>" ."<img 
         style= 'width: 100px; height:100px;'src='". $row["img"]."'>". "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        ?>
    </div>
    <div class="salads">
        <p class="menuHeader">Salads</p>
        <?php
        $sql = "SELECT * FROM salads";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>Price</th><th></th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["price"]."Tg". "</td><td>" ."<img 
         style= 'width: 100px; height:100px;'src='". $row["img"]."'>". "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        ?>
    </div>
    <div class="deserts">
        <p class="menuHeader">Deserts</p>
        <?php
        $sql = "SELECT * FROM deserts";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>Price</th><th></th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["price"]."Tg". "</td><td>" ."<img 
         style= 'width: 100px; height:100px;'src='". $row["img"]."'>". "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        ?>
    </div>
    <div class="drinks">
        <p class=menuHeader>Drinks</p>
        <?php
        $sql = "SELECT * FROM drinks";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>Price</th><th></th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["price"]."Tg". "</td><td>" ."<img 
         style= 'width: 100px; height:100px;'src='". $row["img"]."'>". "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        ?>
    </div>
<div class="sushi">
    <p class="menuHeader">Sushi</p>
    <?php
    $sql = "SELECT * FROM sushi";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Price</th><th></th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["price"]."Tg". "</td><td>" ."<img 
         style= 'width: 100px; height:100px;'src='". $row["img"]."'>". "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>
</div>
</div>

</body>
</html>
