@extends('admin.tamplate.bsse')
@section('content')

<div class="row">
                                <!-- [ fixed-layout ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Fixed Layout1</h5>
                                            <div class="card-header-right">
                                                <div class="btn-group card-option">
                                                    <button type="button" class="btn dropdown-toggle btn-icon"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="feather icon-more-horizontal"></i>
                                                    </button>
                                                    <ul
                                                        class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                                        <li class="dropdown-item full-card"><a href="#!"><span><i
                                                                        class="feather icon-maximize"></i>
                                                                    maximize</span><span style="display:none"><i
                                                                        class="feather icon-minimize"></i>
                                                                    Restore</span></a></li>
                                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                                        class="feather icon-minus"></i>
                                                                    collapse</span><span style="display:none"><i
                                                                        class="feather icon-plus"></i> expand</span></a>
                                                        </li>
                                                        <li class="dropdown-item reload-card"><a href="#!"><i
                                                                    class="feather icon-refresh-cw"></i> reload</a></li>
                                                        <li class="dropdown-item close-card"><a href="#!"><i
                                                                    class="feather icon-trash"></i> remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p>Fixed layout is useful for those users who wants Header, menu in fixed
                                                position of page.</p>
                                            <h6>To use Fixed layout for your project add
                                                <code><strong>.menupos-fixed</strong></code> class in
                                                <code><strong>&lt;nav&gt;</strong></code> tag.
                                            </h6>
                                            <pre>
                                                <code class="language-markup">
                                                    &lt;!-- [ Navbar ] start --&gt;
                                                    &lt;nav class="pcoded-navbar menupos-fixed"&gt;
                                                    &lt;/nav&gt;
                                                    &lt;!-- [ Navbar ] end --&gt;
                                                </code>
                                            </pre>
                                            <h6>To use Fixed layout for your project add
                                                <code><strong>.headerpos-fixed</strong></code> and <code></code> class
                                                in <code><strong>&lt;header&gt;</strong></code> tag.
                                            </h6>
                                            <pre>
                                                <code class="language-markup">
                                                    &lt;!-- [ Header ] start --&gt;
                                                    &lt;header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed"&gt;
                                                    &lt;/header&gt;
                                                    &lt;!-- [ Header ] end --&gt;
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Page Layout</h5>
                                            <div class="card-header-right">
                                                <div class="btn-group card-option">
                                                    <button type="button" class="btn dropdown-toggle btn-icon"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="feather icon-more-horizontal"></i>
                                                    </button>
                                                    <ul
                                                        class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                                        <li class="dropdown-item full-card"><a href="#!"><span><i
                                                                        class="feather icon-maximize"></i>
                                                                    maximize</span><span style="display:none"><i
                                                                        class="feather icon-minimize"></i>
                                                                    Restore</span></a></li>
                                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                                        class="feather icon-minus"></i>
                                                                    collapse</span><span style="display:none"><i
                                                                        class="feather icon-plus"></i> expand</span></a>
                                                        </li>
                                                        <li class="dropdown-item reload-card"><a href="#!"><i
                                                                    class="feather icon-refresh-cw"></i> reload</a></li>
                                                        <li class="dropdown-item close-card"><a href="#!"><i
                                                                    class="feather icon-trash"></i> remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <pre class="vh-100">
                                                <code class="language-markup">
                                                    &lt;!DOCTYPE html&gt;
                                                    &lt;html lang="en"&gt;

                                                    &lt;head&gt;
                                                        &lt;title&gt;&lt;/title&gt;
                                                        &lt;!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries --&gt;
                                                        &lt;!-- WARNING: Respond.js doesn't work if you view the page via file:// --&gt;
                                                        &lt;!--[if lt IE 10]&gt;
                                                    		&lt;script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"&gt;&lt;/script&gt;
                                                    		&lt;script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"&gt;&lt;/script&gt;
                                                    		&lt;![endif]--&gt;
                                                        &lt;!-- Meta --&gt;
                                                        &lt;meta charset="utf-8"&gt;
                                                        &lt;meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"&gt;
                                                        &lt;meta http-equiv="X-UA-Compatible" content="IE=edge" /&gt;
                                                        &lt;meta name="description" content="" /&gt;
                                                        &lt;meta name="keywords" content=""&gt;
                                                        &lt;meta name="author" content="" /&gt;

                                                        &lt;!-- Favicon icon --&gt;
                                                        &lt;link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"&gt;
                                                        &lt;!-- fontawesome icon --&gt;
                                                        &lt;link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css"&gt;
                                                        &lt;!-- animation css --&gt;
                                                        &lt;link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css"&gt;
                                                        &lt;!-- vendor css --&gt;
                                                        &lt;link rel="stylesheet" href="assets/css/style.css"&gt;

                                                    &lt;/head&gt;

                                                    &lt;body&gt;
                                                        &lt;!-- [ Pre-loader ] start --&gt;
                                                        &lt;div class="loader-bg"&gt;
                                                            &lt;div class="loader-track"&gt;
                                                                &lt;div class="loader-fill"&gt;&lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;!-- [ Pre-loader ] End --&gt;

                                                        &lt;!-- [ navigation menu ] start --&gt;
                                                        &lt;nav class="pcoded-navbar menupos-fixed"&gt;
                                                            &lt;div class="navbar-wrapper"&gt;
                                                                &lt;div class="navbar-brand header-logo"&gt;
                                                                &lt;a href="index.html" class="b-brand"&gt;
                                                                    &lt;!-- &lt;div class="b-bg"&gt;
                                                                        &lt;i class="fas fa-bolt"&gt;&lt;/i&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;span class="b-title"&gt;Dasho&lt;/span&gt; --&gt;
                                                                    &lt;img src="assets/images/logo.svg" alt="" class="logo images"&gt;
                                                                    &lt;img src="assets/images/logo-icon.svg" alt="" class="logo-thumb images"&gt;
                                                                &lt;/a&gt;
                                                                    &lt;a class="mobile-menu" id="mobile-collapse" href="#!"&gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class="navbar-content scroll-div"&gt;
                                                                    &lt;ul class="nav pcoded-inner-navbar"&gt;
                                                                        &lt;li class="nav-item pcoded-menu-caption"&gt;
                                                                            &lt;label&gt;Navigation&lt;/label&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item pcoded-hasmenu"&gt;
                                                                            &lt;a href="#!" class="nav-link"&gt;&lt;span class="pcoded-micon"&gt;&lt;i class="feather icon-home"&gt;&lt;/i&gt;&lt;/span&gt;&lt;span class="pcoded-mtext"&gt;Dashboard&lt;/span&gt;&lt;/a&gt;
                                                                            &lt;ul class="pcoded-submenu"&gt;
                                                                                &lt;li class=""&gt;&lt;a href="index.html" class=""&gt;Default&lt;/a&gt;&lt;/li&gt;
                                                                                &lt;li class=""&gt;&lt;a href="dashboard-ecommerce.html" class=""&gt;Ecommerce&lt;/a&gt;&lt;/li&gt;
                                                                                &lt;li class=""&gt;&lt;a href="dashboard-crm.html" class=""&gt;CRM&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;/ul&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-username="Vertical Horizontal Box Layout RTL fixed static collapse menu color icon dark" class="nav-item pcoded-hasmenu  active pcoded-trigger"&gt;
                                                                            &lt;a href="#!" class="nav-link"&gt;&lt;span class="pcoded-micon"&gt;&lt;i class="feather icon-layout"&gt;&lt;/i&gt;&lt;/span&gt;&lt;span class="pcoded-mtext"&gt;Page layouts&lt;/span&gt;&lt;/a&gt;
                                                                            &lt;ul class="pcoded-submenu"&gt;
                                                                                &lt;li class="pcoded-hasmenu active pcoded-trigger"&gt;&lt;a href="#!" class=""&gt;Vertical&lt;/a&gt;
                                                                                    &lt;ul class="pcoded-submenu"&gt;
                                                                                        &lt;li class=""&gt;&lt;a href="layout-static.html" class="" target="_blank"&gt;Static&lt;/a&gt;&lt;/li&gt;
                                                                                        &lt;li class="active"&gt;&lt;a href="layout-fixed.html" class="" target="_blank"&gt;Fixed&lt;/a&gt;&lt;/li&gt;
                                                                                        &lt;li class=""&gt;&lt;a href="layout-menu-fixed.html" class="" target="_blank"&gt;Navbar fixed&lt;/a&gt;&lt;/li&gt;
                                                                                        &lt;li class=""&gt;&lt;a href="layout-mini-menu.html" class="" target="_blank"&gt;Collapse menu&lt;/a&gt;&lt;/li&gt;
                                                                                    &lt;/ul&gt;
                                                                                &lt;/li&gt;
                                                                                &lt;li class=""&gt;&lt;a href="layout-horizontal.html" class="" target="_blank"&gt;Horizontal&lt;/a&gt;&lt;/li&gt;
                                                                                &lt;li class=""&gt;&lt;a href="layout-box.html" class="" target="_blank"&gt;Box layout&lt;/a&gt;&lt;/li&gt;
                                                                                &lt;li class=""&gt;&lt;a href="layout-rtl.html" class="" target="_blank"&gt;RTL&lt;/a&gt;&lt;/li&gt;
                                                                                &lt;li class=""&gt;&lt;a href="layout-light.html" class="" target="_blank"&gt;Light layout&lt;/a&gt;&lt;/li&gt;
                                                                                &lt;li class=""&gt;&lt;a href="layout-dark.html" class="" target="_blank"&gt;Dark layout &lt;span class="pcoded-badge label label-danger"&gt;Hot&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                                &lt;li class=""&gt;&lt;a href="layout-menu-icon.html" class="" target="_blank"&gt;Color icon&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;/ul&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-username="Menu levels Menu level 2.1 Menu level 2.2" class="nav-item pcoded-hasmenu"&gt;
                                                                            &lt;a href="#!" class="nav-link"&gt;&lt;span class="pcoded-micon"&gt;&lt;i class="feather icon-menu"&gt;&lt;/i&gt;&lt;/span&gt;&lt;span class="pcoded-mtext"&gt;Menu levels&lt;/span&gt;&lt;/a&gt;
                                                                            &lt;ul class="pcoded-submenu"&gt;
                                                                                &lt;li class=""&gt;&lt;a href="" class=""&gt;Menu Level 2.1&lt;/a&gt;&lt;/li&gt;
                                                                                &lt;li class="pcoded-hasmenu"&gt;
                                                                                    &lt;a href="#!" class=""&gt;Menu level 2.2&lt;/a&gt;
                                                                                    &lt;ul class="pcoded-submenu"&gt;
                                                                                        &lt;li class=""&gt;&lt;a href="" class=""&gt;Menu level 3.1&lt;/a&gt;&lt;/li&gt;
                                                                                        &lt;li class=""&gt;&lt;a href="" class=""&gt;Menu level 3.2&lt;/a&gt;&lt;/li&gt;
                                                                                    &lt;/ul&gt;
                                                                                &lt;/li&gt;
                                                                            &lt;/ul&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-username="Disabled Menu" class="nav-item disabled"&gt;&lt;a href="#!" class="nav-link"&gt;&lt;span class="pcoded-micon"&gt;&lt;i class="feather icon-power"&gt;&lt;/i&gt;&lt;/span&gt;&lt;span class="pcoded-mtext"&gt;Disabled menu&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li data-username="Sample Page" class="nav-item"&gt;&lt;a href="sample-page.html" class="nav-link"&gt;&lt;span class="pcoded-micon"&gt;&lt;i class="feather icon-sidebar"&gt;&lt;/i&gt;&lt;/span&gt;&lt;span class="pcoded-mtext"&gt;Sample page&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class="nav-item pcoded-menu-caption"&gt;
                                                                            &lt;label&gt;Support&lt;/label&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-username="Documentation" class="nav-item"&gt;&lt;a href="../doc/index.html" class="nav-link" target="_blank"&gt;&lt;span class="pcoded-micon"&gt;&lt;i class="feather icon-book"&gt;&lt;/i&gt;&lt;/span&gt;&lt;span class="pcoded-mtext"&gt;Documentation&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li data-username="Need Support" class="nav-item"&gt;&lt;a href="#" class="nav-link" target="_blank"&gt;&lt;span class="pcoded-micon"&gt;&lt;i class="feather icon-help-circle"&gt;&lt;/i&gt;&lt;/span&gt;&lt;span class="pcoded-mtext"&gt;Need
                                                                                    support ?&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/nav&gt;
                                                        &lt;!-- [ navigation menu ] end --&gt;

                                                        &lt;!-- [ Header ] start --&gt;
                                                        &lt;header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed"&gt;
                                                            &lt;div class="m-header"&gt;
                                                                &lt;a class="mobile-menu" id="mobile-collapse1" href="#!"&gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
                                                                &lt;a href="index.html" class="b-brand"&gt;
                                                                    &lt;!-- &lt;div class="b-bg"&gt;
                                                                        &lt;i class="fas fa-bolt"&gt;&lt;/i&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;span class="b-title"&gt;Dasho&lt;/span&gt; --&gt;
                                                                    &lt;img src="assets/images/logo.svg" alt="" class="logo images"&gt;
                                                                    &lt;img src="assets/images/logo-icon.svg" alt="" class="logo-thumb images"&gt;
                                                                &lt;/a&gt;
                                                            &lt;/div&gt;
                                                            &lt;a class="mobile-menu" id="mobile-header" href="#!"&gt;
                                                                &lt;i class="feather icon-more-horizontal"&gt;&lt;/i&gt;
                                                            &lt;/a&gt;
                                                            &lt;div class="collapse navbar-collapse"&gt;
                                                            &lt;a href="#!" class="mob-toggler"&gt;&lt;/a&gt;
                                                                &lt;ul class="navbar-nav me-auto"&gt;
                                                                &lt;li class="nav-item"&gt;
                                                                    &lt;div class="main-search open"&gt;
                                                                        &lt;div class="input-group"&gt;
                                                                            &lt;input type="text" id="m-search" class="form-control" placeholder="Search . . ."&gt;
                                                                            &lt;a href="#!" class="input-group-append search-close"&gt;
                                                                                &lt;i class="feather icon-x input-group-text"&gt;&lt;/i&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;span class="input-group-append search-btn btn btn-primary"&gt;
                                                                                &lt;i class="feather icon-search input-group-text"&gt;&lt;/i&gt;
                                                                            &lt;/span&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                                &lt;ul class="navbar-nav ms-auto"&gt;
                                                                    &lt;li&gt;
                                                                        &lt;div class="dropdown"&gt;
                                                                            &lt;a class="dropdown-toggle" href="#" data-bs-toggle="dropdown"&gt;&lt;i class="icon feather icon-bell"&gt;&lt;/i&gt;&lt;/a&gt;
                                                                            &lt;div class="dropdown-menu dropdown-menu-end notification"&gt;
                                                                                &lt;div class="noti-head"&gt;
                                                                                    &lt;h6 class="d-inline-block m-b-0"&gt;Notifications&lt;/h6&gt;
                                                                                    &lt;div class="float-end"&gt;
                                                                                        &lt;a href="#!" class="m-r-10"&gt;mark as read&lt;/a&gt;
                                                                                        &lt;a href="#!"&gt;clear all&lt;/a&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;ul class="noti-body"&gt;
                                                                                    &lt;li class="n-title"&gt;
                                                                                        &lt;p class="m-b-0"&gt;NEW&lt;/p&gt;
                                                                                    &lt;/li&gt;
                                                                                    &lt;li class="notification"&gt;
                                                                                        &lt;div class="d-flex"&gt;
                                                                                            &lt;img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image"&gt;
                                                                                            &lt;div class="media-body"&gt;
                                                                                                &lt;p&gt;&lt;strong&gt;John Doe&lt;/strong&gt;&lt;span class="n-time text-muted"&gt;&lt;i class="icon feather icon-clock m-r-10"&gt;&lt;/i&gt;5 min&lt;/span&gt;&lt;/p&gt;
                                                                                                &lt;p&gt;New ticket Added&lt;/p&gt;
                                                                                            &lt;/div&gt;
                                                                                        &lt;/div&gt;
                                                                                    &lt;/li&gt;
                                                                                    &lt;li class="n-title"&gt;
                                                                                        &lt;p class="m-b-0"&gt;EARLIER&lt;/p&gt;
                                                                                    &lt;/li&gt;
                                                                                    &lt;li class="notification"&gt;
                                                                                        &lt;div class="d-flex"&gt;
                                                                                            &lt;img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;
                                                                                            &lt;div class="media-body"&gt;
                                                                                                &lt;p&gt;&lt;strong&gt;Joseph William&lt;/strong&gt;&lt;span class="n-time text-muted"&gt;&lt;i class="icon feather icon-clock m-r-10"&gt;&lt;/i&gt;10 min&lt;/span&gt;&lt;/p&gt;
                                                                                                &lt;p&gt;Prchace New Theme and make payment&lt;/p&gt;
                                                                                            &lt;/div&gt;
                                                                                        &lt;/div&gt;
                                                                                    &lt;/li&gt;
                                                                                    &lt;li class="notification"&gt;
                                                                                        &lt;div class="d-flex"&gt;
                                                                                            &lt;img class="img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image"&gt;
                                                                                            &lt;div class="media-body"&gt;
                                                                                                &lt;p&gt;&lt;strong&gt;Sara Soudein&lt;/strong&gt;&lt;span class="n-time text-muted"&gt;&lt;i class="icon feather icon-clock m-r-10"&gt;&lt;/i&gt;12 min&lt;/span&gt;&lt;/p&gt;
                                                                                                &lt;p&gt;currently login&lt;/p&gt;
                                                                                            &lt;/div&gt;
                                                                                        &lt;/div&gt;
                                                                                    &lt;/li&gt;
                                                                                    &lt;li class="notification"&gt;
                                                                                        &lt;div class="d-flex"&gt;
                                                                                            &lt;img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image"&gt;
                                                                                            &lt;div class="media-body"&gt;
                                                                                                &lt;p&gt;&lt;strong&gt;Joseph William&lt;/strong&gt;&lt;span class="n-time text-muted"&gt;&lt;i class="icon feather icon-clock m-r-10"&gt;&lt;/i&gt;30 min&lt;/span&gt;&lt;/p&gt;
                                                                                                &lt;p&gt;Prchace New Theme and make payment&lt;/p&gt;
                                                                                            &lt;/div&gt;
                                                                                        &lt;/div&gt;
                                                                                    &lt;/li&gt;
                                                                                    &lt;li class="notification"&gt;
                                                                                        &lt;div class="d-flex"&gt;
                                                                                            &lt;img class="img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image"&gt;
                                                                                            &lt;div class="media-body"&gt;
                                                                                                &lt;p&gt;&lt;strong&gt;Sara Soudein&lt;/strong&gt;&lt;span class="n-time text-muted"&gt;&lt;i class="icon feather icon-clock m-r-10"&gt;&lt;/i&gt;1 hour&lt;/span&gt;&lt;/p&gt;
                                                                                                &lt;p&gt;currently login&lt;/p&gt;
                                                                                            &lt;/div&gt;
                                                                                        &lt;/div&gt;
                                                                                    &lt;/li&gt;
                                                                                    &lt;li class="notification"&gt;
                                                                                        &lt;div class="d-flex"&gt;
                                                                                            &lt;img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image"&gt;
                                                                                            &lt;div class="media-body"&gt;
                                                                                                &lt;p&gt;&lt;strong&gt;Joseph William&lt;/strong&gt;&lt;span class="n-time text-muted"&gt;&lt;i class="icon feather icon-clock m-r-10"&gt;&lt;/i&gt;2 hour&lt;/span&gt;&lt;/p&gt;
                                                                                                &lt;p&gt;Prchace New Theme and make payment&lt;/p&gt;
                                                                                            &lt;/div&gt;
                                                                                        &lt;/div&gt;
                                                                                    &lt;/li&gt;
                                                                                &lt;/ul&gt;
                                                                                &lt;div class="noti-footer"&gt;
                                                                                    &lt;a href="#!"&gt;show all&lt;/a&gt;
                                                                                &lt;/div&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href="#!" class="displayChatbox"&gt;&lt;i class="icon feather icon-mail"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;div class="dropdown drp-user"&gt;
                                                                            &lt;a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"&gt;
                                                                                &lt;i class="icon feather icon-settings"&gt;&lt;/i&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class="dropdown-menu dropdown-menu-end profile-notification"&gt;
                                                                                &lt;div class="pro-head"&gt;
                                                                                    &lt;img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image"&gt;
                                                                                    &lt;span&gt;John Doe&lt;/span&gt;
                                                                                    &lt;a href="auth-signin.html" class="dud-logout" title="Logout"&gt;
                                                                                        &lt;i class="feather icon-log-out"&gt;&lt;/i&gt;
                                                                                    &lt;/a&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;ul class="pro-body"&gt;
                                                                                    &lt;li&gt;&lt;a href="#!" class="dropdown-item"&gt;&lt;i class="feather icon-settings"&gt;&lt;/i&gt; Settings&lt;/a&gt;&lt;/li&gt;
                                                                                    &lt;li&gt;&lt;a href="#!" class="dropdown-item"&gt;&lt;i class="feather icon-user"&gt;&lt;/i&gt; Profile&lt;/a&gt;&lt;/li&gt;
                                                                                    &lt;li&gt;&lt;a href="message.html" class="dropdown-item"&gt;&lt;i class="feather icon-mail"&gt;&lt;/i&gt; My Messages&lt;/a&gt;&lt;/li&gt;
                                                                                    &lt;li&gt;&lt;a href="auth-signin.html" class="dropdown-item"&gt;&lt;i class="feather icon-lock"&gt;&lt;/i&gt; Lock Screen&lt;/a&gt;&lt;/li&gt;
                                                                                &lt;/ul&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/header&gt;
                                                        &lt;!-- [ Header ] end --&gt;

                                                        &lt;!-- [ chat user list ] start --&gt;
                                                        &lt;section class="header-user-list"&gt;
                                                            &lt;a href="#!" class="h-close-text"&gt;&lt;i class="feather icon-x"&gt;&lt;/i&gt;&lt;/a&gt;
                                                            &lt;ul class="nav nav-tabs" id="chatTab" role="tablist"&gt;
                                                                &lt;li class="nav-item"&gt;
                                                                    &lt;a class="nav-link active text-uppercase" id="chat-tab" data-bs-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="true"&gt;&lt;i class="feather icon-message-circle me-2"&gt;&lt;/i&gt;Chat&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class="nav-item"&gt;
                                                                    &lt;a class="nav-link text-uppercase" id="user-tab" data-bs-toggle="tab" href="#user" role="tab" aria-controls="user" aria-selected="false"&gt;&lt;i class="feather icon-users me-2"&gt;&lt;/i&gt;User&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class="nav-item"&gt;
                                                                    &lt;a class="nav-link text-uppercase" id="setting-tab" data-bs-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false"&gt;&lt;i class="feather icon-settings me-2"&gt;&lt;/i&gt;Setting&lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                            &lt;div class="tab-content" id="chatTabContent"&gt;
                                                                &lt;div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat-tab"&gt;
                                                                    &lt;div class="h-list-header"&gt;
                                                                        &lt;div class="input-group"&gt;
                                                                            &lt;input type="text" id="search-friends" class="form-control" placeholder="Search Friend . . ."&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class="h-list-body"&gt;
                                                                        &lt;div class="main-friend-cont scroll-div"&gt;
                                                                            &lt;div class="main-friend-list"&gt;
                                                                                &lt;div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image "&gt;
                                                                                        &lt;div class="live-status"&gt;3&lt;/div&gt;
                                                                                    &lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Josephin Doe&lt;small class="d-block text-c-green"&gt;Typing . . &lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;
                                                                                        &lt;div class="live-status"&gt;1&lt;/div&gt;
                                                                                    &lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Lary Doe&lt;small class="d-block text-c-green"&gt;online&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="3" data-status="online" data-username="Alice"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Alice&lt;small class="d-block text-c-green"&gt;online&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image"&gt;
                                                                                        &lt;div class="live-status"&gt;1&lt;/div&gt;
                                                                                    &lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Alia&lt;small class="d-block text-muted"&gt;10 min ago&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-4.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Suzen&lt;small class="d-block text-muted"&gt;15 min ago&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image "&gt;
                                                                                        &lt;div class="live-status"&gt;3&lt;/div&gt;
                                                                                    &lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Josephin Doe&lt;small class="d-block text-c-green"&gt;Typing . . &lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;
                                                                                        &lt;div class="live-status"&gt;1&lt;/div&gt;
                                                                                    &lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Lary Doe&lt;small class="d-block text-c-green"&gt;online&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="3" data-status="online" data-username="Alice"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Alice&lt;small class="d-block text-c-green"&gt;online&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image"&gt;
                                                                                        &lt;div class="live-status"&gt;1&lt;/div&gt;
                                                                                    &lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Alia&lt;small class="d-block text-muted"&gt;10 min ago&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-4.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Suzen&lt;small class="d-block text-muted"&gt;15 min ago&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image "&gt;
                                                                                        &lt;div class="live-status"&gt;3&lt;/div&gt;
                                                                                    &lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Josephin Doe&lt;small class="d-block text-c-green"&gt;Typing . . &lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;
                                                                                        &lt;div class="live-status"&gt;1&lt;/div&gt;
                                                                                    &lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Lary Doe&lt;small class="d-block text-c-green"&gt;online&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="3" data-status="online" data-username="Alice"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Alice&lt;small class="d-block text-c-green"&gt;online&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class="tab-pane fade" id="user" role="tabpanel" aria-labelledby="user-tab"&gt;
                                                                    &lt;div class="h-list-body"&gt;
                                                                        &lt;div class="main-friend-cont scroll-div"&gt;
                                                                            &lt;div class="main-friend-list"&gt;
                                                                                &lt;div class="media px-3 d-flex align-items-center mt-3"&gt;
                                                                                    &lt;a class="media-left m-r-15" href="#!"&gt;
                                                                                        &lt;div class="hei-50 wid-50 bg-primary img-radius d-flex text-white f-22 align-items-center justify-content-center"&gt;&lt;i class="icon feather icon-users"&gt;&lt;/i&gt;&lt;/div&gt;
                                                                                    &lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;p class="chat-header f-w-600 mb-0"&gt;New Group&lt;/p&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media p-3 d-flex align-items-center"&gt;
                                                                                    &lt;a class="media-left m-r-15" href="#!"&gt;
                                                                                        &lt;div class="hei-50 wid-50 bg-primary img-radius d-flex text-white f-22 align-items-center justify-content-center"&gt;&lt;i class="icon feather icon-user-plus"&gt;&lt;/i&gt;&lt;/div&gt;
                                                                                    &lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;p class="chat-header f-w-600 mb-0"&gt;New Contact&lt;/p&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image "&gt;&lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;p class="chat-header"&gt;Josephin Doe&lt;small class="d-block"&gt;i am not what happened . .&lt;/small&gt;&lt;/p&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Lary Doe&lt;small class="d-block"&gt;Avalable&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="3" data-status="online" data-username="Alice"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Alice&lt;small class="d-block"&gt;hear using Elite able&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;
                                                                                        &lt;div class="hei-50 wid-50 img-radius bg-success d-flex text-white f-22 align-items-center justify-content-center"&gt;A&lt;/div&gt;
                                                                                    &lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Alia&lt;small class="d-block text-muted"&gt;Avalable&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-4.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Suzen&lt;small class="d-block text-muted"&gt;Avalable&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;
                                                                                        &lt;div class="hei-50 wid-50 bg-danger img-radius d-flex text-white f-22 align-items-center justify-content-center"&gt;JD&lt;/div&gt;
                                                                                    &lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Josephin Doe&lt;small class="d-block text-muted"&gt;Don't send me image&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe"&gt;
                                                                                    &lt;a class="media-left" href="#!"&gt;&lt;img class="media-object img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                                    &lt;div class="media-body"&gt;
                                                                                        &lt;h6 class="chat-header"&gt;Lary Doe&lt;small class="d-block text-muted"&gt;not send free msg&lt;/small&gt;&lt;/h6&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab"&gt;
                                                                    &lt;div class="p-4 main-friend-cont scroll-div"&gt;
                                                                        &lt;h6 class="mt-2"&gt;&lt;i class="feather icon-monitor me-2"&gt;&lt;/i&gt;Desktop settings&lt;/h6&gt;
                                                                        &lt;hr&gt;
                                                                        &lt;div class="form-group mb-0"&gt;
                                                                            &lt;div class="switch switch-primary d-inline m-r-10"&gt;
                                                                                &lt;input type="checkbox" id="cn-p-1" checked&gt;
                                                                                &lt;label for="cn-p-1" class="cr"&gt;&lt;/label&gt;
                                                                            &lt;/div&gt;
                                                                            &lt;label class="f-w-600"&gt;Allow desktop notification&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;p class="text-muted ms-5"&gt;you get latest content at a time when data will updated&lt;/p&gt;
                                                                        &lt;div class="form-group mb-0"&gt;
                                                                            &lt;div class="switch switch-primary d-inline m-r-10"&gt;
                                                                                &lt;input type="checkbox" id="cn-p-5"&gt;
                                                                                &lt;label for="cn-p-5" class="cr"&gt;&lt;/label&gt;
                                                                            &lt;/div&gt;
                                                                            &lt;label class="f-w-600"&gt;Store Cookie&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;h6 class="mb-0 mt-5"&gt;&lt;i class="feather icon-layout me-2"&gt;&lt;/i&gt;Application settings&lt;/h6&gt;
                                                                        &lt;hr&gt;
                                                                        &lt;div class="form-group mb-0"&gt;
                                                                            &lt;div class="switch switch-primary d-inline m-r-10"&gt;
                                                                                &lt;input type="checkbox" id="cn-p-3" checked&gt;
                                                                                &lt;label for="cn-p-3" class="cr"&gt;&lt;/label&gt;
                                                                            &lt;/div&gt;
                                                                            &lt;label class="f-w-600"&gt;Backup Storage&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;p class="text-muted mb-0 ms-5"&gt;Automaticaly take backup as par schedule&lt;/p&gt;
                                                                        &lt;div class="form-group mb-4"&gt;
                                                                            &lt;div class="switch switch-primary d-inline m-r-10"&gt;
                                                                                &lt;input type="checkbox" id="cn-p-4" checked&gt;
                                                                                &lt;label for="cn-p-4" class="cr"&gt;&lt;/label&gt;
                                                                            &lt;/div&gt;
                                                                            &lt;label class="f-w-600"&gt;Allow guest to print file&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;h6 class="mb-0 mt-5"&gt;&lt;i class="feather icon-globe me-2"&gt;&lt;/i&gt;System settings&lt;/h6&gt;
                                                                        &lt;hr&gt;
                                                                        &lt;div class="form-group mb-0"&gt;
                                                                            &lt;div class="switch switch-primary d-inline m-r-10"&gt;
                                                                                &lt;input type="checkbox" id="cn-p-2"&gt;
                                                                                &lt;label for="cn-p-2" class="cr"&gt;&lt;/label&gt;
                                                                            &lt;/div&gt;
                                                                            &lt;label class="f-w-600"&gt;View other user chat&lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;p class="text-muted ms-5"&gt;Allow to show public user message&lt;/p&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/section&gt;
                                                        &lt;!-- [ chat user list ] end --&gt;

                                                        &lt;!-- [ chat message ] start --&gt;
                                                        &lt;section class="header-chat"&gt;
                                                            &lt;div class="h-list-header"&gt;
                                                                &lt;h6&gt;Josephin Doe&lt;/h6&gt;
                                                                &lt;a href="#!" class="h-back-user-list"&gt;&lt;i class="feather icon-chevron-left"&gt;&lt;/i&gt;&lt;/a&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class="h-list-body"&gt;
                                                                &lt;div class="main-chat-cont scroll-div"&gt;
                                                                    &lt;div class="main-friend-chat"&gt;
                                                                        &lt;div class="d-flex chat-messages "&gt;
                                                                            &lt;a class="media-left photo-table" href="#!"&gt;&lt;img class="media-object img-radius img-radius m-t-5" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                            &lt;div class="media-body chat-menu-content"&gt;
                                                                                &lt;div class=""&gt;
                                                                                    &lt;p class="chat-cont"&gt;hello tell me something&lt;/p&gt;
                                                                                    &lt;p class="chat-cont"&gt;about yourself?&lt;/p&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;p class="chat-time"&gt;8:20 a.m.&lt;/p&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="d-flex chat-messages "&gt;
                                                                            &lt;div class="media-body chat-menu-reply"&gt;
                                                                                &lt;div class=""&gt;
                                                                                    &lt;p class="chat-cont"&gt;Ohh! very nice&lt;/p&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;p class="chat-time"&gt;8:22 a.m.&lt;/p&gt;
                                                                            &lt;/div&gt;
                                                                            &lt;a class="media-right photo-table" href="#!"&gt;&lt;img class="media-object img-radius img-radius m-t-5" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class="d-flex chat-messages "&gt;
                                                                            &lt;a class="media-left photo-table" href="#!"&gt;&lt;img class="media-object img-radius img-radius m-t-5" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image"&gt;&lt;/a&gt;
                                                                            &lt;div class="media-body chat-menu-content"&gt;
                                                                                &lt;div class=""&gt;
                                                                                    &lt;p class="chat-cont"&gt;can you help me?&lt;/p&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;p class="chat-time"&gt;8:20 a.m.&lt;/p&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class="h-list-footer"&gt;
                                                                &lt;div class="input-group"&gt;
                                                                    &lt;input type="file" class="chat-attach" style="display:none"&gt;
                                                                    &lt;a href="#!" class="input-group-prepend btn btn-success btn-attach"&gt;
                                                                        &lt;i class="feather icon-paperclip"&gt;&lt;/i&gt;
                                                                    &lt;/a&gt;
                                                                    &lt;input type="text" name="h-chat-text" class="form-control h-send-chat" placeholder="Write hear . . "&gt;
                                                                    &lt;button type="submit" class="input-group-append btn-send btn btn-primary"&gt;
                                                                        &lt;i class="feather icon-message-circle"&gt;&lt;/i&gt;
                                                                    &lt;/button&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/section&gt;
                                                        &lt;!-- [ chat message ] end --&gt;

                                                        &lt;!-- [ Main Content ] start --&gt;
                                                        &lt;div class="pcoded-main-container"&gt;
                                                            &lt;div class="pcoded-wrapper"&gt;
                                                                &lt;div class="pcoded-content"&gt;
                                                                    &lt;div class="pcoded-inner-content"&gt;
                                                                        &lt;div class="main-body"&gt;
                                                                            &lt;div class="page-wrapper"&gt;
                                                                            &lt;!-- [ breadcrumb ] start --&gt;
                                                                            &lt;div class="page-header"&gt;
                                                                                &lt;div class="page-block"&gt;
                                                                                    &lt;div class="row align-items-center"&gt;
                                                                                        &lt;div class="col-md-12"&gt;
                                                                                            &lt;div class="page-header-title"&gt;
                                                                                                &lt;h5 class="m-b-10"&gt;Fixed Layout&lt;/h5&gt;
                                                                                            &lt;/div&gt;
                                                                                            &lt;ul class="breadcrumb"&gt;
                                                                                                &lt;li class="breadcrumb-item"&gt;&lt;a href="index.html"&gt;&lt;i class="feather icon-home"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                                                                                &lt;li class="breadcrumb-item"&gt;&lt;a href="#!"&gt;Page Layouts&lt;/a&gt;&lt;/li&gt;
                                                                                                &lt;li class="breadcrumb-item"&gt;&lt;a href="#!"&gt;Vertical&lt;/a&gt;&lt;/li&gt;
                                                                                                &lt;li class="breadcrumb-item"&gt;&lt;a href="#!"&gt;Fixed Layout&lt;/a&gt;&lt;/li&gt;
                                                                                            &lt;/ul&gt;
                                                                                        &lt;/div&gt;
                                                                                    &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                            &lt;/div&gt;
                                                                            &lt;!-- [ breadcrumb ] end --&gt;
                                                                                &lt;!-- [ Main Content ] start --&gt;
                                                                                &lt;div class="row"&gt;

                                                                                &lt;/div&gt;
                                                                                &lt;!-- [ Main Content ] end --&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;!-- [ Main Content ] end --&gt;

                                                        &lt;!-- Required Js --&gt;
                                                        &lt;script src="assets/js/vendor-all.min.js"&gt;&lt;/script&gt;
                                                        &lt;script src="assets/plugins/bootstrap/js/bootstrap.min.js"&gt;&lt;/script&gt;
                                                        &lt;script src="assets/js/pcoded.min.js"&gt;&lt;/script&gt;
                                                    &lt;/body&gt;
                                                    &lt;/html&gt;
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ fixed-layout ] end -->
                            </div>


     @endsection