<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Are you sure you want to delete?</h1>
    <br>
    <form action="../php/userController.php" method="post">
        <input type="hidden" name="id" value=<?=$_GET['id']?>>
        <input type="submit" name="delete" value="delete">
    </form>
    <a href="../views/user_list.php">No</a>
</body>
</html>