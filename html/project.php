<div class="project-intro intro">
   <div id="<?php echo $link ?>-bg" class="terrain layer1" role="image" alt="" aria-hidden="true" focusable=”false”></div>

   <?php require_once "../../html/scenery.php"; ?>

   <div class="intro-text">
      <h1><?php echo $title ?></h1>

      <div class="btn-group inv <?php if (!$hasWebsite) echo 'no-link' ?>">
         <a href="http://www.aarongriffis.com/work/<?php echo $prev ?>" class="arrow arrow-left" aria-label="Previous project">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 8 8" role="img" aria-labelledby="left-arrow-title left-arrow-desc" focusable=”false”>
               <title id="left-arrow-title">Previous project</title>
               <desc id="left-arrow-desc">Arrow pointing left</desc>
               <circle cx="4" cy="4" r="4"/>
               <path d="m5.5 4 h -3 m1 -1 l -1 1 l1 1"/>
            </svg>
         </a>

         <?php if ($hasWebsite) echo '<a href="http://www.aarongriffis.com/' . $link . '/" id="website-link">View Website</a>'; ?>
      
         <a href="http://www.aarongriffis.com/work/<?php echo $next ?>" class="arrow arrow-right" aria-label="Next project">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 8 8" role="img" aria-labelledby="right-arrow-title right-arrow-desc" focusable=”false”>
               <title id="right-arrow-title">Next project</title>
               <desc id="right-arrow-desc">Arrow pointing right</desc>
               <circle cx="4" cy="4" r="4"/>
               <path d="m2.5 4 h3 m -1 -1 l1 1 l -1 1"/>
            </svg>
         </a>
      </div>
   </div>
</div>

<section id="<?php echo $link ?>">
   <h1>What it's all about</h1>
   <div class="flex-wrapper">
      <div id="description" class="text-card<?php if($hasGithub) echo ' with-github' ?>">
         <h2>The Challenge</h2>
         <div>
            <?php echo $challenge ?>
         </div>

         <?php
            if ($hasGithub) {
               echo '<a href="https://github.com/AaronGriffis/'.$link.'" id="github-link">View on GitHub</a>';
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
   <a href="http://www.aarongriffis.com/work/<?php echo $prev ?>" class="arrow arrow-left" aria-label="Previous project">
      <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 8 8" role="img" aria-labelledby="left-arrow-title left-arrow-desc" focusable=”false”>
         <title id="left-arrow-title">Previous project</title>
         <desc id="left-arrow-desc">Arrow pointing left</desc>
         <circle cx="4" cy="4" r="4"/>
         <path d="m5.5 4 h -3 m1 -1 l -1 1 l1 1"/>
      </svg>
   </a>

   <a href="#" id="to-top-btn" class="arrow arrow-up" aria-label="Back to top">
      <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 8 8" role="img" aria-labelledby="up-arrow-title up-arrow-desc" focusable=”false”>
         <title id="up-arrow-title">Back to top</title>
         <desc id="up-arrow-desc">Arrow pointing up</desc>
         <circle cx="4" cy="4" r="4"/>
         <path d="m4 5.5 v-3 m -1 1 l1 -1 l1 1"/>
      </svg>
   </a>

   <a href="http://www.aarongriffis.com/work/<?php echo $next ?>" class="arrow arrow-right" aria-label="Next project">
      <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 8 8" role="img" aria-labelledby="right-arrow-title right-arrow-desc" focusable=”false”>
         <title id="right-arrow-title">Next project</title>
         <desc id="right-arrow-desc">Arrow pointing right</desc>
         <circle cx="4" cy="4" r="4"/>
         <path d="m2.5 4 h3 m -1 -1 l1 1 l -1 1"/>
      </svg>
   </a>
</div>