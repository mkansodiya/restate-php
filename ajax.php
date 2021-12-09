<?php
date_default_timezone_set("Asia/Kolkata");
include("inc/functions.php");
$query = new query();
//listing detail
$listing_type = $_POST['type'];
$response = array();
if ($listing_type != "room") {
    $listing_title = $_POST['title'];
    $images = $_FILES['header_media'];
    //$img_names = implode(",", $image['name']);

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
    $listing_facilities = implode(",", $listing_facilities);

    //listing features
    $property_type = $_POST['property_name'];
    $Bedrooms = $_POST['bedrooms'];
    $Bathrooms = $_POST['bathrooms'];
    $Accomodation = $_POST['accomodation'];
    $Property_Lot_Size = $_POST['property_lot_size'];
    $Garage_Size = $_POST['garage_size'];

    $tmp_name = array();
    foreach ($images['tmp_name'] as $key => $tmp) {
        $tmp_name[] = $tmp;
    }
    $img_names = array();
    for ($i = 0; $i < count($images['name']); $i++) {
        $name = str_replace(' ', '-', $images['name'][$i]);
        move_uploaded_file($tmp_name[$i], "img/" . $name);
        $img_names[$i] = str_replace(' ', '-', $images['name'][$i]);
    }
    $images = implode(",", $img_names);


    //inserting listing data
    $data = [
        "title" => $listing_title, "type" => $listing_type, "facilities" => $listing_facilities, "city_id" => $city_id, "address" => $address, "price" => $price, "image" => $images, "description" => $listings_desc,
        "category" => $category, "tags" => $keywords, "author_id" => 1, "added_on" => date("y-m-d H:i:s")
    ];
    // print_r($data);
    $listing_id = $query->insert("listings", $data);



    // //inserting listing features

    for ($i = 0; $i < count($query->fetchData("features", "tag_name")); $i++) {
        $f_tag_name = $query->fetchData("features", "tag_name")[$i]['tag_name'];
        $f_tag_id = $query->fetchData("features", "id", "tag_name='{$f_tag_name}'")[0]['id'];
        $data = [
            "feature_id" => $f_tag_id, "value" => $_POST["{$f_tag_name}"], "parent_id" => $listing_id
        ];
        $f_success = $query->insert("feature_values", $data);
        if ($f_success) {
        } else {
            echo "failed to add features";
        }
    }
    //plan detail
    $plan_title = array();
    foreach ($_POST['plan_title'] as $key) {
        $plan_title[] = $key;
    }
    $plan_area = array();
    foreach ($_POST['plan_area'] as $key) {
        $plan_area[] = $key;
    }
    $plan_images = array();
    foreach ($_FILES['plan_image']['name'] as $key => $value) {
        $plan_images[] = str_replace(" ", "-", $value);
    }
    $plan_img_tmp = array();
    foreach ($_FILES['plan_image']['tmp_name'] as $key => $value) {
        $plan_img_tmp[] = $value;
    }
    $plan_desc = array();
    foreach ($_POST['plan_description'] as $key) {
        $plan_desc[] = $key;
    }


    //inserting plan data
    for ($i = 0; $i < count($plan_title); $i++) {
        $data = ["parent_id" => $listing_id, "name" => $plan_title[$i], "description" => $plan_desc[$i], "image" => $plan_images[$i], "area" => $plan_area[$i], "added_on" => date("y-m-d H:i:s")];
        $floor_plan_insert = $query->insert("floor_plans", $data);
    }
    if (!$listing_id) {
        echo "Query failed";
    } else {
        move_uploaded_file($plan_img_tmp[$i], "img/" . $plan_images[$i]);
    }
    $response = ["type" => "listing", "status" => 1, "listing_id" => $listing_id];
    echo json_encode($response);
} else {
    //room details
    $parent_id = $_POST['listing_id'];
    $room_title = $_POST['room_title'];
    $additional_room = $_POST['room_title'];
    $room_desc = $_POST['room_desc'];
    $room_area = $_POST['area'];
    $room_images = array();

    foreach ($_FILES['room_images'] as $key => $value) {
        $room_images[] = $value;
    }
    //print_r($room_images[2]);
    for ($i = 0; $i < count($room_images[0]); $i++) {
        $tmp_name = $room_images[2][$i];
        $name = $room_images[0][$i];
        move_uploaded_file($tmp_name, "img/$name");
    }
    $room_images = implode(",", $room_images[0]);

    $room_facilities = array();

    foreach ($_POST['room_facilities'] as $key => $value) {
        $room_facilities[] = $value;
    }
    $room_facilities = implode(",", $room_facilities);
    //inserting room data

    $data = ["name" => $room_title, "image" => $room_images, "facilities" => $room_facilities, "description" => $room_desc, "area" => $room_area, "parent_id" => $parent_id, "added_on" => date("y-m-d H:i:s")];
    $room_id = $query->insert("rooms", $data);
}
// if ($listing_type == "room") {

