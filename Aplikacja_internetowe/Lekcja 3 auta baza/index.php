<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auta</title>
</head>
<body>
    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "dzik";

    $conn = new mysqli($host, $user, $pass, $dbname);
    $sql = "SELECT model FROM auto";


    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {
            echo $row["model"] . "<br>";
        }
    } else {
        echo "Brak wyników";
    }


    $result2 = $conn->query($sql);
    echo "<ol>";
    if ($result2->num_rows > 0) {
        while ($row = $result2->fetch_assoc()) {
            echo "<li>" . $row["model"] . "</li>";
        }
    } else {
        echo "Brak wyników";
    }
    echo "</ol>";


    echo "<ul>";

    $sql3 = "SELECT model, przebieg FROM auto";
    $result3 = $conn->query($sql3);

    if ($result3->num_rows > 0) {
        while ($row = $result3->fetch_assoc()) {
            echo "<li>" . $row["model"] . " ma przebieg " . $row["przebieg"] . " km</li>";
        }
    } else {
        echo "Brak wyników";
    }
    echo "</ul>";

    echo "<ul>";
    $sql4 = "SELECT model, rocznik, przebieg FROM auto";
    $result4 = $conn->query($sql4);

    if ($result4->num_rows > 0) {
        while ($row = $result4->fetch_assoc()) {
            echo "<li><strong>" . $row["model"] . "</strong> z rocznika " . $row["rocznik"] . "<br> ma przebieg " . $row["przebieg"] . " km</li>";
        }
    } else {
        echo "Brak wyników";
    }
    echo "</ul>";


    $sql5 = "SELECT model, rocznik FROM auto";
    $result5 = $conn->query($sql5);

   echo "<table border>";
   if($result5->num_rows > 0){
   echo "<tr>";
   echo "<th>";
   echo "Model";
   echo "</th>";
   echo "<th>";
   echo "Rocznik";
   echo "</th>";
   echo "</tr>";

    while($row = $result5->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row["model"] . "</td>";
        echo "<td>" . $row["rocznik"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
   } 




    
    $conn->close();
    ?>
</body>
</html>
