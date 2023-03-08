
@extends('admin.layout.template')
@section('page_title')
    Dashboard -Add-Services
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>

<title>Booking Status</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="csrf-token" content="0PxKN2AZQJNcleYHMFUM7L8N0YvfAwFWndaFmiKc">

<link rel="shortcut icon" href="https://demandium-admin.6amtech.com/storage/app/public/business/2022-10-10-6343e0bce2787.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

<link href="https://demandium-admin.6amtech.com/public/assets/admin-module/css/material-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://demandium-admin.6amtech.com/public/assets/admin-module/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://demandium-admin.6amtech.com/public/assets/admin-module/plugins/perfect-scrollbar/perfect-scrollbar.min.css" />


<link rel="stylesheet" href="https://demandium-admin.6amtech.com/public/assets/admin-module/plugins/apex/apexcharts.css" />
<link rel="stylesheet" href="https://demandium-admin.6amtech.com/public/assets/admin-module/plugins/select2/select2.min.css" />

<link rel="stylesheet" href="https://demandium-admin.6amtech.com/public/assets/admin-module/css/toastr.css">

<link rel="stylesheet" href="https://demandium-admin.6amtech.com/public/assets/admin-module/css/style.css" />
<link rel="stylesheet" href="https://demandium-admin.6amtech.com/public/assets/admin-module/css/dev.css" />

</head>
<body>

<div class="offcanvas-overlay"></div>


<div class="preloader"></div>


<header class="header fixed-top">
<div class="container-fluid">
<div class="row align-items-center justify-content-between">
<div class="col-2">

<div class="header-toogle-menu">
<button class="toggle-menu-button aside-toggle border-0 bg-transparent p-0 dark-color">
<span class="material-icons">menu</span>
</button>
</div>

</div>
<div class="col-10">

<div class="header-right">
<ul class="nav justify-content-end align-items-center gap-30">
<li>
<button class="toggle-search-btn px-0 d-sm-none">
<span class="material-icons">search</span>
</button>

<form action="#" class="search-form" autocomplete="off">
<div class="input-group position-relative search-form__input_group">
<span class="search-form__icon">
<span class="material-icons">search</span>
</span>
<input type="search" class="theme-input-style search-form__input" id="search-form__input" placeholder="Search Here" />
<div class="dropdown-menu rounded">
<div class="show-search-result">
<a href="https://demandium-admin.6amtech.com/admin/banner/create" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
banner create
</a>
<a href="https://demandium-admin.6amtech.com/admin/booking/list" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
booking list
</a>
<a href="https://demandium-admin.6amtech.com/admin/campaign/create" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
campaign create
</a>
<a href="https://demandium-admin.6amtech.com/admin/campaign/list" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
campaign list
</a>
<a href="https://demandium-admin.6amtech.com/admin/category/childes" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
category childes
</a>
<a href="https://demandium-admin.6amtech.com/admin/category/create" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
category create
</a>
<a href="https://demandium-admin.6amtech.com/admin/configuration/get-email-config" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
configuration get-email-config
</a>
<a href="https://demandium-admin.6amtech.com/admin/configuration/get-third-party-config" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
configuration get-third-party-config
</a>
<a href="https://demandium-admin.6amtech.com/admin/coupon/create" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
coupon create
</a>
<a href="https://demandium-admin.6amtech.com/admin/coupon/list" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
coupon list
</a>
<a href="https://demandium-admin.6amtech.com/admin/customer/create" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
customer create
</a>
 <a href="https://demandium-admin.6amtech.com/admin/customer/list" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
