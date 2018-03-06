$(document).ready(loaded);

function loaded() {
   var introTimeline = new TimelineMax();
   var overlayTimeline = new TimelineMax({repeat:-1, delay:10});

   $('#loading-mask').show();

   TweenMax.set('.terrain.left', {attr: {viewBox:'10 -50 50 50'}});
   TweenMax.set('.terrain.right', {attr: {viewBox:'-10 -50 50 50'}});
   TweenMax.set('.tree:not(#logo svg) path:not(.trunk,.short)', {strokeDasharray: '12px', strokeDashoffset: '12px'});
   TweenMax.set('.tree:not(#logo svg) path.short', {strokeDasharray: '6px', strokeDashoffset: '6px'});

   $('#loading-mask').hide();

   //intro slide in animations
   introTimeline.staggerFrom('.terrain', 1, {onStart:animateTerrain, onStartParams:["{self}"]}, -0.1)
      .from('.intro-text', 1, {css: {autoAlpha:0, y:'-100vh'}, ease:Power2.easeOut}, 0.5);

   //portfolio overlay rotation
   var overlayTransition = 0.35,
       overlayPause = 4;
   $('.title-overlay').each(function(index, element) {
      overlayTimeline.to(element, overlayTransition, {opacity:0, ease:Linear.easeNone})
         .to(element, overlayTransition, {opacity:1, ease:Linear.easeNone}, "+=" + (overlayTransition + overlayPause));
   });

   //intro parallax
   var introYOffsets = ['110%', '90%', '70%', '50%', '30%'];
   if ( $('.intro').hasClass('project-intro') ) {
      introYOffsets = ['220%', '180%', '140%', '100%', '60%'];
   }


	var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "100%"}});
   var parallaxTween = new TimelineMax().add([
      TweenMax.to('.terrain.layer1', 1, {y: introYOffsets[0], ease:Linear.easeNone}),
      TweenMax.to('.terrain.layer2', 1, {y: introYOffsets[1], ease:Linear.easeNone}),
      TweenMax.to('.terrain.layer3', 1, {y: introYOffsets[2], ease:Linear.easeNone}),
      TweenMax.to('.terrain.layer4', 1, {y: introYOffsets[3], ease:Linear.easeNone}),
      TweenMax.to('.terrain.layer5', 1, {y: introYOffsets[4], ease:Linear.easeNone})
   ]);
   var scene = new ScrollMagic.Scene()
      .setTween(parallaxTween)
      .addTo(controller);
  
   //Masonry
   $('#portfolio .grid').masonry({
      itemSelector: '.grid-item',
      fitWidth: true,
      columnWidth: '.grid-sizer',
      gutter: '.gutter-sizer'
   });

   //event handlers

   //shake trees
   $('.tree:not(#logo svg) .trunk').click(shakeTree).hover(shakeTree);
   $('#logo').on('mouseenter focus', function(e) {shakeTree(e, $('#logo .trunk'));});

   //scrollTo
   $('#intro-btn').click(function(e) {scroll(e, $('#portfolio').offset().top);});
   $('#to-top-btn').click(function(e) {scroll(e, 0);});
   $('body > header > nav a').click(function(e) {
      if ( $('body')[0].id === "home" ) {
         var pos = 0;
         if ($(this).data("tag") != "#top") {
            pos = $( $(this).data("tag") ).offset().top;
         }

         scroll(e, pos);
      }
   });

   //Form validation
   $('input, textarea')
      .on('invalid', function(e) {
         $(this).addClass('error');
      })
      .blur(function(e) {
         this.checkValidity();
      });

   //Footer
   $('#link-github').hover(function() {onFooterHover(5, "github.com/");}, offFooterHover);
   $('#link-codepen').hover(function() {onFooterHover(5, "codepen.io/");}, offFooterHover);
   $('#link-linkedin').hover(function() {onFooterHover(7, "linkedin.com/in/");}, offFooterHover);
   $('#link-email').hover(function() {onFooterHover(0, "me@", ".com");}, offFooterHover);
}


function animateTerrain(terrain) {
   var $this = terrain.target,
      viewbox = '0 0 50 50',
      trees = $('.tree', $this);

   TweenMax.to($($this), 1, {attr: {viewBox:viewbox}, ease: Power1.easeOut});
   if (trees.length > 0) {
      TweenMax.staggerFrom(trees, 1, {onStart:animateTree, onStartParams:["{self}"]}, 0);
   }
}

function animateTree(tree) {
   var $this = tree.target;
   var branches = $('path:not(.trunk)', $this),
       leftBranches = $('path.left', $this),
       rightBranches = $('path.right', $this),
       tl = new TimelineMax();
  
   TweenMax.set(leftBranches, {rotation: -20, transformOrigin: 'top right'});
   TweenMax.set(rightBranches, {rotation: 20});
  
   tl.from($($this), 0.75, {
      attr: {
         viewBox:'15 -40 20 40'
      },
      ease: Back.easeOut
      }, 0.8)
      .add(TweenMax.staggerTo(branches, 0.5, {strokeDashoffset: '0px', ease: Power1.easeOut}, 0.03), '-=0.25')
      .add(TweenMax.staggerTo(branches, 2, {rotation: 0, ease: Elastic.easeOut}, 0.03), '-=1.25');
}

function shakeTree(e, trunk) {
   var leftBranches,
       rightBranches,
       tl = new TimelineMax();

   if (trunk !== undefined) {
      leftBranches = $('~path.left', trunk);
      rightBranches = $('~path.right', trunk);
   }
   else {
      leftBranches = $('~path.left', this);
      rightBranches = $('~path.right', this);
   }
   

   tl.add(TweenMax.staggerTo(leftBranches, .1, {rotation: -5, ease: Power1.easeOut}, 0.03), 0)
     .add(TweenMax.staggerTo(rightBranches, .1, {rotation: 5, ease: Power1.easeOut}, 0.03), 0)
     .add(TweenMax.staggerTo(leftBranches, 2, {rotation: 0, ease: Elastic.easeOut}, 0.03), .1)
     .add(TweenMax.staggerTo(rightBranches, 2, {rotation: 0, ease: Elastic.easeOut}, 0.03), .1);
}

function onFooterHover(marginLeft, before, after) {
  $('#username').css("margin-left", marginLeft + "rem");
  $('#username-before').text(before).css("color", "inherit");
  $('#username-space').addClass("no-width");
  if (after !== undefined) {
    $('#username-after').text(after).css("color", "inherit");
  }
  else {
    $('#username-after').css("color", "transparent");
  }
}

function offFooterHover() {
  $('#username').css("margin-left","0px");
  $('#username-before').css("color", "transparent");
  $('#username-after').css("color", "transparent");
  $('#username-space').removeClass("no-width");
}

function scroll(e, pos) {
   var scrollSpeed = 1500;
   e.preventDefault();
   $('html, body').animate({scrollTop:pos}, scrollSpeed);
   return false;
}