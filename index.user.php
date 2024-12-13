<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Pays et Villes</title>
    <link rel="stylesheet" href="./src/output.css">
    <link rel="stylesheet" href="./src/input.css">
</head>

<body class="bg-gray-100 h-screen">
    <div class="min-w-full fixed">
        <nav class="bg-gray-800">
            <div class="min-w-full px-4 sm:px-6 lg:px-8">
                <div class="flex h-20 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img class="w-44 h-12" src="http://codeshogun.free.nf/gallery/logo.png?ts=1733825165"
                                alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                                    aria-current="page">Dashboard</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Reports</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <button type="button"
                                class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button"
                                        class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="size-8 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="">
                                    </button>
                                </div>

                                <!--
                  Dropdown menu, show/hide based on menu state.
  
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                                <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 ring-1 shadow-lg ring-black/5 focus:outline-hidden hidden"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100 outline-hidden", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                        aria-current="page">Home</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Reports</a>
                </div>
                <div class="border-t border-gray-700 pt-4 pb-3">
                    <div class="flex items-center px-5">
                        <div class="shrink-0">
                            <img class="size-10 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base/5 font-medium text-white">Tom Cook</div>
                            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                        </div>
                        <button type="button"
                            class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your
                            Profile</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <main class="mx-auto max-h-[92.9%] flex pt-20">


        <section class="w-full p-4 overflow-y-auto" id="main-content">
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
            // Récupérer les statistiques pour le tableau de bord
            $stats_sql = "SELECT COUNT(DISTINCT id_pays) AS total_pays, COUNT(DISTINCT id_ville) AS total_villes FROM villes";
            $stats_result = $conn->query($stats_sql);
            $stats = $stats_result->fetch_assoc();
            // Tableau de bord
            echo "
            <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4'>
                <div class='bg-white p-4 border-8 border-gray-800  rounded-lg shadow hover:shadow-lg transition-shadow duration-300'>
                    <h2 class='text-xl mb-2'>Total des Pays</h2>
                    <p class='text-3xl font-bold text-blue-600'>" . $stats['total_pays'] . "</p>
                </div>

                <div class='bg-white p-4 border-8 border-gray-800  rounded-lg shadow hover:shadow-lg transition-shadow duration-300'>
                    <h2 class='text-xl mb-2'>Total des Villes</h2>
                    <p class='text-3xl font-bold text-blue-600'>" . $stats['total_villes'] . "</p>
                </div>

            </div>";

            echo "            <div
                class='m-4 border-4 border-stone-950 rounded-lg bg-zinc-50 flex justify-around items-center gap-[32rem]'>
                <h2 class='text-xl m-4'>Données des Pays et Villes</h2>
            </div>";

            $sql = "
    SELECT 
        p.nom AS pays_nom, 
        p.Population, 
        p.langues_officielles, 
        c.nom AS continent_nom, 
        v.Nom AS ville_nom, 
        v.Description, 
        v.Type AS ville_type
    FROM 
        pays p
    JOIN 
        Continents c ON p.id_Continent = c.id_Continent
    LEFT JOIN 
        villes v ON p.id_pays = v.id_pays
";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Structurer les données par pays
                $data = [];
                while ($row = $result->fetch_assoc()) {
                    $pays_nom = $row["pays_nom"];
                    if (!isset($data[$pays_nom])) {
                        $data[$pays_nom] = [
                            "Population" => $row["Population"],
                            "langues_officielles" => $row["langues_officielles"],
                            "continent_nom" => $row["continent_nom"],
                            "villes" => []
                        ];
                    }
                    if ($row["ville_nom"]) { // Ajouter une ville uniquement si elle existe
                        $data[$pays_nom]["villes"][] = [
                            "ville_nom" => $row["ville_nom"],
                            "Description" => $row["Description"],
                            "ville_type" => $row["ville_type"]
                        ];
                    }
                }

                // Afficher les données
                echo "<div class='grid grid-cols-1 gap-6 p-6 bg-gradient-to-br from-green-500 via-yellow-400 to-red-500'>";
                foreach ($data as $pays_nom => $details) {
                    echo "
        <div class='border border-gray-200 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 bg-white'>
            <div class='p-4'>
                <h3 class='text-xl font-bold text-green-800 mb-2'>$pays_nom</h3>
                <p class='text-gray-700'><strong>Population:</strong> " . number_format($details["Population"]) . "</p>
                <p class='text-gray-700'><strong>Langues Officielles:</strong> " . $details["langues_officielles"] . "</p>
                <p class='text-gray-700'><strong>Continent:</strong> " . $details["continent_nom"] . "</p>
            </div>
            <div class='p-4 bg-green-50 border-t border-gray-200'>
                <h4 class='text-lg font-semibold text-red-800 mb-4'>Villes :</h4>
                <div class='grid grid-cols-1 sm:grid-cols-2 gap-4'>";
                    foreach ($details["villes"] as $ville) {
                        echo "
                    <div class='border border-gray-200 rounded-lg bg-white p-4 shadow-md hover:shadow-lg transition-shadow duration-300'>
                        <h5 class='text-md font-semibold text-blue-800'>" . $ville["ville_nom"] . "</h5>
                        <p class='text-gray-600'>" . $ville["Description"] . "</p>
                        <p class='text-sm text-gray-500'><strong>Type:</strong> " . $ville["ville_type"] . "</p>
                    </div>";
                    }
                    echo "
                </div>
            </div>
        </div>
        ";
                }
                echo "</div>";
            } else {
                echo "<p class='text-red-600 text-center text-lg font-semibold'>Aucun résultat trouvé</p>";
            }

            $conn->close();
            ?>
        </section>
    </main>
    <footer class="bg-gray-800 text-white p-4 text-center">
        <p>&copy; 2023 Africa-Geo-Junior. Tous droits réservés.</p>
    </footer>
</body>

</html>