<?php

require 'FileUtility.php';

// Read the data from persons.csv
$people = FileUtility::readFromFile('persons.csv');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated People</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h1>Generated People</h1>

    <table>
        <thead>
            <tr>
                <?php foreach ($people[0] as $header): ?>
                    <th><?php echo $header; ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i < count($people); $i++): ?>
                <tr>
                    <?php foreach ($people[$i] as $data): ?>
                        <td><?php echo $data; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>

</body>
</html>