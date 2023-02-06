<?php

$db = new PDO('mysql:host=db;dbname=antiques', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH:ASSOC);

$query = $db->prepare('SELECT * FROM antiques');

$query->execute();

$antiques = $query->fetchAll();

echo '<pre>';
print_r($antiques);
echo '<pre>';