//     //room details
//     $parent_id = $_POST['listing_id'];
//     $room_title = $_POST['room_title'];
//     $additional_room = $_POST['room_title'];
//     $room_desc = $_POST['room_desc'];
//     $room_area = $_POST['area'];
//     $room_images = array();

//     foreach ($_FILES['room_images'] as $key => $value) {
//         $room_images[] = $value;
//     }
//     //print_r($room_images[2]);
//     for ($i = 0; $i < count($room_images[0]); $i++) {
//         $tmp_name = $room_images[2][$i];
//         $name = $room_images[0][$i];
//         move_uploaded_file($tmp_name, "img/$name");
//     }
//     $room_images = implode(",", $room_images[0]);

//     $room_facilities = array();

//     foreach ($_POST['room_facilities'] as $key => $value) {
//         $room_facilities[] = $value;
//     }
//     $room_facilities = implode(",", $room_facilities);
//     //inserting room data

//     $data = ["name" => $room_title, "image" => $room_images, "facilities" => $room_facilities, "description" => $room_desc, "area" => $room_area, "parent_id" => $parent_id, "added_on" => date("y-m-d H:i:s")];
//     $room_id = $query->insert("rooms", $data);
// } else {
//     $listing_title = $_POST['title'];
//     $image = $_FILES['header_media'];
//     $price = $_POST['price'];
//     $category = $_POST['category'];
//     $keywords = $_POST['keywords'];
//     $address = $_POST['address'];
//     $longitude = $_POST['longitude'];
//     $latitide = $_POST['latitide'];
//     $city_id = $_POST['city_id'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $website = $_POST['website'];

//     $listings_desc = $_POST['listings_desc'];
//     $youtube_video = $_POST['youtube_video'];
//     $vimeo_video = $_POST['vimeo_video'];
//     $listing_facilities = $_POST['listing_facilities'];
//     echo $listing_facilities = implode(",", $listing_facilities);

//     //listing features
//     $property_type = $_POST['property_name'];
//     $Bedrooms = $_POST['bedrooms'];
//     $Bathrooms = $_POST['bathrooms'];
//     $Accomodation = $_POST['accomodation'];
//     $Property_Lot_Size = $_POST['property_lot_size'];
//     $Garage_Size = $_POST['garage_size'];

//     // //inserting listing data
//     // $data = [
//     //     "title" => $listing_title, "type" => $listing_type, "city_id" => $city_id, "address" => $address, "price" => $price, "image" => $image['name'], "description" => $listings_desc,
//     //     "category" => $category, "tags" => $keywords, "author_id" => 1, "added_on" => date("y-m-d H:i:s")
//     // ];

//     // $listing_id = $query->insert("listings", $data);

//     // // inserting listing facilities
//     // foreach ($listing_facilities as $key => $fac_id) {
//     //     $data = ["fac_id" => $fac_id, "for" => "listings", "parent_id" => $listing_id, "added_on" => date("y-m-d H:i:s")];
//     //     $query->insert("available_facilities", $data);
//     // }

//     // //inserting listing features


//     // for ($i = 0; $i < count($query->fetchData("features", "tag_name")); $i++) {
//     //     $f_tag_name = $query->fetchData("features", "tag_name")[$i]['tag_name'];
//     //     $f_tag_id = $query->fetchData("features", "id", "tag_name='{$f_tag_name}'")[0]['id'];
//     //     $data = [
//     //         "feature_id" => $f_tag_id, "value" => $_POST["{$f_tag_name}"], "parent_id" => $listing_id
//     //     ];
//     //     $f_success = $query->insert("feature_values", $data);
//     //     if ($f_success) {
//     //         echo "features added";
//     //     } else {
//     //         echo "failed to add features";
//     //     }
//     // }
//     // //plan detail
//     // $plan_title = array();
//     // foreach ($_POST['plan_title'] as $key) {
//     //     $plan_title[] = $key;
//     // }
//     // $plan_area = array();
//     // foreach ($_POST['plan_area'] as $key) {
//     //     $plan_area[] = $key;
//     // }
//     // $plan_images = array();
//     // foreach ($_FILES['plan_image'] as $key => $value) {
//     //     $plan_images[] = $value;
//     // }
//     // $plan_desc = array();
//     // foreach ($_POST['plan_description'] as $key) {
//     //     $plan_desc[] = $key;
//     // }

//     // //inserting plan data
//     // for ($i = 0; $i < count($plan_title); $i++) {
//     //     $data = ["parent_id" => $listing_id, "name" => $plan_title[$i], "description" => $plan_desc[$i], "image" => $plan_images[$i], "area" => $plan_area[$i], "added_on" => date("y-m-d H:i:s")];
//     //     $floor_plan_insert = $query->insert("floor_plans", $data);
//     //     if (!$floor_plan_insert) {
//     //         echo "Query failed";
//     //     } else {
//     //         echo "seccess";
//     //     }
//     // }
// }
