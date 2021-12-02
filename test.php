<?php
include('inc/functions.php');
$listing_array = getListings();
foreach ($listing_array as $key => $value) {
    echo $value;
};
echo (getAuthorByID(1)["first_name"]);
ratingComment(1);
