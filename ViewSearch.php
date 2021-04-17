<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <table border="1px">
        <tr>
            <th>STT</th> 
            <th>Name</th>
            <th>Age</th>
            <th>University</th>
        </tr>
    <?php
        for($i = 0; $i < sizeof($studentList); $i++)
        {?>
            <tr>
                <td style="text-align: center;"><?php echo $i+1 ?></td>
                <td><?php echo $studentList[$i]->_name ?></td>
                <td><?php echo $studentList[$i]->_age ?></td>
                <td><?php echo $studentList[$i]->_university ?></td>
            </tr>
        <?php }
    ?>
    </table>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>