<a class="link" href="main">Back</a>
<h1>Users</h1>

<table>
    <tr>
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
        . $user->getName() ."</td><td>";
}

?>

</table>
