# ZOO Arcadia
Bienvenue dans le projet Arcadia ! Cette application Web vous permet de gérer un zoo, y compris les habitats, les animaux et les rôles des différents utilisateurs (administrateur, personnel du zoo et médecins vétérinaires). Le système est construit en utilisant HTML, CSS, JavaScript, Bootstrap, PHP (avec POO) et MySQL.

## Table of Contents
- [Project Overview](#project-overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Roles and Permissions](#roles-and-permissions)


## Project Overview

L'arcadia fournit une interface pour gérer différents habitats et animaux au sein du zoo. Chaque habitat et animal comporte des détails spécifiques, y compris des images. Le système prend également en charge le contrôle d'accès basé sur les rôles, permettant uniquement aux utilisateurs autorisés d'effectuer certaines actions.

## Features

- Visualiser et gérer les habitats (Savane, Jungle, Marais)
- Afficher des informations détaillées sur chaque animal, y compris les conditions médicales et les prescriptions alimentaires
- Contrôle d'accès basé sur les rôles pour les administrateurs, le personnel du zoo et les médecins vétérinaires
- Ajouter, modifier et supprimer des enregistrements d'animaux
- Télécharger des images pour les habitats et les animaux

## Technologies Used

- Frontend: HTML, CSS, JavaScript, Bootstrap
- Backend: PHP (Object-Oriented Programming)
- Database: MySQL

## Installation

### Prerequisites

- PHP >= 7.4
- MySQL >= 5.7
- Web server (e.g., Apache)
- Composer (for dependency management)

### Steps

1. **Clone the Repository**

    ```bash
    git clone https://github.com/Babiyola/Arcadia.git
    cd arcadia
    ```

2. **Setup the Database**

    - Import the `zoo_db.sql` file into your MySQL database.

    ```bash
    mysql -u your_username -p your_password zoo_db < zoo_db.sql
    ```

3. **Configure the Database Connection**

    - Update the `config.php` file with your database credentials.

    ```php
    // config.php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'your_username');
    define('DB_PASSWORD', 'your_password');
    define('DB_NAME', 'zoo_db');
    ```

4. **Install Dependencies**

    ```bash
    composer install
    ```

5. **Start the Web Server**

    ```
    php -S localhost:3000
    ```

6. **Access the Application**

    Open your web browser and navigate to `http://localhost:3000`.

## Usage

- **Page d'accueil :** Répertorie tous les habitats avec des images et des liens vers des listes détaillées d'animaux.
- **Page Habitat :** Affiche les animaux dans l'habitat sélectionné avec des images et des liens vers des informations détaillées sur les animaux.
- **Page Animal :** Affiche des informations détaillées sur l'animal sélectionné, notamment la taille, le poids, le statut, le nom de famille, la nourriture, les conditions médicales et les prescriptions alimentaires.
- **Panneau d'administration :** Permet à l'administrateur de gérer les utilisateurs, les habitats et les animaux.



## Roles and Permissions

- **Admin :** Gérez les utilisateurs, les habitats et les animaux.
- **Personnel du zoo :** Consultez les détails des animaux et les aliments prescrits.
- **Médecin vétérinaire :** Ajoutez et mettez à jour les conditions médicales et les prescriptions alimentaires pour les animaux.



