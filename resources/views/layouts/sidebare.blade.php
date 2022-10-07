<div class="nk-body bg-lighter npc-general has-sidebar ">

<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- sidebar @s -->
        <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
            <div class="nk-sidebar-element nk-sidebar-head">
                <div class="nk-menu-trigger">
                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                </div>
                <div class="nk-sidebar-brand">
                    <a href="html/index.html" class="logo-link nk-sidebar-logo">
                        <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                        <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                    </a>
                </div>
            </div>
               <!-- .nk-sidebar-element -->
            <div class="nk-sidebar-element nk-sidebar-body">
                <div class="nk-sidebar-content">
                    <div class="nk-sidebar-menu" data-simplebar>
                        <ul class="nk-menu">
                        
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Table de bord</h6>
                            </li><!-- .nk-menu-item -->
                      
                            <li class="nk-menu-item">
                                <a href="html/index-analytics.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                                    <span class="nk-menu-text">Table de bord</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Gestion interne</h6>
                            </li><!-- .nk-menu-heading -->
                   
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    <span class="nk-menu-text">Etudiants</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/user-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">Ajouter étudiant</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-list-compact.html" class="nk-menu-link"><span class="nk-menu-text">List étudiants</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">List étudiants - Noir</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                    <span class="nk-menu-text">Niveau d’étude </span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/kyc-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">Ajouter Niveau d’étude  </span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/kyc-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">List Niveau d’étude </span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                                    <span class="nk-menu-text">  l'année scolaire</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/transaction-basic.html" class="nk-menu-link"><span class="nk-menu-text">Ajouter l'année scolaire</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <p class="nk-menu-link"><span class="nk-menu-text"><router-link to="/ta">List l'année scolaire </router-link></span></p>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span>
                                    <span class="nk-menu-text">Matière</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/apps-messages.html" class="nk-menu-link"><span class="nk-menu-text">Ajouter Matière</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/apps-inbox.html" class="nk-menu-link"><span class="nk-menu-text">List Matière</span></a>
                                    </li>
                                   
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                    <span class="nk-menu-text">Enseignant</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">Ajouter Enseignant</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">List  Enseignants</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                                    <span class="nk-menu-text">Classes</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/product-list.html" class="nk-menu-link"><span class="nk-menu-text">Ajouter Classes</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/product-card.html" class="nk-menu-link"><span class="nk-menu-text">List Classes</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/product-details.html" class="nk-menu-link"><span class="nk-menu-text">Affecter  étudiant - Classes</span></a>
                                    </li>
                                      <li class="nk-menu-item">
                                        <a href="html/product-details.html" class="nk-menu-link"><span class="nk-menu-text">Affecter  enseignant - Classes</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                      
                        </ul><!-- .nk-menu -->
                    </div><!-- .nk-sidebar-menu -->
                </div><!-- .nk-sidebar-content -->
            </div><!-- .nk-sidebar-element -->
        </div>
        <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            <div class="nk-header nk-header-fixed is-light">
                <div class="container-fluid">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ml-n1">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand d-xl-none">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                        </div><!-- .nk-header-brand -->
                        <div class="nk-header-news d-none d-xl-block">
                            <div class="nk-news-list">
                                <a class="nk-news-item" href="#">
                                    <div class="nk-news-icon">
                                    </div>
                                    <div class="nk-news-text">
                                        
                                    </div>
                                </a>
                            </div>
                        </div><!-- .nk-header-news -->
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown language-dropdown d-none d-sm-block mr-n1">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                        <div class="user-avatar sm border border-light">
                                            <img src="./images/flags/english-sq.png" alt="">
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-s1">
                                        <ul class="language-list">
                                            <li>
                                                <a href="#" class="language-item">
                                                    <img src="./images/flags/english.png" alt="" class="language-flag">
                                                    <span class="language-name">العربية</span>
                                                </a>
                                            </li>
                                        
                                            <li>
                                                <a href="#" class="language-item">
                                                    <img src="./images/flags/french.png" alt="" class="language-flag">
                                                    <span class="language-name">Français</span>
                                                </a>
                                            </li>
                                        
                                        </ul>
                                    </div>
                                </li><!-- .dropdown -->
                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-md-block">
                                                <div class="user-status">Administrator</div>
                                                <div class="user-name dropdown-indicator"> {{ Auth::user()->name }}</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text"> {{ Auth::user()->name }}</span>
                                                    <span class="sub-text"> {{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                            </ul>
                                        </div>
                                               <div class="dropdown-inner" aria-labelledby="navbarDropdown">
                                                  <ul class="link-list">
                                                   <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                          
                                               <em class="icon ni ni-signout"></em><span>{{ __('Logout') }}</span></a></li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                               </form>
                                            </ul>
                                        </div>
                                    </div>
                                </li><!-- .dropdown -->
                            <!--    <li class="dropdown notification-dropdown mr-n1">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                        <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                        <div class="dropdown-head">
                                            <span class="sub-title nk-dropdown-title">Notifications</span>
                                            <a href="#">Mark All as Read</a>
                                        </div>
                                        <div class="dropdown-body">
                                            <div class="nk-notification">
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div
                                        <div class="dropdown-foot center">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </li> -->
                            </ul><!-- .nk-quick-nav -->
                        </div><!-- .nk-header-tools -->
                    </div><!-- .nk-header-wrap -->
                </div><!-- .container-fliud -->
            </div>