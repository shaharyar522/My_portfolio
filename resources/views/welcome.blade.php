<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SHAHAR_YAR</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Style
  * Template URL: https://bootstrapmade.com/style-bootstrap-portfolio-template/
  * Updated: Jul 02 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <!-- Uncomment the line below if you also wish to use an text logo -->
        <!-- <h1 class="sitename">Style</h1>  -->
      </a>

      <nav id="navmenu" class="navmenu">

        <div class="profile-img">
          <img src="assets/img/profile/profile-square-1.webp" alt="" class="img-fluid rounded-circle">
        </div>

        <a href="index.html" class="logo d-flex align-items-center justify-content-center active">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.webp" alt=""> -->
          <h1 class="sitename">Shahar Yar</h1>
        </a>

        <div class="social-links text-center">
          <a href="https://github.com/shaharyar522" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-github"></i>
          </a>
          <a href="https://www.linkedin.com/in/shaharyarkhan4511/" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-twitter"></i>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-facebook"></i>
          </a>

        </div>

        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row g-0 align-items-center">

          <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-delay="100">
            <div class="content-wrapper">
              <h2>Hi, I'm <span style="font-size: 40px;" class="hero-title"> Shahar_Yar </span> - a Creative
                Developer
              </h2>
              <h1 class="hero-title">Expertise: <span class="typed"
                  data-typed-items="HTML,CSS,JavaScript,Bootstrap, AJAX, PHP, Laravel, REST APIs, MySQL,Database Mgmt"></span>
              </h1>




              <p class="lead" style="text-align: justify; text-justify: inter-word;  max-width: 800px;">
                I am <strong>Shaharyar</strong>, a backend developer focused on building efficient, scalable, and
                high-performance web applications.
                I specialize in designing robust server-side solutions and APIs, writing clean and maintainable code
                that powers innovative software.
                With strong problem-solving skills and a commitment to continuous learning, I deliver reliable solutions
                that help businesses achieve their goals and turn ideas into reality.
              </p>

              <div class="hero-actions" data-aos="fade-up" data-aos-delay="300">
                <a href="#projects" id="view-projects" class="btn btn-primary">View My Work</a>
                <a href="#contact" id="get-in-touch" class="btn btn-outline">Get In Touch</a>
              </div>

              <div class="social-links" data-aos="fade-up" data-aos-delay="400">
                <a href="https://github.com/shaharyar522" target="_blank" rel="noopener noreferrer">
                  <i class="bi bi-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/shaharyarkhan4511/" target="_blank" rel="noopener noreferrer">
                  <i class="bi bi-linkedin"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <i class="bi bi-instagram"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <i class="bi bi-twitter"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <i class="bi bi-facebook"></i>
                </a>

              </div>
            </div>
          </div>

          <div class="col-lg-6 hero-image" data-aos="fade-left" data-aos-delay="200">
            <div class="image-container">
              <div class="floating-elements">

                <!-- Card 1: Web Development -->
                <div class="floating-card card-1" data-aos="zoom-in" data-aos-delay="300">
                  <i class="bi bi-code-slash"></i>
                  <span>Web Development</span>
                </div>

                <!-- Card 2: Database Management -->
                <div class="floating-card card-2" data-aos="zoom-in" data-aos-delay="400">
                  <i class="bi bi-database"></i>
                  <span>Database Mgmt</span>
                </div>

                <!-- Card 3: APIs & Backend -->
                <div class="floating-card card-3" data-aos="zoom-in" data-aos-delay="500">
                  <i class="bi bi-diagram-3"></i>
                  <span>Performance Opt</span>
                </div>

              </div>

              <img src="assets/img/profile/profile-square-1.webp" alt="Portfolio Hero"
                class="img-fluid hero-main-image">
              <div class="image-overlay"></div>
            </div>
          </div>


        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>About</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">

          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
            <div class="profile-image-wrapper">
              <div class="profile-image">
                <img src="assets/img/profile/profile-square-1.webp" alt="Profile" class="img-fluid">
              </div>
              <div class="signature-section">
                <img src="assets/img/misc/signature-1.webp" alt="Signature" class="signature">
                <p class="quote">Code-driven backend developer crafting scalable solutions worldwide.</p>

              </div>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <div class="intro">
                <h2>Hi, I'm Shahar Yar</h2>
                <p>
                  I specialize in backend development with PHP and Laravel, following the MVC architecture to build
                  scalable and secure web applications.
                  Alongside backend expertise, I also work with modern frontend technologies to deliver complete,
                  user-friendly solutions.
                  From designing robust APIs and managing databases to creating responsive interfaces, I provide
                  end-to-end development that ensures performance, security, and reliability.
                </p>



                <div class="skills-grid">
                  <!-- Backend Development -->
                  <div class="skill-item" data-aos="zoom-in" data-aos-delay="400">
                    <div class="skill-icon">
                      <i class="bi bi-server"></i>
                    </div>
                    <h4>Backend Development</h4>
                    <p>Building scalable and secure server-side applications using PHP, Laravel (MVC), MySQL</p>
                  </div>

                  <!-- Frontend Development -->
                  <div class="skill-item" data-aos="zoom-in" data-aos-delay="450">
                    <div class="skill-icon">
                      <i class="bi bi-code-slash"></i>
                    </div>
                    <h4>Frontend Development</h4>
                    <p>Creating responsive and interactive user interfaces with modern HTML, CSS, and JavaScript.</p>
                  </div>

                  <!-- Database Management -->
                  <div class="skill-item" data-aos="zoom-in" data-aos-delay="500">
                    <div class="skill-icon">
                      <i class="bi bi-database"></i>
                    </div>
                    <h4>Database Management</h4>
                    <p>Designing and maintaining robust databases for efficient data storage and retrieval.</p>
                  </div>
                </div>

                {{--
                <div class="journey-timeline" data-aos="fade-up" data-aos-delay="300">
                  <div class="timeline-item">
                    <div class="year">2019</div>
                    <div class="description">Graduated with B.A. in Digital Design from Creative University</div>
                  </div>
                  <div class="timeline-item">
                    <div class="year">2020</div>
                    <div class="description">Joined InnovateTech as Junior Frontend Developer</div>
                  </div>
                  <div class="timeline-item">
                    <div class="year">2023</div>
                    <div class="description">Launched freelance career specializing in creative web solutions</div>
                  </div>
                </div> --}}

                <div class="cta-section" data-aos="fade-up" data-aos-delay="400">
                  <div class="fun-fact">
                    <span class="emoji">💻</span>
                    <span class="text">Code-driven backend developer crafting scalable solutions worldwide</span>

                  </div>
                  <div class="action-buttons">
                    <a href="#projects" id="view-projects" class="btn btn-primary">View My Work</a>
                    <a href="assets/resume/Shahar Yar Resume.pdf" class="btn btn-outline" download
                      target="_blank">Download Resume</a>

                  </div>
                </div>

              </div>
            </div>

          </div>

        </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-8">
            <div class="skills-grid">
              <div class="row g-4">


                {{-- backend Card --}}
                <div class="col-md-6" data-aos="flip-left" data-aos-delay="300">
                  <div class="skill-card">
                    <div class="skill-header">
                      <i class="bi bi-server"></i>
                      <h3>Backend Development</h3>
                    </div>
                    <div class="skills-animation">
                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">PHP</span>
                        </div>
                      </div>
                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">Laravel</span>
                        </div>
                      </div>
                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">MySQL Database Management</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Backend Card -->
                </div>
                {{-- end backend Card --}}


                {{-- front end Card --}}
                <div class="col-md-6" data-aos="flip-left" data-aos-delay="200">
                  <div class="skill-card">
                    <div class="skill-header">
                      <i class="bi bi-code-slash"></i>
                      <h3>Frontend Development</h3>
                    </div>
                    <div class="skills-animation">
                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">HTML/CSS</span>
                        </div>
                      </div>
                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">JavaScript</span>
                        </div>
                      </div>
                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">Bootstrap</span>
                        </div>
                      </div>
                    </div>
                  </div> <!-- End Frontend Card -->
                </div>

                {{-- front end Card --}}

                <div class="col-md-6" data-aos="flip-left" data-aos-delay="500">
                  <div class="skill-card">
                    <div class="skill-header">
                      <i class="bi bi-hdd-network"></i>
                      <h3>Deployment & Hosting</h3>
                    </div>
                    <div class="skills-animation">

                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">cPanel & Hosting</span>
                        </div>
                      </div>

                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">Database Management</span>
                        </div>

                      </div>
                      <div class="skill-item">
                        <div class="skill-info">
                          <span class="skill-name">Git & GitHub</span>
                        </div>

                      </div>

                    </div>
                  </div><!-- End Deployment Card -->
                </div>



              </div>
            </div><!-- End Skills Grid -->
          </div>

          <div class="col-lg-4">
            <div class="skills-summary" data-aos="fade-left" data-aos-delay="200">
              <h3>Professional Expertise</h3>
              <p>
                I am a Developer skilled in PHP and Laravel (MVC), building secure, scalable web applications with
                modern frontend interfaces and robust backend functionality.
              </p>


              <div class="summary-stats">

              </div>

              <div class="skills-badges" data-aos="fade-up" data-aos-delay="600">
                <h4>Certifications</h4>
                <div class="badge-list">
                  <div class="skill-badge">Laravel Expert</div>
                  <div class="skill-badge">PHP & MVC</div>
                  <div class="skill-badge">HTML / CSS / JS</div>
                  <div class="skill-badge">UI/UX & Web Design</div>
                  <div class="skill-badge">Database & API Management</div>
                  <div class="skill-badge">Small Business Web Solutions</div>
                  <div class="skill-badge">Performance Optimization</div>
                  <div class="skill-badge">Git & Version Control</div>
                </div>
              </div>
            </div><!-- End Skills Summary -->
          </div>
        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->

      <div class="container section-title">
        <h2>Resume</h2>
      </div>

      <!-- End Section Title -->


      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          {{-- start Professional Journey --}}
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">

            <div class="experience-section">
              <div class="section-header">
                <h2><i class="bi bi-briefcase"></i> Professional Journey</h2>
                <p class="section-subtitle">Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                  ac turpis egestas vestibulum tortor quam.</p>
              </div>

              <div class="experience-cards">
                <div class="experience-card" data-aos="zoom-in" data-aos-delay="300">
                  <div class="card-header">
                    <div class="role-info">
                      <h3>Technical Director</h3>
                      <h4>Proin Corporation</h4>
                    </div>
                    <span class="duration">2022 - Present</span>
                  </div>
                  <div class="card-body">
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris
                      viverra veniam sit amet lacus cursus.</p>
                    <ul class="achievements">
                      <li>Managed cross-functional teams of 15+ professionals</li>
                      <li>Implemented agile methodologies resulting in 40% efficiency gain</li>
                      <li>Led digital transformation initiatives worth $2M+</li>
                    </ul>
                  </div>
                </div>

                <div class="experience-card" data-aos="zoom-in" data-aos-delay="400">
                  <div class="card-header">
                    <div class="role-info">
                      <h3>Senior Development Manager</h3>
                      <h4>Consectetur Solutions Inc</h4>
                    </div>
                    <span class="duration">2018 - 2022</span>
                  </div>
                  <div class="card-body">
                    <p>Donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim
                      donec pede justo fringilla vel.</p>
                  </div>
                </div>

                <div class="experience-card" data-aos="zoom-in" data-aos-delay="500">
                  <div class="card-header">
                    <div class="role-info">
                      <h3>Product Development Specialist</h3>
                      <h4>Adipiscing Technologies</h4>
                    </div>
                    <span class="duration">2015 - 2018</span>
                  </div>
                  <div class="card-body">
                    <p>Nam quam nunc blandit vel luctus pulvinar hendrerit id lorem maecenas nec odio et ante tincidunt
                      tempus donec vitae sapien ut.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- end Professional Journey --}}

          {{-- start Academic Excellence --}}
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="education-section">
              <div class="section-header">
                <h2><i class="bi bi-mortarboard"></i> Academic Excellence</h2>
                <p class="section-subtitle">Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo
                  ligula eget dolor aenean massa.</p>
              </div>

              <div class="education-timeline">
                <div class="timeline-track"></div>

                <div class="education-item" data-aos="slide-up" data-aos-delay="300">
                  <div class="timeline-marker"></div>
                  <div class="education-content">
                    <div class="degree-header">
                      <h3>Master of Computer Science</h3>
                      <span class="year">2015 - 2017</span>
                    </div>
                    <h4 class="institution">Tempus University</h4>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus donec quam
                      felis ultricies nec.</p>
                  </div>
                </div>

                <div class="education-item" data-aos="slide-up" data-aos-delay="400">
                  <div class="timeline-marker"></div>
                  <div class="education-content">
                    <div class="degree-header">
                      <h3>Bachelor of Information Technology</h3>
                      <span class="year">2011 - 2015</span>
                    </div>
                    <h4 class="institution">Rhoncus Institute of Technology</h4>
                    <p>Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus elementum
                      semper nisi aenean vulputate.</p>
                  </div>
                </div>

                <div class="education-item" data-aos="slide-up" data-aos-delay="500">
                  <div class="timeline-marker"></div>
                  <div class="education-content">
                    <div class="degree-header">
                      <h3>Certificate in Digital Innovation</h3>
                      <span class="year">2020</span>
                    </div>
                    <h4 class="institution">Ligula Academy</h4>
                    <p>Etiam sit amet orci eget eros faucibus tincidunt duis leo sed fringilla mauris sit amet nibh
                      donec sodales sagittis magna.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- end Academic Excellence --}}

        </div>
      </div>


    </section><!-- /Resume Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

          <!-- Card 1 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-stack"></i>
              </div>
              <h3>Digital Solutions</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam
                rem aperiam eaque ipsa.</p>
              <div class="card-links">
                <a href="#" class="link-item">
                  Learn More
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Card 2 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-shield-check"></i>
              </div>
              <h3>Secure Systems</h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                excepteur sint occaecat cupidatat.</p>
              <div class="card-links">
                <a href="#" class="link-item">
                  Learn More
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Card 3 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-graph-up"></i>
              </div>
              <h3>Growth Strategy</h3>
              <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur
                vel illum qui dolorem.</p>
              <div class="card-links">
                <a href="#" class="link-item">
                  Learn More
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Card 4 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-cpu"></i>
              </div>
              <h3>AI Integration</h3>
              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                dolores eos qui ratione.</p>
              <div class="card-links">
                <a href="#" class="link-item">
                  Learn More
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Card 5 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-cloud-arrow-up"></i>
              </div>
              <h3>Cloud Services</h3>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                deleniti atque corrupti quos.</p>
              <div class="card-links">
                <a href="#" class="link-item">
                  Learn More
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- Card 6 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-gear"></i>
              </div>
              <h3>Process Automation</h3>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                placeat facere possimus.</p>
              <div class="card-links">
                <a href="#" class="link-item">
                  Learn More
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="projects" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
            <li data-filter="*" class="filter-active">
              <i class="bi bi-grid-3x3"></i> All Projects
            </li>
            <li data-filter=".filter-ui">
              UI/UX
            </li>
            <li data-filter=".filter-development">
              Development
            </li>
            <li data-filter=".filter-photography">
              Photography
            </li>
            <li data-filter=".filter-marketing">
              Marketing
            </li>
          </ul>

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="assets/img/portfolio/portfolio-1.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">UI/UX Design</div>
                      <h3 class="entry-title">Mobile Banking App</h3>
                      <div class="entry-links">
                        <a href="assets/img/portfolio/portfolio-1.webp" class="glightbox"
                          data-gallery="portfolio-gallery-ui"
                          data-glightbox="title: Mobile Banking App; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html#elearning">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="assets/img/portfolio/portfolio-10.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Development</div>
                      <h3 class="entry-title">E-Learning Platform</h3>
                      <div class="entry-links">
                        <a href="assets/img/portfolio/portfolio-10.webp" class="glightbox"
                          data-gallery="portfolio-gallery-development"
                          data-glightbox="title: E-Learning Platform; description: Nulla vitae elit libero, a pharetra augue mollis interdum.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html#urban">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="assets/img/portfolio/portfolio-7.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Photography</div>
                      <h3 class="entry-title">Urban Architecture</h3>
                      <div class="entry-links">
                        <a href="assets/img/portfolio/portfolio-7.webp" class="glightbox"
                          data-gallery="portfolio-gallery-photography"
                          data-glightbox="title: Urban Architecture; description: Sed ut perspiciatis unde omnis iste natus error sit voluptatem.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html#Urban_Architecture">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="assets/img/portfolio/portfolio-4.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Marketing</div>
                      <h3 class="entry-title">Social Media Campaign</h3>
                      <div class="entry-links">
                        <a href="assets/img/portfolio/portfolio-4.webp" class="glightbox"
                          data-gallery="portfolio-gallery-marketing"
                          data-glightbox="title: Social Media Campaign; description: Quis autem vel eum iure reprehenderit qui in ea voluptate.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="assets/img/portfolio/portfolio-2.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">UI/UX Design</div>
                      <h3 class="entry-title">Smart Home Interface</h3>
                      <div class="entry-links">
                        <a href="assets/img/portfolio/portfolio-2.webp" class="glightbox"
                          data-gallery="portfolio-gallery-ui"
                          data-glightbox="title: Smart Home Interface; description: At vero eos et accusamus et iusto odio dignissimos ducimus.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="assets/img/portfolio/portfolio-11.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Development</div>
                      <h3 class="entry-title">Cloud Management System</h3>
                      <div class="entry-links">
                        <a href="assets/img/portfolio/portfolio-11.webp" class="glightbox"
                          data-gallery="portfolio-gallery-development"
                          data-glightbox="title: Cloud Management System; description: Temporibus autem quibusdam et aut officiis debitis.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="assets/img/portfolio/portfolio-8.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Photography</div>
                      <h3 class="entry-title">Nature Collection</h3>
                      <div class="entry-links">
                        <a href="assets/img/portfolio/portfolio-8.webp" class="glightbox"
                          data-gallery="portfolio-gallery-photography"
                          data-glightbox="title: Nature Collection; description: Integer posuere erat a ante venenatis dapibus posuere velit aliquet.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="assets/img/portfolio/portfolio-5.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Marketing</div>
                      <h3 class="entry-title">Brand Strategy</h3>
                      <div class="entry-links">
                        <a href="assets/img/portfolio/portfolio-5.webp" class="glightbox"
                          data-gallery="portfolio-gallery-marketing"
                          data-glightbox="title: Brand Strategy; description: Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="assets/img/portfolio/portfolio-5.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Marketing</div>
                      <h3 class="entry-title">Brand Strategy</h3>
                      <div class="entry-links">
                        <a href="assets/img/portfolio/portfolio-5.webp" class="glightbox"
                          data-gallery="portfolio-gallery-marketing"
                          data-glightbox="title: Brand Strategy; description: Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="assets/img/portfolio/portfolio-5.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Marketing</div>
                      <h3 class="entry-title">Brand Strategy</h3>
                      <div class="entry-links">
                        <a href="assets/img/portfolio/portfolio-5.webp" class="glightbox"
                          data-gallery="portfolio-gallery-marketing"
                          data-glightbox="title: Brand Strategy; description: Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="assets/img/portfolio/portfolio-5.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Marketing</div>
                      <h3 class="entry-title">Brand Strategy</h3>
                      <div class="entry-links">
                        <a href="assets/img/portfolio/portfolio-5.webp" class="glightbox"
                          data-gallery="portfolio-gallery-marketing"
                          data-glightbox="title: Brand Strategy; description: Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="assets/img/portfolio/portfolio-5.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Marketing</div>
                      <h3 class="entry-title">Brand Strategy</h3>
                      <div class="entry-links">
                        <a href="assets/img/portfolio/portfolio-5.webp" class="glightbox"
                          data-gallery="portfolio-gallery-marketing"
                          data-glightbox="title: Brand Strategy; description: Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="assets/img/portfolio/portfolio-5.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Marketing</div>
                      <h3 class="entry-title">Brand Strategy</h3>
                      <div class="entry-links">
                        <a href="assets/img/portfolio/portfolio-5.webp" class="glightbox"
                          data-gallery="portfolio-gallery-marketing"
                          data-glightbox="title: Brand Strategy; description: Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="assets/img/portfolio/portfolio-5.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Marketing</div>
                      <h3 class="entry-title">Brand Strategy</h3>
                      <div class="entry-links">
                        <a href="assets/img/portfolio/portfolio-5.webp" class="glightbox"
                          data-gallery="portfolio-gallery-marketing"
                          data-glightbox="title: Brand Strategy; description: Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
      <!-- Section Title -->
      <div class="container section-title">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-12">
            <div class="critic-reviews" data-aos="fade-up" data-aos-delay="300">
              <div class="row">
                <div class="col-md-4">
                  <div class="critic-review">
                    <div class="review-quote">"</div>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                    <p>Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed,
                      convallis at tellus.</p>
                    <div class="critic-info">
                      <div class="critic-name">The New York Times</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="critic-review">
                    <div class="review-quote">"</div>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                    </div>
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero
                      malesuada feugiat.</p>
                    <div class="critic-info">
                      <div class="critic-name">Washington Post</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="critic-review">
                    <div class="review-quote">"</div>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                    <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis
                      porttitor volutpat.</p>
                    <div class="critic-info">
                      <div class="critic-name">The Guardian</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="testimonials-container">
              <div class="swiper testimonials-slider init-swiper" data-aos="fade-up" data-aos-delay="400">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    },
                    "breakpoints": {
                      "768": {
                        "slidesPerView": 2
                      },
                      "992": {
                        "slidesPerView": 3
                      }
                    }
                  }
                </script>

                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                        Nulla quis lorem ut libero malesuada feugiat.
                      </p>
                      <div class="testimonial-profile">
                        <img src="assets/img/person/person-f-1.webp" alt="Reviewer" class="img-fluid rounded-circle">
                        <div>
                          <h3>Jane Smith</h3>
                          <h4>Book Enthusiast</h4>
                        </div>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Cras ultricies ligula sed magna
                        dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus.
                      </p>
                      <div class="testimonial-profile">
                        <img src="assets/img/person/person-m-2.webp" alt="Reviewer" class="img-fluid rounded-circle">
                        <div>
                          <h3>Michael Johnson</h3>
                          <h4>Sci-Fi Blogger</h4>
                        </div>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                      </div>
                      <p>
                        Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna
                        dictum porta. Donec sollicitudin molestie malesuada.
                      </p>
                      <div class="testimonial-profile">
                        <img src="assets/img/person/person-f-3.webp" alt="Reviewer" class="img-fluid rounded-circle">
                        <div>
                          <h3>Emily Davis</h3>
                          <h4>Book Club President</h4>
                        </div>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui
                        posuere blandit. Lorem ipsum dolor sit amet, consectetur.
                      </p>
                      <div class="testimonial-profile">
                        <img src="assets/img/person/person-m-4.webp" alt="Reviewer" class="img-fluid rounded-circle">
                        <div>
                          <h3>Robert Wilson</h3>
                          <h4>Literary Reviewer</h4>
                        </div>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 text-center" data-aos="fade-up">
            <div class="overall-rating">
              <div class="rating-number">4.8</div>
              <div class="rating-stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
              </div>
              <p>Based on 230+ reviews</p>
              <div class="rating-platforms">
                <span>Goodreads</span>
                <span>Amazon</span>
                <span>Barnes &amp; Noble</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Testimonials Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Frequently Asked Questions</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                    gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet
                    id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque
                    elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                    elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque
                    eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis
                    sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet
                    id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque
                    elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                <div class="faq-content">
                  <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in.
                    Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est.
                    Purus gravida quis blandit turpis cursus in</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                <div class="faq-content">
                  <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi.
                    Distinctio ipsam dolore et.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
          <div class="col-lg-5">
            <div class="info-box" data-aos="fade-up" data-aos-delay="200">
              <h3>Contact Info</h3>
              <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.
              </p>

              <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="content">
                  <h4>Our Location</h4>
                  <p>A108 Adam Street</p>
                  <p>New York, NY 535022</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="content">
                  <h4>Phone Number</h4>
                  <p>+1 5589 55488 55</p>
                  <p>+1 6678 254445 41</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="content">
                  <h4>Email Address</h4>
                  <p>info@example.com</p>
                  <p>contact@example.com</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
              <h3>Get In Touch</h3>
              <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.
              </p>

              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                data-aos-delay="200">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit" class="btn">Send Message</button>
                  </div>

                </div>
              </form>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>
          © <span>{{ date('2025') }}</span>
          <strong class="px-1 sitename">Shahar Yar</strong>
          <span>All Rights Reserved</span>
        </p>

      </div>
      <div class="social-links d-flex justify-content-center">
        <a href="https://github.com/shaharyar522" target="_blank" rel="noopener noreferrer">
          <i class="bi bi-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/shaharyarkhan4511/" target="_blank" rel="noopener noreferrer">
          <i class="bi bi-linkedin"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer">
          <i class="bi bi-twitter"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer">
          <i class="bi bi-facebook"></i>
        </a>

      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">Shahar_Yar</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('assets/js/other.js') }}"></script>
  <!-- Typed.js (already in <head>) -->


</body>

</html>