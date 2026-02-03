<?php
include "../job_portal-gh_pages/componets/header.php";
include "../job_portal-gh_pages/componets/navbar.php";
?>

<!-- Custom Styles -->
<style>
    html {
        scroll-behavior: smooth;
    }

    .toc-link {
        color: #0d6efd;
        font-weight: 500;
        border-left: 3px solid transparent;
        padding-left: 8px;
        transition: all 0.3s ease;
    }

    .toc-link:hover,
    .toc-link.active {
        border-left: 3px solid #0d6efd;
        text-decoration: none;
        color: #0b5ed7;
    }

    .policy-section h2 {
        margin-top: 1.5rem;
        color: #0d6efd;
        font-weight: 600;
    }

    .policy-section ul {
        padding-left: 1.5rem;
    }

    .policy-section .list-group-item {
        border: none;
        padding-left: 0;
        background: transparent;
    }

    .card {
        border-radius: 12px;
    }
</style>

<!-- Privacy Policy Content -->
<div class="container py-5">
    <div class="row">
        <!-- Table of Contents -->
        <div class="col-lg-3 mb-4">
            <div class="card sticky-top shadow-sm" style="top: 2rem;">
                <div class="card-body">
                    <h5 class="card-title mb-3">📑 Contents</h5>
                    <nav class="nav flex-column">
                        <a class="toc-link py-2" href="#overview">Overview</a>
                        <a class="toc-link py-2" href="#collection">Information Collection</a>
                        <a class="toc-link py-2" href="#use">Information Use</a>
                        <a class="toc-link py-2" href="#sharing">Information Sharing</a>
                        <a class="toc-link py-2" href="#security">Data Security</a>
                        <a class="toc-link py-2" href="#rights">Your Rights</a>
                        <a class="toc-link py-2" href="#updates">Policy Updates</a>
                        <a class="toc-link py-2" href="#contact">Contact Us</a>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h1 class="mb-4 text-primary fw-bold">Privacy Policy</h1>
                    <!-- <p class="text-muted">Last updated: December 25, 2024</p> -->

                    <!-- Overview -->
                    <div id="overview" class="policy-section py-3">
                        <h2>Overview</h2>
                        <p>This Privacy Policy describes how we collect, use, and handle your personal information when you use our services.</p>
                    </div>

                    <!-- Information Collection -->
                    <div id="collection" class="policy-section py-3">
                        <h2>Information Collection</h2>
                        <h5 class="mt-3">Information you provide</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Account information (name, email, phone number)</li>
                            <li class="list-group-item">Profile information</li>
                            <li class="list-group-item">Payment information</li>
                        </ul>

                        <h5 class="mt-3">Information automatically collected</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Device information</li>
                            <li class="list-group-item">Log data</li>
                            <li class="list-group-item">Usage information</li>
                        </ul>
                    </div>

                    <!-- Information Use -->
                    <div id="use" class="policy-section py-3">
                        <h2>Information Use</h2>
                        <p>We use collected information to:</p>
                        <ul class="list-group">
                            <li class="list-group-item">Provide and maintain our services</li>
                            <li class="list-group-item">Improve user experience</li>
                            <li class="list-group-item">Send important notifications</li>
                            <li class="list-group-item">Prevent fraud and abuse</li>
                        </ul>
                    </div>

                    <!-- Sharing -->
                    <div id="sharing" class="policy-section py-3">
                        <h2>Information Sharing</h2>
                        <p>We may share your information with:</p>
                        <ul class="list-group">
                            <li class="list-group-item">Service providers</li>
                            <li class="list-group-item">Legal authorities when required</li>
                            <li class="list-group-item">Business partners (with your consent)</li>
                        </ul>
                    </div>

                    <!-- Security -->
                    <div id="security" class="policy-section py-3">
                        <h2>Data Security</h2>
                        <p>We implement appropriate security measures to protect your personal information, including:</p>
                        <ul class="list-group">
                            <li class="list-group-item">Encryption of data in transit and at rest</li>
                            <li class="list-group-item">Regular security assessments</li>
                            <li class="list-group-item">Access controls and monitoring</li>
                        </ul>
                    </div>

                    <!-- Rights -->
                    <div id="rights" class="policy-section py-3">
                        <h2>Your Rights</h2>
                        <p>You have the right to:</p>
                        <ul class="list-group">
                            <li class="list-group-item">Access your personal data</li>
                            <li class="list-group-item">Request data correction</li>
                            <li class="list-group-item">Request data deletion</li>
                            <li class="list-group-item">Object to processing</li>
                        </ul>
                    </div>

                    <!-- Updates -->
                    <div id="updates" class="policy-section py-3">
                        <h2>Policy Updates</h2>
                        <p>We may update this policy periodically. We will notify you of any material changes by posting the new policy on this page.</p>
                    </div>

                    <!-- Contact -->
                    <div id="contact" class="policy-section py-3">
                        <h2>Contact Us</h2>
                        <p>If you have questions about this Privacy Policy, please contact us at:</p>
                        <div class="card bg-light border-0 shadow-sm mt-3">
                            <div class="card-body">
                                <p class="mb-1"><strong>Email:</strong> privacy@example.com</p>
                                <p class="mb-1"><strong>Address:</strong> Shendra MIDC, Aurangabad (MH)</p>
                                <p class="mb-0"><strong>Phone:</strong> +91-1234567890</p>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <hr class="mt-5">
                    <p class="text-muted small mb-0">&copy; <?= date("Y"); ?> Fulambri Naukari Bank. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "../job_portal-gh_pages/componets/footer.php";
?>