
<!doctype html>
<html lang="en" class="theme-fs-md" data-bs-theme-color="default" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SocialV | Responsive Bootstrap 5 Admin Dashboard Template</title>
  <!-- Config Options -->
  <!-- End Config Options -->
  <link rel="shortcut icon" href="../assets/images/favicon.ico" />
  <link rel="stylesheet" href="../assets/css/libs.min.css">
  <link rel="stylesheet" href="../assets/css/socialv.css?v=5.2.0">
  <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet">
  <!-- flatpickr css -->
  <link rel="stylesheet" href="../assets/vendor/flatpickr/dist/flatpickr.min.css" />
  <!-- Sweetlaert2 css -->
  <link rel="stylesheet" href="../assets/vendor/sweetalert2/dist/sweetalert2.min.css" />
  
  <!-- vanillajs css -->
  <link rel="stylesheet" href="../assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
  
  <!-- zuck -->
  
  <!-- Custom Css -->
  <link rel="stylesheet" href="../assets/css/custom.css?v=5.2.0" />
  
  <!-- Customizer Css -->
  <link rel="stylesheet" href="../assets/css/customizer.css?v=5.2.0" /></head>

<body class=" ">
  <!-- loader Start -->
  <div id="loading">
        <div id="loading-center">
        </div>
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->


  @include('layouts.sidebar')
 
  <main class="main-content">
    <div class="position-relative">
    @include('layouts.navbar')

      <div>
        <div class="position-relative">
        </div>
        <div class="content-inner " id="page_layout">
    <div class="container">
        <ul class=" list-unstyled row mb-0">
            <li class="col-lg-3 col-md-6 ">
                <div class=" card">
                    <div class="card-body">
                        <div class="points">
                            <span>Last Month Posts</span>
                            <div class="d-flex align-items-center">
                                <h3>1,032</h3>
                                <small class="text-success ms-3">+ 57</small>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 ">
                <div class=" card">
                    <div class="card-body">
                        <div class="points">
                            <span>Last Month Followers</span>
                            <div class="d-flex align-items-center">
                                <h3>4,50,623</h3>
                                <small class="text-danger ms-3">- 12,562</small>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="points">
                            <span>Last Months Posts Liked</span>
                            <div class="d-flex align-items-center">
                                <h3>16,502</h3>
                                <small class="text-success ms-3">+ 1,056</small>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="points">
                            <span>Last Month Comments</span>
                            <div class="d-flex align-items-center">
                                <h3>3,90,822</h3>
                                <small class="text-success ms-3">+ 28,476</small>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="row">
            <div class="col-lg-8">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between flex-wrap">
                            <h4 class="card-title">New Accounts</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="text-secondary dropdown-toggle" id="dropdownMenuButton223" data-bs-toggle="dropdown" aria-expanded="false">
                                This year
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton223">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div id="admin-chart-02" class="admin-chart-02"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title">Customer Gender</h4>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="flex-wrap d-flex align-items-center justify-content-between">
                            <div class="d-grid gap col-md-4 col-lg-4 gap-3">
                                <div class="d-flex align-items-start">
                                    <i class="icon material-symbols-outlined filled text-primary mt-1">
                                        fiber_manual_record
                                    </i>
                                    <div class="ms-2" style="line-height: 1.5;">
                                        <span class="mb-3">Male Customer</span>
                                        <h6 class="mb-0">74%</h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <i class="icon material-symbols-outlined filled text-info mt-1">
                                        fiber_manual_record
                                    </i>
                                    <div class="ms-2" style="line-height: 1.5;">
                                        <span class="mb-3">Female Customer</span>
                                        <h6 class="mb-0">60%</h6>
                                    </div>
                                </div>
                            </div>
                            <div id="admin-chart-03" class="col-md-8 col-lg-8 admin-chart-03"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="border rounded bg-warning-subtle avatar-55 d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 640 480">
                                            <path fill="#f93" d="M0 0h640v160H0z"/>
                                            <path fill="#fff" d="M0 160h640v160H0z"/>
                                            <path fill="#128807" d="M0 320h640v160H0z"/>
                                            <g transform="matrix(3.2 0 0 3.2 320 240)"><circle r="20" fill="#008"/>
                                            <circle r="17.5" fill="#fff"/><circle r="3.5" fill="#008"/><g id="d"><g id="c"><g id="b"><g id="a" fill="#008"><circle r=".875" transform="rotate(7.5 -8.75 133.5)"/><path d="M0 17.5L.6 7 0 2l-.6 5L0 17.5z"/></g><use width="100%" height="100%" transform="rotate(15)" xlink:href="#a"/></g><use width="100%" height="100%" transform="rotate(30)" xlink:href="#b"/></g><use width="100%" height="100%" transform="rotate(60)" xlink:href="#c"/></g><use width="100%" height="100%" transform="rotate(120)" xlink:href="#d"/><use width="100%" height="100%" transform="rotate(-120)" xlink:href="#d"/></g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h3>58,992</h3>
                                    <p class="mb-0">Indian Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="border rounded bg-info-subtle avatar-55 d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 640 480"><g stroke-width="1pt"><path fill="#006" d="M0 0h640v480H0z"/><path fill="#fff" d="M0 0v27.95L307.037 250h38.647v-27.95L38.647 0H0zm345.684 0v27.95L38.647 250H0v-27.95L307.037 0h38.647z"/><path fill="#fff" d="M144.035 0v250h57.614V0h-57.615zM0 83.333v83.333h345.684V83.333H0z"/><path fill="#c00" d="M0 100v50h345.684v-50H0zM155.558 0v250h34.568V0h-34.568zM0 250l115.228-83.334h25.765L25.765 250H0zM0 0l115.228 83.333H89.463L0 18.633V0zm204.69 83.333L319.92 0h25.764L230.456 83.333H204.69zM345.685 250l-115.228-83.334h25.765l89.464 64.7V250z"/><path fill="#fff" fill-rule="evenodd" d="M299.762 392.523l-43.653 3.795 6.013 43.406-30.187-31.764-30.186 31.764 6.014-43.406-43.653-3.795 37.68-22.364-24.244-36.495 40.97 15.514 13.42-41.713 13.42 41.712 40.97-15.515-24.242 36.494m224.444 62.372l-10.537-15.854 17.81 6.742 5.824-18.125 5.825 18.126 17.807-6.742-10.537 15.854 16.37 9.718-18.965 1.65 2.616 18.85-13.116-13.793-13.117 13.794 2.616-18.85-18.964-1.65m16.368-291.815l-10.537-15.856 17.81 6.742 5.824-18.122 5.825 18.12 17.807-6.74-10.537 15.855 16.37 9.717-18.965 1.65 2.616 18.85-13.116-13.793-13.117 13.794 2.616-18.85-18.964-1.65m-89.418 104.883l-10.537-15.853 17.808 6.742 5.825-18.125 5.825 18.125 17.808-6.742-10.536 15.853 16.37 9.72-18.965 1.65 2.615 18.85-13.117-13.795-13.117 13.795 2.617-18.85-18.964-1.65m216.212-37.929l-10.558-15.854 17.822 6.742 5.782-18.125 5.854 18.125 17.772-6.742-10.508 15.854 16.362 9.718-18.97 1.65 2.608 18.85-13.118-13.793-13.117 13.793 2.61-18.85-18.936-1.65m-22.251 73.394l-10.367 6.425 2.914-11.84-9.316-7.863 12.165-.896 4.605-11.29 4.606 11.29 12.165.897-9.317 7.863 2.912 11.84"/></g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h3>20,145</h3>
                                    <p class="mb-0">Australian Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="border rounded bg-danger-subtle avatar-55 d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 640 480"><defs><clipPath id="a"><path fill-opacity=".67" d="M-88.001 32h640v480h-640z"/></clipPath></defs><g fill-rule="evenodd" stroke-width="1pt" clip-path="url(#a)" transform="translate(88.001 -32)"><path fill="#fff" d="M-128 32h720v480h-720z"/><circle cx="523.08" cy="344.05" r="194.93" fill="#d30000" transform="translate(-168.44 8.618) scale(.76554)"/></g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h3>15,852</h3>
                                    <p class="mb-0">Japanese Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="border rounded bg-success-subtle avatar-55 d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 640 480"><g stroke-width="1pt"><path fill="#229e45" fill-rule="evenodd" d="M0 0h640v480H0z"/><path fill="#f8e509" fill-rule="evenodd" d="M321.406 435.935l301.483-195.67-303.308-196.2L17.11 240.734l304.296 195.2z"/><path fill="#2b49a3" fill-rule="evenodd" d="M452.77 240.005c0 70.328-57.103 127.34-127.544 127.34-70.442 0-127.544-57.012-127.544-127.34s57.104-127.34 127.544-127.34c70.442 0 127.545 57.012 127.545 127.34z"/><path fill="#ffffef" fill-rule="evenodd" d="M283.3 316.274L279.357 314l-4.093 2.025.917-4.55-3.162-3.332 4.52-.53 2.124-4.08 1.894 4.22 4.46.81-3.345 3.13m86.098 26.224l-3.94-2.274-4.092 2.025.916-4.55-3.16-3.332 4.52-.53 2.122-4.08 1.894 4.22 4.46.81-3.345 3.13m-36.215-29.993l-3.404-1.964-3.536 1.748.792-3.93-2.73-2.88 3.904-.457 1.834-3.523 1.636 3.645 3.853.7-2.89 2.705m86.865-8.477l-3.342-1.928-3.472 1.718.777-3.858-2.68-2.827 3.833-.45 1.8-3.46 1.607 3.58 3.783.686-2.837 2.657M330.37 265.03l-3.94-2.273-4.093 2.025.916-4.55-3.162-3.332 4.522-.53 2.123-4.08 1.894 4.22 4.46.81-3.346 3.13M225.13 225.52l-3.94-2.274-4.094 2.025.916-4.548-3.16-3.333 4.52-.53 2.122-4.08 1.894 4.22 4.46.81-3.345 3.13m13.283 57.14l-3.94-2.275-4.094 2.025.916-4.548-3.16-3.334 4.52-.53 2.123-4.08 1.894 4.22 4.46.81-3.345 3.132m131.954-67.33l-3.48-2.007-3.616 1.788.81-4.017-2.794-2.944 3.994-.47 1.875-3.603 1.673 3.728 3.94.715-2.955 2.766m-6.665 38.24l-2.74-1.582-2.85 1.408.64-3.164-2.2-2.32 3.145-.368 1.477-2.838 1.318 2.936 3.103.563-2.327 2.18m-142.199 50.422l-2.63-1.518-2.734 1.352.61-3.037-2.11-2.225 3.02-.354 1.416-2.723 1.264 2.818 2.978.54-2.233 2.09m200.14 15.164l-2.144-1.135-2.227 1.01.5-2.27-1.72-1.666 2.46-.265 1.154-2.038 1.03 2.108 2.426.404-1.82 1.563"/><path fill="#ffffef" fill-rule="evenodd" d="M219.263 287.603l-2.63-1.518-2.734 1.352.61-3.037-2.11-2.225 3.02-.354 1.416-2.723 1.264 2.818 2.978.54-2.233 2.09"/><path fill="#ffffef" fill-rule="evenodd" d="M219.263 287.603l-2.63-1.518-2.734 1.352.61-3.037-2.11-2.225 3.02-.354 1.416-2.723 1.264 2.818 2.978.54-2.233 2.09m42.299 3.048l-2.63-1.52-2.733 1.353.61-3.037-2.11-2.225 3.02-.354 1.416-2.722 1.265 2.817 2.978.54-2.233 2.09m-4.786 16.989l-2.63-1.518-2.734 1.352.612-3.038-2.11-2.225 3.017-.354 1.417-2.724 1.265 2.817 2.977.54-2.233 2.09m87.381-22.301l-2.63-1.52-2.733 1.353.61-3.036-2.11-2.225 3.018-.353 1.417-2.724 1.265 2.817 2.977.54-2.233 2.09m-25.099 3.048l-2.63-1.518-2.734 1.352.612-3.037-2.11-2.225 3.018-.353 1.417-2.724 1.264 2.817 2.98.54-2.234 2.09m-68.8-5.838l-1.648-.952-1.714.847.384-1.902-1.323-1.394 1.89-.222.89-1.706.792 1.765 1.864.34-1.4 1.31m167.838 45.384l-2.63-1.518-2.733 1.35.612-3.035-2.11-2.226 3.017-.354 1.417-2.724 1.264 2.817 2.978.54-2.233 2.09m-20.832 5.844l-2.178-1.26-2.264 1.122.507-2.522-1.748-1.848 2.5-.294 1.174-2.262 1.048 2.34 2.466.45-1.85 1.735m10.371 2.297l-2.03-1.173-2.108 1.044.472-2.344-1.63-1.718 2.33-.274 1.093-2.103.976 2.177 2.296.417-1.723 1.615m29.11-22.761l-1.955-1.13-2.03 1.006.454-2.257-1.567-1.655 2.243-.262 1.053-2.024.94 2.092 2.21.402-1.658 1.553M394.24 327.69l-2.554-1.395-2.652 1.24.594-2.786-2.05-2.043 2.93-.325 1.376-2.5 1.227 2.586 2.89.496-2.167 1.92m.549 14.247l-2.33-1.395-2.418 1.24.542-2.786-1.87-2.044 2.673-.324 1.255-2.5 1.12 2.586 2.635.496-1.977 1.918m-18.929-23.055l-1.955-1.13-2.032 1.006.455-2.257-1.568-1.653 2.242-.263 1.054-2.025.94 2.093 2.213.402-1.66 1.554m-17.781 2.273l-1.954-1.13-2.03 1.006.454-2.257-1.57-1.653 2.244-.263 1.053-2.025.94 2.093 2.21.402-1.658 1.554m-30.408-24.59l-1.955-1.128-2.03 1.004.454-2.257-1.568-1.654 2.243-.264 1.053-2.024.94 2.094 2.212.402-1.66 1.553m3.734 57.024l-1.656-.956-1.72.85.386-1.91-1.33-1.4 1.9-.223.893-1.715.795 1.772 1.874.34-1.407 1.316m-46.131-86.63l-3.942-2.274-4.093 2.025.917-4.548-3.162-3.334 4.52-.53 2.124-4.08 1.894 4.22 4.46.81-3.345 3.132"/><path fill="#fff" fill-rule="evenodd" d="M444.368 285.817c1.944-5.083 4.45-12.75 5.783-19.786-67.742-59.508-143.26-89.993-238.68-83.72-3.422 6.558-6.16 13.423-8.47 20.853 113.063-10.786 195.936 39.27 241.37 82.654z"/><path fill="#309e3a" d="M413.914 252.36l2.42 1.323c-.38.858-.48 1.61-.31 2.25.18.645.625 1.208 1.335 1.688.75.515 1.424.74 2.016.68.6-.06 1.045-.306 1.335-.734a1.27 1.27 0 0 0 .225-.863c-.027-.3-.192-.66-.495-1.075-.21-.28-.72-.873-1.53-1.777-1.04-1.16-1.66-2.138-1.86-2.936-.28-1.122-.11-2.14.51-3.06.4-.59.936-1.03 1.612-1.318.686-.29 1.433-.355 2.24-.198.81.157 1.664.54 2.55 1.143 1.453.987 2.33 2.048 2.63 3.184.305 1.138.117 2.253-.565 3.345l-2.404-1.484c.3-.665.375-1.24.218-1.723-.147-.485-.55-.95-1.21-1.397-.676-.46-1.302-.682-1.874-.663a1.01 1.01 0 0 0-.856.468c-.186.277-.228.59-.13.943.13.45.668 1.193 1.625 2.234.953 1.04 1.604 1.89 1.95 2.547.355.657.516 1.34.482 2.05-.023.706-.284 1.427-.778 2.16a4.11 4.11 0 0 1-1.812 1.493c-.76.33-1.57.412-2.437.24-.86-.177-1.794-.607-2.798-1.29-1.462-.992-2.36-2.093-2.687-3.3-.322-1.213-.125-2.523.6-3.925zm-11.478-7.533l2.472 1.22c-.345.872-.417 1.628-.22 2.26.208.637.672 1.183 1.4 1.635.775.482 1.455.68 2.043.596.6-.086 1.037-.346 1.306-.786a1.25 1.25 0 0 0 .19-.87c-.038-.302-.218-.655-.54-1.058-.22-.272-.75-.84-1.597-1.713-1.087-1.117-1.746-2.07-1.978-2.86-.323-1.11-.194-2.133.385-3.077a3.619 3.619 0 0 1 1.56-1.38c.674-.316 1.42-.413 2.23-.29.818.127 1.685.473 2.595 1.04 1.492.926 2.408 1.952 2.753 3.074.35 1.126.21 2.247-.427 3.365l-2.464-1.385c.275-.676.327-1.252.15-1.728-.168-.482-.59-.93-1.264-1.35-.697-.433-1.33-.628-1.9-.586-.37.025-.647.195-.838.504-.172.282-.204.594-.09.944.145.443.714 1.165 1.71 2.168.994 1 1.68 1.822 2.052 2.465.38.64.568 1.318.563 2.027.007.708-.227 1.437-.69 2.193a4.158 4.158 0 0 1-1.75 1.565c-.746.36-1.556.474-2.427.336-.865-.14-1.815-.536-2.848-1.175-1.498-.933-2.438-1.996-2.815-3.19-.374-1.2-.23-2.514.438-3.943zm-14.206-3.807l7.276-11.966 8.837 5.416-1.23 2.026-6.43-3.942-1.615 2.652 5.983 3.668-1.225 2.015-5.984-3.667-1.977 3.256 6.657 4.08-1.228 2.017-9.063-5.557zm-20.692-16.993l1.08-2.1 5.4 2.796-2.546 4.962c-.79.238-1.78.296-2.982.17a9.355 9.355 0 0 1-3.317-.986c-1.3-.673-2.29-1.528-2.976-2.572a5.911 5.911 0 0 1-.974-3.47 8.61 8.61 0 0 1 .977-3.703c.664-1.298 1.53-2.31 2.59-3.04 1.057-.727 2.25-1.09 3.57-1.09 1.008-.002 2.104.306 3.29.916 1.542.8 2.577 1.747 3.104 2.846.54 1.096.638 2.28.298 3.555l-2.728-.82c.14-.702.057-1.356-.25-1.957-.296-.606-.806-1.095-1.527-1.47-1.097-.567-2.146-.67-3.155-.305-1 .363-1.85 1.23-2.554 2.6-.76 1.48-1.005 2.76-.73 3.842.277 1.073.944 1.886 2.008 2.437.524.27 1.1.44 1.73.507.64.066 1.22.05 1.753-.05l.81-1.582-2.872-1.485zm-90.242-22.379l2.034-13.867 4.172.62 1.123 9.826 3.86-9.093 4.188.618-2.033 13.87-2.59-.382 1.6-10.918-4.343 10.512-2.685-.398-1.134-11.32-1.6 10.915-2.592-.382zm-14.108-1.638l1.305-13.96 10.307.974-.217 2.36-7.503-.706-.29 3.095 6.978.657-.22 2.352-6.98-.658-.353 3.8 7.764.73-.22 2.354-10.572-.998z"/><g stroke-opacity=".502"><path fill="#309e3a" d="M216.5 191.28c.04-1.43.284-2.62.736-3.58a6.649 6.649 0 0 1 1.346-1.884c.566-.552 1.18-.956 1.844-1.21.88-.347 1.888-.505 3.023-.475 2.056.06 3.682.744 4.877 2.057 1.205 1.315 1.775 3.114 1.714 5.395-.06 2.26-.72 4.017-1.982 5.264-1.26 1.24-2.914 1.834-4.963 1.777-2.077-.056-3.708-.736-4.9-2.037-1.19-1.308-1.755-3.078-1.694-5.307z"/><path fill="#f7ffff" d="M219.414 191.252c-.043 1.586.29 2.8.997 3.643.708.837 1.625 1.27 2.748 1.3 1.122.03 2.055-.35 2.794-1.138.745-.797 1.14-2.007 1.184-3.633.043-1.605-.277-2.813-.96-3.622-.676-.81-1.595-1.23-2.757-1.262-1.162-.03-2.11.345-2.843 1.128-.733.777-1.12 1.972-1.163 3.584z"/></g><g stroke-opacity=".502"><path fill="#309e3a" d="M233.052 198.51l.163-14.017 5.933.07c1.494.018 2.574.157 3.244.42.677.257 1.214.71 1.613 1.36s.593 1.385.584 2.215c-.013 1.052-.332 1.918-.956 2.598-.623.675-1.55 1.095-2.777 1.26.605.363 1.104.76 1.49 1.193.397.43.923 1.195 1.585 2.293l1.673 2.754-3.372-.04-2.002-3.074c-.71-1.098-1.198-1.788-1.46-2.072-.265-.29-.545-.487-.842-.593-.297-.11-.77-.17-1.418-.177l-.57-.008-.068 5.852-2.82-.033z"/><path fill="#fff" d="M235.976 190.455l2.086.024c1.353.016 2.198-.03 2.536-.142.337-.112.603-.305.796-.584s.293-.627.3-1.048c.004-.472-.118-.853-.37-1.142-.243-.296-.594-.486-1.05-.567-.23-.034-.915-.06-2.057-.072l-2.2-.026-.04 3.555z"/></g><g stroke-opacity=".502"><path fill="#309e3a" d="M249.003 185.188l5.147.26c1.16.06 2.04.195 2.64.405a4.68 4.68 0 0 1 2.036 1.396c.553.646.958 1.426 1.218 2.34.26.907.356 2.015.29 3.326-.058 1.153-.252 2.138-.58 2.96-.4 1-.938 1.797-1.618 2.396-.51.453-1.19.79-2.034 1.016-.632.166-1.468.222-2.51.17l-5.295-.27.706-14z"/><path fill="#fff" d="M251.706 187.685l-.468 9.274 2.103.105c.786.042 1.357.025 1.71-.046.46-.093.85-.268 1.16-.526.32-.26.59-.695.81-1.31.223-.62.36-1.47.416-2.553s0-1.918-.16-2.507c-.16-.59-.404-1.053-.73-1.397-.327-.342-.75-.583-1.27-.724-.39-.11-1.157-.193-2.306-.25l-1.264-.067z"/></g><g stroke-opacity=".502"><path fill="#309e3a" d="M317.63 210.22l3.26-13.63 4.4 1.06c1.666.402 2.737.732 3.21.99.73.392 1.274.996 1.634 1.81.36.81.41 1.755.152 2.84-.2.836-.518 1.504-.958 2-.438.5-.932.854-1.48 1.07-.54.212-1.064.31-1.57.3-.685-.028-1.65-.19-2.89-.49l-1.786-.432-1.23 5.142-2.743-.66z"/><path fill="#fff" d="M323.086 199.552l-.926 3.868 1.5.362c1.082.26 1.82.364 2.218.308a1.85 1.85 0 0 0 1.581-1.448c.12-.496.073-.94-.14-1.33a1.94 1.94 0 0 0-.957-.87c-.312-.143-.96-.332-1.95-.57l-1.324-.32z"/></g><g stroke-opacity=".502"><path fill="#309e3a" d="M330.606 214.106l4.64-13.22 5.598 1.98c1.408.498 2.387.98 2.937 1.445.56.463.923 1.064 1.093 1.807s.12 1.505-.156 2.286c-.348.992-.928 1.71-1.736 2.153-.806.438-1.817.537-3.032.298.457.54.802 1.076 1.03 1.61.238.536.49 1.43.765 2.683l.704 3.15-3.18-1.126-.913-3.556c-.322-1.27-.562-2.08-.72-2.435-.158-.36-.36-.638-.607-.834-.246-.202-.673-.41-1.286-.627l-.536-.192-1.938 5.52-2.66-.942z"/><path fill="#fff" d="M335.938 207.426l1.967.695c1.276.452 2.09.68 2.445.683.355.005.67-.093.943-.295.272-.2.478-.5.616-.896.155-.445.162-.845.017-1.2-.135-.36-.408-.65-.813-.876-.206-.106-.847-.35-1.924-.73l-2.075-.736-1.177 3.356z"/></g><g stroke-opacity=".502"><path fill="#309e3a" d="M347.01 213.6c.424-1.363.982-2.444 1.673-3.24a6.58 6.58 0 0 1 1.808-1.45c.696-.377 1.397-.598 2.102-.665.94-.093 1.953.03 3.038.37 1.965.614 3.344 1.717 4.14 3.308.803 1.593.867 3.48.19 5.658-.67 2.162-1.78 3.67-3.33 4.528-1.548.852-3.302.97-5.26.357-1.982-.62-3.37-1.718-4.164-3.294-.793-1.583-.858-3.44-.196-5.57z"/><path fill="#fff" d="M349.826 214.385c-.47 1.514-.48 2.773-.026 3.778.455.996 1.22 1.663 2.293 2 1.073.334 2.07.223 2.996-.336.932-.562 1.64-1.62 2.122-3.172.476-1.535.495-2.783.056-3.75-.432-.962-1.204-1.618-2.313-1.964-1.11-.347-2.123-.243-3.04.312-.915.548-1.61 1.592-2.09 3.133z"/></g><g stroke-opacity=".502"><path fill="#309e3a" d="M374.305 233.12l6.415-12.45 5.27 2.736c1.326.69 2.23 1.3 2.71 1.84.49.532.768 1.18.835 1.94s-.092 1.505-.47 2.242c-.48.934-1.153 1.564-2.017 1.892-.86.322-1.872.28-3.043-.128.378.598.645 1.18.8 1.74.158.564.288 1.484.387 2.763l.262 3.215-2.993-1.555-.415-3.648c-.145-1.304-.27-2.14-.378-2.512-.105-.377-.27-.682-.487-.91-.214-.233-.61-.5-1.186-.798l-.507-.264-2.677 5.197-2.505-1.3z"/><path fill="#fff" d="M380.503 227.226l1.853.962c1.2.625 1.977.962 2.33 1.016.35.054.675 0 .973-.162.296-.16.54-.428.733-.803.216-.42.276-.814.184-1.186-.087-.374-.315-.702-.685-.98-.19-.134-.79-.465-1.808-.993l-1.952-1.013-1.63 3.16z"/></g><g stroke-opacity=".502"><path fill="#309e3a" d="M426.107 258.704c.797-1.183 1.642-2.056 2.536-2.62a6.609 6.609 0 0 1 2.146-.862 5.45 5.45 0 0 1 2.2-.028c.93.184 1.864.596 2.805 1.235 1.704 1.156 2.708 2.612 3.014 4.366.31 1.758-.173 3.58-1.448 5.472-1.263 1.873-2.758 2.998-4.488 3.37-1.728.365-3.44-.028-5.14-1.182-1.718-1.168-2.732-2.622-3.04-4.362-.303-1.746.168-3.543 1.413-5.39z"/><path fill="#fff" d="M428.578 260.254c-.886 1.316-1.256 2.518-1.112 3.61.15 1.087.69 1.945 1.62 2.578.932.632 1.92.815 2.967.55 1.055-.27 2.037-1.077 2.944-2.425.896-1.33 1.273-2.52 1.13-3.572-.138-1.047-.688-1.898-1.65-2.552s-1.962-.85-3-.583c-1.033.26-1.998 1.06-2.9 2.394z"/></g><path fill="#309e3a" d="M301.824 204.523l2.248-9.84 7.268 1.675-.378 1.662-5.287-1.217-.504 2.18 4.926 1.136-.382 1.655-4.918-1.132-.614 2.677 5.475 1.26-.378 1.66-7.456-1.717z"/></g></svg>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h3>10,541</h3>
                                    <p class="mb-0">Brazilian Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between  flex-wrap">
                            <h4 class="card-title">Worldwide Users</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="text-secondary dropdown-toggle" id="dropdownMenuButton222" data-bs-toggle="dropdown" aria-expanded="false">
                                    This year
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton222">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902543.2003194243!2d-118.04220880485131!3d36.56083290513502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80be29b9f4abb783%3A0x4757dc6be1305318!2sInyo%20National%20Forest!5e0!3m2!1sen!2sin!4v1576668158879!5m2!1sen!2sin" height="280" allowfullscreen=""></iframe>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title">Calendar</h4>
                        </div>
                    </div>
                    <div class="card-body text-center pt-0">
                         <div class="input-group d-block datepicker-full-width custom-width">
                            <div class="inline_flatpickr"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                 <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title">Categories</h4>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mt-2 text-dark">
                                <h6>Video hosting</h6>
                                <small>62%</small>
                            </div>
                            <div class="shadow-none progress  w-100 mt-2" style="height: 6px">
                                <div class="progress-bar bg-danger" data-toggle="progress-bar" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mt-2 text-dark">
                                <h6>Image sharing</h6>
                                <small>46%</small>
                            </div>
                            <div class="shadow-none progress  w-100 mt-2" style="height: 6px">
                                <div class="progress-bar bg-info" data-toggle="progress-bar" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mt-2 text-dark">
                                <h6>Community blogs</h6>
                                <small>79%</small>
                            </div>
                            <div class="shadow-none progress  w-100 mt-2" style="height: 6px">
                                <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                         <div class="mb-3">
                            <div class="d-flex justify-content-between mt-2 text-dark">
                                <h6>Stories</h6>
                                <small>34%</small>
                            </div>
                            <div class="shadow-none progress  w-100 mt-2" style="height: 6px">
                                <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                         <div class="">
                            <div class="d-flex justify-content-between mt-2 text-dark">
                                <h6>Bookmarking</h6>
                                <small>95%</small>
                            </div>
                            <div class="shadow-none progress  w-100 mt-2" style="height: 6px">
                                <div class="progress-bar bg-warning" data-toggle="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title">Posts History</h4>
                        </div>
                    </div>
                    <div class="card-body text-center pt-0">
                        <div id="admin-chart-06" class="admin-chart-06"></div>
                        <p class="mb-0 mt-3 font-size-12 fw-500">58% of friends that visit your profile comment on your posts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
      </div>
      <div class="right-sidebar-mini right-sidebar">
         <div class="right-sidebar-panel p-0">
            <div class="card shadow-none m-0 h-100">
               <div class="card-body px-0 pt-0">
                  <div class="p-4">
                     <h6 class="fw-semibold m-0">Vue Globales</h6>
                     <div class="mt-4 iq-search-bar device-search ">
                        <form action="#" class="searchbox position-relative">
                           <a class="search-link" href="javascript:void(0);">
                              <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <circle cx="7.82491" cy="7.82495" r="6.74142" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M12.5137 12.8638L15.1567 15.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </a>
                           <input type="text" class="text search-input form-control bg-light-subtle"
                              placeholder="rechercher un user">
                        </form>
                     </div>
                  </div>
                  <div class="tabs">
                     <div class="nav nav-tabs right-sidebar-tabs" id="right-sidebar-tabs" role="tablist">
                        <button class="nav-link active" id="nav-friends-tab" data-bs-toggle="tab"
                           data-bs-target="#nav-friends" type="button" role="tab" aria-controls="nav-friends"
                           aria-selected="true">
                           <span class="text-body icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                 <path
                                    d="M9 9C8.175 9 7.46875 8.70625 6.88125 8.11875C6.29375 7.53125 6 6.825 6 6C6 5.175 6.29375 4.46875 6.88125 3.88125C7.46875 3.29375 8.175 3 9 3C9.825 3 10.5313 3.29375 11.1188 3.88125C11.7063 4.46875 12 5.175 12 6C12 6.825 11.7063 7.53125 11.1188 8.11875C10.5313 8.70625 9.825 9 9 9ZM3 15V12.9C3 12.475 3.10938 12.0844 3.32812 11.7281C3.54688 11.3719 3.8375 11.1 4.2 10.9125C4.975 10.525 5.7625 10.2344 6.5625 10.0406C7.3625 9.84688 8.175 9.75 9 9.75C9.825 9.75 10.6375 9.84688 11.4375 10.0406C12.2375 10.2344 13.025 10.525 13.8 10.9125C14.1625 11.1 14.4531 11.3719 14.6719 11.7281C14.8906 12.0844 15 12.475 15 12.9V15H3ZM4.5 13.5H13.5V12.9C13.5 12.7625 13.4656 12.6375 13.3969 12.525C13.3281 12.4125 13.2375 12.325 13.125 12.2625C12.45 11.925 11.7688 11.6719 11.0813 11.5031C10.3938 11.3344 9.7 11.25 9 11.25C8.3 11.25 7.60625 11.3344 6.91875 11.5031C6.23125 11.6719 5.55 11.925 4.875 12.2625C4.7625 12.325 4.67188 12.4125 4.60313 12.525C4.53438 12.6375 4.5 12.7625 4.5 12.9V13.5ZM9 7.5C9.4125 7.5 9.76563 7.35313 10.0594 7.05938C10.3531 6.76563 10.5 6.4125 10.5 6C10.5 5.5875 10.3531 5.23438 10.0594 4.94063C9.76563 4.64688 9.4125 4.5 9 4.5C8.5875 4.5 8.23438 4.64688 7.94063 4.94063C7.64688 5.23438 7.5 5.5875 7.5 6C7.5 6.4125 7.64688 6.76563 7.94063 7.05938C8.23438 7.35313 8.5875 7.5 9 7.5Z"
                                    fill="currentColor" />
                              </svg>
                           </span>
                           <span class="h6 font-size-14">Participant</span>
                        </button>
                        <button class="nav-link" id="nav-groups-tab" data-bs-toggle="tab" data-bs-target="#nav-groups"
                           type="button" role="tab" aria-controls="nav-groups" aria-selected="false">
                           <span class="text-body icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                 <path
                                    d="M0.75 15V12.9C0.75 12.475 0.859375 12.0844 1.07812 11.7281C1.29688 11.3719 1.5875 11.1 1.95 10.9125C2.725 10.525 3.5125 10.2344 4.3125 10.0406C5.1125 9.84688 5.925 9.75 6.75 9.75C7.575 9.75 8.3875 9.84688 9.1875 10.0406C9.9875 10.2344 10.775 10.525 11.55 10.9125C11.9125 11.1 12.2031 11.3719 12.4219 11.7281C12.6406 12.0844 12.75 12.475 12.75 12.9V15H0.75ZM14.25 15V12.75C14.25 12.2 14.0969 11.6719 13.7906 11.1656C13.4844 10.6594 13.05 10.225 12.4875 9.8625C13.125 9.9375 13.725 10.0656 14.2875 10.2469C14.85 10.4281 15.375 10.65 15.8625 10.9125C16.3125 11.1625 16.6563 11.4406 16.8938 11.7469C17.1313 12.0531 17.25 12.3875 17.25 12.75V15H14.25ZM6.75 9C5.925 9 5.21875 8.70625 4.63125 8.11875C4.04375 7.53125 3.75 6.825 3.75 6C3.75 5.175 4.04375 4.46875 4.63125 3.88125C5.21875 3.29375 5.925 3 6.75 3C7.575 3 8.28125 3.29375 8.86875 3.88125C9.45625 4.46875 9.75 5.175 9.75 6C9.75 6.825 9.45625 7.53125 8.86875 8.11875C8.28125 8.70625 7.575 9 6.75 9ZM14.25 6C14.25 6.825 13.9563 7.53125 13.3688 8.11875C12.7812 8.70625 12.075 9 11.25 9C11.1125 9 10.9375 8.98438 10.725 8.95312C10.5125 8.92188 10.3375 8.8875 10.2 8.85C10.5375 8.45 10.7969 8.00625 10.9781 7.51875C11.1594 7.03125 11.25 6.525 11.25 6C11.25 5.475 11.1594 4.96875 10.9781 4.48125C10.7969 3.99375 10.5375 3.55 10.2 3.15C10.375 3.0875 10.55 3.04688 10.725 3.02813C10.9 3.00938 11.075 3 11.25 3C12.075 3 12.7812 3.29375 13.3688 3.88125C13.9563 4.46875 14.25 5.175 14.25 6ZM2.25 13.5H11.25V12.9C11.25 12.7625 11.2156 12.6375 11.1469 12.525C11.0781 12.4125 10.9875 12.325 10.875 12.2625C10.2 11.925 9.51875 11.6719 8.83125 11.5031C8.14375 11.3344 7.45 11.25 6.75 11.25C6.05 11.25 5.35625 11.3344 4.66875 11.5031C3.98125 11.6719 3.3 11.925 2.625 12.2625C2.5125 12.325 2.42188 12.4125 2.35313 12.525C2.28438 12.6375 2.25 12.7625 2.25 12.9V13.5ZM6.75 7.5C7.1625 7.5 7.51563 7.35313 7.80938 7.05938C8.10313 6.76563 8.25 6.4125 8.25 6C8.25 5.5875 8.10313 5.23438 7.80938 4.94063C7.51563 4.64688 7.1625 4.5 6.75 4.5C6.3375 4.5 5.98438 4.64688 5.69063 4.94063C5.39688 5.23438 5.25 5.5875 5.25 6C5.25 6.4125 5.39688 6.76563 5.69063 7.05938C5.98438 7.35313 6.3375 7.5 6.75 7.5Z"
                                    fill="currentColor" />
                              </svg>
                           </span>
                           <span class="h6 font-size-14">Gerants</span>
                        </button>
                     </div>
                  </div>
                  <div class="media-height" data-scrollbar="init">
                     <div class="tab-content right-sidebar-tabs-content" id="right-sidebar-tabs">
                        <div class="tab-pane fade show active" id="nav-friends" role="tabpanel"
                           aria-labelledby="nav-friends-tab" tabindex="0">
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg"
                                       alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">Alain</h6>
                                 </div>
                              </div>
                           </div>


                           <div class="tab-pane fade show active" id="nav-friends" role="tabpanel"
                           aria-labelledby="nav-friends-tab" tabindex="0">
                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg"
                                       alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">Dieng</h6>
                                 </div>
                              </div>
                           </div>
                           

                           <div class="d-flex align-items-center justify-content-between chat-tabs-content border-bottom" data-target="chat-popup-modal">
                              <div class="d-flex align-items-center gap-3">
                                    <img class="rounded-circle avatar-50" src="../assets/images/user/16.jpg"
                                       alt="user-img" loading="lazy">
                                 </div>
                                 <div>
                                    <h6 class="font-size-14 mb-0 fw-semibold">Ibou Sy</h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                     
                           
                          
                        </div>
                     </div>
                  </div>
                  <div class="conversion-button">
                     <a href="../app/chat.html" class="btn btn-primary w-100 py-3 d-block rounded-0">Listes USers</a>
                  </div>
                 
               </div>
            </div>
         </div>
      </div>

      Vue Globales
      
      <div class="chat-popup-modal" id="chat-popup-modal">
         <div class="bg-primary p-3 d-flex align-items-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-3">
               <div class="image flex-shrink-0">
                  <img src="../assets/images/user/13.jpg" alt="img" class="img-fluid avatar-45 rounded-circle object-cover">
               </div>
               <div class="content">
                  <h6 class="mb-0 font-size-14 text-white">Bob Frapples</h6>
                  <span class="d-inline-block lh-1 font-size-12 text-white"><span class="d-inline-block rounded-circle bg-success border-5 p-1 align-baseline me-1"></span>Avaliable</span>
               </div>
            </div>
            <div class="chat-popup-modal-close lh-1" type="button">
               <span class="material-symbols-outlined font-size-18 text-white">
                  close
               </span>
            </div>
         </div>
         <div class="chat-popup-body p-3 border-bottom">
            <ul class="list-inline p-0 mb-0 chat">
               <li>
                  <div class="text-center">
                     <span class="time font-size-12 text-primary">Today</span>
                  </div>
               </li>
               <li class="mt-2">
                  <div class="text-start">
                     <div class="d-inline-block py-2 px-3 bg-gray-subtle chat-popup-message font-size-12 fw-medium">
                        Hello, How Are you Doing Today?
                     </div>
                     <span class="mt-1 d-block time font-size-10 fst-italic">03:41 PM</span>
                  </div>
               </li>
               <li class="mt-3">
                  <div class="text-end">
                     <div class="d-inline-block py-2 px-3 bg-primary-subtle chat-popup-message message-right font-size-12 fw-medium">
                        Hello, I'm Doing Well.
                     </div>
                     <span class="mt-1 d-block time font-size-10 fst-italic">03:42 PM</span>
                  </div>
               </li>
            </ul>
         </div>
         <div class="chat-popup-footer p-3">
            <div class="chat-popup-form">
               <form>
                  <input type="text" class="form-control" placeholder="Start Typing...">
                  <button type="submit" class="chat-popup-form-button btn btn-primary">
                     <span class="material-symbols-outlined font-size-18 icon-rtl">
                        send
                     </span>
                  </button>
               </form>
            </div>
         </div>
      </div>    </div>
  </main>

  
  <footer class="iq-footer">
     <div class="container-fluid">
        <div class="row">
           <div class="col-lg-6">
              <ul class="list-inline mb-0">
                 <li class="list-inline-item"><a href="../dashboard/privacy-policy.html">Privacy Policy</a></li>
                 <li class="list-inline-item ms-3 ms-md-5"><a href="../dashboard/terms-of-service.html">Terms of Use</a></li>
              </ul>
              </div>
              <div class="col-lg-6 d-flex justify-content-end">
              Copyright <script>document.write(new Date().getFullYear())</script>
              <a href="../index.html" class="mx-1">SocialV</a>
              All Rights Reserved.
         </div>
         </div>
        </div>
     </footer>
  <!-- Wrapper End-->
  <!-- offcanvas start -->

  <!-- Live Customizer start -->
  <!-- Setting offcanvas start here -->
  <div class="offcanvas offcanvas-end live-customizer" tabindex="-1" id="live-customizer" data-bs-backdrop="false" data-bs-scroll="true" aria-labelledby="live-customizer-label">
      <div class="offcanvas-header pb-0">
          <div class="d-flex align-items-center">
              <h4 class="offcanvas-title" id="live-customizer-label">Setting Panel</h4>
          </div>
          <div class="close-icon" data-bs-dismiss="offcanvas">
              <svg xmlns="http://www.w3.org/2000/svg"  width="24px" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
          </div>
      </div>
      <div class="offcanvas-body data-scrollbar">
          <div class="row">
              <div class="col-lg-12">
                  <div>
                      <div class="text-center mb-4">
                          <h5 class="d-inline-block">Style Setting</h5>
                      </div>
                      <div>
                          <!-- Theme start here -->
                          <div class="mb-4">
                              <h5 class="mb-3">Theme</h5>
                              <div class=" mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100" >
                                      <input class="form-check-input custum-redio-btn" type="radio" value="light" name="theme_scheme" id="color-mode-light" checked>
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between" for="color-mode-light">
                                         <span>Light Theme</span> 
                                          <div class="text-primary ">
                                              <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="white"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"/>
                                              </svg>
                                          </div>
                                      </label>
                                  </div>
                              </div>
                               <div class=" mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100 ">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="dark"  name="theme_scheme" id="color-mode-dark">
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="color-mode-dark">
                                         <span>Dark Theme</span>
                                         <div class="text-primary ">
                                             <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"/>
                                              </svg>
                                         </div>                                    
                                      </label>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between" data-setting="radio">
                                  <div class="form-check mb-0 w-100">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="auto"  name="theme_scheme" id="color-mode-auto">
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="color-mode-auto">
                                         <span>Device Default</span> 
                                         <div class="text-primary ">
                                              <svg class="rounded" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  <g clip-path="url(#clip0_507_92)">
                                                  <rect width="30" height="27" fill="white"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  </g>
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"/>
                                                  <defs>
                                                  <clipPath id="clip0_507_92">
                                                  <rect width="30" height="27" fill="white"/>
                                                  </clipPath>
                                                  </defs>
                                              </svg>
                                         </div>
                                      </label>
                                  </div>
                                  
                              </div>
                          </div>
                          <!-- Color customizer end here -->
                          <hr class="hr-horizontal">
                          <!-- Menu Style start here -->
                          <div>
                              <h5 class="mt-4 mb-3">Menu Style</h5>
                              <div class="d-grid gap-3 grid-cols-3 mb-4">
                                  <div data-setting="checkbox" class="text-center">
                                      <input type="checkbox" value="sidebar-mini" class="btn-check" name="sidebar_type" id="sidebar-mini">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-mini">
                                          Mini
                                      </label>
                                  </div>
                                  <div data-setting="checkbox" class="text-center">
                                      <input type="checkbox" value="sidebar-hover" data-extra="{target: '.sidebar', ClassListAdd: 'sidebar-mini'}"
                                          class="btn-check" name="sidebar_type" id="sidebar-hover">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-hover">
                                          Hover
                                      </label>
                                  </div>
                                  <div data-setting="checkbox" class="text-center">
                                      <input type="checkbox" value="sidebar-soft" class="btn-check" name="sidebar_type" id="sidebar-soft">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-soft">
                                          Soft
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <!-- Menu Style end here -->
  
                          <hr class="hr-horizontal">
  
                          <!-- Active Menu Style start here -->
  
                          <div class="mb-4">
                              <h5 class="mt-4 mb-3">Active Menu Style</h5>
                              <div class="d-grid gap-3 grid-cols-2">
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-rounded" class="btn-check" name="sidebar_menu_style" id="navs-rounded">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded">
                                          Rounded One
                                      </label>
                                  </div>
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-rounded-all" class="btn-check" name="sidebar_menu_style" id="navs-rounded-all">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded-all">
                                          Rounded All
                                      </label>
                                  </div>
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-pill" class="btn-check" name="sidebar_menu_style" id="navs-pill">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill">
                                          Pill One Side
                                      </label>
                                  </div>
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-pill-all" class="btn-check" name="sidebar_menu_style" id="navs-pill-all">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill-all">
                                          Pill All
                                      </label>
                                  </div>
                              </div>
                          </div>
                           <hr class="hr-horizontal">
                          <!-- Color customizer start here -->
                          <div>
                              <div class="d-flex align-items-center justify-content-between">
                                  <h6 class="mt-4 mb-3">Color Customizer</h6>
                                  <div class="d-flex align-items-center">
                                      <a href="#custom-color" data-bs-toggle="collapse" role="button"
                                          aria-expanded="false" aria-controls="custom-color">Custom</a>
                                      <div data-setting="radio">
                                          <input type="radio" value="default" class="btn-check"
                                              name="theme_color" id="default"
                                              data-colors='{"primary": "#7093e5", "secondary": "#f68685"}'>
                                          <label class="btn bg-transparent px-2 border-0" for="default"
                                              data-bs-toggle="tooltip" data-bs-placement="top" title="Reset Color"
                                              data-bs-original-title="Reset color">
                                              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z"
                                                      fill="#31BAF1" />
                                                  <path
                                                      d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z"
                                                      fill="#0169CA" />
                                              </svg>
                                          </label>
                                      </div>
                                  </div>
                              </div>
                              <div class="collapse" id="custom-color">
                                  <div class="form-group d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-primary-color">Primary</label>
                                      <input class="" name="theme_color" data-extra="primary" type="color"
                                          id="custom-primary-color" value="#50b5ff" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-secondary-color">Secondary</label>
                                      <input class="" name="theme_color" data-extra="secondary" type="color"
                                          id="custom-secondary-color" value="#6c757d" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-success-color">Success</label>
                                      <input class="" name="theme_color" data-extra="success" type="color"
                                          id="custom-success-color" value="#2dcdb2" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-danger-color">Danger</label>
                                      <input class="" name="theme_color" data-extra="danger" type="color"
                                          id="custom-danger-color" value="#ff9b8a" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-warning-color">Warning</label>
                                      <input class="" name="theme_color" data-extra="warning" type="color"
                                          id="custom-warning-color" value="#ffba68" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-info-color">Info</label>
                                      <input class="" name="theme_color" data-extra="info" type="color"
                                          id="custom-info-color" value="#d592ff" data-setting="color">
                                  </div>                                
                              </div>
                              <div class="grid-cols-5 mb-4 d-grid gap-3">
                                  <div data-setting="radio">
                                      <input type="radio" value="color-1" class="btn-check" name="theme_color"
                                          id="theme-color-1">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-1"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-1"
                                          data-bs-original-title="Theme-1">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#4285F4" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#EA4335" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="color-2" class="btn-check" name="theme_color"
                                          id="theme-color-2">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-2"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-2"
                                          data-bs-original-title="Theme-2">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#FF4500" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#1A73E8" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="color-3" class="btn-check" name="theme_color"
                                          id="theme-color-3">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-3"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-3"
                                          data-bs-original-title="Theme-3">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#8755f2" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#EE4266" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="color-4" class="btn-check" name="theme_color"
                                          id="theme-color-4">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-4"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-4"
                                          data-bs-original-title="Theme-4">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#0A66C2" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#333333" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="color-5" class="btn-check" name="theme_color"
                                          id="theme-color-5">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-5"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-5"
                                          data-bs-original-title="Theme-5">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#00b75a" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#000000" />
                                          </svg>
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <!-- Color customizer end here -->
  
                            <!-- Theme end here -->
                          <hr class="hr-horizontal">
                          <div>
                              <h5 class="mb-3 mt-4">Direction</h5>
                              <div class=" mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="ltr" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-ltr" checked>
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="theme-scheme-direction-ltr">
                                         <span>LTR</span>
                                          <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <circle cx="11.5" cy="13.5002" r="6.5" fill="currentColor"/>
                                              <rect x="21" y="7.70026" width="34" height="5" rx="2" fill="#80868B"/>
                                              <rect opacity="0.5" x="21" y="16.1003" width="25.6281" height="3.2" rx="1.6" fill="#80868B"/>
                                              <rect x="0.375" y="0.375244" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"/>
                                          </svg>
                                      </label>
                                  </div>
                                 
                              </div>
                               <div class="mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="rtl" class="btn-check" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-rtl">
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between "  for="theme-scheme-direction-rtl">
                                          <span>RTL</span>
                                          <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <circle r="6.5" transform="matrix(-1 0 0 1 48.5 13.5002)" fill="currentColor"/>
                                              <rect width="34" height="5" rx="2" transform="matrix(-1 0 0 1 39 7.70026)" fill="#80868B"/>
                                              <rect opacity="0.5" width="25.6281" height="3.2" rx="1.6" transform="matrix(-1 0 0 1 39 16.1003)" fill="#80868B"/>
                                              <rect x="-0.375" y="0.375" width="59.25" height="26.25" rx="4.125" transform="matrix(-1 0 0 1 59.25 0.000244141)" stroke="currentColor" stroke-width="0.75"/>
                                          </svg>
                                      </label>
                                  </div>
                                  
                              </div>
                          </div>
                          <!-- Theme end here -->
                          <!-- Active Menu Style end here -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Settings sidebar end here -->
  
  <a class="btn btn-fixed-end btn-danger btn-icon btn-setting" id="settingbutton"
      data-bs-toggle="offcanvas" data-bs-target="#live-customizer" role="button" aria-controls="live-customizer">
      <span class="icon material-symbols-outlined animated-rotate text-white">
          settings
      </span>
