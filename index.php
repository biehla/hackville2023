<?php
session_start();

$_SESSION['page'] = 'login';

if (isset($_SESSION) && isset($_SESSION['page'])) {
    if ($_SESSION['page'] == "login" && isset($_POST) && isset($_POST['username'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['page'] = 'dashboard';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help.Tech</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        case 'dashboard':
            include 'view/dashboard.php';
            break;
        default:
            include 'view/index.php';
            break;
    }
}
?>
</body>
