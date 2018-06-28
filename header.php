<!doctype html>
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width">
        <title>Admin Panel</title>
        <meta name="description" content="Admin Panel">
        <meta name="keywords" content="Admin Panel">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css">
        <meta name="theme-color" content="#3063A0">
        <link rel="icon" type="image/x-icon" sizes="16x16" href="/img/fav.ico">
        <link rel="shortcut icon" href="/img/favicon.ico">
        <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <![endif]-->
    </head>
    <body class="pace-done">
        <div class="app">
            <header class="app-header">
                <div class="top-bar">
                    <div class="top-bar-brand">
                        <a href="/">
                            <img src="/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="top-bar-list">
                        <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                            <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="Menu" aria-controls="navigation">
                                <span class="hamburger-box" onclick="show_menu();">
                                  <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <div class="top-bar-item top-bar-item-full"></div>
                        <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
                            <ul class="header-nav nav">
                                <li class="nav-item dropdown header-nav-dropdown">
                                    <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="oi oi-grid-two-up"></span>
                                    </a>
                                    <div class="dropdown-arrow"></div>
                                    <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                        <div class="dropdown-sheets justify-content-around">
                                            <div class="dropdown-sheet-item">
                                                <a href="/users/" class="tile-wrapper">
                                                    <span class="tile tile-lg bg-indigo">
                                                        <i class="oi oi-people"></i>
                                                    </span>
                                                    <span class="tile-peek">Users</span>
                                                </a>
                                            </div>
                                            <div class="dropdown-sheet-item">
                                                <a href="/finance/" class="tile-wrapper">
                                                    <span class="tile tile-lg bg-teal">
                                                        <i class="oi oi-dollar"></i>
                                                    </span>
                                                    <span class="tile-peek">Finance</span>
                                                </a>
                                            </div>
                                            <div class="dropdown-sheet-item">
                                                <a href="/news/" class="tile-wrapper">
                                                    <span class="tile tile-lg bg-yellow">
                                                        <i class="oi oi-fire"></i>
                                                    </span>
                                                    <span class="tile-peek">News</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="dropdown">
                                <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="user-avatar">
                                        <img src="/img/admin-logo.png" alt="admin-logo">
                                    </span>
                                    <span class="account-summary pr-lg-4 d-none d-lg-block">
                                        <span class="account-name">Administrator</span>
                                    </span>
                                </button>
                                <div class="dropdown-arrow dropdown-arrow-left"></div>
                                <div class="dropdown-menu">
                                    <div class="dropdown-header d-none d-md-block d-lg-none"><strong>Administrator</strong></div>
                                    <a class="dropdown-item" href="/logout/"><span class="dropdown-icon oi oi-account-logout"></span>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="app-aside">
                <!-- .aside-content -->
                <div class="aside-content">
                    <!-- .aside-header -->
                    <header class="aside-header d-block d-md-none">
                        <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
                            <span class="user-avatar user-avatar-lg">
                                <img src="/img/admin-logo.png" alt="admin-logo">
                            </span>
                                <span class="account-icon">
                                <span class="fa fa-caret-down fa-lg"></span>
                            </span>
                            <span class="account-summary">
                                <span class="account-name">Administrator</span>
                            </span>
                        </button>
                        <div id="dropdown-aside" class="dropdown-aside collapse">
                            <div class="pb-3">
                                <a class="dropdown-item" href="/logout/"><span class="dropdown-icon oi oi-account-logout"></span>Logout</a>
                            </div>
                        </div>
                    </header>
                    <section class="aside-menu has-scrollable ps ps--active-y">
                        <!-- .stacked-menu -->
                        <nav id="stacked-menu" class="stacked-menu stacked-menu-has-collapsible">
                            <!-- .menu -->
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="/users/" class="menu-link">
                                        <span class="menu-icon oi oi-people"></span>
                                        <span class="menu-text">Users</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="/finance/" class="menu-link">
                                        <span class="menu-icon oi oi-dollar"></span>
                                        <span class="menu-text">Finance</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="/news/" class="menu-link">
                                        <span class="menu-icon oi oi-fire"></span>
                                        <span class="menu-text">News</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="ps__rail-x">
                            <div class="ps__thumb-x" tabindex="0"></div>
                        </div>
                        <div class="ps__rail-y">
                            <div class="ps__thumb-y" tabindex="0"></div>
                        </div>
                    </section>
                </div>
            </aside>