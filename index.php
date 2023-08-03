<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

    <link rel="stylesheet" href="css/styles.css">



    <title>Zain Ali</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Zain Ali</a>
            <a href="https://www.linkedin.com/in/zainali1422/" target="_blank" class="home__social-icon">
                <i class="uil uil-linkedin-alt"></i>
            </a>
            <a href="https://twitter.com/zaindevelops" target="_blank" class="home__social-icon">
                <i class="uil uil-twitter-alt"></i>
            </a>

            <a href="https://github.com/javzain/" target="_blank" class="home__social-icon">
                <i class="uil uil-github-alt"></i>
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            Home
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            About
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            Skills
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#qualification" class="nav__link">
                            Qualifications
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#portfolio" class="nav__link">
                            Portfolio
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            Contact
                        </a>
                    </li>

                </ul>


            </div>


        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">

                    <div>

                    </div>
                    <img src="img\LinkedInPic.jpg" alt="me" class="home__img">



                    <div class="home__data">
                        <h1 class="home__title">hi, I'm Zain</h1>
                        <h3 class="home__subtitle">a software engineer</h3>
                        <p class="home__description">who loves to bring ideas to life through a combination of code,
                            creativity,
                            and a never-ending thirst for knowledge.</p>
                        <a href="#contact" class="button button--flex">
                            Lets Connect! <i class=" home__icon uil uil-exchange"></i>
                        </a>
                    </div>
                </div>


                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <?php include 'about.php' ?>

        <!--==================== SKILLS ====================-->
        <?php include 'skills.php' ?>

        <!--==================== QUALIFICATION ====================-->
        <?php include 'qualifications.php' ?>



        <!--==================== PORTFOLIO ====================-->
        <?php include 'portfolio.php' ?>



        <!--==================== CONTACT ME ====================-->
        <?php include 'contact.php' ?>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Zain Ali</h1>
                    <span class="footer__subtitle">Software Engineer</span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#home" class="footer__link">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="footer__link">About</a>
                    </li>
                    <li>
                        <a href="#skills" class="footer__link">Skills</a>
                    </li>
                    <li>
                        <a href="#qualifications" class="footer__link">Qualifications</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contact</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href="https://www.linkedin.com/in/zainali1422/" target="_blank" class="footer__social-icon">
                        <i class="uil uil-linkedin-alt"></i>
                    </a>
                    <a href="https://twitter.com/zaindevelops" target="_blank" class="footer__social-icon">
                        <i class="uil uil-twitter-alt"></i>
                    </a>

                    <a href="https://github.com/javzain/" target="_blank" class="footer__social-icon">
                        <i class="uil uil-github-alt"></i>
                    </a>
                </div>
            </div>

            <p class="footer__copy">&#169; Zain Ali. All rights reserved</p>
        </div>
    </footer>

    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrollup" id="scroll-top">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>


    <!--==================== MAIN JS ====================-->
    <script src="js/main.js"></script>

</body>

</html>