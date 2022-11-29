<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <!-- INCLUDING ADMIN HEADER  -->


            <?php include 'adminheader.php'; ?>

            <?php

            $movies = "SELECT * from movies where movieStatus = 'Showing'";
            $cinemas = "SELECT * from cinemas";

            $stResult = mysqli_query($connection, $movies);
            $cResult = mysqli_query($connection, $cinemas);


            ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div>
                            <div class="movie-form">
                                <div class="card">
                                    <div class="card-header">

                                        <h4>Add A Show</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="addmovie.php" method="post" enctype="multipart/form-data">
                                            <!-- <div class="form-group">
                                                <label>Movie Name</label>
                                                <input type="text" class="form-control" name="moviename">
                                            </div> -->
                                            <div class="form-group">
                                                <label>Currently Showing</label>
                                                <select class="form-control" id="currentlyshowing">
                                                    <?php
                                                    if (mysqli_num_rows($stResult) > 0) {
                                                        while ($moviedata = mysqli_fetch_assoc($stResult)) { ?>
                                                            <option value="<?php echo $moviedata['movieId']; ?>"><?php echo $moviedata['movieName'] ?></option>
                                                    <?php  }
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Cinema Room</label>
                                                <select class="form-control" id="selected">
                                                    <?php
                                                    if (mysqli_num_rows($cResult) > 0) {
                                                        while ($moviedata = mysqli_fetch_assoc($cResult)) { ?>
                                                            <option value="<?php echo $moviedata['cinemaId']; ?>"><?php echo $moviedata['cinemaId'] ?></option>
                                                    <?php  }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>For The Date</label>
                                                <input type="date" id="datePicker" class="form-control date" name="date" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Show Time</label>
                                                <input type="time" min="1000" class="form-control showtime" name="showtime">
                                            </div>
                                    </div>

                                    </form>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary mr-1 submitbtn" type="submit" name="addbtn">Submit</button>
                                        <button class="btn btn-secondary" type="reset">Reset</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

            </div>
        </div>
        </section>
        <div class="settingSidebar">
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="settingSidebar-body ps-container ps-theme-default">
                <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Select Layout</h6>
                        <div class="selectgroup layout-color w-50">
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                                <span class="selectgroup-button">Light</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                                <span class="selectgroup-button">Dark</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Sidebar Color</h6>
                        <div class="selectgroup selectgroup-pills sidebar-color">
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Color Theme</h6>
                        <div class="theme-setting-options">
                            <ul class="choose-theme list-unstyled mb-0">
                                <li title="white" class="active">
                                    <div class="white"></div>
                                </li>
                                <li title="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li title="black">
                                    <div class="black"></div>
                                </li>
                                <li title="purple">
                                    <div class="purple"></div>
                                </li>
                                <li title="orange">
                                    <div class="orange"></div>
                                </li>
                                <li title="green">
                                    <div class="green"></div>
                                </li>
                                <li title="red">
                                    <div class="red"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="mini_sidebar_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Mini Sidebar</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="sticky_header_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Sticky Header</span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                        <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                            <i class="fas fa-undo"></i> Restore Default
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
        <div class="footer-left">
            <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
    </footer>
    </div>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="assets/js/page/index.js"></script>
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
    <!-- Jquery CDN LINK  -->

    <script>
        $(document).ready(function() {
            $('.submitbtn').click(function() {

                showdate = $('.date').val();
                showtime = $('.showtime').val();
                showing = $('#currentlyshowing').val();
                selected = $('#selected').val();
                $.ajax({
                    url: "insertshow.php",
                    type: "POST",
                data: {
                        showdate: showdate,
                        showtime: showtime,
                        showing: showing,
                        selected: selected
                    },
                    success: function(result) {
                        alert(result);
                    }
                })
            })
        })
        document.getElementById('datePicker').valueAsDate = new Date()
    </script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>