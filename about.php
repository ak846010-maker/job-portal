<?php
include "../job_portal-gh_pages/componets/header.php";
?>

<style>
    body {
        margin: 0;
        padding: 0;
        background: linear-gradient(135deg, #2c3e50, #000000);
        background-attachment: fixed;
        font-family: 'Segoe UI', sans-serif;
    }

    .overlay1 {
        padding-top: 0;
    }

    .jumbotron {
        background: rgba(255, 255, 255, 0.02);
        color: #ffffff;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
        border-radius: 20px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        color: #fff;
    }

    .glass-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.6);
    }

    .card-title,
    .card-text {
        color: #ffffff;
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
        opacity: 0.85;
    }

    .btn {
        transition: all 0.3s ease;
        border-radius: 50px;
    }

    .btn:hover {
        transform: scale(1.05);
    }

    .jumbotron-heading {
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .lead {
        font-weight: 300;
        font-size: 1.1rem;
    }

    @media (max-width: 767.98px) {
        .jumbotron-heading {
            font-size: 2rem;
        }

        .lead {
            font-size: 1rem;
        }

        .card-img-top {
            height: 160px;
        }

        .card {
            margin-bottom: 20px;
        }

        .card-group {
            flex-direction: column;
            align-items: center;
        }
    }
</style>

<div class="overlay1">
    <!-- Navbar -->
    <?php include "../job_portal-gh_pages/componets/navbar.php"; ?>

    <!-- Hero Section -->
    <section class="jumbotron d-flex flex-column justify-content-center align-items-center gap-3 py-5"
        style="min-height: 90vh;">
        <div class="container text-center">
            <h1 class="jumbotron-heading">Connecting Talent with Opportunity</h1>
            <p class="lead text-muted">
                At Fulambri Naukari Bank, we simplify the way job seekers and employers connect.
                Our platform helps individuals discover meaningful careers and enables companies
                to find the right talent quickly. Whether you're launching your career or hiring
                top professionals Developers, makes the process smarter, faster, and more transparent.
            </p>
        </div>

        <!-- Cards Section -->
        <div class="container d-flex justify-content-between align-items-start flex-wrap gap-4 py-4 card-group"
            style="width: 80%;">
            <!-- Card 1 -->
            <div class="card glass-card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?q=80&w=2070&auto=format&fit=crop"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fulambri Naukari Bank</h5>
                    <p class="card-text">Find your perfect career path in just a few clicks.</p>
                    <a href="Fulambri_Bank.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card glass-card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?q=80&w=2070&auto=format&fit=crop"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fulambri Text Com Pvt. Ltd.</h5>
                    <p class="card-text">Boost your hiring strategy with our B2B services.</p>
                    <a href="ftcp.php" class="btn btn-primary">Get Informed</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card glass-card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?q=80&w=2070&auto=format&fit=crop"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Naukari Bank Job Portal</h5>
                    <p class="card-text">Your gateway to smart job applications and success.</p>
                    <a href="webven.php" class="btn btn-primary">Visit Web Portal</a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include "../job_portal-gh_pages/componets/footer.php";
?>