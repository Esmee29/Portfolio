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