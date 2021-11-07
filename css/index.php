<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
*{
  margin:0;
    padding:0;
}
body {
    font-family: "Open Sans", sans-serif;
    color: #444444;
  }
  
  a {
    color: #633c97;
    text-decoration: none;
  }
  
  a:hover {
    color: #633c97;
    text-decoration: none;
  }
  
  h1, h2, h3, h4, h5, h6 {
    font-family: "Raleway", sans-serif;
  }
  
  .back-to-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: 15px;
    z-index: 996;
    background: #a780c0;
    width: 40px;
    height: 40px;
    border-radius: 50px;
    transition: all 0.4s;
  }
  .back-to-top i {
    font-size: 28px;
    color: #fff;
    line-height: 0;
  }
  .back-to-top:hover {
    background: #a47dcf;
    color: #fff;
  }
  .back-to-top.active {
    visibility: visible;
    opacity: 1;
  }
  
  /*--------------------------------------------------------------
  # Preloader
  --------------------------------------------------------------*/
  #preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9999;
    overflow: hidden;
    background: #fff;
  }
  
  #preloader:before {
    content: "";
    position: fixed;
    top: calc(50% - 30px);
    left: calc(50% - 30px);
    border: 6px solid #a168c2;
    border-top-color: #fff;
    border-bottom-color: #fff;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    -webkit-animation: animate-preloader 1s linear infinite;
    animation: animate-preloader 1s linear infinite;
  }
  
  @-webkit-keyframes animate-preloader {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
  
  @keyframes animate-preloader {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
  /*--------------------------------------------------------------
  # Disable aos animation delay on mobile devices
  --------------------------------------------------------------*/
  @media screen and (max-width: 768px) {
    [data-aos-delay] {
      transition-delay: 0 !important;
    }
  }
 /*--------------------------------------------------------------
  # Header
  --------------------------------------------------------------*/
  #header {
    background: #dbd2db;
    transition: all 0.5s;
    z-index: 997;
    padding: 15px 0;
    box-shadow: 0px 0 18px rgba(55, 66, 59, 0.08);
  }
  #header .logo {
    font-size: 30px;
    margin: 0;
    padding: 0;
    line-height: 1;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
  }
  #header .logo a {
    color: #ac5fcf;
  }
  #header .logo img {
    max-height: 40px;
  }
  
  /**
  * Get Startet Button 
  */
  .get-started-btn {
    margin-left: 22px;
    background: #ac5fcf;
    color: #fff;
    border-radius: 50px;
    padding: 8px 25px;
    white-space: nowrap;
    transition: 0.3s;
    font-size: 14px;
    display: inline-block;
  }
  .get-started-btn:hover {
    background: #a63ac1;
    color: #fff;
  }
  @media (max-width: 768px) {
    .get-started-btn {
      margin: 0 15px 0 0;
      padding: 6px 18px;
    }
  }
  
  /*--------------------------------------------------------------
  # Navigation Menu
  --------------------------------------------------------------*/
  /**
  * Desktop Navigation 
  */
  .navbar {
    padding: 0;
  }
  .navbar ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }
  .navbar li {
    position: relative;
  }
  .navbar a, .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0 10px 30px;
    font-family: "Poppins", sans-serif;
    font-size: 15px;
    font-weight: 500;
    color: #37423b;
    white-space: nowrap;
    transition: 0.3s;
  }
  .navbar a i, .navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
  }
  .navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
    color: #a440cc;
  }
  /**
  * Mobile Navigation 
  */
  .mobile-nav-toggle {
    color: #37423b;
    font-size: 28px;
    cursor: pointer;
    display: none;
    line-height: 0;
    transition: 0.5s;
  }
  .mobile-nav-toggle.bi-x {
    color: #fff;
  }
  
  @media (max-width: 991px) {
    .mobile-nav-toggle {
      display: block;
    }
  
    .navbar ul {
      display:none;
    }
  }
  .navbar-mobile {
    position: fixed;
    overflow: hidden;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background: rgba(32, 38, 34, 0.9);
    transition: 0.3s;
    z-index: 999;
  }
  .navbar-mobile .mobile-nav-toggle {
    position: absolute;
    top: 15px;
    right: 15px;
  }
  .navbar-mobile ul {
    display: block;
    position: absolute;
    top: 55px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    padding: 10px 0;
    border-radius: 6px;
    background-color: #fff;
    overflow-y: auto;
    transition: 0.3s;
  }
  .navbar-mobile a, .navbar-mobile a:focus {
    padding: 10px 20px;
    font-size: 15px;
    color: #37423b;
  }
  .navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
    color: #5fcf80;
  }
  .navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
    margin: 15px;
  }
  /*--------------------------------------------------------------
  # Hero Section
  --------------------------------------------------------------*/
  #hero {
    width: 100%;
    height: 80vh;
    background:  top center;
    background-size: cover;
    position: relative;
    background-image:url('imgandjs/images/hero.jpg');
  }
  #hero:before {
    content: "";
    background: rgba(0, 0, 0, 0.4);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
  }
  #hero .container {
    padding-top: 72px;
  }
  @media (max-width: 992px) {
    #hero .container {
      padding-top: 62px;
    }
  }
  #hero h1 {
    margin: 0;
    font-size: 48px;
    font-weight: 700;
    line-height: 56px;
    color: #fff;
    font-family: "Poppins", sans-serif;
  }
  #hero h2 {
    color: #eee;
    margin: 10px 0 0 0;
    font-size: 24px;
  }
  #hero .btn-get-started {
    font-family: "Raleway", sans-serif;
    font-weight: 500;
    font-size: 15px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 10px 35px;
    border-radius: 50px;
    transition: 0.5s;
    margin-top: 30px;
    border: 2px solid #fff;
    color: #fff;
  }
  #hero .btn-get-started:hover {
    background: #5fcf80;
    border: 2px solid #5fcf80;
  }
  @media (min-width: 1024px) {
    #hero {
      background-attachment: fixed;
    }
  }
  @media (max-width: 768px) {
    #hero {
      height: 100vh;
    }
    #hero h1 {
      font-size: 28px;
      line-height: 36px;
    }
    #hero h2 {
      font-size: 18px;
      line-height: 24px;
    }
  }
  
  /*--------------------------------------------------------------
  # Sections General
  --------------------------------------------------------------*/
  section {
    padding: 60px 0;
    overflow: hidden;
  }
  
  .section-bg {
    background-color: #f6f7f6;
  }
  
  .section-title {
    padding-bottom: 40px;
  }
  .section-title h2 {
    font-size: 14px;
    font-weight: 500;
    padding: 0;
    line-height: 1px;
    margin: 0 0 5px 0;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #aaaaaa;
    font-family: "Poppins", sans-serif;
  }
  .section-title h2::after {
    content: "";
    width: 120px;
    height: 1px;
    display: inline-block;
    background: #9ae1af;
    margin: 4px 10px;
  }
  .section-title p {
    margin: 0;
    margin: 0;
    font-size: 36px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
    color: #37423b;
  }
  
  .breadcrumbs {
    margin-top: 73px;
    text-align: center;
    background: #5fcf80;
    padding: 30px 0;
    color: #fff;
  }
  @media (max-width: 992px) {
    .breadcrumbs {
      margin-top: 63px;
    }
  }
  .breadcrumbs h2 {
    font-size: 32px;
    font-weight: 500;
  }
  .breadcrumbs p {
    font-size: 14px;
    margin-bottom: 0;
  }
  
  /*--------------------------------------------------------------
  # About
  --------------------------------------------------------------*/
  .about .content h3 {
    font-weight: 600;
    font-size: 26px;
  }
  .about .content ul {
    list-style: none;
    padding: 0;
  }
  .about .content ul li {
    padding-bottom: 10px;
  }
  .about .content ul i {
    font-size: 20px;
    padding-right: 4px;
    color: #5fcf80;
  }
  .about .content .learn-more-btn {
    background: #5fcf80;
    color: #fff;
    border-radius: 50px;
    padding: 8px 25px 9px 25px;
    white-space: nowrap;
    transition: 0.3s;
    font-size: 14px;
    display: inline-block;
  }
  .about .content .learn-more-btn:hover {
    background: #3ac162;
    color: #fff;
  }
  @media (max-width: 768px) {
    .about .content .learn-more-btn {
      margin: 0 48px 0 0;
      padding: 6px 18px;
    }
  }
  #reason {
    padding:3%;
    align-items: center;
    align-content: center;
  }
  .reason .counters span {
    font-size: 48px;
    display: block;
    color: #5fcf80;
    font-weight: 700;

  }
  .reason .counters {
    padding-top:2%;
    margin: 0 0 20px 0;
    font-family: "Raleway", sans-serif;
    font-size: 15px;
    font-weight: 600;
    color: #37423b;
  }
  
  /*--------------------------------------------------------------
  # Counts
  --------------------------------------------------------------*/
  #counts{
  background-image: linear-gradient(#2193b0,#6dd5ed);
  }
  .counts {
    padding: 30px 0;
  }
  .counts .counters span {
    font-size: 48px;
    display: block;
    color: #5fcf80;
    font-weight: 700;
  }
  .counts .counters p {
    padding: 0;
    margin: 0 0 20px 0;
    font-family: "Raleway", sans-serif;
    font-size: 15px;
    font-weight: 600;
    color: #37423b;
  }
  
  /*--------------------------------------------------------------
  # Why Us
  --------------------------------------------------------------*/
  .why-us .content {
    padding: 30px;
    background: #5fcf80;
    border-radius: 4px;
    color: #fff;
  }
  .why-us .content h3 {
    font-weight: 700;
    font-size: 34px;
    margin-bottom: 30px;
  }
  .why-us .content p {
    margin-bottom: 30px;
  }
  .why-us .content .more-btn {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    padding: 6px 30px 8px 30px;
    color: #fff;
    border-radius: 50px;
    transition: all ease-in-out 0.4s;
  }
  .why-us .content .more-btn i {
    font-size: 14px;
  }
  .why-us .content .more-btn:hover {
    color: #5fcf80;
    background: #fff;
  }
  .why-us .icon-boxes .icon-box {
    text-align: center;
    background: #fff;
    padding: 40px 30px;
    width: 100%;
    border: 1px solid #eef0ef;
  }
  .why-us .icon-boxes .icon-box i {
    font-size: 32px;
    padding: 18px;
    color: #5fcf80;
    margin-bottom: 30px;
    background: #ecf9f0;
    border-radius: 50px;
  }
  .why-us .icon-boxes .icon-box h4 {
    font-size: 20px;
    font-weight: 700;
    margin: 0 0 30px 0;
  }
  .why-us .icon-boxes .icon-box p {
    font-size: 15px;
    color: #848484;
  }
  #post  {
    padding:7%;
    background-color:rgb(175, 206, 206);
  }
  .postbtn {
    border-radius: 16px;
    margin-left: 3cm;
  }
  /*--------------------------------------------------------------
  # Courses
  --------------------------------------------------------------*/
  .courses .course-item {
    border-radius: 5px;
    border: 1px solid #eef0ef;
  }
  .courses .course-content {
    padding: 15px;
  }
  .courses .course-content h3 {
    font-weight: 700;
    font-size: 20px;
  }
  .courses .course-content h3 a {
    color: #37423b;
    transition: 0.3s;
  }
  .courses .course-content h3 a:hover {
    color: #5fcf80;
  }
  .courses .course-content p {
    font-size: 14px;
    color: #777777;
  }
  .courses .course-content h4 {
    font-size: 14px;
    background: #5fcf80;
    padding: 7px 14px;
    color: #fff;
    margin: 0;
  }
  .courses .course-content .price {
    margin: 0;
    font-weight: 700;
    font-size: 18px;
    color: #37423b;
  }
  .courses .trainer {
    padding-top: 15px;
    border-top: 1px solid #eef0ef;
  }
  .courses .trainer .trainer-profile img {
    max-width: 50px;
    border-radius: 50px;
  }
  .courses .trainer .trainer-profile span {
    padding-left: 10px;
    font-weight: 600;
    font-size: 16px;
    color: #5a6c60;
  }
  .courses .trainer .trainer-rank {
    font-size: 18px;
    color: #657a6d;
  }
  #skills{background-color: rgb(250, 255, 255);
    padding:5%;
  }
  .scrollable-menu {
   height: auto;
   max-height: 200px;
   overflow-x: hidden;}
  
  /*--------------------------------------------------------------
  # Cource Details
  --------------------------------------------------------------*/
  .course-details h3 {
    font-size: 24px;
    margin: 30px 0 15px 0;
    font-weight: 700;
    position: relative;
    padding-bottom: 10px;
  }
  .course-details h3:before {
    content: "";
    position: absolute;
    display: block;
    width: 100%;
    height: 1px;
    background: #eef0ef;
    bottom: 0;
    left: 0;
  }
  .course-details h3:after {
    content: "";
    position: absolute;
    display: block;
    width: 60px;
    height: 1px;
    background: #5fcf80;
    bottom: 0;
    left: 0;
  }
  .course-details .course-info {
    background: #f6f7f6;
    padding: 10px 15px;
    margin-bottom: 15px;
  }
  .course-details .course-info h5 {
    font-weight: 400;
    font-size: 16px;
    margin: 0;
    font-family: "Poppins", sans-serif;
  }
  .course-details .course-info p {
    margin: 0;
    font-weight: 600;
  }
  .course-details .course-info a {
    color: #657a6d;
  }
  
  /*--------------------------------------------------------------
  # Cource Details Tabs
  --------------------------------------------------------------*/
  .cource-details-tabs {
    overflow: hidden;
    padding-top: 0;
  }
  .cource-details-tabs .nav-tabs {
    border: 0;
  }
  .cource-details-tabs .nav-link {
    border: 0;
    padding: 12px 15px 12px 0;
    transition: 0.3s;
    color: #37423b;
    border-radius: 0;
    border-right: 2px solid #e2e7e4;
    font-weight: 600;
    font-size: 15px;
  }
  .cource-details-tabs .nav-link:hover {
    color: #5fcf80;
  }
  .cource-details-tabs .nav-link.active {
    color: #5fcf80;
    border-color: #5fcf80;
  }
  .cource-details-tabs .tab-pane.active {
    -webkit-animation: fadeIn 0.5s ease-out;
    animation: fadeIn 0.5s ease-out;
  }
  .cource-details-tabs .details h3 {
    font-size: 26px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #37423b;
  }
  .cource-details-tabs .details p {
    color: #777777;
  }
  .cource-details-tabs .details p:last-child {
    margin-bottom: 0;
  }
  @media (max-width: 992px) {
    .cource-details-tabs .nav-link {
      border: 0;
      padding: 15px;
    }
    .cource-details-tabs .nav-link.active {
      color: #fff;
      background: #5fcf80;
    }
  }
  
  /*--------------------------------------------------------------
  # Events
  --------------------------------------------------------------*/
  .events .card {
    border: 0;
    padding: 0 30px;
    margin-bottom: 60px;
    position: relative;
  }
  .events .card-img {
    width: calc(100% + 60px);
    margin-left: -30px;
    overflow: hidden;
    z-index: 9;
    border-radius: 0;
  }
  .events .card-img img {
    max-width: 100%;
    transition: all 0.3s ease-in-out;
  }
  .events .card-body {
    z-index: 10;
    background: #fff;
    border-top: 4px solid #fff;
    padding: 30px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    margin-top: -60px;
    transition: 0.3s;
  }
  .events .card-title {
    font-weight: 700;
    text-align: center;
    margin-bottom: 20px;
  }
  .events .card-title a {
    color: #37423b;
    transition: 0.3s;
  }
  .events .card-text {
    color: #5e5e5e;
  }
  .events .read-more a {
    color: #777777;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 12px;
    transition: 0.3s;
  }
  .events .read-more a:hover {
    color: #5fcf80;
  }
  .events .card:hover img {
    transform: scale(1.1);
  }
  .events .card:hover .card-body {
    border-color: #5fcf80;
  }
  .events .card:hover .card-body .card-title a {
    color: #5fcf80;
  }
  
  /*--------------------------------------------------------------
  # Pricing
  --------------------------------------------------------------*/
  .pricing .box {
    padding: 20px;
    background: #fff;
    text-align: center;
    border: 1px solid #eef0ef;
    border-radius: 0;
    position: relative;
    overflow: hidden;
  }
  .pricing h3 {
    font-weight: 400;
    margin: -20px -20px 20px -20px;
    padding: 20px 15px;
    font-size: 16px;
    font-weight: 600;
    color: #777777;
    background: #f8f8f8;
  }
  .pricing h4 {
    font-size: 36px;
    color: #5fcf80;
    font-weight: 600;
    font-family: "Poppins", sans-serif;
    margin-bottom: 20px;
  }
  .pricing h4 sup {
    font-size: 20px;
    top: -15px;
    left: -3px;
  }
  .pricing h4 span {
    color: #bababa;
    font-size: 16px;
    font-weight: 300;
  }
  .pricing ul {
    padding: 0;
    list-style: none;
    color: #444444;
    text-align: center;
    line-height: 20px;
    font-size: 14px;
  }
  .pricing ul li {
    padding-bottom: 16px;
  }
  .pricing ul i {
    color: #5fcf80;
    font-size: 18px;
    padding-right: 4px;
  }
  .pricing ul .na {
    color: #ccc;
    text-decoration: line-through;
  }
  .pricing .btn-wrap {
    margin: 20px -20px -20px -20px;
    padding: 20px 15px;
    background: #f8f8f8;
    text-align: center;
  }
  .pricing .btn-buy {
    background: #5fcf80;
    display: inline-block;
    padding: 8px 35px;
    border-radius: 50px;
    color: #fff;
    transition: none;
    font-size: 14px;
    font-weight: 400;
    font-family: "Raleway", sans-serif;
    font-weight: 600;
    transition: 0.3s;
  }
  .pricing .btn-buy:hover {
    background: #3ac162;
  }
  .pricing .featured h3 {
    color: #fff;
    background: #5fcf80;
  }
  .pricing .advanced {
    width: 200px;
    position: absolute;
    top: 18px;
    right: -68px;
    transform: rotate(45deg);
    z-index: 1;
    font-size: 14px;
    padding: 1px 0 3px 0;
    background: #5fcf80;
    color: #fff;
  }
  
  /*--------------------------------------------------------------
  # Contact
  --------------------------------------------------------------*/
  .contact {
    padding-top: 5px;
  }
  .contact .info {
    width: 100%;
    background: #fff;
  }
  .contact .info i {
    font-size: 20px;
    color: #5fcf80;
    float: left;
    width: 44px;
    height: 44px;
    background: #ecf9f0;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
  }
  .contact .info h4 {
    padding: 0 0 0 60px;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 5px;
    color: #37423b;
  }
  .contact .info p {
    padding: 0 0 0 60px;
    margin-bottom: 0;
    font-size: 14px;
    color: #657a6d;
  }
  .contact .info .email, .contact .info .phone {
    margin-top: 40px;
  }
  .contact .info .email:hover i, .contact .info .address:hover i, .contact .info .phone:hover i {
    background: #5fcf80;
    color: #fff;
  }
  .contact .php-email-form {
    width: 100%;
    background: #fff;
  }
  .contact .php-email-form .form-group {
    padding-bottom: 8px;
  }
  .contact .php-email-form .error-message {
    display: none;
    color: #fff;
    background: #ed3c0d;
    text-align: left;
    padding: 15px;
    font-weight: 600;
  }
  .contact .php-email-form .error-message br + br {
    margin-top: 25px;
  }
  .contact .php-email-form .sent-message {
    display: none;
    color: #fff;
    background: #18d26e;
    text-align: center;
    padding: 15px;
    font-weight: 600;
  }
  .contact .php-email-form .loading {
    display: none;
    background: #fff;
    text-align: center;
    padding: 15px;
  }
  .contact .php-email-form .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid #18d26e;
    border-top-color: #eee;
    -webkit-animation: animate-loading 1s linear infinite;
    animation: animate-loading 1s linear infinite;
  }
  .contact .php-email-form input, .contact .php-email-form textarea {
    border-radius: 4px;
    box-shadow: none;
    font-size: 14px;
  }
  .contact .php-email-form input:focus, .contact .php-email-form textarea:focus {
    border-color: #5fcf80;
  }
  .contact .php-email-form input {
    height: 44px;
  }
  .contact .php-email-form textarea {
    padding: 10px 12px;
  }
  .contact .php-email-form button[type=submit] {
    background: #ba9ce2;
    border: 0;
    padding: 10px 35px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
  }
  .contact .php-email-form button[type=submit]:hover {
    background: #a68bc9;
  }
  @-webkit-keyframes animate-loading {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
  @keyframes animate-loading {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
  
  /*--------------------------------------------------------------
  # Footer
  --------------------------------------------------------------*/
  #footer {
    color: #37423b;
    font-size: 14px;
    background: #eef0ef;
  }
  #footer .footer-top {
    padding: 60px 0 30px 0;
    background: #f9faf9;
  }
  #footer .footer-top .footer-contact {
    margin-bottom: 30px;
  }
  #footer .footer-top .footer-contact h4 {
    font-size: 22px;
    margin: 0 0 30px 0;
    padding: 2px 0 2px 0;
    line-height: 1;
    font-weight: 700;
  }
  #footer .footer-top .footer-contact p {
    font-size: 14px;
    line-height: 24px;
    margin-bottom: 0;
    font-family: "Raleway", sans-serif;
    color: #777777;
  }
  #footer .footer-top h4 {
    font-size: 16px;
    font-weight: bold;
    color: #444444;
    position: relative;
    padding-bottom: 12px;
  }
  #footer .footer-top .footer-links {
    margin-bottom: 30px;
  }
  #footer .footer-top .footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  #footer .footer-top .footer-links ul i {
    padding-right: 2px;
    color: #5fcf80;
    font-size: 18px;
    line-height: 1;
  }
  #footer .footer-top .footer-links ul li {
    padding: 10px 0;
    display: flex;
    align-items: center;
  }
  #footer .footer-top .footer-links ul li:first-child {
    padding-top: 0;
  }
  #footer .footer-top .footer-links ul a {
    color: #b66a6a;
    transition: 0.3s;
    display: inline-block;
    line-height: 1;
  }
  #footer .footer-top .footer-links ul a:hover {
    text-decoration: none;
    color: #ba9ce2;
  }
  #footer .footer-newsletter {
    font-size: 15px;
  }
  #footer .footer-newsletter h4 {
    font-size: 16px;
    font-weight: bold;
    color: #444444;
    position: relative;
    padding-bottom: 12px;
  }
  #footer .footer-newsletter form {
    margin-top: 30px;
    background: #fff;
    padding: 6px 10px;
    position: relative;
    border-radius: 50px;
    text-align: left;
    border: 1px solid #e0e5e2;
  }
  #footer .footer-newsletter form input[type=email] {
    border: 0;
    padding: 4px 8px;
    width: calc(100% - 100px);
  }
  #footer .footer-newsletter form input[type=submit] {
    position: absolute;
    top: -1px;
    right: -1px;
    bottom: -1px;
    border: 0;
    background: none;
    font-size: 16px;
    padding: 0 20px 2px 20px;
    background: #a68bc9;
    color: #fff;
    transition: 0.3s;
    border-radius: 50px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  }
  #footer .footer-newsletter form input[type=submit]:hover {
    background: #ba9ce2;
  }
  #footer .credits {
    padding-top: 5px;
    font-size: 13px;
  }
  #footer .credits a {
    color: #ba9ce2;
    transition: 0.3s;
  }
  #footer .credits a:hover {
    color: #5fcf80;
  }
  #footer .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #5fcf80;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
  }
  #footer .social-links a:hover {
    background: #3ac162;
    color: #fff;
    text-decoration: none;
  }</style>
</head>
<body>
    
</body>
</html>