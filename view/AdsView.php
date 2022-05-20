<a class="link" href="../index.php">Back</a>
<h1>Advertisements</h1>

<?php
    include_once "../controller/DatabaseConnection.php";

    $db = new DatabaseConnection();
    $db->getAllData("advertisements");

?>
