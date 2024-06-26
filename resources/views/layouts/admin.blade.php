<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <link rel="stylesheet" href={{url("assets/vendors/mdi/css/materialdesignicons.min.css")}}>
    <link rel="stylesheet" href={{url("assets/vendors/css/vendor.bundle.base.css")}}>
    <link rel="stylesheet" href={{url("assets/css/style.css")}}>
    <link rel="shortcut icon" href={{url("assets/images/favicon.ico")}} />
</head>

<body>

    <div class="container-scroller">

        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{route('home')}}"><img src={{url("assets/images/logo.svg")}}
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img
                        src={{url("assets/images/logo-mini.svg")}} alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <!-- <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control bg-transparent border-0"
                                placeholder="Search projects">
                        </div>
                    </form>
                </div> -->
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src={{url("assets/images/faces/face1.jpg")}} alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">{{ Auth::guard('admin')->user()->name }}</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="adminProfileDropdown">
                            <!-- <a class="dropdown-item" href="#">
                                <i class="mdi mdi-cached me-2 text-success"></i> Activity Log
                            </a> -->
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="mdi mdi-logout me-2 text-primary"></i> Signout
                                </button>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                        </a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-email-outline"></i>
                            <span class="count-symbol bg-warning"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="messageDropdown">
                            <h6 class="p-3 mb-0">Messages</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src={{url("assets/images/faces/face4.jpg")}} alt="image" class="profile-pic">
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message
                                    </h6>
                                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src={{url("assets/images/faces/face2.jpg")}} alt="image" class="profile-pic">
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a
                                        message</h6>
                                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src={{url("assets/images/faces/face3.jpg")}} alt="image" class="profile-pic">
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated
                                    </h6>
                                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                        </div>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-bs-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="count-symbol bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">Notifications</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-calendar"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-settings"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-link-variant"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                        </div>
                    </li>
                    <li class="nav-item nav-logout d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-power"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-format-line-spacing"></i>
                        </a>
                    </li> -->
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-image">
                                <img src={{url("assets/images/faces/face1.jpg")}} alt="profile">
                                <span class="login-status online"></span>
                                <!--change to offline or busy as needed-->
                            </div>
                            <div class="nav-profile-text d-flex flex-column">
                                <span class="font-weight-bold ">
                                    <p class="mb-1 text-black">{{ Auth::guard('admin')->user()->name }}</p>
                                </span>
                                <p class="mb-1 text-black">{{ Auth::guard('admin')->user()->email }}</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("admin.dashboard")}}">
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-one" aria-expanded="false"
                            aria-controls="ui-one">
                            <span class="menu-title">Products</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-one">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('products.index')}}">List
                                        Products</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('products.create')}}">Add
                                        Products</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-two" aria-expanded="false"
                            aria-controls="ui-two">
                            <span class="menu-title">Industries</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-two">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('industries.index')}}">List
                                        Industries</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('industries.create')}}">Add
                                        Industries</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-three" aria-expanded="false"
                            aria-controls="ui-three">
                            <span class="menu-title">Categories</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-three">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('categories.index')}}">List
                                        Categories</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('categories.create')}}">Add
                                        Categories</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-four" aria-expanded="false"
                            aria-controls="ui-four">
                            <span class="menu-title">Sub Categories</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-four">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('subcategories.index')}}">List
                                        Subcategories</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('subcategories.create')}}">Add
                                        Subcategories</a></li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item sidebar-actions">
                        <span class="nav-link">

                            <a href="{{route('products.create')}}"><button
                                    class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a Product</button> </a>
                            <div class="mt-4">
                            </div>
                        </span>
                    </li>
                </ul>
            </nav>
            <div class="main-panel ">
                <div class="content-wrapper">

                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-home"></i>
                            </span> Dashboard
                        </h3>

                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src={{url("assets/vendors/js/vendor.bundle.base.js")}}></script>
    <script src={{url("assets/vendors/chart.js/Chart.min.js")}}></script>
    <script src={{url("assets/js/jquery.cookie.js")}} type="text/javascript"></script>
    <script src={{url("assets/js/off-canvas.js")}}></script>
    <script src={{url("assets/js/hoverable-collapse.js")}}></script>
    <script src={{url("assets/js/misc.js")}}></script>
    <script src={{url("assets/js/dashboard.js")}}></script>
    <script src={{url("assets/js/todolist.js")}}></script>
</body>

</html>