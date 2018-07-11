<div class="project-intro intro">
   <div id="<?php echo $link ?>-bg" class="terrain layer1" role="image" alt="" aria-hidden="true" focusable=”false”></div>

   <?php require_once "../../html/scenery.php"; ?>

   <div class="intro-text btn-group inv">
      <a href="https://www.aarongriffis.com/work/<?php echo $prev ?>" class="arrow arrow-left" aria-label="Previous project">
         <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 8 8" role="img" aria-labelledby="left-arrow-title left-arrow-desc" focusable=”false”>
            <title id="left-arrow-title">Previous project</title>
            <desc id="left-arrow-desc">Arrow pointing left</desc>
            <circle cx="4" cy="4" r="4"/>
            <path d="m5.5 4 h -3 m1 -1 a2 2 0 0 1 -1 1 2 2 0 0 1 1 1"/>
         </svg>
      </a>

      <h1><?php echo $title ?></h1>

      <a href="https://www.aarongriffis.com/work/<?php echo $next ?>" class="arrow arrow-right" aria-label="Next project">
         <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 8 8" role="img" aria-labelledby="right-arrow-title right-arrow-desc" focusable=”false”>
            <title id="right-arrow-title">Next project</title>
            <desc id="right-arrow-desc">Arrow pointing right</desc>
            <circle cx="4" cy="4" r="4"/>
            <path d="m2.5 4 h3 m -1 -1 a2 2 0 0 0 1 1 2 2 0 0 0 -1 1"/>
         </svg>
      </a>
   </div>
</div>

<section id="<?php echo $link ?>">
   <h1>What it's all about</h1>
   <div class="flex-wrapper">
      <div id="description" class="text-card">
         <h2>The Challenge</h2>
         <div>
            <?php echo $challenge ?>
         </div>

         <?php
            if ($hasWebsite || $hasGithub) {
               echo '<div class="btn-group">';
               if ($hasWebsite) {
                  echo '<a href="https://www.aarongriffis.com/' . $link . '/" class="card-btn">View Website</a>';
               }

               if ($hasGithub) {
                  echo '<a href="https://github.com/AaronGriffis/' . $link . '" class="card-btn">View on GitHub</a>';
               }
               echo '</div>';
            }
            
         ?>
      </div>

      <div class="flex-wrapper">
         <div class="text-card">
            <h2>Skills Improved</h2>
            <ul>
               <?php echo $skills ?>
            </ul>
         </div>

         <div class="text-card">
            <h2>Tools Used</h2>
            <div id="toolbox">
               <?php buildTools($tools); ?>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="images">
   <h1>Gallery</h1>

   <?php 
      foreach ($images as $image) {
         echo '<figure>';
         if ( isset($image["html"]) ) {
            echo $image["html"];
         }
         else {
            echo '<img src="/img/' . $link . "/" . $image["src"] . '" alt="' . $image["alt"] .'">';
         }
         echo '<figcaption>' . $image["caption"] . '</figcaption></figure>';
      }
   ?>
</section>

<div class="btn-group">
   <a href="https://www.aarongriffis.com/work/<?php echo $prev ?>" class="arrow arrow-left" aria-label="Previous project">
      <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 8 8" role="img" aria-labelledby="bottom-left-arrow-title bottom-left-arrow-desc" focusable=”false”>
         <title id="bottom-left-arrow-title">Previous project</title>
         <desc id="bottom-left-arrow-desc">Arrow pointing left</desc>
         <circle cx="4" cy="4" r="4"/>
         <path d="m5.5 4 h -3 m1 -1 a2 2 0 0 1 -1 1 2 2 0 0 1 1 1"/>
      </svg>
   </a>

   <a href="#" id="to-top-btn" class="arrow arrow-up" aria-label="Back to top">
      <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 8 8" role="img" aria-labelledby="up-arrow-title up-arrow-desc" focusable=”false”>
         <title id="up-arrow-title">Back to top</title>
         <desc id="up-arrow-desc">Arrow pointing up</desc>
         <circle cx="4" cy="4" r="4"/>
         <path d="m4 5.5 v-3 m -1 1 a2 2 0 0 0 1 -1 2 2 0 0 0 1 1"/>
      </svg>
   </a>

   <a href="https://www.aarongriffis.com/work/<?php echo $next ?>" class="arrow arrow-right" aria-label="Next project">
      <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 8 8" role="img" aria-labelledby="bottom-right-arrow-title bottom-right-arrow-desc" focusable=”false”>
         <title id="bottom-right-arrow-title">Next project</title>
         <desc id="bottom-right-arrow-desc">Arrow pointing right</desc>
         <circle cx="4" cy="4" r="4"/>
         <path d="m2.5 4 h3 m -1 -1 a2 2 0 0 0 1 1 2 2 0 0 0 -1 1"/>
      </svg>
   </a>
</div>