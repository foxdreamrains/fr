<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>Training | Franchise NQ</title>
  <link rel="icon" type="image/x-icon" href="../src/assets/img/Logo-NQ-3D-3.png" />

  <link href="../layouts/vertical-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
  <link href="../layouts/vertical-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
  <script src="../layouts/vertical-dark-menu/loader.js"></script>

  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../layouts/vertical-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
  <link href="../layouts/vertical-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
  <link href="../src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">
  <link href="../src/assets/css/light/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
  <link href="../src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
  <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class="layout-boxed">
  <!-- BEGIN LOADER -->
  <div id="load_screen">
    <div class="loader">
      <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
      </div>
    </div>
  </div>
  <!--  END LOADER -->

  <!--  BEGIN NAVBAR  -->
  <div class="header-container container-xxl">
    <header class="header navbar navbar-expand-sm expand-header">

      <a href="javascript:void(0);" class="sidebarCollapse">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-menu">
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
      </a>

      <div class="search-animated toggle-search">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-search">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
        <form class="form-inline search-full form-inline search" role="search">
          <div class="search-bar">
            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-x search-close">
              <line x1="18" y1="6" x2="6" y2="18"></line>
              <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
          </div>
        </form>
        <span class="badge badge-secondary">Ctrl + /</span>
      </div>

      <ul class="navbar-item flex-row ms-lg-auto ms-0">

        <li class="nav-item dropdown language-dropdown"> <!-- Bendera Bahasa -->
          <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="../src/assets/img/1x1/id.svg" class="flag-width" alt="flag">
          </a>
          <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
            <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/id.svg"
                class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Indonesia</span></a>
            <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/sa.webp"
                class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Arab</span></a>
            <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/us.svg"
                class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;English</span></a>
          </div>
        </li>


        <li class="nav-item theme-toggle-item">
          <a href="javascript:void(0);" class="nav-link theme-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-moon dark-mode">
              <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-sun light-mode">
              <circle cx="12" cy="12" r="5"></circle>
              <line x1="12" y1="1" x2="12" y2="3"></line>
              <line x1="12" y1="21" x2="12" y2="23"></line>
              <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
              <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
              <line x1="1" y1="12" x2="3" y2="12"></line>
              <line x1="21" y1="12" x2="23" y2="12"></line>
              <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
              <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
            </svg>
          </a>
        </li>

        <li class="nav-item dropdown notification-dropdown">
          <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-bell">
              <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
              <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
            </svg><span class="badge badge-success"></span>
          </a>

          <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
            <div class="drodpown-title message">
              <h6 class="d-flex justify-content-between"><span class="align-self-center">Messages</span> <span
                  class="badge badge-primary">9 Unread</span></h6>
            </div>
            <div class="notification-scroll">
              <div class="dropdown-item">
                <div class="media server-log">
                  <img src="../src/assets/img/profile-16.jpeg" class="img-fluid me-2" alt="avatar">
                  <div class="media-body">
                    <div class="data-info">
                      <h6 class="">Kara Young</h6>
                      <p class="">1 hr ago</p>
                    </div>

                    <div class="icon-status">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dropdown-item">
                <div class="media ">
                  <img src="../src/assets/img/profile-15.jpeg" class="img-fluid me-2" alt="avatar">
                  <div class="media-body">
                    <div class="data-info">
                      <h6 class="">Daisy Anderson</h6>
                      <p class="">8 hrs ago</p>
                    </div>

                    <div class="icon-status">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dropdown-item">
                <div class="media file-upload">
                  <img src="../src/assets/img/profile-21.jpeg" class="img-fluid me-2" alt="avatar">
                  <div class="media-body">
                    <div class="data-info">
                      <h6 class="">Oscar Garner</h6>
                      <p class="">14 hrs ago</p>
                    </div>

                    <div class="icon-status">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              <div class="drodpown-title notification mt-2">
                <h6 class="d-flex justify-content-between"><span class="align-self-center">Notifications</span> <span
                    class="badge badge-secondary">16 New</span></h6>
              </div>

              <div class="dropdown-item">
                <div class="media server-log">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-server">
                    <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                    <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                    <line x1="6" y1="6" x2="6" y2="6"></line>
                    <line x1="6" y1="18" x2="6" y2="18"></line>
                  </svg>
                  <div class="media-body">
                    <div class="data-info">
                      <h6 class="">Server Rebooted</h6>
                      <p class="">45 min ago</p>
                    </div>

                    <div class="icon-status">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dropdown-item">
                <div class="media file-upload">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-file-text">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                  </svg>
                  <div class="media-body">
                    <div class="data-info">
                      <h6 class="">Kelly Portfolio.pdf</h6>
                      <p class="">670 kb</p>
                    </div>

                    <div class="icon-status">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dropdown-item">
                <div class="media ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-heart">
                    <path
                      d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                    </path>
                  </svg>
                  <div class="media-body">
                    <div class="data-info">
                      <h6 class="">Licence Expiring Soon</h6>
                      <p class="">8 hrs ago</p>
                    </div>

                    <div class="icon-status">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </li>

        <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
          <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar-container">
              <div class="avatar avatar-sm avatar-indicators avatar-online">
                <img alt="avatar" src="../src/assets/img/profile-30.png" class="rounded-circle">
              </div>
            </div>
          </a>

          <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
            <div class="user-profile-section">
              <div class="media mx-auto">
                <div class="emoji me-2">
                  &#x1F44B;
                </div>
                <div class="media-body">
                  <h5>Shaun Park</h5>
                  <p>PT Franchisee</p>
                </div>
              </div>
            </div>
            <div class="dropdown-item">
              <a href="user-profile.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-user">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg> <span>Profile</span>
              </a>
            </div>
            <div class="dropdown-item">
              <a href="app-mailbox.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-inbox">
                  <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                  <path
                    d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                  </path>
                </svg> <span>Inbox</span>
              </a>
            </div>
            <div class="dropdown-item">
              <a href="auth-boxed-lockscreen.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-lock">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg> <span>Lock Screen</span>
              </a>
            </div>
            <div class="dropdown-item">
              <a href="auth-boxed-signin.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-log-out">
                  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                  <polyline points="16 17 21 12 16 7"></polyline>
                  <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg> <span>Log Out</span>
              </a>
            </div>
          </div>

        </li>
      </ul>
    </header>
  </div>
  <!--  END NAVBAR  -->

  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR MENU-LEFT -->
    <div class="sidebar-wrapper sidebar-theme">

      <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
          <div class="nav-logo">
            <div class="nav-item theme-logo">
              <a href="./menu.html">
                <img src="../src/assets/img/Logo-NQ-3D-1.png">
              </a>
            </div>
            <div class="nav-item theme-text">
              <a href="./menu.html" class="nav-link"> NQ </a>
            </div>
          </div>

          <div class="nav-item sidebar-toggle">
            <div class="btn-toggle sidebarCollapse">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevrons-left">
                <polyline points="11 17 6 12 11 7"></polyline>
                <polyline points="18 17 13 12 18 7"></polyline>
              </svg>
            </div>
          </div>
        </div>
        <div class="shadow-bottom"></div>


        <ul class="list-unstyled menu-categories" id="accordionExample">

          <br>
          <li class="menu">
            <a href="dashboard.html" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-home">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <span>DASHBOARD</span>
              </div>
            </a>
          </li>
          <li class="menu">
            <a href="news.html" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-map">
                  <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                  <line x1="8" y1="2" x2="8" y2="18"></line>
                  <line x1="16" y1="6" x2="16" y2="22"></line>
                </svg>
                <span>NEWS</span>
              </div>
            </a>
          </li>

          <li class="menu menu-heading">
            <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-minus">
                <line x1="5" y1="12" x2="19" y2="12"></line>
              </svg><span>FRANCHISE</span></div>
          </li>

          <li class="menu">
            <a href="name-quotient.html" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-pen-tool">
                  <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                  <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                  <path d="M2 2l7.586 7.586"></path>
                  <circle cx="11" cy="11" r="2"></circle>
                </svg>
                <span>Name Quotient</span>
              </div>
            </a>
          </li>

          <li class="menu">
            <a href="certificate.html" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-message-square">
                  <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                </svg>
                <span>NQ Certificate</span>
              </div>
            </a>
          </li>

          <li class="menu">
            <a href="consult.html" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-layers">
                  <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                  <polyline points="2 17 12 22 22 17"></polyline>
                  <polyline points="2 12 12 17 22 12"></polyline>
                </svg>
                <span>Consult Activity</span>
              </div>
            </a>
          </li>

          <li class="menu">
            <a href="umroh.html" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-users">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>

                <span>Umroh</span>
              </div>
            </a>
          </li>

          <li class="menu active">
            <a href="training.html" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-airplay">
                  <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                  <polygon points="12 15 17 21 7 21 12 15"></polygon>
                </svg>
                <span>Training</span>
              </div>
            </a>
          </li>

          <li class="menu">
            <a href="cr.html" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-layout">
                  <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                  <line x1="3" y1="9" x2="21" y2="9"></line>
                  <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>

                <span>Character Reader</span>
              </div>
            </a>
          </li>


          <br>
          <li class="menu">
            <a href="user-profile.html" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-user">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span>Account</span>
              </div>
            </a>
          </li>
          <li class="menu">
            <a href="app-mailbox.html" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-user">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span>Mail Box</span>
              </div>
            </a>
          </li>
          <li class="menu">
            <a href="auth-boxed-lockscreen.html" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-lock">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
                <span>Lock Screen</span>
              </div>
            </a>
          </li>

          <li class="menu">
            <a href="auth-boxed-signin.html" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-log-out">
                  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                  <polyline points="16 17 21 12 16 7"></polyline>
                  <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                <span>Log out</span>
              </div>
            </a>
          </li>

          <br><br>

        </ul>

      </nav>

    </div>
    <!--  END SIDEBAR  -->


    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
      <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

          <!-- BREADCRUMB -->
          <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Page</a>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-alert-circle">
                  <circle cx="12" cy="12" r="10"></circle>
                  <line x1="12" y1="8" x2="12" y2="12"></line>
                  <line x1="12" y1="16" x2="12" y2="16"></line>
                </svg>
                </li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Empty Page</li> -->
              </ol>
            </nav>
          </div>
          <!-- /BREADCRUMB -->

          <!-- CONTENT AREA -->
          <div class="row layout-top-spacing">

            <div class="col-12">
              <div class="alert alert-arrow-right alert-icon-right alert-light-warning alert-dismissible fade show mb-4"
                role="alert">

                <!-- <strong>Kick Start you new project with ease!</strong> Learn more about Starter Kit by refering to the <a target="_blank" href="https://designreset.com/cork/documentation/getting-started.html">Documentation</a> -->
              </div>
            </div>

            <div class="col-md-12">
            </div>

          </div>
          <!-- CONTENT AREA -->

        </div>

      </div>

      <!--  BEGIN FOOTER  -->
      <div class="footer-wrapper">
        <div class="footer-section f-section-1">
          <p class="">Copyright © <span class="dynamic-year">2024</span> <a target="_blank"
              href="https://namequotient.com/">Name Quotient</a>, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
          <p class="">Fundamental Intellegent <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-heart">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
              </path>
            </svg></p>
        </div>
      </div>
      <!--  END FOOTER  -->

    </div>
    <!--  END CONTENT AREA  -->


  </div>
  <!-- END MAIN CONTAINER -->

  <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
  <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
  <script src="../layouts/vertical-dark-menu/app.js"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
  <script src="../src/plugins/src/apex/apexcharts.min.js"></script>
  <script src="../src/assets/js/dashboard/dash_1.js"></script>
  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

</html>
