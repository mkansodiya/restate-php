<?php
include('inc/functions.php');
//include('admin/db.php');
// $listing_data = new listingData();
// $fetch = new fetchData();
// $agent = new agentData();
// if (isset($_GET['id'])) {
//     $listind_id = $_GET['id'];
//     $this_listing = $listing_data->getListings($listind_id);
//     echo $this_listing[0]['title'];
// }
$query = new query();
// foreach ($d->fetchData('listings') as $key => $value) {
//     echo $value;
// }
// $f_tag_name = array();
// for ($i = 0; $i < count($d->fetchData("features", "tag_name")); $i++) {
//     $f_tag_name[] = $d->fetchData("features", "tag_name")[$i]['tag_name'];
// }
// echo $d->fetchData("features", "tag_name")[0]['tag_name'];
for ($i = 0; $i < count($query->fetchData("features", "tag_name")); $i++) {
    $f_tag_name = $query->fetchData("features", "tag_name")[$i]['tag_name'];
    $f_tag_id = $query->fetchData("features", "id", "tag_name='{$f_tag_name}'")[0]['id'];
    echo $f_tag_id;
}
