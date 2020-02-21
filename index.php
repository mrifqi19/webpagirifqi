<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <?php
    include'assets/css.php';
    ?>
</head>
<body>
<?php
include'assets/navbar.php';
?>
<!-- SLIDER -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <center><div class="carousel-item active">
                <img src="html/img/1.jpg" class="d-block w-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="html/img/2.png" class="d-block w-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="html/img/3.jpg" class="d-block w-50" alt="...">
            </div></center>
        </div>
    </div><br>
<!-- TABLE -->
    <table class="container table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
<!-- TEXT -->
    <div class="container-fluid">
        <center>
        <div class="row">
            <div class="col">
                <h1>Halo</h1>
            </div>
            <div class="col">
                <h1>Hai</h1>
            </div>
            <div class="col">
                <h1>Pie</h1>
            </div>
            <div class="col">
                <h1>Kabare</h1>
            </div>
        </div>
        </center>
    </div>
    <?php
    include'assets/footer.php';
    include'assets/js.php';
    ?>
</body>
</html>