# Zoo Management System

Welcome to the Zoo Management System project! This web application allows you to manage a zoo, including habitats, animals, and roles for different users (admin, zoo staff, and veterinary doctors). The system is built using HTML, CSS, JavaScript, Bootstrap, PHP (with OOP), and MySQL.

## Table of Contents
- [Project Overview](#project-overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Roles and Permissions](#roles-and-permissions)
- [Contributing](#contributing)

## Project Overview

The Zoo Management System provides an interface for managing different habitats and animals within the zoo. Each habitat and animal has specific details, including images. The system also supports role-based access control, allowing only authorized users to perform certain actions.

## Features

- View and manage habitats (Savane, Jungle, Marais)
- View detailed information about each animal, including medical conditions and food prescriptions
- Role-based access control for admins, zoo staff, and veterinary doctors
- Add, edit, and delete animal records
- Upload images for habitats and animals

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

    ```bash
    php -S localhost:8080
    ```

6. **Access the Application**

    Open your web browser and navigate to `http://localhost:8000`.

## Usage

- **Home Page:** Lists all habitats with images and links to detailed animal lists.
- **Habitat Page:** Displays animals in the selected habitat with images and links to detailed animal information.
- **Animal Page:** Shows detailed information about the selected animal, including height, weight, status, family name, food, medical conditions, and food prescriptions.
- **Admin Panel:** Allows the admin to manage users, habitats, and animals.




## Roles and Permissions

- **Admin:** Manage users, habitats, and animals.
- **Zoo Staff:** View animal details and prescribed food.
- **Veterinary Doctor:** Add and update medical conditions and food prescriptions for animals.

## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Make your changes and commit them with descriptive messages.
4. Push your changes to your fork.
5. Create a pull request to the main repository.