customer list
</a>
<a href="https://demandium-admin.6amtech.com/admin/dashboard" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
dashboard
</a>
<a href="https://demandium-admin.6amtech.com/admin/discount/create" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
discount create
</a>
<a href="https://demandium-admin.6amtech.com/admin/discount/list" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
discount list
</a>
<a href="https://demandium-admin.6amtech.com/admin/employee/create" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
employee create
</a>
<a href="https://demandium-admin.6amtech.com/admin/employee/list" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
employee list
</a>
<a href="https://demandium-admin.6amtech.com/admin/provider/create" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
provider create
</a>
<a href="https://demandium-admin.6amtech.com/admin/provider/list" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
provider list
</a>
<a href="https://demandium-admin.6amtech.com/admin/provider/onboarding-request" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
provider onboarding-request
</a>
<a href="https://demandium-admin.6amtech.com/admin/push-notification/create" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
push-notification create
</a>
<a href="https://demandium-admin.6amtech.com/admin/role/create" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
role create
</a>
<a href="https://demandium-admin.6amtech.com/admin/service/create" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
service create
</a>
<a href="https://demandium-admin.6amtech.com/admin/service/list" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
service list
</a>
<a href="https://demandium-admin.6amtech.com/admin/sub-category/create" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
sub-category create
</a>
<a href="https://demandium-admin.6amtech.com/admin/transaction/list" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
transaction list
</a>
<a href="https://demandium-admin.6amtech.com/admin/withdraw/list" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
withdraw list
</a>
<a href="https://demandium-admin.6amtech.com/admin/zone/create" class="dropdown-item-text title-color hover-color-c2 text-capitalize">
zone create
</a>
</div>
</div>
</div>
</form>

</li>
<li>

<div class="messages">
<a href="https://demandium-admin.6amtech.com/admin/chat/index" class="header-icon count-btn">
<span class="material-icons">sms</span>
<span class="count" id="message_count">0</span>
</a>
</div>

</li>
<li>

