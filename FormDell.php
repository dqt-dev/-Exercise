<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <form action="..//Controller/C_Student.php" method="GET">
    <table border="1px">
        <tr>
            <th>STT</th> 
            <th>Name</th>
            <th>Age</th>
            <th>University</th>
            <th>Xóa</th>
        </tr>
    <?php
        for($i = 0; $i < sizeof($studentList); $i++)
        {?>
            <tr>
                <td style="text-align: center;"><?php echo $i+1 ?></td>
                <td><?php echo $studentList[$i]->_name ?></td>
                <td><?php echo $studentList[$i]->_age ?></td>
                <td><?php echo $studentList[$i]->_university ?></td>
                <td><input style="margin-left:22px;" type="checkbox" name="delete[]" id="" value="<?php echo $studentList[$i]->_ID ?>"></td>
            </tr>
        <?php }
    ?>
    <tr><td></td><td></td><td></td><td></td><td><input type="submit" value="Delete" ></td></tr>
    </table>
    
    </form>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>