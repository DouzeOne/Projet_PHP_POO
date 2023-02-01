<?php



$servername = "localhost";
$username = "barke";
$password = "123456";
$dbname = "transport";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error . PHP_EOL);
}

//Creation base
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo ("Base de données créée avec succès". PHP_EOL);
} else {
    echo ("Erreur lors de la création de la base de données: " . $conn->error . PHP_EOL);
}

$conn->select_db($dbname);

//Creation Tables
$sql = "CREATE TABLE IF NOT EXISTS avion (
    a_matrikel INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    a_marque VARCHAR(50) NOT NULL,
    a_model   VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo ("Table des catégories créée avec succès". PHP_EOL);
} else {
    echo ("Erreur lors de la création de la table des catégories: " . $conn->error. PHP_EOL);
}

$sql = "CREATE TABLE IF NOT EXISTS bateau (
    b_matrikel INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    b_marque VARCHAR(50) NOT NULL,
    b_model   VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo ("Table des catégories créée avec succès". PHP_EOL);
} else {
    echo ("Erreur lors de la création de la table des catégories: " . $conn->error. PHP_EOL);
}

$sql = "CREATE TABLE IF NOT EXISTS moto (
    m_matrikel INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    m_marque VARCHAR(50) NOT NULL,
    m_model   VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo ("Table des catégories créée avec succès". PHP_EOL);
} else {
    echo ("Erreur lors de la création de la table des catégories: " . $conn->error. PHP_EOL);
}

$sql = "CREATE TABLE IF NOT EXISTS train (
    t_matrikel INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    t_marque VARCHAR(50) NOT NULL,
    t_model   VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo ("Table des catégories créée avec succès". PHP_EOL);
} else {
    echo ("Erreur lors de la création de la table des catégories: " . $conn->error. PHP_EOL);
}

$sql = "CREATE TABLE IF NOT EXISTS voiture (
    v_matrikel INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    v_marque VARCHAR(50) NOT NULL,
    v_model   VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo ("Table des catégories créée avec succès". PHP_EOL);
} else {
    echo ("Erreur lors de la création de la table des catégories: " . $conn->error. PHP_EOL);
}

$avions = [
    ['a_matrikel' => '4005', 'a_marque' => 'AIRBUS', 'a_model' => 'A360'],
];

    if($conn->query($sql) === TRUE){
        echo ("Données insérées avec succès". PHP_EOL);
    } else {
        echo ("Erreur: " . $conn->error . PHP_EOL);
    }

$bateaux = [
    ['b_matrikel' => '0011', 'b_marque' => 'Titanic', 'b_model' => 'DR4_M3'],
];

    if($conn->query($sql) === TRUE){
        echo ("Données insérées avec succès". PHP_EOL);
    } else {
        echo ("Erreur: " . $conn->error . PHP_EOL);
    }

$motos = [
    ['m_matrikel' => '4050', 'm_marque' => 'Honda', 'm_model' => 'CB125R'],
];

    if($conn->query($sql) === TRUE){
        echo ("Données insérées avec succès". PHP_EOL);
    } else {
        echo ("Erreur: " . $conn->error . PHP_EOL);
    }

$trains = [
    ['m_matrikel' => '0015', 'm_marque' => 'Alstom', 'm_model' => 'TGV'],
];

    if($conn->query($sql) === TRUE){
        echo ("Données insérées avec succès". PHP_EOL);
    } else {
        echo ("Erreur: " . $conn->error . PHP_EOL);
    }

$voitures = [
    ['m_matrikel' => '4000', 'm_marque' => 'TOYOTA', 'm_model' => 'PRADO'],
];

    if($conn->query($sql) === TRUE){
        echo ("Données insérées avec succès". PHP_EOL);
    } else {
        echo ("Erreur: " . $conn->error . PHP_EOL);
    }