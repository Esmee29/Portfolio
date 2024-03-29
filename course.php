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
                    <li><a id ="primary-nav__contact" href="index.php#contact">Contact</a></li>
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
                        <a href="#course" class="scroll">
                            <i class="fa-solid fa-arrow-down footer-arrow"></i>
                            <br>
                            <h4>Scroll down</h4>
                        </a>
                    </div>
                    <!--Waves Container-->
                    <div>
                    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
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
    <!--Header ends-->
                <div class="page-content"><!--Everything under header -->
                    <section id="scion">
                    <div class="about" id="course">
                            <div class="title">
                            <h2 class="h1">Scion Coalition Scheme</h2>
                        </div>
                            <div class="scion-container">
                                <h3>Introduction to Scion Coalition Scheme</h3>
                                <p>The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters 
                                    in order to give willing candidates the opportunity to enter the industry as web developers. 
                                    Under the supervision of senior web developers, scions generally aim to complete training within six to nine months. 
                                    The course is intensive and therefore the level of learning achieved is extensive in a short space of time.</p>
                                    <div class="projects-block-button-group">
                                        <button class="projects-block-button btn"><a href="https://www.netmatters.co.uk/scions-coalition-scheme" target="_blank" >Find Out More 
                                            <span class="icon-arrow-right"></span></a> </button>
                                        
                                    </div>
                            </div>
                    </div>
                    <div class="content-grid">
                        <div class="treehouse-container">
                                <div class="tree-title">
                                <h3>Treehouse</h3>
                            </div>
                                <img src="Images/treehouse.png" alt="TeamTreeHouse logo" class="image">   
                            
                                    <p class="tree-text">Treehouse is an online learning community, featuring videos covering a number of topics from basic HTML to C# programming, iOS development, data analysis, and more. By completing courses users can earn points, allowing them to track their progress and see how much they've covered in certain areas.</p>
                                <div class="projects-block-button-group">
                                    <div class="projects-block-button btn"><a href="https://teamtreehouse.com/profiles/esmeefulcher2" target="_blank" >Check My Score 
                                        <span class="icon-arrow-right"></span></a> </div>
                            </div>
                            
                        </div>
                        <div class="treehouse-container">
                                <div class="tree-title">
                                <h3>About Netmatters</h3>
                            </div>
                                <img src="Images/netmatterslogo-fotor-bg-remover-2024011611259.png" alt="TeamTreeHouse logo" class="image">   
                             <ul class="net">
                                    <li>Established in 2008</li>
                                    <li>Norfolk's leading technology company</li>
                                    <li>Winner of the Princess Royal Training Award</li>
                                    <li>Winner of EDP Skills of Tomorrow Award</li>
                                    <li>80+ staff, 2 locations across Norfolk</li>
                                    <li>Digital Marketing, Website & Software development & IT Support</li>
                                    <li>Broad spectrum of clients, working nationwide</li>
                                    <li>Operate to strict company values</li>
                                </ul>
                                <div class="projects-block-button-group">
                                    <div class="projects-block-button btn"><a href="https://www.netmatters.co.uk/" target="_blank" >Find Out More 
                                        <span class="icon-arrow-right"></span></a> </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </section>
                       
                    </div>
               
                
            
        
</div>
<footer>
<div class="footer">
    <div class="scroll-container">
    <a href="#header" class="scroll-up ">
        <i class="fa-solid fa-arrow-up"></i>
        <br>
        <h3>Back to top</h3>
    </a>
</div>
    
    <!--Waves Container-->
    <div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
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
    </div>
    <script src="javaScript/main.js"></script>
    <script src="javaScript/navSidebar.js"></script>
    <script src="javaScript/form-validation.js"></script> 
</body>
</html>