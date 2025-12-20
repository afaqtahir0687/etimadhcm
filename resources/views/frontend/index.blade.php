@extends('layouts.master')
@section('content')

  <section id="hero" class="hero section dark-background">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item active">
        <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
        <div class="carousel-container" style="text-align: center">
          <h2>Managing payroll & HR operations<br></h2>
          <p>Driving accuracy, compliance, and efficiency by managing end-to-end payroll and HR operations that keep the
            organization running smoothly.</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
        <div class="carousel-container" style="text-align: center">
          <h2>AI Driven Policies HelpDesk</h2>
          <p>Delivering instant, accurate policy guidance through an AI-driven helpdesk that streamlines employee support
            and reduces resolution time.</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
        <div class="carousel-container" style="text-align: center">
          <h2>AI Driven Organograms</h2>
          <p>Revolutionizing organizational mapping with AI-powered tools that simplify organogram creation and deliver
            deeper structural insights.</p>
        </div>
      </div>
      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators"></ol>

    </div>

  </section>

  <section id="about" class="about section">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
          <h2 class="heading-1">Where Simplicity Meets Sophistication</h2>
          <p>
            Our Human Capital Management (HCM) system is designed to streamline processes, enhance productivity, and
            empower employees, all while ensuring compliance with local regulations.
          </p>
          <ul>
            <li><i class="bi bi-check2-circle"></i> <span>Employee Self Service Portal <span class="sub-head">Ess</span>
              </span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Line Manager Portal <span class="sub-head">LM</span> </span>
            </li>
            <li><i class="bi bi-check2-circle"></i> <span>HR Portal <span class="sub-head">HR</span> </span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Leadership Portal <span class="sub-head">LP</span> </span></li>
          </ul>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

          <h2 class="heading-1">Freemium Package (Upto 05 Employees)</h2>
          <p>Our Freemium Package supports up to five employees and offers the same powerful features as the Premium
            plan—giving small teams full access without limitations.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="adv-features" class="features section">

  <div class="container section-title" data-aos="fade-up">
    <span class="description-title">Advanced Features</span>
    <h2>Advanced Features</h2>
    <p>Advanced HR and compliance features designed to streamline workforce management</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th style="width: 30%;">Feature</th>
                <th style="width: 70%;">Compliance & Benefit</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td><strong>AI Driven Policies</strong></td>
                <td>
                  Automatically generate, manage, and update HR policies using AI-powered intelligence to ensure
                  consistency, regulatory alignment, and reduced manual effort across the organization.
                </td>
              </tr>

              <tr>
                <td><strong>AI Driven Organograms</strong></td>
                <td>
                  Dynamically create and maintain organizational charts based on real-time employee data, enabling
                  clear reporting structures, role visibility, and better workforce planning.
                </td>
              </tr>

              <tr>
                <td><strong>Dashboard Reporting</strong></td>
                <td>
                  Centralized dashboards provide real-time insights into workforce metrics, compliance status, and
                  operational performance, supporting data-driven decision-making.
                </td>
              </tr>

              <tr>
                <td><strong>User Access Control</strong></td>
                <td>
                  Role-based access control ensures users only view and manage information relevant to their
                  responsibilities, enhancing data security and compliance governance.
                </td>
              </tr>

              <tr>
                <td><strong>Tiered Approval System</strong></td>
                <td>
                  Multi-level approval workflows ensure transparency, accountability, and proper authorization for HR
                  processes such as leave, payroll changes, and employee actions.
                </td>
              </tr>

              <tr>
                <td><strong>Letters & Correspondence System</strong></td>
                <td>
                  Automated generation and management of employee letters and official correspondence ensures
                  standardized documentation, faster processing, and audit-ready record keeping.
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</section>

  <!-- Features Section -->
  <section id="key-features" class="features section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-xl-7 col-lg-6 video-box d-flex justify-content-center align-items-center position-relative"
          data-aos="zoom-out" data-aos-delay="100">
          <img src="assets/img/featureimg/graphs.png" alt="Graph Image" class="img-fluid" style="cursor:pointer"
            data-bs-toggle="modal" data-bs-target="#imageModal">
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="play-btn"></a>
        </div>

        <div class="col-xl-5 col-lg-6 d-flex flex-column justify-content-center px-lg-5" data-aos="fade-up"
          data-aos-delay="200">
          <h3>Key Features</h3>
          <p>Explore the comprehensive features that make EtimadHCM the ultimate solution for your organization.</p>

          <div class="icon-box d-flex position-relative">
            <i class="bi bi-easel flex-shrink-0"></i>
            <div>
              <h4 class="title">1. Cloud based Software</h4>
              <p class="description">Secure, flexible, and accessible—powered by the cloud.</p>
            </div>
          </div>

          <div class="icon-box d-flex position-relative">
            <i class="bi bi-patch-check flex-shrink-0"></i>
            <div>
              <h4 class="title">2. User Friendly Interface</a>
              <p class="description">Simple, intuitive, and effortless to use.</p>
            </div>
          </div>

          <div class="icon-box d-flex position-relative">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4 class="title">3. PC & Mobile Browser Support</h4>
              <p class="description">Work from any device with full support for PC and mobile browsing.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Image Popup Modal -->
  <div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-transparent border-0">
        <img src="assets/img/featureimg/graphs.png" class="img-fluid rounded">
      </div>
    </div>
  </div>

  <section id="features" class="features section">
    <div class="container">
      <div class="row gy-4">

        <div class="col-xl-5 col-lg-6 d-flex flex-column justify-content-center px-lg-5" data-aos="fade-up"
          data-aos-delay="200">
          <h3>Key Features</h3>
          <p>Explore the comprehensive features that make EtimadHCM the ultimate solution for your organization.</p>

          <div class="icon-box d-flex position-relative">
            <i class="bi bi-easel flex-shrink-0"></i>
            <div>
              <h4 class="title">4. Multiple Locations Supporte></h4>
              <p class="description">Secure, flexible, and accessible—powered by the cloud.</p>
            </div>
          </div>

          <div class="icon-box d-flex position-relative">
            <i class="bi bi-patch-check flex-shrink-0"></i>
            <div>
              <h4 class="title">5. Economical & Flexible</a></              <p class="description">Simple, intuitive, and effortless to use.</p>
            </div>
          </div>

          <div class="icon-box d-flex position-relative">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4 class="title">6. Compliance Features</a></h            <p class="description">Work from any device with full support for PC and mobile browsing.</p>
            </div>
          </div>
        </div>

        <div class="col-xl-7 col-lg-6 video-box d-flex justify-content-center align-items-center position-relative"
          data-aos="zoom-out" data-aos-delay="100">

          <!-- Clickable Image -->
          <img src="assets/img/featureimg/smartphone-etimad_main.png" alt="Graph Image" class="img-fluid"
            style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#imageModalMobile">

          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="play-btn"></a>
        </div>

      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="imageModalMobile" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-transparent border-0">
        <!-- <div class="modal-header border-0">
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> -->
        <div class="modal-body text-center">
          <img src="assets/img/featureimg/smartphone-etimad_main.png" class="img-fluid rounded"
            style="max-width: 70%; height: auto; margin: auto;" data-bs-dismiss="modal">
        </div>
      </div>
    </div>
  </div>
  <!-- Features Section -->
  <!-- ====================== SECTION 3 ====================== -->
  <section id="features-3" class="features section">
    <div class="container">
      <div class="row gy-4">

        <div class="col-xl-7 col-lg-6 video-box d-flex justify-content-center align-items-center position-relative"
          data-aos="zoom-out" data-aos-delay="100">

          <img src="assets/img/featureimg/etimad_screenshot.jpg" alt="Screenshot" class="img-fluid" style="cursor:pointer"
            data-bs-toggle="modal" data-bs-target="#imageModal3">

          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="play-btn"></a>
        </div>

        <div class="col-xl-5 col-lg-6 d-flex flex-column justify-content-center px-lg-5" data-aos="fade-up"
          data-aos-delay="200">

          <h3>Key Features</h3>
          <p>Explore the comprehensive features that make EtimadHCM the ultimate solution for your organization.</p>

          <div class="icon-box d-flex position-relative">
            <i class="bi bi-easel flex-shrink-0"></i>
            <div>
              <h4 class="title">7. AI Policies Support</h4>
              <p class="description">Secure, flexible, and accessible—powered by the cloud.</p>
            </div>
          </div>

          <div class="icon-box d-flex position-relative">
            <i class="bi bi-patch-check flex-shrink-0"></i>
            <div>
              <h4 class="title">8. Compensation & Benefits Framework</h4>
              <p class="description">Simple, intuitive, and effortless to use.</p>
            </div>
          </div>

          <div class="icon-box d-flex position-relative">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4 class="title">9. AI Driven Organograms</h4>
              <p class="description">Work from any device with full support for PC and mobile browsing.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Modal 3 -->
  <div class="modal fade" id="imageModal3" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-transparent border-0 shadow-none">
        <img src="assets/img/featureimg/etimad_screenshot.jpg" class="img-fluid rounded"
          style="max-width:100%; height:auto;">
      </div>
    </div>
  </div>

  <section id="uae-features" class="features section">

    <div class="container section-title" data-aos="fade-up">
      <span class="description-title">UAE Specific Features</span>
      <h2>UAE Specific Features</h2>
      <p>Comprehensive compliance and HR features designed specifically for the UAE market</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th style="width: 30%;">Feature</th>
                  <th style="width: 70%;">Compliance & Benefit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>WPS & SIF Generation</strong></td>
                  <td>Automated calculation and export of Salary Information File (SIF) for UAE Wage Protection System
                    (WPS).</td>
                </tr>
                <tr>
                  <td><strong>Gratuity Calculation</strong></td>
                  <td>Automatic computation of End-of-Service Gratuity and Leave Encashment.</td>
                </tr>
                <tr>
                  <td><strong>Final Settlement</strong></td>
                  <td>Full Exit Management support with all legally required components (Salary, Gratuity, Leave,
                    Deductions).</td>
                </tr>
                <tr>
                  <td><strong>Dubai Payroll Support</strong></td>
                  <td>Standardized payslips and components (Basic Salary, Allowances, Overtime, Deductions).</td>
                </tr>
                <tr>
                  <td><strong>Emiratisation</strong></td>
                  <td>Internal fields to track Social Security/Pension for Emirati Nationals and NAFIS subsidy tracking.
                  </td>
                </tr>
                <tr>
                  <td><strong>Employee Records & Work Permits</strong></td>
                  <td>Comprehensive employee database along with work permits/visa renewals support.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>



  

  <section id="services" class="services section">
    <div class="container section-title" data-aos="fade-up">
      <span class="description-title">Modules</span>
      <h2>Modules</h2>
      <p>
        Modules represent structured, independent components of a system that work together to deliver organized,
        scalable, and efficient functionality.</p>
    </div>

    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 bevel-box" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-bar-chart icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Payroll Module</a></h4>
              <p class="description">To provide employees with fair rewards, meaningful incentives, and essential support
                that promote motivation and long-term commitment</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 bevel-box" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Expenses & Travel Management
                  System</a></h4>
              <p class="description">To simplify the submission, approval, and tracking of travel and expense claims,
                ensuring transparency, control, and timely reimbursements.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 bevel-box" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Employee Onboarding & Assets
                  Management</a></h4>
              <p class="description">To ensure a smooth start for new hires by streamlining orientation processes and
                timely allocation of required tools and resources.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 bevel-box" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-bar-chart icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Leave & Attendance Management System</a></h4>
              <p class="description">To provide employees with fair rewards, meaningful incentives, and essential support
                that promote motivation and long-term commitment</p>
            </div>
          </div>
        </div>

          <div class="col-md-6 bevel-box" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Loans & Advances Management
                  System</a></h4>
              <p class="description">To streamline the request, approval, and tracking of employee loans and advances,
                ensuring transparency, accuracy, and timely recoveries.</p>
            </div>
          </div>
        </div>

         <div class="col-md-6 bevel-box" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-bar-chart icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Exit Management System</a></h4>
              <p class="description">To provide employees with fair rewards, meaningful incentives, and essential support
                that promote motivation and long-term commitment</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="team" class="team section">
    <div class="container section-title" data-aos="fade-up">
      <span class="description-title">Leadership</span>
      <h2>Leadership</h2>
      <p>A Leadership brings together individuals with diverse skills and strengths to collaborate, support each other, and
        achieve shared goals effectively and efficiently.</p>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-lg-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <img src="assets/img/team/team-1.jpg" style="height: 72%" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Imran Shahzad</h4>
              <span>Founder & CEO</span>
              <p>
                MBA, LLB, MSc-HRM (UK),
                Assoc. CIPD,
                Certified Trainer of (PIFFA-FIATA-UNCTAD)
                Visiting Lecturer of
                University Of The Punjab - IAS (Labour Laws)
                Quaid-E-Azam Law College (Law of Contract)
                Institute of Management Sciences (HRM)
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <img src="assets/img/team/team-2.jpg"  style="height: 72%" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Mudassar Masood</h4>
              <span>Senior Member Advisory Board</span>
              <p>
                Senior Vice Chairman PIAF.
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <section id="testimonials" class="testimonials section dark-background">

    <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Imran Shahzad</h3>
              <h4>CEO</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>
                  As the Founder and CEO of Fais
                  Associates Pvt Ltd, I bring about
                  three decades of transformative
                  expertise in HR, organizational
                  development, and corporate
                  governance to empower businesses
                  with end-to-end professional solutions.
                  My journey—from shaping HR
                  frameworks for renowned clients to
                  lecturing at premier institutions—has
                  cemented my passion for driving
                  growth through strategic people
                  management, operational efficiency,
                  and compliance excellence.
                </span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
      <span class="description-title">Contact</span>
      <h2>Get in Touch</h2>
      <p>Let’s Start a Conversation That Moves Your Business Forward</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 270px;"
          src="https://maps.google.com/maps?q=FAIS+Associates+Pvt.+Ltd,+44+B,+Phase-3+Govt.+Employees+Cooperative+Housing+Society+Phase+3,+Lahore,+54700,+Pakistan&t=&z=15&ie=UTF8&iwloc=&output=embed"
          frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Head Office</h3>
              <p>FAIS Associates Pvt. Ltd<br>44 B, Phase-3 Govt. Employees Cooperative Housing Society Phase 3, Lahore,
                54700, Pakistan</p>
            </div>
          </div>

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Regional Office (UAE)</h3>
              <p>Office No. 1004-B, 1st Floor,<br>MISA Business Center, Wavez by Danube Properties, Liwan, Dubai, UAE</p>
            </div>
          </div>

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <p>PAK +92 311 2747766 <br> UAE +971 563 949 889</p>
            </div>
          </div>

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <p>info@eitmadhcm.com</p>
            </div>
          </div>
        </div>

        <div class="col-lg-8">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection