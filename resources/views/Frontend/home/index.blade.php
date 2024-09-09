<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <title>School Website</title>
</head>

<body>
    <header class="header" id="home">
        <nav>
            <div class="nav__bar">
                <div class="logo nav__logo">
                    <a href="#">INOVINDO</a>
                </div>
                <ul class="nav__links" id="nav-links">
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#equipment">Equipment</a></li>
                    <li><a href="#blog">Blog</a></li>
                </ul>
                <div class="nav__menu__btn" id="menu-btn">
                    <i class="ri-menu-line"></i>
                </div>
                <div class="nav__action__btn">
                    <a href="{{ route('login') }}" class="btn">
                        <span><i class="ri-user-line"></i></span> Login
                    </a>
                </div>
            </div>
        </nav>
        <div class="section__container header__container">
            <div class="header__content">
                <h3 class="section__subheader">WELCOME TO NEW GENERATION</h3>
                <h1 class="section__header">
                    Be Prepared For The Bright Future!
                </h1>
                <div class="scroll__btn">
                    <a href="#about">
                        Scroll down
                        <span><i class="ri-arrow-down-line"></i></span>
                    </a>
                </div>
            </div>
            <div class="header__socials">
                <span>Follow us</span>
                <a href="#"><i class="ri-instagram-line"></i></a>
                <a href="#"><i class="ri-twitter-fill"></i></a>
            </div>
        </div>
    </header>
    <!-- <section class="about">
        <div class="section__container about__container">
            <div class="about__image about__image-1" id="about">
                <img src="assets/about-1.jpg" alt="about" />
            </div>
            <div class="about__content about__content-1">
                <h3 class="section__subheader">GET STARTED</h3>
                <h2 class="section__header">What level of hiker are you?</h2>
                <p>
                    Whether you're a novice seeking scenic strolls or an experienced
                    trekker craving challenging ascents, we've curated a diverse range
                    of trails to cater to every adventurer. Uncover your hiking
                    identity, explore tailored recommendations, and embrace the great
                    outdoors with a newfound understanding of your capabilities.
                </p>
                <div class="about__btn">
                    <a href="#">
                        Read more
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
            </div>
            <div class="about__image about__image-2" id="equipment">
                <img src="assets/about-2.jpg" alt="about" />
            </div>
            <div class="about__content about__content-2">
                <h3 class="section__subheader">HIKING ESSENTIALS</h3>
                <h2 class="section__header">Picking the right hiking gear!</h2>
                <p>
                    From durable footwear that conquers rugged trails to lightweight
                    backpacks that carry your essentials with ease, we navigate the
                    intricacies of gear selection to ensure you're geared up for success
                    on every hike. Lace up your boots and let the journey begin with
                    confidence, knowing you've chosen the right gear for the trail
                    ahead!
                </p>
                <div class="about__btn">
                    <a href="#">
                        Read more
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
            </div>
            <div class="about__image about__image-3" id="blog">
                <img src="assets/about-3.jpg" alt="about" />
            </div>
            <div class="about__content about__content-3">
                <h3 class="section__subheader">WHERE YOU GO IS THE KEY</h3>
                <h2 class="section__header">Understanding your map & timing</h2>
                <p>
                    Knowing when to start and anticipating the changing conditions
                    ensures a safe and enjoyable journey. So, dive into the details,
                    grasp the contours, and synchronize your steps with the rhythm of
                    nature. It's not just a hike; it's a journey orchestrated by your
                    map and timed to perfection.
                </p>
                <div class="about__btn">
                    <a href="#">
                        Read more
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section> -->

    <footer class="footer">
        <div class="section__container footer__container">
            <div class="footer__col">
                <div class="logo footer__logo">
                    <a href="#">INOVINDO</a>
                </div>
                <p>
                    Get out there & discover your next slope, mountains & destination!
                </p>
            </div>
            <div class="footer__col">
                <h4>More on The Blog</h4>
                <ul class="footer__links">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contributors & Writers</a></li>
                    <li><a href="#">Write For Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>More on MNTN</h4>
                <ul class="footer__links">
                    <li><a href="#">The Team</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Press</a></li>
                </ul>
            </div>
        </div>
        <div class="footer__bar">
            Copyright © 2024 Web Design Mastery. All rights reserved.
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        const menuBtn = document.getElementById("menu-btn");
        const navLinks = document.getElementById("nav-links");
        const menuBtnIcon = menuBtn.querySelector("i");

        menuBtn.addEventListener("click", (e) => {
            const isOpen = navLinks.classList.contains("open");
            menuBtnIcon.setAttribute("class", isOpen ? "ri-menu-line" : "ri-close-line");
            if (isOpen) {
                navLinks.classList.add("close");
                navLinks.addEventListener(
                    "animationend",
                    (e) => {
                        navLinks.classList.remove("open");
                        navLinks.classList.remove("close");
                    }, {
                        once: true
                    }
                );
            } else {
                navLinks.classList.add("open");
            }
        });

        navLinks.addEventListener("click", (e) => {
            navLinks.classList.remove("open");
            menuBtnIcon.setAttribute("class", "ri-menu-line");
        });

        const scrollRevealOption = {
            distance: "50px",
            origin: "bottom",
            duration: 1000,
        };

        ScrollReveal().reveal(".header__container .section__subheader", {
            ...scrollRevealOption,
        });
        ScrollReveal().reveal(".header__container .section__header", {
            ...scrollRevealOption,
            delay: 500,
        });
        ScrollReveal().reveal(".header__container .scroll__btn", {
            ...scrollRevealOption,
            delay: 1000,
        });
        ScrollReveal().reveal(".header__container .header__socials", {
            ...scrollRevealOption,
            origin: "left",
            delay: 1500,
        });

        ScrollReveal().reveal(".about__image-1, .about__image-3", {
            ...scrollRevealOption,
            origin: "right",
        });
        ScrollReveal().reveal(".about__image-2", {
            ...scrollRevealOption,
            origin: "left",
        });
        ScrollReveal().reveal(".about__content .section__subheader", {
            ...scrollRevealOption,
            delay: 500,
        });
        ScrollReveal().reveal(".about__content .section__header", {
            ...scrollRevealOption,
            delay: 1000,
        });
        ScrollReveal().reveal(".about__content p", {
            ...scrollRevealOption,
            delay: 1500,
        });
        ScrollReveal().reveal(".about__content .about__btn", {
            ...scrollRevealOption,
            delay: 2000,
        });
    </script>
</body>

</html>