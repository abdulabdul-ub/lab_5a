<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
     function multiplication($multiplier) {
         $results = [];
         for ($i = 1; $i <= 12; $i++) {
             $results[] = [
                 'no' => $i,
                 'multiplier' => $multiplier,
                 'answer' => $i * $multiplier
             ];
         }
         return $results;
     }

     $table = multiplication(4);
     ?>

<h1>Multiplication Table for 4</h1>
<table border="1">
    <tr>
    <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php foreach ($table as $row): ?>
        <tr>
            <td><?php echo $row['no']; ?></td>
            <td><?php echo $row['multiplier']; ?></td>
            <td><?php echo $row['answer']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>