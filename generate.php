<?php

require 'vendor/autoload.php';
require 'FileUtility.php';
require 'Random.php';

// Generate random data for 300 people
$people = Random::generatePeople(300);

// Save to persons.csv file
FileUtility::writeToFile('persons.csv', $people);

echo "300 records have been generated and saved to persons.csv.";