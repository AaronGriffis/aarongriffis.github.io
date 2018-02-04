$(document).ready(loaded);

function loaded() {
   var introTimeline = new TimelineMax();
   var overlayTimeline = new TimelineMax({repeat:-1, delay:10});

   $('#loading-mask').show();

   TweenMax.set('.terrain.left', {attr: {viewBox:'50 0 50 50'}});
   TweenMax.set('.terrain.right', {attr: {viewBox:'-50 0 50 50'}});
   TweenMax.set('.tree:not(#logo) path:not(.trunk,.short)', {strokeDasharray: '12px', strokeDashoffset: '12px'});
   TweenMax.set('.tree:not(#logo) path.short', {strokeDasharray: '6px', strokeDashoffset: '6px'});

   $('#loading-mask').hide();

   //intro slide in animations
   introTimeline.staggerFrom('.terrain', 1, {onStart:animateTerrain, onStartParams:["{self}"]}, 0.25)
      .from('#intro-text', 1, {css: {autoAlpha:0, top:'-12vh'}, ease:Power2.easeOut}, 0.5);

   //portfolio overlay rotation
   var overlayTransition = 0.3,
       overlayPause = 4;
   $('.title-overlay').each(function(index, element) {
      overlayTimeline.to(element, overlayTransition, {opacity:0, ease:Linear.easeNone})
         .to(element, overlayTransition, {opacity:1, ease:Linear.easeNone}, "+=" + (overlayTransition + overlayPause));
   });

   //intro parallax
	var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "100%"}});
   var parallaxTween = new TimelineMax().add([
      TweenMax.to('.terrain.layer1', 1, {y: '110%', ease:Linear.easeNone}),
      TweenMax.to('.terrain.layer2', 1, {y: '90%', ease:Linear.easeNone}),
      TweenMax.to('.terrain.layer3', 1, {y: '70%', ease:Linear.easeNone}),
      TweenMax.to('.terrain.layer4', 1, {y: '50%', ease:Linear.easeNone}),
      TweenMax.to('.terrain.layer5', 1, {y: '30%', ease:Linear.easeNone})
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
   $('.tree:not(#logo) .trunk').click(shakeTree).hover(shakeTree);
   $('#logo').click(function(e) {shakeTree(e, $('#logo .trunk'));});

   //scrollTop
   $('#intro-btn').click(function() {
      $('html, body').scrollTop($('#portfolio').offset().top);
      return false;
   });

   $('body > header > nav a').click(function() {
      var href = $(this).attr('href'),
          offset = 0;

      if (href !== "#top") {
         offset = $(href).offset().top;
      }

      $('html, body').scrollTop(offset);
      return false;
   });

   //Footer
   $('#link-github').hover(function() {onFooterHover(5, "github.com/");}, offFooterHover);
   $('#link-codepen').hover(function() {onFooterHover(5, "codepen.io/");}, offFooterHover);
   $('#link-linkedin').hover(function() {onFooterHover(8, "linkedin.com/in/");}, offFooterHover);
   $('#link-email').hover(function() {onFooterHover(0, "me@", ".com");}, offFooterHover);
}


function animateTerrain(terrain) {
   var $this = terrain.target,
      trees = $('.tree', $this);

   TweenMax.to($($this), 1, {attr: {viewBox:'0 0 50 50'}, ease: Power1.easeOut});
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