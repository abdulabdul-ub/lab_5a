<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
        $name = "Abdul Fattah Majdy Muhammad";
        $matric = "JI240010";
        $course = "Information Security (with Honours)";
        $year = "2nd";
        $address = "Kolej Kediaman Tun Hussein Onn";
    ?>
 <table border="1">
    <tr>
        <td>Name</td>
        <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
        <td>Matric No.</td>
        <td><?php echo "$matric"; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
        <td>Year</td>
        <td><?php echo "$year"; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo "$address"; ?></td>
    </tr>
 </table>

</body>
</html>