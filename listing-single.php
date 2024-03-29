<?php include("inc/header.php");

$listing_data = new query();
if (isset($_GET['id'])) {
    $listind_id = $_GET['id'];
    $this_listing = $listing_data->fetchData("listings", "*", "id=$listind_id");
    $images = explode(",", $this_listing[0]['image']);
}
?>
<!-- header end  -->
<!-- wrapper  -->
<div id="wrapper">
    <!-- content -->
    <div class="content">
        <section class="hidden-section   single-hero-section" data-scrollax-parent="true" id="sec1">
            <div class="bg-wrap bg-parallax-wrap-gradien">
                <div class="bg par-elem " data-bg="<?php echo "img/" . $images[0]; ?>" data-scrollax="properties: { translateY: '30%' }"></div>
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


                                    <?php for ($i = 0; $i < count($images); $i++) {
                                        $class = "gallery-item";
                                        if ($i == 2) {
                                            $class = "gallery-item gallery-item-second";
                                        }
                                        echo   "<div class=\"{$class}\">
                                        <div class=\"grid-item-holder\">
                                            <div class=\"box-item\">
                                                <img src=\"img/{$images[$i]}\" alt=\"\" />
                                                <a href=\"img/{$images[$i]}\" class=\"gal-link popup-image\"><i class=\"fa fa-search\"></i></a>
                                            </div>
                                        </div>
                                    </div>";

                                        //echo "img/" . $images[0];
                                    } ?>



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
                                        <p><?php echo $this_listing[0]['description']; ?></p>

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
                                        <?php
                                        foreach ($listing_data->fetchData("rooms", "*", "parent_id={$listing_id}") as $key => $value) {


                                        ?>
                                            <div class="rooms-item fl-wrap">
                                                <div class="rooms-media">
                                                    <img src="img/<?php echo explode(",", $value['image'])[0]; ?>" alt="">

                                                    <div class="dynamic-gal more-photos-button color-bg" data-dynamicPath="[<?php
                                                                                                                            $img_arr = array();
                                                                                                                            for ($i = 0; $i < count(explode(",", $value['image'])); $i++) {
                                                                                                                                $img = explode(",", $value['image'])[$i];
                                                                                                                                $img_arr[] = "{'src': 'img/{$img}'}";
                                                                                                                                //explode(",", $value['image'])[$i];
                                                                                                                            }
                                                                                                                            //$img_arr = ["{'src': 'img/{$Imhg}'}", "{'src': 'img/{$Imhg}'}"];
                                                                                                                            echo implode(",", $img_arr); ?>]"><i class="fas fa-camera"></i> <span><?php echo count(explode(",", $value['image'])); ?> photos</span> </div>
                                                </div>
                                                <div class="rooms-details">
                                                    <div class="rooms-details-header fl-wrap">
                                                        <span class="rooms-area"><?php echo $value['area']; ?><strong> / sq ft</strong></span>
                                                        <h3><?php echo $value['name']; ?></h3>
                                                        <h5>Additional Rooms: <span>Guest Bath</span></h5>
                                                    </div>
                                                    <p><?php if (strlen($value['description'] > 130)) {
                                                            echo substr($value['description'], 0, 130) . "...";
                                                        } else {
                                                            echo $value['description'];
                                                        } ?></p>
                                                    <div class="facilities-list fl-wrap">
                                                        <ul>

                                                            <?php
                                                            $room_facilities = explode(",", $value['facilities']);
                                                            foreach ($room_facilities as $key) {

                                                            ?>
                                                                <?php

                                                                $id = $key;
                                                                echo "<li class=\"tolt\" data-microtip-position=\"top\" data-tooltip=\"{$listing_data->fetchData('facilities', '*', "id={$id}")[0]['name']}\">{$listing_data->fetchData('facilities', '*', "id={$id}")[0]['icon']}</li>";

                                                                ?>

                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!--  rooms-item end -->


                                        <!--  rooms-item end -->
                                    </div>
                                    <!--   rooms-container end -->
                                </div>

                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title">
                                        <h3>Floor Plans</h3>
                                    </div>
                                    <?php $floor_plans = $listing_data->fetchData("floor_plans", "*", "parent_id={$listing_id}");
                                    for ($i = 0; $i < count($floor_plans); $i++) {
                                        if ($i == 0) {
                                            $floor_class = "accordion-inner visible";
                                        } else {
                                            $floor_class = "accordion-inner";
                                        }
                                        echo " <div class=\"accordion\">
                                        <a class=\"toggle act-accordion\" href=\"#\">
                                          First Floor Plan <strong>{$floor_plans[$i]["area"]} sq mt</strong>
                                          <span></span>
                                        </a>
                                        <div class=\"{$floor_class}\">
                                          <img src=\"img/{$floor_plans[$i]["image"]}\" alt=\"\" />
                                          <p>
                                          {$floor_plans[$i]["description"]}
                                          </p>
                                        </div>
                                      </div>";
                                    }
                                    ?>


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
                                        <h3>Facilities</h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <div class="listing-features ">
                                            <ul>
                                                <?php
                                                $facilities = explode(",", $this_listing[0]['facilities']);


                                                foreach ($facilities as $key => $id) {
                                                    echo "<li><a href=\"#\">{$listing_data->fetchData("facilities", "*", "id={$id}")[0]['icon']} {$listing_data->fetchData("facilities", "*", "id={$id}")[0]['name']}</a></li>";
                                                } ?>

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
                                        <h3>Reviews <span><?php echo count($listing_data->fetchData('reviews', "*", "parent_id={$listing_id}")); ?></span></h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <div class="reviews-comments-wrap fl-wrap">
                                            <div class="review-total">
                                                <span class="review-number blue-bg">4.0</span>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4"><span class="re_stars-title">Good</span></div>
                                            </div>
                                            <!-- reviews-comments-item -->
                                            <?php
                                            foreach ($listing_data->fetchData('reviews', "*", "parent_id={$listing_id}") as $key => $value) {
                                                $author_avatar = "";
                                                if (isset($listing_data->fetchData("users", "*", "id={$value['author_id']}")[0]['image'])) {
                                                    $author_avatar = $listing_data->fetchData("users", "*", "id={$value['author_id']}")[0]['image'];
                                                } else {
                                                    $author_avatar = "http://www.goodmorningimagesdownload.com/wp-content/uploads/2020/05/No-Whatsapp-Dp-Images-1.jpg";
                                                }
                                                $author_name = ucfirst($listing_data->fetchData("users", "*", "id={$value['author_id']}")[0]['first_name']);
                                                $date = date('d F, Y', strtotime($value['added_on']));
                                                $helpful_count = $value['helpful_count'];
                                                $rating_comment = $listing_data->commentRatingText($value['id']);
                                                $comment = "<div class=\"reviews-comments-item\">
                                                <div class=\"review-comments-avatar\">
                                                    <img src=\"{$author_avatar}\" alt=\"\">
                                                </div>
                                                <div class=\" reviews-comments-item-text smpar\">
                                                    <div class=\"box-widget-menu-btn smact\"><i class=\"far fa-ellipsis-h\"></i></div>
                                                    <div class=\"show-more-snopt-tooltip bxwt\">
                                                        <a href=\"#\"> <i class=\"fas fa-reply\"></i> Reply</a>
                                                        <a href=\"#\"> <i class=\"fas fa-exclamation-triangle\"></i> Report </a>
                                                    </div>
                                                    <h4><a href=\"#\">{$author_name} </a></h4>
                                                    <div class=\"listing-rating card-popup-rainingvis\" data-starrating2=\"{$value['rating']}\"><span class=\"re_stars-title\">{$rating_comment}</span></div>
                                                    <div class=\"clearfix\"></div>
                                                    <p>\" {$value['content']}  \"</p>
                                                    <div class=\"reviews-comments-item-date\"><span class=\"reviews-comments-item-date-item\"><i class=\"far fa-calendar-check\"></i>{$date}</span><a href=\"#\" class=\"rate-review\"><i class=\"fal fa-thumbs-up\"></i> Helpful Review <span>{$helpful_count}</span> </a></div>
                                                </div>
                                                </div>";
                                                echo $comment;
                                            }
                                            ?>

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
                                    <form>
                                        <div id="add-review" class="add-review-box">
                                            <div class="leave-rating-wrap">
                                                <span class="leave-rating-title">Your rating for this listing : </span>
                                                <div class="leave-rating">
                                                    <input type="radio" data-ratingtext="Excellent" name="rating" id="rating-1" value="5" />
                                                    <label for="rating-1" class="fal fa-star"></label>
                                                    <input type="radio" data-ratingtext="Good" name="rating" id="rating-2" value="4" />
                                                    <label for="rating-2" class="fal fa-star"></label>
                                                    <input type="radio" name="rating" data-ratingtext="Average" id="rating-3" value="3" />
                                                    <label for="rating-3" class="fal fa-star"></label>
                                                    <input type="radio" data-ratingtext="Fair" name="rating" id="rating-4" value="2" />
                                                    <label for="rating-4" class="fal fa-star"></label>
                                                    <input type="radio" data-ratingtext="Very Bad " name="rating" id="rating-5" value="1" />
                                                    <label for="rating-5" class="fal fa-star"></label>
                                                </div>
                                                <div class="count-radio-wrapper">
                                                    <span id="count-checked-radio">Your Rating</span>
                                                </div>
                                            </div>
                                            <!-- Review Comment -->
                                            <div class="add-comment custom-form">
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Your name* <span class="dec-icon"><i class="fas fa-user"></i></span></label>
                                                            <input name="name" type="text" onClick="this.select()" value="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Yourmail* <span class="dec-icon"><i class="fas fa-envelope"></i></span></label>
                                                            <input name="reviewwname" type="text" onClick="this.select()" value="">
                                                        </div>
                                                    </div>
                                                    <textarea cols="40" rows="3" placeholder="Your Review:"></textarea>
                                                </fieldset>
                                                <button class="btn big-btn color-bg float-btn">Submit Review <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </form>
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
                                        <?php

                                        foreach ($listing_data->fetchData("listings") as $key => $value) {
                                            $listing_images = explode(",", $value['image']);
                                            if ($value['type'] == "Sale") {
                                                $price_after = " /-";
                                            } else {
                                                $price_after = "/ per month";
                                            }
                                            $listing = "  <li>
                                            <div class=\"widget-posts-img\"><a href=\"listing-single.html\"><img src=\"img/{$listing_images[0]}\" alt=\"\"></a>
                                            </div>
                                            <div class=\"widget-posts-descr\">
                                                <h4><a href=\"listing-single.html\">{$value['title']}</a></h4>
                                                <div class=\"geodir-category-location fl-wrap\"><a href=\"#\"><i class=\"fas fa-map-marker-alt\"></i> {$value['address']}</a></div>
                                                <div class=\"widget-posts-descr-price\"><span>Price: </span> $ {$value['price']}{$price_after}</div>
                                            </div>
                                        </li>";
                                            echo $listing;
                                        }

                                        ?>


                                    </ul>
                                </div>
                                <!-- widget-posts end-->
                                <a href="listing.html" class="btn float-btn color-bg small-btn">View All Properties</a>
                            </div>
                        </div>
                        <!--box-widget end -->
                        <!--box-widget-->
                        <?php $calculator = " <div class=\"box-widget fl-wrap hidden-section\" style=\"margin-top: 30px\">
                            <div class=\"box-widget-content fl-wrap color-bg\">
                                <div class=\"color-form reset-action\">
                                    <div class=\"color-form-title fl-wrap\">
                                        <h4>Calculate Your Mortgage</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. </p>
                                    </div>
                                    <form method=\"post\" name=\"mortgage-form\">
                                        <div class=\"fl-wrap\">
                                            <label for=\"amt\">Loan Amount </label>
                                            <input id=\"amt\" name=\"amt\" type=\"text\" placeholder=\"0\" value=\"0\">
                                            <div class=\"use-current-price tolt\" data-microtip-position=\"left\" data-tooltip=\"Use current price\"><i class=\"fal fa-tag\"></i></div>
                                        </div>
                                        <label for=\"apr\">Percentage rate</label>
                                        <div class=\"price-rage-item fl-wrap\">
                                            <input type=\"text\" id=\"apr\" name=\"apr\" class=\"price-range\" data-min=\"0\" data-max=\"100\" data-step=\"1\" value=\"0\" data-prefix=\"%\">
                                        </div>
                                        <label for=\"trm\">Loan Term (Years) </label>
                                        <div class=\"price-rage-item fl-wrap\">
                                            <input type=\"text\" id=\"trm\" name=\"trm\" class=\"price-range\" data-min=\"0\" data-max=\"5\" data-step=\"1\" value=\"0\" data-prefix=\"Y\">
                                        </div>
                                        <div class=\"clearfix\"></div>
                                        <button type=\"button\" id=\"sbt\" class=\"color2-bg\">Calculate</button>
                                        <div class=\"reset-form reset-btn\"> <i class=\"far fa-sync-alt\"></i> Reset Form</div>
                                        <div class=\"monterage-title fl-wrap\">
                                            <h5>Monthly payment:</h5>
                                            <input type=\"text\" id=\"pmt\" name=\"mPmt\" value=\"0\">
                                            <div class=\"monterage-title-item\">$<span></span></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>";
                        echo $calculator; ?>
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
    <?php include('inc/footer.php'); ?>