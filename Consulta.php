<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device-witdh, user-scalable=no, initial-scalable=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>   
    <body>
        <div class="container">
            <?php
                include('cabecera.php');
            ?>
            <table class="table table-hover">
                <thead class="">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Asociación</th>
                        <th scope="col">Rating</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "artedrez_rating_fenamac";
// Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $nombrec = $_POST['nombrec'];
//echo $nombrec.'<br>';
                    $sql = "SELECT * FROM `federacion` WHERE `name` LIKE '%$nombrec%'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            if (isset($_REQUEST['id']))
                           {
                            echo "<td> " . $row["id_no"] . "</td>";
                              }
                            if (isset($_REQUEST['nombre'])){  
                            echo "<td>" . $row["name"] . "</td>";}
                            if (isset($_REQUEST['asociacion'])){
                            echo "<td>" . $row["clun_name"] . "</td>";}
                            if (isset($_REQUEST['rating'])){
                            echo "<td>" . $row["rat_nac"] . "</td>";
                            }
                            echo "</tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>     
</html>	