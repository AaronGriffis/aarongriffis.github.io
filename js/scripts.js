$(document).ready(loaded);

function loaded() {
   var headerTimeline = new TimelineMax();
  
   TweenMax.set('.tree path:not(.trunk,.short)', {strokeDasharray: '12px', strokeDashoffset: '12px'});
   TweenMax.set('.tree path.short', {strokeDasharray: '6px', strokeDashoffset: '6px'});

   headerTimeline.staggerFrom('.terrain:not(#mountain)', 1, {onStart:animateTerrain, onStartParams:["{self}"]}, 0.25)
      .from('#header-text', 1, {css: {autoAlpha:0, top:'-10vh'}, ease:Power2.easeOut}, 0.5);
  
	var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "100%"}});
   var parallaxTween = new TimelineMax().add([
      TweenMax.to('.terrain.layer1', 1, {bottom: '-110%', ease: Linear.easeNone}),
      TweenMax.to('.terrain.layer2', 1, {bottom: '-90%', ease: Linear.easeNone}),
      TweenMax.to('.terrain.layer3', 1, {bottom: '-70%', ease: Linear.easeNone}),
      TweenMax.to('.terrain.layer4', 1, {bottom: '-50%', ease: Linear.easeNone}),
      TweenMax.to('.terrain.layer5', 1, {bottom: '-30%', ease: Linear.easeNone})
   ]);
  
   var scene = new ScrollMagic.Scene()
      .setTween(parallaxTween)
      .addTo(controller);
  
   $('.tree .trunk').click(shakeTree).hover(shakeTree);

   $('#header-btn')
      .click(function() {TweenMax.to(window, 2.5, {scrollTo:"#portfolio", ease:Power2.easeInOut}, '+=2');} )
      .mouseenter(function() {
         var anim = new TimelineLite();
         anim.to('#header-arrow path', 0.2, {y:1, ease:Power2.easeIn})
             .to('#header-arrow path', 1, {y:0, ease:Elastic.easeOut});
      });
   
   // Activate Gallery
   $('#portfolio .grid').lightGallery({
      selector: 'a',
      share: false,
      download: false,
      counter: false,
      showThumbByDefault: false
   });

   //Masonry
   $('#portfolio .grid').masonry({
      itemSelector: '.grid-item',
      fitWidth: true,
      columnWidth: '.grid-sizer'
   });
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
  
   tl.to($($this), 0.75, {
      attr: {
         viewBox:'15 0 20 40'
      },
      ease: Back.easeOut
      }, 0.8)
      .add(TweenMax.staggerTo(branches, 0.5, {strokeDashoffset: '0px', ease: Power1.easeOut}, 0.03), '-=0.25')
      .add(TweenMax.staggerTo(branches, 2, {rotation: 0, ease: Elastic.easeOut}, 0.03), '-=1.25');
}

function shakeTree() {
   var leftBranches = $('~path.left', this),
       rightBranches = $('~path.right', this),
       tl = new TimelineMax();

   tl.add(TweenMax.staggerTo(leftBranches, .1, {rotation: -5, ease: Power1.easeOut}, 0.03), 0)
     .add(TweenMax.staggerTo(rightBranches, .1, {rotation: 5, ease: Power1.easeOut}, 0.03), 0)
     .add(TweenMax.staggerTo(leftBranches, 2, {rotation: 0, ease: Elastic.easeOut}, 0.03), .1)
     .add(TweenMax.staggerTo(rightBranches, 2, {rotation: 0, ease: Elastic.easeOut}, 0.03), .1);
}