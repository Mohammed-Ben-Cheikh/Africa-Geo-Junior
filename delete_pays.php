<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123456789";
$dbname = "africadata";

// Créer la connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);
$x;

if(empty($x)){

}
// Vérifier la connexion
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM pays WHERE id_pays = $id";
    if ($conn->query($sql) === TRUE) {
        echo "pays supprimée avec succès.";
        header("Location: index.admin.php");
    } else {
        echo "Erreur : " . $conn->error;
    }
} else {
    echo "ID invalide.";
}