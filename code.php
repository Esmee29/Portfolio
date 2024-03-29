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
                <a href="#code" class="scroll">
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
                            <a class="drop-down-button">Javascript Array<i class="fa-solid fa-angle-down"></i> </a>
                            <div id="dropdown2" class="drop-down-content-hidden">
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

displayRandomImage();

<span class="orange-highlight">document</span>.<span class="blue-highlight">getElementById</span>(<span class="green-highlight">'generate-image'</span>).<span class="blue-highlight">addEventListener</span>(<span class="green-highlight">'click'</span>, displayRandomImage);
</code>
                                                </pre>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="drop-down">
                            <a class="drop-down-button">Database Integration<i class="fa-solid fa-angle-down"></i> </a>
                            <div id="dropdown3" class="drop-down-content-hidden">
                                <div class="section-content">
                                    <p>This script is designed to showcase the most recent articles from the Netmatters website on its homepage.
                                        Utilizing a database backend, it retrieves the latest articles' information, including titles, images, authors, and publication dates, and displays them on the page.
                                        The first part connects to the database and then, using the database columns for the different parts of article information, pastes the data on the page.</p>
                                    <div class="container__code">
                                        <pre class="code-breaks">
<code>

<span class="red-highlight">&lt;?php</span>
<span class="comments">// Load environment variables</span>
<span class="purple-highlight">require_once</span> <span class="blue-highlight">__DIR__</span> . <span class="green-highlight">'/../../../vendor/autoload.php'</span>;
<span class="orange-highlight">$dotenv</span> = <span class="green-highlight">Dotenv\Dotenv::createImmutable</span>(<span class="blue-highlight">__DIR__</span>, <span class="green-highlight">'db.env'</span>);
<span class="orange-highlight">$dotenv</span>-><span class="blue-highlight">load</span>();
<span class="purple-highlight">require_once</span> <span class="green-highlight">'php/controllers/DatabaseController.php'</span>;

<span class="purple-highlight">try</span> {
    <span class="comments">// Provide the required database connection details</span>
    <span class="orange-highlight">$host</span> = <span class="blue-highlight">$_ENV</span>[<span class="green-highlight">'MySQL_DB_HOST'</span>];
    <span class="orange-highlight">$dbname</span> = <span class="blue-highlight">$_ENV</span>[<span class="green-highlight">'MySQL_DB_NAME'</span>];
    <span class="orange-highlight">$dbusername</span> = <span class="blue-highlight">$_ENV</span>[<span class="green-highlight">'MySQL_DB_USER_NAME'</span>];
    <span class="orange-highlight">$dbpassword</span> = <span class="blue-highlight">$_ENV</span>[<span class="green-highlight">'MySQL_DB_PASSWORD'</span>];

    <span class="comments">// Instantiate the DatabaseController with the provided details</span>
    <span class="orange-highlight">$db</span> = new <span class="blue-highlight">DatabaseController</span>(<span class="orange-highlight">$host, $dbusername, $dbpassword, $dbname</span>);

    <span class="comments">// Connect to the database</span>
    <span class="orange-highlight">$db</span>-&gt;<span class="blue-highlight">connect</span>();

    <span class="comments">// Query the database to fetch news articles</span>
    <span class="orange-highlight">$news</span> = <span class="orange-highlight">$db</span>-&gt;<span class="blue-highlight">query</span>(<span class="green-highlight">"SELECT * FROM news ORDER BY date DESC LIMIT 3"</span>);

    <span class="comments">// Disconnect from the database</span>
    <span class="orange-highlight">$db</span>-&gt;<span class="blue-highlight">disconnect</span>();

    <span class="purple-highlight">function</span> <span class="blue-highlight">articleContent</span>(<span class="orange-highlight">$image, $imageAlt, $title, $readTime, $info, $type, $authorImage, $authorName, $date, $counter</span>)
    {
        <span class="purple-highlight">return</span> '
        &lt;div class=<span class="green-highlight">"block block-' . $counter . '"</span>&gt;
            &lt;a class=<span class="green-highlight">"article-link"</span> href =<span class="green-highlight">"#"</span>&gt;&lt;/a&gt;
            &lt;div class=<span class="green-highlight">"img-container"</span>&gt;
                &lt;a href=<span class="green-highlight">"#"</span> class=<span class="green-highlight">"btn-tooltip btn-tooltip-' . $counter . '"</span> title=<span class="green-highlight">"View all: Digital Marketing / News"</span>&gt;' . <span class="green-highlight">$type</span> . '&lt;/a&gt;
                &lt;a class=<span class="green-highlight">"article-img"</span>&gt;
                &lt;img src=<span class="green-highlight">"' . $image . '" class ="img-responsive img-container" alt="' . $imageAlt . '"</span>&gt;
                &lt;/a&gt; 
            &lt;/div&gt;
            &lt;div class=<span class="green-highlight">"block-content"</span>&gt;
                &lt;h3&gt;
                &lt;a href=<span class="green-highlight">"#"</span>&gt;' . <span class="green-highlight">$title</span>  . '&lt;/a&gt;
                &lt;span class=<span class="green-highlight">"readtime"</span>&gt;' . <span class="green-highlight">$readTime</span> . '&lt;/span&gt;
                &lt;/h3&gt;
                &lt;p&gt;' . <span class="green-highlight">$info</span> . '&lt;/p&gt;
                &lt;div class=<span class="green-highlight">"btn btn-news btn-news-' . $counter . '"</span>&gt;Read More&lt;/div&gt;
                
                &lt;div class=<span class="green-highlight">"user"</span>&gt;
                    &lt;div class=<span class="green-highlight">"avatar"</span>&gt;
                        &lt;img src=<span class="green-highlight">"' . $authorImage . '"</span> class=<span class="green-highlight">"img-responsive"</span> alt=<span class="green-highlight">"Netmatters"</span>&gt;
                    &lt;/div&gt;
                    &lt;div class=<span class="green-highlight">"info"</span>&gt;
                        &lt;strong&gt;' . <span class="green-highlight">$authorName</span> . '&lt;/strong&gt; &lt;br&gt;
                        ' . <span class="green-highlight">$date</span> . '
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            
        &lt;/div&gt;
        ';
    }

} <span class="purple-highlight">catch</span> (<span class="blue-highlight">Exception</span> <span class="orange-highlight">$e</span>) {
    <span class="purple-highlight">echo</span> <span class="green-highlight">"Error: "</span> . <span class="orange-highlight">$e</span>-&gt;<span class="blue-highlight">getMessage</span>();
}