<div class="user mt-n1">
<a href="#" class="header-icon user-icon" data-bs-toggle="dropdown">
<img width="30" height="30" src="https://demandium-admin.6amtech.com/storage/app/public/user/profile_image/2022-10-10-6343e15dbc669.png" onerror="this.src='https://demandium-admin.6amtech.com/public/assets/admin-module/img/user2x.png'" class="rounded-circle" alt="">
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="https://demandium-admin.6amtech.com/admin/profile-update" class="dropdown-item-text media gap-3 align-items-center">
<div class="avatar">
<img class="avatar-img rounded-circle" width="50" height="50" src="https://demandium-admin.6amtech.com/storage/app/public/user/profile_image/2022-10-10-6343e15dbc669.png" onerror="this.src='https://demandium-admin.6amtech.com/public/assets/provider-module/img/user2x.png'" alt="">
</div>
<div class="media-body ">
<h5 class="card-title">John</h5>
<span class="card-text"><span class="__cf_email__" data-cfemail="ef8e8b828681af8e8b828681c18c8082">[email&#160;protected]</span></span>
</div>
</a>
<a class="dropdown-item" href="https://demandium-admin.6amtech.com/admin/profile-update">
<span class="text-truncate" title="Settings">Settings</span>
</a>
<a class="dropdown-item" href="https://demandium-admin.6amtech.com/admin/auth/logout">
<span class="text-truncate" title="Sign Out">Sign Out</span>
</a>
</div>
</div>

</li>
</ul>
</div>

</div>
</div>
</div>
</header>


<aside class="aside">

<div class="aside-header">


<a href="https://demandium-admin.6amtech.com/admin/dashboard" class="logo d-flex gap-2">
<img src="https://demandium-admin.6amtech.com/storage/app/public/business/2022-10-09-6341713d7320e.png" onerror="this.src='https://demandium-admin.6amtech.com/public/assets/placeholder.png'" alt="" class="main-logo">
<img src="https://demandium-admin.6amtech.com/storage/app/public/business/2022-10-09-6341713d7320e.png" onerror="this.src='https://demandium-admin.6amtech.com/public/assets/placeholder.png'" alt="" class="mobile-logo">
</a>



<button class="toggle-menu-button aside-toggle border-0 bg-transparent p-0 dark-color">
<span class="material-icons">menu</span>
</button>

</div>


<div class="aside-body" data-trigger="scrollbar">
<div class="user-profile media gap-3 align-items-center my-3">
<div class="avatar">
<img class="avatar-img rounded-circle" src="https://demandium-admin.6amtech.com/storage/app/public/user/profile_image/2022-10-10-6343e15dbc669.png" onerror="this.src='https://demandium-admin.6amtech.com/public/assets/admin-module/img/media/upload-file.png'" alt="">
</div>
<div class="media-body ">
<h5 class="card-title"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ffefbf2f6f1dffefbf2f6f1b1fcf0f2">[email&#160;protected]</a></h5>
<span class="card-text">super-admin</span>
</div>
</div>

<ul class="nav">
<li class="nav-category">Main</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/dashboard" class="">
<span class="material-icons" title="Dashboard">dashboard</span>
<span class="link-title">Dashboard</span>
</a>
</li>
<li class="nav-category" title="Service management">
Service management
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/zone/create" class="">
<span class="material-icons" title="Service zones">map</span>
<span class="link-title">Service zones</span>
</a>
</li>
<li class="has-sub-item ">
<a href="#" class="">
<span class="material-icons" title="Service Categories">category</span>
<span class="link-title">Service categories</span>
</a>

<ul class="nav sub-menu">
<li>
<a href="https://demandium-admin.6amtech.com/admin/category/create" class="">
Category setup
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/sub-category/create" class="">
Sub category setup
</a>
</li>
</ul>

</li>
<li class="has-sub-item ">
<a href="#" class="">
<span class="material-icons" title="Services">design_services</span>
<span class="link-title">Services</span>
</a>

<ul class="nav flex-column sub-menu">
<li>
<a href="https://demandium-admin.6amtech.com/admin/service/list" class="">
Service list
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/service/create" class="">
Add new service
</a>
</li>
</ul>

</li>
<li class="nav-category" title="Promotion management">
Promotion management
</li>
<li class="has-sub-item ">
<a href="#" class="">
<span class="material-icons" title="Discounts">redeem</span>
<span class="link-title">Discounts</span>
</a>

<ul class="nav sub-menu">
<li>
<a href="https://demandium-admin.6amtech.com/admin/discount/list" class="">
Discount list
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/discount/create" class="">
Add new discount
</a>
</li>
</ul>

</li>
<li class="has-sub-item ">
<a href="#" class="">
<span class="material-icons" title="Coupons">sell</span>
<span class="link-title">Coupons</span>
</a>

<ul class="nav sub-menu">
<li>
<a href="https://demandium-admin.6amtech.com/admin/coupon/list" class="">
Coupon list
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/coupon/create" class="">
Add new coupon
</a>
</li>
</ul>

</li>
<li class="has-sub-item ">
<a href="#" class="">
<span class="material-icons" title="Campaigns">campaign</span>
<span class="link-title">Campaigns</span>
</a>

<ul class="nav sub-menu">
<li>
<a href="https://demandium-admin.6amtech.com/admin/campaign/list" class="">
Campaign list
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/campaign/create" class="">
Add new campaign
</a>
</li>
</ul>

</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/banner/create" class="">
<span class="material-icons" title="Promotional banners">flag</span>
<span class="link-title">Promotional banners</span>
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/push-notification/create" class="">
<span class="material-icons" title="Push notification">notifications</span>
<span class="link-title">Push notification</span>
</a>
</li>
<li class="nav-category" title="Booking management">
Booking management
</li>
<li class="has-sub-item sub-menu-opened">
<a href="#" class="active-menu">
<span class="material-icons" title="Bookings">calendar_month</span>
<span class="link-title">Bookings</span>
</a>

<ul class="nav sub-menu">
<li><a href="https://demandium-admin.6amtech.com/admin/booking/list?booking_status=pending" class=""><span class="link-title">Booking Requests <span class="count">18</span></span></a>
</li>
<li><a href="https://demandium-admin.6amtech.com/admin/booking/list?booking_status=accepted" class=""><span class="link-title">Accepted <span class="count">3</span></span></a>
</li>
<li><a href="https://demandium-admin.6amtech.com/admin/booking/list?booking_status=ongoing" class=""><span class="link-title">Ongoing <span class="count">3</span></span></a>
</li>
<li><a href="https://demandium-admin.6amtech.com/admin/booking/list?booking_status=completed" class=""><span class="link-title">Completed <span class="count">15</span></span></a>
</li>
<li><a href="https://demandium-admin.6amtech.com/admin/booking/list?booking_status=canceled" class=""><span class="link-title">Canceled <span class="count">4</span></span></a>
 </li>
</ul>

</li>
<li class="nav-category" title="Provider management">
Provider management
</li>
<li class="has-sub-item  ">
<a href="#" class="">
<span class="material-icons" title="Providers">engineering</span>
<span class="link-title">Providers</span>
</a>

<ul class="nav sub-menu">
<li>
<a href="https://demandium-admin.6amtech.com/admin/provider/list?status=all" class="">Provider List</a>
</li>
<li><a href="https://demandium-admin.6amtech.com/admin/provider/create" class="">Add New Provider</a></li>
</ul>

</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/withdraw/list" class="">
<span class="material-icons" title="Withdraw requests">money</span>
<span class="link-title">Withdraw requests</span>
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/provider/onboarding-request?status=onboarding" class="">
<span class="material-icons" title="Onboarding Request">description</span>
<span class="link-title">Onboarding Request <span class="count">3</span></span>
</a>
</li>
<li class="nav-category" title="System management">System management</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/business-settings/get-business-information" class="">
<span class="material-icons" title="Business Settings">business_center</span>
<span class="link-title">Business settings</span>
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/business-settings/get-landing-information" class="">
<span class="material-icons" title="Business Settings">rocket_launch</span>
<span class="link-title">Landing page settings</span>
</a>
</li>
<li class="has-sub-item ">
<a href="#" class="">
<span class="material-icons" title="Configurations">settings</span>
<span class="link-title">Configurations</span>
</a>

<ul class="nav sub-menu">
<li>
<a href="https://demandium-admin.6amtech.com/admin/configuration/get-notification-setting" class="">
Notification
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/configuration/get-third-party-config" class="">
3rd party
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/configuration/get-email-config" class="">
Email config
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/configuration/sms-get" class="">
SMS config
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/configuration/payment-get" class="">
Payment config
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/configuration/get-app-settings" class="">
App Settings
</a>
</li>
</ul>

</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/business-settings/get-pages-setup" class="">
<span class="material-icons" title="Page Settings">article</span>
<span class="link-title">Page settings</span>
</a>
</li>
<li class="nav-category" title="Employee management">Employee management</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/role/create" class="">
<span class="material-icons" title="Employee">settings</span>
<span class="link-title">Employee roles</span>
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/employee/create" class="">
<span class="material-icons" title="Add new employee">add</span>
<span class="link-title">Add new employee</span>
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/employee/list" class="">
<span class="material-icons" title="Employee list">list</span>
<span class="link-title">Employee list</span>
</a>
</li>
<li class="nav-category" title="Customer management">
Customer management
</li>
<li class="has-sub-item ">
<a href="#" class="">
<span class="material-icons" title="Customers">person_outline</span>
<span class="link-title">Customers</span>
</a>

<ul class="nav sub-menu">
<li>
<a href="https://demandium-admin.6amtech.com/admin/customer/list" class="">
Customer list
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/customer/create" class="">
Add new customer
</a>
</li>
</ul>

</li>
<li class="nav-category" title="Transaction management">
Transaction management
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/transaction/list?trx_type=all" class="">
<span class="material-icons" title="Customers">article</span>
<span class="link-title">Transactions</span>
</a>
</li>
</ul>

</div>

</aside>


<div class="settings-sidebar">
<div class="settings-toggle-icon">
<span class="material-icons">settings</span>
</div>
<div class="settings-content">
<h4>Settings</h4>
<div class="switchers-wrap">
<div class="switch-items">
<div class="setting-box-wrap">
<div class="setting-box active light-mode">
<img src="https://demandium-admin.6amtech.com/public/assets/admin-module/img/light-mode.png" width="36px" alt="">
</div>
<h5>Light Mode</h5>
</div>
<div class="setting-box-wrap">
<div class="setting-box dark-mode">
<img src="https://demandium-admin.6amtech.com/public/assets/admin-module/img/dark-mode.png" width="36px" alt="">
</div>
<h5>Dark Mode</h5>
</div>
<div class="setting-box-wrap">
<div class="setting-box ltr-mode">
<img src="https://demandium-admin.6amtech.com/public/assets/admin-module/img/ltr-icon.png" alt="">
</div>
<h5>LTR</h5>
</div>
<div class="setting-box-wrap">
<div class="setting-box rtl-mode">
<img src="https://demandium-admin.6amtech.com/public/assets/admin-module/img/rtl-icon.png" alt="">
</div>
<h5>RTL</h5>
</div>
</div>
</div>
</div>
</div>


<main class="main-area">


<div class="main-content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="page-title-wrap mb-3">
<h2 class="page-title">Booking Details </h2>
</div>
<ul class="nav nav--tabs nav--tabs__style2 mb-4">
<li class="nav-item">
<a class="nav-link " href="https://demandium-admin.6amtech.com/admin/booking/details/3dd3f7c5-ded5-4850-91cb-0d6da2a98dd3?web_page=details">Details</a>
</li>
<li class="nav-item">
<a class="nav-link active" href="https://demandium-admin.6amtech.com/admin/booking/details/3dd3f7c5-ded5-4850-91cb-0d6da2a98dd3?web_page=status">Status</a>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane fade show active" id="order_details_status">
<div class="card">
<div class="card-body">
<div class="border-bottom pb-3">
<div class="row pb-1 gy-2">
<div class="col-6 col-lg-3">
<div>
<h4 class="c1 mb-2 pb-1">Booking Placed</h4>
<p class="opacity-75">12-Oct-2022 12:16am</p>
</div>
</div>
<div class="col-6 col-lg-3">
<div>
<h4 class="c1  mb-2 pb-1">Booking Status</h4>
<p class="opacity-75">accepted</p>
</div>
</div>
<div class="col-6 col-lg-3">
<div>
<h4 class="c1  mb-2 pb-1">Payment Status</h4>
<p class="opacity-75">Unpaid</p>
</div>
</div>
<div class="col-6 col-lg-3">
<div>
<h4 class="c1  mb-2 pb-1">Booking Amount</h4>
<p class="opacity-75">1,980.00$</p>
</div>
</div>
</div>
</div>
<div class="row justify-content-between mt-5">
<div class="col-md-6 col-xl-4 mb-5 mb-md-0">

<div class="timeline-wrapper">
<div class="timeline-steps">
<div class="timeline-step completed">
<div class="timeline-number">
<svg viewBox="0 0 512 512" width="100" title="check">
<path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" />
</svg>
</div>
<div class="timeline-info">
<p class="timeline-title text-uppercase">Pending</p>
<p class="timeline-text">12-Oct-2022 12:16am</p>
<p class="timeline-text">By - Kristin Watson</p>
</div>
</div>
<div class="timeline-step completed">
<div class="timeline-number">
<svg viewBox="0 0 512 512" width="100" title="check">
<path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" />
</svg>
</div>
<div class="timeline-info">
<p class="timeline-title text-uppercase">accepted</p>
<p class="timeline-text">12-Oct-2022 01:35am</p>
<p class="timeline-text">By - Jonas Lyons</p>
</div>
</div>
</div>
 </div>

</div>
<div class="col-md-6 col-xl-4 d-flex justify-content-center">
<div class="d-flex flex-column gap-30">
<div class="c1-light-bg radius-10 py-3 px-4">
<h4 class="mb-2">Lead Service Information</h4>
<h5 class="c1 mb-2"></h5>
<ul class="list-info">
<li>
<span class="material-icons">phone_iphone</span>
<a href="tel:">
</a>
</li>
</ul>
</div>
<div class="c1-light-bg radius-10 py-3 px-4">
<h4 class="mb-2">Provider Information</h4>
<h5 class="c1 mb-2">Frances Nelson</h5>
<ul class="list-info">
<li>
<span class="material-icons">phone_iphone</span>
<a href="tel:+1502368-1513">
+1502368-1513
</a>
</li>
<li>
<span class="material-icons">map</span>
<p>Ex velit modi lorem</p>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="modal fade" id="changeScheduleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="changeScheduleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<form action="https://demandium-admin.6amtech.com/admin/booking/schedule-update/3dd3f7c5-ded5-4850-91cb-0d6da2a98dd3" method="post">
<input type="hidden" name="_token" value="0PxKN2AZQJNcleYHMFUM7L8N0YvfAwFWndaFmiKc"> <div class="modal-header">
<h5 class="modal-title" id="changeScheduleModalLabel">Change Booking Schedule</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<input type="datetime-local" id="service_schedule" name="service_schedule" value="2022-10-06 18:17:26">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
 <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>


<footer class="footer mt-auto">
<div class="container-fluid">
<div class="row">
<div class="col-md-6 d-flex justify-content-center justify-content-md-start mb-2 mb-md-0">
All rights reserved By @DemandiumLtd <span class="currentYear ml-3"></span>
</div>
<div class="col-md-6 d-flex justify-content-center justify-content-md-end">
<ul class="list-inline list-separator">
<li>
<a href="https://demandium-admin.6amtech.com/admin/business-settings/get-business-information">
Business setup
</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/profile-update">Profile</a>
</li>
<li>
<a href="https://demandium-admin.6amtech.com/admin/dashboard">
<span class="material-icons">home</span>
</a>
</li>
<li>
<span class="badge badge-soft-success text-dark opacity-75">Software version : 1.1.1</span>
</li>
</ul>
</div>
</div>
</div>
</footer>

</main>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://demandium-admin.6amtech.com/public/assets/admin-module/js/jquery-3.6.0.min.js"></script>
<script src="https://demandium-admin.6amtech.com/public/assets/admin-module/js/bootstrap.bundle.min.js"></script>
<script src="https://demandium-admin.6amtech.com/public/assets/admin-module/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="https://demandium-admin.6amtech.com/public/assets/admin-module/js/main.js"></script>


<script src="https://demandium-admin.6amtech.com/public/assets/admin-module/plugins/select2/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('.js-select').select2();
    });
