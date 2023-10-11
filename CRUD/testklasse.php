<?php

// Definieer de Klant-klasse
class Klant
{
    public $klant_id;
    public $voornaam;
    public $achternaam;
    public $email;
    public $telefoon;
    public $adres;

    // Constructor om een klantobject aan te maken
    public function __construct($klant_id, $voornaam, $achternaam, $email, $telefoon, $adres)
    {
        $this->klant_id = $klant_id;
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->email = $email;
        $this->telefoon = $telefoon;
        $this->adres = $adres;
    }

    // Methode om klantgegevens af te drukken
    public function printKlantInfo()
    {
        echo "Klant ID: " . $this->klant_id . "<br>";
        echo "Voornaam: " . $this->voornaam . "<br>";
        echo "Achternaam: " . $this->achternaam . "<br>";
        echo "E-mail: " . $this->email . "<br>";
        echo "Telefoon: " . $this->telefoon . "<br>";
        echo "Adres: " . $this->adres . "<br>";
    }
}

// Een klantobject aanmaken
$klant = new Klant(1, "John", "Doe", "john@example.com", "+123456789", "123 Main Street");

// Klantgegevens afdrukken
echo "<h2>Klantgegevens:</h2>";
$klant->printKlantInfo();

