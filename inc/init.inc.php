<?php

// Init.inc est le fichier de configuration de notre application

// Connexion à la BDD : 

$pdo = new PDO('mysql:host=localhost;dbname=site_commerce', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8']);

// On démarre la session ici :
session_start();

// On stock le chemin racine de l'application : 
const ROOT = '/site_boutique/';
// define('ROOT','/site_boutique/');

// Variables d'affichage : 
$contenu = '';
$contenu_gauche = '';
$contenu_droite = '';

// On inclut le fichier qui contiendra les fonctions de l'application 
require_once 'fonctions.inc.php';