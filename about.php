<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <script src="https://kit.fontawesome.com/356a53e20f.js" crossorigin="anonymous"></script>


    <title>
        Esmee Fulcher | Web Developer
        | Portfolio
    </title>
</head>

<body>
    <!-- Hamburger-->
    <div class="primary-nav__hamburger ishidden__hamburger">
        <button id="btn__hamburger" type="button" class="primary-nav__hamburger hamburger hamburger-spin-backwards inactive">
            <svg viewBox="0 0 100 100" aria-hidden="true">
                <g class="primary-nav__menu-button-burger-lines">
                    <line x1="20" y1="25" x2="80" y2="25" />
                    <line x1="20" y1="50" x2="80" y2="50" />
                    <line x1="20" y1="75" x2="80" y2="75" />
                </g>
                <g class="primary-nav__menu-button-cross-lines">
                    <line x1="28" y1="28" x2="72" y2="72" />
                    <line x1="28" y1="72" x2="72" y2="28" />
                </g>
            </svg>
        </button>
    </div>
    <aside>
        <nav class="ishidden__nav primary-nav">
            <a href="index.php" class="primary-nav__logo">
                EF
            </a>
            <div class="primary-nav__flex-container">
                <ul class="primary-nav__pages">
                    <li><a href="about.php">About</a></li>
                    <li><a id="primary-nav__portfolio" href="index.php#projects">Portfolio</a></li>
                    <li><a href="code.php">Coding Examples</a></li>
                    <li><a href="course.php">SCS Scheme</a></li>
                    <li><a id="primary-nav__contact" href="index.php#contact">Contact</a></li>
                </ul>
                <ul class="primary-nav__socials">
                    <li>
                        <a href="https://www.linkedin.com/in/esmee-fulcher-261b3321a/" target="_blank">
                            <i class="devicon-linkedin-plain social link"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/Esmee29/" target="_blank">
                            <i class="devicon-github-original social git"></i>
                        </a>

                    </li>
                    <li>
                        <a href="https://www.instagram.com/esmeefdesigns/" target="_blank">
                            <i class="fa-brands fa-instagram social insta"></i>
                        </a>

                    </li>
                </ul>
            </div>
        </nav>
    </aside>

    <div class="main-body" id="main">
        <div class="header" id="header">
            <!--Content before waves-->
            <div class="inner-header">
                <h1 id="header1"> Esmee Fulcher</h1>
                <br>
                <h2 id="header2">Web Developer</h2>
            </div>
            <div class="scroll-down">
                <a href="#about" class="scroll">
                    <i class="fa-solid fa-arrow-down footer-arrow"></i>
                    <br>
                    <h4>Scroll down</h4>
                </a>
            </div>
            <!--Waves Container-->
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
            <!--Waves end-->

        </div>
        <div class="page-content">
            <section class="about" id="about">
                <div class="title">
                    <h2 class="h1">About Me</h2>
                </div>
                <div class="about-container">
                    <h3>Graphic Designer turned Web Developer <i class="fa-solid fa-palette about-icons"></i><i class="fa-solid fa-code about-icons"></i></h3>
                    <p>Hey there! I'm Esmee, a creative individual with a passion for bringing ideas and concepts to life. I graduated from Nottingham Trent University in 2023 after studying Graphic Design and achieving a 2.1 degree.<i class="fa-solid fa-graduation-cap about-icons"></i><i class="fa-solid fa-palette about-icons"></i></p>
                    <p> During my university years, I developed a keen interest in crafting visually appealing websites and user interfaces. The process of translating designs into functioning code ignited a new spark within me, propelling me into the realm of web development.<i class="fa-solid fa-mobile-screen-button about-icons"></i><i class="fa-solid fa-laptop about-icons"></i></p>
                    <p>Recently, I completed an award-winning, intensive, 40-hour-per-week technical training program in web development, which further enhanced my skill set. This experience reinforced my passion for crafting visually appealing websites and user interfaces, driving my ambition to excel in web development.<i class="fa-solid fa-laptop-code about-icons"></i></p>

                    <p>Now, I am enthusiastically honing my skills in web development, eager to transform my design concepts into functional and interactive websites and apps. While I'm primarily interested in front-end development as a visual person, I am also studying to become a full-stack developer to gain a comprehensive understanding of all areas of development. My ultimate goal is to seamlessly merge the realms of design and development, creating websites and user interfaces that not only look visually appealing but also function flawlessly.
                        <i class="fa-solid fa-code about-icons"></i>
                    </p>
                </div>
                <div class="about-container-tech">
                    <h3>Technologies </h3>
                    <ul class="about-tools">
                        <li>
                            <div class="icon">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="adobe">
                                    <title>Adobe Creative Cloud</title>
                                    <path d="M14.782 3.153c-.231.02-.472.04-.703.07a8.453 8.453 0 0 0-2.832.834 8.951 8.951 0 0 0-2.46 1.777c-.03.04-.09.06-.141.05a7.44 7.44 0 0 0-1.496-.07 7.424 7.424 0 0 0-2.932.763c-1.768.884-3.013 2.26-3.736 4.108a7.089 7.089 0 0 0-.462 2.139c0 .05-.01.09-.02.13v.773c.02.201.05.392.07.593.1.813.332 1.596.703 2.33.824 1.646 2.089 2.851 3.786 3.594a7.127 7.127 0 0 0 2.45.593c.032 0 .06.004.086.01h8.576c.183-.017.362-.035.547-.06a8.344 8.344 0 0 0 2.811-.834 8.836 8.836 0 0 0 3.646-3.304 8.187 8.187 0 0 0 1.184-3.093c.05-.34.08-.692.121-1.034 0-.05.01-.09.02-.13v-.794c-.02-.23-.05-.452-.05-.662a8.345 8.345 0 0 0-.834-2.812 8.952 8.952 0 0 0-3.324-3.645 8.245 8.245 0 0 0-3.072-1.175c-.362-.06-.713-.09-1.075-.13-.05 0-.09-.01-.14-.02zm.369 1.693c2.126.005 3.93.826 5.395 2.455a6.93 6.93 0 0 1 1.616 3.323c.15.764.181 1.547.07 2.32-.19 1.346-.702 2.55-1.576 3.605a7.082 7.082 0 0 1-3.997 2.45 7.297 7.297 0 0 1-2.56.1c-1.095-.14-2.099-.501-3.003-1.154a5.2 5.2 0 0 1-.672-.573c-1.226-1.205-2.44-2.42-3.666-3.625-.301-.3-.321-.632-.18-.934a.822.822 0 0 1 .863-.472c.21.02.372.141.522.292 1.105 1.114 2.2 2.209 3.304 3.324a5.263 5.263 0 0 0 3.093 1.536c1.948.261 3.605-.341 4.92-1.798.713-.793 1.145-1.747 1.326-2.811.26-1.587-.11-3.013-1.095-4.268-.873-1.115-2.018-1.808-3.404-2.059-1.416-.25-2.751.02-3.966.794-.03.02-.1.03-.131.01a9.04 9.04 0 0 0-1.406-.854s-.01-.01-.02-.03a6.603 6.603 0 0 1 1.255-.823 6.646 6.646 0 0 1 2.641-.784 8.45 8.45 0 0 1 .67-.024zM7.546 7.509c1.455-.024 2.791.525 3.982 1.63.854.802 1.637 1.636 2.46 2.47.231.23.281.522.171.833-.11.311-.362.462-.683.512a.722.722 0 0 1-.632-.23c-.784-.784-1.567-1.557-2.34-2.35-.633-.653-1.386-1.025-2.27-1.186-1.958-.351-3.936.784-4.639 2.641-.904 2.36.522 5.031 2.982 5.594.482.11.995.11 1.497.1.14-.01.22.04.32.13.483.473.995.945 1.497 1.416.03.03.07.06.1.09-.06 0-.1.01-.14.01h-2.3a5.833 5.833 0 0 1-5.693-4.568c-.653-2.942 1.034-5.925 3.926-6.798a6.33 6.33 0 0 1 1.762-.294Z" id="mainIconPathAttribute" fill="#3BCEE9"></path>
                                </svg>
                            </div>
                            <h5>Adobe<br> Creative<br> Cloud</h5>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="devicon-figma-plain symbol"></i>
                            </div>
                            <h5>Figma</h5>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="devicon-html5-plain symbol"></i>
                            </div>
                            <h5>HTML</h5>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="devicon-css3-plain symbol"></i>
                            </div>
                            <h5>CSS</h5>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="devicon-sass-original symbol sass"></i>
                            </div>
                            <h5>SASS <br>(SCSS)</h5>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="devicon-javascript-plain symbol"></i>
                            </div>
                            <h5>JavaScript</h5>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="devicon-github-original symbol"></i>
                            </div>
                            <h5>GitHub</h5>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="devicon-vscode-plain symbol"></i>
                            </div>
                            <h5>Visual <br>Studio <br>Code</h5>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="devicon-php-plain symbol"></i>
                            </div>
                            <h5>PHP</h5>
                        </li>
                    </ul>
                </div>
            </section>
        </div><!--Everything under header -->


        <footer>
            <div class="footer">
                <div class="scroll-container">
                    <a href="#header" class="scroll">
                        <i class="fa-solid fa-arrow-up"></i>
                        <br>
                        <h3>Back to top</h3>
                    </a>
                </div>

                <!--Waves Container-->
                <div>
                    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                        <defs>
                            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                        </defs>
                        <g class="parallax">
                            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                        </g>
                    </svg>
                </div>
                <!--Waves end-->

            </div>



        </footer>


    </div>
    </div>
    <script src="javaScript/main.js"></script>
    <script src="javaScript/navSidebar.js"></script>
    <script src="javaScript/form-validation.js"></script>
</body>

</html>