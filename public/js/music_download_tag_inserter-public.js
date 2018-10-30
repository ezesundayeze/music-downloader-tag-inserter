(function($) {
  "use strict";

  $(document).ready(function() {
    const mp3 = $("a[href$='mp3']");
    mp3.attr("download", "");
    mp3.css("color", "green");
  });
})(jQuery);
