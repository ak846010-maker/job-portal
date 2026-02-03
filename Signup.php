<?php
include "../job_portal-gh_pages/componets/header.php";
?>
<div class="overlay2">

    <div class="container  d-flex flex-column  justify-content-center align-items-center" style="height:90vh">
        <div href="index.php" class="w-100 home  text-start mt-3 d-flex gap-1 align-items-center">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                    class="bi bi-arrow-left-short text-white" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                </svg>
            </a>
            <a href="index.php">

                <p class="p-0 m-0 text-white test">Home</p>
            </a>
        </div>
        <div class="row align-items-md-stretch w-100">
            <div class="col-12 pb-2 text-center">
                <h1>Sign Up</h1>
                <p class="lead text-white">Choose the right portal to access job opportunities or find top talent.</p>
            </div>

            <!-- Company Login Section -->
            <div class="col-md-6 mb-3">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2>For Employers</h2>
                    <p>Post jobs, manage applicants, and find the perfect candidates to grow your team. Join us to
                        streamline your hiring process with powerful tools tailored for employers.</p>
                    <a href="page-login-company.php" class="btn btn-outline-light mt-3">Company Login</a>
                </div>
            </div>

            <!-- Candidate Login Section -->
            <div class="col-md-6 mb-3">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>For Job Seekers</h2>
                    <p>Create your profile, upload your resume, and apply to thousands of job opportunities across
                        multiple
                        industries. Let your next career move start here.</p>
                    <a href="page-login.php" class="btn btn-outline-secondary mt-3">Candidate Login</a>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
include "../job_portal-gh_pages/componets/footer.php";
?>