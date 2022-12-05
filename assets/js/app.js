$("#header").prepend(
  '<div id="menu-icon"><span class="first"></span><span class="second"></span><span class="third"></span></div>'
);

$("#menu-icon").on("click", function () {
  $("nav").slideToggle();
  $(this).toggleClass("active");
});

//collapsible

$(document).ready(function () {
  // Add minus icon for collapse element which is open by default
  $(".collapse.show").each(function () {
    $(this).prev(".card-header").addClass("highlight");
  });

  // Highlight open collapsed element
  $(".card-header .btn").click(function () {
    $(".card-header").not($(this).parents()).removeClass("highlight");
    $(this).parents(".card-header").toggleClass("highlight");
  });

  $('#cf-demo').on('click', function() {
    $('.demo-popup-wrapper').addClass('show')
  })
  $('.demo-popup-close').on('click', function() {
    $('.demo-popup-wrapper').removeClass('show')
  })
  $('.demo-popup-overlay').on('click', function() {
    $('.demo-popup-wrapper').removeClass('show')
  })

});

//slider

$(document).ready(function () {
  $(".testimonial .indicators li").click(function () {
    var i = $(this).index();
    var targetElement = $(".testimonial .tabs li");
    targetElement.eq(i).addClass("active");
    targetElement.not(targetElement[i]).removeClass("active");
  });
  $(".testimonial .tabs li").click(function () {
    var targetElement = $(".testimonial .tabs li");
    targetElement.addClass("active");
    targetElement.not($(this)).removeClass("active");
  });
});
$(document).ready(function () {
  $(".slider .swiper-pagination span").each(function (i) {
    $(this)
      .text(i + 1)
      .prepend("0");
  });
});

$("#carouselExampleIndicators").carousel({
  interval: 3000,
  cycle: true,
});

// active menu

$(document).ready(function () {
  $("ul li a").click(function () {
    $("li a").removeClass("activeMenu");
    $(this).addClass("activeMenu");
  });
});

// change navbar color

$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 50) {
    } else {
      $(".black").css("background", "#ffffffb5");
    }
  });
});

//   jquery scroll counter

var counted = 0;
if ($("#counter").lenght) {
  $(window).scroll(function () {
    var oTop = $("#counter").offset().top - window.innerHeight;
    if (counted == 0 && $(window).scrollTop() > oTop) {
      $(".count").each(function () {
        var $this = $(this),
          countTo = $this.attr("data-count");
        $({
          countNum: $this.text(),
        }).animate(
          {
            countNum: countTo,
          },

          {
            duration: 2000,
            easing: "swing",
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum);
              //alert('finished');
            },
          }
        );
      });
      counted = 1;
    }
  });
}

$(".dropdown").hover(function () {
  $(".dropdown-toggle", this).trigger("click");
});

(function () {
  var t = document.createElement("script");
  (t.type = "text/javascript"),
    (t.async = !0),
    (t.src = "https://cdn.firstpromoter.com/fprom.js"),
    (t.onload = t.onreadystatechange =
      function () {
        var t = this.readyState;
        if (!t || "complete" == t || "loaded" == t)
          try {
            $FPROM.init("lnxcv05f", "." + location.host);
          } catch (t) {}
      });
  var e = document.getElementsByTagName("script")[0];
  e.parentNode.insertBefore(t, e);
})();


