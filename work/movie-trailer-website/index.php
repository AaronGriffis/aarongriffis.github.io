<?php 
   $title = "Movie Trailer Website";
   $description = "Case study of the movie trailer website made by Aaron Griffis. It served as a practice project for building fully responsive, mobile first websites.";
   $hasWebsite = true;
   $hasGithub = true;
   $link = "movie-trailer-website";
   $prev = "preflight-poster";
   $next = "movie-collection";

   $challenge = "<p>As an assignment for one of my web design classes, I was tasked with creating a movie trailer website.</p>
                 <p>The main objective of this project was to focus on designing it to be fully responsive and mobile first.</p>
                 <p>This was the first time I worked with Sass and JavaScript plugins and I've been hooked ever since.</p>
                 <p>I experimented with some fun features like scaling and curving the banner text and animating the cast photos.</p>";
   
   $skills = "<li>Mobile-first responsive design</li>
              <li>Enhancing functionality with plugins</li>
              <li>Improving user interactivity</li>";

   $tools = array("HTML5", "CSS3", "jQuery", "Sass");

   $images = array(
      array(
         "src" => "trailer.png", 
         "alt" => "a screenshot of the top of the website showing the movie's title and a trailer",
         "caption" => "The image, banner text, and trailer all scale with the page"
      ), 
      array(
         "src" => "poster.jpg", 
         "alt" => "a movie poster featuring a board with cast member pictures",
         "caption" => "This poster served as my main inspiration, as well as a guide for my color scheme"
      ), 
      array(
         "src" => "cast.gif", 
         "alt" => "a screenshot of the second half of the website with the movie's info and a recreation of the cast board from the poster",
         "caption" => "I recreated the cast board from the poster in HTML in order for it to be responsive, and also to allow me to animate each tag individually"
      )
   );

   require_once "../../html/header.php";
   require_once "../../html/project.php";
   readfile("../../html/footer.html");
?>