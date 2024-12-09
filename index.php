<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123456789";
$dbname = "africadata";

// Créer la connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

echo "Connexion réussie";

$sql = "SELECT `id_pays`, `nom`, `Population`, `langues_officielles`, `Continent` FROM `pays`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id_pays"]. " - Name: ". $row["nom"]. " - Population: " . $row["Population"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();