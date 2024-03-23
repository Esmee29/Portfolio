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
                        <div class="code-title">
                        <h2 class="h1">Code Examples</h2>
                    </div>
                    <div class="about" id="code">
<div class="drop-down">
    <a class="drop-down-button">Breakpoints <i class="fa-solid fa-angle-down"></i> </a>
    <div id="dropdown1" class="drop-down-content-hidden">
            <div class="section-content">
            <p>To have a responsive websites, adaptable for all screen-sizes, breakpoints 
                the smallest unit where screen-sizes change, are used to mark where elements need to 
                be modified for larger or smaller screens. Below are the breakpoint mixins I set for the Netmatters Homepage project.</p>
                <div class="container__code">
                                <pre class="code-breaks">
                                                <code>
    <span class="purple-highlight">@mixin</span> viewport(<span class="orange-highlight">$break</span>) {

        <span class="purple-highlight"> @if</span> <span class="orange-highlight">$break</span> == <span class="green-highlight">"small"</span> { <span class="comments">// small generally used for mobile phones</span>
            <span class="purple-highlight">@media</span> (<span class="green-highlight">min-width</span> <span class="orange-highlight">$brkpoint-sm</span>) <span class="purple-highlight">and</span> (<span class="green-highlight">max-width</span> #{<span class="orange-highlight">$brkpoint-md</span> - <span class="orange-highlight">1</span>}) { <span class="comments">// between 320px and 767px</span>
                <span class="purple-highlight"> @content</span>;
            }
        }
        <span class="purple-highlight">@else</span> if <span class="orange-highlight">$break</span> == <span class="green-highlight">"smedium"</span> {
            <span class="purple-highlight">@media</span> (<span class="green-highlight">max-width</span> <span class="orange-highlight">$brkpoint-smd</span>) { <span class="comments">// between 650px and 767px</span>
                <span class="purple-highlight">@content</span>;
            }
        }
        <span class="purple-highlight">@else</span> if <span class="orange-highlight">$break</span> == <span class="green-highlight">"medium"</span> { 
            <span class="purple-highlight">@media</span> (<span class="green-highlight">min-width</span> <span class="orange-highlight">$brkpoint-md</span>) <span class="purple-highlight">and</span> (<span class="green-highlight">max-width</span> #{<span class="orange-highlight">$brkpoint-lg</span> - <span class="orange-highlight">1</span>}) { <span class="comments">// between 768px and 991px</span>
                <span class="purple-highlight">@content</span>;
            }
        }
        <span class="purple-highlight">@else</span> if <span class="orange-highlight">$break</span> == <span class="green-highlight">"large"</span> { <span class="comments">// large generally used for desktop monitors</span>
            <span class="purple-highlight">@media</span> (<span class="green-highlight">min-width</span> <span class="orange-highlight">$brkpoint-lg</span>) and (<span class="green-highlight">max-width</span> #{<span class="orange-highlight">$brkpoint-xlg</span> - <span class="orange-highlight">1</span>}) { <span class="comments">// between 992px and 1259px</span>
                <span class="purple-highlight">@content</span>;
            }
        }
        <span class="purple-highlight">@else</span> if <span class="orange-highlight">$break</span> == <span class="green-highlight">"x-large"</span> { <span class="comments">// large generally used for desktop monitors</span>
            <span class="purple-highlight">@media</span> (<span class="green-highlight">min-width</span> <span class="orange-highlight">$brkpoint-xlg</span>) <span class="purple-highlight">and</span> (<span class="green-highlight">max-width</span> #{<span class="orange-highlight">$brkpoint-xxlg</span> - <span class="orange-highlight">1</span>}) { <span class="comments">// between 1260px and 1439px</span>
                <span class="purple-highlight">@content</span>;
            }
        }
        <span class="purple-highlight">@else</span> if <span class="orange-highlight">$break</span> == <span class="green-highlight">"xx-large"</span> { <span class="comments">// extra large</span>
            <span class="purple-highlight">@media</span> (<span class="green-highlight">min-width</span> <span class="orange-highlight">$brkpoint-xxlg</span>) { <span class="comments">// greater than 1440px</span>
                <span class="purple-highlight">@content</span>;
            }
        }
        <span class="purple-highlight">@else</span> {
            <span class="purple-highlight">@error</span> <span class="green-highlight">"No value could be retrieved for break for `#{$break}`"</span>;
        }

        
    }  
                                                </code>
                                            </pre>
                                            <p>When an changes to elements are made at specific screen-sizes the viewport mixin is called in for example in the code before
                                                at the x-large screen-size which is between 1260px and 1439px the logo element is changing height to 64px. </p>
                                                <pre class="code-breaks">
                                                    <code>
    .logo {
        <span class="purple-highlight">@include</span> viewport(x-large) {
            <span class="green-highlight">height</span> <span class="orange-highlight">64px</span>;
            }
            }  
                                                    </code>
                                                </pre>

        </div>
                    </div>
                    
    </div>