<span class="red-highlight">?&gt;</span>

&lt;div class=<span class="green-highlight">"article-content"</span>&gt;
    &lt;div class=<span class="green-highlight">"article-blocks"</span>&gt;

    <span class="red-highlight">&lt;?php</span>
    <span class="comments">// Print or process the fetched news data</span>
        <span class="purple-highlight">if</span> (<span class="orange-highlight">$news</span>) {
            <span class="purple-highlight">foreach</span> (<span class="orange-highlight">$news</span> as <span class="orange-highlight">$article</span>) {
                <span class="purple-highlight">echo</span> <span class="green-highlight">'&lt;pre&gt;'</span> . <span class="blue-highlight">articleContent</span>(<span class="orange-highlight">$article</span>[<span class="green-highlight">"image"</span>],
                <span class="orange-highlight">$article</span>[<span class="green-highlight">"image_alt"</span>], 
                <span class="orange-highlight">$article</span>[<span class="green-highlight">"title"</span>], 
                <span class="orange-highlight">$article</span>[<span class="green-highlight">"read_time"</span>], 
                <span class="orange-highlight">$article</span>[<span class="green-highlight">"info"</span>],
                <span class="orange-highlight">$article</span>[<span class="green-highlight">"type"</span>], 
                <span class="orange-highlight">$article</span>[<span class="green-highlight">"author_image"</span>], 
                <span class="orange-highlight">$article</span>[<span class="green-highlight">"author_name"</span>], 
                <span class="orange-highlight">$article</span>[<span class="green-highlight">"date"</span>], 
                <span class="orange-highlight">$article</span>[<span class="green-highlight">"counter"</span>]) . <span class="green-highlight">'&lt;/pre&gt;'</span>;
            }
        } <span class="purple-highlight">else</span> {
            <span class="comments">// Handle error if news retrieval failed</span>
            <span class="purple-highlight">echo</span> <span class="green-highlight">"Failed to fetch news."</span>;
        }

        <span class="red-highlight">?&gt;</span>

    &lt;/div&gt;
&lt;/div&gt;



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
    <script src="javaScript/dropdown.js"></script>
</body>

</html>