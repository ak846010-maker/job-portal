<?php
include "../job_portal-gh_pages/componets/header.php";
?>

<div class="overlay4">
  <?php include "../job_portal-gh_pages/componets/navbar.php"; ?>

  <!-- Services Section -->
  <section class="services py-5">
    <div class="container">
      <!-- Section Header -->
      <div class="text-center mb-5">
        <h2 class="fw-bold display-5 text-white">Our Services</h2>
        <p class="text-white fs-5">Explore the wide range of solutions we offer across industries.</p>
      </div>

      <!-- Services Grid -->
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 text-center">
            <i class="bi bi-person-badge-fill text-primary mb-3"></i>
            <h5 class="fw-bold">Recruitment & Staffing</h5>
            <p class="small">End-to-end hiring solutions for all sectors, including permanent and temp staffing.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100 text-center">
            <i class="bi bi-cash-coin text-success mb-3"></i>
            <h5 class="fw-bold">Payroll Management</h5>
            <p class="small">Seamless payroll processing, compliance tracking, and employee benefits services.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100 text-center">
            <i class="bi bi-shield-check text-info mb-3"></i>
            <h5 class="fw-bold">Security Services</h5>
            <p class="small">Trusted personnel for security, surveillance, and facility management.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100 text-center">
            <i class="bi bi-laptop text-warning mb-3"></i>
            <h5 class="fw-bold">IT & Back Office</h5>
            <p class="small">Scalable IT support, data entry, and tailored business process outsourcing.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100 text-center">
            <i class="bi bi-globe text-danger mb-3"></i>
            <h5 class="fw-bold">PAN-India Operations</h5>
            <p class="small">Coverage across 18+ states with strong operational infrastructure and manpower.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100 text-center">
            <i class="bi bi-people-fill text-secondary mb-3"></i>
            <h5 class="fw-bold">HR Consultancy</h5>
            <p class="small">Smart HR solutions including audits, compliance, employee engagement & strategy.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #e3f2fd, #fce4ec);
      background-attachment: fixed;
    }

    .services {
      padding-top: 60px;
      padding-bottom: 120px;
      /* Increased gap above footer */
    }

    .card {
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      animation: fadeInUp 1s ease forwards;
      opacity: 0;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border-radius: 16px;
      border: 1px solid rgba(255, 255, 255, 0.15);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
      color: #fff;
      padding: 1.5rem 1rem;
      /* Reduced size */
      font-size: 0.9rem;
    }

    .card h5 {
      font-size: 1rem;
      color: #fff;
    }

    .card p {
      color: #fff;
    }

    .card i {
      font-size: 2rem;
      margin-bottom: 1rem;
      transition: transform 0.4s ease, filter 0.4s ease;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    }

    .card:hover i {
      transform: scale(1.2) rotate(5deg);
      filter: drop-shadow(0 0 5px rgba(13, 110, 253, 0.8));
    }

    @keyframes fadeInUp {
      from {
        transform: translateY(30px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    footer {
      margin-top: 0;
      padding-top: 0;
    }

    @media (max-width: 767.98px) {
      .services .display-5 {
        font-size: 2rem;
      }

      .card {
        font-size: 0.85rem;
      }

      .card i {
        font-size: 1.8rem;
      }
    }
  </style>
</div>

<?php
include "../job_portal-gh_pages/componets/footer.php";
?>