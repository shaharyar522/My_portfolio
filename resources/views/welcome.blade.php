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

              </div>

              <div class="experience-cards">

                <!-- Technical Director -->
                <div class="experience-card" data-aos="zoom-in" data-aos-delay="300">
                  <div class="card-header">
                    <div class="role-info">
                      <h3>Back-end Developer</h3>
                      <h4>Web Tech Fusion (Pvt) Ltd, Islamabad </h4>
                    </div>
                    <span class="duration">Nov 2024 - Present</span>
                  </div>
                  <div class="card-body">
                    <p>Developing real-world web applications with PHP, Laravel (MVC), MySQL, and integrated frontend
                      solutions.</p>
                    <ul class="achievements">
                      <li>Developed secure, scalable web applications for real client projects using PHP, Laravel (MVC),
                        and MySQL</li>
                      <li>Built and integrated RESTful APIs, optimizing backend performance and database workflows</li>
                      <li>Deployed and managed live client projects on cPanel, delivering complete, real-world solutions
                      </li>
                    </ul>

                  </div>
                </div>

                <!-- Front-end Developer -->
                <div class="experience-card" data-aos="zoom-in" data-aos-delay="400">
                  <div class="card-header">
                    <div class="role-info">
                      <h3>Front-end Developer</h3>
                      <h4>Enigmatix (Pvt) Ltd, Bahawalpur (Internship)</h4>
                    </div>
                    <span class="duration">May 2024 - July 2024</span>
                  </div>
                  <div class="card-body">
                    <p>Designed and implemented modern, responsive interfaces for client projects.</p>
                    <ul class="achievements">
                      <li>Applied modern UI/UX practices to enhance user experience</li>
                      <li>Built reusable frontend components for multiple projects</li>
                      <li>Technologies: HTML5, CSS3, JavaScript, Bootstrap</li>
                    </ul>
                  </div>
                </div>

                <!-- Professional Experience Summary -->


              </div>


            </div>
          </div>
          {{-- end Professional Journey --}}

          {{-- start Academic Excellence --}}
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="education-section">
              <div class="section-header">
                <h2><i class="bi bi-mortarboard"></i> Academic Excellence</h2>
              </div>

              <div class="education-timeline">
                <div class="timeline-track"></div>

                <div class="education-item" data-aos="slide-up" data-aos-delay="300">
                  <div class="timeline-marker"></div>
                  <div class="education-content">
                    <div class="degree-header">
                      <h3>Bachelor of Science in Computer Science (BSCS)</h3>
                      <span class="year">2020 - 2024</span>
                    </div>
                    <h4 class="institution">The Islamia University of Bahawalpur</h4>
                  </div>
                </div>

                <div class="education-item" data-aos="slide-up" data-aos-delay="400">
                  <div class="timeline-marker"></div>
                  <div class="education-content">
                    <div class="degree-header">
                      <h3>Intermediate in Computer Science (ICS)</h3>
                      <span class="year">2019</span>
                    </div>
                    <h4 class="institution">Govt. Associate College, Sama Satta, Bahawalpur</h4>
                  </div>
                </div>

                <div class="education-item" data-aos="slide-up" data-aos-delay="500">
                  <div class="timeline-marker"></div>
                  <div class="education-content">
                    <div class="degree-header">
                      <h3>Matriculation in Science with Computer</h3>
                      <span class="year">2016</span>
                    </div>
                    <h4 class="institution">Government Boys High school Khanqah Sharif, Gohar shah Road</h4>
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
        <p>Delivering professional web and software solutions tailored to businesses of all sizes.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

          <!-- Card 1 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-code-slash"></i>
              </div>
              <h3>Web Application Development</h3>
              <p>Building secure, scalable, and high-performance websites and web applications using PHP, Laravel (MVC),
                MySQL, and modern frontend technologies (HTML, CSS, JavaScript, Bootstrap).</p>
            </div>
          </div><!-- End Service Item -->

          <!-- Card 2 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-server"></i>
              </div>
              <h3>Backend & API Integration</h3>
              <p>Designing robust server-side solutions, RESTful APIs, and database management for seamless business
                operations and software integration.</p>
            </div>
          </div><!-- End Service Item -->

          <!-- Card 3 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-shop"></i>
              </div>
              <h3>Small Business Solutions</h3>
              <p>Developing custom software and web tools for small businesses, including e-commerce platforms,
                inventory management, and client management systems.</p>
            </div>
          </div><!-- End Service Item -->

          <!-- Card 4 -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-journal-text"></i>
              </div>
              <h3>Business Software Solutions</h3>
              <p>Developing real-world software like POS systems, inventory management, and client management tools to
                help businesses streamline operations and improve efficiency.</p>
            </div>
          </div><!-- End Service Item -->

          <!-- Card 5 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-display"></i>
              </div>
              <h3>Frontend & UI/UX Design</h3>
              <p>Creating responsive and intuitive user interfaces with modern frontend technologies, ensuring seamless
                user experiences across devices.</p>
            </div>
          </div>

          <!-- End Service Item -->

          <!-- Card 6 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item">
              <div class="icon">
                <i class="bi bi-gear"></i>
              </div>
              <h3>Full-Stack Solutions</h3>
              <p>Providing end-to-end development from backend to frontend, integrating databases, APIs, and interactive
                UI for complete web and software solutions.</p>
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