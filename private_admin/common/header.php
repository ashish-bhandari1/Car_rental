<?php 
session_start();
if(!isset($_SESSION ["xuser"] )){
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Admin Panel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./style.css">


</head>
<body>
<!-- partial:index.partial.html -->
<body class="sidebar-is-reduced">
  <header class="l-header">
    <div class="l-header__inner clearfix">
      <div class="c-header-icon js-hamburger">
        <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
      </div>
   
      <div class="header-icons-group">
        <div class="c-header-icon logout">  <a href = "php/logout.php" onclick ="return confirm('Are you sure you want to Logout?');" > <i class="fa fa-power-off"></i></a></div>
      </div>

    </div>
  </header>
  <div class="l-sidebar">
    <div class="logo">
      <div class="logo__txt"><i class="fas fa-user"></i></div>
    </div>
    <div class="l-sidebar__content">
      <nav class="c-menu js-menu">
        <ul class="u-list">
        <li class="c-menu__item is-active" data-toggle="tooltip" title="Add New Car">
            <div class="c-menu__item__inner"><i class="fas fa-user-plus"></i>
              <div class="c-menu-item__title"><span><a href="addCar.php" style="color:#fff; text-decoration:none;">Add New Car</a></span></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="See Cars">
            <div class="c-menu__item__inner"><i class="fas fa-images"></i>
              <div class="c-menu-item__title"><span><a href="car.php" style="color:#fff; text-decoration:none;">Cars</a></span></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Home">
            <div class="c-menu__item__inner"><i class="fas fa-home"></i></i>
              <div class="c-menu-item__title"><span><a href="body.php" style="color:#fff; text-decoration:none;">Home</a></span></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Menu">
            <div class="c-menu__item__inner"><i class="fas fa-bars"></i>
              <div class="c-menu-item__title"><span><a href="menu.php" style="color:#fff; text-decoration:none;">Menu</a></span></div>
            </div>
          </li>
 
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
            <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
              <div class="c-menu-item__title"><span><a href="setting.php" style="color:#fff; text-decoration:none;">Settings</a></span></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="View Changes">
            <div class="c-menu__item__inner"><i class="fa fa-eye"></i>
              <div class="c-menu-item__title"><span><a href="../" style="color:#fff; text-decoration:none;">View Changes</a></span></div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</body>