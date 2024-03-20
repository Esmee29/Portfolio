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
                    <li><a id ="primary-nav__contact" href="contact.php">Contact</a></li>
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
                        <a href="#code" class="scroll">
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
                <div class="page-content"><!--Everything under header -->
                <section id="coding">
                <div class="about" id="code">
                        <div class="title">
                        <h2 class="h1">Code Examples</h2>
                    </div>
                    <div class="about-container">
                        <h3>Breakpoints</h3>
                        <p>To have a responsive websites, adaptable for all screen-sizes, breakpoints 
                            the smallest unit where screen-sizes change, are used to mark where elements need to 
                            be modified for larger or smaller screens. Below are the breakpoint mixins I set for the Netmatters Homepage project.</p>
                            <pre class="code-breaks">
                                <code>
        @mixin viewport($break) {

            @if $break == "small" { // small generally used for mobile phones
                @media (min-width: $brkpoint-sm) and (max-width: #{$brkpoint-md - 1}) { // between 320px and 767px
                    @content;
                }
            }
            @else if $break == "smedium" {
                @media (max-width: $brkpoint-smd) { // between 650px and 767px
                    @content;
                }
            }
            @else if $break == "medium" { 
                @media (min-width: $brkpoint-md) and (max-width: #{$brkpoint-lg - 1}) { // between 768px and 991px
                    @content;
                }
            }
            @else if $break == "large" { // large generally used for desktop monitors
                @media (min-width: $brkpoint-lg) and (max-width: #{$brkpoint-xlg - 1}) { // between 992px and 1259px
                    @content;
                }
            }
            @else if $break == "x-large" { // large generally used for desktop monitors
                @media (min-width: $brkpoint-xlg) and (max-width: #{$brkpoint-xxlg - 1}) { // between 1260px and 1439px
                    @content;
                }
            }
            @else if $break == "xx-large" { // extra large
                @media (min-width: $brkpoint-xxlg) { // greater than 1440px
                    @content;
                }
            }
            @else {
                @error "No value could be retrieved for break for `#{$break}`";
            }

            
        }  
                                </code>
                            </pre>
                            <p>When an changes to elements are made at specific screen-sizes the viewport mixin is called in for example in the code before
                                at the x-large screen-size which is between 1260px and 1439px the logo element is changing height to 64px. </p>
                                <pre class="code-breaks">
                                    <code>
        .logo {
            @include viewport(x-large) {
            height: 64px;
                }
                }  
                                    </code>
                                </pre>
                        </div>
                    </div>
                    <div class="about">
                        
                    <div class="about-container">
                        <h3>Form validation</h3>
                        <p>Form validation is essential to ensure correct user input. In the contact form below, the first and last names, 
                            as well as the email, are mandatory; prompts will appear if they are missing or if the names are under 2 characters 
                            and the email lacks the '@' and '.' symbols. Optional sections include phone number, subject, and message, each with 
                            specific requirements; prompts will appear for incorrectly filled fields. Successful completion allows form submission.</p>
                            <pre class="code-breaks">
                                <code>
            // References to the form fields and submit button //
            const firstNameInput = document.getElementById('first-name');
            const lastNameInput = document.getElementById('last-name');
            const emailInput = document.getElementById('email');
            const phoneInput = document.getElementById('phone');
            const subjectInput = document.getElementById('subject');
            const messageInput = document.getElementById('message');
            const submitButton = document.getElementById('submit-btn');
            
            // Add event listener to the submit button //
            submitButton.addEventListener('click', function(event) {
                // Prevent form submission //
                event.preventDefault();
            
                // Validate first name (at least 2 characters) //
                const firstName = firstNameInput.value;
                if (firstName.length < 2) {
                alert('Please enter a first name with at least 2 characters');
                return;
                }
            
                // Validate last name (at least 2 characters) //
                const lastName = lastNameInput.value;
                if (lastName.length < 2) {
                alert('Please enter a last name with at least 2 characters');
                return;
                }
            
                // Validate email (format: xxx@xxx.xxx) //
                const email = emailInput.value;
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;;
                if (!emailRegex.test(email)) {
                alert('Please enter a valid email address');
                return;
                }
            
                // Optional validations
                // Validate phone number (exactly 11 digits), if provided //
                const phoneNumber = phoneInput.value;
                if (phoneNumber.length > 0 && !/^\d{11}$/.test(phoneNumber)) {
                alert('Please enter a valid phone number');
                return;
                }
            
                // Validate subject (any characters), if provided //
                const subject = subjectInput.value;
                if (subject.length > 0 && subject.length < 5) {
                alert('Please enter a subject with at least 5 characters');
                return;
                }
            
                // Validate message (any characters), if provided //
                const message = messageInput.value;
                if (message.length > 0 && message.length < 10) {
                alert('Please enter a message with at least 10 characters');
                return;
                }
            
                // If all validations pass, submit the form //
                alert('Form submitted successfully!');
            });
                                </code>
                            </pre>
                            
                        </div>
                    </div>
                </section>
                    
                </div>

                <!--Contact Form-->
                <div class="contact-container" id="contact">
            <?php include 'php/contact_form.php';?>
        
</div>
                
        
                
            
        

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
<script src="javaScript/main.js"></script>
    <script src="javaScript/navSidebar.js"></script>
    <script src="javaScript/form-validation.js"></script>
</body>
</html>