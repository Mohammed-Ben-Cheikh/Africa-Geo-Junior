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
                        aria-current="page">Dashboard</a>
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

        <header class="shadow-sm h-20 flex items-center ">
            <div class="max-w-7xl ml-6">
                <a class="flex items-center gap-2 bg-gray-800 py-2 px-4 rounded text-white hover:bg-gray-900 transition-colors w-48 text-xl"
                    href="#blog">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7c0 1.19-.51 2.27-1.33 3.02M3 7a6.002 6.002 0 0011.33 3.02M5.67 5A2.5 2.5 0 007 5h2a2.5 2.5 0 012.5 2.5m-.5 4.5V21m-3 0H9m6 0h-3" />
                    </svg>
                    Dashboard
                </a>
            </div>
        </header>
    </div>

    <main class="mx-auto max-h-[92.9%] flex pt-44">
        <section class="w-[15%] p-2 border-r flex flex-col gap-3 border-gray-300 bg-gray-100" id="sidebar">
            <!-- Accueil -->
            <a class="flex items-center gap-2 bg-gray-800 py-2 px-4 rounded text-white hover:bg-gray-900 transition-colors"
                href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V10z" />
                </svg>
                Accueil
            </a>
            <!-- Services -->
            <a class="flex items-center gap-2 bg-gray-800 py-2 px-4 rounded text-white hover:bg-gray-900 transition-colors"
                href="#services">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.75 3v3.75H6a2.25 2.25 0 000 4.5h3.75V15H6a2.25 2.25 0 000 4.5h3.75V21M12.75 3v3.75H18a2.25 2.25 0 010 4.5h-5.25V15H18a2.25 2.25 0 010 4.5h-5.25V21" />
                </svg>
                Services
            </a>
            <!-- À propos -->
            <a class="flex items-center gap-2 bg-gray-800 py-2 px-4 rounded text-white hover:bg-gray-900 transition-colors"
                href="#about">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                À propos
            </a>
            <!-- Contact -->
            <a class="flex items-center gap-2 bg-gray-800 py-2 px-4 rounded text-white hover:bg-gray-900 transition-colors"
                href="#contact">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a3 3 0 003.22 0L21 8m-9 5.75V19m0-11v2.75M2 12.5V19a2 2 0 002 2h16a2 2 0 002-2v-6.5" />
                </svg>
                Contact
            </a>
            <!-- Blog -->
            <a class="flex items-center gap-2 bg-gray-800 py-2 px-4 rounded text-white hover:bg-gray-900 transition-colors"
                href="#blog">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7c0 1.19-.51 2.27-1.33 3.02M3 7a6.002 6.002 0 0011.33 3.02M5.67 5A2.5 2.5 0 007 5h2a2.5 2.5 0 012.5 2.5m-.5 4.5V21m-3 0H9m6 0h-3" />
                </svg>
                Blog
            </a>
            <!-- FAQ -->
            <a class="flex items-center gap-2 bg-gray-800 py-2 px-4 rounded text-white hover:bg-gray-900 transition-colors"
                href="#faq">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8.5 12.5a2.5 2.5 0 005 0c0-1.5-2.5-2-2.5-2m0-3h.01m-6.01 13h16a2 2 0 002-2V7a2 2 0 00-2-2h-4.586a2 2 0 01-1.414-.586l-2.414-2.414A2 2 0 009.586 2H5a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
                FAQ
            </a>
        </section>


        <section class="w-[85%] p-4 overflow-y-auto" id="main-content">
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
            $stats_pays = "SELECT COUNT(DISTINCT id_pays) AS total_pays FROM pays";
            $stats_result1 = $conn->query($stats_pays);
            $stats1 = $stats_result1->fetch_assoc();

            $stats_villes = "SELECT COUNT(DISTINCT id_ville) AS total_villes FROM villes";
            $stats_result2 = $conn->query($stats_villes);
            $stats2 = $stats_result2->fetch_assoc();

            // Tableau de bord
            echo "
            <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4'>
                <div class='bg-white p-4 border-8 border-gray-800 rounded-lg shadow hover:shadow-lg transition-shadow duration-300'>
                    <h2 class='text-xl mb-2'>Total des Pays</h2>
                    <p class='text-3xl font-bold text-blue-600'>" . $stats1['total_pays'] . "</p>
                </div>
            
                <div class='bg-white p-4 border-8 border-gray-800 rounded-lg shadow hover:shadow-lg transition-shadow duration-300'>
                    <h2 class='text-xl mb-2'>Total des Villes</h2>
                    <p class='text-3xl font-bold text-blue-600'>" . $stats2['total_villes'] . "</p>
                </div>
            </div>";
            echo "<div class='m-4 border-4 border-stone-950 rounded-lg bg-zinc-50 flex justify-around items-center gap-[32rem]'>
                        <h2 class='text-xl m-4'>Données des Pays et Villes</h2></div>";
            $sql = "
            SELECT 
                p.id_pays, 
                p.nom AS pays_nom, 
                p.Population, 
                p.langues_officielles, 
                c.nom AS continent_nom, 
                v.id_ville, 
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
                echo "<div class='w-full max-h-[50vh] overflow-auto'>";
                echo "<table class='border-8 border-gray-800 min-w-full bg-white rounded-lg shadow'>
                <thead>
                    <tr class='bg-blue-200'>
                    <th class='border px-4 py-2'>ID Pays</th>
                    <th class='border px-4 py-2'>Nom Pays</th>
                    <th class='border px-4 py-2'>Population</th>
                    <th class='border px-4 py-2'>Langues Officielles</th>
                    <th class='border px-4 py-2'>Continent</th>
                    <th class='border px-4 py-2'>ID Ville</th>
                    <th class='border px-4 py-2'>Nom Ville</th>
                    <th class='border px-4 py-2'>Description</th>
                    <th class='border px-4 py-2'>Type De Ville</th>
                    </tr></thead><tbody>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr class='hover:bg-blue-100 transition-colors duration-200'>
                        <td class='border px-4 py-2'>" . $row["id_pays"] . "</td>
                        <td class='border px-4 py-2'>" . $row["pays_nom"] . "</td>
                        <td class='border px-4 py-2'>" . $row["Population"] . "</td>
                        <td class='border px-4 py-2'>" . $row["langues_officielles"] . "</td>
                        <td class='border px-4 py-2'>" . $row["continent_nom"] . "</td>
                        <td class='border px-4 py-2'>" . $row["id_ville"] . "</td>
                        <td class='border px-4 py-2'>" . $row["ville_nom"] . "</td>
                        <td class='border px-4 py-2'>" . $row["Description"] . "</td>
                        <td class='border px-4 py-2'>" . $row["ville_type"] . "</td>
                    </tr>";
                }
                echo "</tbody></table></div>";
            } else {
                echo "<p class='text-red-500'>0 résultats</p>";
            }
            echo "<div class='m-4 border-4 border-stone-950 rounded-lg bg-zinc-50 flex justify-around items-center gap-[32rem]'>
                        <h2 class='text-xl m-4'>Données des Pays</h2>
                        <button onclick=\"window.location.href='ajouter_pays.php'\" class='w-24 h-8 bg-blue-500 rounded-lg'>ajouter</button></div>";
            $sql = "SELECT * FROM pays";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table class='min-w-full bg-white border border-gray-300 rounded-lg shadow'>
                <thead>
                    <tr class='bg-blue-200'>
                    <th class='border px-4 py-2'>ID Pays</th>
                    <th class='border px-4 py-2'>Nom Pays</th>
                    <th class='border px-4 py-2'>Population</th>
                    <th class='border px-4 py-2'>Langues Officielles</th>
                    <th class='border px-4 py-2'>Continent</th>
                    <th class='border px-4 py-2'>Action</th></thead><tbody>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr class='hover:bg-blue-100 transition-colors duration-200'>
                        <td class='border px-4 py-2'>" . $row["id_pays"] . "</td>
                        <td class='border px-4 py-2'>" . $row["nom"] . "</td>
                        <td class='border px-4 py-2'>" . $row["Population"] . "</td>
                        <td class='border px-4 py-2'>" . $row["langues_officielles"] . "</td>
                        <td class='border px-4 py-2'>" . $row["Continent"] . "</td>
                        <td class='border px-4 py-2 flex justify-center gap-3'>
                                                        <button onclick=\"window.location.href='edit_pays.php?id=" . $row['id_pays'] . "'\" 
                                                                class='w-1/2 h-full bg-green-500 rounded-lg'>edit</button>
                                                        <button onclick=\"if(confirm('Voulez-vous vraiment supprimer cette pays ?')) { 
                                                                window.location.href='delete_pays.php?id=" . $row['id_pays'] . "'; }\" 
                                                                class='w-1/2 h-full bg-red-500 rounded-lg'>delete</button>
                                                        </td>
                        </tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<p class='text-red-500'>0 résultats</p>";
            }
            echo "<div class='m-4 border-4 border-stone-950 rounded-lg bg-zinc-50 flex justify-around items-center gap-[32rem]'>
                        <h2 class='text-xl m-4'>Données des Villes</h2>
                        <button onclick=\"window.location.href='ajouter_villes.php'\" class='w-24 h-8 bg-blue-500 rounded-lg'>ajouter</button></div>";
            $sql = "SELECT * FROM villes";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<div class='w-full h-[50vh] overflow-auto'>";
                echo "<table class='min-w-full bg-white border border-gray-300 rounded-lg shadow'>
            <thead>
                <tr class='bg-blue-200'>
                    <th class='border px-4 py-2'>ID Ville</th>
                    <th class='border px-4 py-2'>Nom Ville</th>
                    <th class='border px-4 py-2'>Description</th>
                    <th class='border px-4 py-2'>Type</th>
                    <th class='border px-4 py-2'>Action</th>
                    </tr>
            </thead>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tbody class='hover:bg-blue-100 transition-colors duration-200'>
                            <tr>
                                <td class='border px-4 py-2'>" . $row["id_ville"] . "</td>
                                <td class='border px-4 py-2'>" . $row["Nom"] . "</td>
                                <td class='border px-4 py-2'>" . $row["Description"] . "</td>
                                <td class='border px-4 py-2'>" . $row["Type"] . "</td>
                                <td class='border px-4 py-2 flex justify-center gap-3'>
                                    <button onclick=\"window.location.href='edit_ville.php?id=" . $row['id_ville'] . "'\" 
                                            class='w-1/2 h-full bg-green-500 rounded-lg'>edit</button>
                                    <button onclick=\"if(confirm('Voulez-vous vraiment supprimer cette ville ?')) { 
                                                    window.location.href='delete_ville.php?id=" . $row['id_ville'] . "'; }\" 
                                            class='w-1/2 h-full bg-red-500 rounded-lg'>delete</button>
                                </td>
                            </tr>
                        </tbody>";
                }
                echo "</tbody></table></div>";
            } else {
                echo "<p class='text-red-500'>0 résultats</p>";
            }
            $sql = "SELECT * FROM pays";
            $result = $conn->query($sql);
            $conn->close();
            ?>
        </section>
    </main>
    <footer class="bg-gray-800 text-white p-4 text-center">
        <p>&copy; 2023 Africa-Geo-Junior. Tous droits réservés.</p>
    </footer>
</body>

</html>