<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<br>
<a class="link" href="main">Back</a>
<h1>Users</h1>

<table>
    <tr class="header">
        <th>ID</th>
        <th>Username</th>
    </tr>

    <?php

    include_once "../controller/DatabaseController.php";
    include_once "../controller/UserController.php";

    $UserController = new UserController();
    $users = $UserController->getUsers();

    foreach ($users as $user) {
        echo "<tr><td>"
            . $user->getId() ."</td><td>"
            . $user->getName() ."</td>";
    }

    ?>

</table>

</body>
</html>
