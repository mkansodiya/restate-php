<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- basic   -->
    <meta charset="UTF-8">
    <title>Homeradar - Real Estate Listing Template</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- css   -->
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/color.css">
    <!--  favicons  -->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
    <!--loader-->
    <div class="loader-wrap">
        <div class="loader-inner">
            <svg>
                <defs>
                    <filter id="goo">
                        <fegaussianblur in="SourceGraphic" stdDeviation="2" result="blur" />
                        <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2" result="gooey" />
                        <fecomposite in="SourceGraphic" in2="gooey" operator="atop" />
                    </filter>
                </defs>
            </svg>
        </div>
    </div>
    <!--loader end-->
    <!-- main -->
    <div id="main">
        <!-- header -->
        <header class="main-header">
            <!--  logo  -->
            <div class="logo-holder"><a href="index.php"><img src="images/logo.png" alt=""></a></div>
            <!-- logo end  -->
            <!-- nav-button-wrap-->
            <div class="nav-button-wrap color-bg nvminit">
                <div class="nav-button">
                    <span></span><span></span><span></span>
                </div>
            </div>
            <!-- nav-button-wrap end-->
            <!-- header-search button  -->
            <div class="header-search-button">
                <i class="fal fa-search"></i>
                <span>Search...</span>
            </div>
            <!-- header-search button end  -->
            <!--  add new  btn -->
            <div class="add-list_wrap">
                <a href="dashboard-add-listing.php" class="add-list color-bg"><i class="fal fa-plus"></i> <span>Add Listing</span></a>
            </div>
            <!--  add new  btn end -->
            <!--  header-opt_btn -->
            <div class="header-opt_btn tolt" data-microtip-position="bottom" data-tooltip="Language / Currency">
                <span><i class="fal fa-globe"></i></span>
            </div>
            <!--  header-opt_btn end -->
            <!--  cart-btn   -->
            <div class="cart-btn  tolt show-header-modal" data-microtip-position="bottom" data-tooltip="Your Wishlist / Compare">
                <i class="fal fa-bell"></i>
                <span class="cart-btn_counter color-bg">5</span>
            </div>
            <!--  cart-btn end -->
            <!--  login btn -->
            <div class="show-reg-form modal-open"><i class="fas fa-user"></i><span>Sign In</span></div>
            <!--  login btn  end -->
            <!--  navigation -->
            <div class="nav-holder main-menu">
                <nav>
                    <ul class="no-list-style">
                        <li>
                            <a href="#" class="act-link">Home <i class="fa fa-caret-down"></i></a>
                            <!--second level -->
                            <ul>
                                <li><a href="index.php">Parallax Image</a></li>
                                <li><a href="index2.php">Slider</a></li>
                                <li><a href="index3.php">Video</a></li>
                                <li><a href="index4.php">Slideshow</a></li>
                            </ul>
                            <!--second level end-->
                        </li>
                        <li>
                            <a href="#">Listings <i class="fa fa-caret-down"></i></a>
                            <!--second level -->
                            <ul>
                                <li><a href="listing.php">Column map</a></li>
                                <li><a href="listing2.php">Column map 2</a></li>
                                <li><a href="listing3.php">Fullwidth Map</a></li>
                                <li><a href="listing4.php">Fullwidth Map 2</a></li>
                                <li><a href="listing5.php">Without Map</a></li>
                                <li><a href="listing6.php">Without Map 2</a></li>
                                <li>
                                    <a href="#">Single <i class="fa fa-caret-down"></i></a>
                                    <!--third  level  -->
                                    <ul>
                                        <li><a href="listing-single.php">Style 1</a></li>
                                        <li><a href="listing-single2.php">Style 2</a></li>
                                        <li><a href="listing-single3.php">Style 3</a></li>
                                    </ul>
                                    <!--third  level end-->
                                </li>
                            </ul>
                            <!--second level end-->
                        </li>
                        <li>
                            <a href="#">Agents<i class="fa fa-caret-down"></i></a>
                            <!--second level -->
                            <ul>
                                <li><a href="agent-list.php">Agent List</a></li>
                                <li><a href="agency-list.php">Agency List</a></li>
                                <li><a href="agent-single.php">Agent Single</a></li>
                                <li><a href="agency-single.php">Agency Single</a></li>
                            </ul>
                            <!--second level end-->
                        </li>
                        <li>
                            <a href="blog.php">News</a>
                        </li>
                        <li>
                            <a href="#">Pages <i class="fa fa-caret-down"></i></a>
                            <!--second level -->
                            <ul>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contacts.php">Contacts</a></li>
                                <li><a href="help.php">Help FAQ</a></li>
                                <li><a href="pricing.php">Pricing </a></li>
                                <li><a href="dashboard.php">User Dashboard</a></li>
                                <li><a href="blog-single.php">Blog Single</a></li>
                                <li><a href="compare.php">Compare</a></li>
                                <li><a href="coming-soon.php">Coming Soon</a></li>
                                <li><a href="404.php">404</a></li>
                            </ul>
                            <!--second level end-->
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- navigation  end -->
            <!-- header-search-wrapper -->
            <div class="header-search-wrapper novis_search">
                <div class="header-serach-menu">
                    <div class="custom-switcher fl-wrap">
                        <div class="fieldset fl-wrap">
                            <input type="radio" name="duration-1" id="buy_sw" class="tariff-toggle" checked>
                            <label for="buy_sw">Buy</label>
                            <input type="radio" name="duration-1" class="tariff-toggle" id="rent_sw">
                            <label for="rent_sw" class="lss_lb">Rent</label>
                            <span class="switch color-bg"></span>
                        </div>
                    </div>
                </div>
                <div class="custom-form">
                    <form method="post" name="registerform">
                        <label>Keywords </label>
                        <input type="text" placeholder="Address , Street , State..." value="" />
                        <label>Categories</label>
                        <select data-placeholder="Categories" class="chosen-select on-radius no-search-select">
                            <option>All Categories</option>
                            <option>House</option>
                            <option>Apartment</option>
                            <option>Hotel</option>
                            <option>Villa</option>
                            <option>Office</option>
                        </select>
                        <label style="margin-top:10px;">Price Range</label>
                        <div class="price-rage-item fl-wrap">
                            <input type="text" class="price-range" data-min="100" data-max="100000" name="price-range1" data-step="1" value="1" data-prefix="$">
                        </div>
                        <button onclick="location.href='listing.php'" type="button" class="btn float-btn color-bg"><i class="fal fa-search"></i> Search</button>
                    </form>
                </div>
            </div>
            <!-- header-search-wrapper end  -->
            <!-- wishlist-wrap-->
            <div class="header-modal novis_wishlist tabs-act">
                <ul class="tabs-menu fl-wrap no-list-style">
                    <li class="current"><a href="#tab-wish"> Wishlist <span>- 3</span></a></li>
                    <li><a href="#tab-compare"> Compare <span>- 2</span></a></li>
                </ul>
                <!--tabs -->
                <div class="tabs-container">
                    <div class="tab">
                        <!--tab -->
                        <div id="tab-wish" class="tab-content first-tab">
                            <!-- header-modal-container-->
                            <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar>
                                <!--widget-posts-->
                                <div class="widget-posts  fl-wrap">
                                    <ul class="no-list-style">
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.php"><img src="images/all/small/1.jpg" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.php">Affordable Urban Room</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square , NJ, USA</a></div>
                                                <div class="widget-posts-descr-price"><span>Price: </span> $ 1500 / per month</div>
                                                <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.php"><img src="images/all/small/1.jpg" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.php">Family House</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 34-42 Montgomery St , NY, USA</a></div>
                                                <div class="widget-posts-descr-price"><span>Price: </span> $ 50.000</div>
                                                <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.php"><img src="images/all/small/1.jpg" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.php">Apartment to Rent</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                                                <div class="widget-posts-descr-price"><span>Price: </span> $100 / per night</div>
                                                <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- widget-posts end-->
                            </div>
                            <!-- header-modal-container end-->
                            <div class="header-modal-top fl-wrap">
                                <div class="clear_wishlist color-bg"><i class="fal fa-trash-alt"></i> Clear all</div>
                            </div>
                        </div>
                        <!--tab end -->
                        <!--tab -->
                        <div class="tab">
                            <div id="tab-compare" class="tab-content">
                                <!-- header-modal-container-->
                                <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar>
                                    <!--widget-posts-->
                                    <div class="widget-posts  fl-wrap">
                                        <ul class="no-list-style">
                                            <li>
                                                <div class="widget-posts-img"><a href="listing-single.php"><img src="images/all/small/1.jpg" alt=""></a>
                                                </div>
                                                <div class="widget-posts-descr">
                                                    <h4><a href="listing-single.php">Gorgeous house for sale</a></h4>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a></div>
                                                    <div class="widget-posts-descr-price"><span>Price: </span> $ 52.100</div>
                                                    <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget-posts-img"><a href="listing-single.php"><img src="images/all/small/1.jpg" alt=""></a>
                                                </div>
                                                <div class="widget-posts-descr">
                                                    <h4><a href="listing-single.php">Family Apartments</a></h4>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York, USA </a></div>
                                                    <div class="widget-posts-descr-price"><span>Price: </span> $ 72.400</div>
                                                    <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- widget-posts end-->
                                </div>
                                <!-- header-modal-container end-->
                                <div class="header-modal-top fl-wrap">
                                    <a class="clear_wishlist color-bg" href="compare.php"><i class="fal fa-random"></i> Compare</a>
                                </div>
                            </div>
                        </div>
                        <!--tab end -->
                    </div>
                    <!--tabs end -->
                </div>
            </div>
            <!--wishlist-wrap end -->
            <!--header-opt-modal-->
            <div class="header-opt-modal novis_header-mod">
                <div class="header-opt-modal-container hopmc_init">
                    <div class="header-opt-modal-item lang-item fl-wrap">
                        <h4>Language: <span>EN</span></h4>
                        <div class="header-opt-modal-list fl-wrap">
                            <ul>
                                <li><a href="#" class="current-lan" data-lantext="EN">English</a></li>
                                <li><a href="#" data-lantext="FR">Franais</a></li>
                                <li><a href="#" data-lantext="ES">Espaol</a></li>
                                <li><a href="#" data-lantext="DE">Deutsch</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-opt-modal-item currency-item fl-wrap">
                        <h4>Currency: <span>USD</span></h4>
                        <div class="header-opt-modal-list fl-wrap">
                            <ul>
                                <li><a href="#" class="current-lan" data-lantext="USD">USD</a></li>
                                <li><a href="#" data-lantext="EUR">EUR</a></li>
                                <li><a href="#" data-lantext="GBP">GBP</a></li>
                                <li><a href="#" data-lantext="RUR">RUR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--header-opt-modal end -->
        </header>