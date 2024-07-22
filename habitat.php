<?php
$habitat_id = $_GET['id'];

// Database connection
$mysqli = new mysqli("localhost", "username", "password", "zoo_db");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$query = "SELECT * FROM animals WHERE habitat_id = $habitat_id";
$result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Habitat Animals</h1>
        <div class="list-group">
            <?php while ($row = $result->fetch_assoc()): ?>
                <a href="animal.php?id=<?php echo $row['id']; ?>" class="list-group-item">
                    <?php echo $row['name']; ?>
                </a>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>

<?php
$mysqli->close();
?>
