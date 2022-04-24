<?php

/* Антипаттерн "ЧЛЕНОВРЕДИТЕЛЬСТВО" */

/* Пояснение: объекты излишне заточены под конкретные задачи */


/* 1. getImages.php */

include_once "../config/connect.php";

function getImagesData()
{

    global $link;

    $query = "SELECT * FROM images";
    $result = mysqli_query($link, $query) or die($link);

    $imagesArr = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $imagesArr[] = $row;
    }

    return $imagesArr;

}

getImagesData();


/* 2. getReviews.php */

include_once "../../../config/connect.php";

$getReviews = "SELECT * FROM reviews";
$result = mysqli_query($link, $getReviews) or die($link);

for ($reviewsArr = []; $row = mysqli_fetch_assoc($result); $reviewsArr[] = $row) ;
