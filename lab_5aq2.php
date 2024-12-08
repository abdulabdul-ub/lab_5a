<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
        $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21    
        ],
        [    
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Raju' ,
            'program' => 'BIT',
            'age' => 22                        
        ]           
    ];
    ?>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $students): ?>
        <tr>
            <td><?php echo $students ['name']; ?></td>
            <td><?php echo $students ['program']; ?></td>
            <td><?php echo $students ['age']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>