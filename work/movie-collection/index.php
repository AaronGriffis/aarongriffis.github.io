<?php 
   $title = "Movie Collection Web App";
   $description = "Case study of the custom movie collection web app made by Aaron Griffis. Built with Bootstrap, jQuery, and SQL and relies on TMDB's API.";
   $hasWebsite = true;
   $hasGithub = true;
   $link = "movie-collection";
   $prev = "movie-trailer-website";
   $next = "google-doodle";

   $challenge = "<p>This was a personal project I created in my free time to help me organize my movie collection, and learn all about Bootstrap, SQL databases, and Ajax calls along the way.</p>
                 <p>I wanted an app similar to <a href='http://www.imdb.com/'>IMDB</a>, but just for the movies in my personal collection so I could quickly and easily decide what to watch, and keep track of what I've already seen.</p>
                 <p>It's essentially a souped-up CRUD application and database viewer that allows you to search and sort movies by title, year, rating, etc.</p>
                 <p>It takes advantage of <a href='https://www.themoviedb.org/'>TMDB's</a> free and public API to gather movie info.</p>";
   
   $skills = "<li>Collecting data from an API and organizing it into a database</li>
              <li>Building a Bootstrap interface</li>
              <li>Writing prepared SQL statements with PDO</li>";

   $tools = array("HTML5", "CSS3", "Bootstrap", "PHP", "jQuery", "MySQL");

   $images = array(
      array(
         "src" => "collection.png", 
         "alt" => "A table of movies with one row expanded to show additional info",
         "caption" => "Each row contains basic info, and clicking on one displays more details"
      ), 
      array(
         "src" => "add-movie.png", 
         "alt" => "a pop-up showing the form used to add a movie",
         "caption" => "The modal for adding a movie has a search function that auto-populates the inputs from TMDB"
      ), 
      array(
         "src" => "description.png", 
         "alt" => "a pop-up showing a movie poster and summary for a selected movie",
         "caption" => "I also pull movie posters and summaries from TMDB"
      )
   );

   require_once "../../html/header.php";
   require_once "../../html/project.php";
   readfile("../../html/footer.html");
?>