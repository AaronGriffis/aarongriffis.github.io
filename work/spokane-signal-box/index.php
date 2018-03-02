<?php 
   $title = "Spokane Signal Box";
   $description = "";
   $hasLink = false;
   $link = "spokane-signal-box";
   $prev = "google-doodle";
   $next = "puzzle-game";

   $challenge = "<p>Spokane Arts, in partnership with the City of Spokane, put out a call to local artists looking for submissions to brighten up the traffic 
                 <a href='/img/signal-box-examples.jpg' data-featherlight>signal boxes</a> around downtown Spokane, and this was my submission.</p>
                 <p>I decided to feature Riverfront Park which is in the heart of downtown Spokane, and my personal favorite place in the city.</p>
                 <p>I drew inspiration from the park's most iconic attractions and aimed to capture their likeness in a light-hearted and whimsical style to represent the joy I feel when I visit.</p>";
   
   $skills = "<li>Working through the design process from mood boards and sketches to a finished product</li>
              <li>Advanced Illustrator techniques like warping</li>
              <li>Keeping a large project organized with layers and labels</li>";

   $tools = array("Illustrator");

   $images = array(
      array(
         "html" => '<iframe frameborder="0" allowvr allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel="" src="https://sketchfab.com/models/74941c42d301463ba42b0a142ffc6a94/embed?autospin=0.2&amp;preload=1"></iframe>', 
         "caption" => "Here's a mockup of what my design would look like on a signal box"
      ), 
      array(
         "src" => "moodboard.png", 
         "caption" => "I established a color scheme and collected various sources of inspiration into a mood board"
      ), 
      array(
         "src" => "sketch.jpg", 
         "caption" => "I sketched out Spokane's most recognizable landmarks into a single composition"
      ), 
      array(
         "src" => "spokane-signal-box.png", 
         "caption" => "This is what the final design looks like layed out flat. The background is a map of downtown Spokane"
      )
   );

   require_once "../../html/header.php";
   require_once "../../html/project.php";
   readfile("../../html/footer.html");
?>