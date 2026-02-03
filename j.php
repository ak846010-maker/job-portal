<?php
// jobs.php
?>

<?php
include "../job_portal-gh_pages/componets/header.php";
?>

<div class="overlay6">

    <?php
    include "../job_portal-gh_pages/componets/navbar.php";
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Job Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap & Feather Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://unpkg.com/feather-icons"></script>

        <style>
            body {
                background: #dcdcdc;
                margin-top: 20px;
            }

            .category-card {
                border-radius: 12px;
                transition: 0.3s ease;
                cursor: pointer;
            }

            .category-card:hover {
                background-color: #e6f7ff;
                transform: translateY(-4px);
            }

            .widget-26 {
                color: #3c4142;
                font-weight: 400;
            }

            .widget-26 tr:first-child td {
                border: 0;
            }

            .widget-26 .widget-26-job-emp-img img {
                width: 35px;
                height: 35px;
                border-radius: 50%;
            }

            .widget-26 .widget-26-job-title {
                min-width: 200px;
            }

            .widget-26 .widget-26-job-title a {
                font-weight: 400;
                font-size: 0.875rem;
                color: #3c4142;
                line-height: 1.5;
            }

            .widget-26 .widget-26-job-title a:hover {
                color: #68CBD7;
                text-decoration: none;
            }

            .widget-26 .widget-26-job-title .employer-name {
                font-size: 0.8125rem;
                color: #3c4142;
            }

            .widget-26 .widget-26-job-info {
                min-width: 100px;
                font-weight: 400;
            }

            .widget-26 .widget-26-job-salary {
                min-width: 70px;
                font-size: 0.8125rem;
            }

            .widget-26 .widget-26-job-category {
                padding: .5rem;
                display: inline-flex;
                border-radius: 15px;
            }

            .widget-26 .widget-26-job-category .indicator {
                width: 13px;
                height: 13px;
                margin-right: .5rem;
                float: left;
                border-radius: 50%;
            }

            .widget-26 .widget-26-job-category span {
                font-size: 0.8125rem;
                font-weight: 600;
            }

            .widget-26 .widget-26-job-starred svg {
                width: 20px;
                height: 20px;
                color: #fd8b2c;
            }

            .widget-26 .widget-26-job-starred svg.starred {
                fill: #fd8b2c;
            }

            .bg-soft-base {
                background-color: #e1f5f7;
            }

            .bg-soft-warning {
                background-color: #fff4e1;
            }

            .bg-soft-success {
                background-color: #d1f6f2;
            }

            .bg-soft-danger {
                background-color: #fedce0;
            }

            .bg-soft-info {
                background-color: #d7efff;
            }

            .search-form {
                width: 80%;
                margin: 1rem auto;
            }

            .search-form input,
            .search-form select,
            .search-form button {
                height: 100%;
                font-size: 1rem;
            }

            .card-margin {
                margin-bottom: 1.875rem;
            }

            .card {
                border: 0;
                box-shadow: 0px 0px 10px rgba(82, 63, 105, 0.1);
                border-radius: 8px;


                .category-card {
                    border-radius: 12px;
                    transition: 0.3s ease;
                    cursor: pointer;
                    color: white;
                }

                .category-card:hover {
                    transform: translateY(-4px);
                    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
                }

                .bg-soft-blue {
                    background: linear-gradient(135deg, #4e73df, #375ac3);
                }

                .bg-soft-purple {
                    background: linear-gradient(135deg, #6f42c1, #563d7c);
                }

                .bg-soft-orange {
                    background: linear-gradient(135deg, #fd7e14, #e85d04);
                }

                .bg-soft-green {
                    background: linear-gradient(135deg, #20c997, #198754);
                }

            }
        </style>
    </head>

    <body>

        <div class="container">

            <!-- ✅ Job Categories Section -->
            <h4 class="mb-4 text-center">Explore Job Categories</h4>
            <div class="row text-center g-4">

                <div class="col-6 col-md-3">
                    <div class="card p-3 shadow-sm category-card bg-info h-100">
                        <i data-feather="code" class="mb-2" style="font-size: 24px;"></i>
                        <h6 class="mb-1">Software Dev</h6>
                        <p class="text-muted small">120 Jobs</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card p-3 shadow-sm category-card bg-danger h-100">
                        <i data-feather="bar-chart-2" class="mb-2" style="font-size: 24px;"></i>
                        <h6 class="mb-1">Data Science</h6>
                        <p class="text-muted small">80 Jobs</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card p-3 shadow-sm category-card bg-success h-100">
                        <i data-feather="activity" class="mb-2" style="font-size: 24px;"></i>
                        <h6 class="mb-1">Marketing</h6>
                        <p class="text-muted small">45 Jobs</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card p-3 shadow-sm category-card bg-warning h-100">
                        <i data-feather="layout" class="mb-2" style="font-size: 24px;"></i>
                        <h6 class="mb-1">Design</h6>
                        <p class="text-muted small">60 Jobs</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- ✅ Search Form -->
        <div class="row mt-5">
            <div class="col-lg-12 card-margin">
                <div class="card search-form">
                    <div class="card-body p-0">
                        <form id="search-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Location</option>
                                                <option>London</option>
                                                <option>Boston</option>
                                                <option>Mumbai</option>
                                                <option>New York</option>
                                                <option>Toronto</option>
                                                <option>Paris</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                            <input type="text" placeholder="Search..." class="form-control" id="search" name="search">
                                        </div>
                                        <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                            <button type="submit" class="btn btn-base w-100">
                                                <i data-feather="search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- ✅ Job Listings (simplified sample) -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card card-margin">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table widget-26">
                                <tbody>
                                    <tr>
                                        <td><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Company" style="width: 35px; height: 35px; border-radius: 50%;">
                                        </td>
                                        <td>
                                            <div class="widget-26-job-title">
                                                <a href="#">Senior Software Engineer</a>
                                                <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span class="text-muted time">1 day ago</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-info">
                                                <p class="type m-0">Full-Time</p>
                                                <p class="text-muted m-0">in <span class="location">London, UK</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-salary">$50/hr</div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-category bg-soft-base">
                                                <i class="indicator bg-info"></i>
                                                <span>Software Development</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-starred">
                                                <i data-feather="star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="https://www.bootdey.com/img/Content/avatar/avatar2.png" alt="Company" style="width: 35px; height: 35px; border-radius: 50%;">
                                        </td>
                                        <td>
                                            <div class="widget-26-job-title">
                                                <a href="#">Senior Software Engineer</a>
                                                <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span class="text-muted time">1 day ago</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-info">
                                                <p class="type m-0">Full-Time</p>
                                                <p class="text-muted m-0">in <span class="location">London, UK</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-salary">$50/hr</div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-category bg-soft-base">
                                                <i class="indicator bg-info"></i>
                                                <span>Software Development</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-starred">
                                                <i data-feather="star"></i>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Company" style="width: 35px; height: 35px; border-radius: 50%;">
                                        </td>
                                        <td>
                                            <div class="widget-26-job-title">
                                                <a href="#">Senior Software Engineer</a>
                                                <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span class="text-muted time">1 day ago</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-info">
                                                <p class="type m-0">Full-Time</p>
                                                <p class="text-muted m-0">in <span class="location">London, UK</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-salary">$50/hr</div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-category bg-soft-base">
                                                <i class="indicator bg-info"></i>
                                                <span>Software Development</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-starred">
                                                <i data-feather="star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="https://www.bootdey.com/img/Content/avatar/avatar4.png" alt="Company" style="width: 35px; height: 35px; border-radius: 50%;">
                                        </td>
                                        <td>
                                            <div class="widget-26-job-title">
                                                <a href="#">Senior Software Engineer</a>
                                                <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span class="text-muted time">1 day ago</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-info">
                                                <p class="type m-0">Full-Time</p>
                                                <p class="text-muted m-0">in <span class="location">London, UK</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-salary">$50/hr</div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-category bg-soft-base">
                                                <i class="indicator bg-info"></i>
                                                <span>Software Development</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-starred">
                                                <i data-feather="star"></i>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Company" style="width: 35px; height: 35px; border-radius: 50%;">
                                        </td>
                                        <td>
                                            <div class="widget-26-job-title">
                                                <a href="#">Senior Software Engineer</a>
                                                <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span class="text-muted time">1 day ago</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-info">
                                                <p class="type m-0">Full-Time</p>
                                                <p class="text-muted m-0">in <span class="location">London, UK</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-salary">$50/hr</div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-category bg-soft-base">
                                                <i class="indicator bg-info"></i>
                                                <span>Software Development</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-starred">
                                                <i data-feather="star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="https://www.bootdey.com/img/Content/avatar/avatar6.png" alt="Company" style="width: 35px; height: 35px; border-radius: 50%;">
                                        </td>
                                        <td>
                                            <div class="widget-26-job-title">
                                                <a href="#">Senior Software Engineer</a>
                                                <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span class="text-muted time">1 day ago</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-info">
                                                <p class="type m-0">Full-Time</p>
                                                <p class="text-muted m-0">in <span class="location">London, UK</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-salary">$50/hr</div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-category bg-soft-base">
                                                <i class="indicator bg-info"></i>
                                                <span>Software Development</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-starred">
                                                <i data-feather="star"></i>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img src="https://www.bootdey.com/img/Content/avatar/avatar7.png" alt="Company" style="width: 35px; height: 35px; border-radius: 50%;">
                                        </td>
                                        <td>
                                            <div class="widget-26-job-title">
                                                <a href="#">Senior Software Engineer</a>
                                                <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span class="text-muted time">1 day ago</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-info">
                                                <p class="type m-0">Full-Time</p>
                                                <p class="text-muted m-0">in <span class="location">London, UK</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-salary">$50/hr</div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-category bg-soft-base">
                                                <i class="indicator bg-info"></i>
                                                <span>Software Development</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-starred">
                                                <i data-feather="star"></i>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img src="https://www.bootdey.com/img/Content/avatar/avatar8.png" alt="Company" style="width: 35px; height: 35px; border-radius: 50%;">
                                        </td>
                                        <td>
                                            <div class="widget-26-job-title">
                                                <a href="#">Senior Software Engineer</a>
                                                <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span class="text-muted time">1 day ago</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-info">
                                                <p class="type m-0">Full-Time</p>
                                                <p class="text-muted m-0">in <span class="location">London, UK</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-salary">$50/hr</div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-category bg-soft-base">
                                                <i class="indicator bg-info"></i>
                                                <span>Software Development</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-starred">
                                                <i data-feather="star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Add more <tr> jobs here as needed -->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div> <!-- container -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    feather.replace();
</script>
</body>

</html>