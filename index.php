<?php

$categories = "Kategoriler";
$category1 = "macera";
$category2 = "dram";
$category3 = "komedi";
$category4 = "korku";

$films1 = "Film 1:";
$filmName1 = "Paper Lives";
$filmabout1 = "Kagit toplayarak gecinen ve sagligi giderek kotulesen Mehmet terk edilmis bir cocuk bulur";
$filmDate1 = new DateTime("2021-12-03");
$comments1 = 23;
$likes1 = 106;
$is_active1 = true;

$films2 = "Film 2:";
$filmName2 = "Walking Dead";
$filmabout2 = "Zombi kiyametinin ardindan hayatta kalanlar";
$filmDate2 = new DateTime("2010-10-31");
$comments2 = 236;
$likes2 = 1023;
$is_active2 = false;


// echo $filmDate->format('Y-m-d'); // Output: 2021-12-03

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo $categories ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><?php echo $category1 ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $category2 ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $category3 ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo $category4 ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex ">
        <div class="col-6 ">
            <div class="card" style="width: 18rem;">
                <img src="./images/paperlives.jpeg" class="card-img-top img-fluid mx-auto" alt="..." style="width: 250px; height: 250px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $filmName1 ?></h5>
                    <p class="card-text"><?php echo $filmabout1 ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo "Yapim tarihi: " . $filmDate1->format('d.m.y') ?></li>
                    <li class="list-group-item"><?php echo "Yorum sayisi: " . $comments1 ?></li>
                    <li class="list-group-item"><?php echo "Begeni sayisi: " . $likes1 ?></li>
                    <li class="list-group-item">Vizyonda olma durumu:
                        <?php if ($is_active1) {
                            echo "evet";
                        } else {
                            echo "hayir";
                        } ?></li>
                </ul>
            </div>
        </div>
        <div class="col-6  ">
            <div class="card" style="width: 18rem;">
                <img src="./images/walkingdead.jpeg" class="card-img-top img-fluid mx-auto" alt="..." style="width: 250px; height: 250px;">

                <div class="card-body">
                    <h5 class="card-title"><?php echo $filmName2 ?></h5>
                    <p class="card-text"><?php echo $filmabout2 ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo "Yapim tarihi: " . $filmDate2->format('d.m.y') ?></li>
                    <li class="list-group-item"><?php echo "Yorum sayisi: " . $comments2 ?></li>
                    <li class="list-group-item"><?php echo "Begeni sayisi: " . $likes2 ?></li>
                    <li class="list-group-item">Vizyonda olma durumu:
                        <?php if ($is_active2) {
                            echo "evet";
                        } else {
                            echo "hayir";
                        } ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>