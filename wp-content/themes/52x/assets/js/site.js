//=require picturefill/dist/picturefill.min.js

//=require formstone/dist/js/core.js
//=require formstone/dist/js/background.js
//=require formstone/dist/js/checkpoint.js
//=require formstone/dist/js/cookie.js
//require formstone/dist/js/lightbox.js
//=require formstone/dist/js/mediaquery.js
//=require formstone/dist/js/navigation.js
//=require formstone/dist/js/swap.js
//=require formstone/dist/js/transition.js

document.createElement( "picture" );

(function($) {

  Formstone.Ready(function() {

    var $window;
    var $header;
    var $homeHeader;

    var checkpointOptions = {
      offset: 200,
      reverse: true,
      // intersect: 'bottom-center'
    };
    var checkpointOptionsLine = {
      offset: 300,
      reverse: true,
      // intersect: 'bottom-bottom'
    };

    $(".js-background").background();
    $(".js-checkpoint, [data-checkpoint-animation]").checkpoint(checkpointOptions);
    $(".js-navigation").navigation();

    $window = $(window);
    $header = $(".js-header");
    $homeHeader = $(".home_header");

    //

    $window.on("scroll", function() {
      var scrollTop = $window.scrollTop();

      if (scrollTop > 1) {
        $header.addClass("stuck");
      } else {
        $header.removeClass("stuck");
      }
    }).trigger("scroll");

    //

    $(".js-back_button").on("click", function(e) {
      if (window.history.length > 1) {
        e.preventDefault();
        e.stopPropagation();

        window.history.back();
      }
    });

    //

    $(".js-section_trigger").on("click", function(e) {
      var index = $(e.currentTarget).data("target");
      var hash = $(e.currentTarget).data("hash");

      window.location.hash = hash;

      $('.home_section[data-section]').removeClass("active visible");
      $('.home_section[data-section="section_' + index + '"]').addClass("active");

      $(".home_section .fs-checkpoint").checkpoint("destroy");
      $(".home_section [data-checkpoint-animation]").checkpoint(checkpointOptions);
      $(".js-svg_container").checkpoint(checkpointOptionsLine);

      $window.trigger("scroll");

      $.cookie("52x-section-hash", hash);

      setTimeout(function() {
        scrollToElement("#start");
        $('.home_section[data-section="section_' + index + '"]').addClass("visible");
      }, 250);
    });

    //

    if ($homeHeader.length) {
      function setHomeSection() {
        var hash = window.location.hash.replace("#", "");

        if (hash.trim() !== '') {
          $homeHeader.find('[data-hash="' + hash + '"]').trigger("click");
        }
      }

      $(window)
        .scrollTop(0)
        .on("load", setHomeSection)
        .on("hashchange", setHomeSection);
    }

    //

    $(".js-scroll_to").on("click", onScrollTo);

    function onScrollTo(e) {
  		e.preventDefault();
      e.stopPropagation();

  		var $target = $(e.delegateTarget),
  			  id = $target[0].hash;

  		scrollToElement(id);

      $(document).trigger("scroll_to");
  	}

  	function scrollToElement(id) {
  		var $to = $(id);

  		if ($to.length) {
  			var offset = $to.offset();

  			scrollToPosition(offset.top);
  		}
  	}

  	function scrollToPosition(top) {
      // var offset = ($(window).width() >= 980) ? 80 : 60;
      var offset = 65;

      $("html, body").on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function() {
         $("html, body").stop();
      });

  		$("html, body").animate({ scrollTop: top - offset + 1 }, 750, "swing", function() {
        $("html, body").off("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove");
      });
  	}

    // $(".js-lightbox").lightbox({
    //   mobile: true
    // });
    // $(".js-swap").swap();
    //
    // $(window).on("scroll", function() {
    //   var scrolTop = $(window).scrollTop();
    //
    //   if (scrolTop > 10) {
    //     $(".header").addClass("scrolled");
    //   } else {
    //     $(".header").removeClass("scrolled");
    //   }
    // });

  });

})(jQuery);
