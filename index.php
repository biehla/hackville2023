<?php
session_start();

if (isset($_SESSION) && isset($_SESSION['page'])) {
    if ($_SESSION['page'] == "login" && isset($_POST) && isset($_POST['username'])) {
        $_SESSION['username'] = $_POST['username'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <script src="scripts/script.js" defer></script>
    <title>Help.Tech</title>
</head>
<body>
<?php
if (isset($_SESSION) && isset($_SESSION['page'])) {
    switch ($_SESSION['page']) {
        case "helperPage":
            include 'view/helperDashboard.php';
            break;
        case "login":
            include 'view/login.php';
            break;
        default:
            include 'view/index.php';
    }
}
?>
</body>
