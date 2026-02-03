<?php
include "../job_portal-gh_pages/componets/header.php";
?>
<div class="overlay3">



    <style>
        /* Sticky hover tab */
        .sticky-tab {
            position: fixed;
            top: 40%;
            right: 0;
            background-color: #007bff;
            color: white;
            padding: 10px;
            padding-left: 20px;
            border-radius: 8px 0 0 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 9999;
            width: 40px;
            overflow: hidden;
        }

        .sticky-tab:hover {
            width: 220px;
        }

        .sticky-tab-content {
            white-space: nowrap;
            overflow: hidden;
        }

        .sticky-tab i {
            margin-right: 8px;
        }

        a.tab-link {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
    </style>



    <?php
    include "../job_portal-gh_pages/componets/navbar.php";
    ?>
    <section id="con " class="con py-4 light-background">
        <div class="container py-1">
            <div class="row justify-content-center mb-0.3">
                <div class="col-12 text-center">
                    <h2 class="display-5 fw-bold text-white">📞Contact Us</h2>
                    <p class="text-info">We’d love to hear from you. Drop us a message anytime!</p>
                    <hr class="w-25 mx-auto">
                </div>
            </div>

            <div class="row g-4 align-items-start">
                <!-- Contact Form -->
                <div class="col-md-6 pb-2">
                    <div class="card shadow rounded-4 border-0">
                        <div class="card-body p-3">
                            <form id="contactForm" method="post" action="save_contact.php">
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-semibold">👤 Name</label>
                                    <input type="text" class="form-control rounded-3" name="name" placeholder="Your Name">
                                </div>

                                <div class="mb-3">
                                    <label for="Mobile No" class="form-label fw-semibold">📞 Mobile No </label>
                                    <input type="text" class="form-control rounded-3" name="mobile" placeholder="enter Your Mobile No ">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold">📧 Email</label>
                                    <input type="email" class="form-control rounded-3" name="email" placeholder="name@example.com">
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label fw-semibold">📝 Message</label>
                                    <textarea class="form-control rounded-3" name="message" rows="2" placeholder="Write your message here..."></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 rounded-3 shadow-sm">📨 Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sticky Hover Tab -->
                <div class="sticky-tab">
                    <div class="sticky-tab-content">
                        <a class="tab-link" href="Privacy_Policy.php"><i>🔒</i>Privacy Policy</a>
                    </div>
                </div>


                <!-- Map Embed -->
                <div class="col-md-6">
                    <div class="rounded-4 overflow-hidden shadow-sm border-0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3770.4031495615115!2d75.472229!3d19.865707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1623400548473!5m2!1sen!2sin"
                            width="100%" height="430" frameborder="0" style="border:0;" allowfullscreen="">
                        </iframe>

                    </div>
                </div>
            </div>

        </div>

        <?php
        include "../job_portal-gh_pages/componets/footer.php";
        ?>