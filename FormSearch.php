<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/C_Student.php" method="GET">
        <h2>Tìm kiếm sinh viên</h2>
        <input name="option" type="radio" value="Name" />Name
        <input name="option" type="radio" value="ID_SV" />ID_SV
        <br>
        <input type="text" name="textSearch" id="">
        <input type="submit" value="Search" >
    </form>
</body>
</html>