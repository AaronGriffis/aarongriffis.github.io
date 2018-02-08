<?php 
   if ( !isset($title) ) {
      $title = "Aaron Griffis";
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111373198-1"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
   
     gtag('config', 'UA-111373198-1');
   </script>
   
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title><?php echo $title; ?></title>

   <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
   <link rel="manifest" href="/img/favicon/manifest.json">
   <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#3a471f">
   <link rel="shortcut icon" href="/img/favicon/favicon.ico">
   <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
   <meta name="theme-color" content="#fff8e7">

   <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
   <svg id="vignette" viewbox="0 0 2 2" preserveAspectRatio="none">
      <defs>
         <filter id="vig-blur">
            <feGaussianBlur stdDeviation="0.2" />
         </filter>

         <mask id="vig-mask">
            <rect fill="#fff" width="100%" height="100%" />
            <path fill="#000" d="M0 1 Q0 0 1 0 T2 1 T1 2 T0 1" filter="url(#vig-blur)" />
         </mask>
      </defs>
      
      <path d="M-1 -1 H4 V4 H-4 Z" mask="url(#vig-mask)" />
   </svg>

   <header>
      <nav>
         <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/#portfolio">Work</a></li>
         </ul>
         <svg id="logo" class="tree" viewBox="15 15 20 25">
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
         <ul>
            <li><a href="/#about">About</a></li>
            <li><a href="/#contact">Contact</a></li>
         </ul>
      </nav>
   </header>