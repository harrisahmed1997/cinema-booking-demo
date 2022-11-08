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



            ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div>
                            <div class="movie-form">
                                <div class="card">
                                    <div class="card-header">
                                        <!-- 
                                        <h4>HTML5 Form Basic</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="addmovie.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Movie Name</label>
                                                <input type="text" class="form-control" name="moviename">
                                            </div>
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control" name="moviecat">
                                                    <option>Action/Adventure</option>
                                                    <option>SciFi</option>
                                                    <option>Horror</option>
                                                    <option>Comedy</option>
                                                    <option>Kids</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option>Showing</option>
                                                    <option>Upcoming</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Movie Description</label>
                                                <textarea class="form-control" name="moviedes">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis quos tempore voluptatibus.</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Run Time (Duration in Seconds)</label>
                                                <input type="number" min="1000" class="form-control" name="movieduration">
                                            </div>
                                            <div class="section-title">Movie Img</div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="movieimg" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                    </div> -->
                                        <div class="col-12 col-md-12 col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Movie Details</h4>
                                                </div>
                                                <div class="card-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-md">

                                                            <tr>
                                                                <th>#</th>
                                                                <th>Movie Name</th>
                                                                <th>Movie Category</th>
                                                                </th>
                                                                <th>Movie Status</th>
                                                            </tr>

                                                            <?php
                                                            $moviedetails = "SELECT * from nueplex.movies";
                                                            $result = mysqli_query($connection, $moviedetails);
                                                            $i = 1;
                                                            if (mysqli_num_rows($result) > 0) {
                                                                while ($rows = mysqli_fetch_assoc($result)) { ?>
                                                                    <tr>
                                                                        <td><?php echo $i++; ?></td>
                                                                        <td class="moviename"><?php echo $rows['movieName'] ?></td>
                                                                        <td class="movieCat"><?php echo $rows['movieCat']; ?></td>
                                                                        <td>
                                                                            <div class="mvstatus badge badge-<?php echo ($rows['movieStatus'] == "Showing") ? 'success' : 'warning'; ?>"><?php echo $rows['movieStatus']; ?></div>
                                                                        </td>
                                                                        <td> <button type="button" class="btn btn-primary editbtn" data-toggle="modal" data-target="#exampleModalCenter" id='<?php echo $rows['movieId'] ?>'>Edit</button></td>

                                                                    </tr>
                                                            <?php  }
                                                            }
                                                            ?>

                                                        </table>
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
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Movie Info</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="movie-form">
                                <div class="card">
                                    <div class="card-header">


                                    </div>
                                    <div class="card-body">
                                        <div class="edit-form">
                                            <div class="form-group">
                                                <label>Movie Name</label>
                                                <input type="text" class="form-control movienameinput" name="moviename">
                                            </div>
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control moviecatinput" name="moviecat">
                                                    <option>Action/Adventure</option>
                                                    <option>SciFi</option>
                                                    <option>Horror</option>
                                                    <option>Comedy</option>
                                                    <option>Kids</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control moviestatusinput" name="status">
                                                    <option>Showing</option>
                                                    <option>Upcoming</option>
                                                    <option>Removed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-primary mr-1 submitbtn" type="submit" name="addbtn">Submit</button>
                                            <button class="btn btn-secondary" type="reset">Reset</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="button" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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


    <script>
        $(document).ready(function() {
            $('.editbtn').click(function() {
                id = $(this).attr('id')

                moviename = ($(this).closest("tr").find('.moviename').text())
                moviecat = ($(this).closest("tr").find('.movieCat').text())
                mvstatus = ($(this).closest("tr").find('.mvstatus').text())

                $('.movienameinput').val(moviename);
                $('.moviecatinput').val(moviecat);
                $('.moviestatusinput').val(mvstatus);

            })
        })
    </script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>