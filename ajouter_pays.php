<?php
session_start(); // Démarrer la session pour pouvoir utiliser $_SESSION

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données envoyées par le formulaire sans sécurisation
    $nom = $_POST['Nom'];
    $population = $_POST['Population'];
    $langues_officielles = $_POST['langues_officielles'];
    $continent = $_POST['Continent'];
    $id_Continent = $_POST['id_Continent'];

    // Insérer les données dans la base
    $sql = "INSERT INTO pays (Nom, Population, langues_officielles, Continent, id_Continent) 
            VALUES ('$nom', '$population', '$langues_officielles', '$continent', '$id_Continent')";

    if ($conn->query($sql) === TRUE) {
        // Rediriger après ajout
        header("Location: index.admin.php");
        exit;
    } else {
        echo "Erreur : " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Ajout</title>
    <link rel="stylesheet" href="./src/output.css">
    <link rel="stylesheet" href="./src/input.css">
</head>

<body id="body" class="flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Ajouter un Nouveau Pays</h2>
        <form method="POST" class="space-y-4">
            <div>
                <label for="Nom" class="block text-sm font-medium text-gray-700">Nom du Pays</label>
                <input type="text" id="Nom" name="Nom"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Entrez le nom du pays" required aria-label="Nom du pays">
            </div>
            <div>
                <label for="Population" class="block text-sm font-medium text-gray-700">Population</label>
                <input type="number" id="Population" name="Population"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Entrez la population" required aria-label="Population">
            </div>
            <div>
                <label for="langues_officielles" class="block text-sm font-medium text-gray-700">Langues
                    Officielles</label>
                <input type="text" id="langues_officielles" name="langues_officielles"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Entrez les langues officielles" required aria-label="Langues officielles">
            </div>
            <div>
                <?php
                // Récupérer les continents de la base de données
                $sql_continents = "SELECT * FROM continents";
                $result_continents = $conn->query($sql_continents);
                ?>
                <label for="Continent" class="block text-sm font-medium text-gray-700">Continent</label>
                <select onchange="auto()" id="Continent" name="Continent"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    required aria-label="Continent">
                    <option value="" disabled selected>Choisissez une Continent</option>
                    <?php
                    // Générer les options du menu déroulant
                    if ($result_continents->num_rows > 0) {
                        while ($continent1 = $result_continents->fetch_assoc()) {
                            // Ajout de l'attribut data-id pour stocker l'ID du continent
                            echo "<option value='" . htmlspecialchars($continent1['nom']) . "' data-id='" . htmlspecialchars($continent1['id_Continent']) . "'>" . htmlspecialchars($continent1['nom']) . "</option>";
                        }
                    } else {
                        echo "<option value=''>Aucun continent disponible</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="id_Continent" class="block text-sm font-medium text-gray-700">ID du Continent</label>
                <input type="text" id="id_Continent" name="id_Continent"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Entrez l'ID du continent" required aria-label="ID du continent" readonly>
            </div>
            <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Ajouter le Pays
            </button>
        </form>
    </div>
    <script src="app.js"></script>
</body>

</html>