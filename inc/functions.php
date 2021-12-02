<?php
function dbConnect()
{
    include_once("admin/db.php");
}
dbConnect();
function getListings()
{
    include("admin/db.php");
    $q = $con->prepare("SELECT * FROM listings");
    $q->execute();
    $r = $q->fetchAll(PDO::FETCH_ASSOC);
    return ($r);
}

function getAuthorByID($id)
{
    include("admin/db.php");
    $q = $con->prepare("SELECT * FROM users WHERE id=?");
    $q->bindParam(1, $id);
    $q->execute();
    $r = $q->fetch(PDO::FETCH_ASSOC);
    return ($r);
}
function ratingComment($listing_id)
{
    include("admin/db.php");
    $q = $con->prepare("SELECT * FROM listings WHERE id=?");
    $q->bindParam(1, $listing_id);
    $q->execute();
    $value = $q->fetch(PDO::FETCH_ASSOC);
    if ($value['overall_rating'] <= 1) {
        echo "Worst";
    } else if ($value['overall_rating'] > 1 && $value['overall_rating'] <= 2) {
        echo "Bad";
    } else if ($value['overall_rating'] > 2 && $value['overall_rating'] <= 3) {
        echo "Average";
    } else if ($value['overall_rating'] > 3 && $value['overall_rating'] <= 4) {
        echo "Good";
    } else if ($value['overall_rating'] > 4 && $value['overall_rating'] <= 5) {
        echo "Excillent";
    }
}

function getCities()
{
    include("admin/db.php");
    $q = $con->prepare("SELECT * FROM cities");
    $q->execute();
    $r = $q->fetchAll(PDO::FETCH_ASSOC);
    return $r;
}
