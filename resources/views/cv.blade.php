<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV | Bagus Pahlefi</title>
    @include('includes.styles')
    <link rel="stylesheet" href="{{asset('dist')}}/css/styles.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        @include('includes.preloader')
        @include('includes.navbar')
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('home')}}" class="brand-link">
            <img src="{{asset('adminLTE')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="#about" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                About
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#experience" class="nav-link">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>
                                Experience
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#education" class="nav-link">
                            <i class="nav-icon fas fa-school"></i>
                            <p>
                                Education
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#skills" class="nav-link">
                            <i class="nav-icon fas fa-code"></i>
                            <p>
                                Skills
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#interests" class="nav-link">
                            <i class="nav-icon fas fa-futbol"></i>
                            <p>
                                Interests
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#awards" class="nav-link">
                            <i class="nav-icon fas fa-certificate"></i>
                            <p>
                                Awards
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            <section class="resume-section" id="about">
                <div class="row">
                    <div class="col-10">
                        <div class="resume-section-content">
                            <h1 class="mb-0">
                                Bagus
                                <span class="text-primary">Pahlefi</span>
                            </h1>
                            <div class="subheading mb-5">
                                Perumahan Pilar Baru Kec.Geneng Kab.Ngawi · (+62)85608537600 ·
                                <a href="mailto:baguspahlefi2000@gmail.com">baguspahlefi2000@gmail.com</a>
                            </div>
                            <p class="lead mb-5">I am delighted to explore the world of programming, 
                                specifically web programming. I have good soft skills, such as the ability
                                 to adapt easily and enthusiasm for new things.</p>
                            <div class="social-icons">
                                <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                                <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                                <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 pt-4">
                        <img src="{{asset('dist')}}/assets/img/profile.jpg" width="180px" class="img-circle elevation-2" alt="User Image">
                    </div>
                </div>
               
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Frontend Web Developer</h3>
                            <div class="subheading mb-3">Telkom University</div>
                            <p>Handle several projects to add new feature or fixing some bugs using angular.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">January 2023 - Present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Aplication Developer</h3>
                            <div class="subheading mb-3">Telkom Indonesia</div>
                            <p>Make an Dashboard that will display data from database and show the graph. Made using PHP 7.4 programming language, Laravel 8 framework.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Januray 2022 - June 2022</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Telkom University</h3>
                            <div class="subheading mb-3">Bachelor's Degree</div>
                            <div>Software Engineer</div>
                            <p>GPA: 3.24</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">January 2019 - December 2022</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                        <li class="list-inline-item"><i class="fab fa-laravel"></i></li>
                    </ul>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>Apart from being a web developer, I enjoy most of my time being outdoors. Specially doing hiking mountain.I like watching movies and listening music.</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Certifications & <span class="text-primary"> Projects </span></h2>
                    <h6 class="mb-4">Certifications</h6>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-certificate text-warning"></i></span>
                            Full-Stack Website Developer - BuildWithAngga <br>
                            <p class="text-secondary">September 2022</p>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-certificate text-warning"></i></span>
                            <a href="https://www.dicoding.com/certificates/NVP79Q0LOZR0">
                                Belajar Membuat Aplikasi Back-End untuk Pemula - Dicoding
                            </a>
                            <br>
                            <p class="text-secondary">Issued December 2022 · Expires December 2025</p>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-certificate text-warning"></i></span>
                            <a href="https://www.dicoding.com/certificates/MEPJKN414X3V">
                                Memulai Pemrograman Dengan JavaMemulai Pemrograman Dengan Java - Dicoding 
                            </a>
                            <br>
                            <p class="text-secondary">Issued December 2022 · Expires December 2025</p>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-certificate text-warning"></i></span>
                            <a href="https://www.dicoding.com/certificates/NVP79Q0LOZR0">
                                Amazon Web Services Cloud PractitionerAmazon Web Services Cloud Practitioner - Dicoding
                            </a>
                            <br>
                            <p class="text-secondary">Issued November 2022 · Expires November 2025</p>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-certificate text-warning"></i></span>
                            <a href="https://dicoding.com/certificates/ERZR0GW6OXYV">
                                Belajar Dasar Pemrograman Javascript - Dicoding 
                            </a>
                            <br>
                            <p class="text-secondary">Issued November 2022 · Expires November 2025</p>
                        </li>
                    </ul>
                    <h6 class="my-4">Project</h6>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-certificate text-warning"></i></span>
                            <a href="https://jejakadventure.com">
                                Jejak Adventure 
                            </a>
                            <br>
                            <p class="text-secondary"> Jejak Adventure is platrom to offers services for mountain travel in Indonesia and 
                                internationally, with services that are certainly certified and trusted.</p>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <script src="{{asset('dist')}}/js/scripts.js"></script>
    @include('includes.scripts')



</html>