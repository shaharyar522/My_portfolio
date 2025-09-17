<!-- Project Section -->
<section id="projects" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title">
        <h2>Projects</h2>
    </div><!-- End Section Title -->

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                <li data-filter="*" class="filter-active"><i class="bi bi-grid-3x3"></i> All Projects</li>
                <li data-filter=".filter-fullstack">Fullstack Web Applications</li>
                <li data-filter=".filter-frontend">Web Interfaces & Landing Pages</li>
                <!-- Frontend projects + business templates -->
                <li data-filter=".filter-realworld">Business Solutions Software</li>
                <li data-filter=".filter-ui-ux">UI/UX Design</li>
            </ul>

            <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-fullstack">
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

                                            <a href="{{ route('project.details', ['id' => 'elearning']) }}">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>


                                    </div>
                                </div>
                            </div>
                        </figure>
                    </article>
                </div><!-- End Portfolio Item -->

                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-frontend">
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
                                        <a href="{{ route('project.details', ['id' => 'urban']) }}">
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </article>
                </div><!-- End Portfolio Item -->

                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-realworld">
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

                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui-ux">
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

            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section><!-- /Portfolio Section -->