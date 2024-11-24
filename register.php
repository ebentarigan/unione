<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Header</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include "layout/header.html"
?>
<h3>Register Akun</h3>
<form>
    <input type="text" placeholder="username" name="username"/>
    <input type="password" placeholder="password" name="pasword"/>
    <button type="submit">masuk sekarang</button>
</form>
<?php
    include "layout/footer.html"
?>
</body>
</html>
