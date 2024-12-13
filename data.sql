CREATE DATABASE africadata;

USE africadata;

CREATE TABLE `Continents` (
    `id_Continent` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nom` enum(
        'Asie',
        'Afrique',
        'Amérique',
        'Antarctique',
        'Europe',
        'Australie'
    )
);

CREATE TABLE `pays` (
    `id_pays` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `nom` varchar(255) NOT NULL,
    `Population` int NOT NULL,
    `langues_officielles` text DEFAULT NULL,
    `Continent` enum(
        'Asie',
        'Afrique',
        'Amérique',
        'Antarctique',
        'Europe',
        'Australie'
    ) DEFAULT 'Afrique',
    `id_Continent` int(11),
    FOREIGN KEY (`id_Continent`) REFERENCES `Continents` (`id_Continent`) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE `villes` (
    `id_ville` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `Nom` varchar(255) NOT NULL,
    `Description` text DEFAULT NULL,
    `Type` enum('capitale', 'autre'),
    `id_pays` int(11),
    FOREIGN KEY (`id_pays`) REFERENCES `pays`(`id_pays`) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE `user` (
    `id_user` INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `email` VARCHAR(255) UNIQUE NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `type` ENUM('admin', 'user') NOT NULL DEFAULT 'user'
);

INSERT INTO
    `user` (`email`, `password`, `type`)
VALUES (
        'admin@example.com',
        'password_admin',
        'admin'
    ),
    (
        'user@example.com',
        'password_user',
        'user'
    );

select * from `user`;

INSERT INTO
    `Continents` (`nom`)
VALUES ('Asie'),
    ('Afrique'),
    ('Amérique'),
    ('Antarctique'),
    ('Europe'),
    ('Australie');

INSERT INTO
    `pays` (
        `nom`,
        `Population`,
        `langues_officielles`,
        `Continent`,
        `id_Continent`
    )
VALUES (
        'Maroc',
        36910560,
        'Arabe, Amazigh',
        'Afrique',
        2
    ),
    (
        'Kenya',
        53771296,
        'Anglais, Kiswahili',
        'Afrique',
        2
    ),
    (
        'Nigeria',
        211400708,
        'Anglais',
        'Afrique',
        2
    ),
    (
        'Egypte',
        104123500,
        'Arabe',
        'Afrique',
        2
    ),
    (
        'Afrique du Sud',
        59308690,
        'Afrikaans, Anglais',
        'Afrique',
        2
    ),
    (
        "Côte d'Ivoire",
        26378274,
        'Français',
        'Afrique',
        2
    );

INSERT INTO
    `villes` (
        `Nom`,
        `Description`,
        `Type`,
        `id_pays`
    )
VALUES (
        'Rabat',
        'Capitale du Maroc',
        'capitale',
        1
    ),
    (
        'Casablanca',
        'Plus grande ville du Maroc, centre économique',
        'autre',
        1
    ),
    (
        'Marrakech',
        'Ville touristique célèbre pour sa médina',
        'autre',
        1
    ),
    (
        'Fès',
        'Ville historique et culturelle',
        'autre',
        1
    ),
    (
        'Tanger',
        'Ville portuaire située au nord du Maroc',
        'autre',
        1
    );

INSERT INTO
    `villes` (
        `Nom`,
        `Description`,
        `Type`,
        `id_pays`
    )
VALUES (
        'Nairobi',
        'Capitale du Kenya centre économique et culturel',
        'capitale',
        2
    ),
    (
        'Mombasa',
        'Deuxième plus grande ville port majeur',
        'autre',
        2
    ),
    (
        'Kisumu',
        'Ville sur les rives du lac Victoria',
        'autre',
        2
    ),
    (
        'Nakuru',
        'Ville située dans la vallée du Rift',
        'autre',
        2
    ),
    (
        'Eldoret',
        'Centre agricole et commercial',
        'autre',
        2
    );

INSERT INTO
    `villes` (
        `Nom`,
        `Description`,
        `Type`,
        `id_pays`
    )
VALUES (
        'Abuja',
        'Capitale du Nigeria',
        'capitale',
        3
    ),
    (
        'Lagos',
        'Plus grande ville centre économique majeur',
        'autre',
        3
    ),
    (
        'Kano',
        'Ville historique et centre commercial',
        'autre',
        3
    ),
    (
        'Ibadan',
        'Ville universitaire et industrielle',
        'autre',
        3
    ),
    (
        'Port Harcourt',
        "Ville portuairecentre de l\'industrie pétrolière",
        'autre',
        3
    );

INSERT INTO
    `villes` (
        `Nom`,
        `Description`,
        `Type`,
        `id_pays`
    )
VALUES (
        'Le Caire',
        "Capitale de l\'Égypte et grande ville culturelle",
        'capitale',
        4
    ),
    (
        'Alexandrie',
        'Ville portuaire historique',
        'autre',
        4
    ),
    (
        'Gizeh',
        'Site des pyramides de Gizeh',
        'autre',
        4
    ),
    (
        'Luxor',
        'Ville historique avec des temples et des tombeaux',
        'autre',
        4
    ),
    (
        'Assouan',
        'Ville située sur le Nil avec des monuments antiques',
        'autre',
        4
    );

INSERT INTO
    `villes` (
        `Nom`,
        `Description`,
        `Type`,
        `id_pays`
    )
VALUES (
        'Le Cap',
        'Ville portuaire, centre touristique et culturel',
        'capitale',
        5
    ),
    (
        'Johannesburg',
        'Plus grande ville et centre économique',
        'autre',
        5
    ),
    (
        'Durban',
        'Ville portuaire importante pour le commerce',
        'autre',
        5
    ),
    (
        'Pretoria',
        "Capitale administrative de l\'Afrique du Sud",
        'autre',
        5
    ),
    (
        'Port Elizabeth',
        'Ville industrielle et portuaire',
        'autre',
        5
    );

INSERT INTO
    `villes` (
        `Nom`,
        `Description`,
        `Type`,
        `id_pays`
    )
VALUES (
        'Abidjan',
        "Capitale économique de la Côte d\'Ivoire",
        'capitale',
        6
    ),
    (
        'Yamoussoukro',
        'Capitale politique et administrative',
        'autre',
        6
    ),
    (
        'Bouaké',
        'Deuxième plus grande ville',
        'autre',
        6
    ),
    (
        'San Pedro',
        'Ville portuaire importante',
        'autre',
        6
    ),
    (
        'Daloa',
        "Ville située dans l\'ouest de la Côte d\'Ivoire",
        'autre',
        6
    );
