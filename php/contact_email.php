<?php
session_start();

?>
<!--Contact Form-->
<div class="contact-container" id="contact">
        <div class="get-in-touch">
            <h3>Get In Touch</h3>
        </div>
        <form method="post" action="php/email.php">
        <div class="validation-msg-container"></div>
        <label for="first-name">First Name</label>
        <input type="text" name="first-name" id="first-name" placeholder="First Name" value="" required>

        <label for="last-name">Last Name</label>
        <input type="text" name="last-name" id="first-name" placeholder="Last Name" value="" required>
        
        <label for="email">email</label>
        <input class="email"  type="text" name="email" id="email" placeholder="Email *" value="" require>
        
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" placeholder="Subject *" value="" required>
        
        <label for="message">Message</label>
        <textarea name="message" id="message" placeholder="Message *" value="" required></textarea>
        
        <br></div>

        <button class="button-fill-submit" type="submit" id="submit-btn" >Submit</button>
              
              
              </form> 
                            
                        
                            
                                    
                                
                            
                    </div>
</div>