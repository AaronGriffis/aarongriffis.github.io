<?php 
   $isHome = true;
   require_once "html/header.php";
 ?>

   <div id="homepage-intro" class="intro">
      <?php require_once "html/scenery.php"; ?>

      <div class="intro-text">
         <h1>Hi, I'm Aaron Griffis</h1>
         <h2>Web designer and programmer</h2>
         <a href="http://www.aarongriffis.com/#portfolio" id="intro-btn">
            <span>View my work</span>
            <svg xmlns="http://www.w3.org/2000/svg" id="intro-arrow" viewbox="0 0 8 8" alt="" aria-hidden="true" focusable=”false”>
               <circle cx="4" cy="4" r="4"/>
               <path d="m4 2.5 v3 m -1 -1 a2 2 0 0 1 1 1 2 2 0 0 1 1 -1"/>
            </svg>
         </a>
      </div>
   </div>
            
   <section id="portfolio">
      <h1>Websites &amp; Illustrations</h1>
      <div class="grid">
         <div class="grid-sizer"></div>
         <div class="gutter-sizer"></div>
         <a href="http://www.aarongriffis.com/work/movie-collection/" class="grid-item grid-item--height2 grid-item--width2">
            <img class="thumb-md" src="img/thumbs/movies-thumb-md.gif" alt="" aria-hidden="true">
            <img class="thumb-sm" src="img/thumbs/movies-thumb-sm.gif" alt="" aria-hidden="true">
            <div class="title-overlay">
               <h2 class="title">Movie Collection Web App</h2>
               <div class="tags">
                  <p>Website</p>
                  <p>PHP</p>
                  <p>jQuery</p>
                  <p>API</p>
                  <p>SQL</p>
                  <p>Bootstrap</p>
               </div>
            </div>
         </a>
         <a href="http://www.aarongriffis.com/work/google-doodle/" class="grid-item grid-item--width2">
            <img class="thumb-md" src="img/thumbs/google-thumb-md.gif" alt="" aria-hidden="true">
            <img class="thumb-sm" src="img/thumbs/google-thumb-sm.gif" alt="" aria-hidden="true">
            <div class="title-overlay">
               <h2 class="title">Google Doodle</h2>
               <div class="tags">
                  <p>Website</p>
                  <p>Design</p>
                  <p>Sass</p>
                  <p>SVG</p>
                  <p>Animation</p>
               </div>
            </div>
         </a>
         <a href="http://www.aarongriffis.com/work/spokane-signal-box/" class="grid-item">
            <img class="thumb-md" src="img/thumbs/spokane-thumb-md.png" alt="" aria-hidden="true">
            <img class="thumb-sm" src="img/thumbs/spokane-thumb-sm.png" alt="" aria-hidden="true">
            <div class="title-overlay">
               <h2 class="title">Spokane Signal Box</h2>
               <div class="tags">
                  <p>Design</p>
                  <p>Illustrator</p>
               </div>
            </div>
         </a>
         <a href="http://www.aarongriffis.com/work/puzzle-game/" class="grid-item grid-item--height2">
            <img class="thumb-md" src="img/thumbs/noodles-thumb-md.gif" alt="" aria-hidden="true">
            <img class="thumb-sm" src="img/thumbs/noodles-thumb-sm.gif" alt="" aria-hidden="true">
            <div class="title-overlay">
               <h2 class="title">Puzzle Game</h2>
               <div class="tags">
                  <p>Desktop</p>
                  <p>Java</p>
                  <p>Swing</p>
               </div>
            </div>
         </a>
         <a href="http://www.aarongriffis.com/work/preflight-poster/" class="grid-item">
            <img class="thumb-md" src="img/thumbs/preflight-thumb-md.png" alt="" aria-hidden="true">
            <img class="thumb-sm" src="img/thumbs/preflight-thumb-sm.png" alt="" aria-hidden="true">
            <div class="title-overlay">
               <h2 class="title">PreFlight Poster</h2>
               <div class="tags">
                  <p>Design</p>
                  <p>Illustrator</p>
               </div>
            </div>
         </a>
         <a href="http://www.aarongriffis.com/work/movie-trailer-website/" class="grid-item grid-item--width2">
            <img class="thumb-md" src="img/thumbs/budapest-thumb-md.gif" alt="" aria-hidden="true">
            <img class="thumb-sm" src="img/thumbs/budapest-thumb-sm.gif" alt="" aria-hidden="true">
            <div class="title-overlay">
               <h2 class="title">Movie Trailer Website</h2>
               <div class="tags">
                  <p>Website</p>
                  <p>jQuery</p>
                  <p>Sass</p>
               </div>
            </div>
         </a>
      </div>
   </section>

   <section id="about">
      <h1>A Bit About Me</h1>
      <div class="flex-wrapper">
         <div id="description" class="text-card">
            <h2>What do you get when you cross a programmer with a designer?
               <br>
               <br>
               ...Me, apparently.
            </h2>
            <div>
               <p>I love experimenting with interactive design, and I have the technical skills to bring my ideas to life.</p>
               <p>Recently, I've been having a lot of fun learning as much as I can about modern web development technologies, and <a href="https://codepen.io/aarongriffis/pens/public/">getting my hands dirty</a> playing around with jQuery, Sass, and responsive design.</p>
               <p>Before discovering my passion for web development, I dabbled in C# applications, and before that it was JavaFX and Swing.</p>
               <p>As a recent <a href="https://www.ewu.edu">EWU</a> graduate with a computer science degree and design minor in hand, I'm eager to begin my career so please don't hesitate to <a href="#contact">contact me</a> below if you're interested in hiring me!</p>
            </div>
         </div>

         <div class="flex-wrapper">
            <div class="text-card">
               <h2>My Toolbox</h2>
               <div id="toolbox">
                  <?php buildTools( $tools = array("HTML5", "CSS3", "Bootstrap", "PHP", "Sass", "jQuery", "GitHub", "Illustrator", "Java") ); ?>
               </div>
            </div>

            <div class="text-card">
               <h2>Fun Facts</h2>
               <ul>
                  <li>Born and raised in the Pacific Northwest, and I enjoy the great outdoors (if you couldn't tell by now)</li>
                  <li>I custom-built my own PC <a href="/img/computer.jpg" data-featherlight>from parts</a></li>
                  <li>I once made a <a href="/img/fireplace.jpg" data-featherlight>fireplace out of cardboard</a> for my college dorm room</li>
                  <li>In my free time, I enjoy knitting 
                     <a href="/img/hat.jpg" data-featherlight>hats</a>, 
                     <a href="/img/socks.jpg" data-featherlight>socks</a>, 
                     <a href="/img/pillow.jpg" data-featherlight>pillows</a>, and
                     <a href="/img/blanket.jpg" data-featherlight>blankets</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>

   <section id="contact">
      <h1>Get In Touch</h1>
      <form action="https://formspree.io/me@aarongriffis.com" method="POST">
         <p>Whether you'd like to discuss my work, request my r&#233;sum&#233; or references, or would just like to chat, I'd be happy to hear from you!</p>
         <input type="hidden" aria-hidden="true" name="_next" value="http://www.aarongriffis.com/thanks">
         <input type="text" name="_gotcha" style="display:none" />

         <div class="input-group">
            <label for="name">Name <span>(required)</span></label>
            <input type="text" id="name" name="name" placeholder="John Doe" required>
         </div>
         
         <div class="input-group">
            <label for="email">Email <span>(required)</span></label>
            <input type="email" id="email" name="_replyto" placeholder="johndoe@address.com" required>
         </div>
         
         <div class="input-group">
            <label for="message">Message <span>(required)</span></label>
            <textarea id="message" name="message" placeholder="Hello!" required></textarea>
         </div>
         
         <input type="submit" value="SEND">
      </form>
   </section>

<?php readfile("html/footer.html"); ?>