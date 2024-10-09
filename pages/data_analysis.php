
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/herbalplantlogo.png">
  <title>
    Automated Watering System | Data Analysis
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />

</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main" data-color="success">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="dashboard.php">
        <img src="../assets/img/herbalplantlogo.png" class="navbar-brand-img h-200" alt="main_logo">
        <span class="ms-1 font-weight-bold">MALtech</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  " href="dashboard.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>shop </title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                        <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active" href="#">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Data Analysis</span>
          </a>
        </li>
    
     
   
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../pages/profile.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>customer-support</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(1.000000, 0.000000)">
                        <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                        <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                        <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
       
       
      </ul>
    </div>
  
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data Analysis</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Data Analysis</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fa fa-dashboard" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">   
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
           
           
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  Notifications
                </a> <!-- Notifications Navbar Item -->
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New message</span> from Laur
                          </h6>
                          <p class="text-xs text-secondary mb-0 ">
                            <i class="fa fa-clock me-1"></i>
                            13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New album</span> by Travis Scott
                          </h6>
                          <p class="text-xs text-secondary mb-0 ">
                            <i class="fa fa-clock me-1"></i>
                            1 day
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                          <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                  <g transform="translate(453.000000, 454.000000)">
                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            Payment successfully completed
                          </h6>
                          <p class="text-xs text-secondary mb-0 ">
                            <i class="fa fa-clock me-1"></i>
                            2 days
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li> <!-- Notification Dropdown Contents for Notification Navbar Item -->
  
              <li class="nav-item pe-2 d-flex align-items-center">
                <a href = "" id = "signout" class="nav-link text-body p-0" aria-expanded="false">
                  Logout
                </a>            
              </li> <!-- Logout Navbar Item -->
             
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
     
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Plant 1</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Plant</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Soil Moisture</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date/Time Last Sprinkled</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Actions</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class = "plant_content_div">
                   
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- row plant 1 -->

        <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Plant 2</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Plant</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Soil Moisture</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date/Time Last Sprinkled</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Actions</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class = "plant_content_div">
                   
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- row plant 2 -->

          <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Plant 3</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Plant</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Soil Moisture</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date/Time Last Sprinkled</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Actions</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class = "plant_content_div">
                   
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- row plant 3 -->

          <div class="row">

            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                    <h6>Plant 4</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Plant</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Soil Moisture</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date/Time Last Sprinkled</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Actions</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody class = "plant_content_div">
                        
                            
                        </tbody>
                        </table>
                    </div>
                </div>

            </div> <!-- row plant 4 -->

        </div> 

      

      </div>

      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>
                Automated Watering System
              </div>
            </div>
            <div class="col-lg-6 d-none">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
   
    <div class="form-check form-switch d-none ps-0">
        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
    </div>
              
  </div>
  <!--   Core JS Files   -->

  

  <!-- Firebase Auth and Realtime Database Javascript Config [START] -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script type="module">

    // Import the functions you need from the SDKs you need
    

    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.13.0/firebase-app.js";
      // TODO: Add SDKs for Firebase products that you want to use
      // https://firebase.google.com/docs/web/setup#available-libraries

      import { getAuth, updatePassword,reauthenticateWithCredential, EmailAuthProvider, updateEmail,createUserWithEmailAndPassword, sendEmailVerification, signInWithEmailAndPassword, onAuthStateChanged, signOut } from "https://www.gstatic.com/firebasejs/9.13.0/firebase-auth.js";
      // Your web app's Firebase configuration
      // For Firebase JS SDK v7.20.0 and later, measurementId is optional
      const firebaseConfig = {
        apiKey: "AIzaSyDvTLnlQ6ChHAvhRgaGRwpqUBY3zA7ncEE",
        authDomain: "herbal-plant-application.firebaseapp.com",
        databaseURL: "https://herbal-plant-application-default-rtdb.firebaseio.com",
        projectId: "herbal-plant-application",
        storageBucket: "herbal-plant-application.appspot.com",
        messagingSenderId: "624158741071",
        appId: "1:624158741071:web:38ec770cf20385177e503a"
      };

      // Initialize Firebase

      const app_firebase = initializeApp(firebaseConfig);
      const auth = getAuth();

      var logout = document.getElementById('signout');
      var user_id = '';

      const user = auth.currentUser;

      onAuthStateChanged(auth, (user) => {
      
        user ? user_id = user.uid : signout();

      });
    

      // auth.emailVerified ? user_id = user.uid : signout_user();


      logout.addEventListener('click',(e) => {

        signout_user();

      }); // logout event

      function signout_user(){

        const auth = getAuth();

        signOut(auth).then(() =>{
          
          window.location.href = '../index.php';
          
        }).catch((error) => {
          const errorCode = error.code;
          const errorMessage = error.message;
          alert(errorMessage);
        });    

      } // signout_user
      

  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-database.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script>




  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




  <script type="module">
            // Import the functions you need from the SDKs you need
            import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.2/firebase-app.js";
          
        
            // TODO: Add SDKs for Firebase products that you want to use
            // https://firebase.google.com/docs/web/setup#available-libraries
          
            // Your web app's Firebase configuration
            // For Firebase JS SDK v7.20.0 and later, measurementId is optional
            const firebaseConfigApp = {
              apiKey: "AIzaSyDvTLnlQ6ChHAvhRgaGRwpqUBY3zA7ncEE",
              authDomain: "herbal-plant-application.firebaseapp.com",
              databaseURL: "https://herbal-plant-application-default-rtdb.firebaseio.com",
              projectId: "herbal-plant-application",
              storageBucket: "herbal-plant-application.appspot.com",
              messagingSenderId: "624158741071",
              appId: "1:624158741071:web:38ec770cf20385177e503a"
            };
          
            // Initialize Firebase
            //const app = initializeApp(firebaseConfig);
            //const analytics = getAnalytics(app);

            const app = firebase.initializeApp(firebaseConfigApp);
            const db = firebase.database();

            const all_detected_plants = [];
            const all_plant_details = [];

           
            get_all_plant_details();
            get_all_detected_plants();
            get_most_detected_plants();

            function get_all_detected_plants(){

              var table = 'detected_plants';
              var content_div = '';

              db.ref('/'+table+'/').once('value').then(function(snapshot){

                snapshot.forEach(function(snapshot_data){

                  var id = snapshot_data.key;
                  var plant_id = snapshot_data.val().plant_id;
                  var plant_date_time = snapshot_data.val().date_time;

                  all_detected_plants.push({
                    _id: id,
                    plant_id: plant_id,
                    date_time: plant_date_time
                  });

                  var image_path = '';
                  var plant_name = '';
                  var plant_scientific_name = '';
              

               
                  all_plant_details.forEach(function(data_plants){

                    if(data_plants.plant_id === plant_id){

                      image_path = data_plants.plant_image_path;
                      plant_name = data_plants.plant_name;
                      plant_scientific_name = data_plants.plant_scientific_name;

                    }                   

                  });

              
                
                  content_div += '<tr>';   

                    content_div += '<td>';  
                      content_div += '<div class="d-flex px-2 py-1">';  
                        content_div += '<div>';  
                          content_div += '<img src="'+image_path+'" class="avatar avatar-sm me-3" alt="user1">';  
                          content_div += '</div>';  
                          content_div += '<div class="d-flex flex-column justify-content-center">';  
                            content_div += '<h6 class="mb-0 text-sm">'+plant_name+'</h6>';  
                            content_div += '<p class="text-xs text-secondary mb-0"><i>'+ plant_scientific_name+'</i></p>';  
                            content_div += '</div>';  
                        content_div += '</div>';  
                    content_div += '</td>';  

                    content_div += '<td>';  
                      content_div += '<p class="text-xs font-weight-bold mb-0">'+plant_date_time+'</p>';  
                      content_div += '<p class="text-xs text-secondary mb-0"></p>';  
                    content_div += '</td>';                   

                  content_div += '</tr>';  

             

                });

                $('.detected_plants_content_div').html(content_div);

              });


            }  // get_all_detected_plants      
            
            
            function get_most_detected_plants(){

                var table = 'detected_plants';
                var content_div = '';

                db.ref('/'+table+'/').once('value').then(function(snapshot){

                  snapshot.forEach(function(snapshot_data){

                    var id = snapshot_data.key;
                    var plant_id = snapshot_data.val().plant_id;
                    var plant_date_time = snapshot_data.val().date_time;

                    all_detected_plants.push({
                      _id: id,
                      plant_id: plant_id,
                      date_time: plant_date_time
                    });

                    var image_path = '';
                    var plant_name = '';
                    var plant_scientific_name = '';


                
                    all_plant_details.forEach(function(data_plants){

                      if(data_plants.plant_id === plant_id){

                        image_path = data_plants.plant_image_path;
                        plant_name = data_plants.plant_name;
                        plant_scientific_name = data_plants.plant_scientific_name;

                      }                   

                    });

                  
                    content_div += '<tr>';
                      content_div += '<td>';
                        content_div += '<div class="d-flex px-2">';
                          content_div += '<div>';
                            content_div += '<img src="'+image_path+'" class="avatar avatar-sm rounded-circle me-2" alt="spotify">';
                          content_div += '</div>';
                          content_div += '<div class="my-auto">';
                            content_div += '<h6 class="mb-0 text-sm">'+plant_name+'<p class = "text-xs"><i>'+plant_scientific_name+'</i></p></h6>';
                          content_div += '</div>';
                        content_div += '</div>';
                      content_div += '</td>';
                      content_div += '<td>';
                        content_div += '<p class="text-sm font-weight-bold mb-0">124</p>';
                      content_div += '</td>';
                      content_div += '<td>';
                        content_div += '<span class="text-xs font-weight-bold">208</span>';
                      content_div += '</td>';
                      content_div += '<td class="align-middle text-center">';
                        content_div += '<div class="d-flex align-items-center justify-content-center">';
                          content_div += '<span class="me-2 text-xs font-weight-bold">54%</span>';
                          content_div += '<div>';
                            content_div += '<div class="progress">';
                              content_div += '<div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>';
                            content_div += '</div>';
                          content_div += '</div>';
                        content_div += '</div>';
                      content_div += '</td>';
                      content_div += '<td class="align-middle">';
                        content_div += '<button class="btn btn-link text-secondary mb-0">';
                          content_div += '<i class="fa fa-ellipsis-v text-xs"></i>';
                        content_div += '</button>';
                      content_div += '</td>';
                    content_div += '</tr>';



                  });

                  $('.most_detected_plants_content_div').html(content_div);

                });

            }  // get_most_detected_plants    

            function get_all_plant_details(){

              var table = 'plant_details'; 

              db.ref('/'+table+'/').once('value').then(function(snapshot){

                snapshot.forEach(function(datasnapshot){

                  var plant_id = datasnapshot.key;
                  var plant_name = datasnapshot.val().plant_name;
                  var plant_scientific_name = datasnapshot.val().plant_scientific_name;
                  var plant_image_path = datasnapshot.val().plant_image_path;

                  all_plant_details.push({

                    plant_id: plant_id,
                    plant_name: plant_name,
                    plant_scientific_name: plant_scientific_name,
                    plant_image_path: plant_image_path

                  });

                });

              });

            } //  get_all_plant_details
            
            
        


            function add_admin(username,email,password){

                const userId = db.ref("/users_admin").push().getKey();
                const userRef = db.ref("/users_admin/"+userId);

                userRef.set({
                    username: username,
                    user_id:userId,
                    firstname:"",
                    lastname:"",
                    middlename:"",
                    extname:"",
                    mobile_no:"",
                    address:"",
                    email_address:email,
                    date_time_registered:""
                });

                alert('Successfully Registered as Administrator!');
                window.location.href = '';
            }

            // var btn_signup = document.getElementById('btn_signup');
          

            // btn_signup.addEventListener('click',(e)=>{

            //     var username = document.getElementById('username_register').value;
            //     var email = document.getElementById('email_register').value;
            //     var password = document.getElementById('password_register').value;

            //     add_admin(username,email,password);

            // });

  
  </script>

  <!-- ./ Firebase Auth and Realtime Database Javascript Config [END] -->

  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>