</div>
<div class="drop-down">
    <a class="drop-down-button">Form validation<i class="fa-solid fa-angle-down"></i> </a>
    <div id="dropdown2" class="drop-down-content-hidden">
            <div class="section-content">
            <p>Form validation is essential to ensure correct user input. In the contact form below, the first and last names, 
                            as well as the email, are mandatory; prompts will appear if they are missing or if the names are under 2 characters 
                            and the email lacks the '@' and '.' symbols. Optional sections include phone number, subject, and message, each with 
                            specific requirements; prompts will appear for incorrectly filled fields. Successful completion allows form submission.</p>
                <div class="container__code">
                                <pre class="code-breaks">
                                                <code>
            <span class="comments">// References to the form fields and submit button //</span>
            <span class="purple-highlight">const</span> firstNameInput = <span class="orange-highlight">document</span>.<span class="blue-highlight">getElementById</span>(<span class="green-highlight">'first-name'</span>);
            <span class="purple-highlight">const</span> lastNameInput = <span class="orange-highlight">document</span>.<span class="blue-highlight">getElementById</span>(<span class="green-highlight">'last-name</span>');
            <span class="purple-highlight">const</span> emailInput = <span class="orange-highlight">document</span>.<span class="blue-highlight">getElementById</span>(<span class="green-highlight">'email'</span>);
            <span class="purple-highlight">const</span> phoneInput =  <span class="orange-highlight">document</span>.<span class="blue-highlight">getElementById</span>(<span class="green-highlight">'phone'</span>);
            <span class="purple-highlight">const</span> subjectInput =  <span class="orange-highlight">document</span>.<span class="blue-highlight">getElementById</span>(<span class="green-highlight">'subject'</span>);
            <span class="purple-highlight">const</span> messageInput =  <span class="orange-highlight">document</span>.<span class="blue-highlight">getElementById</span>(<span class="green-highlight">'message'</span>);
            <span class="purple-highlight">const</span> submitButton =  <span class="orange-highlight">document</span>.<span class="blue-highlight">getElementById</span>(<span class="green-highlight">'submit-btn'</span>);
                        
            
            <span class="comments">// Add event listener to the submit button //</span>
            submitButton.<span class="blue-highlight">addEventListener</span>(<span class="green-highlight">'click'</span>, <span class="purple-highlight">function</span>(event) {
                <span class="comments">// Prevent form submission //</span>
                event.<span class="blue-highlight">preventDefault()</span>;
            
                <span class="comments">// Validate first name (at least 2 characters) //</span>
                <span class="purple-highlight">const</span> firstName = firstNameInput.<span class="orange-highlight">value</span>;
                <span class="purple-highlight">if</span> (firstName.<span class="orange-highlight">length</span> < <span class="orange-highlight">2</span>) {
                    <span class="blue-highlight">alert</span>(<span class="green-highlight">'Please enter a first name with at least 2 characters'</span>);
                    <span class="purple-highlight">return</span>;
                }
            
                <span class="comments">// Validate last name (at least 2 characters) //</span>
                <span class="purple-highlight">const</span> lastName = lastNameInput.<span class="orange-highlight">value</span>;
                <span class="purple-highlight">if</span> (lastName.<span class="orange-highlight">length</span> < <span class="orange-highlight">2</span>) {
                    <span class="blue-highlight">alert</span>(<span class="green-highlight">'Please enter a last name with at least 2 characters'</span>);
                    <span class="purple-highlight">return</span>;
                }
            
                <span class="comments">// Validate email (format: xxx@xxx.xxx) //</span>
                <span class="purple-highlight">const</span> email = emailInput.<span class="orange-highlight">value</span>;
                <span class="purple-highlight">const</span> <span class="orange-highlight">emailRegex</span> = <span class="green-highlight">/^[^\s@]+@[^\s@]+\.[^\s@]+$/</span>;
                <span class="purple-highlight">if</span> (!<span class="orange-highlight">emailRegex</span>.<span class="orange-highlight">test</span>(email)) {
                    <span class="blue-highlight">alert</span>(<span class="green-highlight">'Please enter a valid email address'</span>);
                <span class="purple-highlight">return</span>;
                }
            
            
                <span class="comments">// Validate phone number (exactly 11 digits), if provided //</span>
                <span class="purple-highlight">const</span> phoneNumber = <span class="orange-highlight">phoneInput</span>.<span class="orange-highlight">value</span>;
                <span class="purple-highlight">if</span> (phoneNumber.<span class="orange-highlight">length</span > <span class="green-highlight">0 && !/^\d{11}$/</span>.<span class="orange-highlight">test</span>(phoneNumber)) {
                    <span class="blue-highlight">alert</span>(<span class="green-highlight">'Please enter a valid phone number'</span>);
                    <span class="purple-highlight">return</span>;
                }
            
                <span class="comments">// Validate subject (any characters), if provided //</span>
                <span class="blue-highlight">const</span> subject = subjectInput.value;
                <span class="blue-highlight">if</span> (<span class="orange-highlight">subject</span>.<span class="orange-highlight">length</span > <span class="green-highlight">0 &&</span> <span class="orange-highlight">subject</span>.<span class="orange-highlight">length</span> < <span class="green-highlight">5</code>) {
                    <span class="blue-highlight">alert</span>(<span class="green-highlight">'Please enter a subject with at least 5 characters'</span>);
                    <span class="purple-highlight">return</span>;
                }
            
                <span class="comments">// Validate message (any characters), if provided //</span>
                <span class="purple-highlight">const</span> message = messageInput.<span class="orange-highlight">value</span>;
                <span class="purple-highlight">if</span> (message.<span class="orange-highlight">length</span > <span class="green-highlight">0 &&</span> <span class="orange-highlight">message</span>.<span class="orange-highlight">length</span> < <span class="green-highlight">10</span>) {
                    <span class="blue-highlight">alert</span>(<span class="green-highlight">'Please enter a message with at least 10 characters'</span>);
                <span class="purple-highlight">return</span>;
                }
            
                <span class="comments">// If all validations pass, submit the form //</span>
                <span class="blue-highlight">alert</span>(<span class="green-highlight">'Form submitted successfully!'</span>);
            });
                                                    </code>
                                                </pre>

        </div>
                    </div>
                    
    </div>
