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

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM villes WHERE id_ville = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Ville introuvable.";
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['Nom'];
    $description = $_POST['Description'];
    $type = $_POST['Type'];
    $id_pays = $_POST['id_pays'];

    $sql = "UPDATE villes SET Nom='$nom', Description='$description', Type='$type', id_pays='$id_pays' WHERE id_ville=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Ville mise à jour avec succès.";
        header("Location: index.admin.php");
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
    <title>Formulaire de Mise à Jour</title>
    <link rel="stylesheet" href="./src/output.css">
    <link rel="stylesheet" href="./src/input.css">
</head>
<body id="body" class="flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Mettre à jour la Ville</h2>
        <form method="POST" class="space-y-4">
            <div>
                <label for="Nom" class="block text-sm font-medium text-gray-700">Nom de la Ville</label>
                <input 
                    type="text" 
                    id="Nom" 
                    name="Nom" 
                    value="<?php echo htmlspecialchars($row['Nom']); ?>" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Entrez le nom de la ville" 
                    required
                    aria-label="Nom de la ville"
                >
            </div>
            <div>
                <label for="Description" class="block text-sm font-medium text-gray-700">Description de la Ville</label>
                <textarea
                    id="Description"
                    name="Description"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Entrez une description détaillée de la ville"
                    rows="3"
                    required
                    aria-label="Description de la ville"
                ><?php echo htmlspecialchars($row['Description']); ?></textarea>
            </div>
            <div>
                <label for="Type" class="block text-sm font-medium text-gray-700">Type de Ville</label>
                <select id="Type" name="Type" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    required>
                    <option value="" disabled>Type...</option>
                    <option value="capitale" <?php echo $row['Type'] == 'capitale' ? 'selected' : ''; ?>>Capitale</option>
                    <option value="autre" <?php echo $row['Type'] == 'autre' ? 'selected' : ''; ?>>Autre</option>
                </select>
            </div>
            <div>
                <label for="pays" class="block text-sm font-medium text-gray-700">Choisir le pays de la ville</label>
                <select onchange="auto2()" id="pays" name="id_pays" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    required>
                    <option value="" disabled>Choisissez un pays</option>
                    <?php
                    $sql_pays = "SELECT * FROM pays";
                    $result_pays = $conn->query($sql_pays);
                    if ($result_pays->num_rows > 0) {
                        while ($pays = $result_pays->fetch_assoc()) {
                            $selected = ($pays['id_pays'] == $row['id_pays']) ? 'selected' : '';
                            echo "<option value='" . htmlspecialchars($pays['nom']) . "' data-id='" . htmlspecialchars($pays['id_pays']) . "' $selected>" . htmlspecialchars($pays['nom']) . "</option>";
                        }
                    } else {
                        echo "<option value=''>Aucun pays disponible</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="id_pays" class="block text-sm font-medium text-gray-700">ID du pays</label>
                <input type="text" id="id_pays" name="id_pays" value="<?php echo htmlspecialchars($row['id_pays']); ?>"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Entrez l'ID du pays" required aria-label="ID du pays" readonly>
            </div>
            <button 
                type="submit" 
                class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
            >
                Mettre à jour
            </button>
        </form>
    </div>
    <script src="app.js"></script>
</body>
</html>

