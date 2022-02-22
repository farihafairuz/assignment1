<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="action.php?pages=home" class="navbar-brand">Logo</a>
        <ul class="navbar-nav ml-auto">
            <!--            <li class="nav-item"><a href="action.php?pages=home" class="nav-link">Word Count</a></li>-->
            <li class="nav-item"><a href="action.php?pages=view-products" class="nav-link">All Products</a></li>
            <li class="nav-item"><a href="action.php?pages=login" class="nav-link">Login</a></li>
            <?php if(isset($_SESSION['id'])){ ?>
            <li class="nav-item"><a href="action.php?pages=file-upload" class="nav-link"> File Upload</a></li>
            <li class="nav-item"><a href="action.php?pages=logout" class="nav-link"> Logout</a></li>
            <?php }?>


        </ul>
    </div>
</nav>

