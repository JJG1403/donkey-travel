<?php

// Databaseverbinding instellen
$servername = "localhost"; // vervang dit door de naam van je MySQL-server
$username = "gebruikersnaam"; // vervang dit door je MySQL-gebruikersnaam
$password = "wachtwoord"; // vervang dit door je MySQL-wachtwoord
$dbname = "klantencrud";

$conn = new mysqli($servername, $username, $password, $dbname);

// Controleren op fouten bij het maken van de verbinding
if ($conn->connect_error) {
    die("Verbinding met de database is mislukt: " . $conn->connect_error);
}

// Query om klantgegevens op te halen (bijvoorbeeld alle klanten)
$sql = "SELECT * FROM klanten";
$result = $conn->query($sql);

// Controleren of er resultaten zijn
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Klant ID</th><th>Voornaam</th><th>Achternaam</th><th>E-mail</th><th>Telefoon</th><th>Adres</th></tr>";

    // Gegevens van elke klant weergeven
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["klant_id"] . "</td>";
        echo "<td>" . $row["voornaam"] . "</td>";
        echo "<td>" . $row["achternaam"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["telefoon"] . "</td>";
        echo "<td>" . $row["adres"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Geen klantgegevens gevonden.";
}

// Verbinding met de database sluiten
$conn->close();


