<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Aicha Barchi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    @import url("https://fonts.googleapis.com/css?family=Lato:400,700");

* {
  box-sizing: border-box;
}


/* html {
  height: 100%;
  font-family: "Lato", sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #111111;
  margin: 0;
} */

button.btn {
  text-transform: uppercase;
  text-decoration: none;
  font-weight: 700;
  border: 0;
  position: relative;
  letter-spacing: 0.15em;
  padding: 1rem 2.5rem;
  background: transparent;
  outline: none;
  font-size: 28px;
  color: #111111;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.15s;
}

button.btn::after,
button.btn::before {
  content: "";
  position: absolute;
  height: 40%;
  width: 10%;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  z-index: -2;
  border-radius: 50%;
}

button.btn::before {
  background-color: #e7be8e; /* Secondary color */
  top: -0.75rem;
  left: 0.5rem;
  animation: topAnimation 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.25s infinite alternate;
}

button.btn::after {
  background-color: #a39e943d; /* Primary color */
  top: 3rem;
  left: 13rem;
  animation: bottomAnimation 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.5s infinite alternate;
}

button.btn:hover {
  color: #ececec; /* White color */
}

button.btn:hover::before,
button.btn:hover::after {
  top: 0;
  height: 100%;
  width: 100%;
  border-radius: 0;
  animation: none;
}

button.btn:hover::after {
  left: 0;
}

button.btn:hover::before {
  top: 0.5rem;
  left: 0.35rem;
}

@keyframes topAnimation {
  from {
    transform: translate(0rem, 0);
  }
  to {
    transform: translate(0rem, 3.5rem);
  }
}

@keyframes bottomAnimation {
  from {
    transform: translate(-11.5rem, 0);
  }
  to {
    transform: translate(0rem, 0);
  }
}

  </style>

  
