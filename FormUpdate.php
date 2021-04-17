<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php
        $ID = $_REQUEST["ID_Update"];
        $name = $_REQUEST["name"];
        $age = $_REQUEST["age"];
        $university = $_REQUEST["university"];
    ?> 
        <form name="form" action="../Controller/C_Student.php" method="GET">
        <table>
            <tr>
                <td colspan="2"> Cập Nhật Thông Tin Sinh Viên</td>
            </tr>
            <tr>
                <td><label for="">ID_SV</label></td>
                <td><input type="text" name="ID_Update" id="" value ="<?php echo $ID?>" readonly></td>
            </tr>
            <tr>
                <td><label for="">NAME_SV</label></td>
                <td><input type="text" name="name" id="" value = "<?php echo $name?>"></td>
            </tr>
            <tr>
                <td><label for="">AGE</label></td>
                <td><input type="text" name="age" id="" value = "<?php echo $age?>"></td>
            </tr>
            <tr>
                <td><label for="">UNIVERSITY</label></td>
                <td><input type="text" name="university" id="" value = "<?php echo $university?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update"></td>
                <td><input type="button" value="Exit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
