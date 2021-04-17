<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Chi tiết sinh viên</h1>
    <?php
        echo "<p>ID: <b>".$student->_ID." </b></p>";
        echo "<p>Name: <b>".$student->_name." </b></p>";
        echo "<p>Age: <b>".$student->_age." </b></p>";
        echo "<p>University: <b>".$student->_university." </b></p>";
    ?>
    <br>
    <p><a href="javascript:history.back()">Back</a></p>
</body>
</html>