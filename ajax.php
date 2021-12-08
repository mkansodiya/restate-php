<?php
date_default_timezone_set("Asia/Kolkata");
include("inc/functions.php");
$query = new query();
//listing detail
$listing_title = $_POST['title'];
$image = $_FILES['header_media'];
$type = $_POST['type'];
$price = $_POST['price'];
$category = $_POST['category'];
$keywords = $_POST['keywords'];
$address = $_POST['address'];
$longitude = $_POST['longitude'];
$latitide = $_POST['latitide'];
$city_id = $_POST['city_id'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];

$listings_desc = $_POST['listings_desc'];
$youtube_video = $_POST['youtube_video'];
$vimeo_video = $_POST['vimeo_video'];
$listing_facilities = $_POST['listing_facilities'];

//listing features
$property_type = $_POST['property_name'];
$Bedrooms = $_POST['bedrooms'];
$Bathrooms = $_POST['bathrooms'];
$Accomodation = $_POST['accomodation'];
$Property_Lot_Size = $_POST['property_lot_size'];
$Garage_Size = $_POST['garage_size'];

//inserting listing data
// $f_tag_name = array();



// $f_id = $query->fetchData("features", "*", "tag_name=''");
$data = [
    "title" => $listing_title, "type" => $type, "city_id" => $city_id, "address" => $address, "price" => $price, "image" => $image['name'], "description" => $listings_desc,
    "category" => $category, "tags" => $keywords, "author_id" => 1, "added_on" => date("y-m-d H:i:s")
];

$listing_id = $query->insert("listings", $data);

// inserting listing facilities
foreach ($listing_facilities as $key => $fac_id) {
    $data = ["fac_id" => $fac_id, "for" => "listings", "parent_id" => $listing_id, "added_on" => date("y-m-d H:i:s")];
    $query->insert("available_facilities", $data);
}

//inserting listing features


for ($i = 0; $i < count($query->fetchData("features", "tag_name")); $i++) {
    $f_tag_name = $query->fetchData("features", "tag_name")[$i]['tag_name'];
    $f_tag_id = $query->fetchData("features", "id", "tag_name='{$f_tag_name}'")[0]['id'];
    $data = [
        "feature_id" => $f_tag_id, "value" => $_POST["{$f_tag_name}"], "parent_id" => $listing_id
    ];
    $f_success = $query->insert("feature_values", $data);
    if ($f_success) {
        echo "features added";
    } else {
        echo "failed to add features";
    }
}


//room details
// $room_title = array();
// foreach ($_POST['room_title'] as $key) {
//     $room_title[] = $key;
// }
// $additional_room = array();
// foreach ($_POST['additional_room'] as $key) {
//     $additional_room[] = $key;
// }
// $room_desc = array();
// foreach ($_POST['room_desc'] as $key) {
//     $room_desc[] = $key;
// }
// $room_images = array();
// foreach ($_FILES['room_images'] as $key) {
//     $room_images[] = $key;
// }
// $room_facilities = $_POST['room_facilities'];

//$room_area = 10;
//inserting room data
// for ($i = 0; $i < count($room_title); $i++) {
//     $data = ["name" => $room_title[$i], "image" => $room_images[0][$i], "description" => $room_desc[$i], "area" => $room_area, "parent_id" => $listing_id, "added_on" => date("y-m-d H:i:s")];
//     $room_id = $query->insert("rooms", $data);

//     // foreach ($room_facilities[$i] as $key => $fac_id) {
//     //     // $data = ["fac_id" => $fac_id, "for" => "rooms", "parent_id" => $listing_id, "added_on" => date("y-m-d H:i:s")];
//     //     // $query->insert("available_facilities", $data);
//     //     echo "su";
//     // }
// }

//plan detail
// $plan_title = array();
// foreach ($_POST['plan_title'] as $key) {
//     $plan_title[] = $key;
// }
// $plan_area = array();
// foreach ($_POST['plan_area'] as $key) {
//     $plan_area[] = $key;
// }
// $plan_images = array();
// foreach ($_FILES['plan_image'] as $key => $value) {
//     $plan_images[] = $value;
// }
// $plan_desc = array();
// foreach ($_POST['plan_description'] as $key) {
//     $plan_desc[] = $key;
// }
// //print_r($plan_desc);
// //inserting plan data
// for ($i = 0; $i < count($plan_title); $i++) {
//     $data = ["parent_id" => $listing_id, "name" => $plan_title[$i], "description" => $plan_desc[$i], "image" => $plan_images[$i], "area" => $plan_area[$i], "added_on" => date("y-m-d H:i:s")];
//     $floor_plan_insert = $query->insert("floor_plans", $data);
//     if (!$floor_plan_insert) {
//         echo "Query failed";
//     } else {
//         echo "seccess";
//     }
// }



//print_r($_POST['plan_area']);
// $listing_title = $_POST['title'];
// $listing_title = $_POST['title'];
// $listing_title = $_POST['title'];
// $listing_title = $_POST['title'];
// $listing_title = $_POST['title'];
// $listing_title = $_POST['title'];
// $listing_title = $_POST['title'];
// $listing_title = $_POST['title'];

// $listing_title = $_POST['title'];
// $listing_title = $_POST['title'];
// $listing_title = $_POST['title'];
// $listing_title = $_POST['title'];
