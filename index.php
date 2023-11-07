<?php

$categories = "Kategoriler";

$filmler = array(
    "1" => [
        "name" => "Paper Lives",
        "about" => "kagit toplayarak gecinen ve sagligi giderek kotulesen Mehmet terk edilmis bir cocuk bulur",
        "date" => new DateTime("2021-12-03"),
        "comments" => 23,
        "likes" => 106,
        "is_active" => true,
        "img" =>
        "./images/paperlives.jpeg"
    ],
    "2" => [
        "name" => "Walking Dead",
        "about" => "Zombi kiyametinin ardindan hayatta kalanlar",
        "date" => new DateTime("2010-10-31"),
        "comments" => 236,
        "likes" => 1023,
        "is_active" => false,
        "img" =>  "./images/walkingdead.jpeg"

    ],
    "3" => [
        "name" => "Walking Dead",
        "about" => "Zombi kiyametinin ardindan hayatta kalanlar",
        "date" => new DateTime("2010-10-31"),
        "comments" => 236,
        "likes" => 1023,
        "is_active" => false,
        "img" =>  "./images/walkingdead.jpeg"
    ]

);
$kategoriler = ['macera', 'dram', 'komedi', 'korku', 'bilim kurgu'];
// $category1 = "macera";
// $category2 = "dram";
// $category3 = "komedi";
// $category4 = "korku";

$films1 = "Film 1:";
// $filmName1 = "Paper Lives";
// $filmabout1 = "kagit toplayarak gecinen ve sagligi giderek kotulesen Mehmet terk edilmis bir cocuk bulur";
// $filmDate1 = new DateTime("2021-12-03");
// $comments1 = 23;
// $likes1 = 106;
// $is_active1 = true;

$films2 = "Film 2:";
// $filmName2 = "Walking Dead";
// $filmabout2 = "Zombi kiyametinin ardindan hayatta kalanlar";
// $filmDate2 = new DateTime("2010-10-31");
// $comments2 = 236;
// $likes2 = 1023;
// $is_active2 = false;

define("heading", "Popular filmler");


// $capitalize1 = ucfirst($filmler["1"]["about"]);
// $arr1 = explode(" ", $capitalize1);
// $splice = array_slice($arr1, 0, 10);
// $newArr1 = implode(" ", $splice) . "...";


// $capitalize2 = ucfirst($filmler["2"]["about"]);
// $arr2 = explode(" ", $capitalize2);
// $splice = array_slice($arr2, 0, 5);
// $newArr2 = implode(" ", $splice) . "...";

$imagePaths = [
    "./images/paperlives.jpeg",
    "./images/walkingdead.jpeg"
]

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
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?= $categories ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    foreach ($kategoriler as $kategori) {
                        echo '<li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">' . ucfirst($kategori) . '</a>
                                </li>';
                    }
                    ?>
                </ul>

            </div>
        </div>
    </nav>

    <h1> <?= heading ?></h1>
    <hr>

    <div class="d-flex ">
        <?php
        foreach ($filmler as $film) {
            echo '<div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="' . $film['img'] . '" class="card-img-top img-fluid mx-auto" alt="Image" style="width: 250px; height: 250px;">
        </div>
        <div class="card-body">
            <h5 class="card-title">' . $film["name"] . '</h5>
            <p class="card-text">' . $film["about"] . '</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">' . "Yapim tarihi: " . $film["date"]->format('d.m.y') . '</li>
            <li class="list-group-item">' . "Yorum sayisi: " . $film["comments"] . '</li>
            <li class="list-group-item">' . "Begeni sayisi: " . $film["likes"] . '</li>
            <li class="list-group-item">Vizyonda olma durumu: ';

            if ($film["is_active"]) {
                echo "evet";
            } else {
                echo "hayir";
            }

            echo '</li>
        </ul>
    </div>
</div>';
        }
        ?>
    </div>





</body>

</html>