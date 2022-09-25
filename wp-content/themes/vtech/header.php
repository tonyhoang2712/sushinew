<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vtech</title>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/plugins/bootstrap@5.2.1/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/plugins/swiper@8/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/styles/home.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/styles/common.css" rel="stylesheet">
</head>
<body>
    <header>
        <section class="desktop fixed-top bg-white shadow">
            <div class="container">
                <nav class="navbar navbar-expand-lg sticky-top bg-white d-flex justify-content-around">
                    <a class="navbar-brand" href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="logo" class="img-fluid"></a>
                    <ul class="nav">
                        <li class="nav-item pr-4 fw-bold"><a href="#" class="nav-link link-dark px-2 active" aria-current="page">Trang Chủ</a></li>
                        <li class="nav-item px-4 fw-bold"><a href="#" class="nav-link link-dark px-2">Dịch Vụ</a></li>
                        <li class="nav-item px-4 fw-bold"><a href="#" class="nav-link link-dark px-2">Dự Án Hoàn Thành</a></li>
                        <li class="nav-item px-4 fw-bold"><a href="#" class="nav-link link-dark px-2">Sản Phẩm</a></li>
                        <li class="nav-item px-4 fw-bold"><a href="#" class="nav-link link-dark px-2">Công Nghệ</a></li>
                        <li class="nav-item px-3">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle btn-sm rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span><img class="align-text-top img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/flags/vn.png" alt="vn"></span>
                                    <span class="px-2 align-bottom">Vietnamese</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item mb-3 active" href="#"><img class="align-bottom img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/flags/vn-1.png" alt="vn"><small class="px-3">Vietnamese</small></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><img class="align-bottom img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/flags/us-1.png" alt="us"><small class="px-3">English</small></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item contact"><a href="#" class="nav-link link-dark px-2 border rounded-pill text-center">Liên Hệ</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="mobile position-relative" style="display: none">
            <div class="d-flex justify-content-between align-items-center">
                <a data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvasMenu">
                    <span class="menu" data-class="left">
                        <span class="line"></span>
                        <span class="line short"></span>
                        <span class="line"></span>
                    </span>
                </a>
                <a class="px-3" href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="logo" class="img-fluid"></a>
                <div class="contact"><a href="#" class="px-4 py-2 rounded-pill text-center text-decoration-none">Liên Hệ</a></div>
            </div>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasMenu">
                <div class="offcanvas-header justify-content-start">
                    <a data-bs-dismiss="offcanvas" aria-label="Close" type="button">
                        <span class="menu" data-class="left">
                            <span class="line"></span>
                            <span class="line short"></span>
                            <span class="line"></span>
                        </span>
                    </a>
                    <a class="px-5 mx-3" href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="logo" class="img-fluid"></a>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav d-flex flex-column mb-3">
                        <li class="nav-item fw-bold"><a href="#" class="nav-link link-dark px-2 active" aria-current="page">Trang Chủ</a></li>
                        <li class="nav-item fw-bold"><a href="#" class="nav-link link-dark px-2">Dịch Vụ</a></li>
                        <li class="nav-item fw-bold"><a href="#" class="nav-link link-dark px-2">Dự Án Hoàn Thành</a></li>
                        <li class="nav-item fw-bold"><a href="#" class="nav-link link-dark px-2">Sản Phẩm</a></li>
                        <li class="nav-item fw-bold"><a href="#" class="nav-link link-dark px-2">Công Nghệ</a></li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle btn-sm rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span><img class="align-text-top img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/flags/vn.png" alt="vn"></span>
                                    <span class="px-2 align-bottom">Vietnamese</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item mb-3 active" href="#"><img class="align-bottom img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/flags/vn-1.png" alt="vn"><small class="px-3">Vietnamese</small></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><img class="align-bottom img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/flags/us-1.png" alt="us"><small class="px-3">English</small></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        
    </header>