<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>เพิ่มผู้ใช้</h1>
    <form action="insert.php" method="post">
        <input name="username" type="text" placeholder="ชื่อผู้ใช้"><br>
        <input name="name" type="text" placeholder="ชื่อ"><br>
        <input name="password" type="password" placeholder="รหัสผ่าน">
        <button type="submit">submit</button>
    </form>
</body>
</html>