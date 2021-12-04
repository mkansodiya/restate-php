<?php include("inc/header.php");
include('inc/functions.php');
$listing_data = new query();
if (isset($_GET['id'])) {
    $listind_id = $_GET['id'];
    $this_listing = $listing_data->fetchData("listings", "*", "id=$listind_id");
}
?>
<!-- header end  -->
<!-- wrapper  -->
<div id="wrapper">
    <!-- content -->
    <div class="content">
        <section class="hidden-section   single-hero-section" data-scrollax-parent="true" id="sec1">
            <div class="bg-wrap bg-parallax-wrap-gradien">
                <div class="bg par-elem " data-bg="images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
            </div>
            <div class="container">
                <!--  list-single-opt_header-->
                <div class="list-single-opt_header fl-wrap">
                    <ul class="list-single-opt_header_cat">

                        <li><a href="#" class="cat-opt color-bg"> <?php echo ucfirst($this_listing[0]['type']); ?></a></li>

                        <li><a href="#" class="cat-opt color-bg">Apartment</a></li>
                    </ul>
                </div>
                <!--  list-single-opt_header end -->
                <!--  list-single-header-item-->
                <div class="list-single-header-item no-bg-list_sh fl-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <h1><?php echo $this_listing[0]['title']; ?><span class="verified-badge tolt" data-microtip-position="bottom" data-tooltip="Verified"><i class="fas fa-check"></i></span></h1>
                            <div class="geodir-category-location fl-wrap">
                                <a href="#"><i class="fas fa-map-marker-alt"></i> <?php echo $this_listing[0]['address']; ?></a>
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="<?php echo $this_listing[0]['overall_rating']; ?>"><span class="re_stars-title"><?php $listing_data->ratingComment($listind_id);
                                                                                                                                                                                    ?></span></div>
                            </div>
                            <div class="share-holder hid-share">
                                <a href="#" class="share-btn showshare sfcs"> <i class="fas fa-share-alt"></i> Share </a>
                                <div class="share-container  isShare"></div>
                            </div>
                        </div>
                    </div>
                    <div class="list-single-header-footer fl-wrap">
                        <div class="list-single-header-price" data-propertyprise="50500"><strong>Price:</strong><span>$</span><?php echo $this_listing[0]['price']; ?></div>
                        <div class="list-single-header-date"><span>Date:</span><?php echo date('d-m-y', strtotime($this_listing[0]['added_on'])); ?></div>
                        <div class="list-single-stats">
                            <ul class="no-list-style">
                                <li><span class="viewed-counter"><i class="fas fa-eye"></i> Viewed - 156 </span></li>
                                <li><span class="bookmark-counter"><i class="fas fa-heart"></i> Bookmark - 24 </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="breadcrumbs fw-breadcrumbs smpar fl-wrap">
            <div class="container">
                <div class="breadcrumbs-list">
                    <a href="#">Home</a><a href="#">Listings</a><a href="#"><?php $city_id = $this_listing[0]['city_id'];
                                                                            echo $listing_data->fetchData("cities", "*", "id=$city_id")[0]['name'];
                                                                            ?></a><span>Property Single</span>
                </div>
                <div class="show-more-snopt smact"><i class="fal fa-ellipsis-v"></i></div>
                <div class="show-more-snopt-tooltip">
                    <a href="#sec15" class="custom-scroll-link"> <i class="fas fa-comment-alt"></i> Write a review</a>
                    <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                </div>
                <a class="print-btn tolt" href="javascript:window.print()" data-microtip-position="bottom" data-tooltip="Print"><i class="fas fa-print"></i></a>
                <a class="compare-top-btn tolt" data-microtip-position="bottom" data-tooltip="Compare" href="#"><i class="fas fa-random"></i></a>
                <div class="like-btn"><i class="fas fa-heart"></i> Save</div>
            </div>
        </div>
        <div class="gray-bg small-padding fl-wrap">
            <div class="container">
                <div class="row">
                    <!--  listing-single content -->
                    <div class="col-md-8">
                        <div class="list-single-main-wrapper fl-wrap">
                            <!--  scroll-nav-wrap -->
                            <div class="scroll-nav-wrap">
                                <nav class="scroll-nav scroll-init fixed-column_menu-init">
                                    <ul class="no-list-style">
                                        <li><a class="act-scrlink" href="#sec1"><i class="fal fa-home-lg-alt"></i></a><span>Main</span></li>
                                        <li><a href="#sec2"><i class="fal fa-image"></i></a><span>Gallery</span></li>
                                        <li><a href="#sec3"><i class="fal fa-info"></i> </a><span>Details</span></li>
                                        <li><a href="#sec4"><i class="fal fa-bed"></i></a><span>Rooms</span></li>
                                        <li><a href="#sec5"><i class="fal fa-video"></i></a><span>Video</span></li>
                                        <li><a href="#sec6"><i class="fal fa-map-pin"></i></a><span>Location</span></li>
                                        <li><a href="#sec7"><i class="fal fa-comment-alt-lines"></i></a><span>Reviews</span></li>
                                    </ul>
                                    <div class="progress-indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
                                            <circle cx="16" cy="16" r="15.9155" class="progress-bar__background" />
                                            <circle cx="16" cy="16" r="15.9155" class="progress-bar__progress 
                                                            js-progress-bar" />
                                        </svg>
                                    </div>
                                </nav>
                            </div>
                            <!--  scroll-nav-wrap end-->
                            <div class="list-single-main-media fl-wrap" id="sec2">
                                <!-- gallery-items   -->
                                <div class="gallery-items grid-small-pad  list-single-gallery three-coulms lightgallery">
                                    <!-- 1 -->
                                    <div class="gallery-item ">
                                        <div class="grid-item-holder">
                                            <div class="box-item">
                                                <img src="images/all/1.jpg" alt="">
                                                <a href="images/all/1.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 1 end -->
                                    <!-- 2 -->
                                    <div class="gallery-item">
                                        <div class="grid-item-holder">
                                            <div class="box-item">
                                                <img src="images/all/1.jpg" alt="">
                                                <a href="images/all/1.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 2 end -->
                                    <!-- 3 -->
                                    <div class="gallery-item gallery-item-second">
                                        <div class="grid-item-holder">
                                            <div class="box-item">
                                                <img src="images/all/1.jpg" alt="">
                                                <a href="images/all/1.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 3 end -->
                                    <!-- 4 -->
                                    <div class="gallery-item">
                                        <div class="grid-item-holder">
                                            <div class="box-item">
                                                <img src="images/all/1.jpg" alt="">
                                                <a href="images/all/1.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 4 end -->
                                    <!-- 5 -->
                                    <div class="gallery-item">
                                        <div class="grid-item-holder">
                                            <div class="box-item">
                                                <img src="images/all/1.jpg" alt="">
                                                <a href="images/all/1.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 5 end -->
                                    <!-- 7 -->
                                    <div class="gallery-item">
                                        <div class="grid-item-holder">
                                            <div class="box-item">
                                                <img src="images/all/1.jpg" alt="">
                                                <a href="images/all/1.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 7 end -->
                                </div>
                                <!-- end gallery items -->
                            </div>
                            <div class="list-single-facts fl-wrap">
                                <!-- inline-facts -->
                                <?php
                                foreach ($listing_data->fetchData("features", "*", "", "", "", "", 4) as $key => $value) {


                                ?>
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <?php echo $value['icon']; ?>
                                            <h6><?php echo $value['name']; ?></h6>
                                            <span><?php $feature_id = $value['id'];
                                                    $listing_id = $_GET['id'];
                                                    if (isset($listing_data->fetchData("feature_values", "*", "feature_id=$feature_id and parent_id=$listing_id")[0]['value'])) {
                                                        echo $listing_data->fetchData("feature_values", "*", "feature_id=$feature_id and parent_id=$listing_id")[0]['value'];
                                                    } else {
                                                        echo "Data unvailable";
                                                    } ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                                <!-- inline-facts end -->

                                <!-- inline-facts end -->
                            </div>
                            <div class="list-single-main-container fl-wrap" id="sec3">
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title">
                                        <h3>About This Listing</h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                        <a href="#" class="btn float-btn color-bg">Visit Website</a>
                                    </div>
                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title">
                                        <h3>Details</h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <div class="details-list">
                                            <ul>
                                                <li><span>Property Id:</span><?php echo $listing_id; ?></li>
                                                <?php
                                                foreach ($listing_data->fetchData("features") as $key => $value) {
                                                ?>
                                                    <?php
                                                    $feature_id = $value["id"];

                                                    $fvalue = $listing_data->fetchData("feature_values", "*", "feature_id=$feature_id and parent_id=$listing_id")[0]['value'];
                                                    if (isset($fvalue)) {
                                                        echo "<li><span>{$value['name']}:</span>{$fvalue}</li>";
                                                    } ?>

                                                <?php } ?>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- list-single-main-item end -->
                                <!--   list-single-main-item -->
                                <div class="list-single-main-item fl-wrap" id="sec4">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>Available Rooms</h3>
                                    </div>
                                    <!--   rooms-container -->
                                    <div class="rooms-container fl-wrap">
                                        <!--  rooms-item -->
                                        <div class="rooms-item fl-wrap">
                                            <div class="rooms-media">
                                                <img src="images/all/1.jpg" alt="">
                                                <div class="dynamic-gal more-photos-button color-bg" data-dynamicPath="[{'src': 'images/all/1.jpg'}, {'src': 'images/all/1.jpg'},{'src': 'images/all/1.jpg'}]"><i class="fas fa-camera"></i> <span>3 photos</span> </div>
                                            </div>
                                            <div class="rooms-details">
                                                <div class="rooms-details-header fl-wrap">
                                                    <span class="rooms-area">44<strong> / sq ft</strong></span>
                                                    <h3>Standard Family Room</h3>
                                                    <h5>Additional Rooms: <span>Guest Bath</span></h5>
                                                </div>
                                                <p>Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <div class="facilities-list fl-wrap">
                                                    <ul>
                                                        <li class="tolt" data-microtip-position="top" data-tooltip="Air conditioner"><i class="fal fa-snowflake"></i></li>
                                                        <li class="tolt" data-microtip-position="top" data-tooltip="Tv Inside"><i class="fal fa-tv"></i> </li>
                                                        <li class="tolt" data-microtip-position="top" data-tooltip="Bed Inside"><i class="fal fa-bed"></i></li>
                                                        <li class="tolt" data-microtip-position="top" data-tooltip="Fireplace"><i class="fal fa-fireplace"></i> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  rooms-item end -->
                                        <!--  rooms-item -->
                                        <div class="rooms-item fl-wrap">
                                            <div class="rooms-media">
                                                <img src="images/all/1.jpg" alt="">
                                                <div class="dynamic-gal more-photos-button color-bg" data-dynamicPath="[{'src': 'images/all/1.jpg'}, {'src': 'images/all/1.jpg'} ]"><i class="fas fa-camera"></i> <span>2 photos</span> </div>
                                            </div>
                                            <div class="rooms-details">
                                                <div class="rooms-details-header fl-wrap">
                                                    <span class="rooms-area">18<strong> / sq ft</strong></span>
                                                    <h3>Modern Bathroom</h3>
                                                    <h5>Additional Rooms: <span>Sauna</span></h5>
                                                </div>
                                                <p>Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <div class="facilities-list fl-wrap">
                                                    <ul>
                                                        <li class="tolt" data-microtip-position="top" data-tooltip="Ceramic bath"><i class="fal fa-bath"></i></li>
                                                        <li class="tolt" data-microtip-position="top" data-tooltip="Multifunctional Shower"><i class="fal fa-shower"></i></li>
                                                        <li class="tolt" data-microtip-position="top" data-tooltip="Sauna"> <i class="fal fa-hot-tub"></i></li>
                                                        <li class="tolt" data-microtip-position="top" data-tooltip="Panoramic windows"><i class="fal fa-columns"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  rooms-item end -->
                                        <!--  rooms-item -->
                                        <div class="rooms-item fl-wrap">
                                            <div class="rooms-media">
                                                <img src="images/all/1.jpg" alt="">
                                                <div class="dynamic-gal more-photos-button color-bg" data-dynamicPath="[{'src': 'images/all/1.jpg'}, {'src': 'images/all/1.jpg'},{'src': 'images/all/1.jpg'}]"><i class="fas fa-camera"></i> <span>3 photos</span> </div>
                                            </div>
                                            <div class="rooms-details">
                                                <div class="rooms-details-header fl-wrap">
                                                    <span class="rooms-area">27<strong> / sq ft</strong></span>
                                                    <h3>Spacious Kitchen</h3>
                                                    <h5>Additional Rooms: <span>Pantry</span></h5>
                                                </div>
                                                <p>Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <div class="facilities-list fl-wrap">
                                                    <ul>
                                                        <li class="tolt" data-microtip-position="top" data-tooltip="Microwave"><i class="fal fa-washer"></i> </li>
                                                        <li class="tolt" data-microtip-position="top" data-tooltip="Panoramic Windows"><i class="fal fa-columns"></i></li>
                                                        <li class="tolt" data-microtip-position="top" data-tooltip="Refrigerator"><i class="fal fa-temperature-frigid"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  rooms-item end -->
                                    </div>
                                    <!--   rooms-container end -->
                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title">
                                        <h3>Floor Plans</h3>
                                    </div>
                                    <div class="accordion">
                                        <a class="toggle act-accordion" href="#"> First Floor Plan <strong>286 sq ft</strong> <span></span> </a>
                                        <div class="accordion-inner visible">
                                            <img src="images/plans/1.jpg" alt="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. .</p>
                                        </div>
                                        <a class="toggle" href="#">Second Floor Plan <strong>280 sq ft</strong> <span></span></a>
                                        <div class="accordion-inner">
                                            <img src="images/plans/1.jpg" alt="">
                                            <p>Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra</p>
                                        </div>
                                        <a class="toggle" href="#"> Garage Plan <strong>180 sq ft</strong> <span></span></a>
                                        <div class="accordion-inner">
                                            <img src="images/plans/1.jpg" alt="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap" id="sec5">
                                    <div class="list-single-main-item-title">
                                        <h3>Video</h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <div class="video-box fl-wrap">
                                            <img src="images/all/1.jpg" class="respimg" alt="">
                                            <a class="video-box-btn image-popup color-bg" href="https://vimeo.com/158059890"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title">
                                        <h3>Features</h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <div class="listing-features ">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-dumbbell"></i> Gym</a></li>
                                                <li><a href="#"><i class="fal fa-wifi"></i> Wi Fi</a></li>
                                                <li><a href="#"><i class="fal fa-parking"></i> Parking</a></li>
                                                <li><a href="#"><i class="fal fa-cloud"></i> Air Conditioned</a></li>
                                                <li><a href="#"><i class="fal fa-swimmer"></i> Pool</a></li>
                                                <li><a href="#"><i class="fal fa-cctv"></i> Security</a></li>
                                                <li><a href="#"><i class="fal fa-washer"></i> Laundry Room</a></li>
                                                <li><a href="#"><i class="fal fa-utensils"></i> Equipped Kitchen</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fw-lmi fl-wrap" id="sec6">
                                    <div class="map-container mapC_vis mapC_vis2">
                                        <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Our Location" data-infotitle="House in Financial Distric" data-infotext="70 Bright St New York, USA"></div>
                                        <div class="scrollContorl"></div>
                                    </div>
                                    <input id="pac-input" class="controls fl-wrap controls-mapwn" autocomplete="on" type="text" placeholder="What Nearby? Schools, Gym... " value="">
                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap" id="sec7">
                                    <div class="list-single-main-item-title">
                                        <h3>Reviews <span>2</span></h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <div class="reviews-comments-wrap fl-wrap">
                                            <div class="review-total">
                                                <span class="review-number blue-bg">4.0</span>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4"><span class="re_stars-title">Good</span></div>
                                            </div>
                                            <!-- reviews-comments-item -->
                                            <div class="reviews-comments-item">
                                                <div class="review-comments-avatar">
                                                    <img src="images/avatar/1.jpg" alt="">
                                                </div>
                                                <div class="reviews-comments-item-text smpar">
                                                    <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>
                                                    <div class="show-more-snopt-tooltip bxwt">
                                                        <a href="#"> <i class="fas fa-reply"></i> Reply</a>
                                                        <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                                                    </div>
                                                    <h4><a href="#">Liza Rose</a></h4>
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="3"><span class="re_stars-title">Average</span></div>
                                                    <div class="clearfix"></div>
                                                    <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                                    <div class="reviews-comments-item-date"><span class="reviews-comments-item-date-item"><i class="far fa-calendar-check"></i>12 April 2018</span><a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i> Helpful Review <span>6</span> </a></div>
                                                </div>
                                            </div>
                                            <!--reviews-comments-item end-->
                                            <!-- reviews-comments-item -->
                                            <div class="reviews-comments-item">
                                                <div class="review-comments-avatar">
                                                    <img src="images/avatar/1.jpg" alt="">
                                                </div>
                                                <div class="reviews-comments-item-text smpar">
                                                    <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>
                                                    <div class="show-more-snopt-tooltip bxwt">
                                                        <a href="#"> <i class="fas fa-reply"></i> Reply</a>
                                                        <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                                                    </div>
                                                    <h4><a href="#">Adam Koncy</a></h4>
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><span class="re_stars-title">Excellent</span></div>
                                                    <div class="clearfix"></div>
                                                    <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                                                    <div class="reviews-comments-item-date"><span class="reviews-comments-item-date-item"><i class="far fa-calendar-check"></i>03 December 2017</span><a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i> Helpful Review <span>2</span> </a></div>
                                                </div>
                                            </div>
                                            <!--reviews-comments-item end-->
                                        </div>
                                    </div>
                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap" id="sec15">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>Add Your Review</h3>
                                    </div>
                                    <!-- Add Review Box -->
                                    <div id="add-review" class="add-review-box">
                                        <div class="leave-rating-wrap">
                                            <span class="leave-rating-title">Your rating for this listing : </span>
                                            <div class="leave-rating">
                                                <input type="radio" data-ratingtext="Excellent" name="rating" id="rating-1" value="1" />
                                                <label for="rating-1" class="fal fa-star"></label>
                                                <input type="radio" data-ratingtext="Good" name="rating" id="rating-2" value="2" />
                                                <label for="rating-2" class="fal fa-star"></label>
                                                <input type="radio" name="rating" data-ratingtext="Average" id="rating-3" value="3" />
                                                <label for="rating-3" class="fal fa-star"></label>
                                                <input type="radio" data-ratingtext="Fair" name="rating" id="rating-4" value="4" />
                                                <label for="rating-4" class="fal fa-star"></label>
                                                <input type="radio" data-ratingtext="Very Bad " name="rating" id="rating-5" value="5" />
                                                <label for="rating-5" class="fal fa-star"></label>
                                            </div>
                                            <div class="count-radio-wrapper">
                                                <span id="count-checked-radio">Your Rating</span>
                                            </div>
                                        </div>
                                        <!-- Review Comment -->
                                        <form class="add-comment custom-form">
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Your name* <span class="dec-icon"><i class="fas fa-user"></i></span></label>
                                                        <input name="phone" type="text" onClick="this.select()" value="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Yourmail* <span class="dec-icon"><i class="fas fa-envelope"></i></span></label>
                                                        <input name="reviewwname" type="text" onClick="this.select()" value="">
                                                    </div>
                                                </div>
                                                <textarea cols="40" rows="3" placeholder="Your Review:"></textarea>
                                            </fieldset>
                                            <button class="btn big-btn color-bg float-btn">Submit Review <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                    <!-- Add Review Box / End -->
                                </div>
                                <!-- list-single-main-item end -->
                            </div>
                        </div>
                    </div>
                    <!-- listing-single content end-->
                    <!-- sidebar -->
                    <div class="col-md-4">
                        <!--box-widget-->
                        <div class="box-widget fl-wrap">
                            <div class="profile-widget">
                                <div class="profile-widget-header color-bg smpar fl-wrap">
                                    <div class="pwh_bg"></div>
                                    <div class="call-btn"><a href="tel:123-456-7890" class="tolt color-bg" data-microtip-position="right" data-tooltip="Call Now"><i class="fas fa-phone-alt"></i></a></div>
                                    <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>
                                    <div class="show-more-snopt-tooltip bxwt">
                                        <a href="#"> <i class="fas fa-comment-alt"></i> Write a review</a>
                                        <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                                    </div>
                                    <div class="profile-widget-card">
                                        <div class="profile-widget-image">
                                            <img src="images/avatar/1.jpg" alt="">
                                        </div>
                                        <div class="profile-widget-header-title">
                                            <h4><a href="agent-single.html">Jessie Wilcox</a></h4>
                                            <div class="clearfix"></div>
                                            <div class="pwh_counter"><span>22</span>Property Listings</div>
                                            <div class="clearfix"></div>
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-widget-content fl-wrap">
                                    <div class="contats-list fl-wrap">
                                        <ul class="no-list-style">
                                            <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">+7(123)987654</a></li>
                                            <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">JessieWilcox@domain.com</a></li>
                                            <li><span><i class="fal fa-browser"></i> Website :</span> <a href="#">themeforest.net</a></li>
                                        </ul>
                                    </div>
                                    <div class="profile-widget-footer fl-wrap">
                                        <a href="agent-single.html" class="btn float-btn color-bg small-btn">View Profile</a>
                                        <a href="#sec-contact" class="custom-scroll-link tolt" data-microtip-position="left" data-tooltip="Viewing Property"><i class="fal fa-paper-plane"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--box-widget end -->
                        <!--box-widget-->
                        <div class="box-widget fl-wrap">
                            <div class="box-widget-title fl-wrap">Featured Properties</div>
                            <div class="box-widget-content fl-wrap">
                                <!--widget-posts-->
                                <div class="widget-posts  fl-wrap">
                                    <ul class="no-list-style">
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.html"><img src="images/all/small/1.jpg" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.html">Affordable Urban Room</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square , NJ, USA</a></div>
                                                <div class="widget-posts-descr-price"><span>Price: </span> $ 1500 / per month</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.html"><img src="images/all/small/1.jpg" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.html">Family House</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a></div>
                                                <div class="widget-posts-descr-price"><span>Price: </span> $ 50000</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.html"><img src="images/all/small/1.jpg" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.html">Apartment to Rent</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                                                <div class="widget-posts-descr-price"><span>Price: </span> $100 / per night</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.html"><img src="images/all/small/1.jpg" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.html">Apartment to Rent</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                                                <div class="widget-posts-descr-price"><span>Price: </span> $100 / per night</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- widget-posts end-->
                                <a href="listing.html" class="btn float-btn color-bg small-btn">View All Properties</a>
                            </div>
                        </div>
                        <!--box-widget end -->
                        <!--box-widget-->
                        <div class="box-widget fl-wrap hidden-section" style="margin-top: 30px">
                            <div class="box-widget-content fl-wrap color-bg">
                                <div class="color-form reset-action">
                                    <div class="color-form-title fl-wrap">
                                        <h4>Calculate Your Mortgage</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. </p>
                                    </div>
                                    <form method="post" name="mortgage-form">
                                        <div class="fl-wrap">
                                            <label for="amt">Loan Amount </label>
                                            <input id="amt" name="amt" type="text" placeholder="0" value="0">
                                            <div class="use-current-price tolt" data-microtip-position="left" data-tooltip="Use current price"><i class="fal fa-tag"></i></div>
                                        </div>
                                        <label for="apr">Percentage rate</label>
                                        <div class="price-rage-item fl-wrap">
                                            <input type="text" id="apr" name="apr" class="price-range" data-min="0" data-max="100" data-step="1" value="0" data-prefix="%">
                                        </div>
                                        <label for="trm">Loan Term (Years) </label>
                                        <div class="price-rage-item fl-wrap">
                                            <input type="text" id="trm" name="trm" class="price-range" data-min="0" data-max="5" data-step="1" value="0" data-prefix="Y">
                                        </div>
                                        <div class="clearfix"></div>
                                        <button type="button" id="sbt" class="color2-bg">Calculate</button>
                                        <div class="reset-form reset-btn"> <i class="far fa-sync-alt"></i> Reset Form</div>
                                        <div class="monterage-title fl-wrap">
                                            <h5>Monthly payment:</h5>
                                            <input type="text" id="pmt" name="mPmt" value="0">
                                            <div class="monterage-title-item">$<span></span></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--box-widget end -->
                        <!--box-widget-->
                        <div class="box-widget fl-wrap">
                            <div class="box-widget-title fl-wrap">Propertie Documents</div>
                            <div class="box-widget-content fl-wrap">
                                <div class="bwc_download-list">
                                    <a href="#" download><span><i class="fal fa-file-pdf"></i></span>Property Presentation</a>
                                    <a href="#" download><span><i class="fal fa-file-word"></i></span>Energetic Certificate</a>
                                    <a href="#" download><span><i class="fal fa-file-pdf"></i></span>Property Plans</a>
                                </div>
                            </div>
                        </div>
                        <!--box-widget end -->
                        <!--box-widget-->
                        <div class="box-widget fl-wrap">
                            <div class="box-widget-fixed-init fl-wrap" id="sec-contact">
                                <div class="box-widget-title fl-wrap box-widget-title-color color-bg">Contact Property</div>
                                <div class="box-widget-content fl-wrap">
                                    <div class="custom-form">
                                        <form method="post" name="contact-property-form">
                                            <label>Your name* <span class="dec-icon"><i class="fas fa-user"></i></span></label>
                                            <input name="phone" type="text" onClick="this.select()" value="">
                                            <label>Your phone * <span class="dec-icon"><i class="fas fa-phone"></i></span></label>
                                            <input name="phone" type="text" onClick="this.select()" value="">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Date <span class="dec-icon"><i class="fas fa-calendar-check"></i></span></label>
                                                    <div class="date-container fl-wrap">
                                                        <input type="text" placeholder="" style="padding: 16px 5px 16px 60px;" name="datepicker-here" value="" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Time </label>
                                                    <select data-placeholder="9 AM" class="chosen-select on-radius no-search-select">
                                                        <option>9 AM</option>
                                                        <option>10 AM</option>
                                                        <option>11 AM</option>
                                                        <option>12 AM</option>
                                                        <option>13 PM</option>
                                                        <option>14 PM</option>
                                                        <option>15 PM</option>
                                                        <option>16 PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn float-btn color-bg fw-btn"> Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--box-widget end -->
                    </div>
                    <!--  sidebar end-->
                </div>
                <div class="fl-wrap limit-box"></div>
                <div class="listing-carousel-wrapper carousel-wrap fl-wrap">
                    <div class="list-single-main-item-title">
                        <h3>Similar Properties</h3>
                    </div>
                    <div class="listing-carousel carousel ">
                        <!-- slick-slide-item -->
                        <?php
                        foreach ($listing_data->fetchData('listings') as $key => $value) {

                        ?>
                            <div class="slick-slide-item">
                                <!-- listing-item -->
                                <div class="listing-item">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img fl-wrap">
                                            <a href="listing-single.html" class="geodir-category-img_item">
                                                <img src="images/all/1.jpg" alt="">
                                                <div class="overlay"></div>
                                            </a>
                                            <div class="geodir-category-location">
                                                <a href="#4" class="map-item"><i class="fas fa-map-marker-alt"></i> <?php echo $value['address']; ?></a>
                                            </div>
                                            <ul class="list-single-opt_header_cat">
                                                <li><a href="#" class="cat-opt blue-bg"><?php echo ucfirst($value['type']); ?></a></li>
                                                <li><a href="#" class="cat-opt color-bg">Apartment</a></li>
                                            </ul>
                                            <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save"><span><i class="fal fa-heart"></i></span></a>
                                            <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare"><span><i class="fal fa-random"></i></span></a>
                                            <div class="geodir-category-listing_media-list">
                                                <span><i class="fas fa-camera"></i> 8</span>
                                            </div>
                                        </div>
                                        <div class="geodir-category-content fl-wrap">
                                            <h3><a href="listing-single.html"><?php echo $value['title'] . " for " .  $value["type"]; ?> </a></h3>
                                            <div class="geodir-category-content_price">$ 600,000</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                                            <div class="geodir-category-content-details">
                                                <ul>
                                                    <li><i class="fal fa-bed"></i><span>3</span></li>
                                                    <li><i class="fal fa-bath"></i><span>2</span></li>
                                                    <li><i class="fal fa-cube"></i><span>450 ft2</span></li>
                                                </ul>
                                            </div>
                                            <div class="geodir-category-footer fl-wrap">
                                                <a href="agent-single.html" class="gcf-company"><img src="images/avatar/1.jpg" alt=""><span>By Liza Rose</span></a>
                                                <div class="listing-rating card-popup-rainingvis tolt" data-microtip-position="top" data-tooltip="Good" data-starrating2="4"></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- listing-item end-->
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-prev lc-wbtn lc-wbtn_prev"><i class="far fa-angle-left"></i></div>
                    <div class="swiper-button-next lc-wbtn lc-wbtn_next"><i class="far fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- content end -->
    <!-- subscribe-wrap -->
    <div class="subscribe-wrap fl-wrap">
        <div class="container">
            <div class="subscribe-container fl-wrap color-bg">
                <div class="pwh_bg"></div>
                <div class="mrb_dec mrb_dec3"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="subscribe-header">
                            <h4>newsletter</h4>
                            <h3>Sign up for newsletter and get latest news and update</h3>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="footer-widget fl-wrap">
                            <div class="subscribe-widget fl-wrap">
                                <div class="subcribe-form">
                                    <form id="subscribe">
                                        <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="Enter Your Email" spellcheck="false" type="text">
                                        <button type="submit" id="subscribe-button" class="subscribe-button color-bg"> Subscribe</button>
                                        <label for="subscribe-email" class="subscribe-message"></label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe-wrap end -->
    <!-- footer -->
    <footer class="main-footer fl-wrap">
        <div class="footer-inner fl-wrap">
            <div class="container">
                <div class="row">
                    <!-- footer widget-->
                    <div class="col-md-3">
                        <div class="footer-widget fl-wrap">
                            <div class="footer-widget-logo fl-wrap">
                                <img src="images/logo.png" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                            <div class="fw_hours fl-wrap">
                                <span>Monday - Friday:<strong> 8am - 6pm</strong></span>
                                <span>Saturday - Sunday:<strong> 9am - 3pm</strong></span>
                            </div>
                        </div>
                    </div>
                    <!-- footer widget end-->
                    <!-- footer widget-->
                    <div class="col-md-3">
                        <div class="footer-widget fl-wrap">
                            <div class="footer-widget-title fl-wrap">
                                <h4>Helpful links</h4>
                            </div>
                            <ul class="footer-list fl-wrap">
                                <li><a href="about.html">About Our Company</a></li>
                                <li><a href="blog.html">Our last News</a></li>
                                <li><a href="pricing.html">Pricing Plans</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="help.html">Help Center</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer widget end-->
                    <!-- footer widget-->
                    <div class="col-md-3">
                        <div class="footer-widget fl-wrap">
                            <div class="footer-widget-title fl-wrap">
                                <h4>Contacts Info</h4>
                            </div>
                            <ul class="footer-contacts fl-wrap">
                                <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                <li> <span><i class="fal fa-map-marker"></i> Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                                <li><span><i class="fal fa-phone"></i> Phone :</span><a href="#">+7(111)123456789</a></li>
                            </ul>
                            <div class="footer-social fl-wrap">
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- footer widget end-->
                    <!-- footer widget-->
                    <div class="col-md-3">
                        <div class="footer-widget fl-wrap">
                            <div class="footer-widget-title fl-wrap">
                                <h4>Download our API</h4>
                            </div>
                            <p>Start working with Homeradar that can provide everything you need </p>
                            <div class="api-links fl-wrap">
                                <a href="#" class="api-btn color-bg"><i class="fab fa-apple"></i> App Store</a>
                                <a href="#" class="api-btn color-bg"><i class="fab fa-google-play"></i> Play Market</a>
                            </div>
                        </div>
                    </div>
                    <!-- footer widget end-->
                </div>
            </div>
        </div>
        <!--sub-footer-->
        <div class="sub-footer gray-bg fl-wrap">
            <div class="container">
                <div class="copyright"> &#169; Homeradar 2022 . All rights reserved.</div>
                <div class="subfooter-nav">
                    <ul class="no-list-style">
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--sub-footer end -->
    </footer>
    <!-- footer end -->
</div>
<!-- wrapper end -->
<!--register form -->
<div class="main-register-wrap modal">
    <div class="reg-overlay"></div>
    <div class="main-register-holder tabs-act">
        <div class="main-register-wrapper modal_main fl-wrap">
            <div class="main-register-header color-bg">
                <div class="main-register-logo fl-wrap">
                    <img src="images/white-logo.png" alt="">
                </div>
                <div class="main-register-bg">
                    <div class="mrb_pin"></div>
                    <div class="mrb_pin mrb_pin2"></div>
                </div>
                <div class="mrb_dec"></div>
                <div class="mrb_dec mrb_dec2"></div>
            </div>
            <div class="main-register">
                <div class="close-reg"><i class="fal fa-times"></i></div>
                <ul class="tabs-menu fl-wrap no-list-style">
                    <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                    <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                </ul>
                <!--tabs -->
                <div class="tabs-container">
                    <div class="tab">
                        <!--tab -->
                        <div id="tab-1" class="tab-content first-tab">
                            <div class="custom-form">
                                <form method="post" name="registerform">
                                    <label>Username or Email Address * <span class="dec-icon"><i class="fal fa-user"></i></span></label>
                                    <input name="email" type="text" onClick="this.select()" value="">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Password * <span class="dec-icon"><i class="fal fa-key"></i></span></label>
                                        <input name="password" type="password" autocomplete="off" onClick="this.select()" value="">
                                        <span class="eye"><i class="fal fa-eye"></i> </span>
                                    </div>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                    <div class="filter-tags">
                                        <input id="check-a3" type="checkbox" name="check">
                                        <label for="check-a3">Remember me</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button type="submit" class="log_btn color-bg"> LogIn </button>
                                </form>
                            </div>
                        </div>
                        <!--tab end -->
                        <!--tab -->
                        <div class="tab">
                            <div id="tab-2" class="tab-content">
                                <div class="custom-form">
                                    <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                        <label>Full Name * <span class="dec-icon"><i class="fal fa-user"></i></span></label>
                                        <input name="name" type="text" onClick="this.select()" value="">
                                        <label>Email Address * <span class="dec-icon"><i class="fal fa-envelope"></i></span></label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <div class="pass-input-wrap fl-wrap">
                                            <label>Password * <span class="dec-icon"><i class="fal fa-key"></i></span></label>
                                            <input name="password" type="password" autocomplete="off" onClick="this.select()" value="">
                                            <span class="eye"><i class="fal fa-eye"></i> </span>
                                        </div>
                                        <div class="filter-tags ft-list">
                                            <input id="check-a2" type="checkbox" name="check">
                                            <label for="check-a2">I agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms and Conditions</a></label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <button type="submit" class="log_btn color-bg"> Register </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--tab end -->
                    </div>
                    <!--tabs end -->
                    <div class="log-separator fl-wrap"><span>or</span></div>
                    <div class="soc-log fl-wrap">
                        <p>For faster login or register use your social account.</p>
                        <a href="#" class="facebook-log"> Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--register form end -->
<a class="to-top color-bg"><i class="fas fa-caret-up"></i></a>
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script src="js/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/scripts.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOU_API_KEY_HERE&libraries=places"></script>
<script src="js/map-single.js"></script>
</body>

</html>