</div>
<div class="drop-down">
    <a class="drop-down-button">Javascript Array<i class="fa-solid fa-angle-down"></i> </a>
    <div id="dropdown3" class="drop-down-content-hidden">
            <div class="section-content">
            <p>Below is a snippet of the code from my Javascript Array and the JavaScript function `displayRandomImage()` fetches a random image from the 'https://picsum.photos' API and displays it within the 'image-container' div on a webpage. 
            It first converts the fetched image into a Blob object and then into a URL using `URL.createObjectURL()`. The function checks for any existing image in the container, removes it, and then creates a new image element with the fetched image URL, appending it to the container. </p>
                <div class="container__code">
                                <pre class="code-breaks">
                                                <code>
<span class="purple-highlight">function</span> displayRandomImage() {
    <span class="blue-highlight">fetch</span>(<span class="green-highlight">'https://picsum.photos/600/300'</span>)
    .<span class="purple-highlight">then</span>(response => response.blob())
    .<span class="purple-highlight">then</span>(images => {
        <span class="purple-highlight">let</span> imageLink = <span class="orange-highlight">URL</span>.<span class="blue-highlight">createObjectURL</span>(images);
        <span class="purple-highlight">let</span> container = <span class="orange-highlight">document</span>.<span class="blue-highlight">getElementById</span>(<span class="green-highlight">'image-container'</span>);

        <span class="purple-highlight">let</span> oldImage = <span class="orange-highlight">document</span>.<span class="blue-highlight">getElementById</span>(<span class="green-highlight">'display-image'</span>);
        <span class="purple-highlight">if</span> (oldImage) {
        oldImage.remove();
      }
      <span class="purple-highlight">let</span> img = <span class="orange-highlight">document</span>.<span class="blue-highlight">createElement</span>(<span class="green-highlight">'img'</span>);
      img.id = <span class="green-highlight">'display-image'</span>;
      img.src = imageLink;
      img.alt = <span class="green-highlight">' '</span>;
      img.className = <span class="green-highlight">'responsive-image'</span>; 
      <span class="orange-highlight">container</span>.appendChild(img);
      });
     }                                              </code>
                                                </pre>
        <p>The top snippet of code below calls the displayRandomImage and the function generates an image in the image-container on page loads.
            The second snippet of code below adds an event listener to the 'generate-image' button, which calls the displayRandomImage function when clicked
            and changes the image in the image-container.</p>
                                                <pre class="code-breaks">
                                                    <code>
        
                                                <code>

displayRandomImage();

<span class="orange-highlight">document</span>.<span class="blue-highlight">getElementById</span>(<span class="green-highlight">'generate-image'</span>).<span class="blue-highlight">addEventListener</span>(<span class="green-highlight">'click'</span>, displayRandomImage);
                                                    </code>
                                                </pre>

        </div>
                    </div>
                    
    </div>
</div>               
</section>
                    
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
    <script src="javaScript/dropdown.js"></script>
</body>
</html>