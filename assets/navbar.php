<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Hana Nan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <?php
                    if($_SESSION['level']=="admin"){
                ?>
            <li class="nav-item">
                <a class="nav-link" href="mysql_biodata.php">Biodata</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mysql_nilai.php">Nilai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mysql_diskon.php">Barang</a>
            </li>
            <?php
                }elseif($_SESSION['level']=="user"){
            ?>
            <li class="nav-item">
                <a class="nav-link" href="mysql_biodata.php">Biodata</a>
            </li>
            <?php
                }
            ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <?php
                    if($_SESSION['level']=="admin"){
                ?>
                    <a class="nav-link" href="proses/proses_logout.php">Logout</a>
                <?php
                    }elseif($_SESSION['level']=="user"){
                ?>
                    <a class="nav-link" href="proses/proses_logout.php">Logout</a>
                <?php
                    } else{
                ?>
                    <a class="nav-link" href="mysql_login.php">Login</a>
                <?php
                    }
                ?>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav><br>