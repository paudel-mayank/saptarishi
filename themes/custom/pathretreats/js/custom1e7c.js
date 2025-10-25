(function ($) {
  $(document).ready(function () {
    function updatePadding() {
      var bannerBottomHeight = $(".banner-bottom-caption").outerHeight() + 16;
      $(".homebannerSwiper .banner-captions").css(
        "padding-bottom",
        bannerBottomHeight
      );
    }

    updatePadding();
    $(window).resize(function () {
      updatePadding();
    });

    jQuery(window).scroll(function () {
      var scroll = jQuery(window).scrollTop();
      if (scroll >= 114) {
        jQuery("body").addClass("header-fixed");
      } else {
        jQuery("body").removeClass("header-fixed");
      }
    });

    // Accordion functionality for .btn-wrapper .button-fill a

    $(".btn-wrapper .button-fill a").on("click", function (e) {
      e.preventDefault();
      const headerId = $(this).attr("href");
      const targetHeader = $(headerId);
      const targetCollapse = targetHeader.next(".accordion-collapse");

      setTimeout(function () {
        if (targetCollapse.length) {
          if (!targetCollapse.hasClass("show")) {
            const collapseInstance = new bootstrap.Collapse(targetCollapse[0], {
              toggle: true,
            });
          }

          $(".accordion-collapse").each(function () {
            if (this !== targetCollapse[0] && $(this).hasClass("show")) {
              const otherInstance = bootstrap.Collapse.getInstance(this);
              otherInstance.hide();
            }
          });
        }

        $("html, body").animate(
          {
            scrollTop: targetHeader.offset().top - 150,
          },
          500
        );
      }, 300);
    });

    $(window).on("load", function () {
      if (window.location.hash) {
        var urlHash = window.location.href.split("#")[1];
        $("html,body").animate(
          {
            scrollTop: $("#" + urlHash).offset().top - 150,
          },
          3000
        );
      }
    });

    // Dynamically load accordion content and smooth scroll to it after 2 seconds
    function explode() {
      $(".hs-input").css("background-color", "black !important");

      $(".btn-wrapper .button-fill a").click(function (e) {
        e.preventDefault();
        var selectedOption2 = $(this).attr("href");
        $(".accordion-collapse.show").collapse("hide");
        $(selectedOption2).collapse("show");

        $("html, body").animate(
          {
            scrollTop:
              $(selectedOption2).prev(".accordion-header").offset().top - 150,
          },
          500
        );
      });
    }

    setTimeout(explode, 2000);

    // Header toggle functionality
    $(".hamburger").click(function () {
      $("body").toggleClass("menu-open");
      $(".navigation-wrapper").toggle(300);
    });

    $(".page-id-11 .navigation-wrapper a").click(function () {
      if ($(window).width() <= 992) {
        // Adjust the screen width as per your breakpoint
        $("body").removeClass("menu-open");
        $(".navigation-wrapper").hide(300);
      }
    });

    $(".nav-item.dropdown .caret-mobile").on("click", function () {
      $(this).siblings(".sub-menu").slideToggle();
      $(this).parent().toggleClass("drop-active");
      $(this).parent().siblings().find(".sub-menu").slideUp();
      $(this).parent().siblings().removeClass("drop-active");
    });

    // Toggle start-your section
    $(".start-your .trigger").on("click", function () {
      $(this).siblings(".show-start").slideToggle(300);
    });

    var LpSwiper = new Swiper(".LpSwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      navigation: {
        nextEl: ".lpswiper-button-next.swiper-button-next",
        prevEl: ".lpswiper-button-prev.swiper-button-prev",
      },
      breakpoints: {
        576: {
          slidesPerView: 2,
          spaceBetweenSlides: 20,
        },
        992: {
          slidesPerView: 3,
          spaceBetweenSlides: 30,
        },
      },
    });

    // Initialize Swipers
    var testimonialSwiper = new Swiper(".testimonialSwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        576: {
          slidesPerView: 2,
          spaceBetweenSlides: 20,
        },
        992: {
          slidesPerView: 3,
          spaceBetweenSlides: 30,
        },
      },
    });

    var quotesSwiper = new Swiper(".quotesSwiper", {
      navigation: {
        nextEl: ".swiper-quote-next",
        prevEl: ".swiper-quote-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          var paddedIndex = ("0" + (index + 1)).slice(-2);
          return '<span class="' + className + '">' + paddedIndex + "</span>";
        },
      },
    });

    var gallerySwiper = new Swiper(".gallerySwiper", {
      slidesPerView: 1,
      spaceBetween: 16,
      loop: true,
      navigation: {
        nextEl: ".gallery-next",
        prevEl: ".gallery-prev",
      },
      breakpoints: {
        576: {
          slidesPerView: 2,
          spaceBetweenSlides: 30,
        },
        992: {
          slidesPerView: 3,
          spaceBetweenSlides: 30,
        },
      },
    });

    /* mobilebenefitSwiper js  */

    var mobilebenefitSwiper = new Swiper(".mobilebenefitSwiper", {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });

    var benefitSwiper = new Swiper(".benefitSwiper", {
      slidesPerView: 1,
      spaceBetween: 16,
      navigation: {
        nextEl: ".swiper-benefit-next",
        prevEl: ".swiper-benefit-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          var paddedIndex = ("0" + (index + 1)).slice(-2);
          return '<span class="' + className + '">' + paddedIndex + "</span>";
        },
      },
      breakpoints: {
        576: {
          slidesPerView: 2,
          spaceBetween: 16,
        },
      },
    });

    var homebannerSwiper = new Swiper(".homebannerSwiper", {
      loop: true,
      effect: "fade",
      speed: 1500,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
    });

    // Retreat media tabs
    $(".retreats-in-media .tabs li a").click(function (e) {
      e.preventDefault();
      var index = $(this).parent().index();
      $(".retreats-in-media .tabs li").removeClass("active mobile-active");
      $(".retreats-in-media .tab-content").removeClass("active mobile-active");
      $(this).parent().addClass("active mobile-active");
      $(".retreats-in-media .tab-content")
        .eq(index)
        .addClass("active mobile-active");
    });

    $(".retreats-in-media .tab-content .cross-icon").click(function () {
      $(".retreats-in-media .tabs li").removeClass("active mobile-active");
      $(".retreats-in-media .tab-content").removeClass("active mobile-active");
    });

    // Map section functionality
    $(".points-with-content span").on("click", function () {
      $(".points-with-content").removeClass("active");
      $(this).parent().addClass("active");
      $(".map-content").removeClass("active");
      var index = $(this).parent().index();
      $(".map-content").eq(index).addClass("active");
      var mapContent = $(this).attr("data-id");
      console.log(mapContent);
      $(".map-content").removeClass("activetest");
      $("#" + mapContent).addClass("activetest");
    });

    // Language selection functionality
    function updateSelectedLanguage(selectedLang, flagSrc) {
      $(".selected-language img").attr("src", flagSrc);
      $(".selected-language").html(
        '<img src="' + flagSrc + '">' + selectedLang
      );
      $(".language-list li.selected").removeClass("selected");
      $('.language-list li[data-lang="' + selectedLang + '"]').addClass(
        "selected"
      );
    }

    var selectedLang = localStorage.getItem("selectedLang");
    var flagSrc = localStorage.getItem("flagSrc");
    if (selectedLang && flagSrc) {
      updateSelectedLanguage(selectedLang, flagSrc);
    } else {
      selectedLang = $(".language-list li.selected").data("lang");
      flagSrc = $(".language-list li.selected").data("flag");
    }

    $(".language-list li").on("click", function () {
      var langClicked = $(this).data("lang");
      var flagClicked = $(this).data("flag");
      updateSelectedLanguage(langClicked, flagClicked);
      localStorage.setItem("selectedLang", langClicked);
      localStorage.setItem("flagSrc", flagClicked);

      var newUrl;
      if (langClicked === "en") {
        newUrl = "https://pathretreats.com/";
      } else {
        newUrl = "https://pathretreats.com/path-love-deutschland-parent-page";
      }
      window.location.href = newUrl;
    });

    // Circle text animation
    var $text = $(".circle-text");
    var innerText = $text.text();
    var newText = innerText
      .split("")
      .map(function (char, i) {
        if (char.trim() !== "") {
          return `<p style="transform:rotate(${i * 11.4}deg)">${char}</p>`;
        } else {
          return char;
        }
      })
      .join("");
    $text.html(newText);

    // Select Retreat change event
    $("#selectRetreat").change(function () {
      var selectedOption1 = $(this).val();
      $(".accordion-button").addClass("collapsed");
      $(".accordion-collapse").removeClass("show").collapse("hide");
      $(selectedOption1).children(".accordion-button").removeClass("collapsed");
      $(selectedOption1)
        .siblings(".accordion-collapse")
        .addClass("show")
        .collapse("show");
      $("html, body").animate(
        {
          scrollTop: $(selectedOption1).offset().top - 150,
        },
        3000
      );
    });

    // Custom select dropdown functionality
    $(".custom-select").each(function () {
      var classes = $(this).attr("class"),
        id = $(this).attr("id"),
        name = $(this).attr("name");

      var template = '<div class="' + classes + '">';
      template +=
        '<span class="custom-select-trigger">' +
        $(this).attr("placeholder") +
        "</span>";
      template += '<div class="custom-options">';

      $(this)
        .find("option")
        .each(function () {
          template +=
            '<span class="custom-option ' +
            $(this).attr("class") +
            '" data-value="' +
            $(this).attr("value") +
            '">' +
            $(this).html() +
            "</span>";
        });

      template += "</div></div>";

      $(this).wrap('<div class="custom-select-wrapper"></div>');
      $(this).hide();
      $(this).after(template);
    });

    $(".custom-option:first-of-type").hover(
      function () {
        $(this).parents(".custom-options").addClass("option-hover");
      },
      function () {
        $(this).parents(".custom-options").removeClass("option-hover");
      }
    );

    $(".custom-select-trigger").on("click", function (event) {
      $("html").one("click", function () {
        $(".custom-select").removeClass("opened");
      });
      $(this).parents(".custom-select").toggleClass("opened");
      event.stopPropagation();
    });

    $(".custom-option").on("click", function () {
      var selectedOption = $(this).data("value");
      $(this)
        .parents(".custom-select-wrapper")
        .find("select")
        .val(selectedOption);
      $(this)
        .parents(".custom-options")
        .find(".custom-option")
        .removeClass("selection");
      $(this).addClass("selection");
      $(this).parents(".custom-select").removeClass("opened");
      $(this)
        .parents(".custom-select")
        .find(".custom-select-trigger")
        .text($(this).text());

      // Accordion functionality integrated here
      $(".accordion-button").addClass("collapsed");
      $(".accordion-collapse").removeClass("show").collapse("hide");
      var targetCollapse = $(selectedOption).next(".accordion-collapse");
      targetCollapse.collapse("show");
      $(selectedOption).find(".accordion-button").removeClass("collapsed");

      $("html, body").animate(
        {
          scrollTop: $(selectedOption).offset().top - 150,
        },
        1000
      );
    });

    // Video modal functionality
    let videoSrc;
    document.querySelectorAll(".video-btn").forEach((button) => {
      button.addEventListener("click", () => {
        videoSrc = button.dataset.src;
      });
    });

    document
      .getElementById("myModal")
      .addEventListener("shown.bs.modal", () => {
        document.getElementById("video").src =
          videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0";
      });

    document.getElementById("myModal").addEventListener("hide.bs.modal", () => {
      document.getElementById("video").src = videoSrc;
    });

    // Handle hash in URL
    function handleAccordion(selectedOption12) {
      if ($(selectedOption12).length) {
        $(".accordion-button").addClass("collapsed");
        $(".accordion-collapse").removeClass("show").collapse("hide");
        $(selectedOption12)
          .children(".accordion-button")
          .removeClass("collapsed");
        $(selectedOption12)
          .siblings(".accordion-collapse")
          .addClass("show")
          .collapse("show");
        $("html, body").animate(
          {
            scrollTop: $(selectedOption12).offset().top - 150,
          },
          500
        );
      }
    }

    $(".nav-item.dropdown ul li a").click(function (e) {
      e.preventDefault();
      var fullHref = $(this).attr("href");
      var currentPage = window.location.pathname;
      var targetPage = fullHref.split("#")[0];
      var targetId = "#" + fullHref.split("#")[1];

      if (targetPage && targetPage !== currentPage) {
        window.location.href = fullHref;
      } else {
        handleAccordion(targetId);
      }
    });

    var hash = window.location.hash;
    if (hash) {
      handleAccordion(hash);
    }
  });

  $(document).ready(function () {
    $(".retreat-member-item").each(function () {
      var $memberItem = $(this);
      var $fieldText = $memberItem.find(".member-content"); // Target the body content

      if ($fieldText.length) {
        var fullHtml = $fieldText.html(); // Store full HTML content
        var $firstParagraph = $("<div>").html(fullHtml).find("p").first(); // Extract the first <p> tag

        if ($firstParagraph.length) {
          var truncatedHtml = $firstParagraph.prop("outerHTML"); // Get first paragraph only

          // Add "Read More" only if content is longer
          if (fullHtml.length > truncatedHtml.length) {
            truncatedHtml += ' <a href="#" class="toggle-read">Read More ></a>';
            $fieldText.html(truncatedHtml);

            // Toggle Read More/Less functionality with smooth effect
            $memberItem.on("click", ".toggle-read", function (e) {
              e.preventDefault();
              var $this = $(this); // The clicked link
              var isReadMore = $this.text() === "Read More >";

              if (isReadMore) {
                $fieldText.stop(true, true).slideUp(400, "linear", function () {
                  $fieldText
                    .html(fullHtml)
                    .hide()
                    .slideDown(400, "linear")
                    .append(' <a href="#" class="toggle-read">Read Less ></a>');
                });
              } else {
                $fieldText.stop(true, true).slideUp(400, "linear", function () {
                  $fieldText
                    .html(truncatedHtml)
                    .hide()
                    .slideDown(400, "linear");
                });
              }
            });
          }
        }
      }
    });

    $(".content-item").eq(0).addClass("active");
    $(".title-item").eq(0).addClass("active");

    $(".title-item .close").click(function () {
      let index = $(this).parent().index();
      $(".content-item").removeClass("active").eq(index).addClass("active");
      $(".title-item").removeClass("active").eq(index).addClass("active");
    });
  });

  $(document).on("click", 'a[href^="#"]', function (event) {
    event.preventDefault(); // Prevent default anchor behavior

    var target = $($.attr(this, "href"));

    if (target.length) {
      // Animate scroll
      $("html, body").animate(
        {
          scrollTop: target.offset().top - 150,
        },
        1000
      );

      // Remove 'active' class from all anchor links
      $('a[href^="#"]').removeClass("active");

      // Add 'active' class to the clicked anchor
      $(this).addClass("active");
    }
  });
  $(document).ready(function () {
    const $selectMenu = $("#edit-type--HKWEswzY96Q");
    const $dropdownToggles = $(".nav-item.dropdown > .nav-link"); // Parent menu items
    const $submenuLinks = $(".sub-menu .dropdown-item"); // Submenu links

    // Allow parent menu ("Find a Retreat") to navigate normally
    $dropdownToggles.on("click", function (e) {
      const hasSubmenu = $(this).next(".sub-menu").length > 0;

      if (hasSubmenu) {
        e.preventDefault(); // Stop navigation only if submenu exists
        $(this).next(".sub-menu").slideToggle(); // Toggle submenu visibility
      }
    });

    // Allow submenu links (including "Explore Retreats") to work normally
    $submenuLinks.on("click", function (e) {
      e.stopPropagation(); // Prevent dropdown from interfering
      // Do not prevent default behavior here so links work as expected
    });

    // Function to update select menu based on URL and apply scroll if needed
    function updateSelectAndScroll() {
      const urlParams = new URLSearchParams(window.location.search);
      const typeParam = urlParams.get("type");

      if (typeParam) {
        $selectMenu.val(typeParam).trigger("change"); // Update select based on URL

        // Apply smooth scroll **only if ?type= exists in the URL**
        if ($("#find-your-retreat").length) {
          setTimeout(function () {
            $("html, body").animate(
              {
                scrollTop: $("#find-your-retreat").offset().top,
              },
              800
            ); // Smooth scroll duration (800ms)
          }, 500); // Delay of 500ms to ensure smooth scrolling
        }
      }
    }

    // Run on page load to sync the select with the URL and apply scroll only if needed
    updateSelectAndScroll();

    if ($(".retreat-info-tabs span").length) {
      $(".retreat-info-tabs span").on("click", function (event) {
        event.preventDefault();

        var targetClass = $(this).data("target"); // Read data-target attribute

        // Get heights dynamically
        var headerHeight = $(".header").outerHeight() || 0;
        var tabWrapperHeight =
          $(".retreat-info-tab-wrapper").outerHeight() || 0;
        var totalOffset = headerHeight + tabWrapperHeight;

        if ($(targetClass).length) {
          $("html, body").animate(
            {
              scrollTop: $(targetClass).offset().top - totalOffset, // Dynamic offset
            },
            {
              duration: 1000,
            }
          );
        }

        $(".retreat-info-tabs span").removeClass("active");
        $(this).addClass("active");
      });
    }
  });

  $(document).ready(function () {
    // Only run this on page-id-323
    if (
      $("body").hasClass("page-id-323") ||
      $("body").hasClass("page-id-333")
    ) {
      $(".button-fill.arrow a").each(function () {
        const currentText = $(this).text().trim();

        // Check if the button text is German
        if (currentText === "Reserviere deinen Platz") {
          // German retreat: update text and URL
          $(this).text("Interesse anmelden");
          $(this).attr(
            "href",
            "https://pathretreats.com/staffing-registration-interest-germany"
          );
        } else if (currentText === "Reserve your space") {
          // English retreat: update text and URL
          $(this).text("Register staffing interest");
          $(this).attr(
            "href",
            "https://pathretreats.com/staffing-registration-interest"
          );
        }
      });
    }
  });

  function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return rect.top < window.innerHeight && rect.bottom > 0;
  }



  function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();
    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();
    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function animateCircle($this) {
    var $dataV = parseFloat($this.data("percent")),
        $dataDeg = $dataV * 3.6,
        $round = $this.find(".round_per");

    $round.css("transform", "rotate(" + ($dataDeg + 180) + "deg)");
    $this.append('<div class="circle_inbox"><span class="percent_text"></span></div>');
    $this.prop('Counter', 0).animate({ Counter: $dataV }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            var displayValue = (now % 1 === 0) ? Math.round(now) : now.toFixed(1);
            $this.find(".percent_text").text(displayValue + "%");
        }
    });

    if ($dataV >= 51) {
        $round.css("transform", "rotate(360deg)");
        setTimeout(function () {
            $this.addClass("percent_more");
        }, 1000);
        setTimeout(function () {
            $round.css("transform", "rotate(" + ($dataDeg + 180) + "deg)");
        }, 1000);
    }
}

var animated = [];

$(window).on("scroll load", function () {
    $(".circle_percent").each(function (i) {
        var $this = $(this);
        if (isScrolledIntoView($this) && !animated[i]) {
            animated[i] = true;
            animateCircle($this);
        }
    });
});


  
})(jQuery);
