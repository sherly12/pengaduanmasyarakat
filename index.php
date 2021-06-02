<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</head>

<body class="bg-primary">
    <?php
    include 'conn/koneksi.php';
    if (@$_GET['p'] == "") {
        include_once 'login.php';
    } elseif (@$_GET['p'] == "login") {
        include_once 'login.php';
    } elseif (@$_GET['p'] == "daftarakun") {
        include_once 'daftarakun.php';
    } elseif (@$_GET['p'] == "logout") {
        include_once 'logout.php';
    }
    ?>


</body>

</html>
