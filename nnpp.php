<?php include "../job_portal-gh_pages/componets/header.php" ?>
<?php include "../job_portal-gh_pages/componets/navbar.php" ?>

<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<style>
    /* Banner */
    .banner {
        height: 65vh;
        background-image: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1933&auto=format&fit=crop');
        background-size: cover;
        background-position: center;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: #fff;
    }

    .banner::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4));
    }

    .banner h3 {
        position: relative;
        z-index: 1;
        font-size: 2.8rem;
        font-weight: 700;
        letter-spacing: 1px;
    }

    /* About Section */
    .about-us {
        background-color: #f8f9fa;
    }

    .about-us img {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .about-us img:hover {
        transform: scale(1.07);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .about-us h2 {
        font-size: 2rem;
        font-weight: 700;
        color: #0d6efd;
    }

    .about-us .btn-primary,
    .about-us .btn-outline-dark {
        transition: all 0.3s ease-in-out;
    }

    .about-us .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    .about-us .btn-outline-dark:hover {
        background: #0d6efd;
        color: #fff;
    }

    /* Stats */
    .stats-card {
        background: #fff;
        border-radius: 15px;
        padding: 25px;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
    }

    .stats-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.15);
    }

    .stats-card h2 {
        font-size: 1.8rem;
        color: #0d6efd;
    }

    .caption {
        font-size: 1rem;
        font-weight: 500;
    }
</style>

<!-- Banner -->
<div class="banner">
    <h3 data-aos="fade-down">Fulambri Text Com Pvt. Ltd.</h3>
</div>

<!-- About Us Section -->
<section class="about-us py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <!-- Text Content -->
            <div class="col-md-6" data-aos="fade-right">
                <h2 class="mb-4">About Our Company</h2>
                <p class="text-muted mb-3">
                    Fulambri is a professionally managed group of companies with <b>42 years of experience</b>,
                    led by a highly qualified and experienced team. Founded on <b>16th October 1983</b> by
                    <b>Dr. Deepak Eknath Fulambrikar</b>, the group has evolved into one of the most trusted
                    names in <b>business services and human resource outsourcing</b>.
                </p>
                <p class="text-muted mb-4">
                    Operating in <b>18 states</b> with over <b>200 sites</b> and <b>25,000+ employees</b>,
                    Fulambri Group serves industries including <i>manufacturing, banking, healthcare, IT,
                        logistics, and more</i>.
                </p>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <h5 class="text-primary">Our Mission</h5>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle me-2 text-success"></i> Innovative Solutions</li>
                            <li><i class="bi bi-check-circle me-2 text-success"></i> Customer Satisfaction</li>
                            <li><i class="bi bi-check-circle me-2 text-success"></i> Sustainable Practices</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-primary">Our Vision</h5>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-bullseye me-2 text-danger"></i> Global Reach</li>
                            <li><i class="bi bi-bullseye me-2 text-danger"></i> Industry Leadership</li>
                            <li><i class="bi bi-bullseye me-2 text-danger"></i> Continuous Growth</li>
                        </ul>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <a href="#" class="btn btn-primary px-4">Learn More</a>
                    <a href="/job_portal-gh_pages/files/FOUNDER DESK.pdf" target="_blank"
                        class="btn btn-outline-dark px-4">
                        📄 Download Company Profile
                    </a>
                </div>
            </div>

            <!-- Image & Caption -->
            <div class="col-md-6 text-center" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?w=800&q=80"
                    alt="Company Founder"
                    class="img-fluid rounded shadow mb-2" style="max-width: 90%; height: auto;">
                <div class="caption text-muted">
                    Dr. Deepak Fulambrikar <br> (Director & MD)
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="row text-center mt-5 g-4">
            <div class="col-6 col-md-3" data-aos="zoom-in">
                <div class="stats-card">
                    <i class="bi bi-people fs-1 text-primary mb-2"></i>
                    <h2 class="fw-bold">500+</h2>
                    <p class="text-muted">Clients</p>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="stats-card">
                    <i class="bi bi-briefcase fs-1 text-primary mb-2"></i>
                    <h2 class="fw-bold">1000+</h2>
                    <p class="text-muted">Projects</p>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="stats-card">
                    <i class="bi bi-trophy fs-1 text-primary mb-2"></i>
                    <h2 class="fw-bold">50+</h2>
                    <p class="text-muted">Awards</p>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="stats-card">
                    <i class="bi bi-globe fs-1 text-primary mb-2"></i>
                    <h2 class="fw-bold">20+</h2>
                    <p class="text-muted">Countries</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

<?php include "../job_portal-gh_pages/componets/footer.php" ?>