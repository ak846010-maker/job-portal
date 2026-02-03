<?php
session_start();

// ✅ Check candidate login
if (empty($_SESSION['id_user'])) {
	header("Location: dashboard_candidate.php");
	exit();
}

require_once("database/db.php");
?>
<!doctype html>
<html lang="en">

<head>
	<title>Candidate Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<link rel="stylesheet" href="dashboard.css">
	<link rel="stylesheet" href="assets/css/applied-jobs.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/demo.css">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<div id="wrapper">
		<!-- Sidebar -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="dashboard_candidate.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="page-profile.php"><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
						<li><a href="edit-profile.php"><i class="lnr lnr-pencil"></i> <span>Edit Profile</span></a></li>
						<li><a href="applied-jobs.php"><i class="lnr lnr-calendar-full"></i> <span>Applied Jobs</span></a></li>
						<li><a href="jobs.php"><i class="lnr lnr-briefcase"></i> <span>Available Jobs</span></a></li>
						<li><a href="logout.php"><i class="lnr lnr-arrow-right-circle"></i> <span>Logout</span></a></li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- Main Content -->
		<div class="main">
			<div class="col-md-9 bg-white padding-2">
				<h2 class="attachment-heading-head">Recent Applications</h2>
				<p>Below you will find job roles you have applied for</p>

				<?php
				// ✅ Prepared statement for security
				$sql = "SELECT job_post.id_jobpost, job_post.jobtitle, job_post.createdat, apply_job_post.status 
                        FROM job_post 
                        INNER JOIN apply_job_post 
                        ON job_post.id_jobpost = apply_job_post.id_jobpost 
                        WHERE apply_job_post.id_user = ? 
                        ORDER BY job_post.createdat DESC";

				$stmt = $conn->prepare($sql);
				$stmt->bind_param("i", $_SESSION['id_user']);
				$stmt->execute();
				$result = $stmt->get_result();

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) { ?>
						<div class="attachment-block clearfix padding-2">
							<h4 class="attachment-heading">
								<a href="view-job-post.php?id=<?= htmlspecialchars($row['id_jobpost']) ?>">
									<?= htmlspecialchars($row['jobtitle']) ?>
								</a>
							</h4>
							<div class="attachment-text padding-2">
								<div class="pull-left">
									<i class="fa fa-calendar"></i> <?= htmlspecialchars($row['createdat']) ?>
								</div>
								<div class="pull-right">
									<?php
									if ($row['status'] == 0) {
										echo '<strong class="text-orange">Pending</strong>';
									} elseif ($row['status'] == 1) {
										echo '<strong class="text-red">Rejected</strong>';
									} elseif ($row['status'] == 2) {
										echo '<strong class="text-green">Under Review</strong>';
									}
									?>
								</div>
							</div>
						</div>
				<?php }
				} else {
					echo "<p class='text-muted'>You have not applied for any jobs yet.</p>";
				}

				$stmt->close();
				?>
			</div>
		</div>
	</div>
	<!-- END MAIN -->

	<div class="clearfix"></div>
	<footer>
		<div class="container-fluid">
			<p class="copyright">
				&copy; <?= date("Y") ?> <a href="#" target="_blank">Job-Portal</a>. All Rights Reserved.
			</p>
		</div>
	</footer>
	</div>
	<!-- END WRAPPER -->

	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>