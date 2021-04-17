<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
        <form name="form" action="../Controller/C_Student.php" method="GET">
        <table>
            <tr>
                <td colspan="2"> <h1>Thêm Sinh Viên</h1></td>
            </tr>
            <tr>
                <td><label for="">ID_SV</label></td>
                <td><input type="text" name="ID_Add" id=""></td>
            </tr>
            <tr>
                <td><label for="">NAME_SV</label></td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td><label for="">AGE</label></td>
                <td><input type="text" name="age" id=""></td>
            </tr>
            <tr>
                <td><label for="">UNIVERSITY</label></td>
                <td><input type="text" name="university" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Add"></td>
                <td><input type="button" value="Exit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