</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
        <img src="assets/img/my-profile-img.jpg" alt="" style="width: 250px; height: 250px; object-fit: cover; border-radius: 50%; border: 5px solid #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
    </div>

    <a href="index.blade.php" class="logo d-flex align-items-center justify-content-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename">Aicha Barchi</h1>
    </a>

    <div class="social-links text-center">
      {{-- <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a> --}}
      <a href="https://web.facebook.com/malak.moloka.90" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="https://www.instagram.com/moloka.malak/" class="instagram"><i class="bi bi-instagram"></i></a>
      {{-- <a href="#" class="google-plus"><i class="bi bi-skype"></i></a> --}}
      <a href="https://www.linkedin.com/in/aicha-barchi-63a2b5252/" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
        {{-- <li class="dropdown"><a href="#"><i class="bi bi-menu-button navicon"></i> <span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Dropdown 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li> --}}
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img style="width: 100%;" src="assets/img/hero-bg.jpg" alt="">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Aicha Barchi</h2>
        <p>I'm <span class="typed" data-typed-items=" Developer, Freelancer">Developer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
        <br><br>
        <div style="margin-top: 20px;">
          <a href="assets/cv/mon-cv.pdf"  download></i>
            <button class="btn">Download CV</button></a>

          </a>
      </div>
      </div>
      
      
    </section>
    
  
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about"  class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>With a diploma as a technician specializing in Full Stack development, I have extensive training in web design and development. My professional experience includes a stint at OCP, where I collaborated on concrete team projects where I honed my development and technical problem-solving skills.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/my-profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Web Developer.</h2>
            <p class="fst-italic py-3">
                General introduction about myself
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>31 Juanary 2004 .</span></li>
                  {{-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li> --}}
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+212 68007 2989 .</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>El Jadida, MOROCCO.</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>20 years old.</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Diploma.</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>aichabarchi9@gmail.com .</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available.</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
                “I am Aicha, an ambitious and hardworking person who always strives to achieve her goals with determination and resolve. I believe that hard work and diligence are the key to success and continuous development. I am keen to improve my skills and seize every opportunity to learn and grow, and I always strive to achieve excellence in everything I do. Work for me is not just a means, but rather a passion and a way to achieve my dreams and serve my community.”
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> <span>Delighting Clients, One Smile at a Time!</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> <span>Explore My Work and Discover My Passion for Innovation.</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong><br> <span>We’re Here to Help, Anytime</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>I have excellent experience in web development using the latest technologies such as HTML, CSS, and JavaScript, with proficiency in back-end programming with PHP and the Laravel framework, in addition to strong skills in building interactive interfaces using React.js, which enables me to provide integrated and high-quality solutions.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Laravel</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>React JS</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Education</h3>

            <div class="resume-item pb-0">
              <h4>Specialized Technical Diploma in Digital Development
                full stack web option</h4>
                <H5>2022–2024
                </H5>
              <p><em>Specialized Institute of Applied Technology Cité de l’Air
                </em></p>
              <ul>
                <li>El Jadida-Maroc</li>
              </ul>
              <h4>Baccalaureat degree in physical science series</h4>
                <H5>2021
                </H5>
              <p><em>Mohamed Err-afii High School
                </em></p>
              <ul>
                <li>El Jadida-Maroc</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Project</h3>
            <div class="resume-item">
              <h4>Voyage web statique</h4>
              <h5>2022 - 2023</h5>
              <p><em>Programming language</em></p>
              <p>HTML, CSS, Bootstrap ,Javascript.</p>
            </div>
            <div class="resume-item">
                <h4>Beauty web</h4>
                <h5>2022 - 2023</h5>
                <p><em>Programming language</em></p>
                <p>PHP, MySQL, html, Bootstrap
                    ,Javascript, CSS .</p>
              </div>
            <!-- Edn Resume Item -->

            

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Internship at the Cherifian Phosphate Office (OCP)</h4>
              <h5>11/03/2024 - 23/02/2024</h5>
              <p><em>El jadida, Morocco </em></p>
              <ul>
                <li>Back-end and front-end developer: working on a website project for managing interns based on “Back-end: laravel, mysql”, “Font-end: Html, css, bootstrap”.</li>
                <li>Agile: relying on agility in project management.</li>
                <li>Object-Oriented Analysis and Design “UML”:
                    Class diagram| Use case diagram | Sequence diagram.</li>
                <li>Report each step.</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>An e-commerce project to sell natural cosmetic products from the Fisatex factory</h4>
              <h5>01/01/2024 - 24/02/2024</h5>
              <p><em>El jadida, Morocco</em></p>
              <ul>
                <li>Back-end and front-end developer: working on
                    a e-commerce website project based on
                    (“Back-end: laravel, mysql“, ”Font-end: Html, css,
                    Bootstrap, JS”).</li>
                <li>Nice page: for project mockups.</li>
                <li>Collaborative work: Github.</li>
                <li>Report each step.</li>
              </ul>
            </div><!-- Edn Resume Item -->

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Projects</h2>
        <p>I have worked on several diverse software projects focusing on designing and developing user interfaces and interactive web experiences.
           In these projects, I used a combination of modern technologies such as <strong>HTML && CSS</strong>  to create responsive and elegant 
           designs, along with <strong>JavaScript</strong> to add dynamism to user interfaces. I also relied on <strong>Laravel && PHP</strong>
           frameworks to develop robust and secure server-side web applications, while using <strong>Bootstrap</strong> to facilitate the design of responsive
            and user-friendly interfaces. In addition, I have experience using other technologies and tools that can help improve performance and
             extend the functionality of applications.</p>
     </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Travel web</li>
            <li data-filter=".filter-product">E-commerce</li>
            <li data-filter=".filter-branding">Beauty</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img style="height: 250PX" src="assets/img/portfolio/app-1.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/app-1.jpeg" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/app-2.jpg" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/app3.jpg" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/app4.jpg" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/app5.jpg" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->








            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/product1.jpg" title="" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/product2.jpg" title="" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/product3.jpg" title=" " data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img style="height: 200PX ; width:300PX" src="assets/img/portfolio/product4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/product4.jpg" title="" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->







            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/branding1.jpg" title="" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img style="height: 150PX;width:300px " src="assets/img/portfolio/branding2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a style="width: " href="assets/img/portfolio/branding2.jpg" title="" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

            

            

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>We provide a wide range of professional services tailored to meet your needs. From innovative web design and robust software development to seamless user experiences and advanced analytics, our solutions are crafted with precision and quality. With 24/7 support and smooth integration capabilities, we are committed to helping your business thrive in the digital world.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
            <div>
              <h4 class="title">Innovative Design</h4>
              <p class="description">We deliver unique and creative design solutions that reflect your business's identity and vision.
              </p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
            <div>
              <h4 class="title">Comprehensive Development</h4>
              <p class="description">Building robust and high-performing applications using cutting-edge technologies to ensure reliability and quality.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
            <div>
              <h4 class="title">Seamless User Experience</h4>
              <p class="description">We prioritize delivering smooth and intuitive experiences for your users across all platforms and devices.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
            <div>
              <h4 class="title">Advanced Analytics</h4>
              <p class="description">Gain valuable insights with our detailed reports and analytics to enhance your project’s performance.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
            <div>
              <h4 class="title">24/7 Technical Support</h4>
              <p class="description">Our team is available around the clock to assist with inquiries and resolve issues promptly.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
            <div>
              <h4 class="title">Effortless Integration</h4>
              <p class="description">We offer seamless integration with payment systems, databases, and third-party services for a unified experience.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
      </div><!-- End Section Title -->

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
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="testimonial-item">
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Aicha impressed us with her technical skills and problem-solving. She delivered excellent results on both front-end and back-end tasks using Laravel and Bootstrap.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/homme.png" class="testimonial-img" alt="">
                    <h3>Supervisor at </h3>
                      <h3> Internship</h3>
                </div>
            </div><!-- End testimonial item -->
        
            <div class="swiper-slide">
                <div class="testimonial-item">
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Aicha showed dedication and creativity in developing web applications. She always delivered high-quality results on time, exceeding our expectations.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/homme.png" class="testimonial-img" alt="">
                    <h3>Team Lead for </h3>
                      <h3>E-commerce Project</h3>
                </div>
            </div><!-- End testimonial item -->
        
            <div class="swiper-slide">
                <div class="testimonial-item">
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Aicha's knowledge of agile methods and GitHub made her reliable. She ensured smooth project management and maintained effective communication.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/homme.png" class="testimonial-img" alt="">
                    <h3>Project Manager</h3>
                      <h3> Web Development Team</h3>
                </div>
            </div><!-- End testimonial item -->
        
            <div class="swiper-slide">
                <div class="testimonial-item">
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>With strong skills in full-stack programming, Aicha mastered technical concepts. Her professionalism and quality of work always stood out clearly.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/homme.png" class="testimonial-img" alt="">
                    <h3>Technical Trainer</h3>
                      <h3> ISTA El Jadida</h3>
                </div>
            </div><!-- End testimonial item -->
        
        </div>
        
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
    
            <div class="col-lg-12">
    
                <div class="info-wrap d-flex justify-content-between text-center">
                    
                    <!-- Address -->
                    <div class="info-item d-flex flex-column align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt" style="font-size: 2rem; margin-bottom: 10px;"></i>
                        <div>
                            <h3>Address</h3>
                            <p>El Jadida, Morocco</p>
                        </div>
                    </div>
    
                    <!-- Email -->
                    <div class="info-item d-flex flex-column align-items-center" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-envelope" style="font-size: 2rem; margin-bottom: 10px;"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>aichabarchi9@gmail.com</p>
                        </div>
                    </div>
    
                    <!-- Phone -->
                    <div class="info-item d-flex flex-column align-items-center" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone" style="font-size: 2rem; margin-bottom: 10px;"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+212680072989</p>
                        </div>
                    </div>
                </div>
    
                <!-- Map -->
                <div class="map" data-aos="fade-up" data-aos-delay="500" style="margin-top: 20px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53396.1441840226!2d-8.54486456535423!3d33.23351720437629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda91dc1b421fe47%3A0x307cf87fb6b01a1f!2sEl%20Jadida!5e0!3m2!1sfr!2sma!4v1731949383902!5m2!1sfr!2sma" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
    
            </div>
    
        </div>
    
    </div>
    
    
    
          </div><!-- End Contact Form -->

        </div>

      </div>


  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">MY Portfolio</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
        Designed by <strong>AICHA BARCHI</strong> 
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>