<?php
include '../connection.php';

if ($_SESSION["userRole"] != 'admin') {
    header("location:../index.php");
}

?>


<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a></li>
            <li>
                <form class="form-inline mr-auto">
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                        <button class="btn" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">

        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
                <div class="dropdown-title"> <?php echo $_SESSION['userEmail']; ?></div>
                <div class="dropdown-divider"></div>
                <a href="../logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span class="logo-name">ADMIN PANEL</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
                <a href="index.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="addmovie.php" class="nav-link"><i data-feather="monitor"></i><span>Add A Movie</span></a>
            </li>

            <li class="dropdown">
                <a href="addshows.php" class="nav-link"><i data-feather="monitor"></i><span>Add Shows</span></a>
            </li>
            <li class="dropdown">
                <a href="adminshowtimes.php" class="nav-link"><i data-feather="monitor"></i><span>View/Edit Shows</span></a>
            </li>
            <li class="dropdown">
                <a href="adminallusers.php" class="nav-link"><i data-feather="monitor"></i><span>All Users</span></a>
            </li>
            <li class="dropdown">
                <a href="adminbookings.php" class="nav-link"><i data-feather="monitor"></i><span>Bookings</span></a>
            </li>
            <li class="dropdown">
                <a href="adminseats.php" class="nav-link"><i data-feather="monitor"></i><span>Seats Reserved</span></a>
            </li>
        </ul>
    </aside>
</div>