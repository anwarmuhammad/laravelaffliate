<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="admin/assets/img/user-13.jpg" alt="" /></a>
                </div>
                <div class="info">
                   {{ Auth::user()->name }}
                    <small>Front end developer</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="active">
                <a href="javascript:;">
                    <i class="ion-ios-pulse-strong"></i>
                    <span>Dashboard</span>
                </a>

            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="ion-ios-compose-outline bg-gradient-blue"></i>
                    <span>Post</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{url('/show_post')}}">All Post</a></li>
                    <li><a href="{{ url('/create_post') }}">Add New Post</a></li>
                    <li><a href="{{ url('/categories') }}">Add New Category</a></li>
                    <li><a href="{{ url('/tags') }}">Add New tags</a></li>
                   <!--  <li><a href="email_system.html">Update Post</a></li> -->
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="ion-ios-albums-outline"></i>
                    <span>Media</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="gallery.html">Images</a></li>
                    <li><a href="gallery_v2.html">Documents</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="ion-ios-infinite-outline bg-gradient-aqua"></i>
                    <span>Front End</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ url('./') }}"  arget="_blank">Home</a></li>
                    <li><a href="{{ url('/products') }}"  arget="_blank">Products</a></li>
                    <li><a href="{{ url('/blog') }}" target="_blank">Blog</a></li>
                    <li><a href="{{ url('/about') }}" target="_blank">ABOUT US</a></li>
                    <li><a href="{{ url('/contact') }}" target="_blank">CONTACT US</a></li>
                </ul>
            </li>

            <li><a href="calendar.html"><i class="ion-ios-calendar-outline bg-pink"></i> <span>Calendar</span></a></li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="ion-ios-location bg-pink"></i>
                    <span>Map</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="map_vector.html">Vector Map</a></li>
                    <li><a href="map_google.html">Google Map</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="ion-ios-heart-outline"></i>
                    <span>Extra</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="extra_timeline.html">Timeline</a></li>
                    <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
                    <li><a href="extra_search_results.html">Search Results</a></li>
                    <li><a href="extra_invoice.html">Invoice</a></li>
                    <li><a href="extra_404_error.html">404 Error Page</a></li>
                    <li><a href="extra_profile.html">Profile Page</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="ion-ios-locked-outline"></i>
                    <span>Login & Register</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="login_v2.html">Login v2</a></li>
                    <li><a href="login_v3.html">Login v3</a></li>
                    <li><a href="register_v3.html">Register v3</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="ion-ios-flower-outline"></i>
                    <span>Version <span class="label label-theme m-l-5">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="http://seantheme.com/color-admin-v3.0/admin/html/index.html">HTML</a></li>
                    <li><a href="http://seantheme.com/color-admin-v3.0/admin/ajax/index.html">AJAX</a></li>
                    <li><a href="http://seantheme.com/color-admin-v3.0/admin/angularjs/index.html">ANGULAR JS</a></li>
                    <li><a href="javascript:alert('Angular JS 4 Preview is not available.')">ANGULAR JS 4 <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                    <li><a href="http://seantheme.com/color-admin-v3.0/admin/material/index.html">MATERIAL DESIGN</a></li>
                    <li><a href="javascript:;">APPLE DESIGN <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="ion-ios-medkit-outline"></i>
                    <span>Helper</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="helper_css.html">Predefined CSS Classes</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="ion-ios-list"></i>
                    <span>Menu Level</span>
                </a>
                <ul class="sub-menu">
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            Menu 1.1
                        </a>
                        <ul class="sub-menu">
                            <li class="has-sub">
                                <a href="javascript:;">
                                    <b class="caret pull-right"></b>
                                    Menu 2.1
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="javascript:;">Menu 3.1</a></li>
                                    <li><a href="javascript:;">Menu 3.2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Menu 2.2</a></li>
                            <li><a href="javascript:;">Menu 2.3</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">Menu 1.2</a></li>
                    <li><a href="javascript:;">Menu 1.3</a></li>
                </ul>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ion-ios-arrow-left"></i> <span>Collapse</span></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>