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
$d = new query();
// foreach ($d->fetchData('listings') as $key => $value) {
//     echo $value;
// }
$features_arr = $d->fetchData("features");
echo count($features_arr);
