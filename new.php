<?php
include "../job_portal-gh_pages/componets/header.php";
?>

<div class="">

    <style>
        /* About Us Section Styling */
        .about-us {
            background-color: #f8f9fa;
        }

        .about-us img {
            transition: transform 0.3s ease-in-out;
        }

        .about-us img:hover {
            transform: scale(1.05);
        }

        .about-us .list-unstyled li {
            margin-bottom: 10px;
        }

        .about-us .btn-primary {
            transition: all 0.3s ease;
        }

        .about-us .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Clients Section Styling */
        .clients-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('https://images.unsplash.com/photo-1521791055366-0d553872125f') center/cover no-repeat;
        }

        .client-logo {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 15px;
            transition: all 0.3s ease-in-out;
        }

        .client-logo img {
            max-width: 100%;
            height: auto;
            filter: grayscale(100%);
            transition: filter 0.3s ease-in-out;
        }

        .client-logo:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .client-logo:hover img {
            filter: grayscale(0%);
        }
    </style>

    <!-- navbar -->
    <?php
    include "../job_portal-gh_pages/componets/navbar.php";
    ?>

    <!-- Hero Banner -->
    <div class="w-100 d-flex justify-content-start px-4 text-white align-items-center"
        style="height: 60vh; background-image: url('https://images.unsplash.com/photo-1519114056088-b877fe073a5e?q=80&w=1933&auto=format&fit=crop&ixlib=rb-4.1.0'); background-size: cover; background-position: center;">
        <h3 class="fw-bold display-4">Company Name</h3>
    </div>

    <!-- About Us Section -->
    <section class="about-us py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4">About Our Company</h2>
                    <p class="text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis
                        egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris
                        quam.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-primary">Our Mission</h5>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle me-2 text-primary"></i>Innovative Solutions</li>
                                <li><i class="bi bi-check-circle me-2 text-primary"></i>Customer Satisfaction</li>
                                <li><i class="bi bi-check-circle me-2 text-primary"></i>Sustainable Practices</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-primary">Our Vision</h5>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-bullseye me-2 text-primary"></i>Global Reach</li>
                                <li><i class="bi bi-bullseye me-2 text-primary"></i>Industry Leadership</li>
                                <li><i class="bi bi-bullseye me-2 text-primary"></i>Continuous Growth</li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary mt-4">Learn More</a>
                </div>
                <!-- Image Column -->
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080"
                        alt="About Us" class="img-fluid rounded shadow">
                </div>
            </div>

            <!-- Stats -->
            <div class="row mt-5">
                <div class="col-md-3 col-6 mb-4">
                    <div class="text-center">
                        <i class="bi bi-people fs-1 text-primary mb-2"></i>
                        <h2 class="fw-bold">500+</h2>
                        <p class="text-muted">Clients</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="text-center">
                        <i class="bi bi-briefcase fs-1 text-primary mb-2"></i>
                        <h2 class="fw-bold">1000+</h2>
                        <p class="text-muted">Projects</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="text-center">
                        <i class="bi bi-trophy fs-1 text-primary mb-2"></i>
                        <h2 class="fw-bold">50+</h2>
                        <p class="text-muted">Awards</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="text-center">
                        <i class="bi bi-globe fs-1 text-primary mb-2"></i>
                        <h2 class="fw-bold">20+</h2>
                        <p class="text-muted">Countries</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="clients-section py-5">
        <div class="container">
            <div class="text-center mb-5 text-white">
                <h2 class="fw-bold display-6">Our Clients</h2>
                <p class="fs-5">We proudly work with leading companies worldwide.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <?php
                $clientLogos = [
                    "https://via.placeholder.com/150x80?text=Client+1",
                    "https://via.placeholder.com/150x80?text=Client+2",
                    "https://via.placeholder.com/150x80?text=Client+3",
                    "https://via.placeholder.com/150x80?text=Client+4",
                    "https://via.placeholder.com/150x80?text=Client+5",
                    "https://via.placeholder.com/150x80?text=Client+6"
                ];

                foreach ($clientLogos as $logo) {
                    echo '
                    <div class="col-6 col-md-4 col-lg-2 text-center">
                        <div class="client-logo">
                            <img src="' . $logo . '" alt="Client Logo" class="img-fluid">
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
    </section>

</div>

<?php
include "../job_portal-gh_pages/componets/footer.php";
?>