zzz
  <!-- Share Modal -->
  <div class="modal fade sharemodal" id="share-btn" tabindex="-1" aria-labelledby="share-btnLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
           <div class="modal-header">
              <h3 class="modal-title" id="share-btnLabel">Share</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body mt-4">
              <div class="row gy-3">
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/embed.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Embed</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/whatsapp.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">WhatsApp</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/facebook.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Facebook</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/twitter.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Twitter</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/pinterest.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Pinterest</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/linkedin.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">LinkedIn</h6>
                    </a>
                 </div>
              </div>
              <div class="mt-4">
                 <div class="share-form">
                    <input type="text" class="form-control" value="https://iqonic.design/">
                    <button class="btn btn-link share-link-btn h6 m-0 fw-semibold">Copy</button>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
  
  
  
  
  
  <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn2" aria-labelledby="share-BottomLabel">
     <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="share-BottomLabel">Share</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body small">
        <div class="d-flex flex-wrap align-items-center">
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/08.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Facebook</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/09.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Twitter</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/10.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Instagram</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/11.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Google Plus</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/13.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>In</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/12.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>YouTube</h6>
           </div>
        </div>
     </div>
  </div>

  <!-- Backend Bundle JavaScript -->
  <script src="../assets/js/libs.min.js"></script>
  <!-- Lodash Utility -->
  <script src="../assets/vendor/lodash/lodash.min.js"></script>
  <!-- Utilities Functions -->
  <script src="../assets/js/setting/utility.js"></script>
  <!-- Settings Script -->
  <script src="../assets/js/setting/setting.js"></script>
  <!-- Settings Init Script -->
  <script src="../assets/js/setting/setting-init.js" defer></script>
  <!-- slider JavaScript -->
  <script src="../assets/js/slider.js"></script>
  <!-- masonry JavaScript --> 
  <script src="../assets/js/masonry.pkgd.min.js"></script>
  <!-- SweetAlert JavaScript -->
  <script src="../assets/js/enchanter.js"></script>
  <!-- Sweet-alert Script -->
  <script src="../assets/vendor/sweetalert2/dist/sweetalert2.min.js" async></script>
  <script src="../assets/js/sweet-alert.js" defer></script>
  <!-- Chart Custom JavaScript -->
  <!-- app JavaScript -->
  <script src="../assets/js/charts/weather-chart.js"></script>
  <script src="../assets/js/app.js"></script>
  <!-- Flatpickr Script -->
  <script src="../assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
  <!-- fslightbox Script -->
  <script src="../assets/js/fslightbox.js" defer></script> 
  <!-- vanilla Script -->
  <script src="../assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
  <!--lottie Script -->
  <script src="../assets/js/lottie.js"></script>
  <!--select2 Script -->
  <script src="../assets/js/select2.js"></script>
  <!--ecommerce Script -->
  <script src="../assets/js/ecommerce.js"></script>
  

<!--admin script-->
<script src="../assets/js/charts/admin.js"></script>
</body>

</html>