</script>
<script src="https://demandium-admin.6amtech.com/public/assets/admin-module/js/sweet_alert.js"></script>
<script src="https://demandium-admin.6amtech.com/public/assets/admin-module/js/toastr.js"></script>
<script src="https://demandium-admin.6amtech.com/public/assets/admin-module/js/dev.js"></script>
<script type="text/javascript"></script>
<script>
    function form_alert(id, message) {
        Swal.fire({
            title: "Are you sure?",
            text: message,
            type: 'warning',
            showCloseButton: true,
            showCancelButton: true,
            cancelButtonColor: 'var(--c2)',
            confirmButtonColor: 'var(--c1)',
            cancelButtonText: 'Cancel',
            confirmButtonText: 'Yes',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $('#' + id).submit()
            }
        })
    }

    function route_alert(route, message) {
        Swal.fire({
            title: "Are you sure?",
            text: message,
            type: 'warning',
            showCancelButton: true,
            cancelButtonColor: 'var(--c2)',
            confirmButtonColor: 'var(--c1)',
            cancelButtonText: 'Cancel',
            confirmButtonText: 'Yes',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $.get({
                    url: route,
                    dataType: 'json',
                    data: {},
                    beforeSend: function () {
                        /*$('#loading').show();*/
                    },
                    success: function (data) {
                        toastr.success(data.message, {
                            CloseButton: true,
                            ProgressBar: true
                        });
                    },
                    complete: function () {
                        /*$('#loading').hide();*/
                    },
                });
            }
        })
    }

    function route_alert_reload(route, message, reload = true) {
        Swal.fire({
            title: "Are you sure?",
            text: message,
            type: 'warning',
            showCancelButton: true,
            cancelButtonColor: 'var(--c2)',
            confirmButtonColor: 'var(--c1)',
            cancelButtonText: 'Cancel',
            confirmButtonText: 'Yes',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $.get({
                    url: route,
                    dataType: 'json',
                    data: {},
                    beforeSend: function () {
                        /*$('#loading').show();*/
                    },
                    success: function (data) {
                        if (reload) {
                            location.reload();
                        }
                        toastr.success(data.message, {
                            CloseButton: true,
                            ProgressBar: true
                        });
                    },
                    complete: function () {
                        /*$('#loading').hide();*/
                    },
                });
            }
        })
    }
</script>

<audio id="audio-element">
<source src="https://demandium-admin.6amtech.com/public/assets/provider-module/sound/notification.mp3" type="audio/mpeg">
</audio>
<script>
    var audio = document.getElementById("audio-element");

    function playAudio(status) {
        status ? audio.play() : audio.pause();
    }
</script>
<script>
    setInterval(function () {
        $.get({
            url: 'https://demandium-admin.6amtech.com/admin/get-updated-data',
            dataType: 'json',
            success: function (response) {
                let data = response.data;
                //update header count
                document.getElementById("message_count").innerHTML = data.message;
            },
        });
    }, 10000);
</script>

<script>
    $("#search-form__input").on("keyup", function () {
        var value = this.value.toLowerCase().trim();
        $(".show-search-result a").show().filter(function () {
            return $(this).text().toLowerCase().trim().indexOf(value) == -1;
        }).hide();
    });

    function demo_mode() {
        toastr.info('This function is disable for demo mode', {
            CloseButton: true,
            ProgressBar: true
        });
    }

    $('.demo_check').on('click', function (event) {
        if ('1') {
            event.preventDefault();
            demo_mode()
        }
    });
</script>

</body>
</html>

@endsection

