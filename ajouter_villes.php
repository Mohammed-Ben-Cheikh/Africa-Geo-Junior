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
    $description = $_POST['Description'];
    $type = $_POST['Type'];
    $id_pays = $_POST['id_pays'];

    // Insérer les données dans la base
    $sql = "INSERT INTO villes (Nom, Description , Type, id_pays) 
            VALUES ('$nom', '$description', '$type', '$id_pays')";

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
                <label for="Nom" class="block text-sm font-medium text-gray-700">Nom de la Ville</label>
                <input type="text" id="Nom" name="Nom"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Entrez le nom de la ville" required aria-label="Nom de la ville">
            </div>
            <div>
                <label for="Description" class="block text-sm font-medium text-gray-700">Description de la Ville</label>
                <textarea id="Description" name="Description"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Entrez une description détaillée de la ville" rows="3" required
                    aria-label="Description de la ville"></textarea>
            </div>
            <div>
                <label for="Type" class="block text-sm font-medium text-gray-700">Type de Ville</label>
                <select type="text" id="Type" name="Type"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    required aria-label="Type de la ville">
                    <option value="" disabled selected>type...</option>
                    <option value="capitale">Capitale</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
            <div>
                <?php
                // Récupérer les payss de la base de données
                $sql_pays = "SELECT * FROM pays";
                $result_pays = $conn->query($sql_pays);
                ?>
                <label for="pays" class="block text-sm font-medium text-gray-700">choisir Le pays de ville</label>
                <select onchange="auto2()" id="pays" name="pays"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    required aria-label="pays">
                    <option value="" disabled selected>Choisissez une pays</option>
                    <?php
                    // Générer les options du menu déroulant
                    if ($result_pays->num_rows > 0) {
                        while ($pays1 = $result_pays->fetch_assoc()) {
                            // Ajout de l'attribut data-id pour stocker l'ID du pays
                            echo "<option value='" . htmlspecialchars($pays1['nom']) . "' data-id='" . htmlspecialchars($pays1['id_pays']) . "'>" . htmlspecialchars($pays1['nom']) . "</option>";
                        }
                    } else {
                        echo "<option value=''>Aucun pays disponible</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="id_pays" class="block text-sm font-medium text-gray-700">ID du pays</label>
                <input type="text" id="id_pays" name="id_pays"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Entrez l'ID du pays" required aria-label="ID du pays" readonly>
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