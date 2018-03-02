<div class="project-intro intro">
   <div id="<?php echo $link ?>-bg" class="terrain layer1"></div>

   <?php require_once "../../html/scenery.php"; ?>

   <div class="intro-text">
      <h1><?php echo $title ?></h1>

      <div class="intro-btns <?php if (!$hasLink) echo 'no-link' ?>">
         <a href="http://www.aarongriffis.com/work/<?php echo $prev ?>" class="arrow arrow-left">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 8 8">
               <circle cx="4" cy="4" r="4"/>
               <path d="m5.5 4 h -3 m1 -1 l -1 1 l1 1"/>
            </svg>
         </a>

         <?php if ($hasLink) echo '<a href="http://www.aarongriffis.com/' . $link . '" id="website-link">View Website</a>'; ?>
      
         <a href="http://www.aarongriffis.com/work/<?php echo $next ?>" class="arrow arrow-right">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 8 8">
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
      <div id="description" class="text-card">
         <h2>The Challenge</h2>
         <div>
            <?php echo $challenge ?>
         </div>
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
            echo '<img src="/img/' . $link . "/" . $image["src"] . '">';
         }
         echo '<figcaption>' . $image["caption"] . '</figcaption></figure>';
      }
   ?>
</section>