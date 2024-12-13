<?php
// Configuration de la base de données
$servername = "127.0.0.1";
$username = "root";
$password = "123456789";
$dbname = "africadata";

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if (!$conn) {
        die("Erreur de connexion : " . mysqli_connect_error());
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier si les identifiants existent dans la base de données
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Rediriger l'utilisateur vers le tableau de bord
        header("Location: index.admin.php");
    } else {
        $error_message = "Identifiants incorrects.";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="./src/output.css">
</head>

<body class="bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Connexion</h1>

        <?php if (isset($error_message)): ?>
            <div class="bg-red-500 text-white p-2 rounded-md mb-4 text-center">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="space-y-4">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email :</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Entrez votre email"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required />
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe :</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Entrez votre mot de passe"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required />
            </div>
            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                Se connecter
            </button>
        </form>

        <a
            href="#"
            class="block mt-4 text-center text-blue-500 hover:underline text-sm">
            Mot de passe oublié ?
        </a>
    </div>
</body>


