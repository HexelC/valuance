(function($) {
  var $splashView = $("#splash-view");

  window.onscroll = function() {
    if ($splashView.is(':offscreen')) {
      $splashView.remove();
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
  };
})(jQuery);

// Detect if an element is offscreen
jQuery.expr.filters.offscreen = function(el) {
  var rect = el.getBoundingClientRect();
  return (
    (rect.x + rect.width) < 0 
    || (rect.y + rect.height) < 0
    || (rect.x > window.innerWidth || rect.y > window.innerHeight)
  );
};