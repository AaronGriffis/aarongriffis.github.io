<?php 
   $title = "Aaron Griffis";
   require_once "html/header.php";
 ?>

   <div id="loading-mask"></div>
   <div id="intro">
      <svg xmlns="http://www.w3.org/2000/svg" class="terrain right layer1" viewbox="0 0 50 50" preserveAspectRatio="xMinYMax">
         <path d="M50 0 l-35 50 h35z"/>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" class="terrain left layer1" viewbox="0 0 50 50" preserveAspectRatio="xMinYMax">
         <path d="M0 0 l35 50 h-35z"/>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" class="terrain right layer2" viewbox="0 0 50 50" preserveAspectRatio="xMinYMax">
         <path d="M50 15 h-30 q-5 0 -5 5 v30 h35z" transform="rotate(-5, 50, 15)"/>
         <path d="M20 30 h-15 q-5 0 -5 5 v15 h20z" transform="rotate(15, 0, 50)"/>
         <svg class="tree" x="20" y="-11.5" width="5" viewBox="15 0 20 40">
            <g>
               <path class="trunk" d="m25,5 l-1,32 a2,2 0 0,0 2,0 l-1,-32"/>
               <path d="m25,5 a10,10 0 0 1 -2,6" class="left"/>
               <path d="m25,8 a5,5 0 0 1 -2,3" class="left"/>
               <path d="m25,5 a15,15 0 0 0 3,9" class="right"/>
               <path d="m25,10 a6,6 0 0 0 2,3.5" class="right"/>
               <path d="m25,8 a8,8 0 0 1 -4,8" class="left"/>
               <path d="m25,10 a6,6 0 0 1 -3,6" class="left"/>
               <path d="m25,11 a9,9 0 0 0 6,8" class="right"/>
               <path d="m25,13 a8,8 0 0 0 5,6.5" class="right"/>
               <path d="m25,16 a8,8 0 0 0 3,3.5" class="right"/>
               <path d="m25,12 a9,9 0 0 1 -6,9" class="left"/>
               <path d="m25,14 a8,8 0 0 1 -5,7.5" class="left"/>
               <path d="m25,15 a7,7 0 0 1 -3,6.5" class="left"/>
               <path d="m25,22 a10,10 0 0 0 8,5" class="right"/>
               <path d="m25,23 a9,9 0 0 0 7,4.5" class="right"/>
               <path d="m25,24 a8,8 0 0 0 4,3.5" class="right"/>
               <path d="m25,18 a8,8 0 0 1 -6,8" class="left"/>
               <path d="m25,22 a7,7 0 0 1 -4,4" class="left"/>
               <path d="m25,18 a6,6 0 0 0 6,5" class="right"/>
               <path d="m25,20 a7,7 0 0 0 3,3" class="right"/>
               <path d="m25,23.5 a7,7 0 0 1 -8,5" class="left"/>
               <path d="m25,25.5 a8,8 0 0 1 -6,4" class="left"/>
               <path d="m25,27 a8,8 0 0 1 -3,2.5" class="left"/>
               <path d="m25,27 a9,9 0 0 0 9,4" class="right"/>
               <path d="m25,28 a9,9 0 0 0 8,4" class="right"/>
               <path d="m25,29 a10,10 0 0 0 6,3.5" class="right"/>
               <path d="m25,30 a7,7 0 0 0 3,2.5" class="right"/>
               <path d="m25,29 a9,9 0 0 1 -9,4" class="left"/>
               <path d="m25,30 a9,9 0 0 1 -8,4" class="left"/>
               <path d="m25,31 a10,10 0 0 1 -6,3.5" class="left"/>
               <path d="m25,32 a7,7 0 0 1 -3,2.5" class="left"/>
            </g>
         </svg>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" class="terrain left layer3" viewbox="0 0 50 50" preserveAspectRatio="xMinYMax">
         <path d="M0 25 h30 q5 0 5 5 v10 h-35z" transform="rotate(-20, 0, 40)"/>
         <path d="M0 20 h45 q5 0 5 5 v25 h-50z" transform="rotate(-5, 50, 50)"/>
         <svg class="tree" x="30" y="-7.5" width="5" viewBox="15 0 20 40">
            <g>
               <path class="trunk" d="m25,22 l-0.5,15 a1,1 0 0,0 1,0 l-0.5,-15"/>
               <path d="m25,18 a10,10 0 0 1 -2,6" class="left"/>
               <path d="m25,21 a5,5 0 0 1 -2,3" class="left short"/>
               <path d="m25,18 a15,15 0 0 0 3,9" class="right"/>
               <path d="m25,23 a6,6 0 0 0 2,3.5" class="right short"/>
               <path d="m25,21 a8,8 0 0 1 -4,8" class="left"/>
               <path d="m25,23 a6,6 0 0 1 -3,6" class="left"/>
               <path d="m25,24 a9,9 0 0 0 6,8" class="right"/>
               <path d="m25,26 a8,8 0 0 0 5,6.5" class="right"/>
               <path d="m25,29 a8,8 0 0 0 3,3.5" class="right short"/>
               <path d="m25,25 a9,9 0 0 1 -6,9" class="left"/>
               <path d="m25,27 a8,8 0 0 1 -5,7.5" class="left"/>
               <path d="m25,28 a7,7 0 0 1 -3,6.5" class="left"/>
            </g>
         </svg>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" class="terrain right layer4" viewbox="0 0 50 50" preserveAspectRatio="xMinYMax">
         <path d="M50 12 h-5 q-5 0 -5 5 v18 h10z" transform="rotate(10, 50, 35)"/>
         <path d="M20 36 h-10 q-5 0 -5 5 v9 h15z" transform="rotate(5, 5, 50)"/>
         <path d="M50 20 h-31 q-5 0 -5 5 v25 h36z" transform="rotate(25, 14, 50)"/>
         <svg class="tree" x="12.5" y="6" width="7" viewBox="15 0 20 40">
            <g transform="translate(50) scale(-1, 1)">
               <path class="trunk" d="m25,22 l-0.5,15 a1,1 0 0,0 1,0 l-0.5,-15"/>
               <path d="m25,18 a10,10 0 0 1 -2,6" class="left"/>
               <path d="m25,21 a5,5 0 0 1 -2,3" class="left short"/>
               <path d="m25,18 a15,15 0 0 0 3,9" class="right"/>
               <path d="m25,23 a6,6 0 0 0 2,3.5" class="right short"/>
               <path d="m25,21 a8,8 0 0 1 -4,8" class="left"/>
               <path d="m25,23 a6,6 0 0 1 -3,6" class="left"/>
               <path d="m25,24 a9,9 0 0 0 6,8" class="right"/>
               <path d="m25,26 a8,8 0 0 0 5,6.5" class="right"/>
               <path d="m25,29 a8,8 0 0 0 3,3.5" class="right short"/>
               <path d="m25,25 a9,9 0 0 1 -6,9" class="left"/>
               <path d="m25,27 a8,8 0 0 1 -5,7.5" class="left"/>
               <path d="m25,28 a7,7 0 0 1 -3,6.5" class="left"/>
            </g>
         </svg>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" class="terrain left layer5" viewbox="0 0 50 50" preserveAspectRatio="xMinYMax">
         <path d="M0 20 h25 q5 0 5 5 v25 h-30z" transform="rotate(10, 0, 20)"/>
         <path d="M25 35 h15 q5 0 5 5 v10 h-20z" transform="rotate(-15, 45, 50)"/>
         <svg class="tree" x="33" y="6" width="7" viewBox="15 0 20 40">
            <g>
               <path class="trunk" d="m25,5 l-1,32 a2,2 0 0,0 2,0 l-1,-32"/>
               <path d="m25,5 a10,10 0 0 1 -2,6" class="left"/>
               <path d="m25,8 a5,5 0 0 1 -2,3" class="left"/>
               <path d="m25,5 a15,15 0 0 0 3,9" class="right"/>
               <path d="m25,10 a6,6 0 0 0 2,3.5" class="right"/>
               <path d="m25,8 a8,8 0 0 1 -4,8" class="left"/>
               <path d="m25,10 a6,6 0 0 1 -3,6" class="left"/>
               <path d="m25,11 a9,9 0 0 0 6,8" class="right"/>
               <path d="m25,13 a8,8 0 0 0 5,6.5" class="right"/>
               <path d="m25,16 a8,8 0 0 0 3,3.5" class="right"/>
               <path d="m25,12 a9,9 0 0 1 -6,9" class="left"/>
               <path d="m25,14 a8,8 0 0 1 -5,7.5" class="left"/>
               <path d="m25,15 a7,7 0 0 1 -3,6.5" class="left"/>
               <path d="m25,22 a10,10 0 0 0 8,5" class="right"/>
               <path d="m25,23 a9,9 0 0 0 7,4.5" class="right"/>
               <path d="m25,24 a8,8 0 0 0 4,3.5" class="right"/>
               <path d="m25,18 a8,8 0 0 1 -6,8" class="left"/>
               <path d="m25,22 a7,7 0 0 1 -4,4" class="left"/>
               <path d="m25,18 a6,6 0 0 0 6,5" class="right"/>
               <path d="m25,20 a7,7 0 0 0 3,3" class="right"/>
               <path d="m25,23.5 a7,7 0 0 1 -8,5" class="left"/>
               <path d="m25,25.5 a8,8 0 0 1 -6,4" class="left"/>
               <path d="m25,27 a8,8 0 0 1 -3,2.5" class="left"/>
               <path d="m25,27 a9,9 0 0 0 9,4" class="right"/>
               <path d="m25,28 a9,9 0 0 0 8,4" class="right"/>
               <path d="m25,29 a10,10 0 0 0 6,3.5" class="right"/>
               <path d="m25,30 a7,7 0 0 0 3,2.5" class="right"/>
               <path d="m25,29 a9,9 0 0 1 -9,4" class="left"/>
               <path d="m25,30 a9,9 0 0 1 -8,4" class="left"/>
               <path d="m25,31 a10,10 0 0 1 -6,3.5" class="left"/>
               <path d="m25,32 a7,7 0 0 1 -3,2.5" class="left"/>
            </g>
         </svg>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" class="terrain right layer6" viewbox="0 0 50 50" preserveAspectRatio="xMinYMax">
         <path d="M50 25 h-10 q-5 0 -5 5 v20 h15z" transform="rotate(-5, 50, 25)"/>
         <path d="M42 40 h-25 q-5 0 -5 5 v5 h30z" transform="rotate(-10, 42, 50)"/>
         <svg class="tree" x="25" y="9.5" width="9" viewBox="15 0 20 40">
            <g>
               <path class="trunk" d="m25,5 l-1,32 a2,2 0 0,0 2,0 l-1,-32"/>
               <path d="m25,5 a10,10 0 0 1 -2,6" class="left"/>
               <path d="m25,8 a5,5 0 0 1 -2,3" class="left"/>
               <path d="m25,5 a15,15 0 0 0 3,9" class="right"/>
               <path d="m25,10 a6,6 0 0 0 2,3.5" class="right"/>
               <path d="m25,8 a8,8 0 0 1 -4,8" class="left"/>
               <path d="m25,10 a6,6 0 0 1 -3,6" class="left"/>
               <path d="m25,11 a9,9 0 0 0 6,8" class="right"/>
               <path d="m25,13 a8,8 0 0 0 5,6.5" class="right"/>
               <path d="m25,16 a8,8 0 0 0 3,3.5" class="right"/>
               <path d="m25,12 a9,9 0 0 1 -6,9" class="left"/>
               <path d="m25,14 a8,8 0 0 1 -5,7.5" class="left"/>
               <path d="m25,15 a7,7 0 0 1 -3,6.5" class="left"/>
               <path d="m25,22 a10,10 0 0 0 8,5" class="right"/>
               <path d="m25,23 a9,9 0 0 0 7,4.5" class="right"/>
               <path d="m25,24 a8,8 0 0 0 4,3.5" class="right"/>
               <path d="m25,18 a8,8 0 0 1 -6,8" class="left"/>
               <path d="m25,22 a7,7 0 0 1 -4,4" class="left"/>
               <path d="m25,18 a6,6 0 0 0 6,5" class="right"/>
               <path d="m25,20 a7,7 0 0 0 3,3" class="right"/>
               <path d="m25,23.5 a7,7 0 0 1 -8,5" class="left"/>
               <path d="m25,25.5 a8,8 0 0 1 -6,4" class="left"/>
               <path d="m25,27 a8,8 0 0 1 -3,2.5" class="left"/>
               <path d="m25,27 a9,9 0 0 0 9,4" class="right"/>
               <path d="m25,28 a9,9 0 0 0 8,4" class="right"/>
               <path d="m25,29 a10,10 0 0 0 6,3.5" class="right"/>
               <path d="m25,30 a7,7 0 0 0 3,2.5" class="right"/>
               <path d="m25,29 a9,9 0 0 1 -9,4" class="left"/>
               <path d="m25,30 a9,9 0 0 1 -8,4" class="left"/>
               <path d="m25,31 a10,10 0 0 1 -6,3.5" class="left"/>
               <path d="m25,32 a7,7 0 0 1 -3,2.5" class="left"/>
            </g>
         </svg>
         <svg class="tree" x="36" y="-6.5" width="9" viewBox="15 0 20 40">
            <g>
               <path class="trunk" d="m25,22 l-0.5,15 a1,1 0 0,0 1,0 l-0.5,-15"/>
               <path d="m25,18 a10,10 0 0 1 -2,6" class="left"/>
               <path d="m25,21 a5,5 0 0 1 -2,3" class="left short"/>
               <path d="m25,18 a15,15 0 0 0 3,9" class="right"/>
               <path d="m25,23 a6,6 0 0 0 2,3.5" class="right short"/>
               <path d="m25,21 a8,8 0 0 1 -4,8" class="left"/>
               <path d="m25,23 a6,6 0 0 1 -3,6" class="left"/>
               <path d="m25,24 a9,9 0 0 0 6,8" class="right"/>
               <path d="m25,26 a8,8 0 0 0 5,6.5" class="right"/>
               <path d="m25,29 a8,8 0 0 0 3,3.5" class="right short"/>
               <path d="m25,25 a9,9 0 0 1 -6,9" class="left"/>
               <path d="m25,27 a8,8 0 0 1 -5,7.5" class="left"/>
               <path d="m25,28 a7,7 0 0 1 -3,6.5" class="left"/>
            </g>
         </svg>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" class="terrain left layer6" viewbox="0 0 50 50" preserveAspectRatio="xMinYMax">
         <path d="M0 30 h15 q5 0 5 5 v15 h-20z" transform="rotate(-10, 20, 50)"/>
         <path d="M18 40 h15 q5 0 5 5 v10 h-20z" transform="rotate(15, 18, 40)"/>
         <svg class="tree" x="2" y="-2" width="11" viewBox="15 0 20 40">
            <g>
               <path class="trunk" d="m25,5 l-1,32 a2,2 0 0,0 2,0 l-1,-32"/>
               <path d="m25,5 a10,10 0 0 1 -2,6" class="left"/>
               <path d="m25,8 a5,5 0 0 1 -2,3" class="left"/>
               <path d="m25,5 a15,15 0 0 0 3,9" class="right"/>
               <path d="m25,10 a6,6 0 0 0 2,3.5" class="right"/>
               <path d="m25,8 a8,8 0 0 1 -4,8" class="left"/>
               <path d="m25,10 a6,6 0 0 1 -3,6" class="left"/>
               <path d="m25,11 a9,9 0 0 0 6,8" class="right"/>
               <path d="m25,13 a8,8 0 0 0 5,6.5" class="right"/>
               <path d="m25,16 a8,8 0 0 0 3,3.5" class="right"/>
               <path d="m25,12 a9,9 0 0 1 -6,9" class="left"/>
               <path d="m25,14 a8,8 0 0 1 -5,7.5" class="left"/>
               <path d="m25,15 a7,7 0 0 1 -3,6.5" class="left"/>
               <path d="m25,22 a10,10 0 0 0 8,5" class="right"/>
               <path d="m25,23 a9,9 0 0 0 7,4.5" class="right"/>
               <path d="m25,24 a8,8 0 0 0 4,3.5" class="right"/>
               <path d="m25,18 a8,8 0 0 1 -6,8" class="left"/>
               <path d="m25,22 a7,7 0 0 1 -4,4" class="left"/>
               <path d="m25,18 a6,6 0 0 0 6,5" class="right"/>
               <path d="m25,20 a7,7 0 0 0 3,3" class="right"/>
               <path d="m25,23.5 a7,7 0 0 1 -8,5" class="left"/>
               <path d="m25,25.5 a8,8 0 0 1 -6,4" class="left"/>
               <path d="m25,27 a8,8 0 0 1 -3,2.5" class="left"/>
               <path d="m25,27 a9,9 0 0 0 9,4" class="right"/>
               <path d="m25,28 a9,9 0 0 0 8,4" class="right"/>
               <path d="m25,29 a10,10 0 0 0 6,3.5" class="right"/>
               <path d="m25,30 a7,7 0 0 0 3,2.5" class="right"/>
               <path d="m25,29 a9,9 0 0 1 -9,4" class="left"/>
               <path d="m25,30 a9,9 0 0 1 -8,4" class="left"/>
               <path d="m25,31 a10,10 0 0 1 -6,3.5" class="left"/>
               <path d="m25,32 a7,7 0 0 1 -3,2.5" class="left"/>
            </g>
         </svg>
         <svg class="tree" x="17" y="7" width="12" viewBox="15 0 20 40">
            <g transform="translate(50) scale(-1, 1)">
               <path class="trunk" d="m25,22 l-0.5,15 a1,1 0 0,0 1,0 l-0.5,-15"/>
               <path d="m25,18 a10,10 0 0 1 -2,6" class="left"/>
               <path d="m25,21 a5,5 0 0 1 -2,3" class="left short"/>
               <path d="m25,18 a15,15 0 0 0 3,9" class="right"/>
               <path d="m25,23 a6,6 0 0 0 2,3.5" class="right short"/>
               <path d="m25,21 a8,8 0 0 1 -4,8" class="left"/>
               <path d="m25,23 a6,6 0 0 1 -3,6" class="left"/>
               <path d="m25,24 a9,9 0 0 0 6,8" class="right"/>
               <path d="m25,26 a8,8 0 0 0 5,6.5" class="right"/>
               <path d="m25,29 a8,8 0 0 0 3,3.5" class="right short"/>
               <path d="m25,25 a9,9 0 0 1 -6,9" class="left"/>
               <path d="m25,27 a8,8 0 0 1 -5,7.5" class="left"/>
               <path d="m25,28 a7,7 0 0 1 -3,6.5" class="left"/>
            </g>
         </svg>
      </svg>

      <div id="intro-text">
         <h1>Hi, I'm Aaron Griffis</h1>
         <h2>and I enjoy making things</h2>
         <button id="intro-btn">
            <span>
               <p>Take a look at some of<br/>the things I've made</p>
               <svg xmlns="http://www.w3.org/2000/svg" id="intro-arrow" viewbox="0 0 8 8">
                  <circle cx="4" cy="4" r="4"/>
                  <path d="m4 2.5 v3 m-1 -1 l1 1 l 1 -1"/>
               </svg>
            </span>
         </button>
      </div>
   </div>
            
   <section id="portfolio">
      <h1>Some of the Things I've Made</h1>
      <div class="grid">
         <div class="grid-sizer"></div>
         <div class="gutter-sizer"></div>
         <a href="/work/movie-collection" class="grid-item grid-item--height2 grid-item--width2">
            <img class="thumb-md" src="img/portfolio/thumbs/movies-thumb-md.gif">
            <img class="thumb-sm" src="img/portfolio/thumbs/movies-thumb-sm.gif">
            <div class="title-overlay">
               <h2 class="title">Movie Collection Web App</h1>
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
         <a href="/work/google-doodle" class="grid-item grid-item--width2">
            <img class="thumb-md" src="img/portfolio/thumbs/google-thumb-md.gif">
            <img class="thumb-sm" src="img/portfolio/thumbs/google-thumb-sm.gif">
            <div class="title-overlay">
               <h2 class="title">Google Doodle</h1>
               <div class="tags">
                  <p>Website</p>
                  <p>Design</p>
                  <p>Sass</p>
                  <p>SVG</p>
                  <p>Animation</p>
               </div>
            </div>
         </a>
         <a href="/work/spokane-signal-box" class="grid-item">
            <img class="thumb-md" src="img/portfolio/thumbs/spokane-thumb-md.png">
            <img class="thumb-sm" src="img/portfolio/thumbs/spokane-thumb-sm.png">
            <div class="title-overlay">
               <h2 class="title">Spokane Signal Box</h1>
               <div class="tags">
                  <p>Design</p>
                  <p>Illustrator</p>
               </div>
            </div>
         </a>
         <a href="/work/puzzle-game" class="grid-item grid-item--height2">
            <img class="thumb-md" src="img/portfolio/thumbs/noodles-thumb-md.gif">
            <img class="thumb-sm" src="img/portfolio/thumbs/noodles-thumb-sm.gif">
            <div class="title-overlay">
               <h2 class="title">Puzzle Game</h1>
               <div class="tags">
                  <p>Desktop</p>
                  <p>Java</p>
                  <p>Swing</p>
               </div>
            </div>
         </a>
         <a href="/work/preflight-poster" class="grid-item">
            <img class="thumb-md" src="img/portfolio/thumbs/preflight-thumb-md.png">
            <img class="thumb-sm" src="img/portfolio/thumbs/preflight-thumb-sm.png">
            <div class="title-overlay">
               <h2 class="title">Preflight Poster</h1>
               <div class="tags">
                  <p>Design</p>
                  <p>Illustrator</p>
               </div>
            </div>
         </a>
         <a href="/work/movie-trailer-website" class="grid-item grid-item--width2">
            <img class="thumb-md" src="img/portfolio/thumbs/budapest-thumb-md.gif">
            <img class="thumb-sm" src="img/portfolio/thumbs/budapest-thumb-sm.gif">
            <div class="title-overlay">
               <h2 class="title">Movie Trailer Website</h1>
               <div class="tags">
                  <p>Website</p>
                  <p>jQuery</p>
                  <p>Sass</p>
               </div>
            </div>
         </a>
         <a href="/work/scorekeeper" class="grid-item grid-item--width2">
            <img class="thumb-md" src="img/portfolio/thumbs/scorekeeper-thumb-md.gif">
            <img class="thumb-sm" src="img/portfolio/thumbs/scorekeeper-thumb-sm.gif">
            <div class="title-overlay">
               <h2 class="title">Scorekeeper Web App</h1>
               <div class="tags">
                  <p>Website</p>
                  <p>jQuery</p>
               </div>
            </div>
         </a>
      </div>
   </section>

   <section id="about">
      <h1>A Bit About Me</h1>
      <div class="flex-wrapper">
         <div id="blurb" class="card">
            <h2>What do you get when you cross a programmer with a designer?
               <br>
               <br>
               ...Me, apparently.
            </h2>
            <div>
               <p>I love experimenting with interactive design, and I have the technical skills to bring my ideas to life.</p>
               <p>Recently, I've been having a lot of fun learning as much as I can about modern web development technologies, and <a href="https://codepen.io/aarongriffis/pens/public/">getting my hands dirty</a> playing around with Sass, jQuery, and responsive design.</p>
               <p>Before discovering my passion for web development, I dabbled in C# applications, and before that it was JavaFX and <a href="">Swing</a>.</p>
               <p>As a recent <a href="https://www.ewu.edu">EWU</a> graduate with a computer science degree and design minor in hand, I'm eager to begin my career so please don't hesitate to <a href="#contact">contact me</a> below if you're interested in hiring me!</p>
            </div>
         </div>

         <div class="flex-wrapper">
            <div class="card">
               <h2>My Toolbox</h2>
               <div id="toolbox">
                  <a href="" target="_blank" class="icon-link">
                     <svg aria-labelledby="simpleicons-html5-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-html5-icon">HTML5</title><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"/></svg>
                  </a>
                  <a href="" target="_blank" class="icon-link">
                     <svg aria-labelledby="simpleicons-css3-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-css3-icon">CSS3</title><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z"/></svg>
                  </a>
                  <a href="" target="_blank" class="icon-link">
                     <svg aria-labelledby="simpleicons-javascript-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-javascript-icon">JavaScript</title><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"/></svg>
                  </a>
                  <a href="" target="_blank" class="icon-link">
                     <svg aria-labelledby="simpleicons-github-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-github-icon">GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                  </a>
                  <a href="" target="_blank" class="icon-link">
                     <svg aria-labelledby="simpleicons-sass-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-sass-icon">Sass</title><path d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zM9.615 15.998c.175.645.156 1.248-.024 1.792l-.065.18c-.024.061-.052.12-.078.176-.14.29-.326.56-.555.81-.698.759-1.672 1.047-2.09.805-.45-.262-.226-1.335.584-2.19.871-.918 2.12-1.509 2.12-1.509v-.003l.108-.061zm9.911-10.861c-.542-2.133-4.077-2.834-7.422-1.645-1.989.707-4.144 1.818-5.693 3.267C4.568 8.48 4.275 9.98 4.396 10.607c.427 2.211 3.457 3.657 4.703 4.73v.006c-.367.18-3.056 1.529-3.686 2.925-.675 1.47.105 2.521.615 2.655 1.575.436 3.195-.36 4.065-1.649.84-1.261.766-2.881.404-3.676.496-.135 1.08-.195 1.83-.104 2.101.24 2.521 1.56 2.43 2.1-.09.539-.523.854-.674.944-.15.091-.195.12-.181.181.015.09.091.09.21.075.165-.03 1.096-.45 1.141-1.471.045-1.29-1.186-2.729-3.375-2.7-.9.016-1.471.091-1.875.256-.03-.045-.061-.075-.105-.105-1.35-1.455-3.855-2.475-3.75-4.41.03-.705.285-2.564 4.8-4.814 3.705-1.846 6.661-1.335 7.171-.21.733 1.604-1.576 4.59-5.431 5.024-1.47.165-2.235-.404-2.431-.615-.209-.225-.239-.24-.314-.194-.12.06-.045.255 0 .375.12.3.585.825 1.396 1.095.704.225 2.43.359 4.5-.45 2.324-.899 4.139-3.405 3.614-5.505l.073.067z"/></svg>
                  </a>
                  <a href="" target="_blank" class="icon-link">
                     <svg aria-labelledby="simpleicons-bootstrap-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-bootstrap-icon">Bootstrap</title><path d="M20 0H4C1.793.006.006 1.793 0 4v16c0 2.2 1.8 4 4 4h16c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4zm-2.187 16.855c-.2.482-.517.907-.923 1.234-.42.34-.952.62-1.607.82-.654.203-1.432.305-2.333.305H6.518v-14h6.802c1.258 0 2.266.283 3.02.86.76.58 1.138 1.444 1.138 2.61 0 .705-.172 1.31-.518 1.81-.344.497-.84.886-1.48 1.156v.046c.854.18 1.515.585 1.95 1.215s.658 1.426.658 2.387c0 .538-.104 1.05-.3 1.528l.025.027zm-2.776-3.45c-.41-.375-.986-.558-1.73-.558H8.985v4.368h4.334c.74 0 1.32-.192 1.73-.58.41-.385.62-.934.62-1.64-.007-.69-.21-1.224-.62-1.59h-.017zm-.6-2.823c.396-.336.59-.817.59-1.444 0-.704-.175-1.204-.53-1.49-.352-.285-.86-.433-1.528-.433h-4v3.863h4c.583 0 1.08-.17 1.464-.496z"/></svg>
                  </a>
                  <a href="" target="_blank" class="icon-link">
                     <svg aria-labelledby="simpleicons-codepen-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-codepen-icon">CodePen</title><path d="M24 8.182l-.018-.087-.017-.05c-.01-.024-.018-.05-.03-.075-.003-.018-.015-.034-.02-.05l-.035-.067-.03-.05-.044-.06-.046-.045-.06-.045-.046-.03-.06-.044-.044-.04-.015-.02L12.58.19c-.347-.232-.796-.232-1.142 0L.453 7.502l-.015.015-.044.035-.06.05-.038.04-.05.056-.037.045-.05.06c-.02.017-.03.03-.03.046l-.05.06-.02.06c-.02.01-.02.04-.03.07l-.01.05C0 8.12 0 8.15 0 8.18v7.497c0 .044.003.09.01.135l.01.046c.005.03.01.06.02.086l.015.05c.01.027.016.053.027.075l.022.05c0 .01.015.04.03.06l.03.04c.015.01.03.04.045.06l.03.04.04.04c.01.013.01.03.03.03l.06.042.04.03.01.014 10.97 7.33c.164.12.375.163.57.163s.39-.06.57-.18l10.99-7.28.014-.01.046-.037.06-.043.048-.036.052-.058.033-.045.04-.06.03-.05.03-.07.016-.052.03-.077.015-.045.03-.08v-7.5c0-.05 0-.095-.016-.14l-.014-.045.044.003zm-11.99 6.28l-3.65-2.44 3.65-2.442 3.65 2.44-3.65 2.44zm-1.034-6.674l-4.473 2.99L2.89 8.362l8.086-5.39V7.79zm-6.33 4.233l-2.582 1.73V10.3l2.582 1.726zm1.857 1.25l4.473 2.99v4.82L2.89 15.69l3.618-2.417v-.004zm6.537 2.99l4.474-2.98 3.613 2.42-8.087 5.39v-4.82zm6.33-4.23l2.583-1.72v3.456l-2.583-1.73zm-1.855-1.24L13.042 7.8V2.97l8.085 5.39-3.612 2.415v.003z"/></svg>
                  </a>
                  <a href="" target="_blank" class="icon-link">
                     <svg aria-labelledby="simpleicons-adobeillustrator-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-adobeillustrator-icon">Adobe Illustrator</title><path d="M0 .3v23.4h24V.3H0zm1 1h22v21.4H1V1.3zm7.325 12.25l-.792 2.998c-.017.083-.05.102-.148.102H5.917c-.1 0-.115-.033-.1-.148l2.84-9.945c.05-.18.082-.338.098-.833 0-.066.033-.1.083-.1h2.096c.066 0 .1.018.116.1l3.185 10.794c.017.083 0 .132-.083.132h-1.65c-.083 0-.132-.02-.148-.086l-.825-3.015H8.322zm2.788-1.625c-.28-1.106-.94-3.528-1.188-4.7h-.017c-.214 1.17-.742 3.15-1.155 4.7h2.36zm4.5-5.558c0-.643.445-1.023 1.023-1.023.61 0 1.023.412 1.023 1.023 0 .66-.43 1.023-1.04 1.023-.6 0-1.01-.363-1.01-1.023zm.112 2.274c0-.08.033-.11.116-.11h1.57c.088 0 .12.033.12.116v7.895c0 .083-.016.116-.115.116h-1.55c-.1 0-.133-.05-.133-.13V8.64z"/></svg>
                  </a>
                  <a href="" target="_blank" class="icon-link">
                     <svg aria-labelledby="simpleicons-php-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-php-icon">PHP</title><path d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29z"/><path d="M12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751z"/><path d="M17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z"/></svg>
                  </a>
               </div>
            </div>

            <div class="card">
               <h2>Fun Facts</h2>
               <ul id="fun-facts">
                  <li>Born and raised in the Pacific Northwest</li>
                  <li>I once made a <a href="https://i.imgur.com/79OMLtH.jpg" target="_blank">fireplace out of cardboard</a> for my college dorm room</li>
                  <li>In my free time, I enjoy knitting 
                     <a href="https://i.imgur.com/3K6KMwT.jpg" target="_blank">hats</a>, 
                     <a href="https://i.imgur.com/Q0B03wN.jpg" target="_blank">socks</a>, 
                     <a href="https://i.imgur.com/h1pbpIj.jpg" target="_blank">pillows</a>, and
                     <a href="https://i.imgur.com/SazAUc8.jpg" target="_blank">blankets</a> <small>(I know, I lead a very exciting life)</small>
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
         <input type="hidden" name="_next" value="//aarongriffis.com/thanks">
         
         <div class="input-group">
            <label for="name">Name <span>(required)</span></label>
            <input type="text" id="name" name="name" placeholder="John Doe" required>
         </div>
         
         <div class="input-group">
            <label for="email">Email <span>(required)</span></label>
            <input type="email" id="email" name="email" placeholder="johndoe@address.com" required>
         </div>
         
         <div class="input-group">
            <label for="message">Message <span>(required)</span></label>
            <textarea id="message" name="message" placeholder="Hello!" required></textarea>
         </div>
         
         <input type="submit" value="SEND">
      </form>
   </section>

<?php readfile("html/footer.html"); ?>