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
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <nav>
        <div class="logo">
            <?php echo $categories ?>
        </div>
        <ul>
            <li><?php echo $category1 ?></li>
            <li><?php echo $category2 ?></li>
            <li><?php echo $category3 ?></li>
            <li><?php echo $category4 ?></li>
        </ul>
    </nav>
    <main>
        <div class="container">
            <div class="film1">
                <h2><?php echo $films1 ?></h2>
                <h3><?php echo "Baslik: " . $filmName1 ?></h3>
                <img src= "./images/paperlives.jpeg">
                <p><?php echo "Ozet: " . $filmabout1 ?></p>
                <p> <?php echo "Yapim tarihi:" . $filmDate1->format('d.m.y') ?></p>
                <p><?php echo "Yorum sayisi: " . $comments1 ?></p>
                <p><?php echo "Begeni sayisi: " . $likes1 ?></p>
                <p> Vizyonda olma durumu:
                    <?php if ($is_active1) {
                        echo "evet";
                    } else {
                        echo "hayir";
                    } ?>
                </p>
            </div>
            <div class="film2">
                <h2><?php echo $films2 ?></h2>
                <h3><?php echo "Baslik: " . $filmName2 ?></h3>
                <img src="./images/walkingdead.jpeg">
                <p><?php echo "Ozet: " . $filmabout2 ?></p>
                <p> <?php echo "Yapim tarihi:" . $filmDate2->format('d.m.y') ?></p>
                <p><?php echo "Yorum sayisi: " . $comments2 ?></p>
                <p><?php echo "Begeni sayisi: " . $likes2 ?></p>
                <p> Vizyonda olma durumu:
                    <?php if ($is_active2) {
                        echo "evet";
                    } else {
                        echo "hayir";
                    } ?>
                </p>
            </div>
        </div>
    </main>
</body>

</html>