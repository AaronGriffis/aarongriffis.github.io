<?php 
   $title = "Puzzle Game";
   $description = "Case study of the java desktop application by Aaron Griffis recreating the game Noodles. A puzzle game consisting of rotating and connecting hexagons or squares.";
   $hasWebsite = false;
   $hasGithub = true;
   $link = "puzzle-game";
   $prev = "spokane-signal-box";
   $next = "preflight-poster";

   $challenge = "<p>I challenged myself to recreate my favorite puzzle phone app called <a href='https://t.co/cUny1Zlj15'>Noodles!</a> as a Java desktop application.</p>
                 <p>The game randomly generates tiles that get powered when connected to the source tile. The goal is to rotate the tiles individually in order to power them all.</p>
                 <p>I extended the gameplay of the original app by allowing the edges of the puzzle board to wrap, which drastically increases the difficulty since there's no easy starting point.</p>";
   
   $skills = "<li>Applying design patterns and object-oriented programming</li>
              <li>Knowledge of recursive algorithms</li>
              <li>Designing a scalable layout and UI with Java Swing</li>";

   $tools = array("Java");

   $images = array(
      array(
         "src" => "solving-hex.gif", 
         "alt" => "A gif showing the puzzle game with hexagon tiles being solved",
         "caption" => "The basic idea is to get all the tiles to connect by rotating them individually"
      ), 
      array(
         "src" => "solving-square.gif", 
         "alt" => "A gif showing the puzzle game with square tiles being solved",
         "caption" => "You can play with hexagonal tiles, or square ones"
      ), 
      array(
         "src" => "large.png", 
         "alt" => "A screenshot of a large puzzle with 30 rows and columns",
         "caption" => "There's a <i>large</i> variety of sizes"
      ), 
      array(
         "src" => "stranded.png", 
         "alt" => "A screenshot of the game with a blue background and tan tiles to look like an island",
         "caption" => "I also included themed color schemes such as a stranded island..."
      ), 
      array(
         "src" => "volcano.png", 
         "alt" => "A screenshot of the game with a dark red background and orange tiles to look like a volcano",
         "caption" => "...and a volcano just for funsies"
      )
   );

   require_once "../../html/header.php";
   require_once "../../html/project.php";
   readfile("../../html/footer.html");
?>