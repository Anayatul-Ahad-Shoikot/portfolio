<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>AAS - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="./main.css" rel="stylesheet">
</head>
<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#resume">Experiences</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#portfolio">Projects</a></li>
                    <li class="dropdown">
                        <a href="#" class="toggle-dropdown">Others <i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#interests">Interests</a></li>
                            <li><a href="#training">Training & Courses</a></li>
                            <li><a href="#languages">Languages</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <div style="display:flex; gap:10px; align-items:center;">
                <span style="color: var(--accent-color);"><i class="bi bi-eye"></i>&nbsp;<span id="visitor-count">147</span></span>
                <butt href="" id="msg-btn" onclick="downloadCV()">Download CV</butt>
            </div>
        </div>
    </header>

    <main class="main">

        <section id="hero" class="hero section dark-background">
            <img src="img/banner.jpg" alt="" data-aos="zoom-out" loading="lazy">
            <div class="container" data-aos="zoom-out" data-aos-delay="100">
                <h2>Hi, I am</h2>
                <p>Anayatul <br><span class="typed" data-typed-items="Ahad Shoikot"></span><span
                        class="typed-cursor typed-cursor--blink"></span></p>
                <div class="social-links">
                    <a href="https://github.com/Anayatul-Ahad-Shoikot" data-aos="fade-right"><i class="bi bi-github"></i></a>
                    <a href="https://www.linkedin.com/in/anayatul-ahad-shoikot" data-aos="fade-right" data-aos-delay="150"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.facebook.com/ahadshoikot" data-aos="fade-right" data-aos-delay="350"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/___shoi____kot___" data-aos="fade-right" data-aos-delay="650"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </section>

        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-down">
                <h2>About</h2>
                <div>
                    <span class="description-title">About myself</span>
                </div>
            </div>
            <div class="container" data-aos="fade-down" data-aos-delay="100">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="./img/display_image_me.jpg" class="img-fluid" alt="" loading="lazy" style="transform: scaleX(-1);">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>Fresh Graduate, CSE</h2>
                        <p class="fst-italic py-3" data-aos="fade-down">
                            I am a Computer Science graduate passionate about software and web development, with hands-on experience in full-stack development using PHP, JavaScript, and HTML/CSS. Currently leading the GradeSaver platform, I focus on front-end development with React, Next.js, and modern JavaScript frameworks to build interactive and user-friendly applications. I am eager to grow through full-time and freelance opportunities while enhancing my expertise in front-end technologies.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li data-aos="fade-right">
                                        <i class="bi bi-caret-right-fill"></i>
                                        <strong class="highLight">Name:</strong>
                                        <span>Anayatul Ahad Shoikot</span>
                                    </li>
                                    <li data-aos="fade-right">
                                        <i class="bi bi-caret-right-fill"></i>
                                        <strong class="highLight">Phone:</strong>
                                        <span>+8801973336001</span>
                                    </li>
                                    <li data-aos="fade-right">
                                        <i class="bi bi-caret-right-fill"></i>
                                        <strong class="highLight">Birthday:</strong>
                                        <span>30 November, 2002</span>
                                    </li>
                                    <li data-aos="fade-right">
                                        <i class="bi bi-caret-right-fill"></i>
                                        <strong class="highLight">Age:</strong>
                                        <span>23</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li data-aos="fade-left">
                                        <i class="bi bi-caret-right-fill"></i>
                                        <strong class="highLight">Email:</strong>
                                        <span>shoikotofficial@gmail.com</span>
                                    </li>
                                    <li data-aos="fade-left">
                                        <i class="bi bi-caret-right-fill"></i>
                                        <strong class="highLight">Website:</strong>
                                        <span>https://ahad-shoikot.free.nf</span>
                                    </li>
                                    <li data-aos="fade-left">
                                        <i class="bi bi-caret-right-fill"></i>
                                        <strong class="highLight">City:</strong>
                                        <span>Dhaka, Bangladesh</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="resume" class="resume section">
            <div class="container section-title" data-aos="fade-down">
                <h2>Experiences</h2>
                <div>
                    <span class="description-title">MY Work experiences & educations</span>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <h3 class="resume-title" data-aos="fade-down" data-aos-delay="100">Experience</h3>
                    <div class="col-lg-6">
                        <div class="resume-item" data-aos="fade-right" data-aos-delay="100">
                            <h4>Founder & Lead Dveloper</h4>
                            <p>
                                <a href="https://gradesaverbd.netlify.app">GradeSaver</a><br>
                                <i>Founded & developed an online learning platform for university student, enhancing their study experience.</i><br>
                                <i>PHP, HTML5, CSS3, JavaScript, PHPMailer, OTP, Active notification and logs, Custom authentication system and more .</i>
                            </p>
                            <h5>( June 2025 - present )</h5>
                        </div>
                        <div class="resume-item" data-aos="fade-right" data-aos-delay="100">
                            <h4>Jr. Web Developer ( Intern )</h4>
                            <p>
                                <a href="https://ba-systems.com">Business Automation Ltd.</a><br>
                                <i>Worked in Laravel blade views, styling, session & cookies handling, RESTapi testing with postman, ORM model and basics of react.</i>
                            </p>
                            <h5>( July 2024 - September 2024 )</h5><br>
                            <p>
                                <a href="img/BA-Certificate.png" target="_new">View Certificate</a>
                            </p>
                        </div>
                        <div class="resume-item" data-aos="fade-right" data-aos-delay="100">
                            <h4>Grader</h4>
                            <p>
                                <a href="https://www.uiu.ac.bd">United International University</a><br>
                                <i>Responsible for evaluating assignments and lab reports.</i><br>
                                <i>Assisted faculty members in official workings.</i>
                            </p>
                            <h5>( 2023 - 2024 )</h5>
                        </div>
                        <div class="resume-item" data-aos="fade-right" data-aos-delay="100">
                            <h4>Sr. HR Executive</h4>
                            <p>
                                <a href="https://www.facebook.com/uiuccl">UIU Computer Club</a><br>
                                <i>Managed over 2000 members, coordinated technical events & recruitment.</i><br>
                                <i>Managed the registration process and organized general members with proper FAQs.</i>
                            </p>
                            <h5>( 2022 - 2024 )</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="resume-item" data-aos="fade-left" data-aos-delay="100">
                            <h4>HR Intern</h4>
                            <p>
                                <a href="https://gaotek.com/">GAOTek Inc.</a><br>
                                <i>Supporting HR operations, assisting with screening and communications.</i><br>
                                <i>Learning and knowing the filed of HR and admins.</i>
                            </p>
                            <h5>( June 2025 - present )</h5>
                        </div>
                        <div class="resume-item" data-aos="fade-left" data-aos-delay="100">
                            <h4>Treasurer</h4>
                            <p>
                                <a href="https://www.facebook.com/uiuccl">UIU Computer Club</a><br>
                                <i>Leading the registration process and HR team, coordinates with other department and budgeting.</i>
                            </p>
                            <h5>( 2024 January - 2024 October )</h5>
                        </div>
                        <div class="resume-item" data-aos="fade-left" data-aos-delay="100">
                            <h4>Peer Mentor</h4>
                            <p>
                                <a href="https://www.facebook.com/uiuccl">UIU Computer Club</a><br>
                                <i>Mentored junior students in programming and foundational courses.</i><br>
                                <i>SPL, OOP, DLD, Physics & Calculus.</i>
                            </p>
                            <h5>( 2022 - 2024 November )</h5>
                        </div>
                        <div class="resume-item" data-aos="fade-left" data-aos-delay="100">
                            <h4>Jr. HR Executive</h4>
                            <p>
                                <a href="https://www.facebook.com/UIU.EDF">UIU Entraprenure Development Forum</a><br>
                                <i>Managed the registration process and organized general members with proper FAQs.</i><br>
                                <i>Member recruitments and active volunteer.</i>
                            </p>
                            <h5>( 2021 - 2022 )</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3 class="resume-title" data-aos="fade-down" data-aos-delay="100">Education</h3>
                    <div class="col-lg-6">
                        <div class="resume-item" data-aos="fade-right" data-aos-delay="100">
                            <h4>Computer Science &amp; Engineering (CSE)</h4>
                            <h5>( 2021 - present )</h5>
                            <p>
                                <a href="https://www.uiu.ac.bd">United International University</a><br>
                                <i>CGPA - 3.68</i> (upto 12th trimester)
                            </p>
                        </div>
                        <div class="resume-item" data-aos="fade-right" data-aos-delay="100">
                            <h4>Secondary School Certificate (SSC)</h4>
                            <h5>( 2013 - 2018 )</h5>
                            <p>
                                <a href="https://www.bbnsc.edu.bd">Banani Bidyaniketan School</a><br>
                                <i>GPA - 5.00 (Science)</i>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="resume-item" data-aos="fade-left" data-aos-delay="100">
                            <h4>Higher Secondary Certificate (HSC)</h4>
                            <h5>( 2018 - 2020 )</h5>
                            <p>
                                <a href="https://www.dhakacitycollege.edu.bd">Dhaka City College</a><br>
                                <i>GPA - 5.00 (Science)</i>
                            </p>
                        </div>
                        <div class="resume-item" data-aos="fade-left" data-aos-delay="100">
                            <h4>Primary School Certificate (PSC)</h4>
                            <h5>( 2013 )</h5>
                            <p>
                                <a href="https://www.bbnsc.edu.bd">Banani Bidyaniketan School</a><br>
                                <i>GPA - 5.00</i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="skills section">
            <div class="container section-title" data-aos="fade-down">
                <h2>Skills</h2>
                <div>
                    <span class="description-title">My Skill Stack</span>
                </div>
            </div>
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 isotope-item d-flex justify-content-center align-items-center">
                            <img src="./img/skills/C.png" class="img-fluid" alt="C" loading="lazy" width="80px">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 isotope-item d-flex justify-content-center align-items-center">
                            <img src="./img/skills/Java.png" class="img-fluid" alt="Java" loading="lazy" width="80px">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 isotope-item d-flex justify-content-center align-items-center">
                            <img src="./img/skills/python.png" class="img-fluid" alt="Python" loading="lazy" width="80px">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 isotope-item d-flex justify-content-center align-items-center">
                            <img src="./img/skills/PHP.png" class="img-fluid" alt="PHP" loading="lazy" width="80px">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 isotope-item d-flex justify-content-center align-items-center">
                            <img src="./img/skills/JS.png" class="img-fluid" alt="JavaScript" loading="lazy" width="80px">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 isotope-item d-flex justify-content-center align-items-center">
                            <img src="./img/skills/html.png" class="img-fluid" alt="HTML" loading="lazy" width="80px">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 isotope-item d-flex justify-content-center align-items-center">
                            <img src="./img/skills/css.png" class="img-fluid" alt="CSS" loading="lazy" width="80px">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 isotope-item d-flex justify-content-center align-items-center">
                            <img src="./img/skills/bootstrap.png" class="img-fluid" alt="Bootstrap" loading="lazy" width="80px">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 isotope-item d-flex justify-content-center align-items-center">
                            <img src="./img/skills/react.png" class="img-fluid" alt="React" loading="lazy" width="80px">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 isotope-item d-flex justify-content-center align-items-center">
                            <img src="./img/skills/mysql.png" class="img-fluid" alt="MySQL" loading="lazy" width="80px">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 isotope-item d-flex justify-content-center align-items-center">
                            <img src="./img/skills/git.png" class="img-fluid" alt="Git" loading="lazy" width="80px">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 isotope-item d-flex justify-content-center align-items-center">
                            <img src="./img/skills/figma.png" class="img-fluid" alt="Figma" loading="lazy" width="80px">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 isotope-item d-flex justify-content-center align-items-center">
                            <img src="./img/skills/canva.png" class="img-fluid" alt="Canva" loading="lazy" width="80px">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 isotope-item d-flex justify-content-center align-items-center">
                            <img src="./img/skills/ms_office.png" class="img-fluid" alt="Microsoft Office Suite" loading="lazy" width="80px">
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio section">
            <div class="container section-title" data-aos="fade-down">
                <h2>Projects</h2>
                <div>
                    <span class="description-title">My projects</span>
                </div>
            </div>
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-Apps">Full-Stack</li>
                        <li data-filter=".filter-Electronics">Electronics</li>
                        <li data-filter=".filter-FE">FrontEnd</li>
                    </ul>
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Apps">
                            <div class="portfolio-content h-100">
                                <img src="img/projects/Gradesaver.png" class="img-fluid" alt="" loading="lazy">
                                <div class="portfolio-info">
                                    <h4>GradeSaver</h4>
                                    <p>A self-designed online learning platform for students</p>
                                    <a href="https://gradesaverbd.netlify.app/" title="Live Preview" class="preview-link"><i class="bi bi-tv"></i></a>
                                    <a href="https://github.com/Anayatul-Ahad-Shoikot/gradesaver_light" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Apps">
                            <div class="portfolio-content h-100">
                                <img src="./img/projects/Web_project.png" class="img-fluid" alt="" loading="lazy">
                                <div class="portfolio-info">
                                    <h4>Faculty Management System</h4>
                                    <p>A complete solution for faculty & course management</p>
                                    <a href="img/projects/Web_project.png" title="Faculty Management System" class="preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="./project_details.php?id=1" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Electronics">
                            <div class="portfolio-content h-100">
                                <img src="./img/projects/project_ababil.jpg" class="img-fluid" alt="" loading="lazy">
                                <div class="portfolio-info">
                                    <h4>Project Ababil</h4>
                                    <p>Enemy detecting real-time scout drone</p>
                                    <a href="img/projects/project_ababil.jpg" title="Project Ababil" class="preview-link" target="_new"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-FE">
                            <div class="portfolio-content h-100">
                                <img src="img/projects/YouTube_clone.png" class="img-fluid" alt="" loading="lazy">
                                <div class="portfolio-info">
                                    <h4>YouTube - cloned</h4>
                                    <p>Proper Youtube frontend cloned by html and css</p>
                                    <a href="https://youtube-clone-six-self.vercel.app/" class="preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="https://github.com/Anayatul-Ahad-Shoikot/Youtube_Clone" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Apps">
                            <div class="portfolio-content h-100">
                                <img src="./img/projects/DBMS_project.png" class="img-fluid" alt="" loading="lazy">
                                <div class="portfolio-info">
                                    <h4>CareSerenity</h4>
                                    <p>A platform for parents & organizations</p>
                                    <a href="img/projects/DBMS_project.png" title="CareSerenity" class="preview-link" target="_new"><i class="bi bi-zoom-in"></i></a>
                                    <a href="https://github.com/Anayatul-Ahad-Shoikot/Orphanage_Platform_With_Management_System" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Apps">
                            <div class="portfolio-content h-100">
                                <img src="img/projects/AOOP_project.jpg" class="img-fluid" alt="" loading="lazy">
                                <div class="portfolio-info">
                                    <h4>Medimate</h4>
                                    <p>Telemedicine app that can help you while you are at home</p>
                                    <a href="img/projects/AOOP_project.jpg" title="Medimate" class="preview-link" target="_new"><i class="bi bi-zoom-in"></i></a>
                                    <a href="https://github.com/Anayatul-Ahad-Shoikot/medimate" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Electronics">
                            <div class="portfolio-content h-100">
                                <img src="img/projects/Vault_security.jpg" class="img-fluid" alt="" loading="lazy">
                                <div class="portfolio-info">
                                    <h4>Vault Security System</h4>
                                    <p>An automatic high lavel multi-layerd security system</p>
                                    <a href="img/projects/Vault_security.jpg" class="preview-link" target="_new"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Apps">
                            <div class="portfolio-content h-100">
                                <img src="img/projects/careserenity2.png" class="img-fluid" alt="" loading="lazy">
                                <div class="portfolio-info">
                                    <h4>CareSerenity 2.0</h4>
                                    <p>Am advanced platform for parents & organizations</p>
                                    <a href="img/projects/careserenity2.png" class="preview-link" target="_new"><i class="bi bi-zoom-in"></i></a>
                                    <a href="https://github.com/Anayatul-Ahad-Shoikot/careserenity" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Apps">
                            <div class="portfolio-content h-100">
                                <img src="img/projects/Voting_App.png" class="img-fluid" alt="" loading="lazy">
                                <div class="portfolio-info">
                                    <h4>Voting App</h4>
                                    <p>A super secured Voting App</p>
                                    <a href="img/projects/Voting_App.png" class="preview-link" target="_new"><i class="bi bi-zoom-in"></i></a>
                                    <a href="https://github.com/Anayatul-Ahad-Shoikot/Cyber-Security-Project" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="interests" class="interests section">
            <div class="container section-title" data-aos="fade-down">
                <h2>Interests</h2>
                <div>
                    <span class="description-title">I'm interested in</span>
                </div>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="features-item">
                            <img src="./img/interests/web_development.png" alt="" width="40px">
                            <h3><a href="#" class="stretched-link">Web Development</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="features-item">
                            <img src="./img/interests/robotics.png" alt="" width="40px">
                            <h3><a href="#" class="stretched-link">Robotics</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="features-item">
                            <img src="./img/interests/image-processing.png" alt="" width="40px">
                            <h3><a href="#" class="stretched-link">Image Processing</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="features-item">
                            <img src="./img/interests/technology.png" alt="" width="40px">
                            <h3><a href="#" class="stretched-link">Technology</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="features-item">
                            <img src="./img/interests/hr_admins.png" alt="" width="40px">
                            <h3><a href="#" class="stretched-link">HR & Admins</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="features-item">
                            <img src="./img/interests/cycling.png" alt="" width="40px">
                            <h3><a href="#" class="stretched-link">Cycling</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="features-item">
                            <img src="./img/interests/badminton.png" alt="" width="40px">
                            <h3><a href="#" class="stretched-link">Badminton</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="features-item">
                            <img src="./img/interests/gaming.png" alt="" width="40px">
                            <h3><a href="#" class="stretched-link">Gaming</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="features-item">
                            <img src="./img/interests/teaching.png" alt="" width="40px">
                            <h3><a href="#" class="stretched-link">Teaching</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="training" class="training section">
            <div class="container section-title" data-aos="fade-down">
                <h2>Courses</h2>
                <div>
                    <span class="description-title">My Training & Courses</span>
                </div>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="features-item">
                            <h4><a href="#" class="stretched-link">Digital Marketing</a></h4>
                            <p>Lead IT Institute</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="features-item">
                            <h4><a href="#" class="stretched-link">Web Development (laravel)</a></h4>
                            <p>UY Lab</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="languages" class="languages section">
            <div class="container section-title" data-aos="fade-down">
                <h2>Languages</h2>
                <div>
                    <span class="description-title">Languages I speak</span>
                </div>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="features-item">
                            <h4><a href="">Bengali (native)</a></h4>
                            <div class="language-dots">
                                <i class='bx bxs-circle success'></i>
                                <i class='bx bxs-circle success'></i>
                                <i class='bx bxs-circle success'></i>
                                <i class='bx bxs-circle success'></i>
                                <i class='bx bxs-circle success'></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="features-item">
                            <h4><a href="">English (casual)</a></h4>
                            <div class="language-dots">
                                <i class='bx bxs-circle success'></i>
                                <i class='bx bxs-circle success'></i>
                                <i class='bx bxs-circle success'></i>
                                <i class='bx bxs-circle default'></i>
                                <i class='bx bxs-circle default'></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="features-item">
                            <h4><a href="">Japanese (newbie)</a></h4>
                            <div class="language-dots">
                                <i class='bx bxs-circle success'></i>
                                <i class='bx bxs-circle default'></i>
                                <i class='bx bxs-circle default'></i>
                                <i class='bx bxs-circle default'></i>
                                <i class='bx bxs-circle default'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Contacts</h2>
                <div>
                    <span class="description-title">I'm available in</span>
                </div>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
                            <i class="icon bi bi-envelope-at-fill flex-shrink-0"></i>
                            <div>
                                <h3>Email Me</h3>
                                <p>shoikotofficial@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center" data-aos="fade-right" data-aos-delay="500">
                            <i class="icon bi bi-telephone-fill flex-shrink-0"></i>
                            <div>
                                <h3>+8801973336001</h3>
                                <div class="social-links">
                                    <a href="#"><i class="bi bi-whatsapp"></i></a>
                                    <a href="#"><i class="bi bi-telegram"></i></a>
                                    <a href="#"><i class="bi bi-chat-left-dots-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="./form.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" name="msg" rows="6" placeholder="Message" required=""></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container">
            <div class="container">
                <div class="copyright">
                    &copy; copyright 2025 by <span>Anayatul Ahad Shoikot</span>
                </div>
            </div>
        </div>
    </footer>

    <a href="" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script>
        AOS.init();

        function downloadCV() {
            window.location.href = 'download_cv.php';
            return false;
        }

        async function fetchVisitorCount() {
            try {
                const response = await fetch('./visitors.php');
                const data = await response.json();
                if (data.total_visitors) {
                    document.getElementById('visitor-count').textContent = data.total_visitors;
                } else {
                    document.getElementById('visitor-count').textContent = "Error fetching count";
                }
            } catch (error) {
                console.error('Error fetching visitor count:', error);
            }
        }
        fetchVisitorCount();

        function toggleScrolled() {
            const selectBody = document.querySelector('body');
            const selectHeader = document.querySelector('#header');
            if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
            window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
        }
        document.addEventListener('scroll', toggleScrolled);
        window.addEventListener('load', toggleScrolled);
        /* Mobile nav toggle */
        const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

        function mobileNavToogle() {
            document.querySelector('body').classList.toggle('mobile-nav-active');
            mobileNavToggleBtn.classList.toggle('bi-list');
            mobileNavToggleBtn.classList.toggle('bi-x');
        }
        if (mobileNavToggleBtn) {
            mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
        }
        /*Hide mobile nav on same-page/hash links*/
        document.querySelectorAll('#navmenu a').forEach(navmenu => {
            navmenu.addEventListener('click', () => {
                if (document.querySelector('.mobile-nav-active')) {
                    mobileNavToogle();
                }
            });

        });
        /*Toggle mobile nav dropdowns*/
        document.querySelectorAll('#navmenu a').forEach(navmenu => {
            navmenu.addEventListener('click', function(e) {
                // If this link is a dropdown trigger, do NOT close the nav
                if (this.classList.contains('toggle-dropdown')) {
                    // Toggle dropdown menu on mobile
                    if (window.innerWidth < 1200) {
                        e.preventDefault();
                        const parentLi = this.parentNode;
                        const submenu = parentLi.querySelector('.dropdown-menu');
                        submenu.classList.toggle('dropdown-active');
                    }
                    return;
                }
                if (document.querySelector('.mobile-nav-active')) {
                    mobileNavToogle();
                }
            });
        });
        /*Scroll to top*/
        const scrollTop = document.getElementById('scroll-top');

        function toggleScrollTop() {
            if (scrollTop) {
                window.scrollY > 100 ?
                    scrollTop.classList.add('active') :
                    scrollTop.classList.remove('active');
            }
        }
        scrollTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        window.addEventListener('load', toggleScrollTop);
        document.addEventListener('scroll', toggleScrollTop);
        /*Typed effect*/
        const selectTyped = document.querySelector('.typed');
        if (selectTyped) {
            let typed_strings = selectTyped.getAttribute('data-typed-items');
            typed_strings = typed_strings.split(',');
            new Typed('.typed', {
                strings: typed_strings,
                loop: true,
                typeSpeed: 150,
                backSpeed: 110,
                backDelay: 500
            });
        }

        /*active nav links alteration*/
        document.addEventListener("DOMContentLoaded", () => {
            const navLinks = document.querySelectorAll("nav a");
            const sections = document.querySelectorAll("section");
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            navLinks.forEach((link) => link.classList.remove("active"));
                            const activeLink = document.querySelector(`a[href="#${entry.target.id}"]`);
                            if (activeLink) activeLink.classList.add("active");
                        }
                    });
                }, {
                    threshold: 0.5
                }
            );
            sections.forEach((section) => observer.observe(section));
        });

        /*Initiate glightbox*/
        const glightbox = GLightbox({
            selector: '.glightbox'
        });
        /*Init isotope layout and filters*/
        document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
            let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
            let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
            let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';
            let initIsotope;
            imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
                initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
                    itemSelector: '.isotope-item',
                    layoutMode: layout,
                    filter: filter,
                    sortBy: sort
                });
            });
            isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
                filters.addEventListener('click', function() {
                    isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
                    this.classList.add('filter-active');
                    initIsotope.arrange({
                        filter: this.getAttribute('data-filter')
                    });
                    if (typeof aosInit === 'function') {
                        aosInit();
                    }
                }, false);
            });
        });
    </script>
</body>

</html>