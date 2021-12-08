<?php include('inc/header.php');
$action = new query();
?>
<!-- header end  -->
<!-- wrapper  -->
<div id="wrapper">
    <!-- dashbard-menu-wrap -->
    <div class="dashbard-menu-overlay"></div>
    <div class="dashbard-menu-wrap">
        <div class="dashbard-menu-close"><i class="fal fa-times"></i></div>
        <div class="dashbard-menu-container">
            <!-- user-profile-menu-->
            <div class="user-profile-menu">
                <h3>Main</h3>
                <ul class="no-list-style">
                    <li><a href="dashboard.html"><i class="fal fa-chart-line"></i>Dashboard</a></li>
                    <li><a href="dashboard-myprofile.html"><i class="fal fa-user-edit"></i> Edit profile</a></li>
                    <li><a href="dashboard-messages.html"><i class="fal fa-envelope"></i> Messages <span>3</span></a></li>
                    <li><a href="dashboard-agents.html"><i class="fal fa-users"></i> Agents List</a></li>
                    <li>
                        <a href="#" class="submenu-link"><i class="fal fa-plus"></i>Submenu</a>
                        <ul class="no-list-style">
                            <li><a href="#"><i class="fal fa-th-list"></i> Submenu 2 </a></li>
                            <li><a href="#"> <i class="fal fa-calendar-check"></i> Submenu 2</a></li>
                            <li><a href="#"><i class="fal fa-comments-alt"></i>Submenu 2</a></li>
                            <li><a href="#"><i class="fal fa-file-plus"></i> Submenu 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- user-profile-menu end-->
            <!-- user-profile-menu-->
            <div class="user-profile-menu">
                <h3>Listings</h3>
                <ul class="no-list-style">
                    <li><a href="dashboard-listing-table.html"><i class="fal fa-th-list"></i> My listigs </a></li>
                    <li><a href="dashboard-bookings.html"> <i class="fal fa-calendar-check"></i> Bookings <span>3</span></a></li>
                    <li><a href="dashboard-review.html"><i class="fal fa-comments-alt"></i> Reviews <span>2</span> </a></li>
                    <li><a href="dashboard-add-listing.html" class="user-profile-act"><i class="fal fa-file-plus"></i> Add New</a></li>
                </ul>
            </div>
            <!-- user-profile-menu end-->
        </div>
        <div class="dashbard-menu-footer">© Homeradar 2022 . All rights reserved.</div>
    </div>
    <!-- dashbard-menu-wrap end  -->
    <!-- content -->
    <div class="dashboard-content">
        <div class="dashboard-menu-btn color-bg"><span><i class="fas fa-bars"></i></span>Dasboard Menu</div>
        <div class="container dasboard-container">
            <!-- dashboard-title -->
            <div class="dashboard-title fl-wrap">
                <div class="dashboard-title-item"><span>Add Listing</span></div>
                <div class="dashbard-menu-header">
                    <div class="dashbard-menu-avatar fl-wrap">
                        <img src="images/avatar/1.jpg" alt="">
                        <h4>Welcome, <span>Alica Noory</span></h4>
                    </div>
                    <a href="index.html" class="log-out-btn   tolt" data-microtip-position="bottom" data-tooltip="Log Out"><i class="far fa-power-off"></i></a>
                </div>
                <!--Tariff Plan menu-->
                <div class="tfp-det-container">
                    <div class="tfp-btn"><span>Your Tariff Plan : </span> <strong>Extended</strong></div>
                    <div class="tfp-det">
                        <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade. </p>
                        <a href="#" class="tfp-det-btn color-bg">Details</a>
                    </div>
                </div>
                <!--Tariff Plan menu end-->
            </div>
            <!-- dashboard-title end -->
            <div class="dasboard-wrapper fl-wrap no-pag">
                <div class="dasboard-scrollnav-wrap scroll-to-fixed-fixed scroll-init2 fl-wrap">
                    <ul>
                        <li><a href="#sec1" class="act-scrlink">Info</a></li>
                        <li><a href="#sec2">Location</a></li>
                        <li><a href="#sec3">Media</a></li>
                        <li><a href="#sec4">Details</a></li>
                        <li><a href="#sec5">Rooms</a></li>
                        <li><a href="#sec6">Plans</a></li>
                        <li><a href="#sec7">Widgets</a></li>
                    </ul>
                    <div class="progress-indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
                            <circle cx="16" cy="16" r="15.9155" class="progress-bar__background" />
                            <circle cx="16" cy="16" r="15.9155" class="progress-bar__progress 
                                            js-progress-bar" />
                        </svg>
                    </div>
                </div>
                <!-- dasboard-widget-title -->
                <div class="dasboard-widget-title fl-wrap" id="sec1">
                    <h5><i class="fas fa-info"></i>Basic Informations</h5>
                </div>
                <!-- dasboard-widget-title end -->
                <!-- dasboard-widget-box  -->
                <form enctype="multipart/form-data" action="ajax.php" id="listing_form" method="POST">
                    <div class="dasboard-widget-box fl-wrap">
                        <div class="custom-form">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Listing Title <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                                    <input type="text" placeholder="Name of your Listing" name="title" value="" />
                                </div>
                                <div class="col-sm-4">
                                    <label>Type</label>
                                    <div class="listsearch-input-item">
                                        <select data-placeholder="All Types" name="type" class="chosen-select no-search-select">
                                            <option>All Types</option>
                                            <option>Rent</option>
                                            <option>Sale</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label>Listing Price <span class="dec-icon"><i class="far fa-money-bill-wave"></i></span></label>
                                    <input type="text" placeholder="Listing Price" name="price" value="" />
                                </div>
                                <div class="col-sm-4">
                                    <label>Category</label>
                                    <div class="listsearch-input-item">
                                        <select data-placeholder="Apartments" name="category" class="chosen-select no-search-select">
                                            <option>All Categories</option>
                                            <option>House</option>
                                            <option>Apartment</option>
                                            <option>Hotel</option>
                                            <option>Villa</option>
                                            <option>Office</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <label>Keywords <span class="dec-icon"><i class="far fa-key"></i></span></label>
                                    <input type="text" placeholder="Maximum 15 , should be separated by commas" name="keywords" value="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- dasboard-widget-box  end-->
                    <!-- dasboard-widget-title -->
                    <div class="dasboard-widget-title dwb-mar fl-wrap" id="sec3">
                        <h5><i class="fas fa-image"></i>Header Media</h5>
                    </div>
                    <!-- dasboard-widget-title end -->
                    <!-- dasboard-widget-box  -->
                    <div class="dasboard-widget-box   fl-wrap">
                        <div class="custom-form">
                            <div class="add-list-media-header">
                                <label class="radio inline">
                                    <input type="radio" name="header_type" checked>
                                    <span>Carousel</span>
                                </label>
                            </div>
                            <div class="add-list-media-header">
                                <label class="radio inline">
                                    <input type="radio" name="header_type">
                                    <span>Slider</span>
                                </label>
                            </div>
                            <div class="add-list-media-header">
                                <label class="radio inline">
                                    <input type="radio" name="header_type">
                                    <span> Background image</span>
                                </label>
                            </div>
                            <div class="clearfix"></div>
                            <div class="listsearch-input-item fl-wrap">
                                <div class="fuzone">
                                    <div class="fu-text">
                                        <span><i class="far fa-cloud-upload-alt"></i> Click here or drop files to upload</span>
                                        <div class="photoUpload-files fl-wrap"></div>
                                    </div>
                                    <input type="file" name="header_media" class="upload" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dasboard-widget-title dwb-mar fl-wrap" id="sec5">
                        <h5><i class="fas fa-home-lg-alt"></i>Rooms</h5>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch5" checked />
                            <label class="onoffswitch-label" for="myonoffswitch5">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <div class="dasboard-widget-box fl-wrap">
                        <div class="custom-form add_room-item-wrap">
                            <div class="add_room-container fl-wrap">
                                <!-- add_room-item   -->
                                <div class="add_room-item fl-wrap">
                                    <span class="remove-rp tolt" data-microtip-position="left" data-tooltip="Remove Room"><i class="fal fa-times-circle"></i></span>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Room Title:
                                                <span class="dec-icon"><i class="fal fa-layer-group"></i></span></label>
                                            <input type="text" name="room_title[]" placeholder="Standard Family Room" value="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Additional Room:
                                                <span class="dec-icon"><i class="fal fa-layer-plus"></i></span></label>
                                            <input type="text" name="additional_room[]" placeholder="Example: Sauna" value="" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Room Details</label>
                                            <div class="listsearch-input-item">
                                                <textarea cols="40" name="room_desc[]" rows="3" style="height: 175px; margin-bottom: 10px" placeholder="Datails" spellcheck="false"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Room Images</label>
                                            <div class="listsearch-input-item fl-wrap">
                                                <div class="fuzone">
                                                    <div class="fu-text">
                                                        <span><i class="far fa-cloud-upload-alt"></i> Click here or drop
                                                            files to upload</span>
                                                        <div class="photoUpload-files fl-wrap"></div>
                                                    </div>
                                                    <input type="file" name="room_images[]" class="upload" multiple />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <label>Amenities: </label>
                                    <div class="add-list-tags fl-wrap">
                                        <!-- Checkboxes -->
                                        <ul class="fl-wrap filter-tags no-list-style ds-tg">
                                            <?php foreach ($action->fetchData("facilities") as $key => $value) {
                                            ?>
                                                <li>
                                                    <input type="checkbox" value="<?php echo $value['id']; ?>" name="room_facilities[]" />
                                                    <label for="<?php echo $value['name']; ?>">
                                                        <?php echo $value['name']; ?></label>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                        <!-- Checkboxes end -->
                                    </div>
                                </div>
                                <!--add_room-item end  -->
                            </div>
                            <a href="#" class="add-room-item">Add Room <i class="fal fa-plus"></i> </a>
                        </div>
                    </div>
                    <a onclick="addListing();" class="btn  color-bg float-btn">Save Changes </a>
            </div>
            </form>
        </div>

        <div class="limit-box fl-wrap"></div>
        <!-- dashboard-footer -->
        <div class="dashboard-footer">
            <div class="dashboard-footer-links fl-wrap">
                <span>Helpfull Links:</span>
                <ul>
                    <li><a href="about.html">About </a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="pricing.html">Pricing Plans</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="help.html">Help Center</a></li>
                </ul>
            </div>
            <a href="#main" class="dashbord-totop  custom-scroll-link"><i class="fas fa-caret-up"></i></a>
        </div>
        <!-- dashboard-footer end -->
    </div>
    <!-- content end -->
    <div class="dashbard-bg gray-bg"></div>
</div>
<!-- wrapper end -->
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script src="js/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/scripts.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOU_API_KEY_HERE&libraries=places"></script>
<script src="js/map-add.js"></script>
<script src="js/dashboard.js"></script>
<script>
    function addListing() {
        var formData = $("#listing_form").submit(function(e) {
            e.preventDefault();
            return;
        });

        var formData = new FormData(formData[0]);

        $.ajax({
            url: $("#listing_form").attr("action"),
            type: "POST",

            data: formData,
            success: function(response) {
                console.log(response);

            },
            contentType: false,
            processData: false,
            cache: false,
        });
        return false;
    }
</script>
</body>

</html>