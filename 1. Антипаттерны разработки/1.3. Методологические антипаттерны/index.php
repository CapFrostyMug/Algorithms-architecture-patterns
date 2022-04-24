<?php

/* Антипаттерн "ФАКТОР НЕВЕРОЯТНОСТИ" */

/* Пояснение: недостаточная проверка данных, пришедших от пользователя */

include_once "../../config/connect.php";

if (isset($_POST['user-name']) && isset($_POST['review-text'])) {

    $name = trim(strip_tags($_POST['user-name']));
    $reviewText = htmlspecialchars($_POST['review-text']);

    $query = "INSERT INTO reviews (name, review) VALUES ('$name', '$reviewText')";
    mysqli_query($link, $query) or die($link);

    header("Location: ../../public/Pages/ReviewsPage/index.php");

}
