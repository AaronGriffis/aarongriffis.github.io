<?php 
   $title = "PreFlight Poster";
   $description = "Illustration project by Aaron Griffis for the Spokane AAF PreFlight contest to create promotional branding for the event.";
   $hasWebsite = false;
   $hasGithub = false;
   $link = "preflight-poster";
   $prev = "puzzle-game";
   $next = "movie-trailer-website";

   $challenge = "<p>PreFlight is an annual student portfolio review convention presented by <a href='http://aafspokane.com/'>AAF Spokane</a> where attendees get the opportunity to recieve feedback and criticism on their work from local professional designers.</p>
                 <p>They held a competition to design the promotional poster and branding for that year's event, and this was my submission.</p>
                 <p>There were no restrictions in terms of style, so I challenged myself to emulate a cut-out paper look that I had never done before.</p>
                 <p>The paper airplanes act as an eye-catcher and a symbol for the event where professionals lead the way for students.</p>";
   
   $skills = "<li>Desinging a versatile style and branding that works online and in print</li>
              <li>Complex shading and texturing in Illustrator</li>
              <li>Creating professional mock-ups for ideal settings and products</li>";

   $tools = array("Illustrator");

   $images = array(
      array(
         "src" => "moodboard.png", 
         "alt" => "A moodboard made up of pictures of other artists' work that have a cut-out paper style",
         "caption" => "This moodboard contains artwork that has the style I was after"
      ), 
      array(
         "src" => "preflight-poster.png", 
         "alt" => "A poster with the word Preflight, the date, and the sponser logo spelled out in paper letters, as well as two paper airplanes in the middle; a small one behind a large one",
         "caption" => "My final design"
      ), 
      array(
         "src" => "combined.png", 
         "alt" => "A composite of the same design in various shapes and sizes",
         "caption" => "I had to adapt the design to fit the required sizes including a poster, Facebook banner, and Instagram logo among others"
      ), 
      array(
         "src" => "poster-mockup.png", 
         "alt" => "A mock-up image of the design on a billboard inside a mall",
         "caption" => "Poster mock-up (Mock-up template found at <a href='https://graphicburger.com/mock-ups/'>Graphic Burger</a>)"
      ), 
      array(
         "src" => "phone-mockup.png", 
         "alt" => "A mock-up of the design on a smartphone laying in the grass",
         "caption" => "Phone mock-up"
      ), 
      array(
         "src" => "laptop-mockup.png", 
         "alt" => "A mock-up of the design on a laptop sitting on a desk",
         "caption" => "Laptop mock-up"
      )
   );

   require_once "../../html/header.php";
   require_once "../../html/project.php";
   readfile("../../html/footer.html");
?>