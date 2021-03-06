<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Advertisements</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<br>
<a class="link" href="main">Back</a>
<h1>Advertisements</h1>

<table>
    <tr class="header">
        <th>ID</th>
        <th>User's ID</th>
        <th>Title</th>
        <th>Username</th>
    </tr>
    <?php
    include_once "../controller/DatabaseController.php";
    include_once "../controller/AdvertisementController.php";

    $AdController = new AdvertisementController();
    $ads = $AdController->getAds();

    foreach ($ads as $ad) {
        echo "<tr><td>"
            . $ad->getId() ."</td><td>"
            . $ad->getUserid() ."</td><td>"
            . $ad->getTitle() ."</td><td>"
            . $ad->getUsername() ."</td>";
    }

    ?>
</table>

</body>
</html>
