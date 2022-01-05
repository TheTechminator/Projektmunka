<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="client/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar.dark bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="index.php" class="nav-link">Főoldal</a></li>
            <li class="nav-item"><a href="index.php?pg=autok.php" class="nav-link">Autók</a></li>
            <li class="nav-item"><a href="index.php?pg=markak.php" class="nav-link">Márkák</a></li>
        </ul>
    </nav>

    <div class="container p-3">
        <?php
        if(isset($_GET["pg"]))
            include "client/inc/".$_GET["pg"];
        else
            include "client/inc/fooldal.php";
        ?>
    </div>
    
</body>
</html>