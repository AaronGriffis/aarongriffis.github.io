<?php 
   $title = "Google Doodle Project";
   $description = "Case study of the custom Google doodle project made by Aaron Griffis. Built with Sass and animated SVGs.";
   $hasWebsite = true;
   $hasGithub = true;
   $link = "google-doodle";
   $prev = "movie-collection";
   $next = "spokane-signal-box";

   $challenge = "<p>This assignment for one of my web design classes was to create a <a href='https://www.google.com/doodles'>Google Doodle</a> using animated SVGs.</p>
                 <p>I chose to make it autumn themed simply because it was that time of year, and I enjoy the changing colors of the leaves.</p>
                 <p>I wanted the leaves to be completely random by size, color, and even movement so I extensively used the <code>random()</code> function included in Sass to accomplish that.</p>
                 <p>I used a dash of vanilla JavaScript to create all the leaves, but otherwise everything is done in CSS.</p>";
   
   $skills = "<li>Animating SVGs with CSS transforms</li>
              <li>Randomizing CSS variables with Sass</li>
              <li>Creating SVGs with JavaScript</li>";

   $tools = array("HTML5", "CSS3", "Sass");

   $images = array(
      array(
         "src" => "animated.gif", 
         "alt" => "A gif of leaves blowing in the wind past the Google logo",
         "caption" => "After the initial animation, the leaves continue falling infinitely"
      ),
      array(
         "src" => "leaves.svg", 
         "alt" => "A row of leaves in a gradient of colors from green to red",
         "caption" => "Close-up of the leaves and the full range of colors"
      )
   );

   require_once "../../html/header.php";
   require_once "../../html/project.php";
   readfile("../../html/footer.html");
?>